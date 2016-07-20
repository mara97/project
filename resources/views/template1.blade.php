@extends('layout')

@section('content')
  <!--Import jQuery before materialize.js-->
  <!-- <script type="text/javascript" src="js/jquery.js"></script>-->
    <div id="popBack"></div>

  <div id="education_content"> 
    <!--                                       Edication  Card                 -->
      <div class="col s5 m5">
        <div class="card-panel center-align white">
          <div class="row">
            <div class="card-content">
              <span class="card-title">EDUCATION</span>
            </div>  
          </div> 
          <div class="row">
            <div class="card-content">
            {!! Form::open(array('url' => "/educreate/$cvId")) !!}
              <form class="col s12 m12" action="">
                <div class="row">
                  <div class="input-field col s3 m3">
                      {!! Form::text('education_date', '', ['class' => 'validate']) !!}
                    <label class="active" for="date">Dates</label>
                  </div>

                  <div class="input-field col s5 m5 offset-s1 offset-m1">
                    {!! Form::text('education_degree', '', ['class' => 'validate']) !!}
                    <label class="active" for="degree">Degree</label>
                  </div>
                </div>
                <div class="row">
                  <div class="input-field col s12 m12">
                    {!! Form::text('education_name', '', ['class' => 'validate']) !!}
                    <label class="active" for="sch_name">School,college,university name</label>
                  </div>
                </div>
                <div class="row" id="text">
                  <div class="input-field col s12 m12">
                    {!! Form::text('education_info', '', ['class' => 'validate']) !!}

                    <label class="active" for="info_edic">Extra information about edication</label>
                  </div>
                   {!! Form::text('cv_id', '', ['class' => 'validate']) !!}
                </div>
                <div class="row">
                  <div class="col s12 m12">
                    <div class="card-action right">
                      {!! Form::submit('submit', ['class' => 'waves-effect btn']) !!}
                    </div>
                  </div>
                </div>
             {!! Form::close() !!}
              
            </div>
          </div>
          
        </div>
      </div>

  </div>
  <!-- workd edit popup start -->
  <div id="work_content"> 
    <!--              Work experience Card                           -->
      <div class="col s5 m5">
        <div class="card-panel center-align white">
          <div class="row">
            <div class="card-content">
              <span class="card-title">WORK EXPERIENCE</span>
            </div>  
          </div> 
          <div class="row">
            <div class="card-content">
              {!! Form::open(array('url' => "/workcreate/$cvId")) !!}
                <div class="row">
                  <div class="input-field col s3 m6">
                    {!! Form::text('work_date', '', ['class' => 'validate']) !!}
                    <label class="active" for="date">Dates</label>
                  </div>

                  <div class="input-field col s5 m6">
                    {!! Form::text('work_profession', '', ['class' => 'validate']) !!}
                    <label class="active" for="position">Position</label>
                  </div>
                </div>
                <div class="row">
                  <div class="input-field col s12 m12">
                    {!! Form::text('work_company', '', ['class' => 'validate']) !!}
                    <label class="active" for="com_name">Company, organization name</label>
                  </div>
                </div>
                <div class="row" id="textExp">
                  <div class="input-field col s12 m12">
                    {!! Form::text('work_info', '', ['class' => 'validate']) !!}
                    <label class="active" for="info_exp">Extra information about experience</label>
                  </div>
                  {!! Form::text('cv_id', '', ['class' => 'validate']) !!}
                </div>

                <div class="row">
                  <div class="col s12 m12">
                    <div class="card-action right">
                      {!! Form::submit('submit', ['class' => 'waves-effect btn']) !!}
                    </div>
                  </div>
                </div>
              {!! Form::close() !!}
              
            </div>
          </div>
          
        </div>
      </div>

  </div>
<div class="eduEdit">
                        <div class='col s5 m5'>
        <div class='card-panel center-align white'>
          <div class='row'>
            <div class='card-content'>
              <span class='card-title'>EDUCATION</span>
            </div>  
          </div> 
          <div class='row'>
            <div class='card-content'>
            {!! Form::open(array('url' => '', 'id' => 'eduEditForm')) !!}
              <form class='col s12 m12' action=''>
                <div class='row'>
                  <div class='input-field col s3 m3'>
                      {!! Form::text('education_date', '', ['class' => 'validate', 'id' => 'eduPopDate']) !!}
                    <label class='active' for='date'>Dates</label>
                  </div>

                  <div class='input-field col s5 m5 offset-s1 offset-m1'>
                    {!! Form::text('education_degree', '', ['class' => 'validate', 'id' => 'eduPopDegree']) !!}
                    <label class='active' for='degree'>Degree</label>
                  </div>
                </div>
                <div class='row'>
                  <div class='input-field col s12 m12'>
                    {!! Form::text('education_name', '', ['class' => 'validate','id' => 'eduPopName']) !!}
                    <label class='active' for='sch_name'>School,college,university name</label>
                  </div>
                </div>
                <div class='row' id='text'>
                  <div class='input-field col s12 m12'>
                    {!! Form::text('education_info', '', ['class' => 'validate', 'id' => 'eduPopInfo']) !!}

                    <label class='active' for='info_edic'>Extra information about edication</label>
                  </div>
                   
                </div>
                <div class='row'>
                  <div class='col s12 m12'>
                    <div class='card-action right'>
                      {!! Form::submit('save', ['class' => 'waves-effect btn']) !!}
                    </div>
                  </div>
                </div>
             {!! Form::close() !!}
              
            </div>
          </div>
          
        </div>
      </div>
          
</div>

<div class="workEdit">
      <div class="col s5 m5">
        <div class="card-panel center-align white">
          <div class="row">
            <div class="card-content">
              <span class="card-title">WORK EXPERIENCE</span>
            </div>  
          </div> 
          <div class="row">
            <div class="card-content">
              {!! Form::open(array('url' => '', 'id' => 'workEditForm')) !!}
                <div class="row">
                  <div class="input-field col s3 m6">
                    {!! Form::text('work_date', '', ['class' => 'validate','id' => 'workPopDate']) !!}
                    <label class="active" for="date">Dates</label>
                  </div>

                  <div class="input-field col s5 m6">
                    {!! Form::text('work_profession', '', ['class' => 'validate', 'id' => 'workPopProfession']) !!}
                    <label class="active" for="position">Position</label>
                  </div>
                </div>
                <div class="row">
                  <div class="input-field col s12 m12">
                    {!! Form::text('work_company', '', ['class' => 'validate', 'id' => 'workPopCompany']) !!}
                    <label class="active" for="com_name">Company, organization name</label>
                  </div>
                </div>
                <div class="row" id="textExp">
                  <div class="input-field col s12 m12">
                    {!! Form::text('work_info', '', ['class' => 'validate', 'id' => 'workPopInfo']) !!}
                    <label class="active" for="info_exp">Extra information about experience</label>
                  </div>
                </div>
                <div class="row">
                  <div class="col s12 m12">
                    <div class="card-action right">
                      {!! Form::submit('save', ['class' => 'waves-effect btn']) !!}
                    </div>
                  </div>
                </div>
              {!! Form::close() !!}
              
            </div>
          </div>
          
        </div>
      </div>
          
</div>

<div class="pDataEdit">
      <div class="col s5 m5">
        <div class="card-panel center-align white">
          <div class="row">
            <div class="card-content">
              <span class="card-title">PERSONAL DATA</span>
            </div>  
          </div> 
          <div class="row">
            <div class="card-content">
              {!! Form::open(array('url' => '', 'id' => 'pDataEditForm')) !!}
                <div class="row">
                  <div class="input-field col s3 m6">
                    {!! Form::text('personal_data_fname', '', ['class' => 'active','id' => 'pDataPopFname']) !!}
                    <label class="active" for="date">Full name</label>
                  </div>

                  <div class="input-field col s5 m6">
                    {!! Form::text('personal_data_profession', '', ['class' => 'active', 'id' => 'pDataPopProfession']) !!}
                    <label class="active" for="position">Profession</label>
                  </div>
                </div>
                <div class="row">
                  <div class="input-field col s12 m12">
                    {!! Form::text('personal_data_bdate', '', ['class' => 'active', 'id' => 'pDataPopBdate']) !!}
                    <label class="active" for="com_name">Birth date</label>
                  </div>
                </div>
                <div class="row" id="textExp">
                  <div class="input-field col s12 m12">
                    {!! Form::text('personal_data_info', '', ['class' => 'validate', 'id' => 'pDataPopInfo']) !!}
                    <label class="active" for="info_exp">Extra information</label>
                  </div>
                </div>
                <div class="row">
                  <div class="col s12 m12">
                    <div class="card-action right">
                      {!! Form::submit('save', ['class' => 'waves-effect btn']) !!}
                    </div>
                  </div>
                </div>
              {!! Form::close() !!}
              
            </div>
          </div>
          
        </div>
      </div>
          
</div>

<!-- Language popups -->

<div class="addLanguagePop">
      <div class="col s5 m5">
        <div class="card-panel center-align white">
          <div class="row">
            <div class="card-content">
              <span class="card-title">ADD LANGUAGE</span>
            </div>  
          </div> 
          <div class="row">
            <div class="card-content">
              {!! Form::open(array("url" => "/template/addlanguage/$cvId")) !!}
                <div class="row">
                  <div class="input-field col s12 m12">
                    {!! Form::text('language_name', '', ['class' => 'validate']) !!}
                    <label class="active" for="com_name">Language</label>
                  </div>
                </div>
                <div class="row">
                  <div class="input-field col s12 m12">
                    {!! Form::text('language_level', '', ['class' => 'validate']) !!}
                    <label class="active" for="com_name">Level</label>
                  </div>
                </div>
                <div class="row">
                  <div class="col s12 m12">
                    <div class="card-action right">
                      {!! Form::submit('submit', ['class' => 'waves-effect btn']) !!}
                    </div>
                  </div>
                </div>
              {!! Form::close() !!}
              
            </div>
          </div>
          
        </div>
      </div>
          
</div>

<div class="editLanguagePop">
      <div class="col s5 m5">
        <div class="card-panel center-align white">
          <div class="row">
            <div class="card-content">
              <span class="card-title">EDIT LANGUAGE</span>
            </div>  
          </div> 
        <div class="row">
            <div class="card-content">
              {!! Form::open(array('url' => '', 'id' => 'languageEditForm')) !!}
                <div class="row">
                  <div class="input-field col s3 m12">
                    {!! Form::text('language_name', '', ['class' => 'validate','id' => 'languageNameEditInput']) !!}
                    <label class="active" for="date">Language</label>
                  </div>
                </div>
                <div class="row">
                  <div class="input-field col s3 m12">
                    {!! Form::text('language_level', '', ['class' => 'validate','id' => 'languageLevelEditInput']) !!}
                    <label class="active" for="date">Level</label>
                  </div>
                </div>
                <div class="row">
                  <div class="col s12 m12">
                    <div class="card-action right">
                      {!! Form::submit('save', ['class' => 'waves-effect btn']) !!}
                    </div>
                  </div>
                </div>
              {!! Form::close() !!}
              
            
          </div>    
        </div>
      </div>
          
</div>
</div>

<!-- Language popups end -->




<!-- Skills popups -->

<div class="addSkillsPop">
      <div class="col s5 m5">
        <div class="card-panel center-align white">
          <div class="row">
            <div class="card-content">
              <span class="card-title">ADD SKILL</span>
            </div>  
          </div> 
          <div class="row">
            <div class="card-content">
              {!! Form::open(array('url' => "/template/addskills/$cvId")) !!}
                <div class="row">
                  <div class="input-field col s12 m12">
                    {!! Form::text('skill_name', '', ['class' => 'validate']) !!}
                    <label class="active" for="com_name">Name</label>
                  </div>
                </div>
                <div class="row">
                  <div class="input-field col s12 m12">
                    {!! Form::text('skill_level', '', ['class' => 'validate']) !!}
                    <label class="active" for="com_name">Level</label>
                  </div>
                </div>
                <div class="row">
                  <div class="col s12 m12">
                    <div class="card-action right">
                      {!! Form::submit('submit', ['class' => 'waves-effect btn']) !!}
                    </div>
                  </div>
                </div>
              {!! Form::close() !!}
              
            </div>
          </div>
          
        </div>
      </div>
          
</div>

<div class="editSkillsPop">
      <div class="col s5 m5">
        <div class="card-panel center-align white">
          <div class="row">
            <div class="card-content">
              <span class="card-title">EDIT SKILL</span>
            </div>  
          </div> 
        <div class="row">
            <div class="card-content">
              {!! Form::open(array('url' => '', 'id' => 'skillsEditForm')) !!}
                <div class="row">
                  <div class="input-field col s3 m12">
                    {!! Form::text('skill_name', '', ['class' => 'validate','id' => 'skillsNameEditInput']) !!}
                    <label class="active" for="date">Name</label>
                  </div>
                </div>
                <div class="row">
                  <div class="input-field col s3 m12">
                    {!! Form::text('skill_level', '', ['class' => 'validate','id' => 'skillsLevelEditInput']) !!}
                    <label class="active" for="date">Level</label>
                  </div>
                </div>
                <div class="row">
                  <div class="col s12 m12">
                    <div class="card-action right">
                      {!! Form::submit('save', ['class' => 'waves-effect btn']) !!}
                    </div>
                  </div>
                </div>
              {!! Form::close() !!}
              
            
          </div>    
        </div>
      </div>
          
</div>
</div>

<!--Skills popups end -->

<!-- Image pop up -->
<div class="addImagePop">
      <div class="col s5 m5">
        <div class="card-panel center-align white">
          <div class="row">
            <div class="card-content">
              <span class="card-title">ADD IMAGE</span>
            </div>  
          </div> 
          <div class="row">
            <div class="card-content">
                      @if(Session::has('success'))
                        <div class="alert-box success">
                        <h2>{!! Session::get('success') !!}</h2>
                        </div>
                     @endif
             {!! Form::open(array('url'=>"/template/imageadd/$cvId",'method'=>'POST', 'files'=>true, 'id' => 'imageEditForm')) !!}
                <div class="row">
                  <div class="input-field col s12 m12">
                    {!! Form::file('image') !!}
                    <label class="active" for="com_name">Select image</label>
                  </div>
                </div>
                 @if(Session::has('error'))
                  <p class="errors">{!! Session::get('error') !!}</p>
                  @endif
                <div class="row">
                  <div class="col s12 m12">
                    <div class="card-action right">
                      {!! Form::submit('submit', ['class' => 'waves-effect btn']) !!}
                    </div>
                  </div>
                </div>
              {!! Form::close() !!}
              
            </div>
          </div>
          
        </div>
      </div>
          
</div>
<!-- Image pop up end -->


<!-- Awards popups -->

<div class="addAwardsPop">
      <div class="col s5 m5">
        <div class="card-panel center-align white">
          <div class="row">
            <div class="card-content">
              <span class="card-title">ADD AWARD</span>
            </div>  
          </div> 
          <div class="row">
            <div class="card-content">
              {!! Form::open(array('url' => "/template/addawards/$cvId")) !!}
                <div class="row">
                  <div class="input-field col s12 m12">
                    {!! Form::text('award_text', '', ['class' => 'active validate']) !!}
                    <label class="active" for="com_name">Awards</label>
                  </div>
                </div>               
                <div class="row">
                  <div class="col s12 m12">
                    <div class="card-action right">
                      {!! Form::submit('submit', ['class' => 'waves-effect btn']) !!}
                    </div>
                  </div>
                </div>
              {!! Form::close() !!}
              
            </div>
          </div>
          
        </div>
      </div>
          
</div>

<div class="editAwardsPop">
      <div class="col s5 m5">
        <div class="card-panel center-align white">
          <div class="row">
            <div class="card-content">
              <span class="card-title">EDIT AWARD</span>
            </div>  
          </div> 
        <div class="row">
            <div class="card-content">
              {!! Form::open(array('url' => '', 'id' => 'awardsEditForm')) !!}
                <div class="row">
                  <div class="input-field col s3 m12">
                    {!! Form::text('award_text', '', ['class' => 'validate','id' => 'awardsTextEditInput']) !!}
                    <label class="active" for="date">Awards</label>
                  </div>
                </div>               
                <div class="row">
                  <div class="col s12 m12">
                    <div class="card-action right">
                      {!! Form::submit('save', ['class' => 'waves-effect btn']) !!}
                    </div>
                  </div>
                </div>
              {!! Form::close() !!}
              
            
          </div>    
        </div>
      </div>
          
</div>
</div>

<!--Awards popups end -->



<!-- Contact Popup -->
<div class="addPhonePop">
      <div class="col s5 m5">
        <div class="card-panel center-align white">
          <div class="row">
            <div class="card-content">
              <span class="card-title">ADD CONTACT</span>
            </div>  
          </div> 
          <div class="row">
            <div class="card-content">
              {!! Form::open(array('url' => "/template/addnumber/$cvId")) !!}
                <div class="row">
                  <div class="input-field col s12 m12">
                    {!! Form::select('personal_contact_name', ['Phone' => 'Phone', 'Email' => 'E-mail', 'Adress' => 'Adress', 'Social' => 'Social Network']) !!}
                    <label class="active" for="com_name">Contact Method</label>
                  </div>
                </div>
                <div class="row">
                  <div class="input-field col s12 m12">
                    {!! Form::text('personal_contact_data', '', ['class' => 'validate', 'id' => 'pContactPopPhone']) !!}
                    <label class="active" for="com_name">Contact Adress</label>
                  </div>
                </div>
                
                <div class="row">
                  <div class="col s12 m12">
                    <div class="card-action right">
                      {!! Form::submit('submit', ['class' => 'waves-effect btn']) !!}
                    </div>
                  </div>
                </div>
              {!! Form::close() !!}
              
            </div>
          </div>
          
        </div>
      </div>
          
</div>

<div class="editPhonePop">
      <div class="col s5 m5">
        <div class="card-panel center-align white">
          <div class="row">
            <div class="card-content">
              <span class="card-title">EDIT CONTACT</span>
            </div>  
          </div> 
        <div class="row">
            <div class="card-content">
              {!! Form::open(array('url' => '', 'id' => 'phoneEditForm')) !!}
                <div class="row">
                  <div class="input-field col s12 m12">
                    {!! Form::select('personal_contact_name', ['Phone' => 'Phone', 'Email' => 'E-mail', 'Adress' => 'Adress', 'Social' => 'Social Network'], "" ,['class' => 'validate','id' => 'phoneNameEditInput']) !!}
                    <label class="active" for="com_name">Contact Method</label>
                  </div>
                </div>

                <div class="row">
                  <div class="input-field col s3 m12">
                    {!! Form::text('personal_contact_data', '', ['class' => 'validate','id' => 'phoneDataEditInput']) !!}
                    <label class="active" for="date">Contact data</label>
                  </div>
                </div>

                <div class="row">
                  <div class="col s12 m12">
                    <div class="card-action right">
                      {!! Form::submit('save', ['class' => 'waves-effect btn']) !!}
                    </div>
                  </div>
                </div>
              {!! Form::close() !!}
              
            
          </div>    
        </div>
      </div>
          
</div>
</div>
<!-- Contact Popup end -->

<div class="addEmailPop">
      <div class="col s5 m5">
        <div class="card-panel center-align white">
          <div class="row">
            <div class="card-content">
              <span class="card-title">ADD EMAIL</span>
            </div>  
          </div> 
          <div class="row">
            <div class="card-content">
              {!! Form::open(array('url' => "/template/addemail/$cvId")) !!}
                <div class="row">
                  <div class="input-field col s12 m12">
                    {!! Form::text('personal_contact_email', '', ['class' => 'validate']) !!}
                    <label class="active" for="com_name">E-MAIL</label>
                  </div>
                </div>
                
                <div class="row">
                  <div class="col s12 m12">
                    <div class="card-action right">
                      {!! Form::submit('submit', ['class' => 'waves-effect btn']) !!}
                    </div>
                  </div>
                </div>
              {!! Form::close() !!}
              
            </div>
          </div>
          
        </div>
      </div>
          
</div>

<div class="editEmailPop">
      <div class="col s5 m5">
        <div class="card-panel center-align white">
          <div class="row">
            <div class="card-content">
              <span class="card-title">EDIT EMAIL</span>
            </div>  
          </div> 
        <div class="row">
            <div class="card-content">
              {!! Form::open(array('url' => '', 'id' => 'emailEditForm')) !!}
                <div class="row">
                  <div class="input-field col s3 m12">
                    {!! Form::text('personal_contact_email', '', ['class' => 'validate','id' => 'emailEditInput']) !!}
                    <label class="active" for="date">Contact email</label>
                  </div>
                </div>

                <div class="row">
                  <div class="col s12 m12">
                    <div class="card-action right">
                      {!! Form::submit('save', ['class' => 'waves-effect btn']) !!}
                    </div>
                  </div>
                </div>
              {!! Form::close() !!}
              
            
          </div>    
        </div>
      </div>
          
</div>
</div>

  <!-- workd edit popup end -->

  <div class="verticalAlign"></div>
  <div class="">
    <div class="row">

      <div class="col s12 m2 offset-m1">
        <div class="card black darken-1">
          <div class="card-content grey-text">
            <div class="row"><span >Select color</span></div>
            <div class="row">
            <ul class="pagination">
              <li class="waves-effect"><a href="#!"><div class="teal ball" name="teal-text"></div></a></li>
              <li class="waves-effect"><a href="#!"><div class="blue ball" name="blue-text"></div></a></li>
              <li class="waves-effect"><a href="#!"><div class="red ball" name="red-text"></div></a></li>
              <li class="waves-effect"><a href="#!"><div class="purple ball" name="purple-text"></div></a></li>
            </ul>
            </div>
            <a href="#" class="btn grey btn-text"> <i class="material-icons left">loop</i>Change design</a>
            <a href="#" class="btn  grey btn-text"> <i class="material-icons left">description</i>Publish</a>
          </div>
          <div class="card-action">
            <a href="javascript:demoFromHTML()" class="waves-effect waves-light btn">PUBLISH</a>

          </div>
        </div>
      </div>



      <div class="col s12 m9" id="exportPdf" style="background-color: rgb(240, 240, 240);">


       <div class="col s12 m3 noPadding">
        <div class="card">
@foreach($userPersonalDatas as $userPersonalData)
          <div class="card-image profileImg addImage" name="{{$userPersonalData->personal_data_id}}">
            <div class="imgWrapper">

            </div>
            
            <img src="{{$userPersonalData->image_url}}" class="responsive-img">
            
          </div>
@endforeach()        
          <div class="card-content">
          <i class="material-icons left grey-text" style="margin-top: 12px;">contacts</i>
          <h5 class="blue-text " name="desingText" id="contactHead">CONTACT<i class="material-icons edit addIcon addPhone" name="">add</i></h5>
          @foreach($userPersonalContacts as $userPersonalContact)
          <div class="contactRow">
                <div class="innerEditContact">
                  <i class="material-icons innerIcons edit editIcon editPhone" name={{$userPersonalContact->personal_contact_id}}>edit</i>
                  <i class="material-icons innerIcons delete deleteIcon deletePhone" name={{$userPersonalContact->personal_contact_id}}>delete</i>
                </div>
              @if($userPersonalContact->personal_contact_name === 'Phone')
              <i class="material-icons contactIcon">phone</i>
              @elseif($userPersonalContact->personal_contact_name === 'Email')
              <i class="material-icons contactIcon">email</i>
              @elseif($userPersonalContact->personal_contact_name === 'Adress')
              <i class="material-icons contactIcon">location_on</i>
              @else
              <i class="material-icons contactIcon">people</i>
              @endif
              <span class="levelHolder">{{$userPersonalContact->personal_contact_data}}</span>
            
          </div>
          @endforeach
            <div class="languages">
              <i class="material-icons left grey-text">language</i>
              <h5 class="blue-text " name="desingText" id="languageHead">LANGUAGES
                <i class="material-icons edit addIcon addLanguage" name="">add</i>
              </h5>
              @foreach($languages as $language)
              <div class="languageRow">
               <div class="innerEditContact">
                  <i class="material-icons innerIcons edit editIcon editLanguage" name={{$language->language_id}}>edit</i>
                  <i class="material-icons innerIcons delete deleteIcon deleteLanguage" name={{$language->language_id}}>delete</i>
                </div>
              <span class="grey-text text-darken-2">{{$language->language_name}}</span> 
              <span class="levelHolder">{{$language->language_level}}</span>      
              </div>
              @endforeach

            </div>
           
            <div class="skills">
                      
            
              <i class="material-icons left grey-text">list</i><h5 class="blue-text  " name="desingText" id="skillsHead">SKILLS<i class="material-icons edit addIcon addSkills" name="">add</i></h5>
              @foreach($skills as $skill)
              <div class="skillsRow">
                 <div class="innerEditContact">
                  <i class="material-icons innerIcons edit editIcon editSkills" name={{$skill->skill_id}}>edit</i>
                  <i class="material-icons innerIcons delete deleteIcon deleteSkills" name={{$skill->skill_id}}>delete</i>
                </div>
              <span class="grey-text text-darken-2">{{$skill->skill_name}}</span>
              <span class="levelHolder">{{$skill->skill_level}}</span>
              </div>
             @endforeach
            </div>


             <div class="awards">

              <i class="material-icons left grey-text">grade</i><h5 class="blue-text" name="desingText" id="awardsHead">AWARDS<i class="material-icons edit addIcon addAwards" name="">add</i></h5>
              @foreach($awards as $award)
              <div class="awardsRow">
                 <div class="innerEditContact">
                  <i class="material-icons innerIcons edit editIcon editAwards" name={{$award->award_id}}>edit</i>
                  <i class="material-icons innerIcons delete deleteIcon deleteAwards" name={{$award->award_id}}>delete</i>
                </div>
                <p class="grey-text">{{$award->award_text}}</p>
              </div>
              
              @endforeach
            </div>

          </div>

        </div>
      </div>




      <div class="col s12 m9 right white">
        <div class="card white darken-1 noShadow">
          <div class="card-content grey-text">
          @foreach($userPersonalDatas as $userPersonalData)
          <div id="Pdata">
                <div class="innerEditPData">
                  <i class="material-icons innerIcons edit editIconPdata" name="{{$userPersonalData->personal_data_id}}">edit</i>
                </div>
            <h2 class=" blue-text text-darken-3" name="desingText"><b style="text-transform: uppercase">{{$userPersonalData->personal_data_fname}}</b></h2>
            <h5 class="grey-text"><b style="text-transform: uppercase">{{$userPersonalData->personal_data_profession}}</b></h5>
            <h6 class="grey-text">Date of birth: {{$userPersonalData->personal_data_bdate}}</h6>

            <p class="grey-text">{{$userPersonalData->personal_data_info}}</p>

          </div>
          @endforeach
<div id="sortable">
                <div class="row">

                   <div class="edit">
                    <form action="">
                      <fieldset>
                        <legend>
                          <ul class="fieldset">
                            <li><a class="btn" id="education_edit_icon"><i class="material-icons">add</i></a></li>
                            <li class="upIcon"> <a class="btn waves-effect waves-light"><i class="material-icons">keyboard_arrow_up</i></a></li>
                            <li class="downIcon"> <a class="btn"><i class="material-icons">keyboard_arrow_down</i></a></li>
                          </ul>
                         
                         
                         
                        </legend>
                    <div class="sectionWrapper">
                            <i class="material-icons left grey-text">school</i><h5 class="blue-text" name="desingText">EDUCATION</h5>
                    @foreach($userEducations as $userEducation)

                    <div class="row" id="eduEdit">
                        <div class="innerEdit">
                          <i class="material-icons innerIcons edit editIcon editIconEdu" name={{$userEducation->education_id}}>edit</i>
                          <i class="material-icons innerIcons delete deleteIcon deleteIconEdu" name={{$userEducation->education_id}}>delete</i>
                        </div>
                      <span class=" grey-text text-darken-2"><b style="text-transform: uppercase">{{$userEducation->education_date}} {{$userEducation->education_name}}
                    </b></span> <br>
                    <span class="grey-text text-darken-2" style="text-transform: uppercase">{{$userEducation->education_degree}}</span>
                    <p class="grey-text">{{$userEducation->education_info}}</p>
                    </div>

                     @endforeach
                      </fieldset>

                    </form>
                    
                    </div>


            </div>
                 
                
            <div class="row">
              
                <div class="edit">
                  <form action="">
                      <fieldset>
                        <legend>
                       
                          <ul class="fieldset">
                            <li><a class="btn" id="workcontent_icon"><i class="material-icons">add</i></a></li>
                            <li class="upIcon"> <a class="btn waves-effect waves-light"><i class="material-icons">keyboard_arrow_up</i></a></li>
                            <li class="downIcon"> <a class="btn"><i class="material-icons">keyboard_arrow_down</i></a></li>
                          </ul>
                         
                         
                         
                        </legend>
              <div class="sectionWrapper">
              <i class="material-icons left grey-text">work</i><h5 class="blue-text " name="desingText">WORK EXPERIENCE</h5>
              @foreach($userWorks as $userWork)
              <div class="row" id="workEdit">
                         <div class="innerEditWork">
                          <i class="material-icons innerIcons edit editIconWork" name={{$userWork->work_id}}>edit</i>
                          <i class="material-icons innerIcons delete deleteIconWork" name={{$userWork->work_id}}>delete</i>
                        </div>
                <span class=" grey-text text-darken-2"><b style="text-transform: uppercase">{{$userWork->work_date}} {{$userWork->work_company}}</b></span> <br>
              <span class="grey-text text-darken-2" style="text-transform: uppercase">{{$userWork->work_profession}}</span>
              <p class="grey-text">{{$userWork->work_info}}</p> 

              </div>
              @endforeach
              </div>
                  </fieldset>
                </form>
            </div>

            </div>
            </div>

            

            </div>
           
          </div>
        </div>
        </div>
      </div>



    </div>




  </div>



<script type="text/javascript" src="/js/jquery.js"></script>
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>

<script type="text/javascript" src="/js/materialize.min.js"></script>
<script type="text/javascript">

function demoFromHTML() {
        var pdf = new jsPDF('l', 'pt', 'a4');
        // source can be HTML-formatted string, or a reference
        // to an actual DOM element from which the text will be scraped.
        source = $('#exportPdf')[0];

        // we support special element handlers. Register them with jQuery-style 
        // ID selector for either ID or node name. ("#iAmID", "div", "span" etc.)
        // There is no support for any other type of selectors 
        // (class, of compound) at this time.
        specialElementHandlers = {
            // element with id of "bypass" - jQuery style selector
            '#bypassme': function (element, renderer) {
                // true = "handled elsewhere, bypass text extraction"
                return true
            }
        };
         var options = {
            pagesplit: false
        };
        // all coords and widths are in jsPDF instance's declared units
        // 'inches' in this case
        pdf.addHTML(
        source, // HTML string or DOM elem ref.
        10, // x coord
        10, options, function () {
            // dispose: object with X, Y of the last line add to the PDF 
            //          this allow the insertion of new lines after html
            pdf.save('Test.pdf');
        });
    }

    $('.addImage').click(function(){

   var editImageId = $(this).attr('name');
    $.ajax({
                type: "GET",
                url: "/template/updateimage/"+editImageId+"",
                success: function(imageRow){

                  console.log(imageRow);                       
                        $('#imageEditForm').attr("action", "/template/imageadd/"+editImageId+"/"+imageRow.cv_id+"");
                        $("#popBack").fadeIn();
                        $(".addImagePop").fadeIn();
                        $('label').addClass('active');
                        Materialize.updateTextFields();
                } 
    });

    });

$('.addAwards').click(function(){

      $("#popBack").fadeIn();
      $(".addAwardsPop").fadeIn();
      
      return false;

    });

$('.editAwards').click(function(){
   var editAwardsId = $(this).attr('name');
    $.ajax({
                type: "GET",
                url: "/template/updateawards/"+editAwardsId+"",
                success: function(awardsRow){

                  console.log(awardsRow);
                        $('#awardsTextEditInput').val(awardsRow.award_text);                        
                        $('#awardsEditForm').attr("action", "/template/updateawards/add/"+editAwardsId+"/"+awardsRow.cv_id+"");
                        $("#popBack").fadeIn();
                        $(".editAwardsPop").fadeIn();
                        $('label').addClass('active');
                        Materialize.updateTextFields();
                } 
    });
});

$('.deleteAwards').click(function(){
   var deleteAwardsId = $(this).attr('name');
   var row = $(this).parent().parent();
        $.ajax({
                type: "GET",
                url: "/template/delete/awards/"+deleteAwardsId+"",
                success: function(){ 
                    row.remove();
                 } 
            });
   });

$('.addLanguage').click(function(){

      $("#popBack").fadeIn();
      $(".addLanguagePop").fadeIn();
      
      return false;

    });

$('.editLanguage').click(function(){
   var editLanguageId = $(this).attr('name');
    $.ajax({
                type: "GET",
                url: "/template/updatelanguage/"+editLanguageId+"",
                success: function(languageRow){ 
                  console.log(languageRow);
                        $('#languageNameEditInput').val(languageRow.language_name);
                        $('#languageLevelEditInput').val(languageRow.language_level);
                        $('#languageEditForm').attr("action", "/template/updatelanguage/add/"+editLanguageId+"/"+languageRow.cv_id+"");
                        $('label').addClass('active');
                        Materialize.updateTextFields();
                        $("#popBack").fadeIn();
                        $(".editLanguagePop").fadeIn();
                } 
    });
});

$('.deleteLanguage').click(function(){
   var deleteLanguageId = $(this).attr('name');
   var row = $(this).parent().parent();
        $.ajax({
                type: "GET",
                url: "/template/delete/language/"+deleteLanguageId+"",
                success: function(){ 
                    row.remove();
                 } 
            });
   });


$('.addAdress').click(function(){

      $("#popBack").fadeIn();
      $(".addAdressPop").fadeIn();
      
      return false;

    });

$('.editAdress').click(function(){
   var editAdressId = $(this).attr('name');
    $.ajax({
                type: "GET",
                url: "/template/updateadress/"+editAdressId+"",
                success: function(adressRow){ 
                  console.log(adressRow);
                        $('#adressEditInput').val(adressRow.personal_contact_adress);
                        $('#adressEditForm').attr("action", "/template/updateadress/add/"+editAdressId+"");
                        $('label').addClass('active');
                        Materialize.updateTextFields();
                        $("#popBack").fadeIn();
                        $(".editAdressPop").fadeIn();
                } 
    });
});

$('.deleteAdress').click(function(){
   var deleteAdressId = $(this).attr('name');
   var row = $(this).parent().parent();
        $.ajax({
                type: "GET",
                url: "/template/delete/adress/"+deleteAdressId+"",
                success: function(){ 
                    row.remove();
                 } 
            });
   });


$('.addSkills').click(function(){

      $("#popBack").fadeIn();
      $(".addSkillsPop").fadeIn();
      
      return false;

    });

$('.editSkills').click(function(){
   var editSkillsId = $(this).attr('name');
    $.ajax({
                type: "GET",
                url: "/template/updateskills/"+editSkillsId+"",
                success: function(skillsRow){ 
                  console.log(skillsRow);
                        $('#skillsNameEditInput').val(skillsRow.skill_name);
                        $('#skillsLevelEditInput').val(skillsRow.skill_level);
                        $('#skillsEditForm').attr("action", "/template/updateskills/add/"+editSkillsId+"/"+skillsRow.cv_id+"");
                        $('label').addClass('active');
                        Materialize.updateTextFields();
                        $("#popBack").fadeIn();
                        $(".editSkillsPop").fadeIn();
                } 
    });
});

$('.deleteSkills').click(function(){
   var deleteSkillsId = $(this).attr('name');
   var row = $(this).parent().parent();
        $.ajax({
                type: "GET",
                url: "/template/delete/skills/"+deleteSkillsId+"",
                success: function(){ 
                    row.remove();
                 } 
            });
   });

$('.addSocial').click(function(){

      $("#popBack").fadeIn();
      $(".addSocialPop").fadeIn();
      
      return false;

    });

$('.editSocial').click(function(){
   var editSocialId = $(this).attr('name');
    $.ajax({
                type: "GET",
                url: "/template/updatesocial/"+editSocialId+"",
                success: function(socialRow){ 
                  console.log(socialRow);
                        $('#socialEditInput').val(socialRow.personal_contact_social);
                        $('#socialEditForm').attr("action", "/template/updatesocial/add/"+editSocialId+"");
                        $('label').addClass('active');
                        Materialize.updateTextFields();
                        $("#popBack").fadeIn();
                        $(".editSocialPop").fadeIn();
                } 
    });
});

$('.deleteSocial').click(function(){
   var deleteSocialId = $(this).attr('name');
   var row = $(this).parent().parent();
        $.ajax({
                type: "GET",
                url: "/template/delete/social/"+deleteSocialId+"",
                success: function(){ 
                    row.remove();
                 } 
            });
   });

$('.addPhone').click(function(){

      $("#popBack").fadeIn();
      $(".addPhonePop").fadeIn();
      
      return false;

    });

$('.editPhone').click(function(){
   var editPhoneId = $(this).attr('name');
    $.ajax({
                type: "GET",
                url: "/template/updatephone/"+editPhoneId+"",
                success: function(phoneRow){ 
                  console.log(phoneRow);
                        $('#phoneNameEditInput').val(phoneRow.personal_contact_name);
                        $('#phoneDataEditInput').val(phoneRow.personal_contact_data);
                        $('#phoneEditForm').attr("action", "/template/updatephone/add/"+editPhoneId+"/"+phoneRow.cv_id+"");
                        $('label').addClass('active');
                        Materialize.updateTextFields();
                        $("#popBack").fadeIn();
                        $(".editPhonePop").fadeIn();
                } 
    });
});

$('.deletePhone').click(function(){
   var deleteContactId = $(this).attr('name');
   var row = $(this).parent().parent();
        $.ajax({
                type: "GET",
                url: "/template/delete/phone/"+deleteContactId+"",
                success: function(){ 
                    row.remove();
                 } 
            });
   });


$('.addEmail').click(function(){

      $("#popBack").fadeIn();
      $(".addEmailPop").fadeIn();
      
      return false;

    });

$('.editEmail').click(function(){
   var editEmailId = $(this).attr('name');
    $.ajax({
                type: "GET",
                url: "/template/updateemail/"+editEmailId+"",
                success: function(emailRow){ 
                  console.log(emailRow);
                        $('#emailEditInput').val(emailRow.personal_contact_email);
                        $('#emailEditForm').attr("action", "/template/updateemail/add/"+editEmailId+"/"+emailRow.cv_id+"");
                        $('label').addClass('active');
                        Materialize.updateTextFields();
                        $("#popBack").fadeIn();
                        $(".editEmailPop").fadeIn();
                } 
    });
});

$('.deleteEmail').click(function(){
   var deleteEmailId = $(this).attr('name');
   var row = $(this).parent().parent();
        $.ajax({
                type: "GET",
                url: "/template/delete/email/"+deleteEmailId+"",
                success: function(){ 
                    row.remove();
                 } 
            });
   });


$('.deleteIconEdu').click(function(){
   var deleteId = $(this).attr('name');
   var row = $(this).parent().parent();
        $.ajax({
                type: "GET",
                url: "/edudelete/"+deleteId+"",
                success: function(){ 
                    row.remove();
                 } 
            });
   });

$('.deleteIconWork').click(function(){
   var deleteIdWork = $(this).attr('name');
   var row = $(this).parent().parent();
        $.ajax({
                type: "GET",
                url: "/template/delete/work/"+deleteIdWork+"",
                success: function(){ 
                    row.remove();
                 } 
            });
   });

$('.editIconEdu').click(function(){
   var editId = $(this).attr('name');
    $.ajax({
                type: "GET",
                url: "/template/updateedu/"+editId+"",
                success: function(eduRow){ 
                  console.log(eduRow);
                        // $(".eduEdit").append(editEduPopup);
                        $('#eduPopDate').val(eduRow.education_date);
                        $('#eduPopDegree').val(eduRow.education_degree);
                        $('#eduPopName').val(eduRow.education_name);
                        $('#eduPopInfo').val(eduRow.education_info);
                        $('#eduEditForm').attr("action", "/template/updateedu/add/"+eduRow.education_id+"/"+eduRow.cv_id+"");
                        $('label').addClass('active');
                        Materialize.updateTextFields();
                        $("#popBack").fadeIn();
                        $(".eduEdit").fadeIn();
                } 
    });
});

$('.editIconPdata').click(function(){
   var editIdpData = $(this).attr('name');
    $.ajax({
                type: "GET",
                url: "/template/updatepdata/"+editIdpData+"",
                success: function(pDataRow){ 
                  console.log(pDataRow);
                        // $(".eduEdit").append(editEduPopup);
                        $('#pDataPopFname').val(pDataRow.personal_data_fname);
                        $('#pDataPopProfession').val(pDataRow.personal_data_profession);
                        $('#pDataPopBdate').val(pDataRow.personal_data_bdate);
                        $('#pDataPopInfo').val(pDataRow.personal_data_info);
                        $('#pDataEditForm').attr("action", "/template/updatepdata/add/"+pDataRow.personal_data_id+"/"+pDataRow.cv_id+"");
                        $('label').addClass('active');
                        Materialize.updateTextFields();
                        $("#popBack").fadeIn();
                        $(".pDataEdit").fadeIn();
                } 
    });
});

$('.editIconWork').click(function(){
   var editIdWork = $(this).attr('name');
   $("#popBack").fadeIn();
   $(".workEdit").fadeIn();
    $.ajax({
                type: "GET",
                url: "/template/updatework/"+editIdWork+"",
                success: function(workRow){ 
                  console.log(workRow);
                        // $(".eduEdit").append(editEduPopup);
                        $('#workPopDate').val(workRow.work_date);
                        $('#workPopProfession').val(workRow.work_profession);
                        $('#workPopCompany').val(workRow.work_company);
                        $('#workPopInfo').val(workRow.work_info);
                        $('#workEditForm').attr("action", "/template/updatework/add/"+workRow.work_id+"/"+workRow.cv_id+"");
                        $('label').addClass('active');
                        Materialize.updateTextFields();
                        $("#popBack").fadeIn();
                        $(".workEdit").fadeIn();
                } 
    });
});
$('#education_edit_icon').click(function(){

      $("#popBack").fadeIn();
      $("#education_content").fadeIn();
      
      return false;

    });

    $('#popBack').click(function(){

      $("#popBack").fadeOut();
      $("#education_content").fadeOut();

      return false;

    });
    $('#popBack').click(function(){

      $("#popBack").fadeOut();
      $(".eduEdit").fadeOut();
      $(".workEdit").fadeOut();
      $(".pDataEdit").fadeOut();
      $(".addEmailPop").fadeOut();
      $(".editEmailPop").fadeOut();
      $(".addPhonePop").fadeOut();
      $(".editPhonePop").fadeOut();
            $(".addSocialPop").fadeOut();
      $(".editSocialPop").fadeOut();
      $(".editSkillsPop").fadeOut();
      $(".addAdressPop").fadeOut();
      $(".editAdressPop").fadeOut();
            $(".addLanguagePop").fadeOut();
      $(".editLanguagePop").fadeOut();
         $(".addAwardsPop").fadeOut();
         $(".addImagePop").fadeOut();
      $(".editAwardsPop").fadeOut();
      return false;

    });

    $('#workcontent_icon').click(function(){

      $("#popBack").fadeIn();
      $("#work_content").fadeIn();
      
      return false;

    });

    $('#popBack').click(function(){

      $("#popBack").fadeOut();
      $("#work_content").fadeOut();

      return false;

    });
    $(function() {
    $( "#sortable" ).sortable();
    $( "#sortable" ).disableSelection();
  });
  $(document).ready(

      function(){

        $(".ball").click(function(){
        var a = $(this).attr("name");
        $("[name=desingText]").removeClass("red-text blue-text teal-text purple-text");
        $("[name=desingText]").addClass(a);
      
        });

      $(".upIcon").click(function () {

         $(this).parent().parent().parent().find(".sectionWrapper").hide("slow");
         $(this).parent().parent().parent().addClass("showField");

      });
      $(".downIcon").click(function () {

         $(this).parent().parent().parent().find(".sectionWrapper").show("slow");
         $(this).parent().parent().parent().removeClass("showField");

      });
}
);
</script>
@endsection