<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    @if(session('message'))
          {{session('message')}}
    @endif()

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                </div>

                @foreach($jobs as $job)
                <div style="color:white;">
                    <h2>{{$job->title}}</h2>
                    <div>
                        Company: {{$job->user->company->name ?? 'Unknown'}} 
                        <!--company ra job sanga relation create gare xaina so hami user ko model hudai company ko relation garna parxa-->
                    </div>

                    <div>
                        Category: {{$job->category->title}} 
                       <!-- here we use category relation (category) is MODEL-->
                    
                    </div>
                    
                    <div>Apply Before: {{$job->deadline-> format('js M Y')}}</div>

                    <a href="{{route('applications',$job->id)}}">Applications</a>
                </div>
                @endforeach


                @if(Auth::user()->role == 3)
                <div class="p-6 text-gray-900 dark:text-gray-100">
                 <a href=""> {{ __("hellow super admin!") }}</a> 
                </div>
                @endif
            </div>
        </div>
    </div>
</x-app-layout>



