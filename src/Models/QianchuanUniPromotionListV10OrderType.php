<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanUniPromotionListV10OrderType
{
    public const ASC_QianchuanUniPromotionListV10OrderType = 'ASC';
    public const DESC_QianchuanUniPromotionListV10OrderType = 'DESC';

    public const ALLOWED_VALUES = [
        self::ASC_QianchuanUniPromotionListV10OrderType,
        self::DESC_QianchuanUniPromotionListV10OrderType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanUniPromotionListV10OrderType', $value));
        }
        return (string) $value;
    }
}
