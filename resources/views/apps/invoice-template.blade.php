@extends('layouts.simple.master-parent')
@section('title', 'Invoice')

@section('css')
@endsection

@section('style')
@endsection

@section('breadcrumb-title')
<h3>Billing</h3>
@endsection

@section('breadcrumb-items')
<li class="breadcrumb-item">Billing</li>
@endsection

@section('content')
<div class="container">
   <div class="row">
      <div class="col-sm-12">
         <div class="card">
            <div class="card-body">
               <div class="invoice">
                  <div>
                     <div>
                        <div class="row">
                           <div class="col-sm-6">
                              <div class="media">
                                 <div class="media-left"><img class="media-object img-60" src="{{asset('assets/images/logo/logoidzmir.png')}}" alt="" style="width: 100px"></div>
                                 <div class="media-body m-l-20 text-right">
                                    <h4 class="media-heading">IdzmirKidsHub</h4>
                                    <p>IdzmirKidsHub@gmail.com<br><span>014-414542342</span></p>
                                 </div>
                              </div>
                              <!-- End Info-->
                           </div>
                           <div class="col-sm-6">
                              <div class="text-md-end text-xs-center">
                                 <h3>Invoice #<span class="counter">2</span></h3>
                                 <p>Issued: May<span> 27, 2015</span><br>                                                            Payment Due: June <span>27, 2015</span></p>
                              </div>
                              <!-- End Title-->
                           </div>
                        </div>
                     </div>
                     <hr>
                     <!-- End InvoiceTop-->
                     <div class="row">
                        <div class="col-md-4">
                           <div class="media">
                              <div class="media-left"><img class="media-object rounded-circle img-60" src="{{asset('assets/images/user/1.jpg')}}" alt=""></div>
                              <div class="media-body m-l-20">
                                 <h4 class="media-heading">Muhaimin</h4>
                                 <p>muhaimin@gmail.com<br><span>015-23432423</span></p>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-8">
                           <div class="text-md-end" id="project">
                              <h6>Program</h6>
                              <p>Full-Assesment</p>
                           </div>
                        </div>
                     </div>
                     <!-- End Invoice Mid-->
                     <div>
                        <div class="table-responsive invoice-table" id="table">
                           <table class="table table-bordered table-striped">
                              <tbody>
                                 <tr>
                                    <td class="item">
                                       <h6 class="p-2 mb-0">Program Session</h6>
                                    </td>
                                    <td class="Hours">
                                       <h6 class="p-2 mb-0">Time</h6>
                                    </td>
                                    <td class="Rate">
                                       <h6 class="p-2 mb-0">Date</h6>
                                    </td>
                                 </tr>
                                 <tr>
                                    <td>
                                       <label>Session 1</label>
                                    </td>
                                    <td>
                                       <p class="itemtext">15.00</p>
                                    </td>
                                    <td>
                                       <p class="itemtext">2/2/2023</p>
                                    </td>
                                 </tr>
                                 <tr>
                                    <td>
                                       <label>Session 2</label>
                                    </td>
                                    <td>
                                       <p class="itemtext">10.00</p>
                                    </td>
                                    <td>
                                       <p class="itemtext">4/2/2023</p>
                                    </td>
                                 </tr>
                                 <tr>
                                    <td>
                                       <label>Session 3</label>
                                    </td>
                                    <td>
                                       <p class="itemtext">13.00</p>
                                    </td>
                                    <td>
                                       <p class="itemtext">13/2/2023</p>
                                    </td>
                                 </tr>
                                 <tr>
                                    <td>
                                       <label>Session 4</label>
                                    </td>
                                    <td>
                                       <p class="itemtext">09.00</p>
                                    </td>
                                    <td>
                                       <p class="itemtext">28/2/2024</p>
                                    </td>
                                 </tr>

                                 <tr>
                                    <td colspan="3" class="item">
                                       <h6 class="p-2 mb-0">Additional Session</h6>
                                    </td>
                                 </tr>
                                 <tr>
                                    <td>
                                       <label>none</label>
                                    </td>
                                    <td>
                                       <p class="itemtext">-</p>
                                    </td>
                                    <td>
                                       <p class="itemtext">-</p>
                                    </td>
                                 </tr>
                                 <tr>
                                    <td></td>
                                    <td class="Rate">
                                       <h6 class="mb-0 p-2">Total Session</h6>
                                    </td>
                                    <td class="payment">
                                       <h6 class="mb-0 p-2">4</h6>
                                    </td>
                                 </tr>
                                 <tr>
                                    <td></td>
                                    <td></td>
                                    <td class="payment"><h6 class="mb-0 p-2">RM 600</h6></td>
                                 </tr>
                              </tbody>
                           </table>
                        </div>
                        <!-- End Table-->
                        <div class="row">
                           <div class="col-md-8">
                              <div>
                                 <p class="legal"><strong>Thank you for trusting us!</strong>  Payment is expected within 7 days; please process this invoice within that time to continue our program</p>
                              </div>
                           </div>
                           <div class="col-md-4">
                              <form class="text-end">
                                 <button class="btn btn-success">Proceed to Payment</button>
                              </form>
                           </div>
                        </div>
                     </div>
                     <!-- End InvoiceBot-->
                  </div>
                  <div class="col-sm-12 text-center mt-3">
                     <button class="btn btn btn-primary me-2" type="button" onclick="myFunction()">Print</button>
                     <button class="btn btn-secondary" type="button">Cancel</button>
                  </div>
                  <!-- End Invoice-->
                  <!-- End Invoice Holder-->
                  <!-- Container-fluid Ends-->
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection

@section('script')
<script src="{{asset('assets/js/counter/jquery.waypoints.min.js')}}"></script>
<script src="{{asset('assets/js/counter/jquery.counterup.min.js')}}"></script>
<script src="{{asset('assets/js/counter/counter-custom.js')}}"></script>
<script src="{{asset('assets/js/print.js')}}"></script>
@endsection