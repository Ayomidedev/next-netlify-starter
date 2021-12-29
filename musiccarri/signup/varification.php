<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>musiccarii</title>


 <link rel="stylesheet" href="css/responsiveness.css">
 <link rel="stylesheet" href="css/header.css">
 <link rel="stylesheet" href="css/sign_up.css">
 <link rel="stylesheet" href="css/error.css">
 <link rel="stylesheet" href="css/questions.css">




 <!--js linking-->
 <script src="javascript/error.js"></script>
 <script src="javascript/signuptabcontroll.js"></script>

 <script src="https://kit.fontawesome.com/8d1122ab59.js" crossorigin="anonymous"></script>
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
 
 <!--Desktop view -->
 <div class="desktop_GUI">
  <p>welcome</p>
 </div>
 
 



 <!--mobile view -->
 <div class="mobile_GUI">
  

   
  <!--content goes in here-->
  <!--every div class has it own css-->
  <div class="header">
   <!--content goes im here-->
   <div class="left">
    <p><i class="fas fa-caret-right"></i><span name="nickname">AyoStore</span></p>
   </div>
   <div class="right">
    <i class="far fa-question-circle"></i>
   </div>
   <!--content ends here-->
  </div>






  <!--under the csss properties of sign_up.css-->
  <div class="sign_up">
    <!--content goes in here-->

     <div class="title_two">
      <center>
       <p style="color:grey;  padding:10px;"><b><i class="fas fa-user-plus" style="color:tomato;"></i>Varification page</b></p>
      </center>
     </div> 



     <div class="layout2" id="login" style="display:block; padding-top:20px;">
      <form>
         <label>
          <input type="text" placeholder="enter the code sent to your mail" name="OTP" required oninvalid="showErr_one()">
         </label>
         <br><br>
         <label>
          <input type="password" placeholder="set your password" name="new password" required oninvalid="showErr_two()"> 
         </label>
         <br><br>
        <button>Proceed</button>
        <br><br>
        <a href="#" onclick="changestate_two()"><i class="fas fa-user-plus" style="color:tomato;"></i>signup instead?</a>
      </form>
     </div>


    </div>
    <!--content ends here-->





    <!--under the css property of error.css-->
    <div class="error" id="errppage">
     <!--content goes in here-->
     <div class="box">
       <p><i class="fas fa-exclamation-circle"></i>Sorry, please fill in the blank space</p>
     </div> 
     <!--conten ends here-->
    </div>

  </div>
  <!--content ends here-->





 
  <!--under the css properties of question.css-->
  <div class="questions">

  </div>



 </div>



</body>
</html>