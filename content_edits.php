<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/edit_style.css">
	<link rel="stylesheet" type="text/css" href="css/materialize.css">
	<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
	<div class="section">

		<div class="row">

			<!--                                  Chage image Card                           -->
			<div class="col s6 m3">
				<div class="card-panel center-align white">
					<div class="row">
						<div class="container">
							<div class="row">
								<div class="card-content">
									<span class="card-title">CHANGE IMAGE</span>
								</div>   
							</div>
							<div class="card-image circle valign-wrapper grey" style="height:192.3px">
								<img src="" class="circle responsive-img">
								<span class="card-title white-text">DRAG OR SELECT YOUR IMAGE</span>
							</div>
						</div>
					</div>
					<div class="card-action">
						<a class="waves-effect white btn" style="color:#0abc77">CANCEL</a>
						<a class="waves-effect btn">SUBMIT</a>
					</div>
					<br>
				</div>
			</div>

			<!--                                Change name,position,birth,discription Card                -->
			<div class="col s5 m5">
				<div class="card-panel center-align white">
					<div class="row">
						<div class="card-content">
							<span class="card-title">CHANGE NAME,POSITION,BIRTH,DISCRIPTION</span>
						</div>  
					</div> 
					<div class="row">
						<div class="card-content">
							<form class="col s12 m12" action="">
								<div class="row">
									<div class="input-field col s12 m12">
										<input name="name_surname" type="text" class="validate">
										<label class="active" for="name_surname">Name,Surname</label>
									</div>
								</div>
								<div class="row">
									<div class="input-field col s6 m6">
										<input name="position" type="text" class="validate">
										<label class="active" for="pposition">Position</label>
									</div>
									<div class="input-field col s6 m6">
										<input id="birth_date" type="text" class="validate">
										<label class="active" for="birth_date">Date of Birth</label>
									</div>
								</div>
								<div class="row">
									<div class="input-field col s12 m12">
										<textarea name="prof_desc" class="materialize-textarea"></textarea>
										<label class="active" for="prof_desc">Profile description</label>
									</div>
								</div>
								<div class="row">
									<div class="col s12 m12">
										<div class="card-action right">
											<a class="waves-effect white btn" style="color:#0abc77">CANCEL</a>
											<a class="waves-effect  btn">SUBMIT</a>
										</div>
									</div>
								</div>
							</form>
						</div>
					</div>
					
				</div>
			</div>

			<!--                                       Edication  Card                 -->
			<div class="col s5 m5">
				<div class="card-panel center-align white">
					<div class="row">
						<div class="card-content">
							<span class="card-title">EDICATION</span>
						</div>  
					</div> 
					<div class="row">
						<div class="card-content">
							<form class="col s12 m12" action="">
								<div class="row">
									<div class="input-field col s12 m12">
										<input name="field_name" type="text" class="validate">
										<label class="active" for="field_name">Field Name</label>
									</div>
								</div>
								<div class="row">
									<div class="input-field col s3 m3">
										<input name="date" type="text" class="validate">
										<label class="active" for="date">Dates</label>
									</div>
									<div class="input-field col s3 m3">
										<div class="row date2">
											<label class="active" for="date2">
												<input type="checkbox" id="checkbox" />
												<label for="checkbox">To Present</label>
											</label>
										</div>
										<div class="row date2">
											<input name="date2" type="text" class="validate">
										</div>
									</div>
									<div class="input-field col s5 m5 offset-s1 offset-m1">
										<input name="degree" type="text" class="validate">
										<label class="active" for="degree">Degree</label>
									</div>
								</div>
								<div class="row">
									<div class="input-field col s12 m12">
										<input name="sch_name" type="text" class="validate">
										<label class="active" for="sch_name">School,college,university name</label>
									</div>
								</div>
								<div class="row" id="text">
									<div class="input-field col s12 m12">
										<textarea name="info_edic" class="materialize-textarea"></textarea>
										<label class="active" for="info_edic">Extra information about edication</label>
									</div>
								</div>
								<div class="row">
									<div class="col s12 m12">
										<div class="card-action" id="add">
											<a class="btn-flat grey col s12 m12">+ ADD MORE</a>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col s12 m12">
										<div class="card-action right">
											<a class="waves-effect white btn" style="color:#0abc77">CANCEL</a>
											<a class="waves-effect btn">SUBMIT</a>
										</div>
									</div>
								</div>
							</form>
							
						</div>
					</div>
					
				</div>
			</div>

			<!--                                 Skills Card                             -->

			<div class="col s5 m5">
				<div class="card-panel center-align white">
					<div class="row">
						<div class="card-content">
							<span class="card-title">SKILLS</span>
						</div>  
					</div> 
					<div class="row">
						<div class="card-content">
							<form class="col s12 m12" action="">
								<div  id="newSk">
									<div class="row">
										<div class="input-field col s12 m12">
											<input placeholder="SKILLS" name="field_name" type="text" class="validate">
											<label class="active" for="field_name">Field Name</label>
										</div>
									</div>
									<div class="row">
										<div class="input-field col s12 m12">
											<input placeholder="For ex.Illustator" name="skill" type="text" class="validate">
										</div>
									</div>
									<div class="row">
										<p class="range-field col s12 m12">
											<label class="active" for="slider">Skill level</label>
											<input type="range" name="slider" min="0" max="100" />
										</p>
									</div>
								</div>
								<div class="row">
									<div class="col s12 m12">
										<div class="card-action" id="addSk">
											<a class="btn-flat grey col s12 m12">+ ADD MORE SKILLS</a>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col s12 m12">
										<div class="card-action right">
											<a class="waves-effect white btn" style="color:#0abc77">CANCEL</a>
											<a class="waves-effect btn">SUBMIT</a>
										</div>
									</div>
								</div>
							</form>
						</div>
					</div>
					
				</div>
			</div>

			<!--                                Language Card                                -->

			<div class="col s5 m5">
				<div class="card-panel center-align white">
					<div class="row">
						<div class="card-content">
							<span class="card-title">LANGUAGE</span>
						</div>  
					</div> 
					<div class="row">
						<div class="card-content">
							<form class="col s12 m12" action="">
								<div id="Lang">
									<div class="row">
										<div class="input-field col s12 m12">
											<input placeholder="LANGUAGE" name="field_name" type="text" class="validate">
											<label class="active" for="field_name">Field Name</label>
										</div>
									</div>
									<div class="row">
										<div class="input-field col s12 m12">
											<input  placeholder="For ex.English" name="lang" type="text" class="validate">
										</div>
									</div>
									<div class="row">
										<p class="range-field col s12 m12">
											<label class="active" for="slider">Skill level</label>
											<input type="range" name="slider" min="0" max="100" />
										</p>
									</div>
								</div>
								<div class="row" >
									<div class="col s12 m12">
										<div class="card-action" id="addLan">
											<a class="btn-flat grey col s12 m12">+ADD MORE SKILLS</a>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col s12 m12">
										<div class="card-action right">
											<a class="waves-effect white btn" style="color:#0abc77">CANCEL</a>
											<a class="waves-effect btn">SUBMIT</a>
										</div>
									</div>
								</div>
							</form>
						</div>
					</div>
					
				</div>
			</div>

			<!-- 							Work experience Card                           -->
			<div class="col s5 m5">
				<div class="card-panel center-align white">
					<div class="row">
						<div class="card-content">
							<span class="card-title">WORK EXPERIENCE</span>
						</div>  
					</div> 
					<div class="row">
						<div class="card-content">
							<form class="col s12 m12" action="">
								<div class="row">
									<div class="input-field col s12 m12">
										<input name="field_name" type="text" class="validate">
										<label class="active" for="field_name">Field Name</label>
									</div>
								</div>
								<div class="row">
									<div class="input-field col s3 m3">
										<input name="date" type="text" class="validate">
										<label class="active" for="date">Dates</label>
									</div>
									
									<div class="input-field col s3 m3">
										<div class="row date2">
											<label class="active" for="date2">
												<input type="checkbox" id="checkbox1" />
												<label for="checkbox1">To Present</label>
											</label>
										</div>
										<div class="row date2">
											<input name="date2" type="text" class="validate">
										</div>
									</div>
									<div class="input-field col s5 m5 offset-s1 offset-m1">
										<input name="position" type="text" class="validate">
										<label class="active" for="position">Position</label>
									</div>
								</div>
								<div class="row">
									<div class="input-field col s12 m12">
										<input name="com_name" type="text" class="validate">
										<label class="active" for="com_name">Company, organization name</label>
									</div>
								</div>
								<div class="row" id="textExp">
									<div class="input-field col s12 m12">
										<textarea name="info_exp" class="materialize-textarea"></textarea>
										<label class="active" for="info_exp">Extra information about experience</label>
									</div>
								</div>
								<div class="row">
									<div class="col s12 m12">
										<div class="card-action" id="addExp">
											<a class="btn-flat grey col s12 m12" >+ ADD MORE</a>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col s12 m12">
										<div class="card-action right">
											<a class="waves-effect white btn" style="color:#0abc77">CANCEL</a>
											<a class="waves-effect btn">SUBMIT</a>
										</div>
									</div>
								</div>
							</form>
							
						</div>
					</div>
					
				</div>
			</div>

			<!-- 						Add more field Card										 -->

			<div class="col s5 m5">
				<div class="card-panel center-align white">
					<div class="row">
						<div class="card-content">
							<span class="card-title">ADD MORE FIELD</span>
						</div>  
					</div> 
					<div class="row">
						<div class="card-content">
							<form class="col s12 m12" action="">
								<div class="row">
									<div class="input-field col s12 m12">
										<input name="field_name" type="text" class="validate">
										<label class="active" for="field_name">Field Name</label>
									</div>
								</div>
								<div class="row">
									<div class="col s12 m12">
										<div class="input-field">
											<textarea name="info" class="materialize-textarea"></textarea>
											<label class="active" for="info">Extra information</label>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col s12 m12">
										<div class="card-action right">
											<a class="waves-effect white btn" style="color:#0abc77">CANCEL</a>
											<a class="waves-effect btn">SUBMIT</a>
										</div>
									</div>
								</div>
							</form>
							
						</div>
					</div>
					
				</div>
			</div>



		</div>
	</div>
	<!--    Scripts     -->
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/materialize.min.js"></script>

</body>
</html>

<script>
	$(document).ready(function(){
		//                      add education
		$('#add').click(function(){
			$('#text').append('<div class="row"><div class="input-field col s12"><a class="right del"><i class="material-icons ">clear</i></a><textarea name="info_edic" class="materialize-textarea"></textarea><label class="active" for="info_edic">Extra information about experience</label></div></div>');
			$('.del').click(function(){
				$(this).parent().parent().remove();
			});
		});
		//                       add exprience
		$('#addExp').click(function(){
			$('#textExp').append('<div class="row"><div class="input-field col s12"><a class="right del"><i class="material-icons ">clear</i></a><textarea name="info_exp" class="materialize-textarea"></textarea><label class="active" for="info_exp">Extra information about experience</label></div></div>');
			$('.del').click(function(){
				$(this).parent().parent().remove();
			});
		});
		//                        add skill

		$('#addSk').click(function(){
			$('#newSk').append('<div class="new"><div class="row"><div class="input-field col s12"><a class="right del"><i class="material-icons ">clear</i></a><input placeholder="SKILLS"  type="text" name="field_name" class="validate"><label class="active" for="field_name">Field Name</label></div></div><div class="row"><div class="input-field col s12"><input placeholder="For ex.Illustator" id="skill" type="text" class="validate"></div></div><div class="row"><p class="range-field col s12"><label class="active" for="slider">Skill level</label><input type="range" name="slider" min="0" max="100" /></p></div></div>');
			$('.del').click(function(){
				$(this).closest('.new').remove();
			});
		});

		//                       add language


		$('#addLan').click(function(){
			$('#Lang').append('<div class="newLan"><div class="row"><div class="input-field col s12"><a class="right del"><i class="material-icons ">clear</i></a><input placeholder="SKILLS" id="field_name" type="text" class="validate"><label class="active" for="field_name">Field Name</label></div></div><div class="row"><div class="input-field col s12"><input placeholder="For ex.Illustator" id="skill" type="text" class="validate"></div></div><div class="row"><p class="range-field col s12"><label class="active" for="slider">Skill level</label><input type="range" name="slider" min="0" max="100" /></p></div></div>');
			$('.del').click(function(){
				$(this).closest('.newLan').remove();
			});
		});
		
		
	});

</script>