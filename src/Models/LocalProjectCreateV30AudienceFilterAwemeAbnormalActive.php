<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class LocalProjectCreateV30AudienceFilterAwemeAbnormalActive
{
    public const FILTER_AWEME_ABNORMAL_ACTIVE_TYPE_OFF_LocalProjectCreateV30AudienceFilterAwemeAbnormalActive = 'FILTER_AWEME_ABNORMAL_ACTIVE_TYPE_OFF';
    public const FILTER_AWEME_ABNORMAL_ACTIVE_TYPE_ON_LocalProjectCreateV30AudienceFilterAwemeAbnormalActive = 'FILTER_AWEME_ABNORMAL_ACTIVE_TYPE_ON';

    public const ALLOWED_VALUES = [
        self::FILTER_AWEME_ABNORMAL_ACTIVE_TYPE_OFF_LocalProjectCreateV30AudienceFilterAwemeAbnormalActive,
        self::FILTER_AWEME_ABNORMAL_ACTIVE_TYPE_ON_LocalProjectCreateV30AudienceFilterAwemeAbnormalActive,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum LocalProjectCreateV30AudienceFilterAwemeAbnormalActive', $value));
        }
        return (string) $value;
    }
}
