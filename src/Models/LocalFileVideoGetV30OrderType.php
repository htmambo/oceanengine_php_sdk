<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class LocalFileVideoGetV30OrderType
{
    public const ASC_LocalFileVideoGetV30OrderType = 'ASC';
    public const DESC_LocalFileVideoGetV30OrderType = 'DESC';

    public const ALLOWED_VALUES = [
        self::ASC_LocalFileVideoGetV30OrderType,
        self::DESC_LocalFileVideoGetV30OrderType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum LocalFileVideoGetV30OrderType', $value));
        }
        return (string) $value;
    }
}
