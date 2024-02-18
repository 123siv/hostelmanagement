<?php 
require("header.php");
?>


<body >
    <div >
        <h2></h2>
        <?php
        echo form_open("Admin/advsearch");
        
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
                <td>Capacity of room</td>
                <td><select name="capacity">
		        <option value="" selected="selected" disabled="disabled">select</option>
                <option value="1">1</option>
                <option value="2">2</option>
		        <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option></section></td>
                <td>&nbsp;<?php echo form_error("type");?></td>
            </tr>
            
            <tr><td>&nbsp;</td>
		        <td >Air Condition</td>
		        <td ><input type="radio" name="air" value="Air Condition" >YES</input>
                    <input type="radio" name="air" value="Not Air Condition" >NO</input></td>
                <td>&nbsp;<?php echo form_error("air");?></td>
            </tr>
            <tr><td>&nbsp;</td>
            <td >Bath type</td>
		        <td ><input type="radio" name="bath" value="Bath type" >YES</input>
                    <input type="radio" name="bath" value="not Bath type" >NO</input></td>
                    <td>&nbsp;<?php echo form_error("bath");?></td>
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
    </form>

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
        <td><a target="_blank" class="btn btn-primary" href="<?php echo site_url("admin/viewhostel/".$hostel["hostel_id"] ) ?>">DETALS</a></td>

        
        
        </tr>
        <?php
        }
        ?>
        </tr>

</table>
    <?php } ?>
</div>
</body>
