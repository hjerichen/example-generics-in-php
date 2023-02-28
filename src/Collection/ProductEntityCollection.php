<?php /** @noinspection PhpUnused */
declare(strict_types=1);

namespace HJerichen\ExampleGenericsInPhp\Collection;

use HJerichen\ExampleGenericsInPhp\Entities\ProductEntity;

/** @template-extends EntityCollection<ProductEntity> */
class ProductEntityCollection extends EntityCollection
{
}
