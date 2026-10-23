<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class RemittanceCodeListGetV30DataRemittanceInfoListPlatform
{
    public const AD_RemittanceCodeListGetV30DataRemittanceInfoListPlatform = 'AD';
    public const DOU_JIA_RemittanceCodeListGetV30DataRemittanceInfoListPlatform = 'DOU_JIA';
    public const DOU_JIA_UPGRADE_RemittanceCodeListGetV30DataRemittanceInfoListPlatform = 'DOU_JIA_UPGRADE';
    public const NATIVE_LIFE_AD_RemittanceCodeListGetV30DataRemittanceInfoListPlatform = 'NATIVE_LIFE_AD';
    public const QIANCHUAN_RemittanceCodeListGetV30DataRemittanceInfoListPlatform = 'QIANCHUAN';

    public const ALLOWED_VALUES = [
        self::AD_RemittanceCodeListGetV30DataRemittanceInfoListPlatform,
        self::DOU_JIA_RemittanceCodeListGetV30DataRemittanceInfoListPlatform,
        self::DOU_JIA_UPGRADE_RemittanceCodeListGetV30DataRemittanceInfoListPlatform,
        self::NATIVE_LIFE_AD_RemittanceCodeListGetV30DataRemittanceInfoListPlatform,
        self::QIANCHUAN_RemittanceCodeListGetV30DataRemittanceInfoListPlatform,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum RemittanceCodeListGetV30DataRemittanceInfoListPlatform', $value));
        }
        return (string) $value;
    }
}
