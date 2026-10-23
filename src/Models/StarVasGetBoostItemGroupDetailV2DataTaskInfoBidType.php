<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class StarVasGetBoostItemGroupDetailV2DataTaskInfoBidType
{
    public const AUTO_StarVasGetBoostItemGroupDetailV2DataTaskInfoBidType = 'AUTO';
    public const MANUAL_StarVasGetBoostItemGroupDetailV2DataTaskInfoBidType = 'MANUAL';

    public const ALLOWED_VALUES = [
        self::AUTO_StarVasGetBoostItemGroupDetailV2DataTaskInfoBidType,
        self::MANUAL_StarVasGetBoostItemGroupDetailV2DataTaskInfoBidType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum StarVasGetBoostItemGroupDetailV2DataTaskInfoBidType', $value));
        }
        return (string) $value;
    }
}
