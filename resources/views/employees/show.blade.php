@extends('employees.layout')
@section('content')
  
<div class="card" style="margin:20px;">
  <div class="card-header">
    <h2>Employee Detail</h2>
  </div>
  <div class="card-body">
        <div class="card-body">
        <p class="card-text">Name : {{ $employees->Name }}</p>
        <p class="card-text">Age : {{ $employees->Age }}</p>
        <p class="card-text">Address : {{ $employees->Address }}</p>
        <p class="card-text">Phone Number : {{ $employees->PhoneNumber }}</p>
  </div>
    </hr>
  </div>
</div>