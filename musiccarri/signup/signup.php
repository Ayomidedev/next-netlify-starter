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


 <div class="information" style="display:none;">
  <?php
    require("backend/connecton.php");
    require("backend/signup_server.php");
  ?>
 </div>



 <!--js linking-->
 <script src="javascript/error.js"></script>
 <script src="javascript/signuptabcontroll.js"></script>
 <script src="javascript/question.js"></script>

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
    <i class="far fa-question-circle" onclick="openquestion()"></i>
   </div>
   <!--content ends here-->
  </div>






  <!--under the csss properties of sign_up.css-->
  <div class="sign_up">
    <!--content goes in here-->
    <div class="conatiner">
     
     <div class="title">
      <center><a href="#" class="hover" onclick="changestate_two()" id="signupbutton" style="border-bottom:1px solid rgba(128, 128, 128, 0.288);"><i class="fas fa-user-plus" style="color:tomato;"></i>Sign Up</a>  <a href="#" class="hover" onclick="changestate_one()" id="loginbutton"><i class="fas fa-clipboard-check" style="color:tomato;"></i>login</a> </center>
     </div>


     <div class="layout" id="signup">
       <form method="POST">
        <label>
         <input type="text" placeholder="username" name="username" required oninvalid="showErr_one()" maxlength="12" max="12">
        </label>
        <br><br>
        <label>
         <input type="email" placeholder="email" name="email" required oninvalid="showErr_two()"> 
        </label>
        <br><br>
        <label>
         <input type="date" placeholder="date of birth" name="dob" required oninvalid="showErr_three()">
        </label>
        <br><br>
        <label>
         <select name="format">
          <option required>234</option>
          <option required>124</option>
         </select><input type="number" placeholder="phone number" name="phoneno"  required oninvalid="showErr_four()" class="phoneno">
        </label>
        <br><br>
        <button name="proceed">Proceed</button>
        <br><br>
        <a href="#" onclick="changestate_one()"><i class="fas fa-clipboard-check" style="color:tomato;"></i>login instead?</a>
       </form>

     </div>




     <div class="layout2" id="login">
      <form>
         <label>
          <input type="text" placeholder="username" name="username" required oninvalid="showErr_one()">
         </label>
         <br><br>
         <label>
          <input type="password" placeholder="password" name="password" required oninvalid="showErr_two()"> 
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
    <div class="questions" id="question">


    <div class="header">
      <!--content goes im here-->
      <div class="left">
       <p onclick="closequestion()"><i class="fas fa-caret-left"></i><span name="nickname">back</span></p>
      </div>
      <div class="center">
       <p><b>question</b></p>
      </div>
      <div class="right">
      <i class="far fa-plus-square" onclick="openreport()"></i>
      </div>
       <!--content ends here-->
    </div>





    <div class="report" id="report">
     <!--this is for reporting an issues-->
     <div class="mover">
      <div class="box_report">

            <!--under the css properties of header.css-->
           <div class="headers" style="position:justify;">
             <!--content goes im here-->
             <div class="left">
              <p onclick="closereport()" style="font-size:12px;"><i class="fas fa-caret-left"></i><span name="nickname">back</span></p>
             </div>
             <div class="center">
              <p><b>Report</b></p>
             </div>
              <!--content ends here-->
           </div>



           <div class="layout_cut">
             <label>
              <input placeholder="email" type="email">
             </label>

             <br><br>

             <select>
              <option>wrong speeling</option>
              <option value="">Abusive words</option>
              <option value="">Can't find my quesion</option>
              <option value="">This is not helping</option>
              <option value="">Please update this page</option>
             </select>

             <br><br>

             <button>send report</button>
           </div>

           
       </div>
     </div>
     <!--ends here-->
    </div>



    <div class="layout_questions">
     <!--content goes in here-->
     <div class="question1">
      <div class="conte">
       <details>
        <summary>who do you ask for so many details about me</summary>
        <p>
         Because will trying our best to gather more informations,
         about every users of our website, there is nothing to worry about, 
         all data are is safe hands
        </p>
       </details>
      </div>
     </div>


     <br><br>


     <div class="question1">
      <div class="conte">
       <details>
        <summary>Do i really need to add my phone number</summary>
        <p>
         Because will trying our best to gather more informations,
         about every users of our website, there is nothing to worry about, 
         all data are is safe hands
        </p>
       </details>
      </div>
     </div>


     <br><br>


     <div class="question1">
      <div class="conte">
       <details>
        <summary>what is the website all about</summary>
        <p>
         Because will trying our best to gather more informations,
         about every users of our website, there is nothing to worry about, 
         all data are is safe hands
        </p>
       </details>
      </div>
     </div>


     <br><br>



     <div class="question1">
      <div class="conte">
       <details>
        <summary>can i receive verifications with my phone number</summary>
        <p>
         Because will trying our best to gather more informations,
         about every users of our website, there is nothing to worry about, 
         all data are is safe hands
        </p>
       </details>
      </div>
     </div>


     <br><br>


     <div class="question1">
      <div class="conte">
       <details>
        <summary>How can i reach musiccarri on social media</summary>
        <p>
         Because will trying our best to gather more informations,
         about every users of our website, there is nothing to worry about, 
         all data are is safe hands
        </p>
       </details>
      </div>
     </div>


     <br><br>

     <div class="question1">
      <div class="conte">
       <details>
        <summary>who do you ask for so many details about me</summary>
        <p>
         Because will trying our best to gather more informations,
         about every users of our website, there is nothing to worry about, 
         all data are is safe hands
        </p>
       </details>
      </div>
     </div>


     <br><br>


     <div class="question1">
      <div class="conte">
       <details>
        <summary>who do you ask for so many details about me</summary>
        <p>
         Because will trying our best to gather more informations,
         about every users of our website, there is nothing to worry about, 
         all data are is safe hands
        </p>
       </details>
      </div>
     </div>


     <br><br>


     <div class="question1">
      <div class="conte">
       <details>
        <summary>who do you ask for so many details about me</summary>
        <p>
         Because will trying our best to gather more informations,
         about every users of our website, there is nothing to worry about, 
         all data are is safe hands
        </p>
       </details>
      </div>
     </div>



     <br><br>


     <div class="question1">
      <div class="conte">
       <details>
        <summary>who do you ask for so many details about me</summary>
        <p>
         Because will trying our best to gather more informations,
         about every users of our website, there is nothing to worry about, 
         all data are is safe hands
        </p>
       </details>
      </div>
     </div>













     <!--content ends here-->
    </div>


    </div>



 </div>



</body>
</html>