function ratings(elem){
    var x=new XMLHttpRequest();
    var url="rateParse.php";
    var a= document.getElementById(elem).value;
    var id=document.getElementById ('a_id').value;
var vars="choice="+a+"&a_id'="+id;
x.open("POST",url, true);
x.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
x.onreadystatechange=function(){
if(x.readyState==4 && x.status==200){
    var return_data=x.responseText;
    document.getElementById("status").innerHTML= return_date;
}}}

function btnSwap(){
    var myBtns=document.getElementsByClassName('btns');
    for(i=0; i<myBtns.length; i++){
        var elem =docment.getElementById (myBtns[i].id);
        elem.src="images/"+"starNorm.png";
        elem.onmouseover=btnOver;
        elem.onmouseout=btnOut;
        function btnOver(){
            var lit=document.getElementById(this.id);
            if(lit.id=="rb1"){
                lit.src="images/"+"starOver.png";
            }
            if(lit.id=="rb2"){
                lit.src="images/"+"starOver.png";
                document.getElementById ("rb1").src="images/"+"starOver.png";
            if(lit.id=="rb3"){
                lit.src="images/"+"starOver.png";
                document.getElementById ("rb1").src="images/"+"starOver.png";
                document.getElementById ("rb2").src="images/"+"starOver.png";
            if(lit.id=="rb4"){
                lit.src="images/"+"starOver.png";
                document.getElementById ("rb1").src="images/"+"starOver.png";
                document.getElementById ("rb2").src="images/"+"starOver.png";
                document.getElementById ("rb3").src="images/"+"starOver.png";
            if(lit.id=="rb5"){
                lit.src="images/"+"starOver.png";
                document.getElementById ("rb1").src="images/"+"starOver.png";
                document.getElementById ("rb2").src="images/"+"starOver.png";
                document.getElementById ("rb3").src="images/"+"starOver.png";
                document.getElementById ("rb4").src="images/"+"starOver.png";
            }
            