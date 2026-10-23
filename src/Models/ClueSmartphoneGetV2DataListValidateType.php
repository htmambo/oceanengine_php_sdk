<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ClueSmartphoneGetV2DataListValidateType
{
    public const AUTO_VERIFICATION_ClueSmartphoneGetV2DataListValidateType = 'AUTO_VERIFICATION';
    public const VALIDITY_PRIORITY_ClueSmartphoneGetV2DataListValidateType = 'VALIDITY_PRIORITY';
    public const NONE_VERIFICATION_ClueSmartphoneGetV2DataListValidateType = 'NONE_VERIFICATION';
    public const ALL_VERIFICATION_ClueSmartphoneGetV2DataListValidateType = 'ALL_VERIFICATION';
    public const CLUE_PRIORITY_ClueSmartphoneGetV2DataListValidateType = 'CLUE_PRIORITY';

    public const ALLOWED_VALUES = [
        self::AUTO_VERIFICATION_ClueSmartphoneGetV2DataListValidateType,
        self::VALIDITY_PRIORITY_ClueSmartphoneGetV2DataListValidateType,
        self::NONE_VERIFICATION_ClueSmartphoneGetV2DataListValidateType,
        self::ALL_VERIFICATION_ClueSmartphoneGetV2DataListValidateType,
        self::CLUE_PRIORITY_ClueSmartphoneGetV2DataListValidateType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ClueSmartphoneGetV2DataListValidateType', $value));
        }
        return (string) $value;
    }
}
