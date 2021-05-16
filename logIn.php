<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
   Log In.........
    <body>
        <?php
        include 'header.php';
        //require 'index.php';
        // put your code here
        ?>
        <form id='login' method='post' accept-charset='UTF-8'>
            <fieldset >
            <legend>Login</legend>
            <input type='hidden' name='submitted' id='submitted' value='1'/>

            <label for='username' >UserName*:</label>
            <input type='text' name='username' id='username'  maxlength="50" />

            <label for='password' >Password*:</label>
            <input type='password' name='password' id='password' maxlength="50" />

            <input type='submit' name='Submit' value='Submit' />

            </fieldset>
        </form>
        
        <?php
        function CheckLoginInDB($username,$password)
{
    if(!$this->DBLogin())
    {
        $this->HandleError("Database login failed!");
        return false;
    }          
    $username = $this->SanitizeForSQL($username);
    $pwdmd5 = md5($password);
    $qry = "Select name, email from $this->tablename ".
        " where username='$username' and password='$pwdmd5' ".
        " and confirmcode='y'";
    
    $result = mysql_query($qry,$this->connection);
    
    if(!$result || mysql_num_rows($result) <= 0)
    {
        $this->HandleError("Error logging in. ".
            "The username or password does not match");
        return false;
    }
    return true;
}
        include 'footer.php';
        //require 'index.php';
        // put your code here
        ?>
    </body>
</html>
