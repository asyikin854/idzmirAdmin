@extends('layouts.simple.master-parent')
@section('title', 'Email Application')

@section('css')
@endsection

@section('style')
@endsection

@section('breadcrumb-title')
<h3>Annoucement</h3>
@endsection

@section('breadcrumb-items')
<li class="breadcrumb-item">Announcement</li>
@endsection

@section('content')
<div class="container-fluid">
   <div class="email-wrap">
     <div class="row">
       <div class="col-xl-3 box-col-12">
         <div class="md-sidebar"><a class="btn btn-primary md-sidebar-toggle" href="javascript:void(0)">email filter</a>
           <div class="md-sidebar-aside job-left-aside custom-scrollbar">
             <div class="email-left-aside">
               <div class="card">
                 <div class="card-body">
                   <div class="email-app-sidebar">
                     <div class="media">
                       <div class="media-size-email"><img class="me-3 rounded-circle" src="{{ asset('assets/images/user/user.png') }}" alt=""></div>
                       <div class="media-body">
                         <h6 class="f-w-600">Muhaimin</h6>
                         <hr>
                       </div>
                     </div>
                     <ul class="nav main-menu" role="tablist">
                       <li><a href="#"><span class="title"><i class="icon-folder"></i> All</span></a></li>
                       <li><a href="#"><span class="title"><i class="icon-email"></i> UNREAD</span><span class="badge pull-right">(20)</span></a></li>
                       <li><a href="#"><span class="title"><i class="icon-bell"></i> ALERT</span></a></li>
                     </ul>
                   </div>
                 </div>
               </div>
             </div>
           </div>
         </div>
       </div>
       <div class="col-xl-9 box-col-12">
         <div class="email-right-aside">
           <div class="card email-body">
             <div class="row">
               <div class="col-xl-4 col-md-12 box-md-12 pr-0">
                 <div class="pe-0 b-r-light"></div>
                 <div class="email-top">
                   <div class="row">
                     <div class="col">
                       <h5>All</h5>
                     </div>
                     <div class="col text-end">
                       <div class="dropdown">
                         <button class="btn dropdown-toggle" id="dropdownMenuButton" type="button" data-bs-toggle="dropdown" aria-expanded="false">More</button>
                         <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton"><a class="dropdown-item" href="#">Action</a><a class="dropdown-item" href="#">Another action</a><a class="dropdown-item" href="#">Something else here</a></div>
                       </div>
                     </div>
                   </div>
                 </div>
                 <div class="inbox">
                   <div class="media">
                     <div class="media-body">
                       <h6>Welcome <br><small><span>(15</span> July <span>2018)</span></small></h6>
                       <p>Greetings and introduction for our customer</p>
                     </div>
                   </div>
                   <div class="media active">
                     <div class="media-body">
                       <h6>Payment Successful <br><small><span>(20</span> January)</small></h6>
                       <p>First program payment</p>
                     </div>
                   </div>
                   <div class="media">
                     <div class="media-body">
                       <h6>Session Skills Update <br> <small><span>(20</span> Aug<span> 2018)</span></small></h6>
                       <p>First evaluation skills update</p>
                     </div>
                   </div>
                 </div>
               </div>
               <div class="col-xl-8 col-md-12 box-md-12 pl-0">
                 <div class="email-right-aside">
                   <div class="email-body radius-left">
                     <div class="ps-0">
                       <div class="tab-content">
                         <div class="tab-pane fade" id="pills-darkhome" role="tabpanel" aria-labelledby="pills-darkhome-tab">
                           <div class="email-compose">
                             <div class="email-top compose-border">
                               <div class="row">
                                 <div class="col-sm-8 xl-50">
                                   <h4 class="mb-0">New Message</h4>
                                 </div>
                                 <div class="col-sm-4 btn-middle xl-50">
                                   <button class="btn btn-primary btn-block btn-mail text-center mb-0 mt-0 w-100" type="button"><i class="fa fa-paper-plane me-2"></i> SEND</button>
                                 </div>
                               </div>
                             </div>
                             <div class="email-wrapper">
                               <form class="theme-form">
                                 <div class="mb-3">
                                   <label class="col-form-label pt-0" for="exampleInputEmail1">To</label>
                                   <input class="form-control" id="exampleInputEmail1" type="email">
                                 </div>
                                 <div class="mb-3">
                                   <label for="exampleInputPassword1">Subject</label>
                                   <input class="form-control" id="exampleInputPassword1" type="text">
                                 </div>
                                 <div>
                                   <label class="text-muted">Message</label>
                                   <textarea id="text-box" name="text-box" cols="10" rows="2">                                                            </textarea>
                                 </div>
                               </form>
                             </div>
                           </div>
                         </div>
                         <div class="tab-pane fade active show" id="pills-darkprofile" role="tabpanel" aria-labelledby="pills-darkprofile-tab">
                           <div class="email-content">
                             <div class="email-top">
                               <div class="row">
                                 <div class="col-md-6 xl-100 col-sm-12">
                                   <div class="media"><img class="me-3 rounded-circle" src="{{ asset('assets/images/logo/logoidzmir.png') }}" style="width: 50px" alt="">
                                     <div class="media-body">
                                       <h6>Admin  <small><span>(20</span> January) <span>6:00</span> AM</small></h6>
                                       <p>Payment status notice</p>
                                     </div>
                                   </div>
                                 </div>
                                 <div class="col-md-6 col-sm-12 xl-100">
                                   <div class="float-end d-flex">
                                    
                                   </div>
                                 </div>
                               </div>
                             </div>
                             <div class="email-wrapper">
                               <p>Hello</p>
                               <p>Dear Sir Good Morning,</p>
                               <h5>Payment Was Successful</h5>
                               <p class="m-b-20">We have accepted your payment for Full-Assesment program.</p>
                               <p>We will assign therapist to for your child program shortly. We will notify you once therapist has been assigned to your program.</p>
                               <hr>
                               <div class="d-inline-block">
                                 <h6 class="text-muted"><i class="icofont icofont-clip"></i> ATTACHMENTS</h6><a class="text-muted text-end right-download" href="#"><i class="fa fa-long-arrow-down me-2"></i>Download All</a>
                                 <div class="clearfix"></div>
                               </div>
                               <div class="attachment">
                                 <ul class="list-inline">
                                   <li class="list-inline-item"><img class="img-fluid" src="{{ asset('assets/images/email/1.jpg') }}" alt=""><br>Receipt</li>
                                 </ul>
                               </div>
                               <hr>
                               <div class="action-wrapper">
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
       </div>
     </div>
   </div>
 </div>
</div>
@endsection

@section('script')
<script src="{{asset('assets/js/editor/ckeditor/ckeditor.js')}}"></script>
<script src="{{asset('assets/js/editor/ckeditor/adapters/jquery.js')}}"></script>
<script src="{{asset('assets/js/email-app.js')}}"></script>
@endsection