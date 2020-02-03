<?php
$begin = new DateTime($_POST['StartDate']);
$end = new DateTime($_POST['EndDate']);
$startTime = $_POST['StartTime'];
$endTime = $_POST['EndTime'];
$computerName = array("SAK-OEE-DC203", "SAK-OEE-DC206", "SAK-OEE-DC411", "SAK-OEE-DC455");
$computername1 =array("SAK-OEE-DC501", "SAK-OEE-DC503", "SAK-OEE-DC522", "SAK-OEE-DC608", "SAK-OEE-DC614", "SAK-OEE-DC620", "SAK-OEE-DC621", "SAK-OEE-DC624");
$dayShift = $_POST['DayShift'];
$nightShift = $_POST['NightShift'];
$team = array(
	$_POST['Shift1'],
	$_POST['Shift2'],
	$_POST['Shift3'],
	$_POST['Shift4'],
	$_POST['Shift5'],
	$_POST['Shift6'],
	$_POST['Shift7'],
	$_POST['Shift8'],
);
$team1 =array(
	$_POST['Shift9'],
	$_POST['Shift10'],
	$_POST['Shift11'],
	$_POST['Shift12'],
);
$command1 = '[update]';
$command2 = '[end]';
$interval = DateInterval::createFromDateString('1 day');
$period = new DatePeriod($begin, $interval, $end);
$last_index = count($team) - 1;
$last_index1 = count($team1) -1;

echo "StartDate,"."StartTime,"."Computername,"."Machinename,"."Shifttype,"."Team,"."Command"."<br>";

foreach ($computerName as $cn){ 
	foreach ($period as $dt) {
		foreach($team as $t){
    $t = current($team);

    echo $dt->format("Y.m.d").','.$startTime.','.$cn.','.','.$dayShift.','. $t.','.$command1."<br>";
	if ($last_index == key($team)) {
		reset($team);
	} else {
		next($team);
	}
	$t = current($team);
    echo $dt->format("Y.m.d").','.$endTime.','.$cn.','.','.$nightShift.','. $t.','.$command1."<br>";
    if ($last_index == key($team)) {
		reset($team);
	} else {
		next($team);
	}
	
	}	
}
}
foreach ($computername1 as $cn1) {
    foreach ($period as $dt) {
		foreach($team as $t){
        $t1 = current($team1);
        echo $dt->format("Y.m.d").','.$startTime.','.$cn1.','.','.$dayShift.','. $t1.','.$command1."<br>";
	if ($last_index1 == key($team1)) {
		reset($team1);
	} else {
		next($team1);
	}
	
    echo $dt->format("Y.m.d").','.$endTime.','.$cn1.','.','.$nightShift.','.','.$command2."<br>";
   
    }
}
}
?>