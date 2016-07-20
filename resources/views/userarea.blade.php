@extends('layout')

@section('content')
	<div class="container">
	<hr>
		<div class="row">
			<div class="col m3">
				    <ul class="collection">
				      <li class="collection-item pointer" id="resumes">Created resumes</li>
				      <li class="collection-item pointer" id="infos">Personal information</li>
				      <li class="collection-item pointer"><a class="blackColor" href="{{ url('../select') }}">New Resume</a></li>
				      <li class="collection-item pointer"><a class="blackColor" href="{{ url('../logout') }}">Log out</a></li>

   					</ul>
			</div>
			<div class="col m6 resumes">
					<table class="highlight">
				        <thead>
				          <tr>
				              <th data-field="id">Status</th>
				              <th data-field="name">Created at</th>
				          </tr>
				        </thead>

				        <tbody>
				        	@foreach($userCvs as $userCv)
				           <tr>
				           	<td><a  href="/cv/{{$userCv->cv_id}}">{{$userCv->cv_name}} </a></td>
				           <td><a  href="/cv/{{$userCv->cv_id}}">{{$userCv->created_at}} </a></td>
				          
				          </tr>
				         @endforeach
				        </tbody>
				      </table>
					
			</div>
			<div class="col m6 infos">
					asdsda
			</div>
		</div>
	</div>
	  <script type="text/javascript">
    $("#infos").click(function(){
    	$(".resumes").hide('fast');
    	$(".infos").show('fast');
    });
    $("#resumes").click(function(){
    	$(".infos").hide('fast');
    	$(".resumes").show('fast');
    });
  </script>
@endsection