<?php
$begin = new DateTime($_GET['StartDate']);
$end = new DateTime($_GET['EndDate']);
$startTime = $_GET['StartTime'];
$endTime = $_GET['EndTime'];
// $computerName = array('SAK-OEE-DC203', 'SAK-OEE-DC206', 'SAK-OEE-DC411', 'SAK-OEE-DC455');
$dayShift = $_GET['DayShift'];
$nightShift = $_GET['NightShift'];
$team = array(
	$_GET['Shift1'],
	$_GET['Shift2'],
	$_GET['Shift3'],
	$_GET['Shift4'],
	$_GET['Shift5'],
	$_GET['Shift6'],
	$_GET['Shift7'],
	$_GET['Shift8'],
);
$command1 = '[update]';
$command2 = '[end]';
$interval = DateInterval::createFromDateString('1 day');
$period = new DatePeriod($begin, $interval, $end);
$last_index = count($team) - 1;


echo 'StartDate,'.'StartTime,'.'Computername,'.'Machinename,'.'Shifttype,'.'Team,'.'Command'.'<br>';
foreach ($period as $dt) {
    $t = current($team);

    echo $dt->format('Y.m.d').','.$startTime.','.','.','.$dayShift.','. $t.','.$command1.'<br>';
	if ($last_index == key($team)) {
		reset($team);
	} else {
		next($team);
	}
	$t = current($team);
    echo $dt->format('Y.m.d').','.$endTime.','.','.','.$nightShift.','. $t.','.$command1.'<br>';
    if ($last_index == key($team)) {
		reset($team);
	} else {
		next($team);
	}
	
}
?>