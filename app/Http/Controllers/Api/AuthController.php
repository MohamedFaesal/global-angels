<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegistrationRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

/**
 * Class AuthController
 * @package App\Http\Controllers\Api
 */
class AuthController extends Controller
{

    public function call()
    {
        return Socialite::driver('facebook')->redirect();
    }

    public function callback(Request $request)
    {
        dd(Socialite::driver('facebook')->user());
    }

    public function login(LoginRequest $request) {
        $token = $request->input('facebook_token');
        try {
            $facebookUser = Socialite::driver('facebook')->userFromToken($token);
        } catch (\Exception $ex) {
            return $this->failed('Not valid facebook profile', 401);
        }
        $user = User::where('facebook_id', $facebookUser->getId())->first();
        if (!$user) {
            return $this->failed('Not registered', 401);
        }
        $accessToken = $user->createToken('GlobalAngels')->accessToken;
        $user->facebook_token = $token;
        $user->save();
        return $this->success(['token' => $accessToken]);
    }

    public function logout() {
        Auth::user()->token()->revoke();
        return $this->success();
    }

    public function register(RegistrationRequest $request)
    {
        $token = $request->input('facebook_token');
        try {
            $facebookUser = Socialite::driver('facebook')->userFromToken($token);
        } catch (\Exception $ex) {
            throw new \Exception('Not valid facebook profile');
        }

        $newUserData = [
            'age' => $request->input('age'),
            'country_id' => $request->input('country'),
            'state_id' => $request->input('city'),
            'user_type' => $request->input('user_type'),
            'gender' => $request->input('gender'),
            'name' => $request->input('name', $facebookUser->getName()),
            'email' => $request->input('email', $facebookUser->getEmail()),
            'photo' => $request->input('photo', $facebookUser->getAvatar()),
            'phone' => $request->input('phone'),
            'facebook_token' => $token,
            'facebook_id' => $facebookUser->getId(),
        ];
        $user = User::create($newUserData);
        $accessToken = $user->createToken('GlobalAngels')->accessToken;
        return $this->success(['token' => $accessToken],'New user has been registered');
    }

    public function profile()
    {
        return $this->success(Auth::user());
    }
}
