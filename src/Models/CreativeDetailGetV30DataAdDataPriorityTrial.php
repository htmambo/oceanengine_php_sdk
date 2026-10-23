<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class CreativeDetailGetV30DataAdDataPriorityTrial
{
    public const OFF_CreativeDetailGetV30DataAdDataPriorityTrial = 'OFF';
    public const ON_CreativeDetailGetV30DataAdDataPriorityTrial = 'ON';

    public const ALLOWED_VALUES = [
        self::OFF_CreativeDetailGetV30DataAdDataPriorityTrial,
        self::ON_CreativeDetailGetV30DataAdDataPriorityTrial,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum CreativeDetailGetV30DataAdDataPriorityTrial', $value));
        }
        return (string) $value;
    }
}
