@extends('app')
@section('style')
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
<link rel="stylesheet" href="https://adminlte.io/themes/AdminLTE/dist/css/AdminLTE.min.css">
@endsection

@section('content')
    @include('app.estadisticas.restore.index')
@endsection

@section('script')

@endsection