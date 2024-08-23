<?php

use App\Jobs\RegisterToPdfProccess;
use Illuminate\Support\Facades\Route;

Route::get('/dispatch-job', function () {
    RegisterToPdfProccess::dispatch();
    return 'Job dispatched!';
});
