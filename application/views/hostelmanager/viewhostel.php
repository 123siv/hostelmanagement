<?php 
require("header.php");
?>

<table align="" class="table  table-bordered table-hover" style="width: 100%;margin:0 auto;">
    
    		<tr><td><h3>Hostel Name</h3></td>
            <td><h3><?php echo $data["hostel_name"] ; ?></h3></td>
            </tr>
    		<tr><td><h3>Adress</h3></td>
            <td ><h3><?php echo $data["hostel_address"] ; ?></h3></td>
            </tr>
    		<tr><td><h3>Contact</h3></td>
            <td><h3><?php echo $data["hostel_contact"];?></h3></td>
            </tr>
            <tr><td><h3>Email</h3></td>
            <td><h3><?php echo $data["hostel_email"];?></h3></td>
            </tr>
            <tr><td><h3>Your Location</h3></td>
            <td><h3><?php echo $data["hostel_loc_id"];?></h3></td>
            </tr>
            <tr><td><h3>Type</h3></td>
            <td><h3><?php echo $data["hostel_type"];?></h3></td>
            </tr>
            <tr><td><h3>Hostel description</h3></td>
            <td><h3><?php echo $data["hostel_desc"];?></h3></td>
            </tr>
            <tr><td><h3>No of floor</h3></td>
            <td><h3><?php echo $data["hostel_floor"];?></h3></td>
            </tr>
            <tr><td><h3>Photo</h3></td>
            <td><img src='<?php echo base_url("photos/").$data["hostel_photo"];?>' style="height:50px;width:50px;" /></td>

    	</tr>
    </table>

<?php 
require("footer.php");
?>