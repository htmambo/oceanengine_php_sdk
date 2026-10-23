<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class FileRebateDataProductCreateV2SubscribeStatus
{
    public const Enum_1_FileRebateDataProductCreateV2SubscribeStatus = 1;
    public const Enum_2_FileRebateDataProductCreateV2SubscribeStatus = 2;

    public const ALLOWED_VALUES = [
        self::Enum_1_FileRebateDataProductCreateV2SubscribeStatus,
        self::Enum_2_FileRebateDataProductCreateV2SubscribeStatus,
    ];

    public static function isValid(int|string $value): bool
    {
        return in_array((string) $value, array_map('strval', static::ALLOWED_VALUES), true);
    }

    public static function fromValue(int|string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum FileRebateDataProductCreateV2SubscribeStatus', $value));
        }
        return (string) $value;
    }
}
