<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class LocalFileVideoGetV30FilteringMaterialSource
{
    public const BP_PLATFORM_LocalFileVideoGetV30FilteringMaterialSource = 'BP_PLATFORM';
    public const CREATIVE_AIGC_LocalFileVideoGetV30FilteringMaterialSource = 'CREATIVE_AIGC';
    public const LOCAL_ADS_UPLOAD_LocalFileVideoGetV30FilteringMaterialSource = 'LOCAL_ADS_UPLOAD';
    public const MAPI_LocalFileVideoGetV30FilteringMaterialSource = 'MAPI';
    public const STAR_LocalFileVideoGetV30FilteringMaterialSource = 'STAR';

    public const ALLOWED_VALUES = [
        self::BP_PLATFORM_LocalFileVideoGetV30FilteringMaterialSource,
        self::CREATIVE_AIGC_LocalFileVideoGetV30FilteringMaterialSource,
        self::LOCAL_ADS_UPLOAD_LocalFileVideoGetV30FilteringMaterialSource,
        self::MAPI_LocalFileVideoGetV30FilteringMaterialSource,
        self::STAR_LocalFileVideoGetV30FilteringMaterialSource,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum LocalFileVideoGetV30FilteringMaterialSource', $value));
        }
        return (string) $value;
    }
}
