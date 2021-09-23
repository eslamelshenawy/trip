var firebaseConfig = {
    apiKey: "AIzaSyBJPhaHSTtS5r4wz8v0G4fhcHvXwjHgNaM",
    authDomain: "trip-facab.firebaseapp.com",
    databaseURL: "https://trip-facab.firebaseio.com",
    projectId: "trip-facab",
    storageBucket: "trip-facab.appspot.com",
    messagingSenderId: "632287408211",
    appId: "1:632287408211:web:2e1b906111ac5c1a2e96a6",
    measurementId: "G-LHVJKFMWK1"
};
firebase.initializeApp(firebaseConfig);
window.onload = function () {
    render();
};

function render() {
    window.recaptchaVerifier = new firebase.auth.RecaptchaVerifier('recaptcha-container');
    recaptchaVerifier.render();
}

function sendOTP() {
    var number = $("#number").val();
    firebase.auth().signInWithPhoneNumber(number, window.recaptchaVerifier).then(function (confirmationResult) {
        window.confirmationResult = confirmationResult;
        coderesult = confirmationResult;
        $("#successAuth").text("Message sent");
        $("#successAuth").show();
        document.getElementById("sendCode").value= 1;
    }).catch(function (error) {
        $("#error").text(error.message);
        $("#error").show();
    });
}
$("#error_required").hide();

function verify() {
    var code = $("#verification").val();
    if(!code){
        $("#error_required").show();
    }
    coderesult.confirm(code).then(function (result) {
        var user = result.user;
        console.log(user);
        $("#successOtpAuth").text("Auth is successful");
        $("#successOtpAuth").show();
        document.getElementById("StatusCode").value= "success";
    }).catch(function (error) {
        $("#error").text(error.message);
        $("#error").show();
    });
}
