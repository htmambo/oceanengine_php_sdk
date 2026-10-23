<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class FixRemittanceCodeListGetV30DataRemittanceInfoListPlatform
{
    public const AD_FixRemittanceCodeListGetV30DataRemittanceInfoListPlatform = 'AD';
    public const DOU_JIA_FixRemittanceCodeListGetV30DataRemittanceInfoListPlatform = 'DOU_JIA';
    public const DOU_JIA_UPGRADE_FixRemittanceCodeListGetV30DataRemittanceInfoListPlatform = 'DOU_JIA_UPGRADE';
    public const NATIVE_LIFE_AD_FixRemittanceCodeListGetV30DataRemittanceInfoListPlatform = 'NATIVE_LIFE_AD';
    public const QIANCHUAN_FixRemittanceCodeListGetV30DataRemittanceInfoListPlatform = 'QIANCHUAN';

    public const ALLOWED_VALUES = [
        self::AD_FixRemittanceCodeListGetV30DataRemittanceInfoListPlatform,
        self::DOU_JIA_FixRemittanceCodeListGetV30DataRemittanceInfoListPlatform,
        self::DOU_JIA_UPGRADE_FixRemittanceCodeListGetV30DataRemittanceInfoListPlatform,
        self::NATIVE_LIFE_AD_FixRemittanceCodeListGetV30DataRemittanceInfoListPlatform,
        self::QIANCHUAN_FixRemittanceCodeListGetV30DataRemittanceInfoListPlatform,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum FixRemittanceCodeListGetV30DataRemittanceInfoListPlatform', $value));
        }
        return (string) $value;
    }
}
