<?php

/**
 * RepositoryInterface
 *
 * Interface for Repository classes
 *
 * @author      Stantz Development
 * @package     Stantz\Interfaces
 * @version     0.1.0
 *
 */

namespace Stantz\Interfaces;

interface RepositoryInterface
{
    public function __construct(DataStorage $persistence);
    public function find($id);
    public function findAll();
    public function save(EntityInterface $entity);
    public function delete(EntityInterface $entity);
}
