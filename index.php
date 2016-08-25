<?php
header('Access-Control-Allow-Origin: *');
?>
<!-- Скрипт отправки -->
<script>
var PozvonimcomWidgetConfig = {
 ready: function () {
   this.api.on('call', function(e) {
     var client = this.api.getClient();
     var phone  = this.api.getPhone();
     var dalayed_call = this.api.getDelayed();
     var title = 'Zayavka pozvonim na saite ' + client.source_call;
     var params = "client=" + encodeURIComponent(name) + "&phone=" + encodeURIComponent(phone) + "&title=" + encodeURIComponent(title) + "&dalayed_call=" + encodeURIComponent(dalayed_call);

     var xhttp = new XMLHttpRequest();
       xhttp.onreadystatechange = function() {
         if (xhttp.readyState == 4 && xhttp.status == 200) {
           console.log('success');
         }
       };

     xhttp.open("POST", "/send.php", true);
     xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
     xhttp.send(params);
   })
 }
};
</script>
<!-- Скрипт отправки -->

<!-- Код счётчика pozvonim -->
<script crossorigin="anonymous" async type="text/javascript" src="//api.pozvonim.com/widget/callback/v3/dc9828094ab4806a0242b4c14cfcc155/connect" id="check-code-pozvonim" charset="UTF-8"></script>
<!-- Код счётчика pozvonim -->

<!-- Код ройстат -->
<script>
(function(w, d, s, h, id) {
    w.roistatProjectId = id; w.roistatHost = h;
    var p = d.location.protocol == "https:" ? "https://" : "http://";
    var u = /^.*roistat_visit=[^;]+(.*)?$/.test(d.cookie) ? "/dist/module.js" : "/api/site/1.0/"+id+"/init";
    var js = d.createElement(s); js.async = 1; js.src = p+h+u; var js2 = d.getElementsByTagName(s)[0]; js2.parentNode.insertBefore(js, js2);
})(window, document, 'script', 'cloud.roistat.com', '');
</script>
<!-- Код ройстат -->