<?php 
require("header.php");
?>


<body >
    <div class="loginbox">
        <h2></h2>
        <?php
        echo form_open("Guest/login");
        
        ?>
        <table  class="table table-hover table-borderless" style="width: 100%;margin:0 auto;">
            
        
            <tr class="textbox">
                <td>&nbsp;</td>
                <td>Email</td>
                <td><input type="text" name="email" placeholder="email@gmail.com"></td>
                <td>&nbsp;<?php echo form_error("email");?></td>
            </tr>
            <tr class="textbox">
                <td>&nbsp;</td>
                <td>Password</td>
                <td><input type="password" name="psw" placeholder="password"></td>
                <td>&nbsp;<?php echo form_error("psw");?></td>
            </tr>
            
            <tr class="textbox">
            <td>&nbsp;</td>
            <td>&nbsp;</td>
                <td><input type="submit" name="log" value="Login" class="btn btn-primary"></td>
                <td>&nbsp;</td>
            </tr>
            <tr class="textbox">
                <td>&nbsp;</td>
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