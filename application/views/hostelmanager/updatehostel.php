<?php 
require("header.php");
?>

<body >
    <div class="loginbox">
        
        <?php
        echo form_open_multipart("Hostelmanager/updatehostel");
        
        ?>

<table align="" class="table  table-bordered table-hover" style="">
    
    		<tr><td><h3>Hostel Name</h3></td>
           
            <td><input type="text" name="hostelname" value="<?php echo $data["hostel_name"] ; ?>"></td>
            <td>&nbsp;<?php echo form_error("hostelname");?></td>
            </tr>
    		<tr><td><h3>Adress</h3></td>
           
            <td><textarea name="address" value=""><?php echo $data["hostel_address"] ; ?></textarea></td>
            <td>&nbsp;<?php echo form_error("address");?></td>
            </tr>
    		<tr><td><h3>Contact</h3></td>
           
            <td><input type="text" name="contact" value="<?php echo $data["hostel_contact"];?>"></input></td>
            <td>&nbsp;<?php echo form_error("contact");?></td>
            </tr>
            <tr><td><h3>Email</h3></td>
          
            <td><input type="email" name="email" value="<?php echo $data["hostel_email"];?>"></input></td>
            <td>&nbsp;<?php echo form_error("email");?></td>
            </tr>
            <tr><td><h3>Your Location</h3></td>
           
            <td><select name="location">
                <option value="" selected="selected" disabled="disabled"><?php echo $data["hostel_loc_id"];?></option>
                    <?php
                    foreach($locations as $location)
                    {
                        ?>
                        <option value="<?php echo $location["loc_id"]?>"><?php echo $location["loc_name"]?></option>
                         <?php
                    }
                    ?>
                
                </section></td>
                <td>&nbsp;<?php echo form_error("location");?></td>
            </tr>
            <tr><td><h3>Type</h3></td>
            
            <td><select name="type">
		        <option value="" selected="selected" disabled="disabled"><?php echo $data["hostel_type"];?></option>
                <option value="gents">Gents</option>
                <option value="ladies">Ladies</option>
                <option value="mixed">mixed</option></section></td>
                <td>&nbsp;<?php echo form_error("type");?></td>
                
            </tr>
            <tr><td><h3>Hostel description</h3></td>
            
            <td><textarea name="description" value=""><?php echo $data["hostel_desc"];?></textarea></td>
            <td>&nbsp;<?php echo form_error("description");?></td>
            </tr>
            <tr><td><h3>No of floor</h3></td>
          
            <td><select name="floor" value="<?php echo $data["hostel_floor"];?>">
		        <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                </section></td>
                <td>&nbsp;<?php echo form_error("floor");?></td>
            </tr>
            
            
           
        <tr>
        <td>&nbsp;</td>
        
        <td ><input type="submit" name="submit" value="UPDATE" class="btn btn-primary">
        </td>
        </tr>
        <tr class="textbox">
                
                <td>&nbsp;</td>
                <td>&nbsp;<?php if(isset($msg)){echo $msg;}?></td>
                <td>&nbsp;</td>
        </tr> 
    </table>
    </form>
    </div>
</body>
<?php 
require("footer.php");
?>