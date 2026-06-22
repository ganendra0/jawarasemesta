@extends('layouts.app')

@section('content')
    <x-hero />
    <x-about />
    <x-services />
    <x-why-choose-us />
    <x-portfolio :portfolios="$portfolios" />
    <x-clients :clients="$clients" />
    <x-blog :articles="$articles" />
    <x-contact />
@endsection
