<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanFinanceWalletGetV10DataShareExpiringDetailListCategory
{
    public const COMMON_QianchuanFinanceWalletGetV10DataShareExpiringDetailListCategory = 'COMMON';
    public const DEFAULT_QianchuanFinanceWalletGetV10DataShareExpiringDetailListCategory = 'DEFAULT';
    public const SEARCH_QianchuanFinanceWalletGetV10DataShareExpiringDetailListCategory = 'SEARCH';
    public const UNION_QianchuanFinanceWalletGetV10DataShareExpiringDetailListCategory = 'UNION';

    public const ALLOWED_VALUES = [
        self::COMMON_QianchuanFinanceWalletGetV10DataShareExpiringDetailListCategory,
        self::DEFAULT_QianchuanFinanceWalletGetV10DataShareExpiringDetailListCategory,
        self::SEARCH_QianchuanFinanceWalletGetV10DataShareExpiringDetailListCategory,
        self::UNION_QianchuanFinanceWalletGetV10DataShareExpiringDetailListCategory,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanFinanceWalletGetV10DataShareExpiringDetailListCategory', $value));
        }
        return (string) $value;
    }
}
