@extends('master')
@section('title', 'Halaman Utama Portal - Kabar Burung')
@section('body')
<h1>HAH? LU GK SUKA HINDIA ?</h1>
<table border="1">
    <thead>
        {{-- <tr>
            <th>No</th>
            <th>Judul</th>
            <th>Published</th>
            <th>Tanggal</th>
            <th>Isi</th>
        </tr> --}}
    </thead>
    <tbody>
        <?php $no=1 ?>
        @foreach (App\berita::all() as $berita)
        @if($berita->published == 'yes')
        <h3><a href="">{{$berita->judul}}</a></h3>
        <hr>
        <p style="margin: 1px">{{$berita->created_at->format('M d, Y')}}</p>
        <hr>
        <p style="margin-top: 40px; margin-bottom: 5px;">{{$berita->isi}}</p>
        <hr>
        @endif
        {{-- <tr>
            <td>{{ $no++ }}</td>
            <td>{{ $berita->judul }}</td>
            <td>{{ $berita->published }}</td>
            <td>{{ $berita->created_at->diffForHumans()}}</td>
            <td>{{ $berita->isi}}</td>
        </tr> --}}
        @endforeach
    </tbody>
</table>
@endsection
