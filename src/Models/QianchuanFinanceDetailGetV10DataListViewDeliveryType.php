<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanFinanceDetailGetV10DataListViewDeliveryType
{
    public const ALL_QianchuanFinanceDetailGetV10DataListViewDeliveryType = 'ALL';
    public const DEFAULT_QianchuanFinanceDetailGetV10DataListViewDeliveryType = 'DEFAULT';
    public const BRAND_QianchuanFinanceDetailGetV10DataListViewDeliveryType = 'BRAND';

    public const ALLOWED_VALUES = [
        self::ALL_QianchuanFinanceDetailGetV10DataListViewDeliveryType,
        self::DEFAULT_QianchuanFinanceDetailGetV10DataListViewDeliveryType,
        self::BRAND_QianchuanFinanceDetailGetV10DataListViewDeliveryType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanFinanceDetailGetV10DataListViewDeliveryType', $value));
        }
        return (string) $value;
    }
}
