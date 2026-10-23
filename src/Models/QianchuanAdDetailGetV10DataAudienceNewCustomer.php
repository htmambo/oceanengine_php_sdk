<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanAdDetailGetV10DataAudienceNewCustomer
{
    public const NONE_QianchuanAdDetailGetV10DataAudienceNewCustomer = 'NONE';
    public const NO_BUY_QianchuanAdDetailGetV10DataAudienceNewCustomer = 'NO_BUY';
    public const NO_BUY_BRAND_QianchuanAdDetailGetV10DataAudienceNewCustomer = 'NO_BUY_BRAND';
    public const NO_BUY_DOUYIN_QianchuanAdDetailGetV10DataAudienceNewCustomer = 'NO_BUY_DOUYIN';

    public const ALLOWED_VALUES = [
        self::NONE_QianchuanAdDetailGetV10DataAudienceNewCustomer,
        self::NO_BUY_QianchuanAdDetailGetV10DataAudienceNewCustomer,
        self::NO_BUY_BRAND_QianchuanAdDetailGetV10DataAudienceNewCustomer,
        self::NO_BUY_DOUYIN_QianchuanAdDetailGetV10DataAudienceNewCustomer,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanAdDetailGetV10DataAudienceNewCustomer', $value));
        }
        return (string) $value;
    }
}
