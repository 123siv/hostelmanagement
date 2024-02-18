<?php 
require("header.php");
?>

<table align="" class="table table-borderless" style="width: 100%;margin:0 auto;">
    
    
    		<tr><td><h3>Hostel Name</h3></td>
            <td><?php echo $hostels["hostel_name"] ; ?></td>
            </tr>
    		<tr><td><h3>Adress</h3></td>
            <td><?php echo $hostels["hostel_address"] ; ?></td>
            </tr>
    		<tr><td><h3>Contact</h3></td>
            <td><?php echo $hostels["hostel_contact"];?></td>
            </tr>
            <tr><td><h3>Email</h3></td>
            <td><?php echo $hostels["hostel_email"];?></td>
            </tr>
            <tr><td><h3>Your Location</h3></td>
            <td><?php echo $hostels["hostel_loc_id"];?></td>
            </tr>
            <tr><td><h3>Type</h3></td>
            <td><?php echo $hostels["hostel_type"];?></td>
            </tr>
            <tr><td><h3>Hostel description</h3></td>
            <td><?php echo $hostels["hostel_desc"];?></td>
            </tr>
            <tr><td><h3>No of floor</h3></td>
            <td><?php echo $hostels["hostel_floor"];?></td>
            </tr>
            <tr><td><h3>Photo</h3></td>
            <td><img src='<?php echo base_url("photos/").$hostels["hostel_photo"];?>' style="height:50px;width:50px;" /></td>

    	</tr>
    </table>
    <h1 align="center">ROOMS</h1>
    <table align="" class="table table-bordered" style="width: 100%;margin:0 auto;">
        <tr>
    		<td><h3>ROOM NAME</h3></td>
    		<td><h3>Capacity of room</h3></td>
    		<td><h3>Rent with food</h3></td>
            <td><h3>Rent without food</h3></td>
            <td><h3>Vacancy</h3></td>
            <td><h3>Bath type</h3></td>
            <td><h3>Room description</h3></td>
            <td><h3>Air Condition</h3></td>
            <td><h3>Photo</h3></td>
    	</tr>
    	<tr>
    		<?php
    		foreach ($rooms as $room)
    		{
            ?>
            <tr>
            <td><?php echo $room["room_name"];?></td>
            <td><?php echo $room["room_capacity"];?></td>
            <td><?php echo $room["room_rent_food"];?></td>
            <td><?php echo $room["room_rent_notfood"];?></td>
            <td><?php echo $room["room_vacancy"];?></td>
            <td><?php echo $room["room_bath_type"];?></td>
            <td><?php echo $room["room_desc"];?></td>
            <td><?php echo $room["room_cond"];?></td>
            <td><img src='<?php echo base_url("photos/").$room["room_photo"];?>'style="height:50px;width:50px;" /></td>

            

            
            
            </tr>
            <?php
    		}
    		?>
    	</tr>	
    </table>



<?php 
require("footer.php");
?>