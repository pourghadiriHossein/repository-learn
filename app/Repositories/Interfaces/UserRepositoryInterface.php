<?php

namespace App\Repositories\Interfaces;

use App\Models\User;

interface UserRepositoryInterface
{
    public function all();
    public function create(array $dada);
    public function update(array $dada, User $user);
    public function delete(User $user);
    public function find(User $user);
}
