<?php /** @noinspection PhpUnused */
declare(strict_types=1);

namespace HJerichen\ExampleGenericsInPhp\Services;

use HJerichen\ExampleGenericsInPhp\Entities\CustomerEntity;

/** @template-extends EntityBuilder<CustomerEntity, array{id: int, name: string}> */
class CustomersBuilder extends EntityBuilder
{
    protected function buildForHash($hash): CustomerEntity
    {
        return new CustomerEntity(
            id: $hash['id'],
            name: $hash['name'],
        );
    }
}
