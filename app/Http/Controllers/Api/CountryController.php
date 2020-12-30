<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\CountryResource;
use App\Http\Resources\StateResource;
use App\Models\Country;

/**
 * Class AuthController
 * @package App\Http\Controllers\Api
 */
class CountryController extends Controller
{

    public function countries()
    {
        return $this->success(CountryResource::collection(Country::all()));
    }

    public function states(Country $country)
    {
        return $this->success(StateResource::collection($country->states));
    }

}
