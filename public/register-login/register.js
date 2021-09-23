var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the current tab
$("#tab_three").hide();
$("#tab_four").hide();

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
}

    $(".Previous").click(function(e) {
        e.preventDefault();
        var email_reg = $("input[name=email_reg]").val();
        $.ajax({
            type: 'POST',
            url: "/register/previous",
            data: {
                email_reg: email_reg,
                "_token": $('#token').val()
            },
            success: function(data) {
                console.log(data);    
                $("#tab_one").show();
                $("#tab_two").hide();
                $(".Previous").hide(); 
                if(data.step === 1){
                    $("#tab_three").hide();
                    $("#tab_two").show();
                    $("#tab_one").hide();
                    $(".Previous").show(); 
                }
                if(data.step === 2){
                    $("#tab_four").hide();
                    $("#tab_three").show();
                    $("#tab_two").hide();
                    $("#tab_one").hide();
                    $(".Previous").show();
            }
                if(data.step === 3){
                    $("#tab_four").hide();
                    $("#tab_three").show();
                    $("#tab_two").hide();
                    $("#tab_one").hide();
        }
            }
        });
    });


    $(".next_btn").click(function(e) {
        e.preventDefault();
        var first_name_reg = $("input[name=first_name_reg]").val();
        var last_name_reg = $("input[name=last_name_reg]").val();
        var email_reg = $("input[name=email_reg]").val();
        var date_reg = $("input[name=date_reg]").val();
        var telephone = $("input[name=number]").val();
        var password = $("input[name=password]").val();
        var sendCode = $("input[name=sendCode]").val();
        var StatusCode = $("input[name=StatusCode]").val();
        var password_confirmation = $("input[name=password_confirmation]").val();
        $.ajax({
            type: 'POST',
            url: "/register",
            data: {
                first_name_reg: first_name_reg,
                last_name_reg: last_name_reg,
                email_reg: email_reg,
                date_reg: date_reg,
                telephone: telephone,
                password: password,
                sendCode: sendCode,
                StatusCode: StatusCode,
                password_confirmation: password_confirmation,
                "_token": $('#token').val()
            },
            success: function(data) {
                if ($.isEmptyObject(data.error)) {
                    $("#tab_one").hide();
                    $("#tab_two").show();
                    $(".Previous").show();
                    if(data.step === 2){
                        $("#tab_three").show();
                        $("#tab_two").hide();
                    }
                    if(data.step === 3){
                        $("#tab_four").show();
                        $("#tab_three").hide();
                        $("#tab_two").hide();
                    }
                    if(data.step === 4){
                        $("#tab_four").hide();
                        $("#tab_three").hide();
                        $("#tab_two").hide();
                    }
                } else {
                    printErrorMsg(data.error);
                }
            }
        });
        function printErrorMsg(msg) {
                $.each(msg, function(key, value) {
                    $('.' + key + '_err').text(value);
                });
        }
    });
