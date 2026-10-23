<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class AudiencePackageCreateV2SmartExtend
{
    public const OFF_AudiencePackageCreateV2SmartExtend = 'OFF';
    public const NONE_AudiencePackageCreateV2SmartExtend = 'NONE';
    public const ON_AudiencePackageCreateV2SmartExtend = 'ON';

    public const ALLOWED_VALUES = [
        self::OFF_AudiencePackageCreateV2SmartExtend,
        self::NONE_AudiencePackageCreateV2SmartExtend,
        self::ON_AudiencePackageCreateV2SmartExtend,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum AudiencePackageCreateV2SmartExtend', $value));
        }
        return (string) $value;
    }
}
