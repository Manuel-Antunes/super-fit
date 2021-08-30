<?php

namespace App\Services;

use App\Data\Repositories\ExerciceRepository;

class ExerciceService
{
  private ExerciceRepository $userRepository;

  function __construct(ExerciceRepository $userRepository)
  {
    $this->userRepository = $userRepository;
  }
}
