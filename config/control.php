<?php
          include('model.php');

class control{

     function login($id,$pass){
          $m=new model();
          $r=$m->login1($id,$pass);
          return $r;
     }

     function hlogin($id,$pass){
          $m=new model();
          $r=$m->hlogin1($id,$pass);
          return $r;
     }

     function ngologin($username,$password){
          $m=new model();
          $r=$m->ngologin1($username,$password);
          return $r;
     }
     function fetchpandemics(){
         $m=new model();
         $r=$m->fetchpanda();
         return $r;
     }

     function fetchpandemic($id){
          $m=new model();
         $r=$m->fetchpand($id);
         return $r;
     }

     function historyinput($pname,$author,$des,$attachment){
          $m=new model();
          $r=$m->hisinput($pname,$author,$des,$attachment);
          return $r;
     }

     function addhospi($hospitalname,$email,$mobno,$address,$nbed,$hcategory,$about,$image){
          $m=new model();
          $r=$m->addhospital($hospitalname,$email,$mobno,$address,$nbed,$hcategory,$about,$image);
          return $r;
     }

     function fetchhospitals(){
          $m=new model();
          $r=$m->fetchhospital();
          return $r;
     }

     function addngo($ngoname,$email,$mobno,$address,$about,$image){
          $m=new model();
          $r=$m->addngo1($ngoname,$email,$mobno,$address,$about,$image);
          return $r;
     }

     function fetchselfawbyid($id){
          $m=new model();
          $r=$m->fetchsfid($id);
          return $r;
          
     }


     function fetchngos(){
          $m=new model();
          $r=$m->fetchngo();
          return $r;
     }

     function fetchselfaw(){
          $m=new model();
          $r=$m->fetchselfaware();
          return $r;
     }

     function fetchselfawo(){
          $m=new model();
          $r=$m->fetchselfawareo();
          return $r;
     }


     function adddoc($doctorname,$email,$mobno,$gender,$des,$category,$image,$password){
          $m=new model();
          $r=$m->adddoctor($doctorname,$email,$mobno,$gender,$des,$category,$image,$password);
          return $r;
     }

     function addcategory($category){
         $m=new model();
         $r=$m->addcategory1($category); 
         return $r;
     
     }

     function fetchcategory(){
          $m=new model();
          $r=$m->fetchcat();
          return $r;
     }

     function deldoc($id){
          $m=new model();
          $r=$m->deldoctor($id);
          return $r;
     }

     function delngo($id){
          $m=new model();
          $r=$m->delngo1($id);
          return $r;
     }

     function delhospi($id){
          $m=new model();
          $r=$m->delhospital($id);
          return $r;
     }

     function delcat($id){
          $m=new model();
          $r=$m->delcategory($id);
          return $r;
     }

     function fetchdoc(){
          $m=new model();
          $r=$m->fetchdoctor();
          return $r;
     }

     function fetchhospi(){
          $m=new model();
          $r=$m->fetchhospital1();
          return $r;
     }

     function fetchngo(){
          $m=new model();
          $r=$m->fetchngo1();
          return $r;
          
     }

     function fetchcat(){
          $m=new model();
          $r=$m->fetchcategory();
          return $r;
          
     }

     function addselfcomment($id,$name,$comment){
          $m=new model();
          $r=$m->addselfcom($id,$name,$comment);
          return $r;
     }

     function fetchselfcomment($id){
          $m=new model();
          $r=$m->fetchselfcom($id);
          return $r;
     }

     function updatebed($hospitalname,$cbed){
          $m=new model();
          $r=$m->upbed($hospitalname,$cbed);
          return $r;
     }

     function fetchselfawbycat($ide){
          $m=new model();
          $r=$m->fetchselfawbycatg($ide);
          return $r;
     }
     function fetchhospibyid($id){
          $m=new model();
          $r=$m->fetchhospitalbyid($id);
          return $r;
     }
     function fetchngobyid($id){
          $m=new model();
          $r=$m->fetchngo1byid($id);
          return $r;
     
     }

     function fetchhisbyid($id){
          $m=new model();
          $r=$m->fetchhistorybyid($id);
          return $r;
     
     }

     function fetchhistorydate(){
          $m=new model();
          $r=$m->fetchhistorycdate();
          return $r;
     
     }

     function askissue($name,$category,$title,$issue,$file){
          $m=new model();
          $r=$m->addissue1($name,$category,$title,$issue,$file);
          return $r;
     
     }
     function fetchissue(){
          $m=new model();
          $r=$m->fetchissue1();
          return $r;
     
     }

     function fetchissuebyid($id){
          $m=new model();
          $r=$m->fetchissuebyid1($id);
          return $r;
     
     }

     function fetchissuebycategory($id){
          $m=new model();
          $r=$m->fetchissuebycat($id);
          return $r;
     
     }


     function addanswer($name,$id,$description,$file){
          $m=new model();
          $r=$m->addanswer1($name,$id,$description,$file);
          return $r;
     
     }

     function fetchansbyid($id){
          $m=new model();
          $r=$m->fetchanswerbyid($id);
          return $r;
     
     }
     function addcomment($name,$id,$desc){
          $m=new model();
          $r=$m->addcomment1($name,$id,$desc);
          return $r;
     
     }

     function fetchanscommentbyid($id){
          $m=new model();
          $r=$m->fetchanscommentby($id);
          return $r;
     }

     function adduser($name,$email,$mobno,$pass){
          $m=new model();
          $r=$m->adduser1($name,$email,$mobno,$pass);
          return $r;  
     }
     
     function fetchadmin(){
          $m=new model();
          $r=$m->fetchadmin1();
          return $r;  
     }

     function deladmin($id){
          $m=new model();
          $r=$m->deladmin1($id);
          return $r;
     }

     function updateadmin($name,$mail,$mob,$pass){
          $m=new model();
          $r=$m->upadmin($name,$mail,$mob,$pass);
          return $r;
     }

     function requestbed($email,$name,$id,$bed,$mobile,$reason){
          $m=new model();
          $r=$m->requestbed1($email,$name,$id,$bed,$mobile,$reason);
          return $r;
     }

     function fetchhid($name){
          $m=new model();
          $r=$m->fetchhid1($name);
          return $r;
     }

     function fetchbedrequestbyid($id){
          $m=new model();
          $r=$m->fetchbedrequestbyid1($id);
          return $r;
     }

     function rejectbed($id,$hid){
          $m=new model();
          $r=$m->rejectbed1($id,$hid);
          return $r;
     }

     function acceptbed($id,$hid ){
          $m=new model();
          $r=$m->acceptbed1($id,$hid);
          return $r;
     }

     function delhistory($id){
          $m=new model();
          $r=$m->delhistory1($id);
          return $r;
     }

     function fetchadminbyid($id){
          $m=new model();
          $r=$m->fetchadminby($id);
          return $r;
     }
     function  fetchbedsbyid($id){
          $m=new model();
          $r=$m->fetchbedsby1($id);
          return $r;
     }
     function fetchprofile($id){
          $m=new model();
          $r=$m->fetchpro($id);
          return $r;
     }

     function fetchnotification($email){
          $m=new model();
          $r=$m->fetchnotifications($email);
          return $r;
     }

     function addannounce($id,$date,$time,$location,$event,$coordi,$mobile,$msg,$email){
          $m=new model();
          $r=$m->addannounce1($id,$date,$time,$location,$event,$coordi,$mobile,$msg,$email);
          return $r;
     }

     function fetchannouncementbyid($email){
          $m=new model();
          $r=$m->fetchannouncementbyid1($email);
          return $r;
     }
}
     

?>