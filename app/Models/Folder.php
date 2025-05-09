<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Folder extends Model
{
    use HasFactory;

    protected $table = 'documents_folder'; // Especifica el nombre de la tabla

    protected $fillable = [
        'parent_folder_id',
        'folder_name',
        'folder_description',
        'category',
    ];

    // Relación con archivos
    public function files()
    {
       return $this->hasMany(File::class, 'parent_folder_id', 'folder_id');
    }

    public function categories()
    {
        return $this->belongsTo(folderCategory::class, 'category', 'id');
    }

    // Relación recursiva con la carpeta padre
    public function parentFolder()
    {
        return $this->belongsTo(Folder::class, 'parent_folder_id');
    }

    // Relación con subcarpetas
    public function childFolders()
    {
        return $this->hasMany(Folder::class, 'parent_folder_id');
    }
}
