<?php

namespace App\Enums;

enum AccountType: string {
    case BankAccount = 'BankAccount';
    case UserAccount = 'UserAccount';
    case DepositAccount = 'DepositAccount';
    case CreditAccount = 'CreditAccount';
}
