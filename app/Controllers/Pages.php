<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Pages extends Controller
{
    public function profile()
    {
        return view('skills'); // gunakan view 'skills.php'
    }
}