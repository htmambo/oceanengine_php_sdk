<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class AudiencePackageUpdateV2FilterEvent
{
    public const AD_CONVERT_TYPE_PAY_AudiencePackageUpdateV2FilterEvent = 'AD_CONVERT_TYPE_PAY';
    public const AD_CONVERT_TYPE_ACTIVE_AudiencePackageUpdateV2FilterEvent = 'AD_CONVERT_TYPE_ACTIVE';
    public const AD_CONVERT_EXTERNAL_ACTION_AudiencePackageUpdateV2FilterEvent = 'AD_CONVERT_EXTERNAL_ACTION';
    public const AD_CONVERT_TYPE_ACTIVE_REGISTER_AudiencePackageUpdateV2FilterEvent = 'AD_CONVERT_TYPE_ACTIVE_REGISTER';

    public const ALLOWED_VALUES = [
        self::AD_CONVERT_TYPE_PAY_AudiencePackageUpdateV2FilterEvent,
        self::AD_CONVERT_TYPE_ACTIVE_AudiencePackageUpdateV2FilterEvent,
        self::AD_CONVERT_EXTERNAL_ACTION_AudiencePackageUpdateV2FilterEvent,
        self::AD_CONVERT_TYPE_ACTIVE_REGISTER_AudiencePackageUpdateV2FilterEvent,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum AudiencePackageUpdateV2FilterEvent', $value));
        }
        return (string) $value;
    }
}
