<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class CreativeProceduralCreativeCreateV2AdDataSupplementsSupplementType
{
    public const NORMAL_CreativeProceduralCreativeCreateV2AdDataSupplementsSupplementType = 'NORMAL';
    public const CLOUD_GAME_CreativeProceduralCreativeCreateV2AdDataSupplementsSupplementType = 'CLOUD_GAME';

    public const ALLOWED_VALUES = [
        self::NORMAL_CreativeProceduralCreativeCreateV2AdDataSupplementsSupplementType,
        self::CLOUD_GAME_CreativeProceduralCreativeCreateV2AdDataSupplementsSupplementType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum CreativeProceduralCreativeCreateV2AdDataSupplementsSupplementType', $value));
        }
        return (string) $value;
    }
}
