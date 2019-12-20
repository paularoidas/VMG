<!doctype html>
<html lang='en'>

<head>

    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>

    <link rel='icon' href='/favicon.ico' type='image/x-icon' />
    <link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css'
        integrity='sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh' crossorigin='anonymous'>

    <title>OEE Shift Schedule Generator</title>
</head>
<header class='bg-light'>
    <div class='pb-3 ml-2 '>
        <h1>OEE Shift Schedule Generator</h1>
        <a><span class=' font-weight-bold'>INSTRUCTIONS:</span><br> Fill out the form, press Generate, select all, copy,
            then paste the results into an Excel
            sheet and save the file as a unicode .txt file format. Then change file extension to .csv.</a>
    </div>
</header>
<ul class="nav nav-tabs bg-light">
    <li class="nav-item">
        <a class="nav-link" href="/?page=vmg">8-Shift</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="/?page=vmg2">16-Shift</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="/?page=sak">Sakuona</a>
    </li>
    <li class="nav-item">
        <a class="nav-link active" href="/?page=sws">Swoods</a>
    </li>
</ul>
<div class='container-fluid'>
    <div class='row'>
        <div class='col-sm pt-4'>
            <form method='POST' action='/?page=output_sws'>
                <div class='form-group'>
                    <div class='form-row'>
                        <div class='col'>
                            <label for='exampleInputEmail1'>Start Date</label>
                            <input type='date' class='form-control' id='StartDate' aria-describedby=''
                                placeholder='2020-01-01' name='StartDate' value='2020-01-01' required>
                        </div>
                        <div class='col'>
                            <label for='exampleInputEmail1'>End Date</label>
                            <input type='date' class='form-control' id='EndDate' aria-describedby=''
                                placeholder='2021-01-01' name='EndDate' value='2021-01-01' required>
                        </div>
                    </div>
                </div>
                <div class='form-group'>
                    <div class='form-row'>
                        <div class='col'>
                            <label for='exampleInputEmail1'>Day Shift Start Time</label>
                            <input type='text' class='form-control' id='StartTime' aria-describedby=''
                                placeholder='08:30:00' name='StartTime' value='08:30:00'>
                        </div>
                        <div class='col'>
                            <label for='exampleInputEmail1'>Night Shift Start Time</label>
                            <input type='text' class='form-control' id='EndTime' aria-describedby=''
                                placeholder='20:30:00' name='EndTime' value='20:30:00'>
                        </div>
                    </div>
                </div>
                <!-- <div class='form-group'>
                    <div class='form-row'>
                        <div class='col'>
                        <label for='exampleInputEmail1'>Alt. Day Shift Start Time</label>
                        <input type='text' class='form-control' id='StartTime' aria-describedby='' placeholder='08:00:00' name='StartTime1' value='08:00:00'>
                    </div>
                    <div class='col'>
                        <label for='exampleInputEmail1'>Alt. Night Shift Start Time</label>
                        <input type='text' class='form-control' id='EndTime' aria-describedby='' placeholder='20:00:00' name='EndTime1' value='20:00:00'>
                    </div>
                    </div>
                    </div> -->
                <div class='form-group'>
                    <div class='form-row'>
                        <div class='col'>
                            <label for='exampleInputEmail1'>Day Shift Name</label>
                            <input type='text' class='form-control' id='DayShift' aria-describedby=''
                                placeholder='Дневная смена' name='DayShift' value='Дневная смена'>
                        </div>
                        <div class='col'>
                            <label for='exampleInputEmail1'>Night Shift Name</label>
                            <input type='text' class='form-control' id='NightShift' aria-describedby=''
                                placeholder='Ночная смена' name='NightShift' value='Ночная смена'>
                        </div>
                    </div>
                </div>
                <label for='exampleInputPassword1'>Shift Pattern</label>
                <div class='form-group'>
                    <div class='form-row mb-2'>
                        <div class='col'>
                            <input type='text' class='form-control' id='ShiftPattern' placeholder='I' name='Shift1'
                                value='I' required>
                        </div>
                        <div class='col'>
                            <input type='text' class='form-control' id='ShiftPattern' placeholder='IV' name='Shift2'
                                value='IV' required>
                        </div>
                        <div class='col'>
                            <input type='text' class='form-control' id='ShiftPattern' placeholder='II' name='Shift3'
                                value='II' required>
                        </div>
                        <div class='col'>
                            <input type='text' class='form-control' id='ShiftPattern' placeholder='I' name='Shift4'
                                value='I' required>
                        </div>
                        <div class='col'>
                            <input type='text' class='form-control' id='ShiftPattern' placeholder='II' name='Shift5'
                                value='II' required>
                        </div>
                        <div class='col'>
                            <input type='text' class='form-control' id='ShiftPattern' placeholder='I' name='Shift6'
                                value='I' required>
                        </div>
                        <div class='col'>
                            <input type='text' class='form-control' id='ShiftPattern' placeholder='III' name='Shift7'
                                value='III' required>
                        </div>
                        <div class='col'>
                            <input type='text' class='form-control' id='ShiftPattern' placeholder='II' name='Shift8'
                                value='II' required>
                        </div>
                    </div>
                    <div class='form-row'>
                        <div class='col'>
                            <input type='text' class='form-control' id='ShiftPattern' placeholder='III' name='Shift9'
                                value='III' required>
                        </div>
                        <div class='col'>
                            <input type='text' class='form-control' id='ShiftPattern' placeholder='II' name='Shift10'
                                value='II' required>
                        </div>
                        <div class='col'>
                            <input type='text' class='form-control' id='ShiftPattern' placeholder='IV' name='Shift11'
                                value='IV' required>
                        </div>
                        <div class='col'>
                            <input type='text' class='form-control' id='ShiftPattern' placeholder='III' name='Shift12'
                                value='III' required>
                        </div>
                        <div class='col'>
                            <input type='text' class='form-control' id='ShiftPattern' placeholder='IV' name='Shift13'
                                value='IV' required>
                        </div>
                        <div class='col'>
                            <input type='text' class='form-control' id='ShiftPattern' placeholder='III' name='Shift14'
                                value='III' required>
                        </div>
                        <div class='col'>
                            <input type='text' class='form-control' id='ShiftPattern' placeholder='I' name='Shift15'
                                value='I' required>
                        </div>
                        <div class='col'>
                            <input type='text' class='form-control' id='ShiftPattern' placeholder='IV' name='Shift16'
                                value='IV' required>
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
        <div class="footer-copyright text-center text-black-50 py-3">Written by Paulius Stasius. <a
                href="mailto:paulius.stasius@vmg.eu">Report a problem</a>.
        </div>
</footer>
</body>

</html>