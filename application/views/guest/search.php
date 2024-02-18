<?php 
require("header.php");
?>


<body >
    <div >
        <h2></h2>
        <?php
        echo form_open("Guest/search");
        
        ?>
        <table  class="table table-hover" style="width: 100%;margin:0 auto;">
            
        
        <tr>
                <td>&nbsp;</td>
		        <td>Location for search</td>
		        <td><select name="location">
                <option value="" selected="selected" disabled="disabled">SEARCH LOCATION</option>
                    <?php
                    foreach($area as $location)
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
            <td>&nbsp;</td>
                <td><input type="submit" name="search" value="search" class="btn btn-primary"></td>
                <td>&nbsp;</td>
            </tr>
            <tr class="textbox">
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;<?php if(isset($msg)){echo $msg;}?></td>
                <td>&nbsp;</td>
            </tr> 
       
    		
    </table>

    <div >
      
    <?php
 if(isset($hostels))
 {
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
<?php } ?>
</div>
</body>

<?php 
require("footer.php");
?>