<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ProjectCreateV30StarAutoMaterialAdditionSwitch
{
    public const OFF_ProjectCreateV30StarAutoMaterialAdditionSwitch = 'OFF';
    public const ON_ProjectCreateV30StarAutoMaterialAdditionSwitch = 'ON';

    public const ALLOWED_VALUES = [
        self::OFF_ProjectCreateV30StarAutoMaterialAdditionSwitch,
        self::ON_ProjectCreateV30StarAutoMaterialAdditionSwitch,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ProjectCreateV30StarAutoMaterialAdditionSwitch', $value));
        }
        return (string) $value;
    }
}
