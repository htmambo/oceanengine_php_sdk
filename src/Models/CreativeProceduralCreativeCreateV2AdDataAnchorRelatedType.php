<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class CreativeProceduralCreativeCreateV2AdDataAnchorRelatedType
{
    public const OFF_CreativeProceduralCreativeCreateV2AdDataAnchorRelatedType = 'OFF';
    public const AUTO_CreativeProceduralCreativeCreateV2AdDataAnchorRelatedType = 'AUTO';
    public const SELECT_CreativeProceduralCreativeCreateV2AdDataAnchorRelatedType = 'SELECT';

    public const ALLOWED_VALUES = [
        self::OFF_CreativeProceduralCreativeCreateV2AdDataAnchorRelatedType,
        self::AUTO_CreativeProceduralCreativeCreateV2AdDataAnchorRelatedType,
        self::SELECT_CreativeProceduralCreativeCreateV2AdDataAnchorRelatedType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum CreativeProceduralCreativeCreateV2AdDataAnchorRelatedType', $value));
        }
        return (string) $value;
    }
}
