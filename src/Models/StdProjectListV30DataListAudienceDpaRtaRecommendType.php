<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class StdProjectListV30DataListAudienceDpaRtaRecommendType
{
    public const MORE_StdProjectListV30DataListAudienceDpaRtaRecommendType = 'MORE';
    public const ONLY_StdProjectListV30DataListAudienceDpaRtaRecommendType = 'ONLY';

    public const ALLOWED_VALUES = [
        self::MORE_StdProjectListV30DataListAudienceDpaRtaRecommendType,
        self::ONLY_StdProjectListV30DataListAudienceDpaRtaRecommendType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum StdProjectListV30DataListAudienceDpaRtaRecommendType', $value));
        }
        return (string) $value;
    }
}
