<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
  <title>Room Dimensions Calculator for Borwells SW Challenge </title>
  <link rel="stylesheet" type="text/css" href="CSS/borwells.css" />

</head>

<body>

	<?php // Room Dimensions Calculator for Borwells SW Challenge with the help of php in Easy Steps and Script 4.2 - handle_calc.php from www.peachpit.com
	
		//UN-DEFINED VARIABLES
		$length = $_POST['length'] ;
		$height = $_POST['height'] ;
		$width = $_POST['width'] ;
		$windowqty = $_POST['windows'] ;
		$doorqty = $_POST['doors'] ;
				
		//PRE-DEFINED VARIABLES
		$tincoverage = 25  ;							//Each tin of paint will cover this amount of square metres
		$tinofpaint = 2.5  ;							//Defines the size of each tin of paint in lites
		$doorarea = 2 ;								//Square Metres for a door
		$windowarea = 1 ;							//Sqwuares Metres for a window
				
		//CALCULATIONS
		$floorarea = $length * $width ;						/*floor area*/
		$volume = $floorarea * $height ;					/*volume*/
		$wallarealong = $length * $height ;					// defines the wall area of one of the length walls
		$wallareawide = $width * $height ;					//defines the wall area of one of the width walls
		$wallarearoom = ($wallarealong * 2) + ($wallareawide * 2) ;			//wall area for the room
		$doorsarea = $doorqty * $doorarea ;					//door area for  the room
		$windowsarea = $windowqty * $windowarea ;				//window area for the room
		$wallarearoommdaw = $wallarearoom - ($doorsarea + $windowsarea) ;		//Area of all four walls minus doors and windows (mdaw)
		$amountofpainttins = $wallarearoommdaw / $tincoverage;			/*This divides the square metres of the room walls by the square metres for each tin of paint to give us the number of 
																		tins of paint, or portions thereof, needed to cover the room*/
		$litresofpaint = $amountofpainttins * $tinofpaint ;				/*Multiples the number of tins needed to paid the room by the size of each tin in litres to arrive at the number of litres needed to
																		paint the walls of the room*/
																		
																		//PUT SOME PROTECTION IN HERE TO PREVENT ERRORS IN THE ABOVE
										
	?>	<!--Ends the PHP so i can go on and cleanly format un html below for statements-->
	
	<div class="wrapper">
		
		<h1>Borwells Software Challenge</h1>
		
		<!--ASSUMPTIONS STATEMENT DISPLAYED using a clean mix of html & php-->
		<h3>Your Information</h3>
		<ul>
			<li>	<?php echo "You have selected a room length of $length Metres." ; ?> </li>
			<li>	<?php echo "You have selected a room width of $width Metres. <br>" ; ?> </li>
			<li> 	<?php echo "You have selected a room height of $height Metres. <br>" ; ?> </li>
			<li> 	<?php echo "You have selected $doorqty door/doors for the room. <br>" ; ?> </li>
			<li> 	<?php echo "You have selected $windowqty window/windows for the room. <br>" ; ?> </li>
			<li> 	<?php echo "The room is oblong in shape and has four walls. <br>" ; ?> </li>
			<li> 	<?php echo "Each door has an area of $doorarea square metres. <br>" ; ?> </li>
			<li> 	<?php echo "Each window has an area of $windowarea square metre. </li>" ; ?> </li>
			<li> 	<?php echo "A standard tin of paint has $tinofpaint litres of paint in it and each tin will cover $tincoverage square metes. <br>" ; ?> </li>
		</ul>

					
		<!--RESULTS DISPLAYED-->
		<h3>Your Results</h3>
		<ul>
			<li>	<?php echo "There are $floorarea square metres of floor area and this is a sum of the room s $length metre length multiplied by $width metre width. <br>" ; ?> </li>
			<li>	<?php echo "The room has a volume of $volume Cubic Metres and this is a sum of the room's floor area of $floorarea square metres multiplied by the room's $height metre height. <br>" ; ?> </li>
			<li>	<?php echo "The room has two walls defining its length and each has an area of $wallarealong square metres. <br>" ; ?> </li>
			<li>	<?php echo "The room has two walls defining its width and each has an area of $wallareawide square metres. <br>" ; ?> </li>
			<li>	<?php echo "The entire wall area for the room is therefore $wallarearoom square metres, this being the sum of the area for the two walls defining the room length plus 
						the area for the two walls defining the room width. <br>" ; ?> </li>
			<li>	<?php echo "The area allocated to windows is $windowsarea square metre/metres and is the sum of the area $windowarea square metre area allocated for each window multiplied 
						by the number of windows. <br>" ; ?> </li>
			<li>	<?php echo "The area allocated to doors is $doorsarea square metre/metres and is the sum of the $doorarea square metre area allocated for each door multiplied by the number of doors. <br>" ; ?> </li>
			<li>	<?php echo "The $wallarearoom square metre wall area for the entire room minus the area pre-allocated for doors and windows in the room is $wallarearoommdaw Square Metres. <br>" ; ?> </li>
			<li>	<?php echo "The number of 2.5 litre tins of paint (or portion thereof) needed to cover the room is $amountofpainttins. <br>" ; ?> </li>
			<li>	<?php echo "The required quantity of paint to cover all of the room's $wallarearoommdaw square metres of wall is therefore $litresofpaint Litres. <br>" ; ?> </li>
		</ul>
	</div>

</body>
</html>