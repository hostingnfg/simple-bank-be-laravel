<?php

namespace App\Http\Controllers;

use App\Enums\Currency;
use App\Http\Requests\CreateAccount;
use App\Http\Requests\OpenAccountRequest;
use App\Models\Account;
use App\Services\AccountService;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    /**
     * @var AccountService
     */
    private AccountService $accountService;

    /**
     * @param AccountService $accountService
     */
    public function __construct(AccountService $accountService)
    {
        $this->accountService = $accountService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        return response()->json(
            auth()->user()->accounts()->get()
        );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(OpenAccountRequest $request)
    {
        return response()->json(
            $this->accountService->createNewAccount($request->get('currency'))
        );
    }
}
