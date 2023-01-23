@extends('employees.layout')
@section('content')

<div class="card" style="margin: 20px">
    <div class="card-header">
        <h2>Add New Employee</h2>        

        <div class="card-body">
            <form action="{{  url('employee') }}" method="post">
                {!! csrf_field() !!}
                <label>Name</label><br>
                <input type="text" name="name" id="name" class="form-control">
                <div class="error" style="color: red">
                    @error('name')
                    {{$message}}
                    @enderror
                </div>
                <br>

                <label>Age</label>
                <input type="number" name="age" id="age" class="form-control">
                <div class="error" style="color: red">
                    @error('age')
                    {{$message}}
                    @enderror
                </div>
                <br>               

                <label>Address</label>
                <input type="text" name="address" id="address" class="form-control">
                <div class="error" style="color: red">
                    @error('address')
                    {{$message}}
                    @enderror
                </div>
                <br>                

                <label>Phone Number</label>
                <input type="text" name="phonenumber" id="phonenumber" class="form-control">
                <div class="error" style="color: red">
                    @error('phonenumber')
                    {{$message}}
                    @enderror
                </div>
                <br>               

                <input type="submit" value="Save" class="btn btn-success"><br>                                        
            </form>            
        </div>
    </div>
</div>

@stop