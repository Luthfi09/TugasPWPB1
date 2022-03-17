@extends('layouts.app')
@section('title', 'Buat Post Baru')
@section('content')
<div class="wrapper">
  <h1>Buat Post Baru</h1>
  
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
  
  <form method="POST" action="{{ url('posts') }}">
    @csrf
    <input name="judul" type="text" placeholder="Judul..."> 
    <input name="author" type="text" placeholder="Author...">
    <input name="penerbit" type="text" placeholder="Penerbit...">
    <input class=b name="synopsis" type="textarea" placeholder="Synopsis...">
    <button href="http://localhost:8000/posts" class="btn-blue">Submit</button>
  </form><br>
  <a href="http://localhost:8000/posts" style="color:black" >Kembali</a> 
</div>
@endsection