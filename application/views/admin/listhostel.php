<?php 
require("header.php");
?>

<form method="POST">

<table align="" class="table table-borderless" style="width: 100%;margin:0 auto;">
    
    	<tr>
            <td><h3>Photo</h3></td>
        
    		<td><h3>Hostel Name</h3></td>
    		<td><h3>Adress</h3></td>
    		<td><h3>Contact</h3></td>
            <td><h3>Type</h3></td>
            <td><h3>STATUS</h3></td>
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
            <td>
		        <?php if($hostel["hostel_status"]=='a'){echo "ACTIVE";}?>
                
                <?php if($hostel["hostel_status"]=='r'){echo "REMOVE";}?>
		        <?php if($hostel["hostel_status"]=='b'){echo "BLOCKED";}?>
            </td>
                
               
            <td><a target="_blank" class="btn btn-primary" href="<?php echo site_url("admin/viewhostel/".$hostel["hostel_id"] ) ?>">DETALS</a></td>

               
                
		      
            </tr>
                <?php
    		}
    		?>
    	</tr>
    </table>
    </form>

