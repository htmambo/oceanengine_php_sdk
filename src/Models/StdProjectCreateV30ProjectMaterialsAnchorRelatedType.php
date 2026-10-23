<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class StdProjectCreateV30ProjectMaterialsAnchorRelatedType
{
    public const AUTO_StdProjectCreateV30ProjectMaterialsAnchorRelatedType = 'AUTO';
    public const OFF_StdProjectCreateV30ProjectMaterialsAnchorRelatedType = 'OFF';
    public const SELECT_StdProjectCreateV30ProjectMaterialsAnchorRelatedType = 'SELECT';

    public const ALLOWED_VALUES = [
        self::AUTO_StdProjectCreateV30ProjectMaterialsAnchorRelatedType,
        self::OFF_StdProjectCreateV30ProjectMaterialsAnchorRelatedType,
        self::SELECT_StdProjectCreateV30ProjectMaterialsAnchorRelatedType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum StdProjectCreateV30ProjectMaterialsAnchorRelatedType', $value));
        }
        return (string) $value;
    }
}
