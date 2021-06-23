@extends('layout')
@section('content')
       <article>
          <h2>{{$product ->product_name }}</h2>
          <p>{{$product ->product_desc}}</p>
          </article>
          <a href="/">Go To Home </a>
         @endsection