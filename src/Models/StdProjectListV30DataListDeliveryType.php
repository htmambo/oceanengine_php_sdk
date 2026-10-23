<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class StdProjectListV30DataListDeliveryType
{
    public const NORMAL_StdProjectListV30DataListDeliveryType = 'NORMAL';
    public const UBX_INTELLIGENT_StdProjectListV30DataListDeliveryType = 'UBX_INTELLIGENT';

    public const ALLOWED_VALUES = [
        self::NORMAL_StdProjectListV30DataListDeliveryType,
        self::UBX_INTELLIGENT_StdProjectListV30DataListDeliveryType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum StdProjectListV30DataListDeliveryType', $value));
        }
        return (string) $value;
    }
}
