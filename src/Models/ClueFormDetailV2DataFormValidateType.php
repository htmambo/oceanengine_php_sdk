<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ClueFormDetailV2DataFormValidateType
{
    public const AUTO_VERIFICATION_ClueFormDetailV2DataFormValidateType = 'AUTO_VERIFICATION';
    public const VALIDITY_PRIORITY_ClueFormDetailV2DataFormValidateType = 'VALIDITY_PRIORITY';
    public const NONE_VERIFICATION_ClueFormDetailV2DataFormValidateType = 'NONE_VERIFICATION';
    public const ALL_VERIFICATION_ClueFormDetailV2DataFormValidateType = 'ALL_VERIFICATION';
    public const CLUE_PRIORITY_ClueFormDetailV2DataFormValidateType = 'CLUE_PRIORITY';

    public const ALLOWED_VALUES = [
        self::AUTO_VERIFICATION_ClueFormDetailV2DataFormValidateType,
        self::VALIDITY_PRIORITY_ClueFormDetailV2DataFormValidateType,
        self::NONE_VERIFICATION_ClueFormDetailV2DataFormValidateType,
        self::ALL_VERIFICATION_ClueFormDetailV2DataFormValidateType,
        self::CLUE_PRIORITY_ClueFormDetailV2DataFormValidateType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ClueFormDetailV2DataFormValidateType', $value));
        }
        return (string) $value;
    }
}
