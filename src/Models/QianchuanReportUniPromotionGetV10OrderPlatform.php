<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanReportUniPromotionGetV10OrderPlatform
{
    public const ALL_QianchuanReportUniPromotionGetV10OrderPlatform = 'ALL';
    public const ECP_AWEME_QianchuanReportUniPromotionGetV10OrderPlatform = 'ECP_AWEME';
    public const QIANCHUAN_QianchuanReportUniPromotionGetV10OrderPlatform = 'QIANCHUAN';

    public const ALLOWED_VALUES = [
        self::ALL_QianchuanReportUniPromotionGetV10OrderPlatform,
        self::ECP_AWEME_QianchuanReportUniPromotionGetV10OrderPlatform,
        self::QIANCHUAN_QianchuanReportUniPromotionGetV10OrderPlatform,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanReportUniPromotionGetV10OrderPlatform', $value));
        }
        return (string) $value;
    }
}
