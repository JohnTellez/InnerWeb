$(document).ready(function(){

    $(window).load(function(){
        $('#preloader').fadeOut('slow',function(){$(this).remove();});
    });
    
    /* Get iframe src attribute value i.e. YouTube video url
    and store it in a variable */
    var url = $("#frmVideo").attr('src');
    
    /* Assign empty url value to the iframe src attribute when
    modal hide, which stop the video playing */
    $("#myModal").on('hide.bs.modal', function(){
        $("#frmVideo").attr('src', '');
    });
    
    /* Assign the initially stored url back to the iframe src
    attribute when modal is displayed again */
    $("#myModal").on('show.bs.modal', function(){
        $("#frmVideo").attr('src', url);
    });
    
    $('#register').click(function(){
        $("#loginModal").hide();
        $('.modal-backdrop').hide();
        $("#modalRegister").css('display','');
        $("#footerRg").css('display','');
        $("#successRg").css('display','none');
        $("#closeRg").css('display','none');
        $('#name').val('');
        $('#lName').val('');
        $('#email').val('');
        $('#username').val('');
        $('#password').val('');
    });

    $('#createUser').click(function(){
        var name  = $('#name').val();
        var lName = $('#lName').val();
        var email = $('#email').val();
        var user  = $('#username').val();
        var pass  = $('#password').val();

        if(name == ""){
            alert("Debe ingresar un nombre.");
            return false;
        }
        else if(lName == ""){
            alert("Debe ingresar un apellido.");
            return false;
        }
        else if(email == ""){
            alert("Debe ingresar un email");
            return false;
        }
        else if(user == ""){
            alert("Debe ingresar un nombre de usuario.");
            return false;
        }
        else if(pass == ""){
            alert("Debe ingresar una contraseña.");
            return false;
        }
        else{
            var datos = {
                "name" : name,
                "lName": lName,
                "email": email,
                "user" : user,
                "pass" : pass,
                "option" : "createUser"
            };
            $.ajax({
                data: datos,
                url: "./control/ajaxFunctions.php",
                type: "POST",
                success: function(result){
                    $("#modalRegister").css('display','none');
                    $("#footerRg").css('display','none');
                    $("#successRg").css('display','');
                    $("#closeRg").css('display','');
                }
            });
        }

    });

    $('#email').change(function(){
        var datos = {
                "email": this.value,
                "option" : "validateEmail"
            };
        $.ajax({
                data: datos,
                url: "./control/ajaxFunctions.php",
                type: "POST",
                success: function(result){
                    if(result > 0){
                        alert('El correo ingresado ya existe.');
                        $('#email').val('');
                    }
                }
            });
    });
    $('#username').change(function(){
        var datos = {
                "user": this.value,
                "option" : "validateUsername"
            };
        $.ajax({
                data: datos,
                url: "./control/ajaxFunctions.php",
                type: "POST",
                success: function(result){
                    if(result > 0){
                        alert('El nombre de usuario ya existe, intenta con otro.');
                        $('#username').val('');
                    }
                }
            });
    });

});

function subLogout(s){
    s.submit();
}
    
    
    
    
