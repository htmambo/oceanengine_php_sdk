<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class LocalOcProjectListV30DataProjectListBidType
{
    public const MAX_CONVERSION_LocalOcProjectListV30DataProjectListBidType = 'MAX_CONVERSION';
    public const STABILIZE_COSTS_LocalOcProjectListV30DataProjectListBidType = 'STABILIZE_COSTS';

    public const ALLOWED_VALUES = [
        self::MAX_CONVERSION_LocalOcProjectListV30DataProjectListBidType,
        self::STABILIZE_COSTS_LocalOcProjectListV30DataProjectListBidType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum LocalOcProjectListV30DataProjectListBidType', $value));
        }
        return (string) $value;
    }
}
