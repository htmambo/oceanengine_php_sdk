<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanShopAdvertiserListV10Permission
{
    public const QC_AWEME_QianchuanShopAdvertiserListV10Permission = 'QC_AWEME';

    public const ALLOWED_VALUES = [
        self::QC_AWEME_QianchuanShopAdvertiserListV10Permission,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanShopAdvertiserListV10Permission', $value));
        }
        return (string) $value;
    }
}
