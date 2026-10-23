<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class StdProjectUpdateV30ProjectMaterialsOriginalVideoTitle
{
    public const OFF_StdProjectUpdateV30ProjectMaterialsOriginalVideoTitle = 'OFF';
    public const ON_StdProjectUpdateV30ProjectMaterialsOriginalVideoTitle = 'ON';

    public const ALLOWED_VALUES = [
        self::OFF_StdProjectUpdateV30ProjectMaterialsOriginalVideoTitle,
        self::ON_StdProjectUpdateV30ProjectMaterialsOriginalVideoTitle,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum StdProjectUpdateV30ProjectMaterialsOriginalVideoTitle', $value));
        }
        return (string) $value;
    }
}
