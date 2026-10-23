<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class AudiencePackageCreateV2FilterEvent
{
    public const AD_CONVERT_TYPE_PAY_AudiencePackageCreateV2FilterEvent = 'AD_CONVERT_TYPE_PAY';
    public const AD_CONVERT_TYPE_ACTIVE_AudiencePackageCreateV2FilterEvent = 'AD_CONVERT_TYPE_ACTIVE';
    public const AD_CONVERT_EXTERNAL_ACTION_AudiencePackageCreateV2FilterEvent = 'AD_CONVERT_EXTERNAL_ACTION';
    public const AD_CONVERT_TYPE_ACTIVE_REGISTER_AudiencePackageCreateV2FilterEvent = 'AD_CONVERT_TYPE_ACTIVE_REGISTER';

    public const ALLOWED_VALUES = [
        self::AD_CONVERT_TYPE_PAY_AudiencePackageCreateV2FilterEvent,
        self::AD_CONVERT_TYPE_ACTIVE_AudiencePackageCreateV2FilterEvent,
        self::AD_CONVERT_EXTERNAL_ACTION_AudiencePackageCreateV2FilterEvent,
        self::AD_CONVERT_TYPE_ACTIVE_REGISTER_AudiencePackageCreateV2FilterEvent,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum AudiencePackageCreateV2FilterEvent', $value));
        }
        return (string) $value;
    }
}
