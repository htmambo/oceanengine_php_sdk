<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class StdProjectCreateV30DeliveryType
{
    public const NORMAL_StdProjectCreateV30DeliveryType = 'NORMAL';
    public const UBX_INTELLIGENT_StdProjectCreateV30DeliveryType = 'UBX_INTELLIGENT';

    public const ALLOWED_VALUES = [
        self::NORMAL_StdProjectCreateV30DeliveryType,
        self::UBX_INTELLIGENT_StdProjectCreateV30DeliveryType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum StdProjectCreateV30DeliveryType', $value));
        }
        return (string) $value;
    }
}
