<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class LocalProjectListV30DataProjectListBidType
{
    public const MANUAL_LocalProjectListV30DataProjectListBidType = 'MANUAL';
    public const MAX_CONVERSION_LocalProjectListV30DataProjectListBidType = 'MAX_CONVERSION';
    public const SMART_LocalProjectListV30DataProjectListBidType = 'SMART';
    public const STABILIZE_COSTS_LocalProjectListV30DataProjectListBidType = 'STABILIZE_COSTS';

    public const ALLOWED_VALUES = [
        self::MANUAL_LocalProjectListV30DataProjectListBidType,
        self::MAX_CONVERSION_LocalProjectListV30DataProjectListBidType,
        self::SMART_LocalProjectListV30DataProjectListBidType,
        self::STABILIZE_COSTS_LocalProjectListV30DataProjectListBidType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum LocalProjectListV30DataProjectListBidType', $value));
        }
        return (string) $value;
    }
}
