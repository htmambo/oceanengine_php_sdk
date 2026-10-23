<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ProjectListV30FilteringDeliveryType
{
    public const DURATION_ProjectListV30FilteringDeliveryType = 'DURATION';
    public const NORMAL_ProjectListV30FilteringDeliveryType = 'NORMAL';

    public const ALLOWED_VALUES = [
        self::DURATION_ProjectListV30FilteringDeliveryType,
        self::NORMAL_ProjectListV30FilteringDeliveryType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ProjectListV30FilteringDeliveryType', $value));
        }
        return (string) $value;
    }
}
