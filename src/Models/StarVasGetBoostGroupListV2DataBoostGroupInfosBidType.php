<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class StarVasGetBoostGroupListV2DataBoostGroupInfosBidType
{
    public const AUTO_StarVasGetBoostGroupListV2DataBoostGroupInfosBidType = 'AUTO';
    public const MANUAL_StarVasGetBoostGroupListV2DataBoostGroupInfosBidType = 'MANUAL';

    public const ALLOWED_VALUES = [
        self::AUTO_StarVasGetBoostGroupListV2DataBoostGroupInfosBidType,
        self::MANUAL_StarVasGetBoostGroupListV2DataBoostGroupInfosBidType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum StarVasGetBoostGroupListV2DataBoostGroupInfosBidType', $value));
        }
        return (string) $value;
    }
}
