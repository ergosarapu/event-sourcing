<?php

declare(strict_types=1);

namespace Patchlevel\EventSourcing\Store\Header;

/**
 * @psalm-immutable
 * @experimental
 */
final class StreamVersionHeader
{
    /** @param positive-int $streamVersion */
    public function __construct(
        public readonly int $streamVersion,
    ) {
    }
}
