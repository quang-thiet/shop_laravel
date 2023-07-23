<?php

namespace App\Http\Controllers;

use App\Jobs\NewJob;
use Illuminate\Http\Request;

class TestQueueController extends Controller
{
    public function storeQueue(){
        $name = 'dang quang thiet';
        $queue = 'test';
        NewJob::dispatch($name,$queue);
        return true ; 
    }
}
