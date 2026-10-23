<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class CreativeCustomCreativeCreateV2AdDataSupplementsSupplementType
{
    public const NORMAL_CreativeCustomCreativeCreateV2AdDataSupplementsSupplementType = 'NORMAL';
    public const CLOUD_GAME_CreativeCustomCreativeCreateV2AdDataSupplementsSupplementType = 'CLOUD_GAME';

    public const ALLOWED_VALUES = [
        self::NORMAL_CreativeCustomCreativeCreateV2AdDataSupplementsSupplementType,
        self::CLOUD_GAME_CreativeCustomCreativeCreateV2AdDataSupplementsSupplementType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum CreativeCustomCreativeCreateV2AdDataSupplementsSupplementType', $value));
        }
        return (string) $value;
    }
}
