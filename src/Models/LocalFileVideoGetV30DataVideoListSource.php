<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class LocalFileVideoGetV30DataVideoListSource
{
    public const BP_PLATFORM_LocalFileVideoGetV30DataVideoListSource = 'BP_PLATFORM';
    public const CREATIVE_AIGC_LocalFileVideoGetV30DataVideoListSource = 'CREATIVE_AIGC';
    public const LOCAL_ADS_UPLOAD_LocalFileVideoGetV30DataVideoListSource = 'LOCAL_ADS_UPLOAD';
    public const MAPI_LocalFileVideoGetV30DataVideoListSource = 'MAPI';
    public const STAR_LocalFileVideoGetV30DataVideoListSource = 'STAR';

    public const ALLOWED_VALUES = [
        self::BP_PLATFORM_LocalFileVideoGetV30DataVideoListSource,
        self::CREATIVE_AIGC_LocalFileVideoGetV30DataVideoListSource,
        self::LOCAL_ADS_UPLOAD_LocalFileVideoGetV30DataVideoListSource,
        self::MAPI_LocalFileVideoGetV30DataVideoListSource,
        self::STAR_LocalFileVideoGetV30DataVideoListSource,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum LocalFileVideoGetV30DataVideoListSource', $value));
        }
        return (string) $value;
    }
}
