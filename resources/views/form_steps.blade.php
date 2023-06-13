<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css">
    <meta name="csrf-token" content="{{csrf_token()}}"> 
    <style>
    * {
        box-sizing: border-box;
    }

    body {
        background-color: #f1f1f1;
    }

    #regForm {
        background-color: #ffffff;
        margin: 100px auto;
        font-family: Raleway;
        padding: 40px;
        width: 70%;
        min-width: 300px;
    }

    h1 {
        text-align: center;
    }

    input {
        padding: 10px;
        width: 100%;
        font-size: 17px;
        font-family: Raleway;
        border: 1px solid #aaaaaa;
    }

    /* Mark input boxes that gets an error on validation: */
    input. {
        background-color: #ffdddd;
    }

    /* Hide all steps by default: */
    .form-step {
        display: none;
    }

    button {
        background-color: #04AA6D;
        color: #ffffff;
        border: none;
        padding: 10px 20px;
        font-size: 17px;
        font-family: Raleway;
        cursor: pointer;
    }

    button:hover {
        opacity: 0.8;
    }

    #prevBtn {
        background-color: #bbbbbb;
    }

    /* Make circles that indicate the steps of the form: */
    .step {
        height: 15px;
        width: 15px;
        margin: 0 2px;
        background-color: #bbbbbb;
        border: none;
        border-radius: 50%;
        display: inline-block;
        opacity: 0.5;
    }

    .step.active {
        opacity: 1;
    }

    /* Mark the steps that are finished and valid: */
    .step.finish {
        background-color: #04AA6D;
    }
    .container{
      border: 2px solid #ccc;
      margin-top:10px;
      padding:10px;
    }
    .error{
      background:#fd8e8e63;
    }
    </style>

</head>

<body>

    <form id="multiStepForm" method="post">
        <!-- Step 1 -->
        <div id="step1" class="form-step">
            <!-- Step 1 content -->
            <div class="row">
                <div class="container">
                    <div class="tab" style="display: block;">
                        <h1>Chief Complaints:</h1>
                        <p><input placeholder="Enter complaint" value="{{$complaients->complaint??''}}" required oninput="this.complaint = ''" id="complaint"
                                name="complaint" class=" "></p>
                        <p>
                          <select class="custom-select col-md-12" name="how_long" id="how_long">
                            <option <?php if(isset($complaients->how_long) && !empty($complaients->how_long) && $complaients->how_long=='Day'){ echo 'selected';  } ?> value="Day">Day</option>
                            <option <?php if(isset($complaients->how_long) && !empty($complaients->how_long) && $complaients->how_long=='Month'){ echo 'selected';  } ?> value="Month">Month</option>
                            <option <?php if(isset($complaients->how_long) && !empty($complaients->how_long) && $complaients->how_long=='Year'){ echo 'selected';  } ?>value="Year">Year</option>
                            <option <?php if(isset($complaients->how_long) && !empty($complaients->how_long) && $complaients->how_long=='Continue'){ echo 'selected';  } ?> value="Continue">Continue</option>
                          </select> 
                        </p>   

                        <p>
                          <input placeholder="Enter Duration" value="{{$complaients->duration??''}}" required oninput="this.duration = ''" id="duration"
                                name="duration" class=" ">
                        </p>

                        <p>
                          <select class="custom-select col-md-12" name="option" id="option">
                            <option <?php if(isset($complaients->option) && !empty($complaients->option) && $complaients->option=='Nature'){ echo 'selected';  } ?> value="Nature">Nature</option>
                            <option <?php if(isset($complaients->option) && !empty($complaients->option) && $complaients->option=='Continuous'){ echo 'selected';  } ?> value="Continuous">Continuous</option>
                            <option <?php if(isset($complaients->option) && !empty($complaients->option) && $complaients->option=='Episodic'){ echo 'selected';  } ?> value="Episodic">Episodic</option>
                          </select> 
                        </p>   
                        <p><input type="hidden" placeholder="Enter Nature" oninput="this.stage = ''" id="stage"
                                name="stage" value="1"></p>
                    </div>
                    <div class="d-flex align-items-center justify-content-center">
                        <button type="button" onclick="nextStep(2)" class="next-button">Save & Next</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Step 2 -->
        <div id="step2" class="form-step">
            <!-- Step 2 content -->

            <div class="row">
                <div class="container">
                    <h1 class="text-center">Present Illness:</h1>
                    <hr/>

                    <p class="text-center">Do you have any of the following diseases?</p>

                    <div class="d-flex justify-content-center mt-3">
                        <div class="form-check form-check-inline">
                            <input class="col-md-6 form-check-input" type="checkbox"
                                <?php if(isset($resultPresentIllness) && in_array("Hypertension",$resultPresentIllness)==1){ echo "checked"; }?>
                                name="present_illness[]" id="present_illness1" value="Hypertension">
                            <label class="col-md-6 form-check-label text-capitalize"
                                for="present_illness1">Hypertension</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="col-md-6 form-check-input" type="checkbox"
                                <?php if(isset($resultPresentIllness) && in_array("Diabetes",$resultPresentIllness)==1){ echo "checked"; }?>
                                name="present_illness[]" id="present_illness2" value="Diabetes">
                            <label class="col-md-6 form-check-label text-capitalize"
                                for="present_illness2">Diabetes</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="col-md-6 form-check-input" type="checkbox"
                                <?php if(isset($resultPresentIllness) && in_array("Asthma",$resultPresentIllness)==1){ echo "checked"; }?>
                                name="present_illness[]" id="present_illness3" value="Asthma">
                            <label class="col-md-6 form-check-label text-capitalize"
                                for="present_illness3">Asthma</label>
                        </div>
                    </div>

                    <div class="buttons d-flex align-items-center justify-content-center mt-3">
                        <button type="button" onclick="previousStep(1)" class="previous-button mr-2">Previous</button>
                        <button type="button" onclick="nextStep(3)" class="next-button">Save & Next</button>
                    </div>
                </div>
            </div>


        </div>

        <!-- Step 3 -->
        <div id="step3" class="form-step">
            <!-- Step 3 content -->

            <div class="row">
                <div class="container">

                    <h1 class="text-center">Past Illness:</h1>

                    <hr/>

                    <p class="text-center">Do you have any of the following diseases?</p>

                    <div class="d-flex justify-content-center mt-3">
                        <div class="form-check form-check-inline">
                            <input class="col-md-6 form-check-input" type="checkbox"
                                <?php if(isset($resultPastIllness) && in_array('Hypertension',$resultPastIllness)==1){ echo 'checked'; }?>
                                name="past_illness[]" id="past_illness1" value="Hypertension">
                            <label class="col-md-6 form-check-label text-capitalize"
                                for="past_illness1">Hypertension</label>

                        </div>
                        <div class="form-check form-check-inline">
                            <input class="col-md-6 form-check-input" type="checkbox"
                                <?php if(isset($resultPastIllness) && in_array('Diabetes',$resultPastIllness)==1){ echo 'checked'; }?>
                                name="past_illness[]" id="past_illness2" value="Diabetes">
                            <label class="col-md-6 form-check-label text-capitalize"
                                for="past_illness2">Diabetes</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="col-md-6 form-check-input" type="checkbox"
                                <?php if(isset($resultPastIllness) && in_array('Asthma',$resultPastIllness)==1){ echo 'checked'; }?>
                                name="past_illness[]" id="past_illness3" value="Asthma">
                            <label class="col-md-6 form-check-label text-capitalize" for="past_illness3">Asthma</label>
                        </div>
                    </div>

                    <div class="col-md-12 d-flex align-items-center justify-content-center mt-3">
                        <button type="button" onclick="previousStep(2)" class="previous-button mr-2">Previous</button>
                        <button type="button" onclick="nextStep(4)" class="submit-button">Submit</button>
                    </div>

                </div>
            </div>

        </div>
    </form>

</body>

</html>

<script>
function showStep(stepNumber) {
    // Hide all form steps
    var formSteps = document.getElementsByClassName('form-step');
    for (var i = 0; i < formSteps.length; i++) {
        formSteps[i].style.display = 'none';
    }

    // Show the specified step
    var step = document.getElementById('step' + stepNumber);
    if (step) {
        step.style.display = 'block';
    }
}

function nextStep(nextStepNumber) {
    
    //save data
    var present_illness_field = $('[name="present_illness[]"]:checked').length;
    var past_illness_field = $('[name="past_illness[]"]:checked').length;

    var present_illness = [];
    var past_illness = [];
    //present illness
    var chkId = '';
    $("input[name='present_illness[]']:checked").each(function() {
        chkId = $(this).val() + ",";
        present_illness.push(chkId.slice(0, -1));
    })

    //past illness
    var chkId2 = '';
    $("input[name='past_illness[]']:checked").each(function() {
        chkId2 = $(this).val() + ",";
        past_illness.push(chkId2.slice(0, -1));
    })

    var stage = nextStepNumber - 1;

    var complaint = $('#complaint').val();
    var how_long = $('#how_long').val();
    var duration = $('#duration').val();
    var option = $('#option').val();

    if(complaint=='' ||how_long=='' ||duration=='' ||option==''){

    var elementComplaint = document.getElementById('complaint');  
    if(complaint==''){
      elementComplaint.classList.add('error');
    }else{
      elementComplaint.classList.remove('error');
    }

    var elementHow_long = document.getElementById('how_long');
    if(how_long==''){  
      elementHow_long.classList.add('error');
    }else{
      elementHow_long.classList.remove('error');
    }  

    var elementDuration = document.getElementById('duration');
    if(duration==''){
      elementDuration.classList.add('error');
    }else{
      elementDuration.classList.remove('error');
    }

    var elementoption = document.getElementById('option');
    if(option==''){
      elementoption.classList.add('error');
    }else{
      elementoption.classList.remove('error');
    }

      return false;
    }

    var patient_id = 1;

    var data = new FormData();

    data.append('patient_id', patient_id);
    data.append('complaint', complaint);
    data.append('how_long', how_long);
    data.append('duration', duration);
    data.append('option', option);

    data.append('present_illness', present_illness);
    data.append('past_illness', past_illness);

    data.append('present_illness_field', present_illness_field);
    data.append('past_illness_field', past_illness_field);
    data.append('stage', stage);

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    jQuery.ajax({
        method: 'POST',
        url: '/step/store',
        type: "POST",
        data: data,
        dataType: "html",
        encode: true,
        cache: false,
        contentType: false,
        //contentType: "application/json; charset=utf-8",
        processData: false,
        success: function(data) {
            //console.log(data);
            if(nextStepNumber==4){
            alert('Data saved successfully !');
            return false;
          }
          showStep(nextStepNumber);
        },
        error: function(jqXHR, textStatus, errorThrown) { // What to do if we fail
            console.log(JSON.stringify(jqXHR));
            console.log("AJAX error: " + textStatus + ' : ' + errorThrown);
        }
    });

}

function previousStep(previousStepNumber) {
    showStep(previousStepNumber);
}

// Initially show the first step
showStep(1);
</script>