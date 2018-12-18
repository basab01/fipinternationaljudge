<?php

$db_host = 'localhost';
$db_user = 'root';
$db_pass = '';
$db_name =  'fip_digital_judging2018';

$i = 0;
$conn = new mysqli($db_host,$db_user,$db_pass,$db_name);
if ($conn->connect_error) {
  trigger_error('Database connection failed: '  . $conn->connect_error, E_USER_ERROR);
}
 /*Read the file path and details */
 
 //$sql = "Select user_id,flnm,new_name,section_id,award_id from marks where award_id > 0";  //  for Awarded Images
 //$sql = "Select user_id,flnm,new_name,section_id,award_id from marks";  // For all Images
 
  $sql = "Select user_id,flnm,section_id,circuit_id from accepted_all";  // For accepted Images
 $result = mysqli_query($conn,$sql);
 if($result === false)
 {
  trigger_error('Wrong SQL: ' . $sql . ' Error: ' . $conn->error, E_USER_ERROR);
 } 
 else 
 {
	while($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
     {
		 $source  = array(0=>$row['section_id'],
		 $userid  =       1=>$row['user_id'],
		 $flnm    =       2=>$row['flnm'],
         	$tcrct    =       3=>$row['circuit_id']    		 
		                 );				
		 $tsource [$i++] = $source;
      }
 }
 mysqli_free_result($result);

 //var_dump($tsource); 
 //exit();
   
  $bflpath = "../files/Digital";	
  $i=0;	
 for($i=0; $i<count($tsource);$i++)
 {
	$user     =  $tsource[$i][1];
	
	$section  =  $tsource[$i][0];
	$flnm     =  $tsource[$i][2];
	$trgpth   =  $tsource[$i][2];
	$club     =  $tsource[$i][3];
	
    $upath     =  "R-".$user;
	
	if     ($club == 1) 
	   $basepath = "./PHAB"; 
	elseif ($club == 2)
	   $basepath = "./FFFC"; 
	elseif ($club == 3)
	   $basepath = "./LFA";   
	   
   	$sourcepath = $bflpath."/".$upath."/";
    $source     = $sourcepath.$flnm;
	
	if     ($section == 3)
      $target     = $basepath."/"."Accept/Colour/".$trgpth;    
    elseif ($section == 4)
	  $target     = $basepath."/"."Accept/Mono/".$trgpth; 
    elseif ($section == 5)  
	  $target     = $basepath."/"."Accept/Nature/".$trgpth; 
    elseif ($section == 6)  
	  $target     = $basepath."/"."Accept/PJ/".$trgpth; 
    elseif ($section == 7)  
	  $target     = $basepath."/"."Accept/PT/".$trgpth; 
    

  /* Check whether the file exists and then copy */
    
    if(file_exists($source) )
	 $output = copy($source,$target);	     
 }	 
   
    echo "File Copy completed" ;
	
	
?>