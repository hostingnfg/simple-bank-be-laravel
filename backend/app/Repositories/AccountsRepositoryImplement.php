<?php
namespace App\Repositories;


use App\Models\Account;

class AccountsRepositoryImplement implements AccountsRepository {

    /**
     * @var Account
     */
    protected Account $model;

    /**
     * @param Account $model
     */
    public function __construct(Account $model)
    {
        $this->model = $model;
    }

    /**
     * @return mixed
     */
    function getAll(): mixed
    {
        return $this->model->all();
    }

    /**
     * @param int $id
     * @return mixed
     */
    function getById(int $id): mixed
    {
        return $this->model->find($id);
    }

    /**
     * @param array $attributes
     * @return mixed
     */
    function create(array $attributes): mixed
    {
        return $this->model->create($attributes);
    }

    /**
     * @param int $id
     * @param array $attributes
     * @return mixed
     */
    function update(int $id, array $attributes): mixed
    {
        return $this->model->find($id)->update($attributes);
    }

    /**
     * @param int $id
     * @return mixed
     */
    function delete(int $id): mixed
    {
        return $this->model->find($id)->delete();
    }
}
