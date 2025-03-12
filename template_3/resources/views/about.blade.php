@extends('layouts.masterlayout')

@section('content')
  <h2>about Page</h2>
  {{-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti, aspernatur.</p> --}}
  @verbatim
    {{}}
  @endverbatim
@endsection

@section('title')
  about
@endsection

@push('scripts')
  var message = "Hello World";
@endpush