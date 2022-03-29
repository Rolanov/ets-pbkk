@extends('template')

@section('container')
<article class="mb-5">
    <h3>{{ $RekamMedis->id }}                   
    </h3>
    {{-- <p> By: <a href="/authors/{{ $article->author->username }}" class="text-decoration-none">{{ $article->author->name }}<a> in <a href="/categories/{{ $article->category->slug }}"class="text-decoration-none">{{ $article->category->name }}</a></p> --}}
    <p>{!! $RekamMedis->KondisiKesehatan !!}</p>
    {{-- <a href="/article"class ="text-decoration-none">Kembali ke halaman artikel</a> --}}
</article>
@endsection