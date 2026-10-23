<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class PromotionStatusUpdateV30DataOptStatus
{
    public const DISABLE_PromotionStatusUpdateV30DataOptStatus = 'DISABLE';
    public const ENABLE_PromotionStatusUpdateV30DataOptStatus = 'ENABLE';

    public const ALLOWED_VALUES = [
        self::DISABLE_PromotionStatusUpdateV30DataOptStatus,
        self::ENABLE_PromotionStatusUpdateV30DataOptStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum PromotionStatusUpdateV30DataOptStatus', $value));
        }
        return (string) $value;
    }
}
