setTimeout(function() {

if (document.cookie.indexOf('admin') != -1)
{
    var cvalue = getCookie("admin");
    if(cvalue == 1){
        document.getElementById("lock").style.opacity="0";
        document.getElementById("header").style.opacity="1";
        document.getElementById("sub_header").style.opacity="1";
        document.getElementById("existing_products").style.opacity="1";
        document.getElementById("options_section").style.opacity="1";
        document.getElementById("options_header").style.opacity="1";
        document.getElementById("admin_logout").style.opacity="1";

    }
    else{

        check_admin_pass();
    }

}

else{
    check_admin_pass();
}
});

function check_admin_pass(){
    var s ="";
    var index = 0;
    while (s!= "sadna2020" && index <3){
        var s=prompt("Please Enter Your Password");
        if (s=="sadna2020"){
            document.getElementById("mynav").style.opacity="1";
            document.getElementById("lock").style.opacity="0";
            document.getElementById("header").style.opacity="1";
            document.getElementById("sub_header").style.opacity="1";
            document.getElementById("existing_products").style.opacity="1";
            document.getElementById("options_section").style.opacity="1";
            document.getElementById("admin_logout").style.opacity="1";
            document.cookie = 'admin=' + 1;
        }
        else{
            if(s === null){
                return;
            }
            else{
                index++;
                var num = 3 - index;
                if(num > 1){
                    alert("Incorrect Password. you can try " + num + " more times");
                }
                if(num == 1){
                    alert("Incorrect Password. you can try " + num + " more time");
                }
                if(num == 0){
                    alert("Too many attempts. Goodbay");
                    window.location.href="http://michalgh.mtacloud.co.il/pages/403.php";
                }
            }
        }
    }  
};

document.getElementById("admin_logout").addEventListener("click", function(){
    document.cookie = 'admin=' + 0;
    window.location.href="http://michalgh.mtacloud.co.il/index.php";

})

function getCookie(cname) {
    var name = cname + "=";
    var ca = document.cookie.split(';');
    for(var i = 0; i < ca.length; i++) {
      var c = ca[i];
      while (c.charAt(0) == ' ') {
        c = c.substring(1);
      }
      if (c.indexOf(name) == 0) {
        return c.substring(name.length, c.length);
      }
    }
    return "";
  }