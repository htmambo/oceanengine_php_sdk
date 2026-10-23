<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ProjectListV30DataListDeliverySettingSearchContinueDelivery
{
    public const OFF_ProjectListV30DataListDeliverySettingSearchContinueDelivery = 'OFF';
    public const ON_ProjectListV30DataListDeliverySettingSearchContinueDelivery = 'ON';

    public const ALLOWED_VALUES = [
        self::OFF_ProjectListV30DataListDeliverySettingSearchContinueDelivery,
        self::ON_ProjectListV30DataListDeliverySettingSearchContinueDelivery,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ProjectListV30DataListDeliverySettingSearchContinueDelivery', $value));
        }
        return (string) $value;
    }
}
