<?php

namespace App\Controllers;

use App\Models\AdelaModel;
use App\Models\EducationModel;
use App\Models\ExperianceModel;

class Main extends BaseController
{
    protected $profile;
    
    protected $qualification;

    protected $experiance;    

    public function __construct()
    {
        $this->profile = new AdelaModel();
        $this->qualification = new EducationModel();
        $this->experiance = new ExperianceModel();
    }
    public function index(): string
    {
        $folio = $this->profile->findAll();
        $education = $this->qualification->findAll();
        $jobdesk = $this->experiance->findAll();
        // dd($folio);
        $data = [
            'folio' => $folio,
            'education' => $education,
            'jobdesk' => $jobdesk
        ];

        return view('layout/main', $data);
    }
}