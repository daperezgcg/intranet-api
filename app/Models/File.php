<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    use HasFactory;

    protected $table = 'documents_files'; // Especifica el nombre de la tabla

    protected $fillable = [
        'file_id',
        'parent_folder_id',
        'file_name',
        'file_path',
        'file_type',
        'file_size',
        'created_at',
        'wt_bg',
    ];

    // Relación con la carpeta
    public function folder()
    {
        return $this->belongsTo(Folder::class, 'folder_parent_id', 'folder_id');
    }
}
