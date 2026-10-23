<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class EventManagerEventConfigsGetV2SortType
{
    public const DESC_EventManagerEventConfigsGetV2SortType = 'DESC';
    public const ASC_EventManagerEventConfigsGetV2SortType = 'ASC';

    public const ALLOWED_VALUES = [
        self::DESC_EventManagerEventConfigsGetV2SortType,
        self::ASC_EventManagerEventConfigsGetV2SortType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum EventManagerEventConfigsGetV2SortType', $value));
        }
        return (string) $value;
    }
}
