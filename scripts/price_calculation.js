
var sum = 0;
var size_price1 = 10;
var size_price2 = 12;
var size_price3 = 15;

var color_price1 = 5;
var color_price2 = 5;
var color_price3 = 5;
var color_price4 = 5;
var color_price5 = 5;
var color_price6 = 7;

var material_price1 = 10;
var material_price2 = 12;
var material_price3 = 15;

var last_size = "0";
var last_color = "0";
var last_matrial = "0";

//size calculation
document.getElementById("pot-size1").addEventListener("click", function(){
    if(last_size == "0"){
        sum = sum + size_price1;
    }
    else{
        if(last_size == "2"){
            sum = sum - size_price2;
            sum = sum + size_price1;
        }
        if(last_size == "3"){
            sum = sum - size_price3;
            sum = sum + size_price1;
        }
    }
    last_size = "1";
    document.getElementById("total_price").innerHTML = sum;

});
document.getElementById("pot-size2").addEventListener("click", function(){
    if(last_size == "0"){
        sum = sum + size_price2;
    }
    else{
        if(last_size == "1"){
            sum = sum - size_price1;
            sum = sum + size_price2;
        }
        if(last_size == "3"){
            sum = sum - size_price3;
            sum = sum + size_price2;
        }
    }
    last_size = "2";
    document.getElementById("total_price").innerHTML = sum;

});
document.getElementById("pot-size3").addEventListener("click", function(){
    if(last_size == "0"){
        sum = sum + size_price3;
    }
    else{
        if(last_size == "1"){
            sum = sum - size_price1;
            sum = sum + size_price3;
        }
        if(last_size == "2"){
            sum = sum - size_price2;
            sum = sum + size_price3;
        }
    }
    last_size = "3";
    document.getElementById("total_price").innerHTML = sum;
});

//color calculation
document.getElementById("pot-color1").addEventListener("click", function(){
    if(last_color == "0"){
        sum = sum + color_price1;
    }
    else{
        if(last_color == "2"){
            sum = sum - color_price2;
            sum = sum + color_price1;
        }
        if(last_color == "3"){
            sum = sum - color_price3;
            sum = sum + color_price1;
        }
        if(last_color == "4"){
            sum = sum - color_price4;
            sum = sum + color_price1;
        }
        if(last_color == "5"){
            sum = sum - color_price5;
            sum = sum + color_price1;
        }
        if(last_color == "6"){
            sum = sum - color_price6;
            sum = sum + color_price1;
        }
    }
    last_color = "1";
    document.getElementById("total_price").innerHTML = sum;

});

document.getElementById("pot-color2").addEventListener("click", function(){
    if(last_color == "0"){
        sum = sum + color_price2;
    }
    else{
        if(last_color == "1"){
            sum = sum - color_price1;
            sum = sum + color_price2;
        }
        if(last_color == "3"){
            sum = sum - color_price3;
            sum = sum + color_price2;
        }
        if(last_color == "4"){
            sum = sum - color_price4;
            sum = sum + color_price2;
        }
        if(last_color == "5"){
            sum = sum - color_price5;
            sum = sum + color_price2;
        }
        if(last_color == "6"){
            sum = sum - color_price6;
            sum = sum + color_price2;
        }
    }
    last_color = "2";
    document.getElementById("total_price").innerHTML = sum;

});

document.getElementById("pot-color3").addEventListener("click", function(){
    if(last_color == "0"){
        sum = sum + color_price3;
    }
    else{
        if(last_color == "2"){
            sum = sum - color_price2;
            sum = sum + color_price3;
        }
        if(last_color == "1"){
            sum = sum - color_price1;
            sum = sum + color_price3;
        }
        if(last_color == "4"){
            sum = sum - color_price4;
            sum = sum + color_price3;
        }
        if(last_color == "5"){
            sum = sum - color_price5;
            sum = sum + color_price3;
        }
        if(last_color == "6"){
            sum = sum - color_price6;
            sum = sum + color_price3;
        }
    }
    last_color = "3";
    document.getElementById("total_price").innerHTML = sum;

});

document.getElementById("pot-color4").addEventListener("click", function(){
    if(last_color == "0"){
        sum = sum + color_price4;
    }
    else{
        if(last_color == "2"){
            sum = sum - color_price2;
            sum = sum + color_price4;
        }
        if(last_color == "3"){
            sum = sum - color_price3;
            sum = sum + color_price4;
        }
        if(last_color == "1"){
            sum = sum - color_price1;
            sum = sum + color_price4;
        }
        if(last_color == "5"){
            sum = sum - color_price5;
            sum = sum + color_price4;
        }
        if(last_color == "6"){
            sum = sum - color_price6;
            sum = sum + color_price4;
        }
    }
    last_color = "4";
    document.getElementById("total_price").innerHTML = sum;

});

document.getElementById("pot-color5").addEventListener("click", function(){
    if(last_color == "0"){
        sum = sum + color_price5;
    }
    else{
        if(last_color == "2"){
            sum = sum - color_price2;
            sum = sum + color_price5;
        }
        if(last_color == "3"){
            sum = sum - color_price3;
            sum = sum + color_price5;
        }
        if(last_color == "4"){
            sum = sum - color_price4;
            sum = sum + color_price5;
        }
        if(last_color == "1"){
            sum = sum - color_price1;
            sum = sum + color_price5;
        }
        if(last_color == "6"){
            sum = sum - color_price6;
            sum = sum + color_price5;
        }
    }
    last_color = "5";
    document.getElementById("total_price").innerHTML = sum;

});

//material calculation
document.getElementById("pot-material1").addEventListener("click", function(){
    if(last_matrial == "0"){
        sum = sum + material_price1;
    }
    else{
        if(last_matrial == "2"){
            sum = sum - material_price2;
            sum = sum + material_price1;
        }
        if(last_matrial == "3"){
            sum = sum - material_price3;
            sum = sum + material_price1;
        }
    }
    last_matrial = "1";
    document.getElementById("total_price").innerHTML = sum;

});

document.getElementById("pot-material2").addEventListener("click", function(){
    if(last_matrial == "0"){
        sum = sum + material_price2;
    }
    else{
        if(last_matrial == "1"){
            sum = sum - material_price1;
            sum = sum + material_price2;
        }
        if(last_matrial == "3"){
            sum = sum - material_price3;
            sum = sum + material_price2;
        }
    }
    last_matrial = "2";
    document.getElementById("total_price").innerHTML = sum;

});

document.getElementById("pot-material3").addEventListener("click", function(){
    if(last_matrial == "0"){
        sum = sum + material_price3;
    }
    else{
        if(last_matrial == "2"){
            sum = sum - material_price2;
            sum = sum + material_price3;
        }
        if(last_matrial == "1"){
            sum = sum - material_price1;
            sum = sum + material_price3;
        }
    }
    last_matrial = "3";
    document.getElementById("total_price").innerHTML = sum;

});

function price(){
   return sum;
}