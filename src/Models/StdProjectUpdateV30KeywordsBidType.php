<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class StdProjectUpdateV30KeywordsBidType
{
    public const CUSTOM_StdProjectUpdateV30KeywordsBidType = 'CUSTOM';
    public const WITH_PROJECT_StdProjectUpdateV30KeywordsBidType = 'WITH_PROJECT';

    public const ALLOWED_VALUES = [
        self::CUSTOM_StdProjectUpdateV30KeywordsBidType,
        self::WITH_PROJECT_StdProjectUpdateV30KeywordsBidType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum StdProjectUpdateV30KeywordsBidType', $value));
        }
        return (string) $value;
    }
}
