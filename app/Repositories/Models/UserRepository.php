<?php

namespace App\Repositories\Models;

use App\Models\User;
use App\Repositories\Interfaces\UserRepositoryInterface;

class UserRepository implements UserRepositoryInterface {
    public function all(){
        return User::all();
    }
    public function create(array $data){
        return User::create($data);
    }
    public function update(array $data, User $user){
        $user->update($data);
        return $user;
    }
    public function delete(User $user) {
        $user->delete();
    }
    public function find(User $user){
        return $user;
    }
}

