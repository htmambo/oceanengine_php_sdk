<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class BusinessPlatformCompanyAccountGetV30AccountType
{
    public const AD_BusinessPlatformCompanyAccountGetV30AccountType = 'AD';
    public const QIANCHUAN_BusinessPlatformCompanyAccountGetV30AccountType = 'QIANCHUAN';

    public const ALLOWED_VALUES = [
        self::AD_BusinessPlatformCompanyAccountGetV30AccountType,
        self::QIANCHUAN_BusinessPlatformCompanyAccountGetV30AccountType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum BusinessPlatformCompanyAccountGetV30AccountType', $value));
        }
        return (string) $value;
    }
}
