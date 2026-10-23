<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class AicElementGetV30OrderType
{
    public const ASC_AicElementGetV30OrderType = 'ASC';
    public const DESC_AicElementGetV30OrderType = 'DESC';

    public const ALLOWED_VALUES = [
        self::ASC_AicElementGetV30OrderType,
        self::DESC_AicElementGetV30OrderType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum AicElementGetV30OrderType', $value));
        }
        return (string) $value;
    }
}
