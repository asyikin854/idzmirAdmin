@extends('layouts.simple.master-parent')
@section('title', 'Tasks')

@section('css')

@endsection

@section('style')
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/select2.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/date-picker.css')}}">
@endsection

@section('breadcrumb-title')
<h3>Profile</h3>
@endsection

@section('breadcrumb-items')
<li class="breadcrumb-item active">Profile</li>
@endsection

@section('content')
<div class="container-fluid">
   <div class="email-wrap bookmark-wrap">
      <div class="row">
         <div class="col-xl-3 box-col-6">
            <div class="email-left-aside">
               <div class="card">
                  <div class="card-body">
                     <div class="email-app-sidebar left-bookmark task-sidebar">
                        <div class="media">
                           <div class="media-size-email"><img class="me-3 rounded-circle" src="{{ asset('assets/images/user/user.png')}}" alt=""></div>
                           <div class="media-body">
                              @if(isset($parentAccount))
                              <h6 class="f-w-600">{{$parentAccount->username}}</h6>
                              <p>{{$parentAccount->email}}</p>
                              @endif
                           </div>
                        </div>
                        <ul class="nav main-menu" role="tablist">
                           <li class="nav-item">
                              <button class="badge-light-primary btn-block btn-mail w-100" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="me-2" data-feather="check-circle"></i> New Task</button>
                              <div class="modal fade modal-bookmark" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                 <div class="modal-dialog modal-lg" role="document">
                                    <div class="modal-content">
                                       <div class="modal-header">
                                          <h5 class="modal-title" id="exampleModalLabel">Add Task</h5>
                                          <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                                       </div>
                                       <div class="modal-body">
                                          <form class="form-bookmark needs-validation" id="bookmark-form" novalidate="">
                                             <div class="row">
                                                <div class="mb-3 mt-0 col-md-12">
                                                   <label for="task-title">Task Title</label>
                                                   <input class="form-control" id="task-title" type="text" required="" autocomplete="off">
                                                </div>
                                                <div class="mb-3 mt-0 col-md-12">
                                                   <label for="sub-task">Sub task</label>
                                                   <input class="form-control" id="sub-task" type="text" required="" autocomplete="off">
                                                </div>
                                                <div class="mb-3 mt-0 col-md-12">
                                                   <div class="d-flex date-details">
                                                      <div class="d-inline-block">
                                                         <label class="d-block mb-0" for="chk-ani">
                                                         <input class="checkbox_animated" id="chk-ani" type="checkbox">Remind on
                                                         </label>
                                                      </div>
                                                      <div class="d-inline-block">
                                                         <input class="datepicker-here form-control" type="text" data-language="en" placeholder="Date">
                                                      </div>
                                                      <div class="d-inline-block">
                                                         <select class="form-control">
                                                            <option>7:00 am</option>
                                                            <option>7:30 am</option>
                                                            <option>8:00 am</option>
                                                            <option>8:30 am</option>
                                                            <option>9:00 am</option>
                                                            <option>9:30 am</option>
                                                            <option>10:00 am</option>
                                                            <option>10:30 am</option>
                                                            <option>11:00 am</option>
                                                            <option>11:30 am</option>
                                                            <option>12:00 pm</option>
                                                            <option>12:30 pm</option>
                                                            <option>1:00 pm</option>
                                                            <option>2:00 pm</option>
                                                            <option>3:00 pm</option>
                                                            <option>4:00 pm</option>
                                                            <option>5:00 pm</option>
                                                            <option>6:00 pm</option>
                                                         </select>
                                                      </div>
                                                      <div class="d-inline-block">
                                                         <label class="d-block mb-0" for="chk-ani1">
                                                         <input class="checkbox_animated" id="chk-ani1" type="checkbox">notification
                                                         </label>
                                                      </div>
                                                      <div class="d-inline-block">
                                                         <label class="d-block mb-0" for="chk-ani2">
                                                         <input class="checkbox_animated" id="chk-ani2" type="checkbox">Mail
                                                         </label>
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="mb-3 mt-0 col-md-6">
                                                   <select class="js-example-basic-single">
                                                      <option value="task">My Task</option>
                                                   </select>
                                                </div>
                                                <div class="mb-3 mt-0 col-md-6">
                                                   <select class="js-example-disabled-results" id="bm-collection">
                                                      <option value="general">General</option>
                                                   </select>
                                                </div>
                                                <div class="mb-3 col-md-12 my-0">
                                                   <textarea class="form-control" required="" autocomplete="off">  </textarea>
                                                </div>
                                             </div>
                                             <input id="index_var" type="hidden" value="6">
                                             <button class="btn btn-secondary" id="Bookmark" onclick="submitBookMark()" type="submit">Save</button>
                                             <button class="btn btn-primary" type="button" data-bs-dismiss="modal">Cancel</button>
                                          </form>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </li>
                           <li class="nav-item"><span class="main-title">Personal Information</span></li>
                           <hr>
                           <li><a id="pills-created-tab" data-bs-toggle="pill" href="#pills-created" role="tab" aria-controls="pills-created" aria-selected="true"><span class="title">Child Info</span></a></li>
                           <li><a class="show" id="pills-todaytask-tab" data-bs-toggle="pill" href="#pills-todaytask" role="tab" aria-controls="pills-todaytask" aria-selected="false"><span class="title">Father Info</span></a></li>
                           <li><a class="show" id="pills-delayed-tab" data-bs-toggle="pill" href="#pills-delayed" role="tab" aria-controls="pills-delayed" aria-selected="false"><span class="title">Mother Info</span></a></li>
                           <li><a class="show" id="pills-upcoming-tab" data-bs-toggle="pill" href="#pills-upcoming" role="tab" aria-controls="pills-upcoming" aria-selected="false"><span class="title">Others</span></a></li>
                           <li>
                              <hr>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-xl-9 col-md-12 box-col-12">
            <div class="email-right-aside bookmark-tabcontent">
               <div class="card email-body radius-left">
                  <div class="ps-0">
                     <div class="tab-content">
                        <div class="tab-pane fade active show" id="pills-created" role="tabpanel" aria-labelledby="pills-created-tab">
                           <div class="card mb-0">
                              <div class="card-header d-flex">
                                 <h5 class="mb-0">Child Details</h5>
                                 <a href="#"><i class="me-2" data-feather="printer"></i>Print</a>
                              </div>
                              <div class="card-body p-0">
                                 <div class="taskadd">
                                    <div class="table-responsive">
                                       <table class="table table-bordered">
                                          <tr></tr>
                                          <tr>
                                             <th>Full Name</th>
                                             <td>{{$childInfo->child_name}}</td>
                                             <th>IC Number</th>
                                             <td>{{$childInfo->child_ic}}</td>
                                           </tr><tr>
                                             <th>Date of Birth</th>
                                             <td>{{$childInfo->child_dob}}</td>
                                             <th>Nationality</th>
                                              <td>{{$childInfo->child_nationality}}</td>
                                           </tr><tr>
                                              <th>Race</th>
                                              <td>{{$childInfo->child_race}}</td>
                                              <th>Full Address</th>
                                               <td>{{$childInfo->child_address}}, {{$childInfo->child_posscode}} <br>
                                                {{$childInfo->child_city}}</td>
                                           </tr>
                                       </table>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="fade tab-pane" id="pills-todaytask" role="tabpanel" aria-labelledby="pills-todaytask-tab">
                           <div class="card mb-0">
                              <div class="card-header d-flex">
                                 <h6 class="mb-0">Father Details</h6>
                                 <a href="#"><i class="me-2" data-feather="printer"></i>Print</a>
                              </div>
                              <div class="card-body p-0">
                                 <div class="taskadd">
                                    <div class="table-responsive">
                                       <table class="table table-bordered">
                                          <tr></tr>
                                          <tr>
                                             <th>Full Name</th>
                                             <td>{{$fatherInfo->father_name}}</td>
                                             <th>IC Number</th>
                                             <td>{{$fatherInfo->father_ic}}</td>
                                           </tr><tr>
                                             <th>Email</th>
                                             <td>{{$fatherInfo->father_email}}</td>
                                             <th>Phone No.</th>
                                              <td>{{$fatherInfo->father_phone}}</td>
                                           </tr><tr>
                                              <th>Occupation</th>
                                              <td>{{$fatherInfo->father_occ}}</td>
                                              <th>Full Address</th>
                                               <td>{{$fatherInfo->father_address}}, {{$fatherInfo->father_posscode}} <br>
                                                {{$fatherInfo->father_city}}</td>
                                           </tr>
                                       </table>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="fade tab-pane" id="pills-delayed" role="tabpanel" aria-labelledby="pills-delayed-tab">
                           <div class="card mb-0">
                              <div class="card-header d-flex">
                                 <h6 class="mb-0">Mother Details</h6>
                                 <a href="#"><i class="me-2" data-feather="printer"></i>Print</a>
                              </div>
                              <div class="card-body p-0">
                                 <div class="taskadd">
                                    <div class="table-responsive">
                                       <table class="table table-bordered">
                                          <tr></tr>
                                          <tr>
                                             <th>Full Name</th>
                                             <td>{{$motherInfo->mother_name}}</td>
                                             <th>IC Number</th>
                                             <td>{{$motherInfo->mother_ic}}</td>
                                           </tr><tr>
                                             <th>Email</th>
                                             <td>{{$motherInfo->mother_email}}</td>
                                             <th>Phone No.</th>
                                              <td>{{$motherInfo->mother_phone}}</td>
                                           </tr><tr>
                                              <th>Occupation</th>
                                              <td>{{$motherInfo->mother_occ}}</td>
                                              <th>Full Address</th>
                                               <td>{{$motherInfo->mother_address}}, {{$motherInfo->mother_posscode}} <br>
                                                {{$motherInfo->mother_city}}</td>
                                           </tr>
                                       </table>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="fade tab-pane" id="pills-upcoming" role="tabpanel" aria-labelledby="pills-upcoming-tab">
                           <div class="card mb-0">
                              <div class="card-header d-flex">
                                 <h6 class="mb-0">Others</h6>
                                 <a href="#"><i class="me-2" data-feather="printer"></i>Print</a>
                              </div>
                              <div class="card-body p-0">
                                 <div class="taskadd">
                                    @if($package)
                                    <div class="table-responsive">
                                       <table class="table table-bordered">
                                          <tr></tr>
                                          <tr>
                                             <th>Program</th>
                                             <td>{{$package->package_step}} | {{$package->package_name}}</td>
                                             <th>Monthly</th>
                                             <td>RM {{$childSchedules->price}}</td>
                                           </tr>
                                       </table>
                                    </div>
                                    @else
                                    You haven't choose any package yet.
                                  @endif
                                 </div>
                              </div>
                           </div>
                        </div>
                        
                        <div class="modal fade modal-bookmark" id="createtag" tabindex="-1" role="dialog" aria-hidden="true">
                           <div class="modal-dialog modal-lg" role="document">
                              <div class="modal-content">
                                 <div class="modal-header">
                                    <h5 class="modal-title">Create Tag</h5>
                                    <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                                 </div>
                                 <div class="modal-body">
                                    <form class="form-bookmark needs-validation" novalidate="">
                                       <div class="row">
                                          <div class="mb-3 mt-0 col-md-12">
                                             <label>Tag Name</label>
                                             <input class="form-control" type="text" required="" autocomplete="off">
                                          </div>
                                          <div class="mt-0 col-md-12">
                                             <label>Tag color</label>
                                             <input class="form-color d-block" type="color" value="#563d7c">
                                          </div>
                                       </div>
                                       <button class="btn btn-secondary" type="button">Save</button>
                                       <button class="btn btn-primary" type="button" data-bs-dismiss="modal">Cancel</button>
                                    </form>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection

@section('script')
<script src="{{asset('assets/js/datepicker/date-picker/datepicker.js')}}"></script>
<script src="{{asset('assets/js/datepicker/date-picker/datepicker.en.js')}}"></script>
<script src="{{asset('assets/js/datepicker/date-picker/datepicker.custom.js')}}"></script>
<script src="{{asset('assets/js/select2/select2.full.min.js')}}"></script>
<script src="{{asset('assets/js/select2/select2-custom.js')}}"></script>
<script src="{{asset('assets/js/form-validation-custom.js')}}"></script>
<script src="{{asset('assets/js/task/custom.js')}}"></script>
@endsection