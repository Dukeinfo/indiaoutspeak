@extends('layouts.master')
@section('title', 'indiaoutspeak - Archive')
@section('desc', 'indiaoutspeak - Archive News Portal')
@section('keywords', 'indiaoutspeak -  Archive News Portal')
@section('content')
@livewire('frontend.archive.view-archive-news' , ['id' => $id])
@stop