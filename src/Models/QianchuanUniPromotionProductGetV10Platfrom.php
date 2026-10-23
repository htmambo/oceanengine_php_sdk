<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanUniPromotionProductGetV10Platfrom
{
    public const ECP_AWEME_QianchuanUniPromotionProductGetV10Platfrom = 'ECP_AWEME';
    public const QIANCHUAN_QianchuanUniPromotionProductGetV10Platfrom = 'QIANCHUAN';

    public const ALLOWED_VALUES = [
        self::ECP_AWEME_QianchuanUniPromotionProductGetV10Platfrom,
        self::QIANCHUAN_QianchuanUniPromotionProductGetV10Platfrom,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanUniPromotionProductGetV10Platfrom', $value));
        }
        return (string) $value;
    }
}
