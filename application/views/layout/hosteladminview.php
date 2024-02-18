<!DOCTYPE html>
<html>
<head>

</head>
<body>
<table align="center">
    
    	<tr>
    		<td>name</td>
    		<td>course</td>
    		<td>year</td>
            <td>college</td>

    	</tr>
    	<tr>
    		<?php
    		foreach ($data as $value)
    		{
                echo"<tr>";
            echo "<td>".$value["name"]."</td>";
            echo "<td>".$value["course"]."</td>";
            echo "<td>".$value["year"]."</td>";
            echo "<td>".$value["college"]."</td>";
                echo"</tr>";
    		}
    		?>
    	</tr>
    </table>
</body>
</html>