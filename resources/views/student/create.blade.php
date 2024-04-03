@extends('layouts.app')

@section('title', 'Add Students')

@section('content')

<div class="container mt-2">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <h4>Add Student</h4>
                </div>
                <div class="card-body">
                    <form action="{{ url('students') }}" method="POST">
                        @csrf

                        <h4>Student</h4>
                        <div class="mb-3">
                            <label for="name" class="form-label">Name:</label>
                            <input type="text" class="form-control" name="fullname">
                        </div>
                        <div class="mb-3">
                            <label for="name" class="form-label">Email:</label>
                            <input type="text" class="form-control" name="email">
                        </div>
                        <div class="mb-3">
                            <label for="name" class="form-label">Phone:</label>
                            <input type="text" class="form-control" name="phone">
                        </div>

                        <h4>Student Detail</h4>
                        <div class="mb-3">
                            <label for="name" class="form-label">Phone 2:</label>
                            <input type="text" class="form-control" name="alter_phone">
                        </div>
                        <div class="mb-3">
                            <label for="name" class="form-label">Course:</label>
                            <input type="text" class="form-control" name="course">
                        </div>
                        <div class="mb-3">
                            <label for="name" class="form-label">Roll no:</label>
                            <input type="text" class="form-control" name="roll_no">
                        </div>

                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection