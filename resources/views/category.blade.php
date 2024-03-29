@extends('layouts.master')
@section('title', 'indiaoutspeak - News Portal')
@section('desc', 'indiaoutspeak - News Portal')
@section('keywords', 'indiaoutspeak - News Portal')
@section('content')
    {{-- @livewire('frontend.category.category-top-add') --}}
        {{-- @livewire('frontend.homepage.home-top-add') --}}

    <!-- Other category page content -->
    @livewire('frontend.category.view-category' ,['id' =>$id ])
@stop