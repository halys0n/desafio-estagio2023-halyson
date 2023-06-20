<?php

namespace App\Repository\User;

use App\User;
use App\Repository\abstracts\AbstractRepository;
use App\Repository\Contracts\User\UserRepositoryInterface;

class UserRepository extends AbstractRepository implements UserRepositoryInterface
{
    protected $model = User::class;
}
