<?php 
require("header.php");
?>


<body >
    <div class="loginbox">
        <h2>REGISTER YOUR HOSTEL</h2>
        <?php
        echo form_open_multipart("Guest/Hostelregistration");
        
        ?>
        <table  class="table table-borderless" style="width: 100%;margin:0 auto;">
            
        
            <tr class="textbox">
                <td>&nbsp;</td>
                <td>Hostel Name</td>
                <td><input type="text" name="hostelname" placeholder="hostel name"></td>
                <td>&nbsp;<?php echo form_error("hostelname");?></td>
            </tr>
            <tr class="textbox">
                <td>&nbsp;</td>
                <td>Adress</td>
                <td><textarea name="address"></textarea></td>
                <td>&nbsp;<?php echo form_error("address");?></td>
            </tr>
            <tr class="textbox">
                <td>&nbsp;</td>
		        <td>Contact</td>
		        <td><input type="text" name="contact" ></input></td>
	            <td>&nbsp;<?php echo form_error("contact");?></td>
            </tr>
            <tr>
                <td>&nbsp;</td>
		        <td>Email</td>
                <td><input type="email" name="email"></input></td>
                <td>&nbsp;<?php echo form_error("email");?></td>
	        </tr>
            <tr>
                <td>&nbsp;</td>
		        <td>Your Location</td>
		        <td><select name="location">
                <option value="" selected="selected" disabled="disabled">YOUR LOCATION</option>
                    <?php
                    foreach($data as $location)
                    {
                        ?>
                        <option value="<?php echo $location["loc_id"]?>"><?php echo $location["loc_name"]?></option>
                         <?php
                    }
                    ?>
                
                </section></td>
                <td>&nbsp;<?php echo form_error("location");?></td>
            </tr>
            <tr>
                <td>&nbsp;</td>
		        <td>Type</td>
		        <td><select name="type">
		        <option value="" selected="selected" disabled="disabled">select</option>
                <option value="gents">Gents</option>
                <option value="ladies">Ladies</option>
		        <option value="mixed">mixed</option></section></td>
                <td>&nbsp;<?php echo form_error("type");?></td>
            </tr>
            <tr class="textbox">
                <td>&nbsp;</td>
                <td>Hostel description</td>
                <td><textarea name="description"></textarea></td>
                <td>&nbsp;<?php echo form_error("description");?></td>
            </tr>
            <tr class="textbox">
                <td>&nbsp;</td>
		        <td>No of floor</td>
                <td><select name="floor">
		        <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                </section></td>
	            <td>&nbsp;<?php echo form_error("floor");?></td>
            </tr>
                 
                <tr class="textbox">
                <td>&nbsp;</td>
                <td>Photo</td>
		        <td  ><input type="file" value="photo" name="photo" >
                </input><?php if (isset($p)) { echo $p ;}  ?>
                </td>
                <td>&nbsp;</td><?php if(isset($msg_photo)){echo $msg_photo;} ?></tr>

                
            <tr class="textbox">
                 <td>&nbsp;</td>
                <td>Password</td>
                <td><input type="password" name="psw" placeholder="password"></td>
                <td>&nbsp;<?php echo form_error("psw");?></td>
            </tr>
            <tr class="textbox">
                 <td>&nbsp;</td>
                <td>confirm Password</td>
                <td><input type="password" name="psw2" placeholder="confirm password"></td>
                <td>&nbsp;<?php echo form_error("psw2");?></td>
            </tr>
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
        </form>
    </div>
</body>

<?php 
require("footer.php");
?>