<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class BusinessPlatformCompanyInfoGetV30DataCompanyInfoType
{
    public const BP_OTHER_BusinessPlatformCompanyInfoGetV30DataCompanyInfoType = 'BP_OTHER';
    public const BP_OWN_BusinessPlatformCompanyInfoGetV30DataCompanyInfoType = 'BP_OWN';

    public const ALLOWED_VALUES = [
        self::BP_OTHER_BusinessPlatformCompanyInfoGetV30DataCompanyInfoType,
        self::BP_OWN_BusinessPlatformCompanyInfoGetV30DataCompanyInfoType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum BusinessPlatformCompanyInfoGetV30DataCompanyInfoType', $value));
        }
        return (string) $value;
    }
}
