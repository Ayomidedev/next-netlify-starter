<!DOCTYPE html>
<html>
 <head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>musiccarii_error</title>

   <link rel="stylesheet" href="responsiveness.css">
   <link rel="stylesheet" href="panel.css">



   <script src="https://kit.fontawesome.com/8d1122ab59.js" crossorigin="anonymous"></script>
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 </head>

 <body>

   <div class="desktop_GUI">
     <p>welcome</p>
   </div>

   <!--break-->

    <div class="mobile_GUI">
      <!--this is to display that the email inserted is wrong-->
      <!--under the css property of panel.css-->
      <div class="panel"> 
        <!--content-->
        <div class="content">
          <center>
            <img src="error.png" alt="">
          </center>
          <br>
          <div class="quote">
            <center>
              <p><b>The email you inserted is wrong</b></p>
              <div class="details">
                <details>
                  <summary>check how to solve this problem</summary>
                  <p style="font-weight:200; font-size:14px;">
                    Please try inserting a new email username, so will can send 
                    you a quick verification code via  email. Kindly click on the
                    button below to navigate back to the sign up page. Thank you.
                  </p>
                </details>
              </div>

              <form method="POST">
              <br><br><button name="back"><i class="fas fa-long-arrow-alt-left"></i>return back</button>
              </form>
              <?php
                if(isset($_POST["back"])){
                  header("Location: http://localhost/musiccarri/signup/signup.php#");
                }
              ?>
            </center>
          </div>

        </div>
        <!--content ends here-->
      </div>
      <!--the code ends here-->
    </div> 


 </body>
</html>