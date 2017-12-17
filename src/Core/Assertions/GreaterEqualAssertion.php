<?php

declare(strict_types=1);

namespace Phrantiques\Security\Core\Assertions;

class GreaterEqualAssertion implements Assertion
{
    /**
     * @inheritdoc
     */
    public function assert($valueA, $valueB): bool
    {
        return (int) $valueA >= (int) $valueB;
    }
}
