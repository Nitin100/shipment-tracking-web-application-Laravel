<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Shipment;
use App\Models\StatusLog;


class ShipmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $shipment = Shipment::create([
            'tracking_number' => 'TRK1001',
            'sender_name' => 'Amazon Warehouse',
            'sender_address' => 'Delhi, India',
            'receiver_name' => 'Rahul Sharma',
            'receiver_address' => 'Mumbai, India',
            'status' => 'In Transit'
            ]);
            
            
            StatusLog::create([
            'shipment_id' => $shipment->id,
            'status' => 'Pending',
            'location' => 'Delhi Hub'
            ]);
            
            
            StatusLog::create([
            'shipment_id' => $shipment->id,
            'status' => 'In Transit',
            'location' => 'Jaipur Hub'
            ]);
    }
}
