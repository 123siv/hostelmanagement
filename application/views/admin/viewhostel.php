<?php 
require("header.php");
?>

<script src="<?php echo base_url();?>assets/bootstrap.min.js" ></script>
<script src="<?php echo base_url();?>assets/jquery.min.js" ></script>
          

               
<table align="center" class="table table-hover table-borderless table-responsive" style="width: 100%;margin:0 auto;" style="font-family:verdana;font-size:100%">
    
    

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
            <td><a target="_blank" class="btn btn-primary" href="<?php echo site_url("admin/updatehostel/".$hostels["hostel_id"] ) ?>">UPDATE</a></td>

            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
        </tr>
       

    
        
    
        <tr>
    		<td>ROOM NAME</td>
    		<td>Capacity of room</td>
    		<td>Rent with food</td>
            <td>Rent without food</td>
            <td>Vacancy</td>
            <td>Bath type</td>
            <td>Room description</td>
            <td>Air Condition</td>
            <td>Photo</td>
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


   
  


