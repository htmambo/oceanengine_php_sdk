<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class StdProjectUpdateV30ProjectMaterialsAnchorRelatedType
{
    public const AUTO_StdProjectUpdateV30ProjectMaterialsAnchorRelatedType = 'AUTO';
    public const OFF_StdProjectUpdateV30ProjectMaterialsAnchorRelatedType = 'OFF';
    public const SELECT_StdProjectUpdateV30ProjectMaterialsAnchorRelatedType = 'SELECT';

    public const ALLOWED_VALUES = [
        self::AUTO_StdProjectUpdateV30ProjectMaterialsAnchorRelatedType,
        self::OFF_StdProjectUpdateV30ProjectMaterialsAnchorRelatedType,
        self::SELECT_StdProjectUpdateV30ProjectMaterialsAnchorRelatedType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum StdProjectUpdateV30ProjectMaterialsAnchorRelatedType', $value));
        }
        return (string) $value;
    }
}
