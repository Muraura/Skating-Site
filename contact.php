
<style>
@import url('https://fonts.googleapis.com/css?family=Open+Sans');
#wrapper{
  position: absolute;
  top:50%
  left:50%
  transform:translate(-50,-50);
  margin-top: 50px;
}

.contact-us{
  padding-top: 200px;"
  width:100%;
  height: auto;
  background: rgba(0,0,0,0.7);
  padding: 40px 50px;
  margin-top: 100px;
  border-radius: 5px;

}

.form-control{
  padding:0 30px;
  border:none !important;
  background-color: rgba(0,0,0,0.7) !important ;


}


  input[type=text],textarea  {
    
  }

.title{
  font-size: 2em;
  line-height: 1.25em;
  text-align: center;
  text-transform: uppercase;
  font-weight: 900;
  letter-spacing: #ffc107;
  padding-top:200px;
  color: #fff !important;
}

input[type=text], textarea {
  font-size: 30px !important ;
  color:#fff !important;
  display: block !important ;
  padding-bottom: 10px !important;
  color:white !important ;
  border-color: #fff; !important ;

}
.alert{
  background-color: yellow !important;
}
.alert-danger{
  background-color: yellow !important;
  font-size: 20px !important;
  color: black !important;
}
.btn-success{
  
  background-color: #4CAF50 !important;
    color: white !important;
    padding: 40px 80px !important;
    border: none !important;
    border-radius: 4px !important;
    cursor: pointer !important;
    margin-top: 20px !important;
    margin-left: 200px !important;
    font-size: 20px !important;
}



</style>




<?php include'header.php';?>
<?php
//Message Vars
$msg='';
$msgClass = '';
//Check for submit
   if(filter_has_var(INPUT_POST, 'submit')){
   //Get Form Data
    $name=htmlspecialchars($_POST['name']);
    $email= htmlspecialchars($_POST['email']);
    $message=htmlspecialchars($_POST['message']);

    //check Required Fields
    if(!empty($email) && !empty($name) && !empty($message)){
      //passed
      //Check Email

      if(filter_var($email, FILTER_VALIDATE_EMAIL) === false){

        //failed
          $msg = 'please use a valid email';
          $msgClass = 'alert-danger';

      }else{
       //passed
        $toEmail = 'support@serenidad.co.ke';
        $subject = 'Contact Request From' .$name;
        $body = '<h2>Contact Request</h2>
              // <h4>Name</h4<p>'.$name.'</p>
               //<h4>Email</h4<p>'.$email.'</p>
              // <h4>Message</h4<p>'.$message.'</p>
              // ';
         //Email Headers

        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers.="Content-Type:text/html;charset=UTF-8" . "\r\n";

        //Additional Headers
        $headers.="From: " .$name. "<".$email.">". "\r\n";

        //Additional Headers
        $headers .="From: ".$name. "<".$email.">"."\r\n";
        if(mail($toEmail,$subject,$body,$headers)){
          //Email Sent

          $msg = 'Your email has been sent';
          $msgClass= 'alert-success';
        }else
        {       $msg = 'Your email was not sent';
                $msgClass = 'alert-danger';
              }
      }
    
 }else{
      //failed
    
      $msg = 'please fill in all fields';
      $msgClass = 'alert-danger';
    }
  }
 ?>



<div class="container-fluid" >

<div class="row contact">
   <div class="col-lg-6 col-sm-6">
    <div class="card-image">
    <img src="img/99.jpg" alt=""></div>
   </div>
   
  <div class="col-lg-6 col-sm-6"id="wrapper">
    <div class="title"><h1>Contact us</h1></div>


    <?php if($msg !=''): ?>
      <div class="alert <?php echo $msgClass; ?>"><?php echo $msg; ?></div>
    <?php endif; ?>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" class="contact-us"
     >

                <input type="text" class="form-control" placeholder="Full Name" name="name" value="<?php echo isset($_POST['name']) ? $name : ''; ?>" 
                >
                <input type="text" class="form-control" placeholder="Email Address"name='email'value="<?php echo isset($_POST['email']) ? $email : ''; ?>">
                <textarea rows="6" class="form-control" placeholder="Message"name="message"><?php echo isset($_POST['message']) ? $message : ''; ?></textarea>
      <button type="submit" class="btn btn-success" name="submit">Send Message</button>
          

                
        </div>
  
</div>
</div>
<?php include'footer.php';?>





