<html>
	<head>
		<title>Multiple Insert</title>
        <title>MASHLOG LOGIN FORM</title>
<link rel="stylesheet" type="text/css" href="style2.css">
	</head>
  
	<body id="bb" >
        <div id="bb" >
		<table >
		<form method="post" action="c.php" >
            <tr></tr>
        <tr  id="t1">
            
                *REPRESNTATION OF VH1,HH1,OH1 FOR THE QUARTENDING
            
		         <th></th>
                <th></th>
                <th></th>
            *
          
   &nbsp;&nbsp;&nbsp;   &nbsp;&nbsp;&nbsp;&nbsp;#CUMALATIVE POSITION OF NUMBER OG APPOINTMANTS/PROMOTION/DEPUTATION MADE(FROM 1ST QUARTER OF 2017 ONWARDS#
		                  </tr><br>
            <a>
            
                 
          
   &nbsp;&nbsp;&nbsp;   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;         
   &nbsp;&nbsp;&nbsp;   &nbsp;&nbsp;&nbsp;&nbsp;       
   &nbsp;&nbsp;&nbsp;   &nbsp;&nbsp;&nbsp;&nbsp;       
   &nbsp;&nbsp;&nbsp;   &nbsp;&nbsp;&nbsp;&nbsp;       
   &nbsp;&nbsp;&nbsp;   &nbsp;&nbsp;&nbsp;&nbsp;       
   &nbsp;&nbsp;&nbsp;   &nbsp;&nbsp;&nbsp;&nbsp;       
   &nbsp;&nbsp;&nbsp;   &nbsp;&nbsp;&nbsp;&nbsp;       
   &nbsp;&nbsp;&nbsp;   &nbsp;&nbsp;&nbsp;&nbsp;       
   &nbsp;&nbsp;&nbsp;   &nbsp;&nbsp;&nbsp;&nbsp;       
     &nbsp;&nbsp;&nbsp;   &nbsp;&nbsp;&nbsp;&nbsp;     
   &nbsp;&nbsp;&nbsp;   &nbsp;&nbsp;&nbsp;&nbsp;BY DIRECTION REQURITMENT  
                
        
   &nbsp;&nbsp;&nbsp;   &nbsp;&nbsp;&nbsp;&nbsp;       
   &nbsp;&nbsp;&nbsp;   &nbsp;&nbsp;&nbsp;&nbsp;       
   &nbsp;&nbsp;&nbsp;   &nbsp;&nbsp;&nbsp;&nbsp;       

        
   &nbsp;&nbsp;&nbsp;   &nbsp;&nbsp;&nbsp;&nbsp;     &nbsp;&nbsp;&nbsp;   &nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;   &nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;   &nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;   &nbsp;&nbsp;&nbsp;&nbsp;   BY PROMOTION         
   &nbsp;&nbsp;&nbsp;   &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;    
   FILLED UP BY DEPUTATION
           
         </a> 
     
                
            	<tr id="t1">
   
		         <th>vh1</th>
                <th>hh1</th>
                <th>oh1</th>
                    	<th>vh2</th>
                <th>hh2</th>
                <th>oh2</th>
				<th>vh3</th>
                <th>hh3</th>
                <th>oh3</th>
				<th>vh4</th>
                    
                <th>hh4</th>
                <th>oh4</th>
                    <th>username</th>
                <th>zone</th>
    
	</tr>
            	
          
           <td>
		<?php
			$numbers=$_POST['num'];
            $numb=$_POST['username'];
              $numbe=$_POST['num1'];
			for($i=1;$i<=$numbers;$i++)
			{
		?>
			<tr>
                	<th colspan='2'>Record #<?php echo $i;?>
                <?php
$favcolor = "$i";

switch ($favcolor) {
    case "1":
        echo "Group is A";
        break;
    case "2":
        echo "Group is B";
        break;
    case "3":
        echo "Group is C (including Group D excluding safaiwalas)";
        break;
    default:
        echo "Group is safaiwalas";
}
                        ?></td>
                
				
			</tr>
			<input type="hidden" value="<?php echo $numbers;?>" name="numbers" />
		
                   <td><input type="text" size="15"name="one[]" /></td>
			
				
				<td><input type="text" size="15"name="two[]" /></td>

			
				<td><input type="text" size="15"name="tdree[]" /></td>
			
				
				<td><input type="text" size="15"name="four[]" /></td>
			
				<td><input type="text" size="15"name="five[]" /></td>
			
				
				<td><input type="text" size="15"name="six[]" /></td>

			
				<td><input type="text" size="15"name="seven[]" /></td>
			
				
				<td><input type="text" size="15"name="eight[]" /></td>
               
                
                <td><input type="text" size="15"name="nine[]" /></td>
			
				
				<td><input type="text" size="15"name="ten[]" /></td>

			
				<td><input type="text" size="15"name="elven[]" /></td>
			
				
				<td><input type="text" size="15"name="twel[]" /></td>
             <td><input type="text" size="15" value="<?php echo $numb;?>" name="username[]" />  </td>
              <td><input type="text"  size="15" value="<?php echo $numbe;?>" name="jone[]" />  </td>
			<tr>
				<td colspan='2'>&nbsp;</td>
			</tr>
		<?php } ?>
			<tr>
                <td colspan='2'><input id="sub"type="submit" value="Insert" name="submit" ><?php exit() ?> </input></td>
			</tr>
		</form>
		</table>
        </div>
     
	</body>
</html>
