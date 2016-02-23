<?php

namespace OnPegasus\Core\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use OnPegasus\Kernel\Controllers\AbstractController as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

abstract class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}
