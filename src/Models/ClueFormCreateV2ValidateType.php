<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ClueFormCreateV2ValidateType
{
    public const AUTO_VERIFICATION_ClueFormCreateV2ValidateType = 'AUTO_VERIFICATION';
    public const VALIDITY_PRIORITY_ClueFormCreateV2ValidateType = 'VALIDITY_PRIORITY';
    public const NONE_VERIFICATION_ClueFormCreateV2ValidateType = 'NONE_VERIFICATION';
    public const ALL_VERIFICATION_ClueFormCreateV2ValidateType = 'ALL_VERIFICATION';
    public const CLUE_PRIORITY_ClueFormCreateV2ValidateType = 'CLUE_PRIORITY';

    public const ALLOWED_VALUES = [
        self::AUTO_VERIFICATION_ClueFormCreateV2ValidateType,
        self::VALIDITY_PRIORITY_ClueFormCreateV2ValidateType,
        self::NONE_VERIFICATION_ClueFormCreateV2ValidateType,
        self::ALL_VERIFICATION_ClueFormCreateV2ValidateType,
        self::CLUE_PRIORITY_ClueFormCreateV2ValidateType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ClueFormCreateV2ValidateType', $value));
        }
        return (string) $value;
    }
}
