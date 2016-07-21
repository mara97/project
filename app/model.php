<?php 
		class Database{
	 	public $server;
		public $username;
		public $userpass;
		public $dbname;
		public $connection;

		public function __construct($server, $username, $userpass, $dbname){
			$this->server=$server;
			$this->username=$username;
			$this->userpass=$userpass;
			$this->dbname=$dbname;
			$this->db_connect();
			if($this->connection){
			}else{
				echo "error";
			}
		}
		function db_connect(){
			$this->connection=mysqli_connect($this->server, $this->username, $this->userpass, $this->dbname);
		}
	}
	class CreateCv{
			public $file_name;
			public $file_type;
			public $file_tmp;
			public $file_ext;
			public $file_dir;
			public $file_new_name;
			public $file_path;
		function __construct($connection, $cvName, $jobName, $birthDate, $cvAbout, $cvPhone, $cvEmail, $cvSocial, $cvWeb, $cvAdress, $cvImg, $cvAwards, $cvEdu1, $cvEduDate1, $cvEduStatus1, $cvEduAbout1, $cvEdu2, $cvEduDate2, $cvEduStatus2, $cvEduAbout2, $cvEdu3, $cvEduDate3, $cvEduStatus3, $cvEduAbout3, $cvWork1, $cvWorkDate1, $cvWorkStatus1, $cvWorkAbout1, $cvWork2, $cvWorkDate2, $cvWorkStatus2, $cvWorkAbout2, $cvWork3, $cvWorkDate3, $cvWorkStatus3, $cvWorkAbout3, $cvWork4, $cvWorkDate4, $cvWorkStatus4, $cvWorkAbout4){
			$this->file_name=$cvImg['name'];
			$this->file_type=$cvImg['type'];
			$this->file_tmp=$cvImg['tmp_name'];
			$this->file_ext=explode(".", $this->file_name)[1];
			$this->file_dir=explode("/", $this->file_type)[0];
			$this->file_new_name="file".rand();
			$this->file_path=$this->file_dir."/".$this->file_new_name.".".$this->file_ext;
			move_uploaded_file($this->file_tmp, $this->file_dir."/".$this->file_new_name.".".$this->file_ext);
			
				$sql = "INSERT INTO usercv(cv_name, cv_job, cv_bday, cv_about, cv_phone, cv_email, cv_social, cv_web, cv_adress, cv_img, cv_awards, cv_edu1, cv_edu_date1, cv_edu_status1, cv_edu_about1, cv_edu2, cv_edu_date2, cv_edu_status2, cv_edu_about2, cv_edu3, cv_edu_date3, cv_edu_status3, cv_edu_about3, cv_work1, cv_work_date1, cv_work_status1, cv_work_about1, cv_work2, cv_work_date2, cv_work_status2, cv_work_about2, cv_work3, cv_work_date3, cv_work_status3, cv_work_about3, cv_work4, cv_work_date4, cv_work_status4, cv_work_about4) VALUES ('$cvName', '$jobName', '$birthDate', '$cvAbout', '$cvPhone', '$cvEmail', '$cvSocial', '$cvWeb', '$cvAdress', '$this->file_path',' $cvAwards', '$cvEdu1', '$cvEduDate1', '$cvEduStatus1', '$cvEduAbout1', '$cvEdu2', '$cvEduDate2', '$cvEduStatus2', '$cvEduAbout2', '$cvEdu3', '$cvEduDate3', '$cvEduStatus3', '$cvEduAbout3', '$cvWork1', '$cvWorkDate1',' $cvWorkStatus1', '$cvWorkAbout1', '$cvWork2', '$cvWorkDate2', '$cvWorkStatus2', '$cvWorkAbout2', '$cvWork3', '$cvWorkDate3', '$cvWorkStatus3', '$cvWorkAbout3', '$cvWork4', '$cvWorkDate4', '$cvWorkStatus4', '$cvWorkAbout4')";
				$query = mysqli_query($connection, $sql);


		}
	}
	class ShowCv{
		function __construct($connection){
			$Showsql = "SELECT * FROM usercv WHERE cv_id=10";
			$Showquery = mysqli_query($connection, $Showsql);
			if($Showquery){
				$row=mysqli_fetch_assoc($Showquery);
				$cvName2=$row['cv_name'];
				$jobName=$row['cv_job'];
				$birthDate=$row['cv_bday'];
				$cvAbout=$row['cv_about'];
				$cvPhone=$row['cv_phone'];
				$cvEmail=$row['cv_email'];
				$cvSocial=$row['cv_social'];
				$cvWeb=$row['cv_web'];
				$cvAdress=$row['cv_adress'];
				$cvImg=$row['cv_img'];
				$cvAwards=$row['cv_awards'];
				$cvEdu1=$row['cv_edu1'];
				$cvEduDate1=$row['cv_edu_date1'];
				$cvEduStatus1=$row['cv_edu_status1'];
				$cvEduAbout1=$row['cv_edu_about1'];
				$cvEdu2=$row['cv_edu2'];
				$cvEduDate2=$row['cv_edu_date2'];
				$cvEduStatus2=$row['cv_edu_status2'];
				$cvEduAbout2=$row['cv_edu_about2'];
				$cvEdu3=$row['cv_edu3'];
				$cvEduDate3=$row['cv_edu_date3'];
				$cvEduStatus3=$row['cv_edu_status3'];
				$cvEduAbout3=$row['cv_edu_about3'];
				$cvWork1=$row['cv_work1'];
				$cvWorkDate1=$row['cv_work_date1'];
				$cvWorkStatus1=$row['cv_work_status1'];
				$cvWorkAbout1=$row['cv_work_about1'];
				$cvWork2=$row['cv_work2'];
				$cvWorkDate2=$row['cv_work_date2'];
				$cvWorkStatus2=$row['cv_work_status2'];
				$cvWorkAbout2=$row['cv_work_about2'];
				$cvWork3=$row['cv_work3'];
				$cvWorkDate3=$row['cv_work_date3'];
				$cvWorkStatus3=$row['cv_work_status3'];
				$cvWorkAbout3=$row['cv_work_about3'];
				$cvWork4=$row['cv_work4'];
				$cvWorkDate4=$row['cv_work_date4'];
				$cvWorkStatus4=$row['cv_work_status4'];
				$cvWorkAbout4=$row['cv_work_about4'];
				echo "            <div class="col s12 m9">


       <div class="col s12 m3">
        <div class="card">
          <div class="card-image">
            <img src="images/1.png" class="responsive-img">
          </div>
          <div class="card-content">
            <blockquote class=" grey-text">
              +994 55 885 73 09
            </blockquote>

            <blockquote class=" grey-text">
              knyaz.yaqublu@gmail.com
            </blockquote>

            <blockquote class=" grey-text">
              twitter.com@knyaz
            </blockquote>

            <blockquote class=" grey-text">
              www.knyazik.com
            </blockquote>

            <blockquote class=" grey-text">
              Ataturk ave.33 Baku Azerbaijan
            </blockquote>
            <div class="languages">
              <i class="material-icons left grey-text">language</i><h5 class="blue-text " name="desingText">LANGUAGES</h5>

              <span class="grey-text text-darken-2">ENGLISH</span> <i class="material-icons tiny right blue-text"  name="desingText">stars</i>
              <i class="material-icons tiny right blue-text  " name="desingText">stars</i>
              <i class="material-icons tiny right blue-text  " name="desingText">stars</i>
              <i class="material-icons tiny right blue-text  " name="desingText">stars</i>
              <i class="material-icons tiny right blue-text  " name="desingText">stars</i>

              <span class="grey-text text-darken-2">RUSSIAN</span> <i class="material-icons tiny right blue-text" name="desingText">stars</i>
              <i class="material-icons tiny right blue-text  " name="desingText">stars</i>
              <i class="material-icons tiny right blue-text  " name="desingText">stars</i>
              <i class="material-icons tiny right blue-text  " name="desingText">stars</i>
              <i class="material-icons tiny right blue-text  " name="desingText">stars</i>

          <span class="grey-text text-darken-2">SPANISH</span> <i class="material-icons tiny right blue-text"  name="desingText">stars</i>
              <i class="material-icons tiny right blue-text  " name="desingText">stars</i>
              <i class="material-icons tiny right blue-text  " name="desingText">stars</i>
              <i class="material-icons tiny right blue-text  " name="desingText">stars</i>
              <i class="material-icons tiny right blue-text  " name="desingText">stars</i>

              <span class="grey-text text-darken-2">TURKISH</span> <i class="material-icons tiny right blue-text"  name="desingText">stars</i>
              <i class="material-icons tiny right blue-text  " name="desingText">stars</i>
              <i class="material-icons tiny right blue-text " name="desingText">stars</i>
              <i class="material-icons tiny right blue-text " name="desingText">stars</i>
              <i class="material-icons tiny right blue-text " name="desingText">stars</i>
            
            </div>
           
            <div class="skills">
              

           
            
              <i class="material-icons left grey-text">list</i><h5 class="blue-text  " name="desingText">SKILLS</h5>
              <span class="grey-text text-darken-2">PHOTOSHOP</span> <i class="material-icons tiny right blue-text" name="desingText">stars</i>
              <i class="material-icons tiny right blue-text " name="desingText">stars</i>
              <i class="material-icons tiny right blue-text " name="desingText">stars</i>
              <i class="material-icons tiny right blue-text " name="desingText">stars</i>
              <i class="material-icons tiny right blue-text " name="desingText">stars</i>

              <span class="grey-text text-darken-2">HTML/CSS</span> <i class="material-icons tiny right blue-text" name="desingText">stars</i>
              <i class="material-icons tiny right blue-text " name="desingText">stars</i>
              <i class="material-icons tiny right blue-text " name="desingText">stars</i>
              <i class="material-icons tiny right blue-text " name="desingText">stars</i>
              <i class="material-icons tiny right blue-text " name="desingText">stars</i>

              <span class="grey-text text-darken-2">ILLUSTRATOR</span> <i class="material-icons tiny right blue-text" name="desingText">stars</i>
              <i class="material-icons tiny right blue-text " name="desingText">stars</i>
              <i class="material-icons tiny right blue-text " name="desingText">stars</i>
              <i class="material-icons tiny right blue-text " name="desingText">stars</i>
              <i class="material-icons tiny right blue-text " name="desingText">stars</i>

              <span class="grey-text text-darken-2">SKETCH</span> <i class="material-icons tiny right blue-text"  name="desingText">stars</i>
              <i class="material-icons tiny right blue-text " name="desingText">stars</i>
              <i class="material-icons tiny right blue-text " name="desingText">stars</i>
              <i class="material-icons tiny right blue-text " name="desingText">stars</i>
              <i class="material-icons tiny right blue-text " name="desingText">stars</i>


             </div>
             <div class="awards">

              <i class="material-icons left grey-text">grade</i><h5 class='blue-text' name='desingText'>AWARDS</h5>
              <p class='grey-text'>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae a ipsa fugit. Iusto a aspernatur ratione eos officia perspiciatis est porro. Earum pariatur hic eaque, est architecto odit quae cupiditate?Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
            </div>
            <a class='btn grey black-text'><i class='material-icons center'>add</i> <span>ADD MORE</span></a>

          </div>

        </div>
      </div>




      <div class='col s12 m9 right white'>
        <div class='card white darken-1'>
          <div class='card-content grey-text'>
            <h2 class=' blue-text text-darken-3' name='desingText'><b>KNYAZ YAQUBOV</b></h2>
            <h5 class='grey-text'><b>GRAPHIC DESIGNER</b></h5>
            <h6 class='grey-text'>Date of birth: 02.06.1989</h6>

            <p class='grey-text'>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae a ipsa fugit. Iusto a aspernatur ratione eos officia 
              perspiciatis est porro. Earum pariatur hic eaque, est architecto odit quae cupiditate?Lorem ipsum dolor sit amet,
               consectetur adipisicing elit. Molestiae a ipsa fugit. Iusto a aspernatur ratione eos officia perspiciatis est porro. 
               Earum pariatur hic eaque, est architecto odit quae cupiditate?Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                Molestiae a ipsa fugit. Iusto a aspernatur ratione eos officia perspiciatis est porro. Earum pariatur hic eaque, est
                 architecto odit quae cupiditate?</p>



                <div class='row'>
                  
                   <div class='edit'>
                    <form action="">
                      <fieldset>
                        <legend>
                          <ul class='fieldset'>
                            <li><a class='btn'><i class='material-icons'>edit</i></a></li>
                            <li> <a class='btn waves-effect waves-light'><i class='material-icons'>keyboard_arrow_up</i></a></li>
                            <li> <a class='btn'><i class='material-icons'>keyboard_arrow_down</i></a></li>
                          </ul>
                         
                         
                         
                        </legend>

                            <i class='material-icons left grey-text'>school</i><h5 class='blue-text' name='desingText'>EDUCATION</h5>
                    <div class='row'> 
                      <span class=' grey-text text-darken-2'><b>2012-2013 AZƏRBAYCAN DÖVLƏT PEDAQOJİ UNİVERSİTETİ</b></span> <br>
                      <span class='grey-text text-darken-2'>BAKALAVR</span>
                      <p class='grey-text'>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae a ipsa fugit. Iusto 
                        a aspernatur ratione eos officia perspiciatis est porro.</p>
                    </div>
                     

                     <div class='row'> 
                      <span class=' grey-text text-darken-2'><b>2012-2013 AZƏRBAYCAN DÖVLƏT PEDAQOJİ UNİVERSİTETİ</b></span> <br>
                      <span class='grey-text text-darken-2'>BAKALAVR</span>
                      <p class='grey-text'>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae a ipsa fugit. Iusto 
                        a aspernatur ratione eos officia perspiciatis est porro.</p>
                    </div>
                      <div class='row'> 
                      <span class=' grey-text text-darken-2'><b>2012-2013 AZƏRBAYCAN DÖVLƏT PEDAQOJİ UNİVERSİTETİ</b></span> <br>
                      <span class='grey-text text-darken-2'>BAKALAVR</span>
                      <p class='grey-text'>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae a ipsa fugit. Iusto 
                        a aspernatur ratione eos officia perspiciatis est porro.</p>


                      </fieldset>

                    </form>
                    
                    </div>


            </div>
                </div>
                 
                
            
            
            <div class='edit'>
              <i class='material-icons left grey-text'>work</i><h5 class='blue-text ' name='desingText'>WORK EXPERIENCE</h5>
              <div class='row'>
                 <span class='grey-text text-darken-2'><b>2012-2013 APPLE INC  </b></span> <br>
                <span class='grey-text text-darken-2'>GRAPHIC AND WEB DESIGN</span>
                <p class='grey-text'>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae a ipsa fugit. Iusto
                 a aspernatur ratione eos officia perspiciatis est porro.</p> 

              </div>
              <div class='row'>
                 <span class='grey-text text-darken-2'><b>2012-2013 APPLE INC  </b></span> <br>
                <span class='grey-text text-darken-2'>GRAPHIC AND WEB DESIGN</span>
                <p class='grey-text'>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae a ipsa fugit. Iusto
                 a aspernatur ratione eos officia perspiciatis est porro.</p> 

              </div>

             

              <div class='row'>
                <span class=' grey-text text-darken-2'><b>2012-2013 MICROSOFT CORPORATION</b></span> <br>
                <span class='grey-text text-darken-2'>GRAPHIC AND WEB DESIGN</span>
                <p class='grey-text'>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae a ipsa fugit. Iusto a aspernatur ratione eos officia perspiciatis est porro.</p> 

              </div>

              <div class='row'>
                <span class=' grey-text text-darken-2'><b>2012-2013 MICROSOFT CORPORATION</b></span> <br>
                <span class='grey-text text-darken-2'>GRAPHIC AND WEB DESIGN</span>
                <p class='grey-text'>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae a ipsa fugit. Iusto a aspernatur ratione eos officia perspiciatis est porro.</p> 

              </div>

            </div>
            <a class='btn grey black-text'><i class='material-icons center'>add</i> <span>ADD MORE</span></a>

            </div>
           
          </div>
        </div>
      </div>";
			}else{
				echo "error";
			}
		}
	}

 ?>