<?php 
require("header.php");
?>
<body >
    <div class="loginbox">
        <h2>CREATE A ACCOUNT</h2>
        <?php
        echo form_open("layout/loginpage");
        
        ?>
        <table  class="table table-hover" style="width: 60%;margin:0 auto;">
            
        
            <tr class="textbox">
                <td>Email</td>
                <td><input type="text" name="email" placeholder="email@gmail.com"></td>
                <td>&nbsp;<?php echo form_error("email");?></td>
            </tr>
            <tr class="textbox">
                <td>Password</td>
                <td><input type="password" name="psw" placeholder="password"></td>
                <td>&nbsp;<?php echo form_error("pwd");?></td>
            </tr>
            <tr class="textbox">
                <td>conform Password</td>
                <td><input type="password" name="psw2" placeholder="confprm password"></td>
                <td>&nbsp;<?php echo form_error("pwd");?></td>
            </tr>
            <tr class="textbox">
            <td>&nbsp;</td>
                <td><input type="submit" name="log" value="Login" class="btn"></td>
                <td>&nbsp;</td>
            </tr>
            <tr class="textbox">
                <td>&nbsp;</td>
                <td>&nbsp;<?php if(isset($msg)){echo $msg;}?></td>
                <td>&nbsp;</td>
            </tr> 
        </table>
    </div>
</body>

<?php 
require("footer.php");
?>