<?php 
require("header.php");
?>

<table align="" class="table   table-borderless" style="width: 100%;margin:0 auto;">
    
    	<tr>
            <td><h3>Photo</h3></td>
        
    		<td><h3>Hostel Name</h3></td>
    		<td><h3>Adress</h3></td>
    		<td><h3>Contact</h3></td>
            <td><h3>Type</h3></td>
            <td><h3>Details</h3></td>
        </tr>
      
    	<tr>
    		<?php
    		foreach ($hostels as $hostel)
    		{
            ?>
            <tr>
            <td><img src='<?php echo base_url("photos/").$hostel["hostel_photo"];?>' style="height:50px;width:50px;" /></td>
            
           <td><?php echo $hostel["hostel_name"] ; ?></td>
           <td><?php echo $hostel["hostel_address"] ; ?></td>
            <td><?php echo $hostel["hostel_contact"];?></td>
            
            <td><?php echo $hostel["hostel_type"];?></td>
            <td><a target="_blank" class="btn btn-primary" href="<?php echo site_url("guest/viewhostel/".$hostel["hostel_id"] ) ?>">DETALS</a></td>

            
            
                </tr>
                <?php
    		}
    		?>
    	</tr>
    </table>

<?php 
require("footer.php");
?>