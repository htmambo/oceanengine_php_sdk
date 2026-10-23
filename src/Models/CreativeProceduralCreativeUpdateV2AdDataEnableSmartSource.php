<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class CreativeProceduralCreativeUpdateV2AdDataEnableSmartSource
{
    public const OFF_CreativeProceduralCreativeUpdateV2AdDataEnableSmartSource = 'OFF';
    public const ON_CreativeProceduralCreativeUpdateV2AdDataEnableSmartSource = 'ON';

    public const ALLOWED_VALUES = [
        self::OFF_CreativeProceduralCreativeUpdateV2AdDataEnableSmartSource,
        self::ON_CreativeProceduralCreativeUpdateV2AdDataEnableSmartSource,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum CreativeProceduralCreativeUpdateV2AdDataEnableSmartSource', $value));
        }
        return (string) $value;
    }
}
