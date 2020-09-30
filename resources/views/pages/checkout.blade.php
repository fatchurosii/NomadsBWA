@extends('layouts.checkout')

@section('title','Detail Travel')

@section('content')
<main>
    <section class="section-details-header">
    </section>
    <section class="section-details-content ml-4">
        <div class="container">
         <div class="row">
             <div class="row p-0">
                 <nav>
                     <ol class="breadcrumb">
                         <li class="breadcrumb-item">
                             Paket Travel
                         </li>
                         <li class="breadcrumb-item">
                          Details
                      </li>
                      <li class="breadcrumb-item active">
                         Checkout
                     </li>
                     </ol>
                 </nav>
             </div>
         </div>
        <div class="row">
         <div class="col-lg-8 pl-lg-0">
             <div class="card card-details">
                 <h1>Who is Going?</h1>
                 <p>Trip to Ubud, Bali, Indonesia</p>
                 <div class="attendee">
                     <table class="table table-responsive-sm text-center">
                         <thead>
                             <tr>
                                 <td>Picture</td>
                                 <td>Name</td>
                                 <td>Nationality</td>
                                 <td>Visa</td>
                                 <td>Passport</td>
                                 <td></td>
                             </tr>
                         </thead>
                         <tbody>
                             <tr>
                                 <td>
                                     <img src="{{url('frontend/images/member-2.png')}}" height="60">
                                 </td>
                                 <td class="align-middle">
                                     Jack
                                 </td>
                                 <td class="align-middle">
                                     CN
                                 </td>
                                 <td class="align-middle">
                                     N/A
                                 </td>
                                 <td class="align-middle">
                                     Active
                                 </td>
                                 <td class="align-middle">
                                     <a href="#">
                                         <img src="{{url('frontend/images/ic_delete.png')}}" alt="">
                                     </a>
                                 </td>
                             </tr>
                                 <tr>
                                 <td>
                                     <img src="{{url('frontend/images/member-2.png')}}" height="60">
                                 </td>
                                 <td class="align-middle">
                                     Sparrow
                                 </td>
                                 <td class="align-middle">
                                     SG
                                 </td>
                                 <td class="align-middle">
                                     30DAY
                                 </td>
                                 <td class="align-middle">
                                     Active
                                 </td>
                                 <td class="align-middle">
                                     <a href="#">
                                         <img src="{{url('frontend/images/ic_delete.png')}}" alt="">
                                     </a>
                                 </td>
                             </tr>
                         </tbody>
                     </table>
                 </div>
                 <div class="member mt-3">
                     <h2>Add Member</h2>
                     <form class="form-inline">
                         <label for="inputUsername" class="sr-only">Name</label>
                         <input
                         type="text"
                         name="inputUsername"
                         class="form-control mb-2 mr-sm-2"
                         id="inputUsername"
                         placeholder="Username">

                         <label for="inputVisa" class="sr-only">Preference</label>
                         <select name="inputVisa" id="" class="custom-select mb-2 mr-sm-2">
                             <option value="VISA">VISA</option>
                             <option value="30 Days">30 Days</option>
                             <option value="N/A">N/A</option>
                         </select>

                         <label for="doePassport" class="sr-only">DOE Passport</label>
                         <div class='input-group date mb-2 mr-sm-2'>
                             <input type='text' class="form-control datepicker" id="doePassport" placeholder="DOE Passport"/>
                         </div>
                         <button type="submit" class="btn btn-add-now mb-2 px-4">
                             Add Now
                         </button>
                     </form>
                     <h3 class="mt-2 mb-0"> NOTE
                         <p class="diclaimer mb-0">
                             You are only able to invite member that has registered in Nomads.
                         </p>
                     </h3>
                 </div>
         </div>
     </div>
     <div class="col-lg-4">
         <div class="card card-details card-right">


             <h2>Checkout Informations</h2>
             <table class="trip-information">
                 <tr>
                     <td width='50%'>Member</td>
                     <td width='50%' class="text-right">
                        2 Person
                     </td>
                 </tr>
                 <tr>
                     <td width='50%'>Additional VISA</td>
                     <td width='50%' class="text-right">
                        $ 190,00
                     </td>
                 </tr>
                 <tr>
                     <td width='50%'> Trip Price</td>
                     <td width='50%' class="text-right">
                     $80,00 / person
                     </td>
                 </tr>
                 <tr>
                     <td width='50%'>Sub Total</td>
                     <td width='50%' class="text-right">
                        $280,00
                     </td>
                 </tr>
                 <tr>
                     <td width='50%'>Total (+Unique)</td>
                     <td width='50%' class="text-right text-total">
                         <span class="text-blue">$279,</span>
                         <span class="text-orange">33</span>
                     </td>
                 </tr>
             </table>
             <hr/>
             <h2>Payment Instruction</h2>
             <p class="payment-instruction">
                 Please complete your payment before to continue the wonderful trip
             </p>
             <div class="bank">
                 <div class="bank-item pb-3">
                     <img src="{{url('frontend/images/ic.bank.png')}}" alt="" class="bank-image">
                     <div class="description">
                         <h3>
                             PT NOMADS ID
                         </h3>
                         <p>
                             0811 8829 8880
                             <br>
                             Bank Central Asia
                         </p>
                     </div>
                     <div class="clearfix"></div>
                 </div>
                 <div class="bank-item pb-3">
                     <img src="{{url('frontend/images/ic.bank.png')}}" alt="" class="bank-image">
                     <div class="description">
                         <h3>
                             PT NOMADS ID
                         </h3>
                         <p>
                             089 8501 8880
                             <br>
                             HSBC
                         </p>
                     </div>
                     <div class="clearfix"></div>
                 </div>
             </div>
     </div>
     <div class="join-container">
         <a href="{{route('checkout-success')}}" class="btn btn-block btn-join-now mt-3 py-2">
             I Have Made Payment
         </a>
      </div>
      <div class="text-center mt-3">
          <a href="{{route('detail')}}" class="text-muted">
              Cancel Booking
          </a>
      </div>
  </div>
 </div>
 </div>
    </section>
</main>
@endsection

@push('prepend-styles')
<link rel="stylesheet" href="{{('frontend/libraries/jquery-ui/jquery-ui.min.css')}}">
<link rel="stylesheet" href="{{('frontend/libraries/gijgo/css/gijgo.css')}}">
@endpush
@push('addon-script')
<script src="{{url('frontend/libraries/jquery-ui/jquery-ui.min.js')}}"></script>
<script src="{{url('frontend/libraries/gijgo/js/gijgo.js')}}"></script>

<script type="text/javascript">
    $(function(){
        $('.datepicker').datepicker({
            uiLibrary   :'bootstrap4',
            icons: {
                rightIcon :'<img src="{{url('frontend/images/ic.date.png')}}"/>'
            }
        });
    });
</script>
@endpush
