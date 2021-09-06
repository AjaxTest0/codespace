
   <nav class="nv" >
    <div class="wrapper">
      <div class="logo"><a href="#">LOGO</a></div>
      <input type="radio" name="slider" id="menu-btn">
      <input type="radio" name="slider" id="close-btn">
      <ul class="nav-links" style="margin-top: 15px;">
        <label for="close-btn" class="btn close-btn"><i class="fas fa-times"></i></label>
        <li><a href="{{ route('ihome') }}">Home</a></li>
        <li>
          @auth
          @if(Auth::user()->profile->profile_type == 'client')
          <a href="{{route('post_job')}}">Post a Job</a>
          @elseif(Auth::user()->profile->profile_type == 'freelancer')
          <a href="{{route('find_job')}}">Find a Job</a>
          @endif
          <a href="{{ route('logout') }}" class="btn-success">Logout</a>
          @endauth
          @guest
          <a href="{{ route('login') }}">Login</a>
          <a href="{{ route('register') }}">Register</a>
          @endguest
        </li>
      </ul>
      <label for="menu-btn" class="btn menu-btn"><i class="fas fa-bars"></i></label>
    </div>
  </nav>
  <!-- header end -->


  <!-- home page content -->


