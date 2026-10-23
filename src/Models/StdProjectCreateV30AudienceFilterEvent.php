<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class StdProjectCreateV30AudienceFilterEvent
{
    public const AD_CONVERT_EXTERNAL_ACTION_StdProjectCreateV30AudienceFilterEvent = 'AD_CONVERT_EXTERNAL_ACTION';
    public const AD_CONVERT_TYPE_ACTIVE_StdProjectCreateV30AudienceFilterEvent = 'AD_CONVERT_TYPE_ACTIVE';
    public const AD_CONVERT_TYPE_ACTIVE_REGISTER_StdProjectCreateV30AudienceFilterEvent = 'AD_CONVERT_TYPE_ACTIVE_REGISTER';
    public const AD_CONVERT_TYPE_PAY_StdProjectCreateV30AudienceFilterEvent = 'AD_CONVERT_TYPE_PAY';

    public const ALLOWED_VALUES = [
        self::AD_CONVERT_EXTERNAL_ACTION_StdProjectCreateV30AudienceFilterEvent,
        self::AD_CONVERT_TYPE_ACTIVE_StdProjectCreateV30AudienceFilterEvent,
        self::AD_CONVERT_TYPE_ACTIVE_REGISTER_StdProjectCreateV30AudienceFilterEvent,
        self::AD_CONVERT_TYPE_PAY_StdProjectCreateV30AudienceFilterEvent,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum StdProjectCreateV30AudienceFilterEvent', $value));
        }
        return (string) $value;
    }
}
