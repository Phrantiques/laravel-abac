<?php

declare(strict_types=1);

namespace Phrantiques\Security\Core\Algorithms;

use Phrantiques\Security\Services\Security;

class PermitWhenPermittedAndNotDenied implements Algorithm
{
    /**
     * @param string[] $results
     *
     * @return string
     */
    public function evaluate(array $results): string
    {
        if (!in_array(Security::EVALUATION_EFFECT_DENY, $results, true) &&
             in_array(Security::EVALUATION_EFFECT_PERMIT, $results, true)) {

            return Security::EVALUATION_EFFECT_PERMIT;
        }

        return Security::EVALUATION_EFFECT_DENY;
    }
}
