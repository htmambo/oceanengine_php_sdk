<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ProjectListV30DataListAigcDynamicCreativeSwitch
{
    public const OFF_ProjectListV30DataListAigcDynamicCreativeSwitch = 'OFF';
    public const ON_ProjectListV30DataListAigcDynamicCreativeSwitch = 'ON';

    public const ALLOWED_VALUES = [
        self::OFF_ProjectListV30DataListAigcDynamicCreativeSwitch,
        self::ON_ProjectListV30DataListAigcDynamicCreativeSwitch,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ProjectListV30DataListAigcDynamicCreativeSwitch', $value));
        }
        return (string) $value;
    }
}
