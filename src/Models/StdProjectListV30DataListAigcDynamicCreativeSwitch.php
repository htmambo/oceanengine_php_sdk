<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class StdProjectListV30DataListAigcDynamicCreativeSwitch
{
    public const OFF_StdProjectListV30DataListAigcDynamicCreativeSwitch = 'OFF';
    public const ON_StdProjectListV30DataListAigcDynamicCreativeSwitch = 'ON';

    public const ALLOWED_VALUES = [
        self::OFF_StdProjectListV30DataListAigcDynamicCreativeSwitch,
        self::ON_StdProjectListV30DataListAigcDynamicCreativeSwitch,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum StdProjectListV30DataListAigcDynamicCreativeSwitch', $value));
        }
        return (string) $value;
    }
}
