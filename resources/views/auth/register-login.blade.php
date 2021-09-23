<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ url('register-login') }}/style.css" />
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
                        <span class="text-danger error-text username_err" style="color: red;white-space: nowrap;"></span>
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" placeholder="Password" name="passwordLogin" />
                        <span class="text-danger error-text passwordLogin_err"
                            style="color: red;white-space: nowrap;"></span>
                    </div>
                    <span class="text-danger error-text mssage_error" style="color: red;white-space: nowrap;"></span>

                    <button type="button" value="Login" class="btn solid btn-submit">Login</button>
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
                    <div class="tab" id="tab_one" style=" max-width: 380px">
                        <h3>Personal Information:</h3>
                        <div class="input-field"><i class="fas fa-user"></i><input type="text"
                                placeholder="First name" oninput="this.className = ''" name="first_name_reg">
                        </div>
                        <span class="text-danger error-text first_name_reg_err"
                            style="color: red;white-space: nowrap;"></span>
                        <div class="input-field"> <i class="fas fa-user"></i> <input type="text"
                                placeholder="Last name" oninput="this.className = ''" name="last_name_reg">
                        </div>
                        <span class="text-danger error-text last_name_reg_err"
                            style="color: red;white-space: nowrap;"></span>
                        <div class="input-field"> <i class="fas fa-envelope"></i> <input type="email"
                                placeholder="Email" oninput="this.className = ''" name="email_reg">
                        </div>
                        <span class="text-danger error-text email_reg_err"
                            style="color: red;white-space: nowrap;"></span>
                        <div class="input-field"> <i class="fas fa-calendar"></i> <input type="date" id="birthdate"
                                placeholder="date" oninput="this.className = ''" name="date_reg">
                        </div>
                        <span class="text-danger error-text date_reg_err"
                            style="color: red;white-space: nowrap;"></span>
                    </div>

                    <div class="tab" id="tab_two">
                        <h3>Contact Information:</h3>
                        <div class="alert alert-danger" id="error" style="display: none;color: #842029;
                        background-color: #f8d7da;
                        border-color: #f5c2c7;position: relative;
                        padding: 1rem 1rem;
                        margin-bottom: 1rem;
                        border: 1px solid transparent;
                        border-radius: .25rem;"></div>


                        <div class="alert alert-success" id="successAuth"
                            style="display: none; color: #0f5132;background-color: #d1e7dd;border-color: #badbcc;position: relative;padding: 1rem 1rem;margin-bottom: 1rem;border: 1px solid transparent;border-radius: .25rem;">
                        </div>
                        <input type="hidden" name="step" id="step" value="" >
                        <label>Phone Number:</label>
                        <div class="input-field">
                            <i class="fas fa-user"></i>
                            <input type="text" id="number" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}"
                                placeholder="+41 xx xxxx xx xx"value="+201009739491" name="number" oninput="this.className = ''">
                        </div>
                        <span class="text-danger error-text telephone_err"
                        style="color: red;white-space: nowrap;"></span>
                        <div id="recaptcha-container"></div>
                        <button type="button" class="btn btn-primary mt-3" onclick="sendOTP();">Send OTP</button>
                        <span class="text-danger error-text sendCode_err"
                            style="color: red;white-space: nowrap;"></span>
                    </div>

                    <div class="tab" id="tab_three">
                        <div class="alert alert-danger" id="error_required" style="color: #842029;
                        background-color: #f8d7da;
                        border-color: #f5c2c7;position: relative;
                        padding: 1rem 1rem;
                        margin-bottom: 1rem;
                        border: 1px solid transparent;
                        border-radius: .25rem;">Required Code </div>

                        <div class="alert alert-success" id="successOtpAuth" style="display: none; color: #0f5132;background-color: #d1e7dd;border-color: #badbcc;position: relative;padding: 1rem 1rem;margin-bottom: 1rem;border: 1px solid transparent;border-radius: .25rem;"></div>
                        <h3>OTP:</h3>
                        <h5>You will receive SMS with the code </h5>
                        
                        <div class="input-field"> <i class="fas fa-mobile"></i> <input type="text"
                                placeholder="x x x x"  id="verification" value="178964"  oninput="this.className = ''">
                            </div>
                            <button type="button" class="btn btn-danger mt-3" onclick="verify()" 
                            style="display: inline;">Verify code</button>
                            <span class="text-danger error-text StatusCode_err"
                            style="color: red;white-space: nowrap;"></span>
                    </div>

                    <div class="tab" id="tab_four">
                        <h3>Password:</h3>

                        <div class="input-field"> <i class="fas fa-lock"></i> <input type="password" name="password"
                                placeholder="Password" oninput="this.className = ''">
                        </div>
                        <div class="input-field"> <i class="fas fa-lock"></i> <input type="password" name="password_confirmation"
                                placeholder="Confirm Password" oninput="this.className = ''">
                        </div>
                        <span class="text-danger error-text password_err"
                        style="color: red;white-space: nowrap;"></span>


                    </div>
                        <input type="hidden" name="user_id" id="user_id">
                    <div style="overflow:auto;">
                        <div style="float:right;">
                            <button type="button" id="prevBtn"
                                class="btn Previous" >Previous</button>
                            <button type="button" id="nextBtn"
                                class="btn next_btn">Next</button>
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
        <input type="hidden" name="sendCode" id="sendCode">
        <input type="hidden" name="StatusCode" id="StatusCode">
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
                <img src="{{ url('register-login') }}/img/signin.png" class="image" alt=""
                    style="width:85%" />
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
                <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
                <img src="{{ url('register-login') }}/img/signup.png" class="image" alt="" />
            </div>
        </div>
    </div>

    <script src="{{ url('register-login') }}/app.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <!-- Firebase App (the core Firebase SDK) is always required and must be listed first -->
    <script src="https://www.gstatic.com/firebasejs/6.0.2/firebase.js"></script>

    <!-- JavaScript -->
    <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>

    <!-- CSS -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css" />
    <!-- 
        RTL version
    -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.rtl.min.css" />
    <!-- Default theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/default.rtl.min.css" />
    <!-- Semantic UI theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/semantic.rtl.min.css" />
    <!-- Bootstrap theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/bootstrap.rtl.min.css" />
    <script src="{{ url('register-login') }}/login.js"></script>
    <script src="{{ url('register-login') }}/register.js"></script>
    <script src="{{ url('register-login') }}/telephone.js"></script>
</body>


</html>
