<?php
    print_r($_POST);
?>
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
    <body>
        <div id="text-boxes">
            <form name="form" method="post" action="">
            <textarea name="english" rows="3" cols="70">English</textarea>
            <br />
            
            <textarea name="arabic" dir="rtl" rows="3" cols="70"> اردو -عربي -فارسي</textarea>
            <br />
            
            <button type="submit"  name="create">Create Quote</button>
            <br />
            </form>
        </div>
    </body>
</html>
