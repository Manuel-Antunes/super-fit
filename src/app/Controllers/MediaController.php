<?php

use App\Data\Connection;
use App\Data\Repositories\MediaRepository;
use App\Services\MediaService;
use App\Services\FileService;

class MediaController
{
  private MediaService $mediaService;
  private FileService $fileService;

  function __construct()
  {
    try {
      $this->mediaService = new MediaService(new MediaRepository(Connection::getConnection()));
      $this->fileService = new FileService();
    } catch (Exception $e) {
      var_dump($e->getMessage());
    }
  }

  public function store()
  {
    $files = $this->fileService->map_request($_FILES);
    $uploaded = array();
    foreach ($files as $file) {
      $uploaded_file = $this->fileService->create_file($file);
      try {
        $this->mediaService->createMedia($uploaded_file['filename'], $uploaded_file['path'], $uploaded_file['ext'], $uploaded_file['ext']);
      } catch (Exception $e) {
        die('Error while saving the file in database');
      }
      $uploaded[] = $uploaded_file;
    }
    echo json_encode($uploaded);
  }
}
