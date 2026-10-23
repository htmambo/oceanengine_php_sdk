<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class StdProjectUpdateV30AudienceFilterEvent
{
    public const AD_CONVERT_EXTERNAL_ACTION_StdProjectUpdateV30AudienceFilterEvent = 'AD_CONVERT_EXTERNAL_ACTION';
    public const AD_CONVERT_TYPE_ACTIVE_StdProjectUpdateV30AudienceFilterEvent = 'AD_CONVERT_TYPE_ACTIVE';
    public const AD_CONVERT_TYPE_ACTIVE_REGISTER_StdProjectUpdateV30AudienceFilterEvent = 'AD_CONVERT_TYPE_ACTIVE_REGISTER';
    public const AD_CONVERT_TYPE_PAY_StdProjectUpdateV30AudienceFilterEvent = 'AD_CONVERT_TYPE_PAY';

    public const ALLOWED_VALUES = [
        self::AD_CONVERT_EXTERNAL_ACTION_StdProjectUpdateV30AudienceFilterEvent,
        self::AD_CONVERT_TYPE_ACTIVE_StdProjectUpdateV30AudienceFilterEvent,
        self::AD_CONVERT_TYPE_ACTIVE_REGISTER_StdProjectUpdateV30AudienceFilterEvent,
        self::AD_CONVERT_TYPE_PAY_StdProjectUpdateV30AudienceFilterEvent,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum StdProjectUpdateV30AudienceFilterEvent', $value));
        }
        return (string) $value;
    }
}
