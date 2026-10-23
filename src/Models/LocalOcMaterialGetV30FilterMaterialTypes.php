<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class LocalOcMaterialGetV30FilterMaterialTypes
{
    public const CAROUSEL_LocalOcMaterialGetV30FilterMaterialTypes = 'CAROUSEL';
    public const OTHER_LocalOcMaterialGetV30FilterMaterialTypes = 'OTHER';
    public const TITLE_LocalOcMaterialGetV30FilterMaterialTypes = 'TITLE';
    public const VIDEO_LocalOcMaterialGetV30FilterMaterialTypes = 'VIDEO';

    public const ALLOWED_VALUES = [
        self::CAROUSEL_LocalOcMaterialGetV30FilterMaterialTypes,
        self::OTHER_LocalOcMaterialGetV30FilterMaterialTypes,
        self::TITLE_LocalOcMaterialGetV30FilterMaterialTypes,
        self::VIDEO_LocalOcMaterialGetV30FilterMaterialTypes,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum LocalOcMaterialGetV30FilterMaterialTypes', $value));
        }
        return (string) $value;
    }
}
