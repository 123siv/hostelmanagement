

<?php 
 require( "header.php");  
 ?>



<body >
    <div class="loginbox">
        <form method="POST">
       
       
        <table  class="table table-borderless" style="width: 100%;margin:0 auto;">
        
            <tr>
                <td>&nbsp;</td>
		        <td>ROOM NAME</td>
		        <td><select name="roomname">
		        <option value="" selected="selected" disabled="disabled"><?php echo $data["room_name"];?></option>
                <option value="singlebed">Singlebed</option>
                <option value="doublebed">Doublebed</option>
		        <option value="triplebed">Triplebed</option>
                <option value="doorm">Dorm</option></section></td>
                <td>&nbsp;<?php echo form_error("roomname");?></td>
            </tr>
            
        
            <tr class="textbox">
                <td>&nbsp;</td>
                <td>Rent with food</td>
                <td><input type="text" name="rentwithfood" value="<?php echo $data["room_rent_food"];?>"></td>
                <td>&nbsp;<?php echo form_error("rentwithfood");?></td>
            </tr>
            <tr class="textbox">
                <td>&nbsp;</td>
                <td>Rent without food</td>
                <td><input type="text" name="rentwithoutfood" value="<?php echo $data["room_rent_notfood"];?>"></td>
                <td>&nbsp;<?php echo form_error("rentwithoutfood");?></td>
            </tr>
            <tr class="textbox">
                <td>&nbsp;</td>
                <td>Capacity of room</td>
                <td><input type="text" name="capacity" value="<?php echo $data["room_capacity"];?>"></td>
                <td>&nbsp;<?php echo form_error("capacity");?></td>
            </tr>
            <tr class="textbox">
                <td>&nbsp;</td>
                <td>Vacancy</td>
                <td><input type="text" name="vacancy" value="<?php echo $data["room_vacancy"];?>"></td>
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
                <td><textarea name="roomdesc"><?php echo $data["room_desc"];?></textarea></td>
                <td>&nbsp;<?php echo form_error("roomdesc");?></td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td>STATUS</td>
		        <td><select name="status">
		        <option value="a" <?php if($data["room_status"]=='a'){echo "selected";}?>>ACTIVE</option>
                
                <option value="r" <?php if($data["room_status"]=='r'){echo "selected";}?>>REMOVE</option>
		        <option value="b" <?php if($data["room_status"]=='b'){echo "selected";}?>>BLOCKED</option>
                </section></td>
                
            </tr>
                
            <tr class="textbox">
            <td>&nbsp;</td>
            <td>&nbsp;</td>
                <td ><input type="submit" name="update" value="UPDATE" class="btn btn-primary"></td>
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
</form>
</body>

<?php 
 require( "footer.php");  
 ?>



