@extends('layouts.app')

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
                         <li class="breadcrumb-item active">
                          Details
                      </li>
                     </ol>
                 </nav>
             </div>
         </div>
        <div class="row">
         <div class="col-lg-8 pl-lg-0">
             <div class="card card-details">
                 <h1>Nusa Peninda</h1>
                 <p>Republic of Indonesia</p>
                 <div class="gallery">
                     <div class="xzoom-container">
                         <img
                             src="frontend/images/details.jpg"
                             class="xzoom"
                             id="xzoom-default"
                             xoriginal="frontend/images/details.jpg">
                     </div>
                     <div class="xzoom-thumbs">
                         <a href="frontend/images/details.jpg">
                         <img
                             src="frontend/images/details.jpg"
                             class="xzoom-gallery"
                             width="120"
                             xpreview="frontend/images/details.jpg">
                         </a>
                         <a href="frontend/images/details.jpg">
                             <img
                                 src="frontend/images/details.jpg"
                                 class="xzoom-gallery"
                                 width="120"
                                 xpreview="frontend/images/details.jpg">
                             </a>
                             <a href="frontend/images/details.jpg">
                         <img
                             src="frontend/images/details.jpg"
                             class="xzoom-gallery"
                             width="120"
                             xpreview="frontend/images/details.jpg">
                         </a>
                         <a href="frontend/images/details.jpg">
                             <img
                                 src="frontend/images/details.jpg"
                                 class="xzoom-gallery"
                                 width="120"
                                 xpreview="frontend/images/details.jpg">
                             </a>
                             <a href="frontend/images/details.jpg">
                                 <img
                                     src="frontend/images/details.jpg"
                                     class="xzoom-gallery"
                                     width="120"
                                     xpreview="frontend/images/details.jpg">
                                 </a>
                     </div>
                 </div>
                 <h2>Tentang Wisata</h2>
             <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere architecto corrupti incidunt tenetur nemo quis quia distinctio aut nostrum ducimus, minus delectus veniam at magni maiores similique laudantium debitis unde.</p>
             <p>
                 Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quis repellat soluta, perferendis modi sit veniam neque
             </p>
             <div class="features row">
                 <div class="col-md-4"><img class="features-image" src="frontend/images/ic.ticket.png" alt="">
                     <div class="description">
                         <h3>Featured Event</h3>
                         <p>Tari Kecak</p>
                     </div>
                 </div>
                 <div class="col-md-4 border-left"><img src="frontend/images/ic.languange.png" alt="" class="features-image">
                     <div class="description">
                         <h3>Languange</h3>
                         <p>Bahasa Indonesia</p>
                     </div>
                 </div>
                 <div class="col-md-4 border-left"><img src="frontend/images/ic.foods.png" alt="" class="features-image">
                     <div class="description">
                         <h3>Foods</h3>
                         <p>Local Foods</p>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     <div class="col-lg-4">
         <div class="card card-details card-right">
             <h2>Member are going</h2>
             <div class="members my-2">
             <img src="frontend/images/member-2.png" class="member-image mr-1">
             <img src="frontend/images/member-2.png" class="member-image mr-1">
             <img src="frontend/images/member-2.png" class="member-image mr-1">
             <img src="frontend/images/member-2.png" class="member-image mr-1">
             <img src="frontend/images/member-5.png" class="member-image mr-1">
             </div>
             <hr/>
             <h2>Trip Informations</h2>
             <table class="trip-information">
                 <tr>
                     <td width='50%'>Duration</td>
                     <td width='50%' class="text-right">
                        4 D
                     </td>
                 </tr>
                 <tr>
                     <td width='50%'>Type</td>
                     <td width='50%' class="text-right">
                        Open Trip
                     </td>
                 </tr>
                 <tr>
                     <td width='50%'>Price</td>
                     <td width='50%' class="text-right">
                     $80,00 / person
                     </td>
                 </tr>
                 <tr>
                     <td width='50%'>Date of Depature</td>
                     <td width='50%' class="text-right">
                        22 Aug 2019
                     </td>
                 </tr>
             </table>
     </div>
     <div class="join-container">
     <a href="{{route('checkout')}}" class="btn btn-block btn-join-now mt-3 py-2">
             Join Now
         </a>
      </div>
  </div>
 </div>
 </div>
    </section>
</main>
@endsection

@push('prepend-styles')
<link rel="stylesheet" href="{{url('frontend/libraries/xzoom/xzoom.css')}}">
@endpush
@push('addon-script')
<script src="{{('frontend/libraries/xzoom/xzoom.min.js')}}"></script>
<script>
    $(document).ready(function(){
        $('.xzoom, .xzoom-gallery').xzoom({
            zoomWidht  :500,
            title      :false,
            tint       :'#333',
            xoffset    : 15

        })
    })
</script>
@endpush
