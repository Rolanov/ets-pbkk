@extends('template')

@section('container')
    <h1>Halaman Rekam Medis</h1>
     @foreach($RekamMedises as $RekamMedis)
        <article class="mb-5 border-bottom pb-3">
            <h3>
                {{ $RekamMedis->id }}              
            </h3>
        </article>
    @endforeach
@endsection