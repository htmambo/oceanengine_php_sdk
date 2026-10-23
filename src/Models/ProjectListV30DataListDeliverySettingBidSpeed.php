<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ProjectListV30DataListDeliverySettingBidSpeed
{
    public const BALANCE_ProjectListV30DataListDeliverySettingBidSpeed = 'BALANCE';
    public const FAST_ProjectListV30DataListDeliverySettingBidSpeed = 'FAST';

    public const ALLOWED_VALUES = [
        self::BALANCE_ProjectListV30DataListDeliverySettingBidSpeed,
        self::FAST_ProjectListV30DataListDeliverySettingBidSpeed,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ProjectListV30DataListDeliverySettingBidSpeed', $value));
        }
        return (string) $value;
    }
}
