<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class AudiencePackageCreateV2DeliveryRange
{
    public const DEFAULT_AudiencePackageCreateV2DeliveryRange = 'DEFAULT';
    public const UNIVERSAL_AudiencePackageCreateV2DeliveryRange = 'UNIVERSAL';
    public const UNION_AudiencePackageCreateV2DeliveryRange = 'UNION';

    public const ALLOWED_VALUES = [
        self::DEFAULT_AudiencePackageCreateV2DeliveryRange,
        self::UNIVERSAL_AudiencePackageCreateV2DeliveryRange,
        self::UNION_AudiencePackageCreateV2DeliveryRange,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum AudiencePackageCreateV2DeliveryRange', $value));
        }
        return (string) $value;
    }
}
