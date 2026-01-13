<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BaseController extends Controller
{
    public function base_url(string $path): string {
        return rtrim(config('api.base_url'), '/') . '/' . ltrim($path, '/');
    }
}
