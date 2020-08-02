@extends('layouts.app')
@section('title', $page->title)
@section('content')
  <section class="py-5">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-12 col-md-10 col-lg-8">
          <h1 class="text-center mb-5 text-uppercase font-weight-bold">{{$page->name}}</h1>
          <hr style="border-top: 2px solid #3498db" width="50px" class="mb-5">
          {!! $page->content !!}
        </div>
      </div>
    </div>
  </section>
@stop
