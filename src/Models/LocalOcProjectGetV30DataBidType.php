<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class LocalOcProjectGetV30DataBidType
{
    public const MAX_CONVERSION_LocalOcProjectGetV30DataBidType = 'MAX_CONVERSION';
    public const STABILIZE_COSTS_LocalOcProjectGetV30DataBidType = 'STABILIZE_COSTS';

    public const ALLOWED_VALUES = [
        self::MAX_CONVERSION_LocalOcProjectGetV30DataBidType,
        self::STABILIZE_COSTS_LocalOcProjectGetV30DataBidType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum LocalOcProjectGetV30DataBidType', $value));
        }
        return (string) $value;
    }
}
