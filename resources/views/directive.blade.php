@extends('layout.link')
@extends('layout.navbar')

@section('title', 'Directive')
@section('TD', 'Directive')
@section('container')
    <div class="contaner">
        <div class="col-10">
            <h1 class="m-3">Hello, ujep</h1>

            @for ($i = 0; $i < 10; $i++)
                <h1 class="m-3 h6">Hello, ujep {{ $id }}</h1>
            @endfor

        </div>
    </div>
@endsection

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
  </body>
</html>
