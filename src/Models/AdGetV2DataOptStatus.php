<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class AdGetV2DataOptStatus
{
    public const AD_STATUS_DISABLE_AdGetV2DataOptStatus = 'AD_STATUS_DISABLE';
    public const AD_STATUS_ENABLE_AdGetV2DataOptStatus = 'AD_STATUS_ENABLE';
    public const AD_STATUS_FROZEN_AdGetV2DataOptStatus = 'AD_STATUS_FROZEN';
    public const AD_STATUS_DISABLE_BY_QUOTA_AdGetV2DataOptStatus = 'AD_STATUS_DISABLE_BY_QUOTA';

    public const ALLOWED_VALUES = [
        self::AD_STATUS_DISABLE_AdGetV2DataOptStatus,
        self::AD_STATUS_ENABLE_AdGetV2DataOptStatus,
        self::AD_STATUS_FROZEN_AdGetV2DataOptStatus,
        self::AD_STATUS_DISABLE_BY_QUOTA_AdGetV2DataOptStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum AdGetV2DataOptStatus', $value));
        }
        return (string) $value;
    }
}
