@extends('app')
@section('style')

@endsection

@section('content')
    @include('app.empresa.restore.agregar')
@endsection

@section('script')
<script>
    var app = new Vue({
        el: "#registrar_cliente",
        data: {
            image: {},

        },
        methods: {
            loadImage: function () {
                var output = document.getElementById('preview');
                output.src = URL.createObjectURL(event.target.files[0]);
                this.image = event.target.files[0];
                console.log(output.src);
            },
        }
    });
  

</script>
@endsection
