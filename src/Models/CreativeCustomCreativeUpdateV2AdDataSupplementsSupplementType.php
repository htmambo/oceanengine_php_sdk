<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class CreativeCustomCreativeUpdateV2AdDataSupplementsSupplementType
{
    public const NORMAL_CreativeCustomCreativeUpdateV2AdDataSupplementsSupplementType = 'NORMAL';
    public const CLOUD_GAME_CreativeCustomCreativeUpdateV2AdDataSupplementsSupplementType = 'CLOUD_GAME';

    public const ALLOWED_VALUES = [
        self::NORMAL_CreativeCustomCreativeUpdateV2AdDataSupplementsSupplementType,
        self::CLOUD_GAME_CreativeCustomCreativeUpdateV2AdDataSupplementsSupplementType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum CreativeCustomCreativeUpdateV2AdDataSupplementsSupplementType', $value));
        }
        return (string) $value;
    }
}
