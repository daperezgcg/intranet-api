<?php

namespace Database\Seeders;

use Database\Seeders\xlsx\GcRadioEntitiesExport;
use App\Models\GcRadio\GcRadioEntities;
use Illuminate\Database\Seeder;
use Maatwebsite\Excel\Facades\Excel;

class GcRadioEntitiesSeeder extends Seeder
{

    private array $listOfEntities;

    public function __construct()
    {
        $pathFile = storage_path('app/private/Entities.csv');
        $this->listOfEntities = Excel::toArray(new GcRadioEntitiesExport(), $pathFile);
        $this->listOfEntities = $this->listOfEntities[0];
        array_shift($this->listOfEntities);
    }

    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $listOfEntitiesToCreate = array_map(function ($entity) {
            return [
                'nit' => $entity[0],
                'name' => $entity[1],
                'initials' =>  $entity[2],
                'type' => $entity[3],
                'department' => $entity[4],
                'municipality' => $entity[5],
                'address' => $entity[6],
                'phone' => $entity[7],
                'mobile' => $entity[8],
                'email' => $entity[9],
                'supervision' => $entity[10],
                'sector' => $entity[11],
            ];
        }, $this->listOfEntities);

        $chunks = array_chunk($listOfEntitiesToCreate, 20);

        foreach ($chunks as $chunk) {

            GcRadioEntities::insert($chunk);
        }
    }
}
