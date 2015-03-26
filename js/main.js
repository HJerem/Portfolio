function validateEmail(email) {
    var reg = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return reg.test(email);
}

function validForm(){

    var form = $(this);
    var nom = document.getElementById("nom").value;
    var email = document.getElementById("email").value;
    var sujet = document.getElementById("sujet").value;
    var budget = document.getElementById("budget").value;
    var message = document.getElementById("message").value;

    document.getElementById("nom").style.border = "1px solid #d0d5d8";
    document.getElementById("email").style.border = "1px solid #d0d5d8";
    document.getElementById("sujet").style.border = "1px solid #d0d5d8";
    document.getElementById("message").style.border = "1px solid #d0d5d8";
    document.getElementById("budget").style.border = "1px solid #d0d5d8";

    if(nom!="" && email!="" && sujet!="" && message!=""){
        if(validateEmail(email)){
            console.log("sent");
            return true;
        }
        else{
            document.getElementById("message-validation").innerHTML = "Adresse email invalide";
            document.getElementById("message-validation").fadeIn();
            return false;
        }
    }
    else{
        if(nom=="")
            document.getElementById("nom").style.border = "1px solid red";
        if(email=="")
            document.getElementById("email").style.border = "1px solid red";
        if(sujet=="")
            document.getElementById("sujet").style.border = "1px solid red";
        if(message=="")
            document.getElementById("message").style.border = "1px solid red";
        if(budget=="")
            document.getElementById("budget").style.border = "1px solid red";
        return false;
    }

    return false;
}

if($(window).width()>640){
    $(function() {
        if(window.location.href=="http://jeremyhalin.fr/" || window.location.href=="http://jeremyhalin.fr" || window.location.href=="http://jeremyhalin.fr/index.php"){
            $('.browser-left').onScreen({
                tolerance: 300,
                toggleClass: false,
                doIn: function() {
                    $(this).addClass('fadeInLeft animated')
                }
            });

            $('.browser-right').onScreen({
                tolerance: 300,
                toggleClass: false,
                doIn: function() {
                    $(this).addClass('fadeInRight animated')
                }
            });

            $('.info-left').onScreen({
                tolerance: 200,
                toggleClass: false,
                doIn: function() {
                    $(this).addClass('fadeInLeft animated')
                }
            });

            $('.info-right').onScreen({
                tolerance: 200,
                toggleClass: false,
                doIn: function() {
                    $(this).addClass('fadeInRight animated')
                }
            });
        }
    });

    $(".services-desktop").click(function(){
        $('#slider').flexslider(0);
    });
    $(".services-eye").click(function(){
        $('#slider').flexslider(1);
    });
    $(".services-code").click(function(){
        $('#slider').flexslider(2);
    });
    $(".services-facebook").click(function(){
        $('#slider').flexslider(3);
    });
    $(".services-expand").click(function(){
        $('#slider').flexslider(4);
    });
    $(".services-cogs").click(function(){
        $('#slider').flexslider(5);
    });
    $(".services-check").click(function(){
        $('#slider').flexslider(6);
    });
    $(".services-server").click(function(){
        $('#slider').flexslider(7);
    });
    $(".services-heart").click(function(){
        $('#slider').flexslider(8);
    });

}