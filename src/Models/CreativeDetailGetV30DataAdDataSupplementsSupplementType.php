<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class CreativeDetailGetV30DataAdDataSupplementsSupplementType
{
    public const CLOUD_GAME_CreativeDetailGetV30DataAdDataSupplementsSupplementType = 'CLOUD_GAME';
    public const NORMAL_CreativeDetailGetV30DataAdDataSupplementsSupplementType = 'NORMAL';

    public const ALLOWED_VALUES = [
        self::CLOUD_GAME_CreativeDetailGetV30DataAdDataSupplementsSupplementType,
        self::NORMAL_CreativeDetailGetV30DataAdDataSupplementsSupplementType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum CreativeDetailGetV30DataAdDataSupplementsSupplementType', $value));
        }
        return (string) $value;
    }
}
