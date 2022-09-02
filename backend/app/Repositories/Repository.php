<?php

namespace App\Repositories;

interface Repository
{
    /**
     * Get all items.
     *
     * @return mixed
     */
    function getAll(): mixed;

    /**
     * Get item by Id.
     *
     * @param int $id
     *
     * @return mixed
     */
    function getById(int $id): mixed;

    /**
     * Create new item.
     *
     * @param array $attributes
     *
     * @return mixed
     */
    function create(array $attributes): mixed;

    /**
     * Update item by Id.
     *
     * @param int   $id
     * @param array $attributes
     *
     * @return mixed
     */
    function update(int $id, array $attributes): mixed;

    /**
     * Delete item by Id.
     *
     * @param int $id
     *
     * @return mixed
     */
    function delete(int $id): mixed;
}
