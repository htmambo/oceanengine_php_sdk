<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class StdProjectUpdateV30AudienceRegionRecommend
{
    public const OFF_StdProjectUpdateV30AudienceRegionRecommend = 'OFF';
    public const ON_StdProjectUpdateV30AudienceRegionRecommend = 'ON';

    public const ALLOWED_VALUES = [
        self::OFF_StdProjectUpdateV30AudienceRegionRecommend,
        self::ON_StdProjectUpdateV30AudienceRegionRecommend,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum StdProjectUpdateV30AudienceRegionRecommend', $value));
        }
        return (string) $value;
    }
}
