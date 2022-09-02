<?php

namespace App\Services;

use App\Enums\Currency;

interface AccountService {
    public function createNewAccount(string $currency): mixed;
}
