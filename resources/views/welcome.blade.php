@extends('employees.layout')
@section('content')
<div class="container">
    <div class="row" stlye="margin:20px">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h2>PT. Meksiko - Employee Manager</h2>
                </div>                
                <div class="card-body">
                    <a href="{{ url('/employee') }}" class="btn btn-success btn-sm" title="Add New Student">
                        Start
                    </a>
                </div>                
            </div>
        </div>
    </div>
</div>
@endsection