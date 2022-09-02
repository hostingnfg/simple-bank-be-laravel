<?php

namespace App\Services;

use App\Enums\Currency;
use App\Enums\AccountType;
use App\Repositories\AccountsRepository;

class AccountServiceImplement implements AccountService
{
    /**
     * @var AccountsRepository
     */
    protected AccountsRepository $repository;

    /**
     * @param AccountsRepository $repository
     */
    public function __construct(AccountsRepository $repository)
    {
        $this->repository = $repository;
    }

    public function createNewAccount(string $currency): mixed
    {
        return $this->repository->create([
            'ownerId' => auth()->user()->getAuthIdentifier(),
            'currency' => $currency,
            'active' => true,
            'type' => AccountType::UserAccount,
            'balance' => 0
        ]);
    }
}
