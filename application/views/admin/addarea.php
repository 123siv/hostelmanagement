<?php 
require("header.php");
?>



<body >
    <div class="loginbox">
    <h2>ADD  NWE AREAS</h2>
        <?php
        echo form_open("Admin/addarea");
        
        ?>
        <table  class="table table-borderless" style="width: 100%;margin:0 auto; " align="center">
            
        
            <tr class="textbox">
                <td>&nbsp;</td>
                <td>Add Areas</td>
                <td><input type="text" name="addarea" placeholder=""></td>
                <td>&nbsp;<?php echo form_error("addarea");?></td>
                <tr class="textbox">
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td ><input type="submit" name="submit" value="SUBMIT" class="btn btn-primary"></td>
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

