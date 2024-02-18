<?php 
require("header.php");
?>


<body >
    <div class="loginbox">
        <h2>CREATE A ACCOUNT</h2>
        <?php
        echo form_open("layout/reg");
        
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
                <td>confirm Password</td>
                <td><input type="password" name="psw2" placeholder="confirm password"></td>
                <td>&nbsp;<?php echo form_error("pwd");?></td>
            </tr>
            <tr class="textbox">
            <td>&nbsp;</td>
                <td><input type="submit" name="log" value="Signup" class="btn"></td>
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