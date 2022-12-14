<?php

/**
 * Copyright © OXID eSales AG. All rights reserved.
 * See LICENSE file for license details.
 */

declare(strict_types=1);

namespace OxidEsales\GraphQL\Base\Tests\Integration\Framework\DataType;

use OxidEsales\GraphQL\Base\DataType\Filter\BoolFilter;
use OxidEsales\GraphQL\Base\DataType\Filter\FloatFilter;
use OxidEsales\GraphQL\Base\DataType\Filter\IntegerFilter;
use OxidEsales\GraphQL\Base\DataType\Filter\StringFilter;
use TheCodingMachine\GraphQLite\Annotations\Factory;

class TestFilterFactory
{
    /**
     * @Factory
     */
    public static function createTestFilter(
        ?BoolFilter $active = null,
        ?FloatFilter $price = null,
        ?IntegerFilter $stock = null,
        ?StringFilter $title = null
    ): TestFilter {
        return new TestFilter(
            $active,
            $price,
            $stock,
            $title
        );
    }
}
