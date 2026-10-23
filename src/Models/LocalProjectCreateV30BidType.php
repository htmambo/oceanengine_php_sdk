<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class LocalProjectCreateV30BidType
{
    public const MANUAL_LocalProjectCreateV30BidType = 'MANUAL';
    public const MAX_CONVERSION_LocalProjectCreateV30BidType = 'MAX_CONVERSION';
    public const SMART_LocalProjectCreateV30BidType = 'SMART';
    public const STABILIZE_COSTS_LocalProjectCreateV30BidType = 'STABILIZE_COSTS';

    public const ALLOWED_VALUES = [
        self::MANUAL_LocalProjectCreateV30BidType,
        self::MAX_CONVERSION_LocalProjectCreateV30BidType,
        self::SMART_LocalProjectCreateV30BidType,
        self::STABILIZE_COSTS_LocalProjectCreateV30BidType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum LocalProjectCreateV30BidType', $value));
        }
        return (string) $value;
    }
}
