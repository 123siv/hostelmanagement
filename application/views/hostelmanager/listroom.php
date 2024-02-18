<?php 
require("header.php");
?>


</head>
<body>
<table align="" class="table table-borderless" style="width: 100%;margin:0 auto;">
    
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
            <td><h3>UPDATE</h3></td>


    	</tr>
    	<tr>
    		<?php
    		foreach ($data as $rooms)
    		{
                ?>
                <tr>
           <td><?php echo $rooms["room_name"];?></td>
           <td><?php echo $rooms["room_capacity"];?></td>
           <td><?php echo $rooms["room_rent_food"];?></td>
        
           <td><?php echo $rooms["room_rent_notfood"];?></td>
           <td><?php echo $rooms["room_vacancy"];?></td>
           <td><?php echo $rooms["room_bath_type"];?></td>
           <td><?php echo $rooms["room_desc"];?></td>
           <td><?php echo $rooms["room_cond"];?></td>
           <td><img src='<?php echo base_url("photos/").$rooms["room_photo"];?>'style="height:50px;width:50px;" /></td>
           <td><a target="_blank" class="btn btn-primary" href="<?php echo site_url("hostelmanager/updaterooms/".$rooms["room_id"] ) ?>">EDIT</a></td>
            

            
            
                </tr>
                <?php
    		}
    		?>
    	</tr>
    </table>

<?php 
require("footer.php");
?>