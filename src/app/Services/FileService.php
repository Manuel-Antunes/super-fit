<?php

namespace App\Services;

use Exception;

class FileService
{

  private string $upload_path;
  private array $valid_ext = array();

  public function __construct($upload_path = "tmp/uploads/", $valid_ext = [])
  {
    $this->upload_path = $upload_path;
  }

  public function map_request($request)
  {
    $files = array();
    $countfiles = count($request['files']['name']);
    for ($index = 0; $index < $countfiles; $index++) {
      if (isset($request['files']['name'][$index]) && $request['files']['name'][$index] != '') {
        $filename = $request['files']['name'][$index];
        $ext = strtolower(pathinfo($filename, PATHINFO_EXTENSION));
        $tmp_name = $request['files']['tmp_name'][$index];
        array_push($files, array('filename' => $filename, 'ext' => $ext, 'tmp_name' => $tmp_name, 'path' => $this->upload_path . round(microtime(true) * 1000) + $index . "." . $ext));
      }
    }
    return $files;
  }

  public function create_file($file)
  {
    if (!is_dir($this->upload_path)) {
      mkdir(
        $this->upload_path
      );
    }
    if (isset($file['filename']) && $file['filename'] != '') {
      if (sizeof($this->valid_ext) == 0 || in_array($file['ext'], $this->valid_ext)) {
        if (move_uploaded_file($file['tmp_name'], $file['path'])) {
          return $file;
        } else {
          throw new Exception("An error occurred while uploading file");
        }
      }
    }
  }
}
