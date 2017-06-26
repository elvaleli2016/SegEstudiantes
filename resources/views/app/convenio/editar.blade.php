@extends('app')
@section('style')
    
    <link type="text/css" rel="stylesheet" href="{{URL::asset('plugins/datepicker/datepicker3.css')}}">
@endsection

@section('content')
    @include('app.convenio.restore.editar')
@endsection

@section('script')

@endsection