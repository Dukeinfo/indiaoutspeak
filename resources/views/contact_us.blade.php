
{{-- ======================== --}}
@extends('layouts.master')
@section('title', 'indiaoutspeak - Contact -us')
@section('desc', 'indiaoutspeak - Contact-us News Portal')
@section('keywords', 'indiaoutspeak - Contact-us News Portal')
@section('content')


<section class="p-b-70 p-t-10">

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10 col-lg-8 p-b-30">
                <div class="card border-0 shadow-sm">
                    <div class="card-body">
          
                        <div class="">
                            <!-- Blog Detail -->
                            <div class="p-b-70">
                                <h3 class="f1-l-3 cl2 p-b-16 respon2 text-center">
                                   Contact us

                                </h3>

                                <h3  class="f1-l-3 cl2 p-b-16 respon2 text-center">    Have any ?Feel Free to Reach Us</h3>
                           
                                
                                @livewire('frontend.contact.contactus')
                   


                              
                            </div>

                        </div>
                    </div>
                </div>

            

            </div>

            <!-- Sidebar -->
            @livewire('frontend.innerpage.inner-page-right-add')
         
        </div>


    </div>
</section>


@stop