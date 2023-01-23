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
                    <a href="{{ url('/employee/create') }}" class="btn btn-success btn-sm" title="Add New Student">
                        Add Employee
                    </a>
                </div>
                <br>                
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Name</th>
                                <th>Age</th>
                                <th>Address</th>
                                <th>Phone Number</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($employees as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->Name }}</td>
                                    <td>{{ $item->Age }}</td>
                                    <td>{{ $item->Address }}</td>
                                    <td>{{ $item->PhoneNumber }}</td>

                                    <td>
                                        <a href="{{ url('/employee/' . $item->id) }}" title="View Employee"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                        <a href="{{ url('/employee/' . $item->id . '/edit') }}" title="Edit Employee"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                                        <form method="POST" action="{{ url('/employee' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                            {{ method_field('DELETE') }}
                                            {{ csrf_field() }}
                                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Employee" onclick="return confirm('Confirm deletion?')"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>                        
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection