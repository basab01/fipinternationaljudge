<?php
	include_once "sop-init.inc.php";
	$res = new Result($dbo);
	
	//$sections = [ '3'=>'Colour', '4'=>'Nature', '5'=>'Photo Travel', '6'=>'Street' ];
	//$clubs = ['1'=>'Sonar Bangla'];
	
	$sections = [ '3'=>'Colour', '4'=>'Monochrome', '5'=>'Nature', '6'=>'Photo Jurnisalism','7'=>'Photo Travel' ];
	$clubs = ['PHOTOGRAPHIC ASSOCIATION OF BIHAR, PATNA','FULL FRAME PHOTOGRAPHY CLUB', 'LOVE FOR ART'];
	
	
	/* Acceptance list for colour section */
	
	$clubid=1; $themeid=3; $marks = 8; /* 1st club theme:3 */
	$list_1_3 = $res->selectImages( $clubid, $themeid, $marks );
	$list_1_3 = array_keys($list_1_3);
	
	$clubid=2; $themeid=3; $marks=10; /* 2nd club theme:3 */
	$list_2_3 = $res->selectImages($clubid, $themeid, $marks );
	$list_2_3 = array_keys ( $list_2_3 );
	
	$clubid=3; $themeid=3; $marks=8; /* 3rd club theme:3 */
	$list_3_3 = $res->selectImages($clubid, $themeid, $marks );
	$list_3_3 = array_keys ( $list_3_3 );
	//print_r($list_1_3);
	//echo count($list_1_3).'<br />';
	//exit();
	
	
	
	
	
	$list_tot = array_merge($list_1_3, $list_2_3, $list_3_3);
	$list_tot = array_unique($list_tot);
	//print_r($list_tot);
	
	
	
	$list_impl = implode(',',$list_tot);
	//print $list_impl;
	
	$tabs = $res->getImagesAccepted($list_impl);
	//print_r($tabs);
	
	/* --------------------End of colour section --------------------*/
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
?>

<script>
$("#bbn").click(function(){
	$("#colr").table2excel({
		// exclude CSS class
		exclude: ".noExl",
		name: "Accepted Colour Images",
		filename: "color_accepted" //do not include extension
	});
});
</script>

<link rel="stylesheet" href="style.css" />

<center>
<a name="top"></a>

<img src="../images/logos.png">
<div class='saat' style="width:80%;">

<p>
	<a href="<?php echo $_SERVER['PHP_SELF'];?>#colour">Colour</a> || 
	<a href="<?php echo $_SERVER['PHP_SELF'];?>#mono">Monochrome</a> ||
	<a href="<?php echo $_SERVER['PHP_SELF'];?>#nature">Nature</a> ||
	<a href="<?php echo $_SERVER['PHP_SELF'];?>#journalism">Photo Journalism</a> ||
	<a href="<?php echo $_SERVER['PHP_SELF'];?>#travel">Photo Travel</a> 
	
	
	
</p>
<h1 style="font-weight:normal;"><?php echo $page_title; ?> <br />Acceptances</h1>
<br /><br /><br />
<a name="colour"></a>
<table id="colr">
<caption><h2>Section <?php echo $sections[3]; ?></h2></caption>
<thead>
<tr class="noExl">
	<th rowspan=2>Sl. No.</th>
	<th rowspan=2>Country</th>
	<th rowspan=2>Author</th>
	<th rowspan=2>Title</th>
	<th colspan=3>Acceptances</th>
</tr>
<tr>
	<th><?php echo ucwords ( strtolower($clubs[0]) ); ?></th>
	<th><?php echo ucwords ( strtolower($clubs[1]) ); ?></th>
	<th><?php echo ucwords ( strtolower($clubs[2]) ); ?></th>
</tr>

</thead>
<tbody>
<?php
	$i=0; $tempCountry=''; $tempAuthor='';$stat1='';$stat2='';$stat3='';
	foreach($tabs as $tab ):
		$i++;
		$imgid = $tab['image_id'];
		if (in_array($imgid,$list_1_3) ) :
			$stat1 = 'A';
		else:
			$stat1='&mdash;';
		endif;
		
		if (in_array($imgid,$list_2_3) ) :
			$stat2 = 'A';
		else:
			$stat2='&mdash;';
		endif;
		
		if (in_array($imgid,$list_3_3) ) :
			$stat3 = 'A';
		else:
			$stat3='&mdash;';
		endif;
?>

<tr>
	<td><?php print $i; ?></td>
	
	
		<td><strong><?php
		 
						if ( $tempCountry != $tab['country'] ):
						
							echo $tab['country'];
						endif;
						$tempCountry = $tab['country'];
						
					?></strong>
		</td>
		
		<td>
			<?php 
				$tab['author'] = $tab['fname'].' '.$tab['mname'].' '.$tab['lname'];
						if ( $tempAuthor != $tab['author'] ):
							echo strtoupper($tab['author']);
						endif;
						$tempAuthor = $tab['author'];
					?>
		</td>
		
		<td>
										
			<?php  print ( strtoupper ( $tab['title'] ) ); ?>
			
		</td>
		
		
		<td>
			<?php echo $stat1; ?>
		</td>
		
		<td>
			<?php echo $stat2; ?>
		</td>
		
		<td>
			<?php echo $stat3; ?>
		</td>
		
		
	</tr>
	<?php //endif; ?>
	<?php endforeach; ?>
	</tbody>
	</table>
	
	
	
	
	<a href="<?php echo $_SERVER['PHP_SELF'];?>#top">TOP</a>
	
	
	
	
	
	
	
	
	
	
	
<?php	
	
	
	
		
		
	/* Acceptance list for monochrome section */
		
	$clubid=1; $themeid=4; $marks = 8; /* 1st club theme:4 */
	$list_1_4 = $res->selectImages( $clubid, $themeid, $marks );
	$list_1_4 = array_keys($list_1_4);
	
	
	$clubid=2; $themeid=4; $marks=10; /* 2nd club theme:4 */
	$list_2_4 = $res->selectImages($clubid, $themeid, $marks );
	$list_2_4 = array_keys ( $list_2_4 );
	
	
	$clubid=3; $themeid=4; $marks=8; /* 3rd club theme:4 */
	$list_3_4 = $res->selectImages($clubid, $themeid, $marks );
	$list_3_4 = array_keys ( $list_3_4 );
	//print_r($list_1_3);
	//echo count($list_1_3).'<br />';
	//exit();
	
	
	
	$list_tot=[];
	
	$list_tot = array_merge($list_1_4, $list_2_4, $list_3_4);
	$list_tot = array_unique($list_tot);
	//print_r($list_tot);
	
	
	
	$list_impl = implode(',',$list_tot);
	//print $list_impl;
	
	$tabs = $res->getImagesAccepted($list_impl);
	
	
?>	
	
	
	<script>
	$("#bbn").click(function(){
		$("#colr").table2excel({
			// exclude CSS class
			exclude: ".noExl",
			name: "Accepted Colour Images",
			filename: "color_accepted" //do not include extension
		});
	});
	</script>
	
	<link rel="stylesheet" href="style.css" />
	
	<center>
	
	
	<!--<button id="bbn">Export</button>-->
	<div class='saat' >
	<!--<p>
		<a href="<?php echo $_SERVER['PHP_SELF'];?>#colour">Colour</a> || 
		<a href="<?php echo $_SERVER['PHP_SELF'];?>#monochrome">Monochrome</a> ||
		
		<a href="result.php">Return</a>
	</p>-->
	<h1 style="font-weight:normal;"><?php echo $page_title; ?> <br />Acceptances - Digital Section</h1>
	<br /><br /><br />
	<a name="mono"></a>
	<table id="colr">
	<caption><h2>Section <?php echo $sections[4]; ?></h2></caption>
	<thead>
	<tr class="noExl">
		<th rowspan=2>Sl. No.</th>
		<th rowspan=2>Country</th>
		<th rowspan=2>Author</th>
		<th rowspan=2>Title</th>
		<th colspan=3>Acceptances</th>
	</tr>
	
	<tr>
		<th><?php echo ucwords ( strtolower($clubs[0]) ); ?></th>
		<th><?php echo ucwords ( strtolower($clubs[1]) ); ?></th>
		<th><?php echo ucwords ( strtolower($clubs[2]) ); ?></th>
	</tr>
	
	</thead>
	<tbody>
	<?php
		$i=0; $tempCountry=''; $tempAuthor='';$stat1='';$stat2='';$stat3='';
		foreach($tabs as $tab ):
			$i++;
			$imgid = $tab['image_id'];
			if (in_array($imgid,$list_1_4) ) :
				$stat1 = 'A';
			else:
				$stat1='&mdash;';
			endif;
			
			if (in_array($imgid,$list_2_4) ) :
				$stat2 = 'A';
			else:
				$stat2='&mdash;';
			endif;
			
			if (in_array($imgid,$list_3_4) ) :
				$stat3 = 'A';
			else:
				$stat3='&mdash;';
			endif;
	?>
	
	<tr>
		<td><?php print $i; ?></td>
		
		
			<td><strong><?php
			 
							if ( $tempCountry != $tab['country'] ):
							
								echo $tab['country'];
							endif;
							$tempCountry = $tab['country'];
							
						?></strong>
			</td>
			
			<td>
				<?php 
					$tab['author'] = $tab['fname'].' '.$tab['mname'].' '.$tab['lname'];
							if ( $tempAuthor != $tab['author'] ):
								echo strtoupper($tab['author']);
							endif;
							$tempAuthor = $tab['author'];
						?>
			</td>
			
			<td>
											
				<?php  print ( strtoupper ( $tab['title'] ) ); ?>
				
			</td>
			
			
			<td>
				<?php echo $stat1; ?>
			</td>
			
			<td>
				<?php echo $stat2; ?>
			</td>
			
			<td>
				<?php echo $stat3; ?>
			</td>
			
			
		</tr>
		<?php //endif; ?>
		<?php endforeach; ?>
		</tbody>
		</table>
		
	

	
	
	
	
	
	
	
	
<a href="<?php echo $_SERVER['PHP_SELF'];?>#top">TOP</a>
	
	
	
	
	
	
	
	
	
	
	
<?php	
	
	
	/* Acceptance list for nature section */
			
		$clubid=1; $themeid=5; $marks = 10; /* 1st club theme:5 */
		$list_1_5 = $res->selectImages( $clubid, $themeid, $marks );
		$list_1_5 = array_keys($list_1_5);
		
		$clubid=2; $themeid=5; $marks=11; /* 2nd club theme:5 */
		$list_2_5 = $res->selectImages($clubid, $themeid, $marks );
		$list_2_5 = array_keys ( $list_2_5 );
		
		$clubid=3; $themeid=5; $marks=9; /* 3rd club theme:5 */
		$list_3_5 = $res->selectImages($clubid, $themeid, $marks );
		$list_3_5 = array_keys ( $list_3_5 );
		//print_r($list_1_3);
		//echo count($list_1_3).'<br />';
		//exit();
		
		
		
		
		
		$list_tot = array_merge($list_1_5, $list_2_5, $list_3_5);
		$list_tot = array_unique($list_tot);
		//print_r($list_tot);
		
		
		
		$list_impl = implode(',',$list_tot);
		
		$tabs = $res->getImagesAccepted($list_impl);
		
		
	
	
?>	
	
	
	<script>
	$("#bbn").click(function(){
		$("#colr").table2excel({
			// exclude CSS class
			exclude: ".noExl",
			name: "Accepted Colour Images",
			filename: "color_accepted" //do not include extension
		});
	});
	</script>
	
	<link rel="stylesheet" href="style.css" />
	
	<center>
	
	
	<!--<button id="bbn">Export</button>-->
	<div class='saat' >
	<!--<p>
		<a href="<?php echo $_SERVER['PHP_SELF'];?>#colour">Colour</a> || 
		<a href="<?php echo $_SERVER['PHP_SELF'];?>#monochrome">Monochrome</a> ||
		
		<a href="result.php">Return</a>
	</p>-->
	<h1 style="font-weight:normal;"><?php echo $page_title; ?> <br />Acceptances - Digital Section</h1>
	<br /><br /><br />
	<a name="nature"></a>
	<table id="colr">
	<caption><h2>Section <?php echo $sections[5]; ?></h2></caption>
	<thead>
	<tr class="noExl">
		<th rowspan=2>Sl. No.</th>
		<th rowspan=2>Country</th>
		<th rowspan=2>Author</th>
		<th rowspan=2>Title</th>
		<th colspan=3>Acceptances</th>
	</tr>
	
	<tr>
		<th><?php echo ucwords ( strtolower($clubs[0]) ); ?></th>
		<th><?php echo ucwords ( strtolower($clubs[1]) ); ?></th>
		<th><?php echo ucwords ( strtolower($clubs[2]) ); ?></th>
	</tr>
	
	</thead>
	<tbody>
	<?php
		$i=0; $tempCountry=''; $tempAuthor='';$stat1='';$stat2='';$stat3='';
		foreach($tabs as $tab ):
			$i++;
			$imgid = $tab['image_id'];
			if (in_array($imgid,$list_1_5) ) :
				$stat1 = 'A';
			else:
				$stat1='&mdash;';
			endif;
			
			if (in_array($imgid,$list_2_5) ) :
				$stat2 = 'A';
			else:
				$stat2='&mdash;';
			endif;
			
			if (in_array($imgid,$list_3_5) ) :
				$stat3 = 'A';
			else:
				$stat3='&mdash;';
			endif;
	?>
	
	<tr>
		<td><?php print $i; ?></td>
		
		
			<td><strong><?php
			 
							if ( $tempCountry != $tab['country'] ):
							
								echo $tab['country'];
							endif;
							$tempCountry = $tab['country'];
							
						?></strong>
			</td>
			
			<td>
				<?php 
					$tab['author'] = $tab['fname'].' '.$tab['mname'].' '.$tab['lname'];
							if ( $tempAuthor != $tab['author'] ):
								echo strtoupper($tab['author']);
							endif;
							$tempAuthor = $tab['author'];
						?>
			</td>
			
			<td>
											
				<?php  print ( strtoupper ( $tab['title'] ) ); ?>
				
			</td>
			
			
			<td>
				<?php echo $stat1; ?>
			</td>
			
			<td>
				<?php echo $stat2; ?>
			</td>
			
			<td>
				<?php echo $stat3; ?>
			</td>
			
			
		</tr>
		<?php //endif; ?>
		<?php endforeach; ?>
		</tbody>
		</table>
		
		
		
		
		
		
		
		
		
		
		
		
		
		
	<a href="<?php echo $_SERVER['PHP_SELF'];?>#top">TOP</a>	
		
		
		
		
		
		
		
		
		
		
		
			
			
		<?php	
			
			
			/* Acceptance list for Photo Jurnisalism section */
					
				$clubid=1; $themeid=6; $marks = 11; /* 1st club theme:6 */
				$list_1_6 = $res->selectImages( $clubid, $themeid, $marks );
				$list_1_6 = array_keys($list_1_6);
				
				$clubid=2; $themeid=6; $marks=10; /* 2nd club theme:6 */
				$list_2_6 = $res->selectImages($clubid, $themeid, $marks );
				$list_2_6 = array_keys ( $list_2_6 );
				
				$clubid=3; $themeid=6; $marks=9; /* 3rd club theme:6 */
				$list_3_6 = $res->selectImages($clubid, $themeid, $marks );
				$list_3_6 = array_keys ( $list_3_6 );
				//print_r($list_1_3);
				//echo count($list_1_3).'<br />';
				//exit();
				
				
				
				
				
				$list_tot = array_merge($list_1_6, $list_2_6, $list_3_6);
				$list_tot = array_unique($list_tot);
				//print_r($list_tot);
				
				
				
				$list_impl = implode(',',$list_tot);
				
				$tabs = $res->getImagesAccepted($list_impl);
				
				/* --------------------End of colour section --------------------*/
			
			
		?>	
			
			
			<script>
			$("#bbn").click(function(){
				$("#colr").table2excel({
					// exclude CSS class
					exclude: ".noExl",
					name: "Accepted Colour Images",
					filename: "color_accepted" //do not include extension
				});
			});
			</script>
			
			<link rel="stylesheet" href="style.css" />
			
			<center>
			
			
			<!--<button id="bbn">Export</button>-->
			<div class='saat' >
			<!--<p>
				<a href="<?php echo $_SERVER['PHP_SELF'];?>#colour">Colour</a> || 
				<a href="<?php echo $_SERVER['PHP_SELF'];?>#monochrome">Monochrome</a> ||
				
				<a href="result.php">Return</a>
			</p>-->
			<h1 style="font-weight:normal;"><?php echo $page_title; ?> <br />Acceptances - Digital Section</h1>
			<br /><br /><br />
			<a name="journalism"></a>
			<table id="colr">
			<caption><h2>Section <?php echo $sections[6]; ?></h2></caption>
			<thead>
			<tr class="noExl">
				<th rowspan=2>Sl. No.</th>
				<th rowspan=2>Country</th>
				<th rowspan=2>Author</th>
				<th rowspan=2>Title</th>
				<th colspan=3>Acceptances</th>
			</tr>
			
			<tr>
				<th><?php echo ucwords ( strtolower($clubs[0]) ); ?></th>
				<th><?php echo ucwords ( strtolower($clubs[1]) ); ?></th>
				<th><?php echo ucwords ( strtolower($clubs[2]) ); ?></th>
			</tr>
			
			</thead>
			<tbody>
			<?php
				$i=0; $tempCountry=''; $tempAuthor='';$stat1='';$stat2='';$stat3='';
				foreach($tabs as $tab ):
					$i++;
					$imgid = $tab['image_id'];
					if (in_array($imgid,$list_1_6) ) :
						$stat1 = 'A';
					else:
						$stat1='&mdash;';
					endif;
					
					if (in_array($imgid,$list_2_6) ) :
						$stat2 = 'A';
					else:
						$stat2='&mdash;';
					endif;
					
					if (in_array($imgid,$list_3_6) ) :
						$stat3 = 'A';
					else:
						$stat3='&mdash;';
					endif;
			?>
			
			<tr>
				<td><?php print $i; ?></td>
				
				
					<td><strong><?php
					 
									if ( $tempCountry != $tab['country'] ):
									
										echo $tab['country'];
									endif;
									$tempCountry = $tab['country'];
									
								?></strong>
					</td>
					
					<td>
						<?php 
							$tab['author'] = $tab['fname'].' '.$tab['mname'].' '.$tab['lname'];
									if ( $tempAuthor != $tab['author'] ):
										echo strtoupper($tab['author']);
									endif;
									$tempAuthor = $tab['author'];
								?>
					</td>
					
					<td>
													
						<?php  print ( strtoupper ( $tab['title'] ) ); ?>
						
					</td>
					
					
					<td>
						<?php echo $stat1; ?>
					</td>
					
					<td>
						<?php echo $stat2; ?>
					</td>
					
					<td>
						<?php echo $stat3; ?>
					</td>
					
					
				</tr>
				<?php //endif; ?>
				<?php endforeach; ?>
				</tbody>
				</table>
		
		
		
		
		
		
		
		
		
		
		
		
		
		
	<a href="<?php echo $_SERVER['PHP_SELF'];?>#top">TOP</a>	
		
		






























			
		<?php	
			
			
			/* Acceptance list for Photo Travel section */
					
				$clubid=1; $themeid=7; $marks = 9; /* 1st club theme:7 */
				$list_1_7 = $res->selectImages( $clubid, $themeid, $marks );
				$list_1_7 = array_keys($list_1_7);
				
				$clubid=2; $themeid=7; $marks=10; /* 2nd club theme:7 */
				$list_2_7 = $res->selectImages($clubid, $themeid, $marks );
				$list_2_7 = array_keys ( $list_2_7 );
				
				$clubid=3; $themeid=7; $marks=8; /* 3rd club theme:7 */
				$list_3_7 = $res->selectImages($clubid, $themeid, $marks );
				$list_3_7 = array_keys ( $list_3_7 );
				//print_r($list_1_3);
				//echo count($list_1_3).'<br />';
				//exit();
				
				
				
				
				
				$list_tot = array_merge($list_1_7, $list_2_7, $list_3_7);
				$list_tot = array_unique($list_tot);
				//print_r($list_tot);
				
				
				
				$list_impl = implode(',',$list_tot);
				
				$tabs = $res->getImagesAccepted($list_impl);
				
				/* --------------------End of colour section --------------------*/
			
			
		?>	
			
			
			<script>
			$("#bbn").click(function(){
				$("#colr").table2excel({
					// exclude CSS class
					exclude: ".noExl",
					name: "Accepted Colour Images",
					filename: "color_accepted" //do not include extension
				});
			});
			</script>
			
			<link rel="stylesheet" href="style.css" />
			
			<center>
			
			
			<!--<button id="bbn">Export</button>-->
			<div class='saat' >
			<!--<p>
				<a href="<?php echo $_SERVER['PHP_SELF'];?>#colour">Colour</a> || 
				<a href="<?php echo $_SERVER['PHP_SELF'];?>#monochrome">Monochrome</a> ||
				
				<a href="result.php">Return</a>
			</p>-->
			<h1 style="font-weight:normal;"><?php echo $page_title; ?> <br />Acceptances - Digital Section</h1>
			<br /><br /><br />
			<a name="travel"></a>
			<table id="colr">
			<caption><h2>Section <?php echo $sections[7]; ?></h2></caption>
			<thead>
			<tr class="noExl">
				<th rowspan=2>Sl. No.</th>
				<th rowspan=2>Country</th>
				<th rowspan=2>Author</th>
				<th rowspan=2>Title</th>
				<th colspan=3>Acceptances</th>
			</tr>
			
			<tr>
				<th><?php echo ucwords ( strtolower($clubs[0]) ); ?></th>
				<th><?php echo ucwords ( strtolower($clubs[1]) ); ?></th>
				<th><?php echo ucwords ( strtolower($clubs[2]) ); ?></th>
			</tr>
			
			</thead>
			<tbody>
			<?php
				$i=0; $tempCountry=''; $tempAuthor='';$stat1='';$stat2='';$stat3='';
				foreach($tabs as $tab ):
					$i++;
					$imgid = $tab['image_id'];
					if (in_array($imgid,$list_1_7) ) :
						$stat1 = 'A';
					else:
						$stat1='&mdash;';
					endif;
					
					if (in_array($imgid,$list_2_7) ) :
						$stat2 = 'A';
					else:
						$stat2='&mdash;';
					endif;
					
					if (in_array($imgid,$list_3_7) ) :
						$stat3 = 'A';
					else:
						$stat3='&mdash;';
					endif;
			?>
			
			<tr>
				<td><?php print $i; ?></td>
				
				
					<td><strong><?php
					 
									if ( $tempCountry != $tab['country'] ):
									
										echo $tab['country'];
									endif;
									$tempCountry = $tab['country'];
									
								?></strong>
					</td>
					
					<td>
						<?php 
							$tab['author'] = $tab['fname'].' '.$tab['mname'].' '.$tab['lname'];
									if ( $tempAuthor != $tab['author'] ):
										echo strtoupper($tab['author']);
									endif;
									$tempAuthor = $tab['author'];
								?>
					</td>
					
					<td>
													
						<?php  print ( strtoupper ( $tab['title'] ) ); ?>
						
					</td>
					
					
					<td>
						<?php echo $stat1; ?>
					</td>
					
					<td>
						<?php echo $stat2; ?>
					</td>
					
					<td>
						<?php echo $stat3; ?>
					</td>
					
					
				</tr>
				<?php //endif; ?>
				<?php endforeach; ?>
				</tbody>
				</table>
		
		
		
		
		
		
		
		
		
		
		
		
		
		
	<a href="<?php echo $_SERVER['PHP_SELF'];?>#top">TOP</a>			
		
		
		
	
	
	

</div>
<br /><br /><br /><br />
<?php
	
	//$content = ob_get_clean ();
	//include_once "layout.php";
?>