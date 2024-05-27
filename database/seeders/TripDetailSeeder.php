<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Trip_detail;

class TripDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Trip_detail::insert([
            [
                'port_departed' =>  'Peir 3, Cebu City', 
                'port_arrived'  =>  'Tubigon, Bohol',
                'date_departed' =>  '2024-05-2',
                'date_arrived'  =>  '2024-05-3'
            ],
            [
                'port_departed' =>  'Tubigon, Bohol', 
                'port_arrived'  =>  'Peir 3, Cebu City',
                'date_departed' =>  '2024-05-2',
                'date_arrived'  =>  '2024-05-3'
            ],
            [
                'port_departed' =>  'Talibon, Bohol', 
                'port_arrived'  =>  'Maasim, Leyte',
                'date_departed' =>  '2024-05-1',
                'date_arrived'  =>  '2024-05-2'
            ],
            [
                'port_departed' =>  'Maasim, Leyte', 
                'port_arrived'  =>  'Talibon, Bohol',
                'date_departed' =>  '2024-05-2',
                'date_arrived'  =>  '2024-05-3'
            ]
            
        ]);
    }
}
