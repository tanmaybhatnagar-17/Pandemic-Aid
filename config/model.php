<?php
class model{
     public $con="";
          function __construct()
          {
               $this->con=mysqli_connect("localhost","root","","pandemic");

          }

          function login1($username,$password){
                
                   //to prevent from mysqli injection 
                   $username = stripcslashes($username); 
                   $password = stripcslashes($password); 
                   $username = mysqli_real_escape_string($this->con, $username); 
                   $password = mysqli_real_escape_string($this->con, $password); 
                
                   $sql = "SELECT * from `doctor` where email = '$username' and password = '$password'"; 
                   $result = mysqli_query($this->con, $sql); 
                   $row = mysqli_fetch_array($result, MYSQLI_ASSOC); 
                   $count = mysqli_num_rows($result); 
                    
                   if($count == 1){ 
                       $_SESSION['name']=$row['name']; 
                       $_SESSION['login']=$row['email'];
                       $_SESSION['category']=$row['category'];
                       header("location:doctor/index.php"); 
                   } 
                   else{ 
                    $sql = "SELECT * from `user` where email = '$username' and password = '$password'"; 
                    $result = mysqli_query($this->con, $sql); 
                    $row = mysqli_fetch_array($result, MYSQLI_ASSOC); 
                    $count = mysqli_num_rows($result); 
                     
                    if($count == 1){ 
                        $_SESSION['name']=$row['name']; 
                        $_SESSION['login']=$row['email'];
                        $_SESSION['id']=$row['id'];
                        return $result;

                    }else{
                         $sql = "SELECT * from `admin-login` where email = '$username' and password = '$password'"; 
                    $result = mysqli_query($this->con, $sql); 
                    $row = mysqli_fetch_array($result, MYSQLI_ASSOC); 
                    $count = mysqli_num_rows($result); 
                     
                    if($count == 1){ 
                        $_SESSION['name']=$row['name']; 
                        $_SESSION['login']=$row['email'];
                        $_SESSION['id']=$row['id'];
                        header("location:admin/index.php");

                    }    
                    else{
                         echo "<script>alert('404 Error Occured!!! 😒');</script>";
                           }
          }   
     }                    
          }

          function hlogin1($username,$password){
                
               //to prevent from mysqli injection 
               $username = stripcslashes($username); 
               $password = stripcslashes($password); 
               $username = mysqli_real_escape_string($this->con, $username); 
               $password = mysqli_real_escape_string($this->con, $password); 
            
               $sql = "SELECT * from `hospital` where email = '$username' and password = '$password'"; 
               $result = mysqli_query($this->con, $sql); 
               $row = mysqli_fetch_array($result, MYSQLI_ASSOC); 
               $count = mysqli_num_rows($result); 
                
               if($count == 1){ 
                   $_SESSION['name']=$row['hname']; 
                   $_SESSION['login']=$row['email'];
                   header("location:index.php"); 
               } 
               
                else{
                     echo "<script>alert('404 Error Occured!!! 😒');</script>";
               }                 
          }
          function ngologin1($username,$password){
                
               //to prevent from mysqli injection 
               $username = stripcslashes($username); 
               $password = stripcslashes($password); 
               $username = mysqli_real_escape_string($this->con, $username); 
               $password = mysqli_real_escape_string($this->con, $password); 
            
               $sql = "SELECT * from `ngo` where email = '$username' and password = '$password'"; 
               $result = mysqli_query($this->con, $sql); 
               $row = mysqli_fetch_array($result, MYSQLI_ASSOC); 
               $count = mysqli_num_rows($result); 
                
               if($count == 1){ 
                   $_SESSION['name']=$row['oname']; 
                   $_SESSION['login']=$row['email'];
                   header("location:index.php"); 
               } 
               
                else{
                     echo "<script>alert('404 Error Occured!!! 😒');</script>";
               }                 
          }

          function fetchpand($id){
               $r=mysqli_query($this->con,"SELECT * FROM `history` WHERE pan_name='id'");
               return $r; 
          }

          function fetchpanda(){
              $r=mysqli_query($this->con,"SELECT * FROM `history` WHERE 1");
              return $r;
          }

          function hisinput($pname,$author,$des,$attachment){
               $r=mysqli_query($this->con,"INSERT INTO `history`(`pan_name`, `author`, `attachment`, `description`) VALUES ('$pname','$author','$attachment','$des')");
               return $r;
          }

          function addhospital($hospitalname,$email,$mobno,$address,$nbed,$hcategory,$about,$image){
               $r=mysqli_query($this->con,"INSERT INTO `hospital`(`hname`, `email`, `mob`, `address`, `about`, `nbed`, `category`, `image`) VALUES ('$hospitalname','$email','$mobno','$address','$about','$nbed','$hcategory','$image')");
               return $r;
          }

          function fetchhospital(){
               $r=mysqli_query($this->con,"SELECT * FROM `hospital` WHERE 1");;
               return $r;
          }

          function addngo1($ngoname,$email,$mobno,$address,$ngoreg,$about,$image){
               $r=mysqli_query($this->con,"INSERT INTO `ngo`(`oname`, `email`, `mob`, `address`,`reg`, `about`, `image`) VALUES ('$ngoname','$email','$mobno','$address','$about','$image')");
               return $r;
          }

          function fetchngo(){
               $r=mysqli_query($this->con,"SELECT * FROM `ngo` WHERE 1");
               return $r;
          }

          function adddoctor($doctorname,$email,$mobno,$gender,$des,$category,$image,$password){
               $r=mysqli_query($this->con,"INSERT INTO `doctor`(`name`, `email`, `mob`, `gender`, `description`, `category`, `image`,`password`) VALUES ('$doctorname','$email','$mobno','$gender','$des','$category','$image','$password')");
               return $r;
          }

          function addcategory1($category){
               $r=mysqli_query($this->con,"INSERT INTO `category`(`category`) VALUES ('$category')");
               return $r;
          }

          function deldoctor($id){
               $r=mysqli_query($this->con,"DELETE FROM `doctor` WHERE id='$id'");
               return $r;
          
          }

          function delngo1($id){
               $r=mysqli_query($this->con,"DELETE FROM `ngo` WHERE id='$id'");
               return $r;
          
          }

          function delhospital($id){
               $r=mysqli_query($this->con,"DELETE FROM `hospital` WHERE id='$id'");
               return $r;
          
          }
          
          function delcategory($id){
               $r=mysqli_query($this->con,"DELETE FROM `category` WHERE id='$id'");
               return $r;
          
          }

          function fetchcat(){
               $r=mysqli_query($this->con,"SELECT * FROM `category` WHERE 1");
               return $r;
          }

          function fetchdoctor(){
               $r=mysqli_query($this->con,"SELECT * FROM `doctor` WHERE 1");
               return $r;
               
          }

          function fetchsfid($id){
               $r=mysqli_query($this->con,"SELECT * FROM `selfaw` WHERE id='$id'");
               return $r;
               
          }

          function fetchhospital1(){
               $r=mysqli_query($this->con,"SELECT * FROM `hospital` WHERE 1");
               return $r;
               
          }

          function fetchselfaware(){
               $r=mysqli_query($this->con,"SELECT * FROM `selfaw` WHERE 1");
               return $r;
               
          }

          function fetchselfawareo(){
               $r=mysqli_query($this->con,"SELECT * FROM `selfaw` ORDER BY  `creationdate` DESC");
               return $r;
               
          }

          function fetchngo1(){
               $r=mysqli_query($this->con,"SELECT * FROM `ngo` WHERE 1");
               return $r;
               
          }

          function fetchcategory(){
               $r=mysqli_query($this->con,"SELECT * FROM `category` WHERE 1");
               return $r;
               
          }


          function addselfcom($id,$name,$comment){
               $r=mysqli_query($this->con,"INSERT INTO `selfaw_comment`(`author`,`SID`,`comment`) VALUES ('$name','$id','$comment')");
               return $r;
          }

          function fetchselfcom($id){
               $r=mysqli_query($this->con,"SELECT * FROM `selfaw_comment` WHERE `SID`='$id' ");
               return $r;
          }

          function upbed($hospitalname,$cbed){
               $r=mysqli_query($this->con,"UPDATE `hospital` SET `cbed`='$cbed' WHERE  `hname`='$hospitalname' ");
               return $r;
          }

          function fetchselfawbycatg($ide){
               $r=mysqli_query($this->con,"SELECT * FROM `selfaw` WHERE category='$ide'");
               return $r;
          }
          
          function fetchhospitalbyid($id){
               $r=mysqli_query($this->con,"SELECT * FROM `hospital` WHERE id='$id'");
               return $r;
               
          }

          function fetchngo1byid($id){
               $r=mysqli_query($this->con,"SELECT * FROM `ngo` WHERE id='$id'");
               return $r;
               
          }

          function fetchhistorybyid($id){
               $r=mysqli_query($this->con,"SELECT * FROM `history` WHERE id='$id'");
               return $r;
               
          }

          function fetchhistorycdate(){
               $r=mysqli_query($this->con,"SELECT * FROM `history` ORDER BY  `createdate` DESC");
               return $r;
               
          }

          function addissue1($name,$category,$title,$issue,$file){
               $r=mysqli_query($this->con,"INSERT INTO `questions`(`name`, `title`, `description`, `category`, `attachment`) VALUES ('$name ','$title ','$issue ','$category ','$file')");
               return $r;

          }

          function fetchissue1(){
               $r=mysqli_query($this->con,"SELECT * FROM `questions` order by cid desc");
               return $r;             
          }

          function fetchissuebyid1($id){
               $r=mysqli_query($this->con,"SELECT * FROM `questions` WHERE cid='$id'");
               return $r;
               
          }
          
          function fetchissuebycat($id){
               $r=mysqli_query($this->con,"SELECT * FROM `questions` WHERE category='$id'");
               return $r;
               
          }

          function addanswer1($name,$id,$description,$file){
               $r=mysqli_query($this->con,"INSERT INTO `answertable`(`cid`, `name`, `description`, `attachment`) VALUES ('$id','$name','$description','$file')");
               return $r;

          }

          function fetchanswerbyid($id){
               $r=mysqli_query($this->con,"SELECT * FROM `answertable` WHERE cid='$id'");
               return $r;
               
          }

          function addcomment1($name,$id,$desc){
               $r=mysqli_query($this->con,"INSERT INTO `answer_comment`(`cid`, `name`, `description`) VALUES ('$id','$name','$desc')");
               return $r;
          }

          function fetchanscommentby($id){
               $r=mysqli_query($this->con,"SELECT * FROM `answer_comment` WHERE cid='$id'");
               return $r;
          }

          function adduser1($name,$email,$mobno,$pass){
               $r=mysqli_query($this->con,"INSERT INTO `user`(`name`, `email`, `mobile`, `password`) VALUES ('$name','$email','$mobno','$pass')");
               return $r;
          }

          function fetchadmin1(){
               $r=mysqli_query($this->con,"SELECT * FROM `admin-login` where 1");
               return $r;             
                       
          }

          function deladmin1($id){
               $r=mysqli_query($this->con,"DELETE FROM `admin-login` WHERE id='$id'");
               return $r;
          
          }

          function upadmin($name,$mail,$mob,$pass){
               $r=mysqli_query($this->con,"UPDATE `admin-login` SET `name`='$name',`email`='$mail',`mob`='$mob',`password`='$pass' WHERE 1 ");
               return $r;
          }

          function requestbed1($email,$name,$id,$bed,$mobile,$reason){
               $r=mysqli_query($this->con,"INSERT INTO `bed_request`( `Hid`, `bed`, `reason`, `name`, `mobile_no`,`email`) VALUES ('$id','$bed','$reason','$name','$mobile','$email')");
               return $r;
          }
          function fetchhid1($name){
               $r=mysqli_query($this->con,"SELECT id FROM `hospital` WHERE email='$name'");
               return $r;
          }
          function fetchbedrequestbyid1($id){
               $r=mysqli_query($this->con,"SELECT * FROM `bed_request` WHERE Hid='$id' && `status`='pending' ");
               return $r;
          }

          function rejectbed1($id,$hid){
               $r=mysqli_query($this->con,"UPDATE `bed_request` SET `status`='0' WHERE id='$id' ");
               $result=mysqli_query($this->con,"SELECT bed,email from bed_request where Hid='$hid' and id='$id'");
               $row=mysqli_fetch_array($result);
               $result2=mysqli_query($this->con,"SELECT `hname` FROM `hospital` WHERE id='$hid'");
               $row1=mysqli_fetch_array($result2);
               $hospital=$row1['hname'];
               $email=$row['email'];
               $bed=$row['bed'];
               $msg="Your ".$bed." request in ".$hospital." has been Rejected.";
               $result1=mysqli_query($this->con,"INSERT INTO `notification`(`email`, `message`) VALUES ('$email','$msg')");
               return $r;
          }

          function acceptbed1($id,$hid){
               $r=mysqli_query($this->con,"UPDATE `bed_request` SET `status`='1' WHERE id='$id'");
               $result=mysqli_query($this->con,"SELECT bed,email from bed_request where Hid='$hid' and id='$id'");
               $row=mysqli_fetch_array($result);
               if ($row['bed']=="General Bed") {
                    $result1=mysqli_query($this->con,"UPDATE `hospital` SET `non_oxi_bed`=`non_oxi_bed`-1 WHERE id='$hid'");
               }elseif($row['bed']=="Oxygen Bed"){
                    $result1=mysqli_query($this->con,"UPDATE `hospital` SET `oxi_bed`=`oxi_bed`-1 WHERE id='$hid'");
               }elseif ($row['bed']=="Ventilator Bed") {
                    $result1=mysqli_query($this->con,"UPDATE `hospital` SET `Venti_bed`=`Venti_bed`-1 WHERE id='$hid'");
               }
               $result2=mysqli_query($this->con,"SELECT `hname` FROM `hospital` WHERE id='$hid'");
               $row1=mysqli_fetch_array($result2);
               $hospital=$row1['hname'];
               $email=$row['email'];
               $bed=$row['bed'];
               $msg="Your ".$bed." request in ".$hospital." has been accepted.";
               $result1=mysqli_query($this->con,"INSERT INTO `notification`(`email`, `message`) VALUES ('$email','$msg')");
               return $r;
          }

          function delhistory1($id){
               $r=mysqli_query($this->con,"DELETE FROM `history` WHERE id='$id'");
               return $r;
          }

          function fetchadminby($id){
               $r=mysqli_query($this->con,"SELECT * FROM `admin-login` WHERE id='$id' ");
               return $r;
          }
          function fetchbedsby1($id){
               $r=mysqli_query($this->con,"SELECT * FROM `hospital` WHERE email='$id'");
               return $r;
          }
          function fetchpro($id){
               $r=mysqli_query($this->con,"SELECT * FROM `user` WHERE email='$id'");
               return $r;
          }

          function fetchnotifications($email){
               $r=mysqli_query($this->con,"SELECT * FROM `notification` WHERE email='$email' or email='ngo' ORDER BY `creationdate` desc");
               return $r;
          }

          function addannounce1($id,$date,$time,$location,$event,$coordi,$mobile,$msg,$email){
               $r=mysqli_query($this->con,"INSERT INTO `ngo-announcement`(`email`,`title`, `date`, `time`, `location`, `coordinator`, `mobile`) VALUES ('$id','$event','$date','$time','$location','$coordi','$mobile')");
               $result1=mysqli_query($this->con,"INSERT INTO `notification`(`email`, `message`) VALUES ('$email','$msg')");
               return $r;
          }

          function fetchannouncementbyid1($email){
               $r=mysqli_query($this->con,"SELECT * FROM `ngo-announcement` WHERE email='$email' ORDER BY createdate desc");
               return $r;
          }

}
     
?>