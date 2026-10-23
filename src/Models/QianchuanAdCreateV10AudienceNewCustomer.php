<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanAdCreateV10AudienceNewCustomer
{
    public const NONE_QianchuanAdCreateV10AudienceNewCustomer = 'NONE';
    public const NO_BUY_QianchuanAdCreateV10AudienceNewCustomer = 'NO_BUY';
    public const NO_BUY_BRAND_QianchuanAdCreateV10AudienceNewCustomer = 'NO_BUY_BRAND';
    public const NO_BUY_DOUYIN_QianchuanAdCreateV10AudienceNewCustomer = 'NO_BUY_DOUYIN';

    public const ALLOWED_VALUES = [
        self::NONE_QianchuanAdCreateV10AudienceNewCustomer,
        self::NO_BUY_QianchuanAdCreateV10AudienceNewCustomer,
        self::NO_BUY_BRAND_QianchuanAdCreateV10AudienceNewCustomer,
        self::NO_BUY_DOUYIN_QianchuanAdCreateV10AudienceNewCustomer,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanAdCreateV10AudienceNewCustomer', $value));
        }
        return (string) $value;
    }
}
