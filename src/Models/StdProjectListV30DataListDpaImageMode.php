<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class StdProjectListV30DataListDpaImageMode
{
    public const CREATIVE_IMAGE_MODE_LARGE_StdProjectListV30DataListDpaImageMode = 'CREATIVE_IMAGE_MODE_LARGE';
    public const CREATIVE_IMAGE_MODE_SMALL_StdProjectListV30DataListDpaImageMode = 'CREATIVE_IMAGE_MODE_SMALL';
    public const CREATIVE_IMAGE_MODE_UNION_SPLASH_StdProjectListV30DataListDpaImageMode = 'CREATIVE_IMAGE_MODE_UNION_SPLASH';
    public const CREATIVE_IMAGE_MODE_VIDEO_StdProjectListV30DataListDpaImageMode = 'CREATIVE_IMAGE_MODE_VIDEO';
    public const CREATIVE_IMAGE_MODE_VIDEO_VERTICAL_StdProjectListV30DataListDpaImageMode = 'CREATIVE_IMAGE_MODE_VIDEO_VERTICAL';

    public const ALLOWED_VALUES = [
        self::CREATIVE_IMAGE_MODE_LARGE_StdProjectListV30DataListDpaImageMode,
        self::CREATIVE_IMAGE_MODE_SMALL_StdProjectListV30DataListDpaImageMode,
        self::CREATIVE_IMAGE_MODE_UNION_SPLASH_StdProjectListV30DataListDpaImageMode,
        self::CREATIVE_IMAGE_MODE_VIDEO_StdProjectListV30DataListDpaImageMode,
        self::CREATIVE_IMAGE_MODE_VIDEO_VERTICAL_StdProjectListV30DataListDpaImageMode,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum StdProjectListV30DataListDpaImageMode', $value));
        }
        return (string) $value;
    }
}
