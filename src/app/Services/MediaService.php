<?php

namespace App\Services;

use App\Data\Repositories\MediaRepository;
use App\Models\Media;
use Exception;

class MediaService
{
  private MediaRepository $mediaRepository;

  function __construct(MediaRepository $mediaRepository)
  {
    $this->mediaRepository = $mediaRepository;
  }

  public function listMedia()
  {
    try {
      $list = $this->mediaRepository->index();
      $media = $this->mapToMedia($list);
      return $media;
    } catch (Exception $e) {
      echo `<div class="error-message">` . $e->getMessage() . `</div>`;
      return false;
    }
  }

  public function createMedia(
    String $name,
    String $file,
    String $type,
    String $subtype
  ) {
    try {
      $this->mediaRepository->store(
        $name,
        $file,
        $type,
        $subtype
      );
    } catch (Exception $e) {
      echo '<div class="error-message">' . $e->getMessage() . '</div>';
      return false;
    }
  }

  private function mapToMedia($array)
  {
    return array_map(function ($e) {
      return new Media($e['id'], $e['name'], $e['file'], $e['type'], $e['subtype']);
    }, $array);
  }
}
