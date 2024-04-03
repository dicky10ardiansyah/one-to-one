@extends('layouts.app')

@section('title', 'Students List')

@section('content')

<div class="container mt-2">
    <div class="row">
        <div class="col">

            @if(session('message'))
            <h4 class="alert alert-success">{{ session('message') }}</h4>
            @endif

            <div class="card">
                <div class="card-header">
                    <h4>Student List</h4>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Fullname</th>
                                <th>Email</th>
                                <th>Add/Edit Student</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($students as $student)
                            <tr>
                                <td>{{ $student->id }}</td>
                                <td>{{ $student->fullname }}</td>
                                <td>{{ $student->email }}</td>
                                <td>
                                    <a href="{{ url('students/'.$student->id.'/details') }}" class="btn btn-success btn-sm">Add/Edit Details</a>
                                </td>
                                <td>
                                    <a href="{{ url('students/'.$student->id.'/edit') }}" class="btn btn-secondary btn-sm">Edit</a>
                                    <form action="{{ url('students/'.$student->id) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
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