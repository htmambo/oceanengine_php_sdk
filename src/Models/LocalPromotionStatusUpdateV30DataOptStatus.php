<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class LocalPromotionStatusUpdateV30DataOptStatus
{
    public const ENABLE_LocalPromotionStatusUpdateV30DataOptStatus = 'ENABLE';
    public const PAUSED_LocalPromotionStatusUpdateV30DataOptStatus = 'PAUSED';

    public const ALLOWED_VALUES = [
        self::ENABLE_LocalPromotionStatusUpdateV30DataOptStatus,
        self::PAUSED_LocalPromotionStatusUpdateV30DataOptStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum LocalPromotionStatusUpdateV30DataOptStatus', $value));
        }
        return (string) $value;
    }
}
