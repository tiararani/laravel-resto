@extends('template.layout')

@section('content')

<div>
        <form action="/store/" method="post" enctype="multipart/form-data" class="mt-5">
            @csrf
                @error('kategori')
                        <p>{{ $message }}</p>
                @enderror

            <input class="border @error('kategori')
                    border-merah
            @enderror "type="text" name="kategori">

            <input type="file" name="image">

            <input type="submit" name="btn" value="Simpan">
        </form>
</div>

<h1 class="text-2xl font-bold text-ungu">Home</h1>

@foreach ($kategoris as $isi)

    <li> {{ $isi-> kategori}} -- <a href="/store/{{ $isi-> idkategori}}"> Hapus </a> </li>

@endforeach

@endsection