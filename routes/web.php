<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobsController;
use App\Http\Controllers\CompanyController;
use App\Models\Job;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});
Route::get('/about', function () {
    return view('/about');
});

Route::get('/home', function () {
    return view('home');
})->name('home');

Route::get('/userpanel', function () {
    $user_id=Auth::id();
    $jobs= Job::where('user_id', $user_id)->get();
    return view('userpanel',['jobs'=>$jobs]);
})->middleware(['auth', 'verified'])->name('userpanel');

Route::get('/dashboard', function () {
    $user_id=Auth::id();
    $jobs= Job::where('user_id', $user_id)->get();
    return view('dashboard',['jobs'=>$jobs]);
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
 
    //yo dutia route lai middleware me add karon only login user leh yo field visit garna paunu para
    Route::get('/add_job', [JobsController::class,'add_job_form'])->name('add_jobs');
    Route::post('/add_job', [JobsController::class,'create_job'])->name('add_jobs');

    //my jobs showing route
    Route::get('/my_jobs', [JobsController::class,'my_jobs'])->name('my_company_jobs');

    //apply job route
    Route::get('/apply-job/{id}', [JobsController::class,'apply_job_form'])->name('apply_job_form');
    Route::post('/apply-job', [JobsController::class,'apply_job'])->name('apply_job');

    //application apply route
    Route::get('/job/{id}/applications', [JobsController::class,'applications'])->name('application');
    
    Route::get('/all.applications', [JobsController::class,'showAllApplication'])->name('all_applications');

    //route for normal user looking their applied job
    Route::get('/my-jobs', [JobsController::class, 'index'])->name('my_jobs');


    //show users in super-admin panel 
    Route::get('/userpanel', [JobsController::class, 'showAdminPanel'])->name('userpanel');

    //details of the normal users showing--super admin panel
    Route::get('/userpanel/userdetails/{user_id}', [JobsController::class, 'showNormalUsers'])->name('userdetails');

    //show company users--super admin panel
    Route::get('/userpanel/companyuserdetails/{user_id}', [JobsController::class, 'showCompanyUsers'])->name('companyuserdetails');

    //delete users--- super admin panel
    Route::delete('/userpanel/delete/{id}', [JobsController::class, 'destroy'])->name('userpanel.delete_user');

    //job edit and delete
    Route::delete('/jobs/{id}', [JobsController::class, 'deleteJob'])->name('delete_job');
    Route::get('/jobs/{id}/edit', [JobsController::class, 'edit'])->name('jobs.edit');
    Route::put('/jobs/{id}', [JobsController::class, 'update'])->name('jobs.update');


    //create company
    Route::get('/company/create', [CompanyController::class, 'create'])->name('create_company_form');
    Route::post('/company', [CompanyController::class, 'store'])->name('store_company');







});

//job list route
Route::get('/jobs', [JobsController::class,'list_job'])->name('jobs');
Route::get('/job/{id}', [JobsController::class,'single_job'])->name('show_job');

Route::get('/companies', [JobsController::class,'list_company'])->name('companies');






require __DIR__.'/auth.php';

