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
	$_POST['Shift9'],
	$_POST['Shift10'],
	$_POST['Shift11'],
	$_POST['Shift12'],
	$_POST['Shift13'],
	$_POST['Shift14'],
	$_POST['Shift15'],
	$_POST['Shift16'],
);
$command1 = '[update]';
$command2 = '[end]';
$interval = DateInterval::createFromDateString('1 day');
$period = new DatePeriod($begin, $interval, $end);
$last_index = count($team) - 1;

// ob_start();
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
// public static AbstractCsv::createFromPath(
// 	mixed $path,
// 	string $open_mode = 'r+'
// ): AbstractCsv
// // output headers so that the file is downloaded rather than displayed
// header('Content-Type: text/csv; charset=utf-8');
// header('Content-Disposition: attachment; filename=data.csv');
// $csv = League\Csv\Writer::createFromPath("result.csv", "w");
// $csv->setDelimiter(","); //the delimiter will be the tab character
// $csv->setNewline("\r\n"); //use windows line endings for compatibility with some csv libraries
// $csv->setOutputBOM(Writer::BOM_UTF8); //adding the BOM sequence on output
// // create a file pointer connected to the output stream
// $output = fopen('php://output', 'w');

// $file = 'test.csv';
// //   Return the contents of the output buffer
// $htmlStr = ob_get_contents();

// // Clean (erase) the output buffer and turn off output buffering
// ob_end_clean(); 
// // Write final string to file
// file_put_contents($file, $htmlStr);
?>