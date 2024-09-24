@extends('layouts.simple.master-therapist')
@section('title', 'Report Form')

@section('css')
@endsection

@section('style')
@endsection

@section('breadcrumb-title')
    <h3>Session Skill Report Form</h3>
@endsection

@section('breadcrumb-items')
    <li class="breadcrumb-item">Session Skills Update</li>
    <li class="breadcrumb-item active">Report Form</li>
@endsection     

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Report Form</h5>
                    </div>
                    <div class="card-body">
                        <form class="needs-validation"  action="{{route('therapist.reportSubmit')}}" method="POST" >
                            @csrf
                            <input type="hidden" name="schedules_id" value="{{$schedules->id}}">
                            <input type="hidden" name="therapist" value="{{ $therapistName }}">
                            <input type="hidden" name="status" value="pending">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label class="form-label" for="validationCustom01">Student Name</label>
                                    <input class="form-control" id="validationCustom01" type="text" name="std_name" readonly value="{{$schedules->childInfo->child_name}}"
                                        required="">
                                    <div class="valid-feedback">Looks good!</div>
                                </div>
                                <div class="col-md-5">
                                    <label class="form-label" for="validationCustom02">IC/Passport No</label>
                                    <input class="form-control" id="validationCustom02" type="text" name="std_ic" readonly value="{{$schedules->childInfo->child_ic}}"
                                        required="">
                                    <div class="valid-feedback">Looks good!</div>
                                </div>
                                <div class="col-md-2">
                                    <label class="form-label" for="validationCustom03">Session Attended</label>
                                    <input class="form-control" id="validationCustom03" type="text" value="" name="session_attended"
                                        required="">
                                    <div class="valid-feedback">Looks good!</div>
                                </div>
                                <div class="col-md-2">
                                    <label class="form-label" for="validationCustom04">Date</label>
                                    <input class="form-control" id="validationCustom04" type="date" name="date"
                                        required="">
                                    <div class="valid-feedback">Looks good!</div>
                                </div>
                                <div class="col-md-4">
                                    <label class="form-label" for="validationCustom02">Treatment Provided</label>
                                    <select name="treatment_provided" id="treatment_provided" class="form-select" required>
                                        <option value="Individual Therapy">Individual Therapy</option>    
                                        <option value="Group Therapy">Group Therapy</option>    
                                        <option value="Early Intervention">Early Intervention</option>    
                                        <option value="Behaviour Management">Behaviour Management</option>    
                                    </select>
                                    <div class="valid-feedback">Looks good!</div>
                                </div>
                            </div>
                            <div>&nbsp;</div>
                            <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Bil</th>
                                        <th>item</th>
                                        <th>Yes</th>
                                        <th>No</th>
                                        <th>Progress Notes</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td rowspan="9">1.0</td>
                                        <th colspan="3">S-Subjective Assesment</th>
                                        <td data-label="Progress Notes" rowspan="9"><textarea name="remark1" 
                                            cols="30" rows="9" class="form-control">Positive progress slowly increase</textarea></td>
                                    </tr><tr>
                                        <td data-label="Item">Enter : by his/ her self</td>
                                        <td data-label="Yes"><input type="radio" class="form-check-input" name="ques1_1" value="1"></td>
                                        <td data-label="No"><input type="radio" class="form-check-input" name="ques1_1" value="0"></td>
                                    </tr><tr>
                                        <td data-label="Item">With prompting</td>
                                        <td data-label="Yes"><input type="radio" class="form-check-input" name="ques1_2" value="1"></td>
                                        <td data-label="No"><input type="radio" class="form-check-input" name="ques1_2" value="0"></td>
                                    </tr>
                                    <tr>
                                        <td data-label="Item">Difficulties separate with parents</td>
                                        <td data-label="Yes"><input type="radio" class="form-check-input" name="ques1_3" value="1"></td>
                                        <td data-label="No"><input type="radio" class="form-check-input" name="ques1_3" value="0"></td>
                                    </tr>
                                    <tr>
                                        <td data-label="Item">With crying and refuse</td>
                                        <td data-label="Yes"><input type="radio" class="form-check-input" name="ques1_4" value="1"></td>
                                        <td data-label="No"><input type="radio" class="form-check-input" name="ques1_4" value="0"></td>
                                    </tr>
                                    <tr>
                                        <td data-label="Item">Greeting with prompt</td>
                                        <td data-label="Yes"><input type="radio" class="form-check-input" name="ques1_5" value="1"></td>
                                        <td data-label="No"><input type="radio" class="form-check-input" name="ques1_5" value="0"></td>
                                    </tr>
                                    <tr>
                                        <td data-label="Item">Greeting by him/herself</td>
                                        <td data-label="Yes"><input type="radio" class="form-check-input" name="ques1_6" value="1"></td>
                                        <td data-label="No"><input type="radio" class="form-check-input" name="ques1_6" value="0"></td>
                                    </tr>
                                    <tr>
                                        <td data-label="Item">Mute</td>
                                        <td data-label="Yes"><input type="radio" class="form-check-input" name="ques1_7" value="1"></td>
                                        <td data-label="No"><input type="radio" class="form-check-input" name="ques1_7" value="0"></td>
                                    </tr>
                                    <tr>
                                        <td data-label="Item">Refuse to enter</td>
                                        <td data-label="Yes"><input type="radio" class="form-check-input" name="ques1_8" value="1"></td>
                                        <td data-label="No"><input type="radio" class="form-check-input" name="ques1_8" value="0"></td>
                                    </tr>
                                    <tr><td colspan="5">&nbsp;</td></tr>
                        
                                    <tr>
                                        <td rowspan="26">2.0</td>
                                        <th colspan="3">O-Objective Assesment</th>
                                        <td data-label="Progress Notes" rowspan="26"><textarea name="remark2" 
                                            cols="30" rows="26" class="form-control">Positive progress slowly increase</textarea></td>
                                    </tr>
                                    <tr>
                                        <th colspan="3">2.1 Moto & Praxis Skills</th>
                                    </tr><tr>
                                        <td data-label="Item">Range of Motion (upper/lower extrem)</td>
                                        <td data-label="Yes"><input type="radio" class="form-check-input" name="ques2_1" value="1"></td>
                                        <td data-label="No"><input type="radio" class="form-check-input" name="ques2_1" value="0"></td>
                                    </tr><tr>
                                        <td data-label="Item">Muscle Tone</td> 
                                        <td data-label="Yes"><input type="radio" class="form-check-input" name="ques2_2" value="1"></td>
                                        <td data-label="No"><input type="radio" class="form-check-input" name="ques2_2" value="0"></td>
                                    </tr><tr>
                                        <td data-label="Item">Muscle Strength</td>
                                        <td data-label="Yes"><input type="radio" class="form-check-input" name="ques2_3" value="1"></td>
                                        <td data-label="No"><input type="radio" class="form-check-input" name="ques2_3" value="0"></td>
                                    </tr><tr>
                                        <td data-label="Item">Muscle Endurance</td>
                                        <td data-label="Yes"><input type="radio" class="form-check-input" name="ques2_4" value="1"></td>
                                        <td data-label="No"><input type="radio" class="form-check-input" name="ques2_4" value="0"></td>
                                    </tr><tr>
                                        <td data-label="Item">Joint Mobility</td>
                                        <td data-label="Yes"><input type="radio" class="form-check-input" name="ques2_5" value="1"></td>
                                        <td data-label="No"><input type="radio" class="form-check-input" name="ques2_5" value="0"></td>
                                    </tr><tr>
                                        <td data-label="Item">Trunk control & balance</td>
                                        <td data-label="Yes"><input type="radio" class="form-check-input" name="ques2_6" value="1"></td>
                                        <td data-label="No"><input type="radio" class="form-check-input" name="ques2_6" value="0"></td>
                                    </tr><tr>
                                        <th colspan="3">Gross Motor Function</th>
                                    </tr><tr>
                                        <td data-label="Item">a. Standing</td>
                                        <td data-label="Yes"><input type="radio" class="form-check-input" name="ques2_7a" value="1"></td>
                                        <td data-label="No"><input type="radio" class="form-check-input" name="ques2_7a" value="0"></td>
                                    </tr><tr>
                                        <td data-label="Item">b. Crawling</td>
                                        <td data-label="Yes"><input type="radio" class="form-check-input" name="ques2_7b" value="1"></td>
                                        <td data-label="No"><input type="radio" class="form-check-input" name="ques2_7b" value="0"></td>
                                    </tr><tr>
                                        <td data-label="Item">c. Walking</td>
                                        <td data-label="Yes"><input type="radio" class="form-check-input" name="ques2_7c" value="1"></td>
                                        <td data-label="No"><input type="radio" class="form-check-input" name="ques2_7c" value="0"></td>
                                    </tr><tr>
                                        <td data-label="Item">d. Jumping</td>
                                        <td data-label="Yes"><input type="radio" class="form-check-input" name="ques2_7d" value="1"></td>
                                        <td data-label="No"><input type="radio" class="form-check-input" name="ques2_7d" value="0"></td>
                                    </tr><tr>
                                        <td data-label="Item">e. Broad Jump</td>
                                        <td data-label="Yes"><input type="radio" class="form-check-input" name="ques2_7e" value="1"></td>
                                        <td data-label="No"><input type="radio" class="form-check-input" name="ques2_7e" value="0"></td>
                                    </tr><tr>
                                        <td data-label="Item">f. Kick Ball</td>
                                        <td data-label="Yes"><input type="radio" class="form-check-input" name="ques2_7f" value="1"></td>
                                        <td data-label="No"><input type="radio" class="form-check-input" name="ques2_7f" value="0"></td>
                                    </tr><tr>
                                        <td data-label="Item">g. Throw Ball</td>
                                        <td data-label="Yes"><input type="radio" class="form-check-input" name="ques2_7g" value="1"></td>
                                        <td data-label="No"><input type="radio" class="form-check-input" name="ques2_7g" value="0"></td>
                                    </tr><tr>
                                        <th colspan="3">Fine Motor Function</th>    
                                    </tr><tr>
                                        <td data-label="Item">a. Grasp & release</td>
                                        <td data-label="Yes"><input type="radio" class="form-check-input" name="ques2_8a" value="1"></td>
                                        <td data-label="No"><input type="radio" class="form-check-input" name="ques2_8a" value="0"></td>
                                    </tr><tr>
                                        <td data-label="Item">b. Reaching</td>
                                        <td data-label="Yes"><input type="radio" class="form-check-input" name="ques2_8b" value="1"></td>
                                        <td data-label="No"><input type="radio" class="form-check-input" name="ques2_8b" value="0"></td>
                                    </tr><tr>
                                        <td data-label="Item">c. Put block in a cup</td>
                                        <td data-label="Yes"><input type="radio" class="form-check-input" name="ques2_8c" value="1"></td>
                                        <td data-label="No"><input type="radio" class="form-check-input" name="ques2_8c" value="0"></td>
                                    </tr><tr>
                                        <td data-label="Item">d. Scribbles</td>
                                        <td data-label="Yes"><input type="radio" class="form-check-input" name="ques2_8d" value="1"></td>
                                        <td data-label="No"><input type="radio" class="form-check-input" name="ques2_8d" value="0"></td>
                                    </tr><tr>
                                        <td data-label="Item">e. Tower of cubes</td>
                                        <td data-label="Yes"><input type="radio" class="form-check-input" name="ques2_8e" value="1"></td>
                                        <td data-label="No"><input type="radio" class="form-check-input" name="ques2_8e" value="0"></td>
                                    </tr><tr>
                                        <td data-label="Item">f. Mature pencil grasping</td>
                                        <td data-label="Yes"><input type="radio" class="form-check-input" name="ques2_8f" value="1"></td>
                                        <td data-label="No"><input type="radio" class="form-check-input" name="ques2_8f" value="0"></td>
                                    </tr><tr>
                                        <td data-label="Item">g. Immature pencil grasping</td>
                                        <td data-label="Yes"><input type="radio" class="form-check-input" name="ques2_8g" value="1"></td>
                                        <td data-label="No"><input type="radio" class="form-check-input" name="ques2_8g" value="0"></td>
                                    </tr><tr>
                                        <td data-label="Item">h. Imitate vertical line</td>
                                        <td data-label="Yes"><input type="radio" class="form-check-input" name="ques2_8h" value="1"></td>
                                        <td data-label="No"><input type="radio" class="form-check-input" name="ques2_8h" value="0"></td>
                                    </tr><tr>
                                        <td data-label="Item">i. Copying</td>
                                        <td data-label="Yes"><input type="radio" class="form-check-input" name="ques2_8i" value="1"></td>
                                        <td data-label="No"><input type="radio" class="form-check-input" name="ques2_8i" value="0"></td>
                                    </tr>
                                    <tr><td colspan="5">&nbsp;</td></tr>
                        
                                    <tr>
                                        <td rowspan="8">3.0</td>
                                        <th colspan="3">Sensory Regulation Skills</th>
                                        <td data-label="Progress Notes" rowspan="8"><textarea name="remark3" 
                                            cols="30" rows="8" class="form-control">Positive progress slowly increase</textarea></td>
                                    </tr>
                                    <tr>
                                        <td data-label="Item">Tacticle</td>
                                        <td data-label="Yes"><input type="radio" class="form-check-input" name="ques3_1" value="1"></td>
                                        <td data-label="No"><input type="radio" class="form-check-input" name="ques3_1" value="0"></td>
                                    </tr><tr>
                                        <td data-label="Item">Auditary</td>
                                        <td data-label="Yes"><input type="radio" class="form-check-input" name="ques3_2" value="1"></td>
                                        <td data-label="No"><input type="radio" class="form-check-input" name="ques3_2" value="0"></td>
                                    </tr><tr>
                                        <td data-label="Item">Visual</td>
                                        <td data-label="Yes"><input type="radio" class="form-check-input" name="ques3_3" value="1"></td>
                                        <td data-label="No"><input type="radio" class="form-check-input" name="ques3_3" value="0"></td>
                                    </tr><tr>
                                        <td data-label="Item">Olfactory</td>
                                        <td data-label="Yes"><input type="radio" class="form-check-input" name="ques3_4" value="1"></td>
                                        <td data-label="No"><input type="radio" class="form-check-input" name="ques3_4" value="0"></td>
                                    </tr><tr>
                                        <td data-label="Item">Gustatory</td>
                                        <td data-label="Yes"><input type="radio" class="form-check-input" name="ques3_5" value="1"></td>
                                        <td data-label="No"><input type="radio" class="form-check-input" name="ques3_5" value="0"></td>
                                    </tr><tr>
                                        <td data-label="Item">Vestibular</td>
                                        <td data-label="Yes"><input type="radio" class="form-check-input" name="ques3_6" value="1"></td>
                                        <td data-label="No"><input type="radio" class="form-check-input" name="ques3_6" value="0"></td>
                                    </tr><tr>
                                        <td data-label="Item">Proprioception</td>
                                        <td data-label="Yes"><input type="radio" class="form-check-input" name="ques3_7" value="1"></td>
                                        <td data-label="No"><input type="radio" class="form-check-input" name="ques3_7" value="0"></td>
                                    </tr>
                                    <tr><td colspan="5">&nbsp;</td></tr>
                                    
                                    <tr>
                                        <td rowspan="11">4.0</td>
                                        <th colspan="3">4.1 Cognitive Regulation Skill</th>
                                        <td data-label="Progress Notes" rowspan="11"><textarea name="remark4" 
                                            cols="30" rows="11" class="form-control">Positive progress slowly increase</textarea></td>
                                    </tr>
                                    <tr>
                                        <th colspan="3">Basic Concept</th>
                                    </tr>
                                    <tr>
                                        <td data-label="Item">a. Alphabet</td>
                                        <td data-label="Yes"><input type="radio" class="form-check-input" name="ques4_1a" value="1"></td>
                                        <td data-label="No"><input type="radio" class="form-check-input" name="ques4_1a" value="0"></td>
                                    </tr><tr>
                                        <td data-label="Item">b. Numbers</td>
                                        <td data-label="Yes"><input type="radio" class="form-check-input" name="ques4_1b" value="1"></td>
                                        <td data-label="No"><input type="radio" class="form-check-input" name="ques4_1b" value="0"></td>
                                    </tr><tr>
                                        <td data-label="Item">c. Shapes</td>
                                        <td data-label="Yes"><input type="radio" class="form-check-input" name="ques4_1c" value="1"></td>
                                        <td data-label="No"><input type="radio" class="form-check-input" name="ques4_1c" value="0"></td>
                                    </tr><tr>
                                        <td data-label="Item">d. Colors</td>
                                        <td data-label="Yes"><input type="radio" class="form-check-input" name="ques4_1d" value="1"></td>
                                        <td data-label="No"><input type="radio" class="form-check-input" name="ques4_1d" value="0"></td>
                                    </tr><tr>
                                        <td data-label="Item">Memory function</td>
                                        <td data-label="Yes"><input type="radio" class="form-check-input" name="ques4_2" value="1"></td>
                                        <td data-label="No"><input type="radio" class="form-check-input" name="ques4_2" value="0"></td>
                                    </tr><tr>
                                        <td data-label="Item">Attention</td>
                                        <td data-label="Yes"><input type="radio" class="form-check-input" name="ques4_3" value="1"></td>
                                        <td data-label="No"><input type="radio" class="form-check-input" name="ques4_3" value="0"></td>
                                    </tr><tr>
                                        <td data-label="Item">Concentration</td>
                                        <td data-label="Concentration" colspan="2"><select class="form-select" style="width: 120px" name="ques4_4" id="ques4_4">
                                            <option value="Good">Good</option>    
                                            <option value="Fair">Fair</option>    
                                            <option value="Poor">Poor</option>    
                                        </select></td>
                                    </tr><tr>
                                        <td data-label="Item">Problem solving</td>
                                        <td data-label="Problem Solving" colspan="2"><select class="form-select" style="width: 120px" name="ques4_5" id="ques4_5">
                                            <option value="Good">Good</option>    
                                            <option value="Fair">Fair</option>    
                                            <option value="Poor">Poor</option>    
                                        </select></td>
                                    </tr><tr>
                                        <td data-label="Item">Writing skill</td>
                                        <td data-label="Yes"><input type="radio" class="form-check-input" name="ques4_6" value="1"></td>
                                        <td data-label="No"><input type="radio" class="form-check-input" name="ques4_6" value="0"></td>
                                    </tr>
                                    <tr><td colspan="5">&nbsp;</td></tr>
                        
                                    <tr>
                                        <td rowspan="17">5.0</td>
                                        <th colspan="3">5.1 Occupational Performance</th>
                                        <td data-label="Progress Notes" rowspan="17"><textarea name="remark5" 
                                            cols="30" rows="17" class="form-control">Positive progress slowly increase</textarea></td>
                                    </tr><tr>
                                        <th colspan="3">Activity Daily Living (ADL)</th>
                                    </tr>
                                    <tr>
                                        <td data-label="Item">Independent/no helper</td>
                                        <td data-label="Yes"><input type="radio" class="form-check-input" name="ques5_1" value="1"></td>
                                        <td data-label="No"><input type="radio" class="form-check-input" name="ques5_1" value="0"></td>
                                    </tr><tr>
                                        <td data-label="Item">With supervision</td>
                                        <td data-label="With supervision" colspan="2"><select class="form-select" style="width: 120px" name="ques5_2" id="ques5_2">
                                            <option value="All the time">All the time</option>    
                                            <option value="Most of the time">Most of the time</option>    
                                            <option value="Sometimes">Sometimes</option>    
                                        </select></td>
                                    </tr><tr>
                                        <td data-label="Item">Maximum assistance</td>
                                        <td data-label="Yes"><input type="radio" class="form-check-input" name="ques5_3" value="1"></td>
                                        <td data-label="No"><input type="radio" class="form-check-input" name="ques5_3" value="0"></td>
                                    </tr><tr>
                                        <td data-label="Item">Toilet trained</td>
                                        <td data-label="Yes"><input type="radio" class="form-check-input" name="ques5_4" value="1"></td>
                                        <td data-label="No"><input type="radio" class="form-check-input" name="ques5_4" value="0"></td>
                                    </tr><tr>
                                        <th colspan="3">Instrumental Activity Daily Living (IADL)</th>    
                                    </tr><tr>
                                        <td data-label="Item">Money Management</td>
                                        <td data-label="Yes"><input type="radio" class="form-check-input" name="ques5_5" value="1"></td>
                                        <td data-label="No"><input type="radio" class="form-check-input" name="ques5_5" value="0"></td>
                                    </tr><tr>
                                        <td data-label="Item">Time concept</td>
                                        <td data-label="Yes"><input type="radio" class="form-check-input" name="ques5_6" value="1"></td>
                                        <td data-label="No"><input type="radio" class="form-check-input" name="ques5_6" value="0"></td>
                                    </tr><tr>
                                        <th colspan="3">Simple house hold activities</th>   
                                    </tr><tr>
                                        <td data-label="Item">a. Folding clothes</td>
                                        <td data-label="Yes"><input type="radio" class="form-check-input" name="ques5_7a" value="1"></td>
                                        <td data-label="No"><input type="radio" class="form-check-input" name="ques5_7a" value="0"></td>
                                    </tr><tr>
                                        <td data-label="Item">b. Hanging clothes</td>
                                        <td data-label="Yes"><input type="radio" class="form-check-input" name="ques5_7b" value="1"></td>
                                        <td data-label="No"><input type="radio" class="form-check-input" name="ques5_7b" value="0"></td>
                                    </tr><tr>
                                        <td data-label="Item">c. Sweep floor</td>
                                        <td data-label="Yes"><input type="radio" class="form-check-input" name="ques5_7c" value="1"></td>
                                        <td data-label="No"><input type="radio" class="form-check-input" name="ques5_7c" value="0"></td>
                                    </tr><tr>
                                        <th colspan="3">Simple domestic activities</th>    
                                    </tr><tr>
                                        <td data-label="Item">a. Making drinks</td>
                                        <td data-label="Yes"><input type="radio" class="form-check-input" name="ques5_8a" value="1"></td>
                                        <td data-label="No"><input type="radio" class="form-check-input" name="ques5_8a" value="0"></td>
                                    </tr><tr>
                                        <td data-label="Item">b. Prepare simple food</td>
                                        <td data-label="Yes"><input type="radio" class="form-check-input" name="ques5_8b" value="1"></td>
                                        <td data-label="No"><input type="radio" class="form-check-input" name="ques5_8b" value="0"></td>
                                    </tr><tr>
                                        <td data-label="Item">c. Use phone</td>
                                        <td data-label="Yes"><input type="radio" class="form-check-input" name="ques5_8c" value="1"></td>
                                        <td data-label="No"><input type="radio" class="form-check-input" name="ques5_8c" value="0"></td>
                                    </tr>
                                    <tr><td colspan="5">&nbsp;</td></tr>
                                    
                                    <tr>
                                        <td rowspan="9">6.0</td>
                                        <th colspan="3">6.1 Emotional Regulation Skills</th>
                                        <td data-label="Progress Notes" rowspan="9"><textarea name="remark6" 
                                            cols="30" rows="9" class="form-control">Positive progress slowly increase</textarea></td>
                                    </tr><tr>
                                        <th colspan="3">Behaviour</th>
                                    </tr>
                                    <tr>
                                        <td data-label="Item">a. Tempered Tantrum</td>
                                        <td data-label="Yes"><input type="radio" class="form-check-input" name="ques6_1a" value="1"></td>
                                        <td data-label="No"><input type="radio" class="form-check-input" name="ques6_1a" value="0"></td>
                                    </tr><tr>
                                        <td data-label="Item">b. Manipulative</td>
                                        <td data-label="Yes"><input type="radio" class="form-check-input" name="ques6_1b" value="1"></td>
                                        <td data-label="No"><input type="radio" class="form-check-input" name="ques6_1b" value="0"></td>
                                    </tr><tr>
                                        <td data-label="Item">c. Easily distracted</td>
                                        <td data-label="Yes"><input type="radio" class="form-check-input" name="ques6_1c" value="1"></td>
                                        <td data-label="No"><input type="radio" class="form-check-input" name="ques6_1c" value="0"></td>
                                    </tr><tr>
                                        <td data-label="Item">d. Passive</td>
                                        <td data-label="Yes"><input type="radio" class="form-check-input" name="ques6_1d" value="1"></td>
                                        <td data-label="No"><input type="radio" class="form-check-input" name="ques6_1d" value="0"></td>
                                    </tr><tr>
                                        <td data-label="Item">e. Cooperative</td>
                                        <td data-label="Yes"><input type="radio" class="form-check-input" name="ques6_1e" value="1"></td>
                                        <td data-label="No"><input type="radio" class="form-check-input" name="ques6_1e" value="0"></td>
                                    </tr><tr>
                                        <td data-label="Item">f. Isolation</td>
                                        <td data-label="Yes"><input type="radio" class="form-check-input" name="ques6_1f" value="1"></td>
                                        <td data-label="No"><input type="radio" class="form-check-input" name="ques6_1f" value="0"></td>
                                    </tr><tr>
                                        <td data-label="Item">g. Reluctant</td>
                                        <td data-label="Yes"><input type="radio" class="form-check-input" name="ques6_1g" value="1"></td>
                                        <td data-label="No"><input type="radio" class="form-check-input" name="ques6_1g" value="0"></td>
                                    </tr>
                                    <tr><td colspan="5">&nbsp;</td></tr>
                                    
                                    <tr>
                                        <td rowspan="16">7.0</td>
                                        <th colspan="3">7.1 Communication & Social Skills</th>
                                        <td data-label="Progress Notes" rowspan="16"><textarea name="remark7" 
                                            cols="30" rows="16" class="form-control">Positive progress slowly increase</textarea></td>
                                    </tr><tr>
                                        <th colspan="3">Following Instruction</th>
                                    </tr>
                                    <tr>
                                        <td data-label="Item">a. Repetitive prompting</td>
                                        <td data-label="Yes"><input type="radio" class="form-check-input" name="ques7_1a" value="1"></td>
                                        <td data-label="No"><input type="radio" class="form-check-input" name="ques7_1a" value="0"></td>
                                    </tr><tr>
                                        <td data-label="Item">b. Verbal prompting</td>
                                        <td data-label="b. Verbal Prompting" colspan="2"><select class="form-select" style="width: 120px" name="ques7_1b" id="ques7_1b">
                                            <option value="min">min</option>    
                                            <option value="mod">mod</option>    
                                            <option value="max">max</option>    
                                        </select></td>
                                    </tr><tr>
                                        <td data-label="Item">c. Physical prompting</td>
                                        <td data-label="c. Physical prompting" colspan="2"><select class="form-select" style="width: 120px" name="ques7_1c" id="ques7_1c">
                                            <option value="min">min</option>    
                                            <option value="mod">mod</option>    
                                            <option value="max">max</option>    
                                        </select></td>
                                    </tr><tr>
                                        <th colspan="3">Eye contact</th>    
                                    </tr><tr>
                                        <td data-label="Item">a. Person</td>
                                        <td data-label="a. Person" colspan="2"><select class="form-select" style="width: 120px" name="ques7_2a" id="ques7_2a">
                                            <option value="Good">Good</option>    
                                            <option value="Fair">Fair</option>    
                                            <option value="Poor">Poor</option>    
                                        </select></td>
                                    </tr><tr>
                                        <td data-label="Item">b. Object</td>
                                        <td data-label="b. Object" colspan="2"><select class="form-select" style="width: 120px" name="ques7_2b" id="ques7_2b">
                                            <option value="Good">Good</option>    
                                            <option value="Fair">Fair</option>    
                                            <option value="Poor">Poor</option>    
                                        </select></td>
                                    </tr><tr>
                                        <td data-label="Item">Initiate / answer quesi_n</td>
                                        <td data-label="Yes"><input type="radio" class="form-check-input" name="ques7_3" value="1"></td>
                                        <td data-label="No"><input type="radio" class="form-check-input" name="ques7_3" value="0"></td>
                                    </tr><tr>
                                        <td data-label="Item">Verbal Respond</td>
                                        <td data-label="Yes"><input type="radio" class="form-check-input" name="ques7_4" value="1"></td>
                                        <td data-label="No"><input type="radio" class="form-check-input" name="ques7_4" value="0"></td>
                                    </tr><tr>
                                        <td data-label="Item">Voice clarity</td>
                                        <td data-label="Voice clarity" colspan="2"><select class="form-select" style="width: 120px" name="ques7_5" id="ques7_5">
                                            <option value="clear">clear</option>    
                                            <option value="slurred">slurred</option>    
                                            <option value="imitate last vowel sound">imitate last vowel sound</option>    
                                            <option value="no speech">no speech</option>    
                                        </select></td>
                                    </tr><tr>
                                        <td data-label="Item">Facial Expression</td>
                                        <td data-label="Yes"><input type="radio" class="form-check-input" name="ques7_6" value="1"></td>
                                        <td data-label="No"><input type="radio" class="form-check-input" name="ques7_6" value="0"></td>
                                    </tr><tr>
                                        <td data-label="Item">Body language</td>
                                        <td data-label="Yes"><input type="radio" class="form-check-input" name="ques7_7" value="1"></td>
                                        <td data-label="No"><input type="radio" class="form-check-input" name="ques7_7" value="0"></td>
                                    </tr><tr>
                                        <td data-label="Item">Taking turn</td>
                                        <td data-label="Yes"><input type="radio" class="form-check-input" name="ques7_8" value="1"></td>
                                        <td data-label="No"><input type="radio" class="form-check-input" name="ques7_8" value="0"></td>
                                    </tr><tr>
                                        <td data-label="Item">Sharing</td>
                                        <td data-label="Yes"><input type="radio" class="form-check-input" name="ques7_9" value="1"></td>
                                        <td data-label="No"><input type="radio" class="form-check-input" name="ques7_9" value="0"></td>
                                    </tr><tr>
                                        <td data-label="Item">Stay in grouping</td>
                                        <td data-label="Yes"><input type="radio" class="form-check-input" name="ques7_10" value="1"></td>
                                        <td data-label="No"><input type="radio" class="form-check-input" name="ques7_10" value="0"></td>
                                    </tr>
                                    <tr><td colspan="5">&nbsp;</td></tr>
                        
                                    <tr>
                                        <td>8.0</td>
                                        <td colspan="3">Academic Performance</td>
                                        <td data-label="Item"><select name="ques8_0" id="ques8_0" class="form-control">
                                                <option value="Good">Good</option>
                                                <option value="Average">Average</option>
                                                <option value="Fair">Fair</option>
                                                <option value="Poor">Poor</option>
                                                <option value="Unable to follow">Unable to follow</option>
                                            </select></td>
                                    </tr>
                                </tbody>
                            </table>
                            <br>
                            <table>
                                <tr>
                                    <th style="width:30%">ANALYSIS PROBLEM, SHORT TERM, LONG TERM GOAL</th>
                                    <td><textarea class="form-control" name="analysis" id="analysis" cols="30" rows="10"></textarea></td>
                                </tr>
                                <tr>
                                    <th style="width:30%">Tx. done, Tx PLAN</th>
                                    <td><textarea class="form-control" name="plan" id="plan" cols="30" rows="10"></textarea></td>
                                </tr>
                            </table>
                            
                        </div>
                        <button class="btn btn-primary" type="submit">Submit form</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script src="{{ asset('assets/js/form-validation-custom.js') }}"></script>
@endsection
