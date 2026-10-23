<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanProductAvailableGetV10FilterTab
{
    public const SEPARATE_NEW_PRODUCT_ALL_QianchuanProductAvailableGetV10FilterTab = 'SEPARATE_NEW_PRODUCT_ALL';
    public const SEPARATE_NEW_PRODUCT_TO_BREAK_TEN_QianchuanProductAvailableGetV10FilterTab = 'SEPARATE_NEW_PRODUCT_TO_BREAK_TEN';
    public const SEPARATE_NEW_PRODUCT_TO_BREAK_ZERO_QianchuanProductAvailableGetV10FilterTab = 'SEPARATE_NEW_PRODUCT_TO_BREAK_ZERO';

    public const ALLOWED_VALUES = [
        self::SEPARATE_NEW_PRODUCT_ALL_QianchuanProductAvailableGetV10FilterTab,
        self::SEPARATE_NEW_PRODUCT_TO_BREAK_TEN_QianchuanProductAvailableGetV10FilterTab,
        self::SEPARATE_NEW_PRODUCT_TO_BREAK_ZERO_QianchuanProductAvailableGetV10FilterTab,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanProductAvailableGetV10FilterTab', $value));
        }
        return (string) $value;
    }
}
