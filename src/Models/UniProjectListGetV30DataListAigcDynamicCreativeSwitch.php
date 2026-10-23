<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class UniProjectListGetV30DataListAigcDynamicCreativeSwitch
{
    public const OFF_UniProjectListGetV30DataListAigcDynamicCreativeSwitch = 'OFF';
    public const ON_UniProjectListGetV30DataListAigcDynamicCreativeSwitch = 'ON';

    public const ALLOWED_VALUES = [
        self::OFF_UniProjectListGetV30DataListAigcDynamicCreativeSwitch,
        self::ON_UniProjectListGetV30DataListAigcDynamicCreativeSwitch,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum UniProjectListGetV30DataListAigcDynamicCreativeSwitch', $value));
        }
        return (string) $value;
    }
}
