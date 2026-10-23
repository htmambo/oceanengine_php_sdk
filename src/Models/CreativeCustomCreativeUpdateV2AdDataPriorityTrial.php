<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class CreativeCustomCreativeUpdateV2AdDataPriorityTrial
{
    public const OFF_CreativeCustomCreativeUpdateV2AdDataPriorityTrial = 'OFF';
    public const ON_CreativeCustomCreativeUpdateV2AdDataPriorityTrial = 'ON';

    public const ALLOWED_VALUES = [
        self::OFF_CreativeCustomCreativeUpdateV2AdDataPriorityTrial,
        self::ON_CreativeCustomCreativeUpdateV2AdDataPriorityTrial,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum CreativeCustomCreativeUpdateV2AdDataPriorityTrial', $value));
        }
        return (string) $value;
    }
}
