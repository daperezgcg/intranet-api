<?php

namespace Database\Seeders;


use App\Models\File;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
          File::insert([
            [
                'folder_id' => 1,
                'parent_folder_id' => null,
                'file_name' => 'Project_A_Folder',
                'file_path' => '/documents/Project_A',
                'file_type' => 'folder',
                'file_size' => 0,
                'created_at' => now(),
            ],
            [
                'folder_id' => 2,
                'parent_folder_id' => null,
                'file_name' => 'Project_B_Folder',
                'file_path' => '/documents/Project_B',
                'file_type' => 'folder',
                'file_size' => 0,
                'created_at' => now(),
            ],
            [
                'folder_id' => 3,
                'parent_folder_id' => 1, // Subfolder under Project A
                'file_name' => 'Subfolder_A1',
                'file_path' => '/documents/Project_A/Subfolder_A1',
                'file_type' => 'folder',
                'file_size' => 0,
                'created_at' => now(),
            ],
            [
                'folder_id' => 4,
                'parent_folder_id' => 3, // File inside Subfolder A1
                'file_name' => 'File1.txt',
                'file_path' => '/documents/Project_A/Subfolder_A1/File1.txt',
                'file_type' => 'txt',
                'file_size' => 1024,
                'created_at' => now(),
            ],
            [
                'folder_id' => 5,
                'parent_folder_id' => 2, // File inside Project B
                'file_name' => 'File3.docx',
                'file_path' => '/documents/Project_B/File3.docx',
                'file_type' => 'docx',
                'file_size' => 5120,
                'created_at' => now(),
            ],
            [
                'folder_id' => 6,
                'parent_folder_id' => null, // File outside folders
                'file_name' => 'Archive.zip',
                'file_path' => '/documents/Archive.zip',
                'file_type' => 'zip',
                'file_size' => 10240,
                'created_at' => now(),
            ],
        ]);
    }
}
