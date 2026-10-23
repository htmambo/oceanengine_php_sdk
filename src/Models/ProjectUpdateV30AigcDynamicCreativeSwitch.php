<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ProjectUpdateV30AigcDynamicCreativeSwitch
{
    public const ON_ProjectUpdateV30AigcDynamicCreativeSwitch = 'ON';
    public const OFF_ProjectUpdateV30AigcDynamicCreativeSwitch = 'OFF';

    public const ALLOWED_VALUES = [
        self::ON_ProjectUpdateV30AigcDynamicCreativeSwitch,
        self::OFF_ProjectUpdateV30AigcDynamicCreativeSwitch,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ProjectUpdateV30AigcDynamicCreativeSwitch', $value));
        }
        return (string) $value;
    }
}
