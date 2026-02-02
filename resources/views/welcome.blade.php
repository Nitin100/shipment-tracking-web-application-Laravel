@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-center align-items-center" style="height: 60vh;">
    <div class="text-center">
        <h2 class="mb-4">📦 Shipment Tracking System</h2>
        <p class="mb-4 text-muted">
            Track and manage shipments with real-time status updates.
        </p>

        <a href="{{ url('/shipments') }}" class="btn btn-primary btn-lg">
            View Shipments
        </a>
    </div>
</div>
@endsection
