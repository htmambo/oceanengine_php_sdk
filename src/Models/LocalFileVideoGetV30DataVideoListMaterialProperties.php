<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class LocalFileVideoGetV30DataVideoListMaterialProperties
{
    public const COPY_LocalFileVideoGetV30DataVideoListMaterialProperties = 'COPY';
    public const FIRST_PUBLISH_LocalFileVideoGetV30DataVideoListMaterialProperties = 'FIRST_PUBLISH';
    public const HIGH_QUALITY_LocalFileVideoGetV30DataVideoListMaterialProperties = 'HIGH_QUALITY';
    public const LOW_EFFICIENY_LocalFileVideoGetV30DataVideoListMaterialProperties = 'LOW_EFFICIENY';
    public const LOW_QUALITY_LocalFileVideoGetV30DataVideoListMaterialProperties = 'LOW_QUALITY';
    public const SIMILAR_LocalFileVideoGetV30DataVideoListMaterialProperties = 'SIMILAR';

    public const ALLOWED_VALUES = [
        self::COPY_LocalFileVideoGetV30DataVideoListMaterialProperties,
        self::FIRST_PUBLISH_LocalFileVideoGetV30DataVideoListMaterialProperties,
        self::HIGH_QUALITY_LocalFileVideoGetV30DataVideoListMaterialProperties,
        self::LOW_EFFICIENY_LocalFileVideoGetV30DataVideoListMaterialProperties,
        self::LOW_QUALITY_LocalFileVideoGetV30DataVideoListMaterialProperties,
        self::SIMILAR_LocalFileVideoGetV30DataVideoListMaterialProperties,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum LocalFileVideoGetV30DataVideoListMaterialProperties', $value));
        }
        return (string) $value;
    }
}
