<script type="text/javascript">
function list_results(){
    var hr =new XMLHttpRequest(){
        hr.onreadystatechange=function(){
            if(hr.readyState==4 &&hr.status==200){
                var s=document.getElementById('myStars');
                var x=hr.responseText;
                if(x=="0"){s.src="images/starsNorm.png";}
                if(x=="1"){s.src="images/1lit.png";}
                if(x=="2"){s.src="images/2lit.png";}
                if(x=="3"){s.src="images/3lit.png";}
                if(x=="4"){s.src="images/4lit.png";}
                if(x=="5"){s.src="images/5lit.png";}
                
            }
        }
    }
}