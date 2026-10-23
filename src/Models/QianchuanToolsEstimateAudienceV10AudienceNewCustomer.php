<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanToolsEstimateAudienceV10AudienceNewCustomer
{
    public const NONE_QianchuanToolsEstimateAudienceV10AudienceNewCustomer = 'NONE';
    public const NO_BUY_QianchuanToolsEstimateAudienceV10AudienceNewCustomer = 'NO_BUY';

    public const ALLOWED_VALUES = [
        self::NONE_QianchuanToolsEstimateAudienceV10AudienceNewCustomer,
        self::NO_BUY_QianchuanToolsEstimateAudienceV10AudienceNewCustomer,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanToolsEstimateAudienceV10AudienceNewCustomer', $value));
        }
        return (string) $value;
    }
}
