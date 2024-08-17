<?php

namespace App\Repositories\Providers;

use App\Repositories\Interfaces\UserRepositoryInterface;

class UserService
{
    public function __construct(
        protected UserRepositoryInterface $userRepository
    ) {}

    public function cerate(array $data)
    {
        return $this->userRepository->create($data);
    }
    public function update(array $data, $user)
    {
        return $this->userRepository->update($data, $user);
    }
    public function delete($user)
    {
        return $this->userRepository->delete($user);
    }
    public function all()
    {
        return $this->userRepository->all();
    }
    public function find($user)
    {
        return $this->userRepository->find($user);
    }
}
