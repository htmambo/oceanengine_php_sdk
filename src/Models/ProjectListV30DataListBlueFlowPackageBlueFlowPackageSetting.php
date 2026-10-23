<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ProjectListV30DataListBlueFlowPackageBlueFlowPackageSetting
{
    public const OFF_ProjectListV30DataListBlueFlowPackageBlueFlowPackageSetting = 'OFF';
    public const ON_ProjectListV30DataListBlueFlowPackageBlueFlowPackageSetting = 'ON';

    public const ALLOWED_VALUES = [
        self::OFF_ProjectListV30DataListBlueFlowPackageBlueFlowPackageSetting,
        self::ON_ProjectListV30DataListBlueFlowPackageBlueFlowPackageSetting,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ProjectListV30DataListBlueFlowPackageBlueFlowPackageSetting', $value));
        }
        return (string) $value;
    }
}
