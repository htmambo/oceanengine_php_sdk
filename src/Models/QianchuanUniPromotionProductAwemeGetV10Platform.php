<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanUniPromotionProductAwemeGetV10Platform
{
    public const ECP_AWEME_QianchuanUniPromotionProductAwemeGetV10Platform = 'ECP_AWEME';
    public const QIANCHUAN_QianchuanUniPromotionProductAwemeGetV10Platform = 'QIANCHUAN';

    public const ALLOWED_VALUES = [
        self::ECP_AWEME_QianchuanUniPromotionProductAwemeGetV10Platform,
        self::QIANCHUAN_QianchuanUniPromotionProductAwemeGetV10Platform,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanUniPromotionProductAwemeGetV10Platform', $value));
        }
        return (string) $value;
    }
}
