<?php /** @noinspection PhpUnused */
declare(strict_types=1);

namespace HJerichen\ExampleGenericsInPhp\Services;

use HJerichen\ExampleGenericsInPhp\Entities\CustomerEntity;

class CustomersBuilder
{
    public function build(array $hashes): array
    {
        $customers = [];
        foreach ($hashes as $hash) {
            $customers[] = $this->buildForHash($hash);
        }
        return $customers;
    }

    private function buildForHash(array $hash): CustomerEntity
    {
        return new CustomerEntity(
            id: $hash['id'],
            name: $hash['name'],
        );
    }
}
