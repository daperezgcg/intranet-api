<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class folderCategory extends Model
{
    use HasFactory;


    protected $table = 'documents_categories'; // Especifica el nombre de la tabla

    protected $fillable = [
        'id',
        'category_name',
        'created_at',
    ];


    public function files()
    {
       return $this->hasMany(File::class, 'parent_folder_id', 'folder_id');
    }

}
