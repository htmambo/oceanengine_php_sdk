<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ClueFormCreateV2EnableLayer
{
    public const Enum_0_ClueFormCreateV2EnableLayer = '0';
    public const Enum_1_ClueFormCreateV2EnableLayer = '1';

    public const ALLOWED_VALUES = [
        self::Enum_0_ClueFormCreateV2EnableLayer,
        self::Enum_1_ClueFormCreateV2EnableLayer,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ClueFormCreateV2EnableLayer', $value));
        }
        return (string) $value;
    }
}
