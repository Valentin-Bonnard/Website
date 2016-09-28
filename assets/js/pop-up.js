/**
 * Created by Bonnard_Valentin on 22/05/2016.
 */

var opener = document. getElementsByClassName("opener");

opener.onclick = function() {
    var trans_div = document.createElement("div");
        

    trans_div.style.width = window.innerWidth + 'px';
    trans_div.style.height = window.innerHeight + 'px';
    trans_div.className = 'trans_div';
    trans_div.onclick = function () {

        mail_form.style.visibility = 'hidden';
        document.body.removeChild(trans_div);
    }
    document.body.appendChild(trans_div);
    mail_form.style.visibility = 'visible';

    return false;
}