<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CreateJobRequest;
use App\Models\Category;
use App\Models\Job;
use App\Models\Company;
use App\Models\User;
use App\Http\Requests\ApplyJobsRequest;
use Auth;
use App\Models\Application;
use App\Http\Requests\UpdateJobRequest;

class JobsController extends Controller
{
    public function add_job_form()
    {
        $categories = Category::all();
        return view('addjob', ['categories' => $categories]);
    }

    public function create_job(CreateJobRequest $request)
    {        //grab gareko ho data 
      if(Auth::check() && Auth::user()->role==2)
      {
        $category = $request->category;
        $title = $request->title;
        $type = $request->type;
        $description = $request->description;
        $salary = $request->salary;
        $deadline = $request->deadline;
        

        $photo_name = null;
        if ($request->hasFile('photo') && $request->file('photo')->isValid()){
            $photo = $request->file('photo'); 
            $photo_name = $photo->hashName();//hashname is create unique name for my photo name 
            $photo->move('uploads/', $photo_name);
        }

        $user_id = Auth::id();


        $job = Job::create([
           'user_id' => $user_id,
           'category_id' => $category,
           'title' => $title,
           'type' => $type,
           'descripton' => $description,
           'salary' => $salary,
           'deadline' => $deadline,
           'photo' =>  $photo_name,
        ]);

        return redirect('/jobs')->with('message', 'Job Successfully Add!');

      }
          
      else
      {
        return redirect('/dashboard')->with('message', 'Eroor Your are not login');

      }
    }

    public function list_job(Request $request)
    {
        //$jobs = Job::all();
        $category_id = $request->category;
        $search = $request->search;
        if($category_id && empty($search))
        {
        $jobs = Job::where('category_id', $category_id)->SimplePaginate(3);
        }

        elseif(empty($category_id) && ($search))
        {
          $jobs= Job::where('title', 'like', '%'.$search.'%')->paginate(3);
        }
        elseif($category_id && $search)
        {
          $jobs= Job::where('title', 'like', '%'.$search.'%')->paginate(3);
        }
        else{
          $jobs = Job::SimplePaginate(6);
        }
        
        $query = Job::query();
        $query->with(['application' => function($query) {
          $query->where('user_id', auth()->id());
      }]);
        $categories = Category::all();
        return view('jobs', ['jobs' => $jobs, 'categories' => $categories]);
    }

    public function single_job($id)
    {
        $job = Job::find($id);
        return view('singlejob', ['job' => $job]);
    }
       
    public function apply_job_form($id)
    {
      $job = Job::find($id);
      return view('applyjob', ['job'=> $job]);
    }

    public function apply_job(Request $request)
    {
      $job_id= $request->input('job_id');

      $cover_letter = $request->input('cover_letter');

      $file_name = null;
      if($request->hasFile('attachment') && $request->file('attachment')->isValid()){
       $attachment = $request->file('attachment');
       $file_name = $attachment->hashName();
       $attachment->move('uploads/', $file_name);
      }
      
      $user_id = Auth::id();

       $application = Application:: create([
        'job_id' => $job_id, 
        'user_id'=> $user_id,
        'cover_letter' => $cover_letter,
        'attachment' => $file_name,
       ]);
        if($application){

          return redirect('/home')->with('message', 'Application sent successfully!');
        }
        else{

          return redirect('/home')->with('message', 'Application  unsuccessful!');
        }
      }
      
    //   public function index()
    // {
    //     $user = auth()->user();
    //     $applications = $user->applications()->with('job')->get();
    //     return view('application', compact('applications'));
    // }

    public function list_company()
    {
      // Retrieve all companies from the database
    $companies = Company::all();
    //dd($companies);
    
    // Pass the $companies variable to the view
    return view('company', ['companies' => $companies]);

    }

    public function my_jobs()
    {
      $user_id=Auth::id();
      $jobs= Job::where('user_id', $user_id)->get();
      return view('myjobs', ["jobs" => $jobs]);
    }

    // Controller method to show admin panel
public function showAdminPanel()
{
    // Retrieve counts of normal users and company users
    $normalUserCount = User::where('role', 1)->count();
    $companyUserCount = User::where('role', 2)->count();

    // Retrieve lists of normal users and company users
    $normalUsers = User::where('role', 1)->get();
    $companyUsers = User::where('role', 2)->get();

    // Pass data to the view
    return view('userpanel', compact('normalUserCount', 'companyUserCount', 'normalUsers', 'companyUsers'));
}

public function showNormalUsers()
{
    $normalUsers = User::where('role', 1)->get();
    return view('userdetails', compact('normalUsers'));
}

public function showCompanyUsers()
{
    $companyUsers = User::where('role', 2)->get();
    return view('companyuserdetails', compact('companyUsers'));
}

public function destroy($id)
{
    $user = User::findOrFail($id);
    $user->delete();

    return redirect()->back()->with('success', 'User deleted successfully.');
}

public function deleteJob($id)
{
    $job = Job::findOrFail($id);
    // Add similar permission checks as in the editJob method

    // If the user has permission, delete the job
    $job->delete();

    // return redirect()->route('my_jobs')->with('success', 'Job deleted successfully.');
    return redirect()->back()->with('success', 'Job deleted successfully.');
}


//job update
public function edit($id)
    {
        $job = Job::findOrFail($id);
        $categories = Category::all();
        return view('edit_job', compact('job', 'categories'));
    }

    public function update(Request $request, $id)
    {
        $job = Job::findOrFail($id);

        $request->validate([
            'title' => 'required|string|max:255',
            'descripton' => 'required',
            'category_id' => 'required|integer',
            'deadline' => 'required|date',
        ]);

        $job->update($request->all());

        return redirect()->route('my_company_jobs')->with('success', 'Job updated successfully');
    }


    public function showAllApplication()//company user ko applications check garni
    {
    $applications = Application::all();
    if($application->isEmpty()){
    return view('application', ['applications' => $applications]); // Pass an empty collection
    }

    // // Check if any applications exist
    // if ($application->isEmpty()) {
    //     // Handle case where no applications exist
    //     return view('application', ['applications' => collect()]); // Pass an empty collection
    // }
    }

    public function index()
{
    $user = auth()->user();
    $jobs = $user->company()->with('name')->get();
    $applications = $user->application()->with('job')->get();
    return view('applications', compact('applications', 'jobs'));
}


    public function applications($id)
    {
        $job = Job::find($id);
        $applications = Application::where('job_id', $id)->get();
        return view('userapplications', ['applications' => $applications, 'job' => $job]);
    }
  

}
