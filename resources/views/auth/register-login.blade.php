<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="{{url('register-login')}}/style.css" />
    <title>Registration</title>
  </head>
  <body>
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
          <form class="sign-in-form">
            <h2 class="title">Sign in</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="Username" name="username" />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Password" name="passwordLogin" />
            </div>
            <button type="button" value="Login" class="btn solid btn-submit" >Login</button>
            {{-- <input type="submit" value="Login" class="btn solid btn-submit" /> --}}
            <p class="social-text">Or Sign in with social platforms</p>
            <div class="social-media">
              <a href="#" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
         
              <a href="#" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
            </div>
          </form>

          <form action="#" class="sign-up-form">
                 <h2 class="title">Create an account</h2>
               
<!-- One "tab" for each step in the form: -->
<div class="tab " style =" max-width: 380px">
    <h3>Personal Information:</h3>
   <div class="input-field"><i class="fas fa-user"></i><input type="text" placeholder="First name" oninput="this.className = ''">
   </div>
   <div  class="input-field">   <i class="fas fa-user"></i>  <input type="text" placeholder="Last name"oninput="this.className = ''">
   </div> 
   <div  class="input-field">   <i class="fas fa-envelope"></i>  <input type="email" placeholder="Email" oninput="this.className = ''">
   </div>
    <div  class="input-field">   <i class="fas fa-calendar"></i>  <input type="date" id="birthdate" placeholder="Last name"  oninput="this.className = ''">
   </div>
  </div>
  
  <div class="tab">
      <h3>Contact Information:</h3>
    <div class="input-field">
        <i class="fas fa-user"></i>
        <input type="tel" id="telephone" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" placeholder ="+41 xx xxxx xx xx" name="telephone"    oninput="this.className = ''">
    </div>
  </div>
  
  <div class="tab">
      <h3>OTP:</h3>
      <h5>You will receive SMS with the code </h5>
    <div  class="input-field">   <i class="fas fa-mobile"></i>  <input type="text" placeholder="x x x x" oninput="this.className = ''">
    </div>
  </div>
  
  <div class="tab">
      <h3>Password:</h3>

    <div  class="input-field">   <i class="fas fa-lock"></i>  <input type="password" placeholder="Password" oninput="this.className = ''">
    </div>
    <div  class="input-field">   <i class="fas fa-lock"></i>  <input type="password" placeholder="Confirm Password" oninput="this.className = ''">
    </div>
    
     
  </div>
  
  <div style="overflow:auto;">
    <div style="float:right;">
      <button type="button" id="prevBtn" onclick="nextPrev(-1)" class = "btn">Previous</button>
      <button type="button" id="nextBtn" onclick="nextPrev(1)" class = "btn">Next</button>
    </div>
  </div>
  
  <!-- Circles which indicates the steps of the form: -->
  <div style="text-align:center;margin-top:5px;">
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
  </div>  
  <p class="social-text">Or Sign up with social platforms</p>
            <div class="social-media">
              <a href="#" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
            </div>
                 
          
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>Don't have an account yet ?</h3>
            <p>
              We will take you to your favorite ski resort, sign up with us to begin your adventure!
            </p>
            <button class="btn transparent" id="sign-up-btn">
              Sign up
            </button>
          </div>
          <img src="img/signin.png" class="image" alt="" style ="width:85%" />
        </div>
        <div class="panel right-panel">
          <div class="content">
            <h3>Already a member ?</h3>
            <p>
              Your skiing experience awaits you, Let's ride !
            </p>
            <button class="btn transparent" id="sign-in-btn">
              Sign in
            </button>
          </div>
          <img src="img/signup.png" class="image" alt="" />
        </div>
      </div>
    </div>

    <script src="app.js"></script>
  </body>
  <script>
    var currentTab = 0; // Current tab is set to be the first tab (0)
    showTab(currentTab); // Display the current tab
    
    function showTab(n) {
      // This function will display the specified tab of the form ...
      var x = document.getElementsByClassName("tab");
      x[n].style.display = "block";
      // ... and fix the Previous/Next buttons:
      if (n == 0) {
        document.getElementById("prevBtn").style.display = "none";
      } else {
        document.getElementById("prevBtn").style.display = "inline";
      }
      if (n == (x.length - 1)) {
        document.getElementById("nextBtn").innerHTML = "Submit";
      } else {
        document.getElementById("nextBtn").innerHTML = "Next";
      }
      // ... and run a function that displays the correct step indicator:
      fixStepIndicator(n)
    }
    
    function nextPrev(n) {
      // This function will figure out which tab to display
      var x = document.getElementsByClassName("tab");
      // Exit the function if any field in the current tab is invalid:
      if (n == 1 && !validateForm()) return false;
      // Hide the current tab:
      x[currentTab].style.display = "none";
      // Increase or decrease the current tab by 1:
      currentTab = currentTab + n;
      // if you have reached the end of the form... :
      if (currentTab >= x.length) {
        //...the form gets submitted:
        document.getElementById("regForm").submit();
        return false;
      }
      // Otherwise, display the correct tab:
      showTab(currentTab);
    }
    
    function validateForm() {
      // This function deals with validation of the form fields
      var x, y, i, valid = true;
      x = document.getElementsByClassName("tab");
      y = x[currentTab].getElementsByTagName("input");
      // A loop that checks every input field in the current tab:
      for (i = 0; i < y.length; i++) {
        // If a field is empty...
        if (y[i].value == "") {
          // add an "invalid" class to the field:
          y[i].className += " invalid";
          // and set the current valid status to false:
          valid = false;
        }
      }
      // If the valid status is true, mark the step as finished and valid:
      if (valid) {
        document.getElementsByClassName("step")[currentTab].className += " finish";
      }
      return valid; // return the valid status
    }
    
    function fixStepIndicator(n) {
      // This function removes the "active" class of all steps...
      var i, x = document.getElementsByClassName("step");
      for (i = 0; i < x.length; i++) {
        x[i].className = x[i].className.replace(" active", "");
      }
      //... and adds the "active" class to the current step:
      x[n].className += " active";
    }
  </script>
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
  <script type="text/javascript">
   
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': "{{ csrf_token() }}"
        }
    });
   
    $(".btn-submit").click(function(e){
  
        e.preventDefault();
   
        var username = $("input[name=username]").val();
        var passwordLogin = $("input[name=passwordLogin]").val();   
        $.ajax({
           type:'POST',
           url:"{{ url('login') }}",
           data:{username:username, passwordLogin:passwordLogin},
           success:function(data){
              alert(data.success);
           }
        });
  
    });
</script>

</html>
