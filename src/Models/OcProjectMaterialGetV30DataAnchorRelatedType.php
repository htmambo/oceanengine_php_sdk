<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class OcProjectMaterialGetV30DataAnchorRelatedType
{
    public const AUTO_OcProjectMaterialGetV30DataAnchorRelatedType = 'AUTO';
    public const OFF_OcProjectMaterialGetV30DataAnchorRelatedType = 'OFF';
    public const SELECT_OcProjectMaterialGetV30DataAnchorRelatedType = 'SELECT';

    public const ALLOWED_VALUES = [
        self::AUTO_OcProjectMaterialGetV30DataAnchorRelatedType,
        self::OFF_OcProjectMaterialGetV30DataAnchorRelatedType,
        self::SELECT_OcProjectMaterialGetV30DataAnchorRelatedType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum OcProjectMaterialGetV30DataAnchorRelatedType', $value));
        }
        return (string) $value;
    }
}
