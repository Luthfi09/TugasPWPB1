@extends('layouts.app')
@section('title', 'Post Edit')
@section('content')
<div class="wrapper">
  <h1>Edit Post</h1>
  
  @if (session('success'))
  <div class="alert-success">
    <p>{{ session('success') }}</p>
  </div>
  @endif
  
  @if ($errors->any())
  <div class="alert-danger">
    <ul>
      @foreach ($errors->all() as $error)
      <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
  @endif
  
  
    <input name="judul" value="{{ $post->judul }}" type="text" placeholder="Judul..."> 
    <input name="author" value="{{ $post->author }}" type="text" placeholder="Author...">
    <input name="penerbit" value="{{ $post->penerbit }}" type="text" placeholder="Penerbit..."> 
    <input name="synopsis" value="{{ $post->synopsis }}" type="textarea" placeholder="Synopsis..."> 

  <a href="http://localhost:8000/posts" style="color:black" >Kembali</a> 
</div>
@endsection
