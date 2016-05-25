<?php
mysql_connect(/*mysql db host*/, /*mysql username*/, /*mysql password*/);
mysql_select_db(/*mysql database_name*/);

//get the username
$uemail = mysql_real_escape_string($_POST['uemail']);

//mysql query to select field email if it's equal to the username that we check '
$result = mysql_query('select email from users where email = "'. $uemail .'"');

//if number of rows fields is bigger them 0 that means it's NOT available '
if(mysql_num_rows($result)>0){
    //and we send 0 to the ajax request
    echo 0;
}else{
    //else if it's not bigger then 0, then it's available '
    //and we send 1 to the ajax request
    echo 1;
}  ?>
