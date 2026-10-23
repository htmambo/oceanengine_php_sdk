<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ProjectCreateV30BlueFlowPackageBlueFlowPackageSetting
{
    public const OFF_ProjectCreateV30BlueFlowPackageBlueFlowPackageSetting = 'OFF';
    public const ON_ProjectCreateV30BlueFlowPackageBlueFlowPackageSetting = 'ON';

    public const ALLOWED_VALUES = [
        self::OFF_ProjectCreateV30BlueFlowPackageBlueFlowPackageSetting,
        self::ON_ProjectCreateV30BlueFlowPackageBlueFlowPackageSetting,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ProjectCreateV30BlueFlowPackageBlueFlowPackageSetting', $value));
        }
        return (string) $value;
    }
}
