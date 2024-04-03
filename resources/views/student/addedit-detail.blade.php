@extends('layouts.app')

@section('title', 'Update Students')

@section('content')

<div class="container mt-2">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <h4>Add/Edit Student Details</h4>
                </div>
                <div class="card-body">
                    <form action="{{ url('students/'.$student_id.'/updatedetail') }}" method="POST">
                        @csrf

                        <h4>Student Detail</h4>
                        <div class="mb-3">
                            <label for="name" class="form-label">Phone 2:</label>
                            <input type="text" value="{{ $student->alter_phone ?? "" }}" class="form-control" name="alter_phone">
                        </div>
                        <div class="mb-3">
                            <label for="name" class="form-label">Course:</label>
                            <input type="text" value="{{ $student->course ?? "" }}" class="form-control" name="course">
                        </div>
                        <div class="mb-3">
                            <label for="name" class="form-label">Roll no:</label>
                            <input type="text" value="{{ $student->roll_no ?? "" }}" class="form-control" name="roll_no">
                        </div>

                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection