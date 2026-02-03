@extends('layouts.app')

@section('content')
<h2>Shipments 
<a href="{{ url('/') }}" class="btn btn-primary">Home</a></h2>

<form method="GET" class="mb-3">
    <input type="text" name="search" placeholder="Search Tracking Number" value="{{ request('search') }}">
    <button class="btn btn-primary">Search</button>
</form>

<table class="table table-bordered">
<tr>
    <th>Tracking Number</th>
    <th>Receiver</th>
    <th>Destination</th>
    <th>Status</th>
    <th>Date</th>
    <th>Action</th>
</tr>
@foreach($shipments as $shipment)
<tr>
    <td>{{ $shipment->tracking_number }}</td>
    <td>{{ $shipment->receiver_name }}</td>
    <td>{{ $shipment->receiver_address }}</td>
    <td>{{ $shipment->status }}</td>
    <td>{{ $shipment->created_at->format('d M Y') }}</td>
    <td>
        <a href="{{ url('shipments/'. $shipment->id) }}" class="btn btn-sm btn-info">View</a>
    </td>
</tr>
@endforeach
</table>

{{ $shipments->links() }}
@endsection
