<?php
$begin = new DateTime($_POST['StartDate']);
$end = new DateTime($_POST['EndDate']);
$startTime = $_POST['StartTime'];
$endTime = $_POST['EndTime'];
// $computerName = array('SAK-OEE-DC203', 'SAK-OEE-DC206', 'SAK-OEE-DC411', 'SAK-OEE-DC455');
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