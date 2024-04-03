@extends('layouts.app')

@section('title', 'Update Students')

@section('content')

<div class="container mt-2">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <h4>Edit Student</h4>
                </div>
                <div class="card-body">
                    <form action="{{ url('students/'.$student->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <h4>Student</h4>
                        <div class="mb-3">
                            <label for="name" class="form-label">Name:</label>
                            <input type="text" value="{{ $student->fullname }}" class="form-control" name="fullname">
                        </div>
                        <div class="mb-3">
                            <label for="name" class="form-label">Email:</label>
                            <input type="text" value="{{ $student->email }}" class="form-control" name="email">
                        </div>
                        <div class="mb-3">
                            <label for="name" class="form-label">Phone:</label>
                            <input type="text" value="{{ $student->phone }}" class="form-control" name="phone">
                        </div>

                        <h4>Student Detail</h4>
                        <div class="mb-3">
                            <label for="name" class="form-label">Phone 2:</label>
                            <input type="text" value="{{ $student->studentDetail->alter_phone }}" class="form-control" name="alter_phone">
                        </div>
                        <div class="mb-3">
                            <label for="name" class="form-label">Course:</label>
                            <input type="text" value="{{ $student->studentDetail->course }}" class="form-control" name="course">
                        </div>
                        <div class="mb-3">
                            <label for="name" class="form-label">Roll no:</label>
                            <input type="text" value="{{ $student->studentDetail->roll_no }}" class="form-control" name="roll_no">
                        </div>

                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection