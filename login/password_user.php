<?php session_start();
require '../include/sqlconn.php';
$sqlselect="select * from user";
$sqlselect3="select * from user";
$sqlselect1="select * from role";
$sqlselect2="select * from location";
$resultsel = mysql_query($sqlselect);
$resultsel1 = mysql_query($sqlselect1);
$resultsel2 = mysql_query($sqlselect2);
$resultsel3 = mysql_query($sqlselect3);
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>ETICKETING</title> <link href="../css/default.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
<fieldset><legend><b>USER CHANGE PASSWORD</b></legend>
    <br/>
        <form action="password_user.php" method="POST">
            <table border="0" >

                    <tr>
                        <td width="200">Username</td>
                       <td><input class="textfield" type="text" name="use" value="" /></td> </tr>
                     <tr>
                        <td width="200">Old Password</td>
                        <td><input class="textfield" type="password" name="pass" value="" /></td>
                    </tr>
                      
                    
                    <tr>
                    <td colspan="2" align="center"><input class="formbutton" type="submit" value="Submit"  name="submit" class="submit"  /></td>

                </tr>
                

            </table>
            </form>

<?php
if (isset ($_POST['submit'])){
     $use = trim($_POST['use']);
     $pass = trim($_POST['pass']);
     //$passn=trim($_POST['passn']);
$_SESSION['use']=$use;

    $sqlsearch = "select * from user where user_name = '$use' and password='$pass'";
    $results= mysql_query($sqlsearch);
  $s= mysql_num_rows($results) ;
    if  ($s == 1){

echo" <form action='passscript_user.php' method='POST'>";
echo"<table>";
echo"<tr><td width='200'>New Password</td><td><input class='textfield' type='text' name='pass1' value='' /></td></tr>";
echo"<tr>";
echo"<td colspan='2' align='center'><input class='formbutton' type='submit' value='Submit' name='submit' /></td>";
echo"</tr>";
echo"</table>";

echo"</form>";
    }}
           
          


        ?>
      </fieldset>
    </body>
</html>

