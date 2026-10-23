<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class AudiencePackageGetV30FilteringDeliveryRange
{
    public const DEFAULT_AudiencePackageGetV30FilteringDeliveryRange = 'DEFAULT';
    public const UNION_AudiencePackageGetV30FilteringDeliveryRange = 'UNION';

    public const ALLOWED_VALUES = [
        self::DEFAULT_AudiencePackageGetV30FilteringDeliveryRange,
        self::UNION_AudiencePackageGetV30FilteringDeliveryRange,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum AudiencePackageGetV30FilteringDeliveryRange', $value));
        }
        return (string) $value;
    }
}
