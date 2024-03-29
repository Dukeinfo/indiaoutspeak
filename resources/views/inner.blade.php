@extends('layouts.master')
@section('title', 'indiaoutspeak - News Portal')
@section('desc', 'indiaoutspeak - News Portal')
@section('keywords', 'indiaoutspeak - News Portal')
@section('content')



{{-- @livewire('frontend.innerpage.inner-page-top-add') --}}
{{-- @livewire('frontend.homepage.home-top-add') --}}


<section class="p-b-70 p-t-10">

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10 col-lg-8 p-b-30">
              @livewire('frontend.innerpage.view-inner-page' ,['newsid' => $newsid ])

             @livewire('frontend.innerpage.inner-page-recommended' ,['newsid' => $newsid ] )

            </div>

            <!-- right Sidebar -->
            @livewire('frontend.innerpage.inner-page-right-add')
            
        </div>


    </div>
</section>


@stop