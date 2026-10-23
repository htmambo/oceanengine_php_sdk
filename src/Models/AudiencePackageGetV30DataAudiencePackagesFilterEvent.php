<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class AudiencePackageGetV30DataAudiencePackagesFilterEvent
{
    public const AD_CONVERT_EXTERNAL_ACTION_AudiencePackageGetV30DataAudiencePackagesFilterEvent = 'AD_CONVERT_EXTERNAL_ACTION';
    public const AD_CONVERT_TYPE_ACTIVE_AudiencePackageGetV30DataAudiencePackagesFilterEvent = 'AD_CONVERT_TYPE_ACTIVE';
    public const AD_CONVERT_TYPE_ACTIVE_REGISTER_AudiencePackageGetV30DataAudiencePackagesFilterEvent = 'AD_CONVERT_TYPE_ACTIVE_REGISTER';
    public const AD_CONVERT_TYPE_PAY_AudiencePackageGetV30DataAudiencePackagesFilterEvent = 'AD_CONVERT_TYPE_PAY';

    public const ALLOWED_VALUES = [
        self::AD_CONVERT_EXTERNAL_ACTION_AudiencePackageGetV30DataAudiencePackagesFilterEvent,
        self::AD_CONVERT_TYPE_ACTIVE_AudiencePackageGetV30DataAudiencePackagesFilterEvent,
        self::AD_CONVERT_TYPE_ACTIVE_REGISTER_AudiencePackageGetV30DataAudiencePackagesFilterEvent,
        self::AD_CONVERT_TYPE_PAY_AudiencePackageGetV30DataAudiencePackagesFilterEvent,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum AudiencePackageGetV30DataAudiencePackagesFilterEvent', $value));
        }
        return (string) $value;
    }
}
