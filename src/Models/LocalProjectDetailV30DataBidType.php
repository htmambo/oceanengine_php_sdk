<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class LocalProjectDetailV30DataBidType
{
    public const MANUAL_LocalProjectDetailV30DataBidType = 'MANUAL';
    public const MAX_CONVERSION_LocalProjectDetailV30DataBidType = 'MAX_CONVERSION';
    public const SMART_LocalProjectDetailV30DataBidType = 'SMART';
    public const STABILIZE_COSTS_LocalProjectDetailV30DataBidType = 'STABILIZE_COSTS';

    public const ALLOWED_VALUES = [
        self::MANUAL_LocalProjectDetailV30DataBidType,
        self::MAX_CONVERSION_LocalProjectDetailV30DataBidType,
        self::SMART_LocalProjectDetailV30DataBidType,
        self::STABILIZE_COSTS_LocalProjectDetailV30DataBidType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum LocalProjectDetailV30DataBidType', $value));
        }
        return (string) $value;
    }
}
