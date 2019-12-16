<!doctype html>
<html lang='en'>

<head>

	<meta charset='utf-8'>
	<meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>


	<link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css'
		integrity='sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh' crossorigin='anonymous'>

	<title>OEE Shift Schedule Generator</title>
</head>

<body>
	<header>
		<div class='mb-3 ml-2'>
			<h1>OEE Shift Schedule Generator</h1>
			<a>INSTRUCTIONS:<br> Fill out the form, press Generate, select all, copy, then paste the results into an
				Excel sheet and save them as a .csv file format.</a>
		</div>
	</header>
	<ul class="nav nav-tabs">
		<li class="nav-item">
			<a class="nav-link" href="/index.html">Default Schedule</a>
		</li>
		<li class="nav-item">
			<a class="nav-link active" href="/sak.php">Custom Schedule</a>
		</li>
		<!-- <li class="nav-item">
    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
  </li> -->
	</ul>
	<div class='container-fluid'>
		<div class='row'>
			<div class='col-sm pt-4'>
				<form method='GET' action='/output_sak.php'>
					<div class='form-group'>
						<div class='form-row'>
							<label for='exampleInputField1'>Start Date</label>
							<input type='date' class='form-control' id='StartDate' aria-describedby=''
								placeholder='2020-01-01' name='StartDate' value='2020-01-01'>
						</div>
					</div>
					<div class='form-group'>
						<label for='exampleInputField1'>End Date</label>
						<input type='date' class='form-control' id='EndDate' aria-describedby=''
							placeholder='2021-01-01' name='EndDate' value='2021-01-01'>
					</div>
					<div class='form-group'>
						<label for='exampleInputField1'>Day Shift Start Time</label>
						<input type='text' class='form-control' id='StartTime' aria-describedby=''
							placeholder='08:30:00' name='StartTime' value='08:30:00'>
					</div>
					<div class='form-group'>
						<label for='exampleInputField1'>Night Shift Start Time</label>
						<input type='text' class='form-control' id='EndTime' aria-describedby='' placeholder='20:30:00'
							name='EndTime' value='20:30:00'>
					</div>
					<div class='form-group'>
						<label for='exampleInputField1'>Day Shift Name</label>
						<input type='text' class='form-control' id='DayShift' aria-describedby=''
							placeholder='Dienine pamaina' name='DayShift' value='Dienine pamaina'>
					</div>
					<div class='form-group'>
						<label for='exampleInputField1'>Night Shift Name</label>
						<input type='text' class='form-control' id='NightShift' aria-describedby=''
							placeholder='Naktine pamaina' name='NightShift' value='Naktine pamaina'>
					</div>
					<label for='exampleInputField1'>Shift Pattern</label>
					<div class='form-group'>
						<div class='form-row'>
							<div class='col'>
								<input type='text' class='form-control' id='ShiftPattern' placeholder='A' name='Shift1'
									value='A' required>
							</div>
							<div class='col'>
								<input type='text' class='form-control' id='ShiftPattern' placeholder='B' name='Shift2'
									value='B' required>
							</div>
							<div class='col'>
								<input type='text' class='form-control' id='ShiftPattern' placeholder='D' name='Shift3'
									value='D' required>
							</div>
							<div class='col'>
								<input type='text' class='form-control' id='ShiftPattern' placeholder='A' name='Shift4'
									value='A' required>
							</div>
							<div class='col'>
								<input type='text' class='form-control' id='ShiftPattern' placeholder='C' name='Shift5'
									value='C' required>
							</div>
							<div class='col'>
								<input type='text' class='form-control' id='ShiftPattern' placeholder='D' name='Shift6'
									value='D' required>
							</div>
							<div class='col'>
								<input type='text' class='form-control' id='ShiftPattern' placeholder='B' name='Shift7'
									value='B' required>
							</div>
							<div class='col'>
								<input type='text' class='form-control' id='ShiftPattern' placeholder='C' name='Shift8'
									value='C' required>
							</div>
						</div>
					</div>
					<label for='exampleInputField1'>Shift Pattern 2</label>
					<div class='form-group'>
						<div class='form-row'>
							<div class='col'>
								<input type='text' class='form-control' id='ShiftPattern' placeholder='L01'
									name='Shift9' value='L01' required>
							</div>
							<div class='col'>
								<input type='text' class='form-control' id='ShiftPattern' placeholder='L01'
									name='Shift10' value='L01' required>
							</div>
							<div class='col'>
								<input type='text' class='form-control' id='ShiftPattern' placeholder='L02'
									name='Shift11' value='L02' required>
							</div>
							<div class='col'>
								<input type='text' class='form-control' id='ShiftPattern' placeholder='L02'
									name='Shift12' value='L02' required>

							</div>
						</div>
					</div>
					<button type='submit' class='btn btn-primary'>Generate</button>
				</form>
			</div>
			<div class='col-sm'>
			</div>
			<div class='col-sm'>
			</div>
			<div class='col-sm'>
			</div>
			<div class='col-sm'>
			</div>
		</div>
	</div>
	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src='https://code.jquery.com/jquery-3.4.1.slim.min.js'
		integrity='sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n' crossorigin='anonymous'>
	</script>
	<script src='https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js'
		integrity='sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo' crossorigin='anonymous'>
	</script>
	<script src='https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js'
		integrity='sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6' crossorigin='anonymous'>
	</script>
	<footer class="page-footer font-small pt-4">
		<div class="container fixed-bottom text-center text-md-left">
			<div class="footer-copyright text-center text-black-50 py-3">© 2019 Paulius Stasius</a>
			</div>
	</footer>
</body>

</html>