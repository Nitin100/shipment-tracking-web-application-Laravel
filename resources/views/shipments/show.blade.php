@extends('layouts.app')

@section('content')
<h2>Shipment Details</h2>
<a href="{{ url('shipments') }}" class="btn btn-primary">Go Back</a>

<div class="card mb-3">
    <div class="card-body">
        <p><strong>Tracking:</strong> {{ $shipment->tracking_number }}</p>
        <p><strong>Sender:</strong> {{ $shipment->sender_name }} - {{ $shipment->sender_address }}</p>
        <p><strong>Receiver:</strong> {{ $shipment->receiver_name }} - {{ $shipment->receiver_address }}</p>
        <p><strong>Status:</strong> {{ $shipment->status }}</p>
    </div>
</div>

<h4>Status Timeline</h4>
<ul class="list-group">
@foreach($shipment->statusLogs as $log)
<li class="list-group-item">
    <strong>{{ $log->status }}</strong> - {{ $log->location }}
    <span class="float-end">{{ $log->created_at->format('d M Y H:i') }}</span>
</li>
@endforeach
</ul>
@endsection
