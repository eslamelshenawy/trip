    $(".btn-submit").click(function(e) {
        e.preventDefault();

        var username = $("input[name=username]").val();
        var passwordLogin = $("input[name=passwordLogin]").val();
        $.ajax({
            type: 'POST',
            url:  "/login",
            data: {
                username: username,
                passwordLogin: passwordLogin,
                "_token": $('#token').val()
            },
            success: function(data) {
                console.log($.isEmptyObject(data.error), data.error);
                if ($.isEmptyObject(data.error)) {
                    alertify.success(data.success);
                    window.location = "/";
                } else {
                    printErrorMsg(data.error);
                }
            }

        });

        function printErrorMsg(msg) {
            if (!Array.isArray(msg)) {
                $('.mssage_error').text(msg);
            } else {
                $.each(msg, function(key, value) {
                    $('.' + key + '_err').text(value);
                });
            }
        }
    });
