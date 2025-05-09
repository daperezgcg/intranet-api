<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Folder;


class FolderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
          Folder::insert([
            [
                'folder_id' => 1,
                'name' => 'Project A',
                'description' => 'Main folder for Project A.',
                'created_at' => now(),
            ],
            [
                'folder_id' => 2,
                'name' => 'Project B',
                'description' => 'Main folder for Project B.',
                'created_at' => now(),
            ],
            [
                'folder_id' => 3,
                'name' => 'Subfolder A1',
                'description' => 'A subfolder under Project A for additional resources.',
                'created_at' => now(),
            ],
            [
                'folder_id' => 4,
                'name' => 'Subfolder B1',
                'description' => 'A subfolder under Project B for documentation.',
                'created_at' => now(),
            ],
            [
                'folder_id' => 5,
                'name' => 'Archive',
                'description' => 'Folder containing archived projects and resources.',
                'created_at' => now(),
            ],
        ]);;
    }
}
