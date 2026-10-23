<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class PromotionCreateV30Operation
{
    public const DISABLE_PromotionCreateV30Operation = 'DISABLE';
    public const ENABLE_PromotionCreateV30Operation = 'ENABLE';

    public const ALLOWED_VALUES = [
        self::DISABLE_PromotionCreateV30Operation,
        self::ENABLE_PromotionCreateV30Operation,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum PromotionCreateV30Operation', $value));
        }
        return (string) $value;
    }
}
