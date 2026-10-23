<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class AudiencePackageUpdateV2SmartExtend
{
    public const OFF_AudiencePackageUpdateV2SmartExtend = 'OFF';
    public const NONE_AudiencePackageUpdateV2SmartExtend = 'NONE';
    public const ON_AudiencePackageUpdateV2SmartExtend = 'ON';

    public const ALLOWED_VALUES = [
        self::OFF_AudiencePackageUpdateV2SmartExtend,
        self::NONE_AudiencePackageUpdateV2SmartExtend,
        self::ON_AudiencePackageUpdateV2SmartExtend,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum AudiencePackageUpdateV2SmartExtend', $value));
        }
        return (string) $value;
    }
}
