<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanReportAllPromotionGetV10OrderPlatform
{
    public const ALL_QianchuanReportAllPromotionGetV10OrderPlatform = 'ALL';
    public const ECP_AWEME_QianchuanReportAllPromotionGetV10OrderPlatform = 'ECP_AWEME';
    public const QIANCHUAN_QianchuanReportAllPromotionGetV10OrderPlatform = 'QIANCHUAN';

    public const ALLOWED_VALUES = [
        self::ALL_QianchuanReportAllPromotionGetV10OrderPlatform,
        self::ECP_AWEME_QianchuanReportAllPromotionGetV10OrderPlatform,
        self::QIANCHUAN_QianchuanReportAllPromotionGetV10OrderPlatform,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanReportAllPromotionGetV10OrderPlatform', $value));
        }
        return (string) $value;
    }
}
