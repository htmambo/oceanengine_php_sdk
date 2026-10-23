<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ProjectListV30DataListDeliverySettingLayerRoiSwitch
{
    public const OFF_ProjectListV30DataListDeliverySettingLayerRoiSwitch = 'OFF';
    public const ON_ProjectListV30DataListDeliverySettingLayerRoiSwitch = 'ON';

    public const ALLOWED_VALUES = [
        self::OFF_ProjectListV30DataListDeliverySettingLayerRoiSwitch,
        self::ON_ProjectListV30DataListDeliverySettingLayerRoiSwitch,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ProjectListV30DataListDeliverySettingLayerRoiSwitch', $value));
        }
        return (string) $value;
    }
}
