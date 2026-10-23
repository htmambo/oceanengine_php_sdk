<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ChargeListV30PlatformList
{
    public const AD_ChargeListV30PlatformList = 'AD';
    public const DOU_JIA_ChargeListV30PlatformList = 'DOU_JIA';
    public const DOU_JIA_UPGRADE_ChargeListV30PlatformList = 'DOU_JIA_UPGRADE';

    public const ALLOWED_VALUES = [
        self::AD_ChargeListV30PlatformList,
        self::DOU_JIA_ChargeListV30PlatformList,
        self::DOU_JIA_UPGRADE_ChargeListV30PlatformList,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ChargeListV30PlatformList', $value));
        }
        return (string) $value;
    }
}
