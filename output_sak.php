<?php
$begin = new DateTime('2020-01-01');
$end = new DateTime('2022-01-01');
$startTime = "08:30:00";
$endTime = "20:30:00";
$computerName = array("SAK-OEE-DC203", "SAK-OEE-DC206", "SAK-OEE-DC411", "SAK-OEE-DC455");
$computername1 =array("SAK-OEE-DC501", "SAK-OEE-DC503", "SAK-OEE-DC522", "SAK-OEE-DC608", "SAK-OEE-DC614", "SAK-OEE-DC620", "SAK-OEE-DC621", "SAK-OEE-DC624");
$dayShift = 'Dienine pamaina';
$nightShift = 'Naktine pamaina';
$team = array('C','D','B','C','A','B','D','A');
$team1 =array('L02','L01','L01', 'L02');
$command1 = '[update]';
$command2 = '[end]';
$interval = DateInterval::createFromDateString('1 day');
$period = new DatePeriod($begin, $interval, $end);
$last_index = count($team) - 1;
$last_index1 = count($team1) -1;

echo "StartDate,"."StartTime,"."Computername,"."Machinename,"."Shifttype,"."Team,"."Command"."<br>";
foreach ($computerName as $cn){ 
foreach ($period as $dt) {
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
foreach ($computername1 as $cn1) {
    foreach ($period as $dt) {
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
?>