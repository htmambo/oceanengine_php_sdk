<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class LocalFileVideoAwemeGetV30FilteringItemStatus
{
    public const ALL_LocalFileVideoAwemeGetV30FilteringItemStatus = 'ALL';
    public const VALID_LocalFileVideoAwemeGetV30FilteringItemStatus = 'VALID';

    public const ALLOWED_VALUES = [
        self::ALL_LocalFileVideoAwemeGetV30FilteringItemStatus,
        self::VALID_LocalFileVideoAwemeGetV30FilteringItemStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum LocalFileVideoAwemeGetV30FilteringItemStatus', $value));
        }
        return (string) $value;
    }
}
