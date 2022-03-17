@extends('layouts.app')
@section('title', 'Semua Post')
@section('content')
<div class="wrapper">
<h1 style="text-align: center;">Semua Post</h1>
@if (session('success'))
    <div class="alert-success">
       <p>{{ session('success') }}</p> 
    </div>
@endif
<a href="http://localhost:8000/posts/create" style="color:black" style="border: 1px solid #444" >Tambah Buku</a> <br>
<br>

  <table style="width:100%">
    <thead>
      <tr>
        <th>Judul</th>
        <th>Author</th>
        <th>Penerbit</th>
        <th>Synopsis</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      @foreach ($posts as $post)
      <tr>
        <td style="width: 100px" >{{ $post->judul}}</td>
        <td style="width: 100px" >{{ $post->author}}</td>
        <td style="width: 100px" >{{ $post->penerbit}}</td>
        <td style="width: 100px" >{{ $post->synopsis }}</td>
        <td style="width: 100px">
            <button class="btn-green"><a  href="{{ route('posts.edit', $post->id) }}">Edit</button> <form method="POST" action="{{ url('posts', $post->id ) }}">
            @csrf
            @method('DELETE')
            <button class="btn-red">Hapus</button>
            </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection