<?php
function user_name($user_id){
	global $users_data;
	foreach($users_data as $user){
        if($user[id] == $_SESSION[id]){
			return $user[student];
		}
	}
}
function sum_score($user_id){
	global $user_exam_data;
	foreach($user_exam_data as $exam){
        if($exam[user_id] == $_SESSION[id]){
			return $exam[rus_exam] + $exam[math_exam] + $exam[user_exam_score];
		}
	}
}
function orig_count($group_study){
	global $user_university_data;
	$i=0;
	foreach($user_university_data as $user){
        if(($user[original] == true) && ($user[group_study] == $group_study)){
			$i++;
		}
	}
	return $i;
}
function pay_place($group_study){
		global $pay_place;
		foreach($pay_place as $place){
        if($place[group_study] == $group_study){
			return $place[pay_place];
		}
	}
}
function pos_all($user_id, $group_study){
	global $user_exam_data, $user_university_data;
	$i=0;
	$n=0;
	foreach($user_university_data as $user){
        if($user[group_study] == $group_study){
			$pos_user[$n] = $user[user_id];
			$n++;
		}
	}
	if(!empty($pos_user[0])){
		foreach($user_exam_data as $exam){
			if(in_array($exam[user_id], $pos_user)){
			$pos_all[$i] = $exam[rus_exam] + $exam[math_exam] + $exam[user_exam_score];
			$i++;
			}
		}
		rsort($pos_all);
		$position = array_search(sum_score($user_id), $pos_all);
		return $position + 1;
	}else return '0';
}
function pos_orig($user_id, $group_study){
	global $user_exam_data, $user_university_data;
	$i=0;
	$n=0;
	foreach($user_university_data as $user){
        if(($user[original] == true) && ($user[group_study] == $group_study)){
			$pos_user[$n] = $user[user_id];
			$n++;
		}
	}
	if(!empty($pos_user[0])){
		foreach($user_exam_data as $exam){
			if(in_array($exam[user_id], $pos_user)){
			$pos_orig[$i] = $exam[rus_exam] + $exam[math_exam] + $exam[user_exam_score];
			$i++;
			}
		}
		rsort($pos_orig);
		if(array_search(sum_score($user_id), $pos_orig)){
			$position = array_search(sum_score($user_id), $pos_orig);
		}else{
			$position = count($pos_orig);
		} ;
		return $position + 1;
	}else return '0';
}
function checker($checker){
	if($checker){
	return 'checked';
	}else{
		return 'unchecked';}
}
?>