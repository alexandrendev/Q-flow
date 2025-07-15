@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Register Medical Record</h2>
    <form action="{{ route('medical-records.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="patient_id" class="form-label">Patient</label>
            <select name="patient_id" id="patient_id" class="form-control" required>
                <option value="">Select a patient</option>
                @foreach($patients as $patient)
                    <option value="{{ $patient->id }}">{{ $patient->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="notes" class="form-label">Notes</label>
            <textarea name="notes" id="notes" class="form-control" required>{{ old('notes') }}</textarea>
        </div>
        <div class="mb-3">
            <label for="priority" class="form-label">Priority</label>
            <input type="text" name="priority" id="priority" class="form-control" value="waiting" readonly>
        </div>
        <!-- Campos adicionais, se necessário -->
        <button type="submit" class="btn btn-primary">Register</button>
    </form>
</div>
@endsection
