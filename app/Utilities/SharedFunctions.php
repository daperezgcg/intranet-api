<?php

namespace App\Utilities;

class SharedFunctions
{
      /**
   * @param string $dir Directorio en el que se guardará el archivo
   * @param File $file Archivo a guardar
   * @param string $fileName Nombre del archivo
   */
  public function uploadFile($dir, $file, $fileNewName = null)
  {
    $dirConcat = $this->createDirectory($dir);

    if (isset($fileNewName) && isset($file)) {
      $file->move(storage_path($dirConcat), $fileNewName);
      chmod(storage_path("{$dirConcat}/{$fileNewName}"), 0777);
    }
  }


  /**
   * createDirectory
   *
   * @param string $path to create
   * @return string end directory
   */
  public function  createDirectory(string $path): string
  {
    try {
      $dirSeparate = explode('/', $path);
      $dirConcat = "app/public";

      foreach ($dirSeparate as $value) {
        $dirConcat .= "/$value";
        if (!file_exists(storage_path($dirConcat))) {
          mkdir(storage_path($dirConcat), 0777);
          chmod(storage_path($dirConcat), 0777);
        }
      }
      return $dirConcat;
    } catch (\Throwable $th) {
    //   HTTPErrors::throwError($th, __FILE__);
    }
  }
}
