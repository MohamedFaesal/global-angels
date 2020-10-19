<?php

namespace App\Services;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class UserService extends AbstractService
{
    /**
     * UserService constructor.
     * {@inheritDoc}
     */
    public function __construct(User $model)
    {
        parent::__construct($model);
    }

    /**
     * @param string $email
     * @param string $password
     * @return bool|Model
     */
    public function login(string $email, string $password)
    {
        $users = $this->model->where([
            'email' => $email,
            'password' => $password
        ])->get();
        if ($users) {
            return $users[0];
        }
        return false;
    }
}