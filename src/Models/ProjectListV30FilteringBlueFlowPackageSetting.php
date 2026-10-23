<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ProjectListV30FilteringBlueFlowPackageSetting
{
    public const OFF_ProjectListV30FilteringBlueFlowPackageSetting = 'OFF';
    public const ON_ProjectListV30FilteringBlueFlowPackageSetting = 'ON';

    public const ALLOWED_VALUES = [
        self::OFF_ProjectListV30FilteringBlueFlowPackageSetting,
        self::ON_ProjectListV30FilteringBlueFlowPackageSetting,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ProjectListV30FilteringBlueFlowPackageSetting', $value));
        }
        return (string) $value;
    }
}
