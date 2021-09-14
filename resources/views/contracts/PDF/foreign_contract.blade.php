@extends('contracts.PDF.layouts.contract-layout')
@section('contract_content')
    <div class="container">
        @include('contracts.PDF.parts.header')
        <h2>Name: {{$name}}</h2>
        <h2>Last Name: {{$last_name}}</h2>
    </div>
@endsection
