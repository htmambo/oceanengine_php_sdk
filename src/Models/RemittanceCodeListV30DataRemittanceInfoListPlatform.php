<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class RemittanceCodeListV30DataRemittanceInfoListPlatform
{
    public const AD_RemittanceCodeListV30DataRemittanceInfoListPlatform = 'AD';
    public const DOU_JIA_UPGRADE_RemittanceCodeListV30DataRemittanceInfoListPlatform = 'DOU_JIA_UPGRADE';
    public const NATIVE_LIFE_AD_RemittanceCodeListV30DataRemittanceInfoListPlatform = 'NATIVE_LIFE_AD';
    public const QIANCHUAN_RemittanceCodeListV30DataRemittanceInfoListPlatform = 'QIANCHUAN';

    public const ALLOWED_VALUES = [
        self::AD_RemittanceCodeListV30DataRemittanceInfoListPlatform,
        self::DOU_JIA_UPGRADE_RemittanceCodeListV30DataRemittanceInfoListPlatform,
        self::NATIVE_LIFE_AD_RemittanceCodeListV30DataRemittanceInfoListPlatform,
        self::QIANCHUAN_RemittanceCodeListV30DataRemittanceInfoListPlatform,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum RemittanceCodeListV30DataRemittanceInfoListPlatform', $value));
        }
        return (string) $value;
    }
}
