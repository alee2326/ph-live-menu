<html>
	<head>	
		<!-- reloads page every 1 minute  -->
		<META http-equiv="refresh" content="5;URL=http://localhost/">
		<!-- adds the font 'Days One' from Google Fonts -->
<!--		<link href='http://fonts.googleapis.com/css?family=Schoolbell|Days+One' rel='stylesheet' type='text/css'>-->
		<!-- regular CSS for page -->	
		<link rel="stylesheet" type="text/css" href="style.css">
		
		<?php
			// set up variables and arrays 
			$Beername = array();
			$style = array();
			$whobrew = array();					
			$whobrew = array();					
			$abv = array();					
			$hops = array();
			$srm = array();
			$price = array();
			$status = array();
			$Beernamel = array();

			
			// set URL/Paths for csv and recipe pages
			// $Beersurl = "Beers.csv";
			$Beersurl = "https://docs.google.com/spreadsheet/pub?key=0AmGivUUIG1LydHZXWi1FZUhGM1J1UklncUQ4NVk2elE&output=csv";
			$tap1fB = "";
			$tap2fB = "";
			$tap3fB = "";
			$tap4fB = "";
			$tap5fB = "";
			$tap6fB = "";
			
			// writes csv info into arrays
			$handle = fopen($Beersurl, "r");
				while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
					$Beername[$data[0]] = $data[1];
					$style[$data[0]] = $data[2];
					$whobrew[$data[0]] = $data[3];
					$price[$data[0]] = $data[4];
					$pour[$data[0]] = $data[5];
					$abv[$data[0]] = $data[6];
					$hops[$data[0]] = $data[7];
					$srm[$data[0]] = $data[8];
					$status[$data[0]] = $data[9];
					$Beernamel[$data[0]] = $data[10];
				}
			fclose($handle);
		?>
		
			<!--Adds Fauna from Google font collection-->
		<link href='http://fonts.googleapis.com/css?family=Fauna+One' rel='stylesheet' type='text/css'>
	</head>
	
	<body bgcolor="#000000">
		<div id="header">
			<div id="headerboxa">
				<h1>THE PUBLIC HOUSE DRAUGHT LIST for <?php
					$date=getdate(date("U")-7200);
					print("$date[month] $date[mday], $date[year]");
				?></h1>
			</div>
			<!--<div id="headerboxa">
				<img src="images/logos/PublicHouse.png" height="170">
			</div>		-->
			<div id="headerboxb">
				
			</div>
		</div>	
		<br />
		<!-- Background div for column headers -->
<!--		<div id="TitleBarBack">
		</div>
		
		<div id="TitleBarBeerPic">
		</div>
		
		<div id="TitleBarBeerName">
		NAME
		</div>
		
		<div id="TitleBarInfo">
		INFO
		</div>
		
		<div id="TitleBarPrice">
		PRICE
		</div>-->
		
		<!--<div id="TitleBarKeg">
		STATUS
		</div>-->
<div id="draught-list">		
	<div id="col-1">
			<!-- Tap 1 -->
			<div id="content-rowe">
				<!--<div id="BeerPic">
					<img src="images/SRM <?php echo $srm['Beer1']; ?>.png" height="100">
				</div>-->	
				<div id="<?php echo $Beernamel['Beer1']; ?>">
					<?php echo "<h1>", $Beername['Beer1'], "</h1>";
						echo "<h2>", $whobrew['Beer1'], "<br />", "</h2>","<h3>", $style['Beer1'], "</h3>"; ?>
				</div>
				<div id="BeerInfo">
					<?php echo $abv['Beer1']; ?>
					<br /><h2>ABV</h2>
					<div id="BeerPour"><?php echo $pour['Beer1']; ?>
					</div></div>
					<!--<div id="BeerIBU"><img src="images/<?php echo $hops['Beer1']; ?> Hops.png" width="100">
				<br /><h2>IBU</h2></div>-->
				<div id="BeerPrice">
					<?php echo $price['Beer1']; ?>
				</div>
				<!--<div id="BeerStatus">
					<img src="images/kegs/<?php echo $status['Beer1']; ?>.png" width="80">
				</div>-->
			</div>
			
			<!-- Tap 2 -->
			<div id="content-row2">
				<div id="content-row2g">
				</div>		
				<div id="content-row2a">
				<!--<div id="BeerPic">
					<img src="images/SRM <?php echo $srm['Beer2']; ?>.png" height="100">
				</div>-->
				<div id="<?php echo $Beernamel['Beer2']; ?>">
					<?php echo "<h1>", $Beername['Beer2'], "</h1>";
						echo "<h2>", $whobrew['Beer2'], "<br />", "</h2>","<h3>", $style['Beer2'], "</h3>"; ?>
				</div>
				<div id="BeerInfo">
					<?php echo $abv['Beer2']; ?>
					<br /><h2>ABV</h2>
					<div id="BeerPour"><?php echo $pour['Beer2']; ?>
					</div></div>
					<!--<div id="BeerIBU"><img src="images/<?php echo $hops['Beer2']; ?> Hops.png" width="100">
				<br /><h2>IBU</h2></div>-->
				<div id="BeerPrice">
					<?php echo $price['Beer2']; ?>
				</div>
				<!--	<div id="BeerStatus">
						<img src="images/kegs/<?php echo $status['Beer2']; ?>.png" width="80">
					</div>-->
				</div>
			</div>
			
			<!-- Tap 3 -->		
			<div id="content-rowe">
				<!--<div id="BeerPic">
					<img src="images/SRM <?php echo $srm['Beer3']; ?>.png" height="100">
				</div>-->
				<div id="<?php echo $Beernamel['Beer3']; ?>">
					<?php echo "<h1>", $Beername['Beer3'], "</h1>";
						echo "<h2>", $whobrew['Beer3'], "<br />", "</h2>","<h3>", $style['Beer3'], "</h3>"; ?>
				</div>
				<div id="BeerInfo">
					<?php echo $abv['Beer3']; ?>
					<br /><h2>ABV</h2>
					<div id="BeerPour"><?php echo $pour['Beer3']; ?>
					</div></div>
					<!--<div id="BeerIBU"><img src="images/<?php echo $hops['Beer3']; ?> Hops.png" width="100">
				<br /><h2>IBU</h2></div>-->
				<div id="BeerPrice">
					<?php echo $price['Beer3']; ?>
				</div>
				<!--<div id="BeerStatus">
					<img src="images/kegs/<?php echo $status['Beer3']; ?>.png" width="80">-->
				</div>
	
			<!-- Tap 4 -->
			<div id="content-row2">
				<div id="content-row2g">
				</div>		
				<div id="content-row2a">
					<!--<div id="BeerPic">
					<img src="images/SRM <?php echo $srm['Beer4']; ?>.png" height="100">
				</div>-->
				<div id="<?php echo $Beernamel['Beer4']; ?>">
					<?php echo "<h1>", $Beername['Beer4'], "</h1>";
						echo "<h2>", $whobrew['Beer4'], "<br />", "</h2>","<h3>", $style['Beer4'], "</h3>"; ?>
				</div>
					<div id="BeerInfo">
					<?php echo $abv['Beer4']; ?>
					<br /><h2>ABV</h2>
					<div id="BeerPour"><?php echo $pour['Beer4']; ?>
					</div></div>
					<!--<div id="BeerIBU"><img src="images/<?php echo $hops['Beer4']; ?> Hops.png" width="100">
				<br /><h2>IBU</h2></div>-->
					<div id="BeerPrice">
					<?php echo $price['Beer4']; ?>
				</div>
					<!--<div id="BeerStatus">
						<img src="images/kegs/<?php echo $status['Beer4']; ?>.png" width="80">
					</div>-->
				</div>
			</div>
	
			<!-- Tap 5 -->
			<div id="content-rowe">
				<!--<div id="BeerPic">
					<img src="images/SRM <?php echo $srm['Beer5']; ?>.png" height="100">
				</div>-->
				<div id="<?php echo $Beernamel['Beer5']; ?>">
					<?php echo "<h1>", $Beername['Beer5'], "</h1>";
						echo "<h2>", $whobrew['Beer5'], "<br />", "</h2>","<h3>", $style['Beer5'], "</h3>"; ?>
				</div>
				<div id="BeerInfo">
					<?php echo $abv['Beer5']; ?>
					<br /><h2>ABV</h2>
					<div id="BeerPour"><?php echo $pour['Beer5']; ?>
					</div></div>
					<!--<div id="BeerIBU"><img src="images/<?php echo $hops['Beer5']; ?> Hops.png" width="100">
				<br /><h2>IBU</h2></div>-->
				<div id="BeerPrice">
					<?php echo $price['Beer5']; ?>
				</div>
				<!--div id="BeerStatus">
					<img src="images/kegs/<?php echo $status['Beer5']; ?>.png" width="80">
				</div>-->
			</div>
	
			<!-- Tap 6 -->
			<div id="content-row2">
				<div id="content-row2g">
				</div>		
				<div id="content-row2a">
					<!--<div id="BeerPic">
					<img src="images/SRM <?php echo $srm['Beer6']; ?>.png" height="100">
				</div>-->
				<div id="<?php echo $Beernamel['Beer6']; ?>">
					<?php echo "<h1>", $Beername['Beer6'], "</h1>";
						echo "<h2>", $whobrew['Beer6'], "<br />", "</h2>","<h3>", $style['Beer6'], "</h3>"; ?>
				</div>
					<div id="BeerInfo">
					<?php echo $abv['Beer6']; ?>
					<br /><h2>ABV</h2>
					<div id="BeerPour"><?php echo $pour['Beer6']; ?>
					</div></div>
					<!--<div id="BeerIBU"><img src="images/<?php echo $hops['Beer6']; ?> Hops.png" width="100">
				<br /><h2>IBU</h2></div>-->
				<div id="BeerPrice">
					<?php echo $price['Beer6']; ?>
				</div>
					<!--<div id="BeerStatus">
						<img src="images/kegs/<?php echo $status['Beer6']; ?>.png" width="80">
					</div>-->
				</div>
			</div>		
			
			<!-- Tap 7 -->
			<div id="content-row2">
				<div id="content-row2e">
				</div>		
				<div id="content-row2a">
					<!--<div id="BeerPic">
					<img src="images/SRM <?php echo $srm['Beer7']; ?>.png" height="100">
				</div>-->
				<div id="<?php echo $Beernamel['Beer7']; ?>">
					<?php echo "<h1>", $Beername['Beer7'], "</h1>";
						echo "<h2>", $whobrew['Beer7'], "<br />", "</h2>","<h3>", $style['Beer7'], "</h3>"; ?>
				</div>
					<div id="BeerInfo">
					<?php echo $abv['Beer7']; ?>
					<br /><h2>ABV</h2>
					<div id="BeerPour"><?php echo $pour['Beer7']; ?>
					</div></div>
					<!--<div id="BeerIBU"><img src="images/<?php echo $hops['Beer7']; ?> Hops.png" width="100">
				<br /><h2>IBU</h2></div>-->
				<div id="BeerPrice">
					<?php echo $price['Beer7']; ?>
				</div>
					<!--<div id="BeerStatus">
						<img src="images/kegs/<?php echo $status['Beer7']; ?>.png" width="80">
					</div>-->
				</div>
			</div>
	
			<!-- Tap 8 -->
			<div id="content-row2">
				<div id="content-row2g">
				</div>		
				<div id="content-row2a">
					<!--<div id="BeerPic">
					<img src="images/SRM <?php echo $srm['Beer8']; ?>.png" height="100">
				</div>-->
				<div id="<?php echo $Beernamel['Beer8']; ?>">
					<?php echo "<h1>", $Beername['Beer8'], "</h1>";
						echo "<h2>", $whobrew['Beer8'], "<br />", "</h2>","<h3>", $style['Beer8'], "</h3>"; ?>
				</div>
					<div id="BeerInfo">
					<?php echo $abv['Beer8']; ?>
					<br /><h2>ABV</h2>
					<div id="BeerPour"><?php echo $pour['Beer8']; ?>
					</div></div>
					<!--<div id="BeerIBU"><img src="images/<?php echo $hops['Beer8']; ?> Hops.png" width="100">
				<br /><h2>IBU</h2></div>-->
				<div id="BeerPrice">
					<?php echo $price['Beer8']; ?>
				</div>
					<!--<div id="BeerStatus">
						<img src="images/kegs/<?php echo $status['Beer8']; ?>.png" width="80">
					</div>-->
				</div>
			</div>
		</div id="col-1">
		<div id="col-2">
			<!-- Tap 9 -->
			<div id="content-row2">
				<div id="content-row2e">
				</div>		
				<div id="content-row2a">
					<!--<div id="BeerPic">
					<img src="images/SRM <?php echo $srm['Beer9']; ?>.png" height="100">
				</div>-->
				<div id="<?php echo $Beernamel['Beer9']; ?>">
					<?php echo "<h1>", $Beername['Beer9'], "</h1>";
						echo "<h2>", $whobrew['Beer9'], "<br />", "</h2>","<h3>", $style['Beer9'], "</h3>"; ?>
				</div>
					<div id="BeerInfo">
					<?php echo $abv['Beer9']; ?>
					<br /><h2>ABV</h2>
					<div id="BeerPour"><?php echo $pour['Beer9']; ?>
					</div></div>
					<!--<div id="BeerIBU"><img src="images/<?php echo $hops['Beer9']; ?> Hops.png" width="100">
				<br /><h2>IBU</h2></div>-->
				<div id="BeerPrice">
					<?php echo $price['Beer9']; ?>
				</div>
					<!--<div id="BeerStatus">
						<img src="images/kegs/<?php echo $status['Beer9']; ?>.png" width="80">
					</div>-->
				</div>
			</div>
			
			<!-- Tap 10 -->
			<div id="content-row2">
				<div id="content-row2g">
				</div>		
				<div id="content-row2a">
					<!--<div id="BeerPic">
					<img src="images/SRM <?php echo $srm['Beer10']; ?>.png" height="100">
				</div>-->
				<div id="<?php echo $Beernamel['Beer10']; ?>">
					<?php echo "<h1>", $Beername['Beer10'], "</h1>";
						echo "<h2>", $whobrew['Beer10'], "<br />", "</h2>","<h3>", $style['Beer10'], "</h3>"; ?>
				</div>
					<div id="BeerInfo">
					<?php echo $abv['Beer10']; ?>
					<br /><h2>ABV</h2>
					<div id="BeerPour"><?php echo $pour['Beer10']; ?>
					</div></div>
					<!--<div id="BeerIBU"><img src="images/<?php echo $hops['Beer10']; ?> Hops.png" width="100">
				<br /><h2>IBU</h2></div>-->
				<div id="BeerPrice">
					<?php echo $price['Beer10']; ?>
				</div>
					<!--<div id="BeerStatus">
						<img src="images/kegs/<?php echo $status['Beer10']; ?>.png" width="80">
					</div>-->
				</div>
			</div>
			
			<!-- Tap 11 -->
			<div id="content-row2">
				<div id="content-row2e">
				</div>		
				<div id="content-row2a">
					<!--<div id="BeerPic">
					<img src="images/SRM <?php echo $srm['Beer11']; ?>.png" height="100">
				</div>-->
				<div id="<?php echo $Beernamel['Beer11']; ?>">
					<?php echo "<h1>", $Beername['Beer11'], "</h1>";
						echo "<h2>", $whobrew['Beer11'], "<br />", "</h2>","<h3>", $style['Beer11'], "</h3>"; ?>
				</div>
					<div id="BeerInfo">
					<?php echo $abv['Beer11']; ?>
					<br /><h2>ABV</h2>
					<div id="BeerPour"><?php echo $pour['Beer11']; ?>
					</div></div>
					<!--<div id="BeerIBU"><img src="images/<?php echo $hops['Beer11']; ?> Hops.png" width="100">
				<br /><h2>IBU</h2></div>-->
				<div id="BeerPrice">
					<?php echo $price['Beer11']; ?>
				</div>
					<!--<div id="BeerStatus">
						<img src="images/kegs/<?php echo $status['Beer11']; ?>.png" width="80">
					</div>-->
				</div>
			</div>
			
			<!-- Tap 12 -->
			<div id="content-row2">
				<div id="content-row2g">
				</div>		
				<div id="content-row2a">
					<!--<div id="BeerPic">
					<img src="images/SRM <?php echo $srm['Beer12']; ?>.png" height="100">
				</div>-->
				<div id="<?php echo $Beernamel['Beer12']; ?>">
					<?php echo "<h1>", $Beername['Beer12'], "</h1>";
						echo "<h2>", $whobrew['Beer12'], "<br />", "</h2>","<h3>", $style['Beer12'], "</h3>"; ?>
				</div>
					<div id="BeerInfo">
					<?php echo $abv['Beer12']; ?>
					<br /><h2>ABV</h2>
					<div id="BeerPour"><?php echo $pour['Beer12']; ?>
					</div></div>
					<!--<div id="BeerIBU"><img src="images/<?php echo $hops['Beer12']; ?> Hops.png" width="100">
				<br /><h2>IBU</h2></div>-->
				<div id="BeerPrice">
					<?php echo $price['Beer12']; ?>
				</div>
					<!--<div id="BeerStatus">
						<img src="images/kegs/<?php echo $status['Beer12']; ?>.png" width="80">
					</div>-->
				</div>
			</div>
			
			<!-- Tap 13 -->
			<div id="content-rowe">
				<!--<div id="BeerPic">
					<img src="images/SRM <?php echo $srm['Beer13']; ?>.png" height="100">
				</div>-->
				<div id="<?php echo $Beernamel['Beer13']; ?>">
					<?php echo "<h1>", $Beername['Beer13'], "</h1>";
						echo "<h2>", $whobrew['Beer13'], "<br />", "</h2>","<h3>", $style['Beer13'], "</h3>"; ?>
				</div>
				<div id="BeerInfo">
					<?php echo $abv['Beer13']; ?>
					<br /><h2>ABV</h2>
					<div id="BeerPour"><?php echo $pour['Beer13']; ?>
					</div></div>
					<!--<div id="BeerIBU"><img src="images/<?php echo $hops['Beer13']; ?> Hops.png" width="100">
				<br /><h2>IBU</h2></div>-->
				<div id="BeerPrice">
					<?php echo $price['Beer13']; ?>
				</div>
				<!--<div id="BeerStatus">
					<img src="images/kegs/<?php echo $status['Beer13']; ?>.png" width="80">
				</div>-->
			</div>
			
			<!-- Tap 14 -->
			<div id="content-row2">
				<div id="content-row2g">
				</div>		
				<div id="content-row2a">
				<!--<div id="BeerPic">
					<img src="images/SRM <?php echo $srm['Beer14']; ?>.png" height="100">
				</div>-->
				<div id="<?php echo $Beernamel['Beer14']; ?>">
					<?php echo "<h1>", $Beername['Beer14'], "</h1>";
						echo "<h2>", $whobrew['Beer14'], "<br />", "</h2>","<h3>", $style['Beer14'], "</h3>"; ?>
				</div>
				<div id="BeerInfo">
					<?php echo $abv['Beer14']; ?>
					<br /><h2>ABV</h2>
					<div id="BeerPour"><?php echo $pour['Beer14']; ?>
					</div></div>
					<!--<div id="BeerIBU"><img src="images/<?php echo $hops['Beer14']; ?> Hops.png" width="100">
				<br /><h2>IBU</h2></div>-->
				<div id="BeerPrice">
					<?php echo $price['Beer14']; ?>
				</div>
				<!--	<div id="BeerStatus">
						<img src="images/kegs/<?php echo $status['Beer14']; ?>.png" width="80">
					</div>-->
				</div>
			</div>
			
			<!-- Tap 15 -->		
			<div id="content-rowe">
				<!--<div id="BeerPic">
					<img src="images/SRM <?php echo $srm['Beer15']; ?>.png" height="100">
				</div>-->
				<div id="<?php echo $Beernamel['Beer15']; ?>">
					<?php echo "<h1>", $Beername['Beer15'], "</h1>";
						echo "<h2>", $whobrew['Beer15'], "<br />", "</h2>","<h3>", $style['Beer15'], "</h3>"; ?>
				</div>
				<div id="BeerInfo">
					<?php echo $abv['Beer15']; ?>
					<br /><h2>ABV</h2>
					<div id="BeerPour"><?php echo $pour['Beer15']; ?>
					</div></div>
					<!--<div id="BeerIBU"><img src="images/<?php echo $hops['Beer15']; ?> Hops.png" width="100">
				<br /><h2>IBU</h2></div>-->
				<div id="BeerPrice">
					<?php echo $price['Beer15']; ?>
				</div>
				<!--<div id="BeerStatus">
					<img src="images/kegs/<?php echo $status['Beer15']; ?>.png" width="80">-->
				</div>
	
			<!-- Tap 16 -->
			<div id="content-row2">
				<div id="content-row2g">
				</div>		
				<div id="content-row2a">
					<!--<div id="BeerPic">
					<img src="images/SRM <?php echo $srm['Beer16']; ?>.png" height="100">
				</div>-->
				<div id="<?php echo $Beernamel['Beer16']; ?>">
					<?php echo "<h1>", $Beername['Beer16'], "</h1>";
						echo "<h2>", $whobrew['Beer16'], "<br />", "</h2>","<h3>", $style['Beer16'], "</h3>"; ?>
				</div>
					<div id="BeerInfo">
					<?php echo $abv['Beer16']; ?>
					<br /><h2>ABV</h2>
					<div id="BeerPour"><?php echo $pour['Beer16']; ?>
					</div></div>
					<!--<div id="BeerIBU"><img src="images/<?php echo $hops['Beer16']; ?> Hops.png" width="100">
				<br /><h2>IBU</h2></div>-->
					<div id="BeerPrice">
					<?php echo $price['Beer16']; ?>
				</div>
					<!--<div id="BeerStatus">
						<img src="images/kegs/<?php echo $status['Beer16']; ?>.png" width="80">
					</div>-->
				</div>
			</div>
	</div id="col-2">
	<div id="col-3">
			<!-- Tap 17 -->
			<div id="content-rowe">
				<!--<div id="BeerPic">
					<img src="images/SRM <?php echo $srm['Beer17']; ?>.png" height="100">
				</div>-->
				<div id="<?php echo $Beernamel['Beer17']; ?>">
					<?php echo "<h1>", $Beername['Beer17'], "</h1>";
						echo "<h2>", $whobrew['Beer17'], "<br />", "</h2>","<h3>", $style['Beer17'], "</h3>"; ?>
				</div>
				<div id="BeerInfo">
					<?php echo $abv['Beer17']; ?>
					<br /><h2>ABV</h2>
					<div id="BeerPour"><?php echo $pour['Beer17']; ?>
					</div></div>
					<!--<div id="BeerIBU"><img src="images/<?php echo $hops['Beer17']; ?> Hops.png" width="100">
				<br /><h2>IBU</h2></div>-->
				<div id="BeerPrice">
					<?php echo $price['Beer17']; ?>
				</div>
				<!--div id="BeerStatus">
					<img src="images/kegs/<?php echo $status['Beer17']; ?>.png" width="80">
				</div>-->
			</div>
	
			<!-- Tap 18 -->
			<div id="content-row2">
				<div id="content-row2g">
				</div>		
				<div id="content-row2a">
					<!--<div id="BeerPic">
					<img src="images/SRM <?php echo $srm['Beer18']; ?>.png" height="100">
				</div>-->
				<div id="<?php echo $Beernamel['Beer18']; ?>">
					<?php echo "<h1>", $Beername['Beer18'], "</h1>";
						echo "<h2>", $whobrew['Beer18'], "<br />", "</h2>","<h3>", $style['Beer18'], "</h3>"; ?>
				</div>
					<div id="BeerInfo">
					<?php echo $abv['Beer18']; ?>
					<br /><h2>ABV</h2>
					<div id="BeerPour"><?php echo $pour['Beer18']; ?>
					</div></div>
					<!--<div id="BeerIBU"><img src="images/<?php echo $hops['Beer18']; ?> Hops.png" width="100">
				<br /><h2>IBU</h2></div>-->
				<div id="BeerPrice">
					<?php echo $price['Beer18']; ?>
				</div>
					<!--<div id="BeerStatus">
						<img src="images/kegs/<?php echo $status['Beer18']; ?>.png" width="80">
					</div>-->
				</div>
			</div>		
			
			<!-- Tap 19 -->
			<div id="content-row2">
				<div id="content-row2e">
				</div>		
				<div id="content-row2a">
					<!--<div id="BeerPic">
					<img src="images/SRM <?php echo $srm['Beer19']; ?>.png" height="100">
				</div>-->
				<div id="<?php echo $Beernamel['Beer19']; ?>">
					<?php echo "<h1>", $Beername['Beer19'], "</h1>";
						echo "<h2>", $whobrew['Beer19'], "<br />", "</h2>","<h3>", $style['Beer19'], "</h3>"; ?>
				</div>
					<div id="BeerInfo">
					<?php echo $abv['Beer19']; ?>
					<br /><h2>ABV</h2>
					<div id="BeerPour"><?php echo $pour['Beer19']; ?>
					</div></div>
					<!--<div id="BeerIBU"><img src="images/<?php echo $hops['Beer19']; ?> Hops.png" width="100">
				<br /><h2>IBU</h2></div>-->
				<div id="BeerPrice">
					<?php echo $price['Beer19']; ?>
				</div>
					<!--<div id="BeerStatus">
						<img src="images/kegs/<?php echo $status['Beer19']; ?>.png" width="80">
					</div>-->
				</div>
			</div>
	
			<!-- Tap 20 -->
			<div id="content-row2">
				<div id="content-row2g">
				</div>		
				<div id="content-row2a">
					<!--<div id="BeerPic">
					<img src="images/SRM <?php echo $srm['Beer20']; ?>.png" height="100">
				</div>-->
				<div id="<?php echo $Beernamel['Beer20']; ?>">
					<?php echo "<h1>", $Beername['Beer20'], "</h1>";
						echo "<h2>", $whobrew['Beer20'], "<br />", "</h2>","<h3>", $style['Beer20'], "</h3>"; ?>
				</div>
					<div id="BeerInfo">
					<?php echo $abv['Beer20']; ?>
					<br /><h2>ABV</h2>
					<div id="BeerPour"><?php echo $pour['Beer20']; ?>
					</div></div>
					<!--<div id="BeerIBU"><img src="images/<?php echo $hops['Beer20']; ?> Hops.png" width="100">
				<br /><h2>IBU</h2></div>-->
				<div id="BeerPrice">
					<?php echo $price['Beer20']; ?>
				</div>
					<!--<div id="BeerStatus">
						<img src="images/kegs/<?php echo $status['Beer20']; ?>.png" width="80">
					</div>-->
				</div>
			</div>
			
			<!-- Tap 21 -->
			<div id="content-row2">
				<div id="content-row2e">
				</div>		
				<div id="content-row2a">
					<!--<div id="BeerPic">
					<img src="images/SRM <?php echo $srm['Beer21']; ?>.png" height="100">
				</div>-->
				<div id="<?php echo $Beernamel['Beer21']; ?>">
					<?php echo "<h1>", $Beername['Beer21'], "</h1>";
						echo "<h2>", $whobrew['Beer21'], "<br />", "</h2>","<h3>", $style['Beer21'], "</h3>"; ?>
				</div>
					<div id="BeerInfo">
					<?php echo $abv['Beer21']; ?>
					<br /><h2>ABV</h2>
					<div id="BeerPour"><?php echo $pour['Beer21']; ?>
					</div></div>
					<!--<div id="BeerIBU"><img src="images/<?php echo $hops['Beer21']; ?> Hops.png" width="100">
				<br /><h2>IBU</h2></div>-->
				<div id="BeerPrice">
					<?php echo $price['Beer21']; ?>
				</div>
					<!--<div id="BeerStatus">
						<img src="images/kegs/<?php echo $status['Beer21']; ?>.png" width="80">
					</div>-->
				</div>
			</div>
			
			<!-- Tap 22 -->
			<div id="content-row2">
				<div id="content-row2g">
				</div>		
				<div id="content-row2a">
					<!--<div id="BeerPic">
					<img src="images/SRM <?php echo $srm['Beer22']; ?>.png" height="100">
				</div>-->
				<div id="<?php echo $Beernamel['Beer22']; ?>">
					<?php echo "<h1>", $Beername['Beer22'], "</h1>";
						echo "<h2>", $whobrew['Beer22'], "<br />", "</h2>","<h3>", $style['Beer22'], "</h3>"; ?>
				</div>
					<div id="BeerInfo">
					<?php echo $abv['Beer22']; ?>
					<br /><h2>ABV</h2>
					<div id="BeerPour"><?php echo $pour['Beer22']; ?>
					</div></div>
					<!--<div id="BeerIBU"><img src="images/<?php echo $hops['Beer22']; ?> Hops.png" width="100">
				<br /><h2>IBU</h2></div>-->
				<div id="BeerPrice">
					<?php echo $price['Beer22']; ?>
				</div>
					<!--<div id="BeerStatus">
						<img src="images/kegs/<?php echo $status['Beer22']; ?>.png" width="80">
					</div>-->
				</div>
			</div>
			
			<!-- Tap 23 -->
			<div id="content-row2">
				<div id="content-row2e">
				</div>		
				<div id="content-row2a">
					<!--<div id="BeerPic">
					<img src="images/SRM <?php echo $srm['Beer23']; ?>.png" height="100">
				</div>-->
				<div id="BeerName">
					<?php echo "<h1>", $Beername['Beer23'], "</h1>";
						echo "<h2>", $whobrew['Beer23'], "<br />", "</h2>","<h3>", $style['Beer23'], "</h3>"; ?>
				</div>
					<div id="BeerInfo">
					<?php echo $abv['Beer23']; ?>
					<br /><h2>ABV</h2>
					<div id="BeerPour"><?php echo $pour['Beer23']; ?>
					</div></div>
					<!--<div id="BeerIBU"><img src="images/<?php echo $hops['Beer23']; ?> Hops.png" width="100">
				<br /><h2>IBU</h2></div>-->
				<div id="BeerPrice">
					<?php echo $price['Beer23']; ?>
				</div>
					<!--<div id="BeerStatus">
						<img src="images/kegs/<?php echo $status['Beer23']; ?>.png" width="80">
					</div>-->
				</div>
			</div>
			
			<!-- Tap 24 -->
			<div id="content-row2">
				<div id="content-row2g">
				</div>		
				<div id="content-row2a">
					<!--<div id="BeerPic">
					<img src="images/SRM <?php echo $srm['Beer24']; ?>.png" height="100">
				</div>-->
				<div id="BeerName">
					<?php echo "<h1>", $Beername['Beer24'], "</h1>";
						echo "<h2>", $whobrew['Beer24'], "<br />", "</h2>","<h3>", $style['Beer24'], "</h3>"; ?>
				</div>
					<div id="BeerInfo">
					<?php echo $abv['Beer24']; ?>
					<br /><h2>ABV</h2>
					<div id="BeerPour"><?php echo $pour['Beer24']; ?>
					</div></div>
					<!--<div id="BeerIBU"><img src="images/<?php echo $hops['Beer24']; ?> Hops.png" width="100">
				<br /><h2>IBU</h2></div>-->
				<div id="BeerPrice">
					<?php echo $price['Beer24']; ?>
				</div>
					<!--<div id="BeerStatus">
						<img src="images/kegs/<?php echo $status['Beer24']; ?>.png" width="80">
					</div>-->
				</div>
			</div>
		</div>
	</div>
<div id="shamrock-specials"></div>
<div id="public-specials"></div>
		
		<!--<div id="footer">
			Kegerface 2.13.13v
		</div>-->
		
		<!-- this overlays a graphic that gives a little more grunge look to everything -->
		<span></span>
		
		<!-- overlay divs for links to recipes -->
		<!--<a target="_blank" href="<?php echo $tap1fB; ?>"><div id="links1"></div></a>
		<a target="_blank" href="<?php echo $tap2fB; ?>"><div id="links2"></div></a>
		<a target="_blank" href="<?php echo $tap3fB; ?>"><div id="links3"></div></a>
		<a target="_blank" href="<?php echo $tap4fB; ?>"><div id="links4"></div></a>
		<a target="_blank" href="<?php echo $tap5fB; ?>"><div id="links5"></div></a>
		<a target="_blank" href="<?php echo $tap6fB; ?>"><div id="links6"></div></a>-->
	</body>
</html>
