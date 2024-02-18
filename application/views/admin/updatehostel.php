<?php 
require("header.php");
?>

<script src="<?php echo base_url();?>assets/bootstrap.min.js" ></script>
<script src="<?php echo base_url();?>assets/jquery.min.js" ></script>
          
<form method="POST">
               
<table align="center" class="table table-hover table-borderless "  style="width : 50%;margin:0 auto; font-family:verdana;font-size:100%">
    
    

    		<tr>
           
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>Hostel Name</td>
            <td><?php echo $hostels["hostel_name"] ; ?></td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            </tr>
    		<tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>Adress</td>
            <td><?php echo $hostels["hostel_address"] ; ?></td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            </tr>
    		<tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>Contact</td>
            <td><?php echo $hostels["hostel_contact"];?></td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            
            </tr>
            <tr><td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td><td>Email</td>
            <td><?php echo $hostels["hostel_email"];?></td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            </tr>
            <tr><td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td><td>Your Location</td>
            <td><?php echo $hostels["hostel_loc_id"];?></td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            </tr>
            <tr><td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td><td>Type</td>
            <td><?php echo $hostels["hostel_type"];?></td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            </tr>
            <tr><td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td><td>Hostel description</td>
            <td><?php echo $hostels["hostel_desc"];?></td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            </tr>
            <tr><td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td><td>No of floor</td>
            <td><?php echo $hostels["hostel_floor"];?></td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            </tr>
            <tr><td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td><td>Photo</td>
            <td><img src='<?php echo base_url("photos/").$hostels["hostel_photo"];?>' style="height:50px;width:50px;" /></td>
            <td>&nbsp;</td>

            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            </tr>
            <tr><td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td><td>CHANGE STATUS</td>
            <td><select name="status">
		        <option value="a" <?php if($hostels["hostel_status"]=='a'){echo "selected";}?>>ACTIVE</option>
                
                <option value="r" <?php if($hostels["hostel_status"]=='r'){echo "selected";}?>>REMOVE</option>
		        <option value="b" <?php if($hostels["hostel_status"]=='b'){echo "selected";}?>>BLOCKED</option>
                </section></td>
                <td ><input type="submit" name="update" value="UPDATE" class="btn btn-primary"></td>

            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
    </table>
</form>


   
  


