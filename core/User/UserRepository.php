<?php

namespace Core\User;

interface UserRepository
{
    public function findByUsername(string $username): ?User;

    public function create(User $user): int;
}
