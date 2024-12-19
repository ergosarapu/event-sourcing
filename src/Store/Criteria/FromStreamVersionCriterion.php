<?php

declare(strict_types=1);

namespace Patchlevel\EventSourcing\Store\Criteria;

/** @experimental */
final class FromStreamVersionCriterion
{
    public function __construct(
        public readonly int $fromStreamVersion,
    ) {
    }
}
