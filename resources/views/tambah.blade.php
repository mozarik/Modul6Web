@extends('master')
@section('title', 'Halaman Utama Portal - Kabar Burung')
@section('body')
<h1>Halaman Tambah Berita</h1>
<form action="/berita/tambah/store" method="POST">
    @csrf
    <label for="judul">Judul : </label>
    <input type="text" id="judul" name="judul">
    <br>
    <br>
    <label for="isi">Isi : </label>
    <textarea name="isi" id="isi" rows="5"></textarea>
    <br>
    <br>
    <label for="published">Published : </label>
    <select name="published" id="published">
        <option value="yes">Yes</option>
        <option value="no">No</option>
    </select>
    <br>
    <br>
    <button type="submit">Tambahkan</button>
</form>
@endsection
