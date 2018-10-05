<!--Navigation bar-->
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="/"><img src="img/logo.jpg"><span>TCA</span></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="{{ url('/') }}">Home</a></li>
        <li><a href="#about">About</a></li>
        <li><a href="#courses">Courses</a></li>
        <li><a href="{{ url('/dashboard') }}">Recruitment</a></li>
        <!--li><a href="#">Blog</a></li-->
        <li><a href="#contact">Contact</a></li>
        <!--li><a href="#" data-target="#login" data-toggle="modal">Sign in</a></li-->
      </ul>
    </div>
  </div>
</nav>
<!--/ Navigation bar-->