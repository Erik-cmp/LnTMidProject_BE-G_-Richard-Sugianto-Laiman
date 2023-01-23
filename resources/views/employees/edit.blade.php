@extends('employees.layout')
@section('content')

<div class="card" style="margin: 20px">
    <div class="card-header">
        <h2>Edit Employee</h2>        

        <div class="card-body">

            <form action="{{  url('employee/' .$employees->id) }}" method="post">
                {!! csrf_field() !!}
                @method("PATCH")

                <input type= "hidden" name="id" id="id" value="{{$employees->id}}">

                <label>Name</label><br>
                <input type="text" name="name" id="name" class="form-control" value="{{$employees->Name}}"><br>
                <div class="error" style="color: red">
                    @error('name')
                    {{$message}}
                    @enderror
                </div>
                <br>                

                <label>Age</label>
                <input type="number" name="age" id="age" class="form-control" value="{{$employees->Age}}"><br>
                <div class="error" style="color: red">
                    @error('age')
                    {{$message}}
                    @enderror
                </div>
                <br>                

                <label>Address</label>
                <input type="text" name="address" id="address" class="form-control" value="{{$employees->Address}}"><br>
                <div class="error" style="color: red">
                    @error('address')
                    {{$message}}
                    @enderror
                </div>
                <br>                

                <label>Phone Number</label>
                <input type="text" name="phonenumber" id="phonenumber" class="form-control" value="{{$employees->PhoneNumber}}"><br>
                <div class="error" style="color: red">
                    @error('phonenumber')
                    {{$message}}
                    @enderror
                </div>
                <br>                

                <input type="submit" value="Update" class="btn btn-success"><br>                                        
            </form>

        </div>
    </div>
</div>

@stop