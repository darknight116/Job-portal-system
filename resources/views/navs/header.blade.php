 <header>
    <div class="logo">
    <a href="#">Career Junction</a>
    </div>
    <nav>
      <ul>
        <li><a href="{{route('home')}}">Home</a></li>
        @if(Auth::check())
            <li><a href="{{route('jobs')}}">Jobs</a></li>
        @else
              <li><a href="#" onclick="alert('Please log in to access jobs!!');">Jobs</a></li>
        @endif

        @if(Auth::check())
        <li><a href="{{route('companies')}}">Companies</a></li>
        @else
              <li><a href="#" onclick="alert('Please log in to access company!!');">Company</a></li>
        @endif
        <li><a href="{{url('/about')}}">About Us</a></li>
        <li><a href="#">Contact</a></li>

        @if (Route::has('login'))
                    @auth
                       <li> <a href="{{ url('/userpanel') }}"> Dashboard</a></li>
                    @else
                       <li><a href="{{ route('login') }}" >Log in</a></li> 

                        @if (Route::has('register'))
                           <li><a href="{{ route('register') }}">Register</a></li> 
                        @endif
                    @endauth
            @endif


      </ul>
    </nav>
  </header>