<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class KeywordCreateV30KeywordsBidType
{
    public const CUSTOM_KeywordCreateV30KeywordsBidType = 'CUSTOM';
    public const WITH_PROMOTION_KeywordCreateV30KeywordsBidType = 'WITH_PROMOTION';

    public const ALLOWED_VALUES = [
        self::CUSTOM_KeywordCreateV30KeywordsBidType,
        self::WITH_PROMOTION_KeywordCreateV30KeywordsBidType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum KeywordCreateV30KeywordsBidType', $value));
        }
        return (string) $value;
    }
}
