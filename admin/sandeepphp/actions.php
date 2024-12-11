<?php
include('../config/function.php');

if(!isset($_SESSION['user_name']) || empty($_SESSION['user_name']))
{
header('location:login.php');
exit();

}
date_default_timezone_set("Asia/Kolkata");


if(isset($_POST['group_delete'])){
	extract($_POST);
	$res=mysqli_query($conn,"UPDATE `group_name` SET `deleted`=1 where `id`='$id'");
	if($res){
		$ress=mysqli_query($conn,"UPDATE `contactnumbers` SET `deleted`=1 where `group_id`='$id'");
		if($ress)
		echo "OK";
	}
	echo mysqli_error($conn);

	exit();
}

if(isset($_POST['group_empty'])){
	extract($_POST);
	$res=mysqli_query($conn,"UPDATE `contactnumbers` SET `deleted`=1 where `group_id`='$id'");
	if($res){
		
		echo "OK";
	}
	echo mysqli_error($conn);

	exit();
}

if(isset($_POST['remove_contact'])){
	extract($_POST);
	$res=mysqli_query($conn,"UPDATE `contactnumbers` SET `deleted`=1 where `id`='$id'");
	if($res){
		
		echo "OK";
	}
	echo mysqli_error($mysqli);

	exit();
}

if(isset($_POST['remove_blog'])){
	extract($_POST);
	$res=mysqli_query($conn,"DELETE FROM `tbl_blog` WHERE  `id`='$id'");
	if($res){
		
		echo "OK";
	}
	echo mysqli_error($mysqli);
    
	exit();
}

if(isset($_POST['remove_servce'])){
	extract($_POST);
	$res=mysqli_query($conn,"UPDATE `tbl_videos` SET `deleted`=1 where `id`='$id'");
	if($res){
		
		echo "OK";
	}
	echo mysqli_error($mysqli);

	exit();
}

if(isset($_POST['remove_template'])){
	extract($_POST);
	$res=mysqli_query($conn,"UPDATE `template` SET `deleted`=1 where `id`='$id'");
	if($res){
		
		echo "OK";
	}
	echo mysqli_error($conn);

	exit();
}

if(isset($_POST['remove_route'])){
	extract($_POST);
	$res=mysqli_query($conn,"UPDATE `route` SET `deleted`=1 where `id`='$id'");
	if($res){
		
		echo "OK";
	}
	echo mysqli_error($conn);

	exit();
}

if(isset($_POST['remove_category'])){
	extract($_POST);
	$res=mysqli_query($conn,"DELETE FROM `category` WHERE `id`='$id'");
	if($res){
		
		echo "OK";
	}
	echo mysqli_error($conn);

	exit();
}

if(isset($_POST['remove_subcategory'])){
	extract($_POST);
	$res=mysqli_query($conn,"DELETE FROM `sub_category` WHERE `id`='$id'");
	if($res){
		
		echo "OK";
	}
	echo mysqli_error($conn);

	exit();
}


if(isset($_POST['remove_product'])){
	extract($_POST);
	$res=mysqli_query($conn,"DELETE FROM `cat_prod` WHERE `id`='$id'");
	if($res){
		
		echo "OK";
	}
	echo mysqli_error($conn);

	exit();
}

if(isset($_POST['remove_profile'])){
	extract($_POST);
	$res=mysqli_query($conn,"DELETE FROM `sucess_story` WHERE `id`='$id'");
	if($res){
		
		echo "OK";
	}
	echo mysqli_error($conn);

	exit();
}


if(isset($_POST['remove_menu'])){
	extract($_POST);
	$res=mysqli_query($conn,"DELETE FROM `cms_menu` WHERE `id`='$id'");
	if($res){
		
		echo "OK";
	}
	echo mysqli_error($conn);

	exit();
}

if(isset($_POST['remove_gallery'])){
	extract($_POST);
	$res=mysqli_query($conn,"DELETE FROM `gallery` WHERE `id`='$id'");
	if($res){
		
		echo "OK";
	}
	echo mysqli_error($conn);

	exit();
}

if(isset($_POST['remove_banner'])){
	extract($_POST);
	$res=mysqli_query($conn,"DELETE FROM `banner` WHERE `id`='$id'");
	if($res){
		
		echo "OK";
	}
	echo mysqli_error($conn);

	exit();
}
if(isset($_POST['remove_team'])){
	extract($_POST);
	$res=mysqli_query($conn,"DELETE FROM `tbl_team` WHERE `id`='$id'");
	if($res){
		
		echo "OK";
	}
	echo mysqli_error($conn);

	exit();
}

if(isset($_POST['remove_cenquiry'])){
	extract($_POST);
	$res=mysqli_query($conn,"DELETE FROM `tbl_contact` WHERE `id`='$id'");
	if($res){
		
		echo "OK";
	}
	echo mysqli_error($conn);

	exit();
}
if(isset($_POST['remove_ienquiry'])){
	extract($_POST);
	$res=mysqli_query($conn,"DELETE FROM `getquote` WHERE `id`='$id'");
	if($res){
		
		echo "OK";
	}
	echo mysqli_error($conn);

	exit();
}


if(isset($_POST['remove_users'])){
	extract($_POST);
	$res=mysqli_query($conn,"DELETE FROM `registration` WHERE `id`='$id'");
	if($res){
		
		echo "OK";
	}
	echo mysqli_error($conn);

	exit();
}

if(isset($_POST['remove_faqs'])){
	extract($_POST);
	$res=mysqli_query($conn,"DELETE FROM `faqs` WHERE `id`='$id'");
	if($res){
		
		echo "OK";
	}
	echo mysqli_error($conn);

	exit();
}

if(isset($_POST['remove_intoduction'])){
	extract($_POST);
	$res=mysqli_query($conn,"DELETE FROM `introduction` WHERE `id`='$id'");
	if($res){
		
		echo "OK";
	}
	echo mysqli_error($conn);

	exit();
}

if(isset($_POST['remove_ourteam'])){
	extract($_POST);
	$res=mysqli_query($conn,"DELETE FROM `ourteam` WHERE `id`='$id'");
	if($res){
		
		echo "OK";
	}
	echo mysqli_error($conn);

	exit();
}

if(isset($_POST['remove_download'])){
	extract($_POST);
	$res=mysqli_query($conn,"DELETE FROM `tbl_download` WHERE `id`='$id'");
	if($res){
		
		echo "OK";
	}
	echo mysqli_error($conn);

	exit();
}
if(isset($_POST['remove_vgallery'])){
	extract($_POST);
	$res=mysqli_query($conn,"DELETE FROM `vgallaery` WHERE `id`='$id'");
	if($res){
		
		echo "OK";
	}
	echo mysqli_error($conn);

	exit();
}
if(isset($_POST['remove_mcenter'])){
	extract($_POST);
	$res=mysqli_query($conn,"DELETE FROM `mcenter` WHERE `id`='$id'");
	if($res){
		
		echo "OK";
	}
	echo mysqli_error($conn);

	exit();
}
if(isset($_POST['remove_subcategory'])){
	extract($_POST);
	$res=mysqli_query($conn,"DELETE FROM `sub_category` WHERE `id`='$id'");
	if($res){
		
		echo "OK";
	}
	echo mysqli_error($conn);

	exit();
}


if(isset($_POST['tempfill'])){
	extract($_POST);
	$tempres=mysqli_query($conn,"SELECT * FROM template where id='$id'");
	$temprow=mysqli_fetch_array($tempres);
	echo $temprow['template'];
	exit();
}



if(isset($_POST['contfill'])){
	extract($_POST);
	$contres=mysqli_query($conn,"SELECT * FROM contactnumbers where group_id='$id' and deleted=0");
	$numbers="";
	while($controw=mysqli_fetch_array($contres)){
		$numbers.=$controw['mobile_number']."\n";
	}
	echo $numbers;
	exit();
}



if(isset($_POST['smpp_delete'])){
	extract($_POST);
	$res=mysqli_query($conn,"UPDATE `smpp` SET `deleted`=1 where `id`='$id'");
	if($res){
		
		echo "OK";
	}else{
		echo mysqli_error($conn);
	}
	

	exit();
}


/* if(isset($_POST['report_data'])){
	extract($_POST);
switch ($off) {
    case 1:
		$data=array();
		$dateToTest = "$year-$month-1";
		$lastday = date('t',strtotime($dateToTest));		
		for($i=1;$i<=$lastday;$i++){		
			$fdat=strtotime("$i $month $year");
			$fdate=date("Y-m-d",$fdat);
			$fd=date("m",$fdat);
			$sql="SELECT * FROM campion_ids WHERE user_id='$user_id'and date like '$fdate %'";
			$res=mysqli_query($mysqli,$sql);
			$nosms=0;
			if(mysqli_num_rows($res)>0){
			while($drow=mysqli_fetch_assoc($res)){
				$nosms+=$drow['credit_used'];
			}
		}
		array_push($data, $nosms);	
		} 
		echo "<tr>";
		for($j=1;$j<=$lastday;$j++) { 
			if($j<10){ $jah="0".$j;} else{ $jah=$j; } ?>
			<td style="border:2px solid #dddddd; height:80px;"><?php echo $j ?> <span class="pull-right"><a type="button" class="btn btn-primary btn-xs" href="report.php?date=<?php echo $year."-".$fd."-".$jah."&data=$off"; ?>" ><?php echo $data[$j-1]; ?></a></span></td>
			<?php
			if($j%10==0){
				echo "</tr><tr>";
			}	
		}
		echo "</tr>";
		
        break;
    case 2:
		$data=array();
		$dateToTest = "$year-$month-1";
		$lastday = date('t',strtotime($dateToTest));
		$user=array();
		$users=mysqli_query($mysqli,"SELECT * FROM users WHERE creator_id='$user_id'");
		while($usrow=mysqli_fetch_assoc($users)){
			array_push($user, $usrow['id']);
		}		
		foreach ($user as $value) {
			$string.="user_id='".$value."' or ";
		}
		$fstring= "( ".substr($string,0,-3).")";
		for($i=1;$i<=$lastday;$i++){		
			$fdat=strtotime("$i $month $year");
			$fdate=date("Y-m-d",$fdat);
			$fd=date("m",$fdat);
			$sql="SELECT * FROM campion_ids WHERE date like'$fdate %' and $fstring";
			$res=mysqli_query($mysqli,$sql);
			$nosms=0;
			if(mysqli_num_rows($res)>0){
			while($drow=mysqli_fetch_assoc($res)){
				$nosms+=$drow['credit_used'];
			}
		}
		array_push($data, $nosms);	
		}
		 echo "<tr>";
		for($j=1;$j<=$lastday;$j++) { 
			if($j<10){ $jah="0".$j;} else{ $jah=$j; } ?>
			<td style="border:2px solid #dddddd; height:80px;"><?php echo $j ?> <span class="pull-right"><a type="button" class="btn btn-primary btn-xs" href="report.php?date=<?php echo $year."-".$fd."-".$jah."&data=$off"; ?>"  ><?php echo $data[$j-1]; ?></a></span></td>
		<?php
		if($j%10==0){
			echo "</tr><tr>";
		}	}
		echo "</tr>";
        break;
    case 3:
		$data=array();
		$dateToTest = "$year-$month-1";
		$lastday = date('t',strtotime($dateToTest));
		$user=array();
		$users=mysqli_query($mysqli,"SELECT * FROM users WHERE creator_id='$user_id'");
		while($usrow=mysqli_fetch_assoc($users)){
			array_push($user, $usrow['id']);
		}		
		foreach ($user as $value) {
			$string.="user_id='".$value."' or ";
		}
		$fstring= "( ".substr($string,0,-3)." or user_id='".$user_id."')";
		echo $fstring;
		for($i=1;$i<=$lastday;$i++){		
			$fdat=strtotime("$i $month $year");
			$fdate=date("Y-m-d",$fdat);
			$fd=date("m",$fdat);
			$sql="SELECT * FROM campion_ids WHERE date like'$fdate %' and $fstring";
			$res=mysqli_query($mysqli,$sql);
			$nosms=0;
			if(mysqli_num_rows($res)>0){
			while($drow=mysqli_fetch_assoc($res)){
				$nosms+=$drow['credit_used'];
			}
		}
		array_push($data, $nosms);	
		}
		 echo "<tr style='height:40px;'>";
		for($j=1;$j<=$lastday;$j++) {
		if($j<10){ $jah="0".$j;} else{ $jah=$j; } ?>
			<td style="border:2px solid #dddddd; height:80px;"><?php echo $j ?> <span class="pull-right pull-down"><a type="button" class="btn btn-primary btn-xs" href="report.php?date=<?php echo $year."-".$fd."-".$jah."&data=$off"; ?>" ><?php echo $data[$j-1]; ?></a></span></td>
		<?php
		if($j%10==0){
			echo "</tr><tr>";
		}	}
		echo "</tr>";
		
        break;
    default:

}
exit();
	
} */

if(isset($_POST['remove_temp'])){
	extract($_POST);
	$res=mysqli_query($conn,"DELETE FROM `temp` WHERE id='$id'");
	if($res){
		
		echo "OK";
	}
	echo mysqli_error($conn);

	exit();
}
if(isset($_POST['clear_list'])){
	extract($_POST);
	$res=mysqli_query($conn,"DELETE FROM temp WHERE user='$user_id'");
	if($res){
		
		echo "OK";
	}
	echo mysqli_error($conn);

	exit();
}

if(isset($_POST['remove_live'])){
	extract($_POST);
	$res=mysqli_query($conn,"DELETE FROM `tbl_live` WHERE id='$id'");
	if($res){
		
		echo "OK";
	}
	echo mysqli_error($conn);

	exit();
}
if(isset($_POST['remove_consult'])){
	extract($_POST);
	$res=mysqli_query($conn,"DELETE FROM `tbl_consultant` WHERE id='$id'");
	if($res){
		
		echo "OK";
	}
	echo mysqli_error($conn);

	exit();
}

if(isset($_POST['remove_opportunity'])){
	extract($_POST);
	$res=mysqli_query($conn,"DELETE FROM `tbl_opportunity` WHERE id='$id'");
	if($res){
		
		echo "OK";
	}
	echo mysqli_error($conn);

	exit();
}


if(isset($_POST['addtotempc'])){
  extract($_POST);
  $nums=array();
  $nores=mysqli_query($conn,"SELECT * FROM temp WHERE user='$user_id'");
  while($nrow=mysqli_fetch_array($nores)){
    array_push($nums, $nrow['number']);
  }
  $res=mysqli_query($conn,"SELECT * FROM contactnumbers WHERE id='$id'");
  while($row=mysqli_fetch_array($res)){    
    $number=$row['mobile_number'];
    if(in_array($number, $nums)){
      continue;
    }
    $insres=mysqli_query($conn,"INSERT INTO temp(number,user)VALUES('$number','$user_id')");

  }
  echo mysqli_num_rows(mysqli_query($conn,"SELECT * FROM temp WHERE user='$user_id'"));
  exit();
}




if(isset($_POST['smppdetail'])){
	extract($_POST);

  $nores=mysqli_query($conn,"SELECT * FROM smpp WHERE route='$smppdetail' and deleted=0");
  while($nrow=mysqli_fetch_array($nores)){
    echo "<option value=".$nrow['name'].">".$nrow['name']."</option>";
  }
  echo mysqli_error($conn);
  exit();
}




if(isset($_POST['setdefault'])){
	extract($_POST);
	if(mysqli_query($conn,"UPDATE sender_id SET defaultt=0 WHERE sender='$user_id' AND id!='$id'")){
		if(mysqli_query($conn,"UPDATE sender_id SET defaultt=1 WHERE id='$id'"))	{
			echo "OK";
		}
	}
	
	exit();
}

if(isset($_POST['blacklist'])){
	extract($_POST);
	$res=mysqli_query($conn,"UPDATE `blacklist` SET `deleted`=1 where `id`='$id'");
	if($res){
		
		echo "OK";
	}else{
		echo mysqli_error($conn);
	}
	

	exit();	
}
if(isset($_POST['whitelist'])){
	extract($_POST);
	$res=mysqli_query($conn,"UPDATE `whitelist` SET `deleted`=1 where `id`='$id'");
	if($res){
		
		echo "OK";
	}else{
		echo mysqli_error($conn);
	}
	

	exit();	
}



if(isset($_POST['spamcontent'])){
	extract($_POST);
	$res=mysqli_query($conn,"DELETE FROM spamcontent where `id`='$id'");
	if($res){
		
		echo "OK";
	}else{
		echo mysqli_error($conn);
	}
	

	exit();	
}


if(isset($_POST['spamword'])){
	extract($_POST);
	$rstring="";
	$list=array();
	$res=mysqli_query($conn,"SELECT * FROM spamcontent");
	while($row=conn_fetch_assoc($res)){
		array_push($list, $row['content']);
	}
	foreach($list as $w){
		if(strpos($content, $w)){
			$rstring.="$w, ";

		}			
	}
	echo $rstring;
}

if(isset($_POST['delete_camp_msg'])){
	extract($_POST);
	$mres=mysqli_query($conn,"SELECT * FROM sheduled_message WHERE id='$id'");
	$mrow=mysqli_fetch_assoc($mres);
	$user=$mrow['user_id'];
	$credit=$mrow['credit'];
	$camp_id=$mrow['campion_id'];
	$one=1;
	$s_del=mysqli_query($conn,"DELETE FROM sheduled_message WHERE id='$id'");
	if($s_del){
		$campres=mysqli_query($conn,"UPDATE `campion_ids` SET `n_messg`=`n_messg`-$one, `credit_used`=`credit_used`-$credit WHERE `c_id`='$camp_id'");
		if($campres){
			$user_up=mysqli_query($conn,"UPDATE users SET sms_c=sms_c+$credit WHERE id='$user'");
			if($user_up){
				echo "OK";

			}
			else{
				echo mysqli_error($conn);
			}			
		}
		else{
			echo mysqli_error($conn)."$camp_id";
		}		
	}
	else{
		echo mysqli_error($conn);
	}
exit();
}




if(isset($_POST['delete_camp'])){
	extract($_POST);
	$mres=mysqli_query($conn,"SELECT * FROM campion_ids WHERE c_id='$id'");
	$mrow=mysqli_fetch_assoc($mres);
	$user=$mrow['user_id'];
	$credit=$mrow['credit_used'];
	$s_del=mysqli_query($conn,"DELETE FROM campion_ids WHERE c_id='$id'");
	if($s_del){
			$user_up=mysqli_query($conn,"UPDATE users SET sms_c=sms_c+$credit WHERE id='$user'");
			if($user_up){
				mysqli_query($conn,"DELETE FROM sheduled_message WHERE campion_id='$id'");
				echo "OK";

			}
			else{
				echo mysqli_error($conn);
			}			
		}
		else{
			echo mysqli_error($conn)."$camp_id";
		}		
exit();
}

?>