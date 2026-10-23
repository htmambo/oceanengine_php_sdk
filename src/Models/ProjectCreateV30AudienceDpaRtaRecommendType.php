<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ProjectCreateV30AudienceDpaRtaRecommendType
{
    public const MORE_ProjectCreateV30AudienceDpaRtaRecommendType = 'MORE';
    public const ONLY_ProjectCreateV30AudienceDpaRtaRecommendType = 'ONLY';

    public const ALLOWED_VALUES = [
        self::MORE_ProjectCreateV30AudienceDpaRtaRecommendType,
        self::ONLY_ProjectCreateV30AudienceDpaRtaRecommendType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ProjectCreateV30AudienceDpaRtaRecommendType', $value));
        }
        return (string) $value;
    }
}
