<?php

namespace App\Controller;

use App\Model\MusicManager;

class MusicController extends AbstractApiController
{
    public function index()
    {
        $manager = new MusicManager();
        $music = $manager->selectAllMusic();
        return $music;
    }
}
