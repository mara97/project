<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\Http\Requests;
use Redirect;
use Auth;
use App\EducationModel;
use App\WorkModel;
use App\PersonalDataModel;
use App\PersonalContactModel;
use App\LanguagesModel;
use App\SkillsModel;
use App\AwardsModel;
use Input;
use Validator;
use Session;
class templateController extends Controller
{
      function updateImage($id){
          $imageRow = PersonalDataModel::Find($id);
          
          return $imageRow;
    }
    function insertImage(Request $request, $id, $id2){
       // getting all of the post data
            $file = $request->file('image');
             if ($request->file('image')->isValid()) {
                $destinationPath = 'uploads'; // upload path
                $extension = $request->file('image')->getClientOriginalExtension();
                if($extension =="img" || $extension=="jpg" || $extension=="jpeg" || $extension == "png"){
                    $fileName = rand(11111,99999).'.'.$extension; // renameing image
                    $request->file('image')->move($destinationPath, $fileName); // uploading file to given path
                    // sending back with message

                    $fullUrl = '/'.$destinationPath.'/'.$fileName;
                     DB::table('personal_data')
                    ->where('personal_data_id', $id)
                    ->update(array('image_url' => $fullUrl));
                    return redirect("cv/$id2");


                    Session::flash('success', 'Upload successfully'); 
                    return Redirect::to("/cv/$id2");
                }else{
                  return Redirect::to("/cv/$id2");
                }

              }
              else {
                // sending back with error message.
                Session::flash('error', 'uploaded file is not valid');
                return Redirect::to("/cv/$id2");
              }
    }

    function cvCreate($id, $id2){
      $userid= Auth::user()->id;
      $username= Auth::user()->name;
      DB::table('cv')->insert(['cv_name' => $username, 'user_id' => $userid, 'template_id' => $id2]);
      $userNewCv = DB::table('cv')->where('user_id', $userid)->orderBy('created_at', 'desc')->first();
      $userNewCvId = $userNewCv->cv_id;

      // Default template fields

      DB::table('personal_data')->insert(['personal_data_fname' => $username, 'image_url' => '/images/1.png', 'personal_data_bdate' => "00/00/0000", 'personal_data_info' => "About yourself", 'personal_data_profession' => "Your profession", 'cv_id' => $userNewCvId]);


      DB::table('personal_contact')->insert(['personal_contact_name' => "Email", 'personal_contact_data' => "example@asancv.com" , 'cv_id' => $userNewCvId]);
      DB::table('personal_contact')->insert(['personal_contact_name' => "Phone", 'personal_contact_data' => "000 000 00 00" , 'cv_id' => $userNewCvId]);

      DB::table('languages')->insert(['language_name' => 'your language', 'language_level' => 'language level', 'cv_id' => $userNewCvId]);
      DB::table('languages')->insert(['language_name' => 'your language', 'language_level' => 'language level', 'cv_id' => $userNewCvId]);
      DB::table('skills')->insert(['skill_name' => 'Your skill', 'skill_level' => 'your skill level', 'cv_id' => $userNewCvId]);
      DB::table('skills')->insert(['skill_name' => 'Your skill', 'skill_level' => 'your skill level', 'cv_id' => $userNewCvId]);
      DB::table('awards')->insert(['award_text' => 'About your award', 'cv_id' => $userNewCvId]);

     DB::table('works')->insert(['work_date' => '2013 - 2016', 'cv_id' => $userNewCvId, 'work_company' => 'your work company', 'work_profession' => 'Your profession', 'work_info' => 'Some information about your work']);

      DB::table('educations')->insert(['education_date' => '2008-2012', 'cv_id' => $userNewCvId, 'education_name' => 'Name of your education school', 'education_degree' => 'your education degree', 'education_info' => 'Some information about your education']);
      // Default template fields end

      return redirect("cv/$userNewCvId");
    }
    function template($id){
        $cvCheck = DB::table('cv')->where('cv_id', $id)->first();
        if($cvCheck->user_id==Auth::user()->id){
            $userEducations = EducationModel::where('cv_id', $id)->get();
            $userWorks = WorkModel::where('cv_id', '=', $id)->get();
            $userPersonalDatas = PersonalDataModel::where('cv_id', $id)->get();
            $userPersonalContacts = PersonalContactModel::where('cv_id', $id)->get();
            $languages = LanguagesModel::where('cv_id', $id)->get();
            $skills = SkillsModel::where('cv_id', $id)->get();
            $awards = AwardsModel::where('cv_id', $id)->get();
            $cvId = $id;
            $templateCheck = DB::table('cv')->where('cv_id', $id)->first();
            $templateId = $templateCheck->template_id;
            return view("template$templateId", compact('cvId','awards','skills','languages', 'userEducations', 'userWorks', 'userPersonalDatas', 'userPersonalContacts'));
        }else{
          return redirect("/");
        }

    }
    function test(){
      return view('test');
    }
    function insertWork(Request $request, $id){
      DB::table('works')->insert(['work_date' => $request->work_date, 'cv_id' => $id, 'work_company' => $request->work_company, 'work_profession' => $request->work_profession, 'work_info' => $request->work_info]);
        $userid= Auth::user()->id;
      return redirect("cv/$id");
    }
    function updateWork($id){
          $workRow = WorkModel::Find($id);
          
          return $workRow;
    }
    function updatePdata($id){
          $pDataRow = PersonalDataModel::Find($id);
          
          return $pDataRow;
    }
    function deleteWork($id){
           DB::table('works')->where('work_id', '=', $id)->delete();
           return ; 
    }
    function updateAddWork(Request $request, $id, $id2){

        DB::table('works')
            ->where('work_id', $id)
            ->update(array('work_date' => $request->work_date, 'work_company' => $request->work_company, 'work_profession' => $request->work_profession, 'work_info' => $request->work_info));
              $userid= Auth::user()->id;
        return redirect("cv/$id2");
    }
    function updateAddPdata(Request $request, $id, $id2){
      $cvCheck = DB::table('personal_data')->where('personal_data_id', $id)->first();
      $dataCheckCv = $cvCheck->cv_id;
      $userCheck = DB::table('cv')->where('cv_id', $dataCheckCv)->first();
      if($userCheck->user_id==Auth::user()->id){

        DB::table('personal_data')
            ->where('personal_data_id', $id)
            ->update(array('personal_data_fname' => $request->personal_data_fname, 'personal_data_bdate' => $request->personal_data_bdate, 'personal_data_info' => $request->personal_data_info, 'personal_data_profession' => $request->personal_data_profession));
      $userid= Auth::user()->id;
      return redirect("cv/$id2");
    }else{
      return redirect("/");
    }

    }

    function insertNumber(Request $request, $id){
        DB::table('personal_contact')->insert(['personal_contact_name' => $request->personal_contact_name, 'personal_contact_data' => $request->personal_contact_data , 'cv_id' => $id]);
        $userid= Auth::user()->id;
      return redirect("cv/$id");
    }
    function deletePhone($id){
           DB::table('personal_contact')->where('personal_contact_id', '=', $id)->delete();
           return ; 
    }
    function updatePhone($id){
          $phoneRow = PersonalContactModel::Find($id);
          
          return $phoneRow;
    }
    function updateAddPhone(Request $request, $id, $id2){
        DB::table('personal_contact')
            ->where('personal_contact_id', $id)
            ->update(array('personal_contact_name' => $request->personal_contact_name, 'personal_contact_data' => $request->personal_contact_data));
        $userid= Auth::user()->id;
      return redirect("cv/$id2");
    }
    function deleteLanguage($id){
           DB::table('languages')->where('language_id', '=', $id)->delete();
           return ; 
    }
    function insertLanguage(Request $request, $id){
        DB::table('languages')->insert(['language_name' => $request->language_name, 'language_level' => $request->language_level, 'cv_id' => $id]);
       $userid= Auth::user()->id;
      return redirect("cv/$id");
    }
    function updateAddLanguage(Request $request, $id, $id2){
        DB::table('languages')
            ->where('language_id', $id)
            ->update(array('language_name' => $request->language_name,'language_level' => $request->language_level));
        $userid= Auth::user()->id;
      return redirect("cv/$id2");   
    }
    function updateLanguage($id){
          $languageRow = LanguagesModel::Find($id);
          
          return $languageRow;
    }

     function deleteSkills($id){
           DB::table('skills')->where('skill_id', '=', $id)->delete();
           return ; 
    }
    function insertSkills(Request $request, $id){
        DB::table('skills')->insert(['skill_name' => $request->skill_name, 'skill_level' => $request->skill_level, 'cv_id' => $id]);
        $userid= Auth::user()->id;
      return redirect("cv/$id");
    }
    function updateAddSkills(Request $request, $id, $id2){
        DB::table('skills')
            ->where('skill_id', $id)
            ->update(array('skill_name' => $request->skill_name,'skill_level' => $request->skill_level));
        $userid= Auth::user()->id;
      return redirect("cv/$id2"); 
    }
    function updateSkills($id){
          $skillsRow = SkillsModel::Find($id);
          
          return $skillsRow;
    }

         function deleteAwards($id){
           DB::table('awards')->where('award_id', '=', $id)->delete();
           return ; 
    }
    function insertAwards(Request $request, $id){
        DB::table('awards')->insert(['award_text' => $request->award_text, 'cv_id' => $id]);
        $userid= Auth::user()->id;
      return redirect("cv/$id");
    }
    function updateAddAwards(Request $request, $id, $id2){
        DB::table('awards')
            ->where('award_id', $id)
            ->update(array('award_text' => $request->award_text));
        $userid= Auth::user()->id;
      return redirect("cv/$id2");    
    }
    function updateAwards($id){
          $awardsRow = AwardsModel::Find($id);
          
          return $awardsRow;
    }

    function deleteEdu($id){
           DB::table('educations')->where('education_id', '=', $id)->delete();
           return ; 
    }
    function insertEducation(Request $request, $id){
        DB::table('educations')->insert(['education_date' => $request->education_date, 'cv_id' => $id, 'education_name' => $request->education_name, 'education_degree' => $request->education_degree, 'education_info' => $request->education_info]);
        $userid= Auth::user()->id;
      return redirect("cv/$id");
    }
    function updateAddEdu(Request $request, $id, $id2){
        DB::table('educations')
            ->where('education_id', $id)
            ->update(array('education_date' => $request->education_date, 'education_name' => $request->education_name, 'education_degree' => $request->education_degree, 'education_info' => $request->education_info));
              $userid= Auth::user()->id;
      return redirect("cv/$id2");   
    }
    function updateEdu($id){
          $eduRow = EducationModel::Find($id);
          
          return $eduRow;
    }





     //////



    function userArea($id){
      if($id==Auth::user()->id){
      $userCvs = DB::table('cv')->where('user_id', $id)->get();
        return view('userarea', compact('id', 'userCvs','userPersonalDatas'));
      }else{
        return redirect("/");  
      }
    }
}
