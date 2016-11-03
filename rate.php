<?php
if(isset($POST{"choice"})){
    $choice=preg_replace('#[^0-9]#i','',$_POST['choice']);
    if($choice>5){
        echo "Stop playing around";
        exit();
    }else if($choice<1){
        echo "Stop playing around";
exit();
    }else{
        $ipaddress=getenv('REMOTE_ADAR');
        include_once("scripts/connect_db.php");
        $sql_check=mysql_query("SELECT* FROM rating_ip WHERE a_id='1' AND ipaddress='$ipaddress' LIMIT 1");
        $num_rows=mysql_num_rows($sql_check);
        if($num_rows>0){
            echo'<p style="colour:#F00,">Sorry, You have already rated</p>';
exit();
        }

        $sql=mysql_query("SELECT ratings FROM blog_posts WHERE id='1'");
        while($row=mysql_fetch_array($sql)){
            $myNums=$row["ratings"];
            $kaboom=explode(",",$kaboom);

            $firstChar=substr($string,0,1);
            $lastChar=substr($string,strlen($string) -1,1);
            if($firstChar==","){
                $string=$choice;
            }
            if($lastChar==","){
                $string=substr($string.strlen($string) -1,1);
            }

            $update=mysql_query("UPDATE blog_post SET ratings='$string' WHERE id='1'");
            $insert=mysql_query("INSERT INTO rating_ip(a-ip, ipaddress)VALUES ('1','$ipaddress')")or die (mysql_error());
            echo'<p style="colour:#06F;">Thanks, you have given this recepe a rating of '.$choice.'</p>;
            exit();
    }
    }
    }
}
?>
