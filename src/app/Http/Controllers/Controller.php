<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    /**
     * return controller name
     *
     * @return string
     */
    public static function getControllerName(): string
    {
        return class_basename(static::class);
    }

    /**
     * get value from request url by using $param
     *
     * @param string $param
     * @return void
     */
    public function getUrlParameter(string $param)
    {
        return request()->route($param);
    }
}
