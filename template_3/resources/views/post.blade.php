@extends('layouts.masterlayout')

@section('content')
  <h2>Post Page</h2>
  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti, aspernatur.</p>
@endsection

@section('sidebar')
  @parent
  <p>This is appended to the master sidebar.</p>
@endsection

@section('title')
  post
@endsection