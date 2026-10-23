<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ClueFormDetailV2DataFormElementsIsUnique
{
    public const Enum_0_ClueFormDetailV2DataFormElementsIsUnique = '0';
    public const Enum_1_ClueFormDetailV2DataFormElementsIsUnique = '1';

    public const ALLOWED_VALUES = [
        self::Enum_0_ClueFormDetailV2DataFormElementsIsUnique,
        self::Enum_1_ClueFormDetailV2DataFormElementsIsUnique,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ClueFormDetailV2DataFormElementsIsUnique', $value));
        }
        return (string) $value;
    }
}
