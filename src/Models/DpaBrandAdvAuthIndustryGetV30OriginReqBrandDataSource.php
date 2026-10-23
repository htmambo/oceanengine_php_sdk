<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class DpaBrandAdvAuthIndustryGetV30OriginReqBrandDataSource
{
    public const YUNTU_DpaBrandAdvAuthIndustryGetV30OriginReqBrandDataSource = 'YUNTU';

    public const ALLOWED_VALUES = [
        self::YUNTU_DpaBrandAdvAuthIndustryGetV30OriginReqBrandDataSource,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum DpaBrandAdvAuthIndustryGetV30OriginReqBrandDataSource', $value));
        }
        return (string) $value;
    }
}
