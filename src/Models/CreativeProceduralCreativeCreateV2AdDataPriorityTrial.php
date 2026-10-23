<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class CreativeProceduralCreativeCreateV2AdDataPriorityTrial
{
    public const OFF_CreativeProceduralCreativeCreateV2AdDataPriorityTrial = 'OFF';
    public const ON_CreativeProceduralCreativeCreateV2AdDataPriorityTrial = 'ON';

    public const ALLOWED_VALUES = [
        self::OFF_CreativeProceduralCreativeCreateV2AdDataPriorityTrial,
        self::ON_CreativeProceduralCreativeCreateV2AdDataPriorityTrial,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum CreativeProceduralCreativeCreateV2AdDataPriorityTrial', $value));
        }
        return (string) $value;
    }
}
