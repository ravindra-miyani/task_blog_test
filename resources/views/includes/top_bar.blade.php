<div class="blog-master-heading">
  <div class="container">
    <nav class="nav blog-nav">
      @if(Auth::check())
      <a class="nav-link" href="/">Groups</a>
      <a class="nav-link" href="{{ route('create_group') }}">Create Group</a>
      <a class="nav-link" href="{{ route('bio.details') }}">Custom Package </a>
      <a class="nav-link ml-auto" href="#">{{ Auth::user()->name }}</a>
      <a class="nav-link ml-auto" href="{{ route('logout') }}">Logout</a>
      @else
      <a class="nav-link" href="{{ route('login')}}">Login</a>
      <a class="nav-link" href="{{ route('register')}}">Sign up</a>
      @endif 
    </nav> 
  </div>
</div>
