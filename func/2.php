#!/usr/bin/php
<?php
function convertDate($date, $locale,$length){
  $monthNames = array(
	"en" => array(
	  "full" => array(1=>'January','February','March','April','May','June','July','August','September','October','November','December'),
	  "short"=> array(1=>'Jan','Feb','Mar','Apr','Jun','Jul','Aug','Sep','Oct','Nov','Dec')
	),
	"cn" => array(
	  "full" => array(1=>'一月','二月','三月','四月','五月','六月','七月','八月','九月','十月','十一月','十二月'),
	  "short"=> array(1=>'一','二','三','四','五','六','七','八','九','十','十一','十二')
	)
);

$exploded = explode('-', $date);
$year = $exploded[0];
$month = $exploded[1];
$day = $exploded[2];

$month=$monthNames[$locale][$length][$month];
$date = $day . ' ' . $month . ', ' . $year;

return $date;
	
}

echo convertDate('2015-2-01', 'en', 'full'), '<br>';

$arr1 = array("a"=>"b","c","d's",'e'=>array("f's", "g"=>array("h's","i"=>"j's")));
$arr2=mdarr_parameter($arr1);
$arr3=mdarr_parameter($arr2, true);
print_r($arr1);echo '<br>';
print_r($arr2);echo '<br>';
print_r($arr3);


function mdarr_parameter($needle, $job=false){
  if (is_array($needle)) {
    foreach($needle as $name=>$value)
      $needle[$name] = mdarr_parameter($value, $job);
    }else{
	if ($job === true)
	   $needle = stripslashes($needle);
	else
	   $needle = addslashes($needle);
   
  }
  return $needle;
}
//foreach($arr1 as $key => $val) { echo $key . '=>' . $val . "<br>";}

?>
