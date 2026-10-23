<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class PrepayChargeGenerateFixRemiattanceCodeCreateV30Platform
{
    public const AD_PrepayChargeGenerateFixRemiattanceCodeCreateV30Platform = 'AD';
    public const DOU_JIA_PrepayChargeGenerateFixRemiattanceCodeCreateV30Platform = 'DOU_JIA';
    public const DOU_JIA_UPGRADE_PrepayChargeGenerateFixRemiattanceCodeCreateV30Platform = 'DOU_JIA_UPGRADE';
    public const NATIVE_LIFE_AD_PrepayChargeGenerateFixRemiattanceCodeCreateV30Platform = 'NATIVE_LIFE_AD';
    public const QIANCHUAN_PrepayChargeGenerateFixRemiattanceCodeCreateV30Platform = 'QIANCHUAN';

    public const ALLOWED_VALUES = [
        self::AD_PrepayChargeGenerateFixRemiattanceCodeCreateV30Platform,
        self::DOU_JIA_PrepayChargeGenerateFixRemiattanceCodeCreateV30Platform,
        self::DOU_JIA_UPGRADE_PrepayChargeGenerateFixRemiattanceCodeCreateV30Platform,
        self::NATIVE_LIFE_AD_PrepayChargeGenerateFixRemiattanceCodeCreateV30Platform,
        self::QIANCHUAN_PrepayChargeGenerateFixRemiattanceCodeCreateV30Platform,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum PrepayChargeGenerateFixRemiattanceCodeCreateV30Platform', $value));
        }
        return (string) $value;
    }
}
