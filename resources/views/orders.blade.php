<!DOCTYPE html>

@extends('layout')
@section('content')
<!-- page orders -->
<div class="heading">
   <h3>your orders</h3>
   <p> <a href="{{route('accueil')}}">home</a> / orders </p>
</div>

<section class="placed-orders">

   <h1 class="title">placed orders</h1>

   <div class="box-container">

   @endsection

@section('title','orders')