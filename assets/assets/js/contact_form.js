/**
 * Created by Bonnard_Valentin on 23/05/2016.
 */
$(document).ready(function(){
    $("#submit").click(function () {
        var name = $("#name").val();
        var email = $("#email").val();
        var subject = $("#subject").val();
        var message = $("#message").val();

        $("returnmessage").empty();

        if(name == '' || email ==''){
            alert("Remplissez les champs");
        }else{
            $.post("secure_mail.php", {
                name1: name,
                email1: email,
                subject1: subject,
                message1: message
            }, function(data){
                $("returnmessage").append(data);
                if(data == "Votre message à bien été reçu, Je vous recontacterais bientôt");{
                    $("#mail-form")[0].reset();
                }
            });
        }
    });
});