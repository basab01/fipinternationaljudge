<?php
	//ob_start();
	//$page_title = "FIP National Circuit Digital Award 2017";
	//include_once "assets/usernav.inc.php";
	
	/*$uu = new Registration( $dbo );
	$user = $uu -> userSelect ( $_SESSION['user'][0]['id'] );*/
	
	include_once "sop-init.inc.php";
	
	$club = ['PHOTOGRAPHIC ASSOCIATION OF BIHAR, PATNA','FULL FRAME PHOTOGRAPHY CLUB', 'LOVE FOR ART'];
	
	$ls = new Result ( $dbo );
	$list1 = $ls -> selectDigitalAward (1,3);
	$list2 = $ls -> selectDigitalAward (2,3);
	$list3 = $ls -> selectDigitalAward (3,3);
	
	$list4 = $ls -> selectDigitalAward (1,4);
	$list5 = $ls -> selectDigitalAward (2,4);
	$list6 = $ls -> selectDigitalAward (3,4);
	
	$list7 = $ls -> selectDigitalAward (1,5);
	$list8 = $ls -> selectDigitalAward (2,5);
	$list9 = $ls -> selectDigitalAward (3,5);
	
	$list10 = $ls -> selectDigitalAward (1,6);
	$list11 = $ls -> selectDigitalAward (2,6);
	$list12 = $ls -> selectDigitalAward (3,6);
	
	$list13 = $ls -> selectDigitalAward (1,7);
	$list14 = $ls -> selectDigitalAward (2,7);
	$list15 = $ls -> selectDigitalAward (3,7);
	
	
	
	
?>
<link rel="stylesheet" href="style.css" />
<style>
	.shp { width:80%; }
</style>
<center>
<img src="../images/logos.png">
<div class='saat'>
<a name="top"></a>
<p>
	<a href="<?php echo $_SERVER['PHP_SELF'];?>#colour">Colour</a> || 
	<a href="<?php echo $_SERVER['PHP_SELF'];?>#mono">Monochrome</a> ||
	<a href="<?php echo $_SERVER['PHP_SELF'];?>#nature">Nature</a> ||
	<a href="<?php echo $_SERVER['PHP_SELF'];?>#journalism">Photo Journalism</a> ||
	<a href="<?php echo $_SERVER['PHP_SELF'];?>#travel">Photo Travel</a> 	
</p>



<table style="width:60%;">
<caption><h1 style="font-weight:normal;"><?php echo $page_title; ?><br>( FIAP Blue Badge )</h1></caption>
<thead>
<tr>
	<th>&nbsp;</th>
	<th>Name</th>
	<th>Country</th>
</tr>
</thead>
<tbody>
		<tr>
		<td><strong>Best Author of the 
		Salon</strong></td>
		<td>ARNALDO PAULO CHE</td>
		<td>Hong Kong</td>
		
		
	</tr>
	
</tbody>
</table>
<br /><br /><br /><br />
<br /><br /><br /><br />










<table style="width:60%;">
<caption><h1 style="font-weight:normal;"><?php echo $page_title; ?><br>( Best overall Indian award 
-
Chairman's Medal )</h1></caption>
<thead>
<tr>
	<th>&nbsp;</th>
	<th>Name</th>
	<th>Country</th>
</tr>
</thead>
<tbody>
		<tr>
		<td><strong>Best Indian Entrant of the 
		Circuit</strong></td>
		<td>CHINMOY DUTTA</td>
		<td>India</td>
		
		
	</tr>
	
</tbody>
</table>
<br /><br /><br /><br />
<br /><br /><br /><br />












<a name="colour"></a>

<h1 style="font-weight:normal;"><?php echo $page_title; ?><br />Awards - Digital Section</h1>
<br /><br /><br />
<table class="shp">
<caption><h2 style="font-weight:normal;">Section Colour</h2></caption>
<thead>
<tr>
	<th>Award</th>
		<th><?php echo $club[0]; ?></th>
		<th><?php echo $club[1]; ?></th>
		<th><?php echo $club[2]; ?></th>
</tr>
</thead>
<tbody>
	<?php
		for ( $i=0; $i<count($list2); $i++ ):
			$award = preg_replace("/^(.*)\d+.*$/","$1",$list1[$i]['award']);
		
	?>
	<tr>
		<td><strong><?php echo strtoupper($award) ?></strong></td>
		<td>
			<?php
							//if ( $list1[$i]['status'] == 'Yes' ):
						?>
			Title : <?php echo strtoupper ($list1[$i]['title'] ) ?><br />
			Author : <?php echo strtoupper ( $list1[$i]['author'] ) ?><br />
			Country : <?php echo $list1[$i]['country']; ?>
			
			<?php //else : ?>
						<!--Author : <?php //echo strtoupper ( $list1[$i]['author'] ) ?><br />
						<p style="color:crimson;font-weight:bold;">Contact Chairman</p>-->
						<?php //endif; ?>
		</td>
		
		<td>
			<?php
							//if ( $list2[$i]['status'] == 'Yes' ):
						?>
			Title : <?php echo strtoupper ($list2[$i]['title']); ?><br />
			Author : <?php echo strtoupper ( $list2[$i]['author'] ) ?><br />
			Country : <?php echo $list2[$i]['country']; ?>
			
			<?php //else : ?>
					<!--	Author : <?php //echo strtoupper ( $list2[$i]['author'] ) ?><br />
						<p style="color:crimson;font-weight:bold;">Contact Chairman</p>-->
						<?php //endif; ?>
		</td>
		
		<td>
			<?php
							//if ( $list3[$i]['status'] == 'Yes' ):
						?>
			Title : <?php echo strtoupper ($list3[$i]['title']) ?><br />
			Author : <?php echo strtoupper ( $list3[$i]['author'] ) ?><br />
			Country : <?php echo $list3[$i]['country']; ?>
			
			<?php //else : ?>
						<!--Author : <?php //echo strtoupper ( $list3[$i]['author'] ) ?><br />
						<p style="color:crimson;font-weight:bold;">Contact Chairman</p>-->
						<?php //endif; ?>
		</td>
	</tr>
	<?php endfor; ?>
</tbody>
</table>


<br /><br /><br /><br /><br /><br /><br /><br /><br />
<br /><br /><br /><br /><br /><br /><br /><br /><br />


<a name="mono"></a>
<h3>
	<a href="<?php echo $_SERVER['PHP_SELF']; ?>#top">Top</a>
</h3>
<br /><br /><br />
<h1 style="font-weight:normal;"><?php echo $page_title; ?><br />Awards - Digital Section</h1>
<br /><br /><br />	
<table class="shp">
<caption><h2 style="font-weight:normal;">Section Monochrome</h2></caption>
<thead>
<tr>
	<th>Award</th>
		<th><?php echo $club[0]; ?></th>
		<th><?php echo $club[1]; ?></th>
		<th><?php echo $club[2]; ?></th>
</tr>
</thead>
<tbody>
	<?php
			for ( $i=0; $i<count($list4); $i++ ):
				$award = preg_replace("/^(.*)\d+.*$/","$1",$list4[$i]['award']);
			
		?>
	<tr>
		<td><strong><?php echo strtoupper($award) ?></strong></td>
		<td>
			<?php
							//if ( $list4[$i]['status'] == 'Yes' ):
						?>
			
			Title : <?php echo strtoupper ($list4[$i]['title']) ?><br />
			Author : <?php echo strtoupper ( $list4[$i]['author'] ) ?><br />
			Country : <?php echo $list4[$i]['country']; ?>
			
			<?php //else : ?>
						<!--Author : <?php //echo strtoupper ( $list4[$i]['author'] ) ?><br />
						<p style="color:crimson;font-weight:bold;">Contact Chairman</p>-->
						<?php //endif; ?>
		</td>
		
		<td>
			<?php
							//if ( $list5[$i]['status'] == 'Yes' ):
						?>
			
			Title : <?php echo strtoupper ($list5[$i]['title']) ?><br />
			Author : <?php echo strtoupper ( $list5[$i]['author'] ) ?><br />
			Country : <?php echo $list5[$i]['country']; ?>
			
			<?php //else : ?>
						<!--Author : <?php //echo strtoupper ( $list5[$i]['author'] ) ?><br />
						<p style="color:crimson;font-weight:bold;">Contact Chairman</p>-->
						<?php //endif; ?>
		</td>
		
		<td>
			<?php
							//if ( $list6[$i]['status'] == 'Yes' ):
						?>
			
			Title : <?php echo strtoupper ($list6[$i]['title']) ?><br />
			Author : <?php echo strtoupper ( $list6[$i]['author'] ) ?><br />
			Country : <?php echo $list6[$i]['country']; ?>
			
			<?php //else : ?>
						<!--Author : <?php //echo strtoupper ( $list6[$i]['author'] ) ?><br />
						<p style="color:crimson;font-weight:bold;">Contact Chairman</p>-->
						<?php //endif; ?>
		</td>
	</tr>
	<?php endfor; ?>
</tbody>
</table>


<br /><br /><br /><br /><br /><br /><br /><br /><br />
<br /><br /><br /><br /><br /><br /><br /><br /><br />

<a name="nature"></a>
<h3>
	<a href="<?php echo $_SERVER['PHP_SELF']; ?>#top">Top</a>
</h3>
<br /><br /><br />
<h1 style="font-weight:normal;"><?php echo $page_title; ?><br />Awards - Digital Section</h1>
<br /><br /><br />	
<table class="shp">
<caption><h2 style="font-weight:normal;">Section Nature</h2></caption>
<thead>
<tr>
	<th>Award</th>
		<th><?php echo $club[0]; ?></th>
		<th><?php echo $club[1]; ?></th>
		<th><?php echo $club[2]; ?></th>
</tr>
</thead>
<tbody>
	<?php
		for ( $i=0; $i<count($list7); $i++ ):
		$award = preg_replace("/^(.*)\d+.*$/","$1",$list7[$i]['award']);
		
	?>
	<tr>
		<td><strong><?php echo strtoupper($award) ?></strong></td>
		<td>
			<?php
							//if ( $list7[$i]['status'] == 'Yes' ):
						?>
			
			Title : <?php echo strtoupper ($list7[$i]['title']) ?><br />
			Author : <?php echo strtoupper ( $list7[$i]['author'] ) ?><br />
			Country : <?php echo $list7[$i]['country']; ?>
			
			
		</td>
		
		<td>
			<?php
							//if ( $list8[$i]['status'] == 'Yes' ):
						?>
			
			Title : <?php echo strtoupper ($list8[$i]['title']) ?><br />
			Author : <?php echo strtoupper ( $list8[$i]['author'] ) ?><br />
			Country : <?php echo $list8[$i]['country']; ?>
			
			
		</td>
		
		<td>
			<?php
						//	if ( $list9[$i]['status'] == 'Yes' ):
						?>
			
			Title : <?php echo strtoupper ($list9[$i]['title']) ?><br />
			Author : <?php echo strtoupper ( $list9[$i]['author'] ) ?><br />
			Country : <?php echo $list9[$i]['country']; ?>
			
			
		</td>
	</tr>
	<?php endfor; ?>
</tbody>
</table>







<br /><br /><br /><br /><br /><br /><br /><br /><br />
<br /><br /><br /><br /><br /><br /><br /><br /><br />

<a name="journalism"></a>
<h3>
	<a href="<?php echo $_SERVER['PHP_SELF']; ?>#top">Top</a>
</h3>
<br /><br /><br />
<h1 style="font-weight:normal;"><?php echo $page_title; ?><br />Awards - Digital Section</h1>
<br /><br /><br />	
<table class="shp">
<caption><h2 style="font-weight:normal;">Section Photo Journalism</h2></caption>
<thead>
<tr>
	<th>Award</th>
	<th><?php echo $club[0]; ?></th>
	<th><?php echo $club[1]; ?></th>
	<th><?php echo $club[2]; ?></th>
</tr>
</thead>
<tbody>
	<?php
		for ( $i=0; $i<count($list10); $i++ ):
		$award = preg_replace("/^(.*)\d+.*$/","$1",$list10[$i]['award']);
		
	?>
	<tr>
		<td><strong><?php echo strtoupper($award) ?></strong></td>
		<td>
			<?php
							//if ( $list10[$i]['status'] == 'Yes' ):
						?>
			
			Title : <?php echo strtoupper ($list10[$i]['title']) ?><br />
			Author : <?php echo strtoupper ( $list10[$i]['author'] ) ?><br />
			Country : <?php echo $list10[$i]['country']; ?>
			
			
		</td>
		
		<td>
			<?php
						//	if ( $list11[$i]['status'] == 'Yes' ):
						?>
			
			Title : <?php echo strtoupper ($list11[$i]['title']) ?><br />
			Author : <?php echo strtoupper ( $list11[$i]['author'] ) ?><br />
			Country : <?php echo $list11[$i]['country']; ?>
			
			
		</td>
		
		<td>
			<?php
						//	if ( $list12[$i]['status'] == 'Yes' ):
						?>
			
			Title : <?php echo strtoupper ($list12[$i]['title']) ?><br />
			Author : <?php echo strtoupper ( $list12[$i]['author'] ) ?><br />
			Country : <?php echo $list12[$i]['country']; ?>
			
			
		</td>
	</tr>
	<?php endfor; ?>
</tbody>
</table>



<h3>
	<a href="<?php echo $_SERVER['PHP_SELF']; ?>#top">Top</a>
</h3>
<br /><br /><br />	


<br /><br /><br />

































<br /><br /><br /><br /><br /><br /><br /><br /><br />
<br /><br /><br /><br /><br /><br /><br /><br /><br />

<a name="travel"></a>

<br /><br /><br />
<h1 style="font-weight:normal;"><?php echo $page_title; ?><br />Awards - Digital Section</h1>
<br /><br /><br />	
<table class="shp">
<caption><h2 style="font-weight:normal;">Section Photo Travel</h2></caption>
<thead>
<tr>
	<th>Award</th>
	<th><?php echo $club[0]; ?></th>
	<th><?php echo $club[1]; ?></th>
	<th><?php echo $club[2]; ?></th>
</tr>
</thead>
<tbody>
	<?php
		for ( $i=0; $i<count($list13); $i++ ):
		$award = preg_replace("/^(.*)\d+.*$/","$1",$list13[$i]['award']);
		
	?>
	<tr>
		<td><strong><?php echo strtoupper($award) ?></strong></td>
		<td>
			<?php
							//if ( $list10[$i]['status'] == 'Yes' ):
						?>
			
			Title : <?php echo strtoupper ($list13[$i]['title']) ?><br />
			Author : <?php echo strtoupper ( $list13[$i]['author'] ) ?><br />
			Country : <?php echo $list13[$i]['country']; ?>
			
			
		</td>
		
		<td>
			<?php
						//	if ( $list11[$i]['status'] == 'Yes' ):
						?>
			
			Title : <?php echo strtoupper ($list14[$i]['title']) ?><br />
			Author : <?php echo strtoupper ( $list14[$i]['author'] ) ?><br />
			Country : <?php echo $list14[$i]['country']; ?>
			
			
		</td>
		
		<td>
			<?php
						//	if ( $list12[$i]['status'] == 'Yes' ):
						?>
			
			Title : <?php echo strtoupper ($list15[$i]['title']) ?><br />
			Author : <?php echo strtoupper ( $list15[$i]['author'] ) ?><br />
			Country : <?php echo $list15[$i]['country']; ?>
			
			
		</td>
	</tr>
	<?php endfor; ?>
</tbody>
</table>



<h3>
	<a href="<?php echo $_SERVER['PHP_SELF']; ?>#top">Top</a>
</h3>
<br /><br /><br />	


<br /><br /><br />

</div>
</center>
<br /><br /><br />
