<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jobs\SendTestEmail;

class JobController extends Controller
{
    public function addToQueue()
    {
        $emailJob = new SendTestEmail();
        dispatch($emailJob);
    }
}
