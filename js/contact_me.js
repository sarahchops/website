$(window).ready(function() {



    $("#submit").click(function()
    {
       

        var name = $("#name").val();
        var email = $("#email").val();
        var msg = $("#msg").val();

      

       
        $.ajax({
            url: "./mail/sendemail.php",
            type: "POST",
            data: {
                name: name,
                email: email,
                msg: msg
            }
        });
            
    });
});


