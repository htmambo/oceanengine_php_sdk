<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class StdProjectCreateV30KeywordsBidType
{
    public const CUSTOM_StdProjectCreateV30KeywordsBidType = 'CUSTOM';
    public const WITH_PROJECT_StdProjectCreateV30KeywordsBidType = 'WITH_PROJECT';

    public const ALLOWED_VALUES = [
        self::CUSTOM_StdProjectCreateV30KeywordsBidType,
        self::WITH_PROJECT_StdProjectCreateV30KeywordsBidType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum StdProjectCreateV30KeywordsBidType', $value));
        }
        return (string) $value;
    }
}
