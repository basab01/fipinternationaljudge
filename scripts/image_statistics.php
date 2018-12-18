<?php
include_once "sop-init.inc.php";

	foreach ( range(3,15) as $nu ):
		$marks = 'marks_'.$nu;
		$$marks = [];
	endforeach;
	$sections = [ '3'=>'Colour', '4'=>'Monochrome', '5'=>'Nature', '6'=>'Photo Jurnisalism','7'=>'Photo Travel' ];
	$club = ['PHOTOGRAPHIC ASSOCIATION OF BIHAR, PATNA','FULL FRAME PHOTOGRAPHY CLUB', 'LOVE FOR ART'];
	
	
	$ls = new Result ( $dbo );
	
	$hold = [];
	$clubname = $club[1];
	$theme = $sections[7];
	
	$aclist = $ls -> getImagesSelected ( 2, 7 ); //circuit id and theme id
	$total = count ( $aclist );
	
	foreach ( $aclist as $ac )
	{
		foreach ( $ac as $k=>$v )
		{			
			foreach ( range(3,15) as $nno ):
				if ( $k=='total_marks' AND $v == $nno ):
					$marks='marks_'.$nno;
					${$marks}[]=$ac;
				endif;
			endforeach;	
		}
	}
	$page_title=$header.' Statistics';
?>
<style>
	#stat { width:90%; margin:0 auto; background:#f7f7f7; padding:15px;}
	#stat table { margin:7% auto; border:1px solid #999; border-collapse:collapse;}
	#stat table th, table td { border:1px solid #039;}
	#stat table caption h1 {font-weight:normal;}
	.colblue { color: #039; }
</style>
<div id="stat">
<table width=80% style="text-align:center;">
<caption><h1><small><?php echo $page_title; ?></small> <br /><?php echo $clubname; ?><br /><span class="colblue">Theme : <?php echo $theme; ?>  </span></h1></caption>
<thead>
<tr>
	<th>Marks</th>
	<th>Number</th>
	<th>Percentage</th>
	<th>Cumulative No.</th>
	<th>Cumulative %</th>
</tr>
</thead>
<tbody>
<?php
	$temp = 0;
	$tmp = [];
	foreach ( range( 3, 15 ) as $number ):
	$marks = 'marks_'.$number;
	
	$cc = 0;
	$cc = count($$marks);
?>
<tr>
	<td><?php echo $number; ?></td>
	<td><?php echo $cc;?></td>
	<td><?php
		$percentage = round ( ( count( $$marks )/$total * 100), 2 ).'%';
		echo $percentage;
	?></td>
	<td><?php echo ( $total - $temp ); ?></td>	
	<td><?php $pp = round ( ( ( $total - $temp )/$total * 100), 2 ).'%'; echo $pp; ?></td>
	<?php $tmp[] = count ( $$marks ); $temp = array_sum ( $tmp ); ?>
</tr>

<?php
endforeach; 
?>
</tbody>
</table>
</div>