<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class LocalProjectListV30FilteringBidType
{
    public const ALL_LocalProjectListV30FilteringBidType = 'ALL';
    public const MANUAL_LocalProjectListV30FilteringBidType = 'MANUAL';
    public const MAX_CONVERSION_LocalProjectListV30FilteringBidType = 'MAX_CONVERSION';
    public const SMART_LocalProjectListV30FilteringBidType = 'SMART';
    public const STABILIZE_COSTS_LocalProjectListV30FilteringBidType = 'STABILIZE_COSTS';

    public const ALLOWED_VALUES = [
        self::ALL_LocalProjectListV30FilteringBidType,
        self::MANUAL_LocalProjectListV30FilteringBidType,
        self::MAX_CONVERSION_LocalProjectListV30FilteringBidType,
        self::SMART_LocalProjectListV30FilteringBidType,
        self::STABILIZE_COSTS_LocalProjectListV30FilteringBidType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum LocalProjectListV30FilteringBidType', $value));
        }
        return (string) $value;
    }
}
