<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ProjectListV30DataListAudienceDpaRtaRecommendType
{
    public const MORE_ProjectListV30DataListAudienceDpaRtaRecommendType = 'MORE';
    public const ONLY_ProjectListV30DataListAudienceDpaRtaRecommendType = 'ONLY';

    public const ALLOWED_VALUES = [
        self::MORE_ProjectListV30DataListAudienceDpaRtaRecommendType,
        self::ONLY_ProjectListV30DataListAudienceDpaRtaRecommendType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ProjectListV30DataListAudienceDpaRtaRecommendType', $value));
        }
        return (string) $value;
    }
}
