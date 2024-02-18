

<?php 
 require( "header.php");  
 ?>



<body >
    <div class="loginbox">
        <h2>ADD ROOM</h2>
        <?php
        echo form_open_multipart("Hostelmanager/addroom");
        
        ?>
        <table  class="table table-borderless" style="width: 100%;margin:0 auto;">
            <tr>
                <td>&nbsp;</td>
		        <td>ROOM NAME</td>
		        <td><select name="roomname">
		        <option value="" selected="selected" disabled="disabled">select</option>
                <option value="singlebed">Singlebed</option>
                <option value="doublebed">Doublebed</option>
		        <option value="triplebed">Triplebed</option>
                <option value="doorm">Dorm</option></section></td>
                <td>&nbsp;<?php echo form_error("roomname");?></td>
            </tr>
            
        
            <tr class="textbox">
                <td>&nbsp;</td>
                <td>Rent with food</td>
                <td><input type="text" name="rentwithfood" placeholder="in rupees"></td>
                <td>&nbsp;<?php echo form_error("rentwithfood");?></td>
            </tr>
            <tr class="textbox">
                <td>&nbsp;</td>
                <td>Rent without food</td>
                <td><input type="text" name="rentwithoutfood" placeholder="in rupees"></td>
                <td>&nbsp;<?php echo form_error("rentwithoutfood");?></td>
            </tr>
            <tr class="textbox">
                <td>&nbsp;</td>
                <td>Capacity of room</td>
                <td><input type="text" name="capacity" placeholder="no of persons"></td>
                <td>&nbsp;<?php echo form_error("capacity");?></td>
            </tr>
            <tr class="textbox">
                <td>&nbsp;</td>
                <td>Vacancy</td>
                <td><input type="text" name="vacancy" placeholder="availability"></td>
                <td>&nbsp;<?php echo form_error("vacancy");?></td>
            </tr>
                <tr><td>&nbsp;</td>
		        <td >Air Condition</td>
		        <td ><input type="radio" name="air" value="Air Condition" >YES</input>
                    <input type="radio" name="air" value="Not Air Condition" >NO</input></td>
                    <td>&nbsp;<?php echo form_error("air");?></td>
                </tr>
                <tr><td>&nbsp;</td>
		        <td >Bath type</td>
		        <td ><input type="radio" name="bath" value="Bath type" >YES</input>
                    <input type="radio" name="bath" value="not Bath type" >NO</input></td>
                    <td>&nbsp;<?php echo form_error("bath");?></td>
	            </tr>
	
            <tr class="textbox">
                <td>&nbsp;</td>
                <td>Room description</td>
                <td><textarea name="roomdesc"></textarea></td>
                <td>&nbsp;<?php echo form_error("roomdesc");?></td>
            </tr>
                <tr class="textbox">
                <td>&nbsp;</td>
                <td>Photo</td>
		        <td  ><input type="file" value="photo" name="photo" >
                </input><?php if (isset($p)) { echo $p ;}  ?>
                </td>
                <td>&nbsp;</td><?php if(isset($msg_photo)){echo $msg_photo;} ?></td></tr>
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

<?php 
 require( "footer.php");  
 ?>



