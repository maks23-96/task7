<?php
//include('./config.php');
class Model
{ 
  protected $fullname;
  protected $message;
  protected $subject; 
  protected $email;
  protected $headers;
   public function __construct()
   {
     $this -> fullname = $fullname;
     $this -> message = $message;
     $this -> subject =  $subject;
     $this -> email = $email;
     $this -> headers = $headers;
   }
    
  public function getArray()
   {      
    return array('%TITLE%'=>'Contact Form', '%ERRORS%'=>'Empty field'); 
   }
  
  public function checkForm()
  {
    return true;      
  }
   
  public function sendEmail()
  { 
    $headers = "From: $email\r\n"; 

    $ip = $_SERVER['REMOTE_ADDR']; 
    $fullname = $_POST['fullname'];
    $message= $_POST['message'];
    $subject = $_POST['subject'];
    $email = $_POST['email'];

   
    mail('maks1996.05.23@gmail.com',$subject,$message,$headers) or die("Error");
  }   
}
