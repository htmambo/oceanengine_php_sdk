<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class AdGetV2DataAudienceAppBehaviorTarget
{
    public const APP_AdGetV2DataAudienceAppBehaviorTarget = 'APP';
    public const CATEGORY_AdGetV2DataAudienceAppBehaviorTarget = 'CATEGORY';
    public const NONE_AdGetV2DataAudienceAppBehaviorTarget = 'NONE';

    public const ALLOWED_VALUES = [
        self::APP_AdGetV2DataAudienceAppBehaviorTarget,
        self::CATEGORY_AdGetV2DataAudienceAppBehaviorTarget,
        self::NONE_AdGetV2DataAudienceAppBehaviorTarget,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum AdGetV2DataAudienceAppBehaviorTarget', $value));
        }
        return (string) $value;
    }
}
