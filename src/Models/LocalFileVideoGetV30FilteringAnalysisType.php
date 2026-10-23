<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class LocalFileVideoGetV30FilteringAnalysisType
{
    public const FIRST_PUBLISH_LocalFileVideoGetV30FilteringAnalysisType = 'FIRST_PUBLISH';
    public const FIRST_PUBLISH_AND_HIGH_QUALITY_LocalFileVideoGetV30FilteringAnalysisType = 'FIRST_PUBLISH_AND_HIGH_QUALITY';
    public const HIGH_QUALITY_LocalFileVideoGetV30FilteringAnalysisType = 'HIGH_QUALITY';

    public const ALLOWED_VALUES = [
        self::FIRST_PUBLISH_LocalFileVideoGetV30FilteringAnalysisType,
        self::FIRST_PUBLISH_AND_HIGH_QUALITY_LocalFileVideoGetV30FilteringAnalysisType,
        self::HIGH_QUALITY_LocalFileVideoGetV30FilteringAnalysisType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum LocalFileVideoGetV30FilteringAnalysisType', $value));
        }
        return (string) $value;
    }
}
