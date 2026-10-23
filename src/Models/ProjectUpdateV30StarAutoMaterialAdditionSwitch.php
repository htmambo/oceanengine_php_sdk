<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ProjectUpdateV30StarAutoMaterialAdditionSwitch
{
    public const ON_ProjectUpdateV30StarAutoMaterialAdditionSwitch = 'ON';
    public const OFF_ProjectUpdateV30StarAutoMaterialAdditionSwitch = 'OFF';

    public const ALLOWED_VALUES = [
        self::ON_ProjectUpdateV30StarAutoMaterialAdditionSwitch,
        self::OFF_ProjectUpdateV30StarAutoMaterialAdditionSwitch,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ProjectUpdateV30StarAutoMaterialAdditionSwitch', $value));
        }
        return (string) $value;
    }
}
