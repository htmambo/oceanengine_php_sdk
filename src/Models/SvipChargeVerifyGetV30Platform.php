<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class SvipChargeVerifyGetV30Platform
{
    public const AD_SvipChargeVerifyGetV30Platform = 'AD';
    public const DOU_JIA_SvipChargeVerifyGetV30Platform = 'DOU_JIA';
    public const DOU_JIA_UPGRADE_SvipChargeVerifyGetV30Platform = 'DOU_JIA_UPGRADE';
    public const NATIVE_LIFE_AD_SvipChargeVerifyGetV30Platform = 'NATIVE_LIFE_AD';
    public const QIANCHUAN_SvipChargeVerifyGetV30Platform = 'QIANCHUAN';

    public const ALLOWED_VALUES = [
        self::AD_SvipChargeVerifyGetV30Platform,
        self::DOU_JIA_SvipChargeVerifyGetV30Platform,
        self::DOU_JIA_UPGRADE_SvipChargeVerifyGetV30Platform,
        self::NATIVE_LIFE_AD_SvipChargeVerifyGetV30Platform,
        self::QIANCHUAN_SvipChargeVerifyGetV30Platform,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum SvipChargeVerifyGetV30Platform', $value));
        }
        return (string) $value;
    }
}
