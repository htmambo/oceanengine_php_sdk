<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ProjectCreateV30DeliveryType
{
    public const DURATION_ProjectCreateV30DeliveryType = 'DURATION';
    public const NORMAL_ProjectCreateV30DeliveryType = 'NORMAL';
    public const UBX_INTELLIGENT_ProjectCreateV30DeliveryType = 'UBX_INTELLIGENT';

    public const ALLOWED_VALUES = [
        self::DURATION_ProjectCreateV30DeliveryType,
        self::NORMAL_ProjectCreateV30DeliveryType,
        self::UBX_INTELLIGENT_ProjectCreateV30DeliveryType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ProjectCreateV30DeliveryType', $value));
        }
        return (string) $value;
    }
}
