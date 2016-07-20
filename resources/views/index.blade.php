<!DOCTYPE html>
<html>
<head>
	<title>Online CV Generator</title>
	<link rel="stylesheet" type="text/css" href="/css/materialize.min.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="/css/style.css">
	<script type="text/javascript" src="/js/jquery.js"></script>
<script type="text/javascript" src="/js/materialize.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/js/materialize.min.js"></script>
<script type="text/javascript" src="//platform.linkedin.com/in.js">
    api_key: 778qjo8w5h2zvl
    authorize: true
    onLoad: onLinkedInLoad
</script>
</head>
<body>
	<ul id="dropdown1" class="dropdown-content">
    @if(Auth::check())
              <li><a href="/userarea/{{Auth::user()->id}}">Profile</a></li>
              <li><a class="buttonCreate" href="/select">New Resume</a></li>
              <li class="divider"></li>
              <li><a href="{{ url('/logout') }}">Log out</a></li>
    @else
    @endif
	</ul>
<div class="mainWrapper">
<div id="popBack"></div>
<div id="loginPage">
<form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                        {!! csrf_field() !!}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input type="email" class="form-control" name="email" value="{{ old('email') }}">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input type="password" class="form-control" name="password">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember"> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-sign-in"></i>Login
                                </button>

                                <a class="btn btn-link" href="{{ url('/password/reset') }}">Forgot Your Password?</a>
                            </div>
                        </div>
                    </form>
</div>
<div id="registerPage">
	<form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                        {!! csrf_field() !!}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="name" value="{{ old('name') }}">

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input type="email" class="form-control" name="email" value="{{ old('email') }}">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input type="password" class="form-control" name="password">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input type="password" class="form-control" name="password_confirmation">

                                @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-user"></i>Register
                                </button>
                            </div>
                        </div>
                    </form>
</div>

<div class="container">

  <nav class="transparent">
    <div class="row">
	    <div class="nav-wrapper">
	      <a href="#!" class="brand-logo"><b>RESUME</b>CREATOR</a>
	      <ul class="right">
	      @if (Auth::guest())
	        <li style="margin-right: 15px;"><a id="loginButton" class="waves-effect waves-light btn transparent">Login</a></li>
	        <li><a id="registerButton" class="waves-effect waves-light btn transparent">Register</a></li>
	      @else
	     <ul class="right hide-on-med-and-down">
      			<li><a class="dropdown-button userBar" href="#!" data-activates="dropdown1"><img src="images/resumes.png">{{ Auth::user()->name }} <span class="caret"></span><i class="material-icons right">arrow_drop_down</i></a></li>
   		 </ul>
	      
	       <li style="margin-right: 15px; margin-top: 10px;"><a class="logoutButton" href="{{ url('/logout') }}">Logout</a></li>
	      </ul>
	      @endif
	    </div>
	  </div>
  </nav>
	<div class="mainMiddle">
		 <div class="container">
		 <div class="verticalAlign"></div>
		 <div class="verticalAlign"></div>
		  	<h5>Create Beautiful Professional Resumes Free</h5>
		  	<div class="row">
		  	<div class="verticalAlign"></div>
		  	<div class="verticalAlign"></div>
                @if(Auth::check())
		  		<a class="buttonCreate" href="/select"><div class="createStart col m6 offset-m3 col s12">Let's create Resume</div></a>
                @else
                <div class="createStart col m6 offset-m3 col s12">Register and start creating</div>
                @endif
		  	<div class="verticalAlign"></div>
		  	</div>
		  </div>
	</div>
<div class="row col m10 s12 imgResume">
	<img src="images/resumes.png" class="col s12">
</div>
</div>
</div>
<div class="footerWrapper">
<footer class="page-footer white">
	<div class="container">
	<div class="row">
		<div class="col m2 counter s6">
		<span><b>200467</b><br><span>Resumes Created</span></span>
		</div>
		<div class="col m2 s6 counter">
		<span><b>320467</b><br><span>Downloads</span></span>
		</div>
		<div class="col m5 s12">
			<ul>
				<li>Azerbaycanca</li>
				<li>English</li>
				<li>Deutshc</li>
				<li>Espanol</li>
				<li>Italiano</li>
				<li>Turkce</li>
				<li>Portugales</li>
			</ul>
		</div>
		<div class="col m3 s12 copyright">
		<span>Resume Creator © 2016. All rights reserved</span>
		</div>
	</div>
	</div>
          <div class="footer-copyright">
            <div class="container">
            © 2014 Copyright Text
            <a class="black-text right" href="#!">More Links</a>
            </div>
          </div>
        </footer>
</div>


<script type="in/Login"></script>

<script type="text/javascript">
$('#loginButton').click(function(){

      $("#popBack").fadeIn();
      $("#loginPage").fadeIn();
      
      return false;

    });

    $('#popBack').click(function(){

      $("#popBack").fadeOut();
      $("#loginPage").fadeOut();

      return false;

    });
    $('#registerButton').click(function(){

      $("#popBack").fadeIn();
      $("#registerPage").fadeIn();
      
      return false;

    });

    $('#popBack').click(function(){

      $("#popBack").fadeOut();
      $("#registerPage").fadeOut();

      return false;

    });
    // Setup an event listener to make an API call once auth is complete
    function onLinkedInLoad() {
        IN.Event.on(IN, "auth", getProfileData);
    }

    // Handle the successful return from the API call
    function onSuccess(data) {
        var userName = data['firstName'];
        var userSurname = data['lastName'];
        var userEmail = data['emailAdress'];
        var userImg = data['pictureUrl'];
        console.log(data);
        
    }

    // Handle an error response from the API call
    function onError(error) {
        console.log(error);
    }

    // Use the API call wrapper to request the member's basic profile data
    function getProfileData() {
    	
    	
        IN.API.Raw("https://api.linkedin.com/v1/people/~?format=json:(firstName,lastName,emailAddress,pictureUrl)").result(onSuccess).error(onError);
        
    }

</script>

</body>
</html>