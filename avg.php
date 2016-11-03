<?php
include_once("scripts/connect_db.php");
$totals="";
$ratings="";
$sql=mysql_query("SELECT ratings FROM blog_posts WHERE id='aid'");
while($row=mysql_fetch_array($sql)){
    $myNums=$row["ratings"];
    $kaboom=explode(",",$myNums);

$result=array_count_values($kaboom);
foreach($result as $key=>$value){
    if($value=="1"){
        $howMany="person";
    }else{
        $howMany="people";
    }
    if($key==""){
        $pic="images/starsNorm.png";
}
else if ($key=="1"){
    $stars="star";
    $pic="images/1lit.png";
}
else if ($key=="2"){
    $stars="stars";
    $pic="images/1lit.png";
    }
else if ($key=="3"){
    $stars="stars";
    $pic="images/1lit.png";
}
else if ($key=="4"){
    $stars="stars";
    $pic="images/4lit.png";
    }
else if ($key=="5"){
    $stars="stars";
    $pic="images/5lit.png";
}

$totals.='<p class="small" style="colour:#32CD32;>' .$key.' '. $stars.':<img src="' .$pic.'"alt="stars"/>
'.$value.' ' .$howMany.'</p>';

    $count=count($kaboom);
    $sum=array_sum($kaboom);
$avg=$sum/$count;
$roundit=floor($avg);

if($roundit==0){
    $rating"This recepe is yet to be rated";
    $totals="";

}else if ($count==1){
    $rating='<p class="small" style="colour:#32CD32;">Average rating: '.$roundit.'/5 stars <img id="myStars" src="starsNorm.png" alt="stars" /></p>';
    
     }else if ($count>1){
    $rating='<p class="small" style="colour:#32CD32;">Average rating: '.$roundit.'/5 stars <img id="myStars" src="starsNorm.png" alt="stars" /></p>';
    }else {
        $rating="Sorry there is an error in the system, please try refreshing the page";
    }
}
}
?>
