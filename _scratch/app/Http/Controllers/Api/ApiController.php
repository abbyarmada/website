<?php

namespace CTP\Http\Controllers\Api;

use CTP\Data\Api\Account as ApiAccountData;
use Input;
use Request;

abstract class ApiController extends \CTP\Http\Controllers\Controller
{
    protected $apiAccount = null;

    public function __construct()
    {
        $this->apiAccount = ApiAccountData::where('api_key', '=', Request::header('vfmu-api-key', Input::get('vfmu-api-key', null)))
                                          ->first();
    }
}
