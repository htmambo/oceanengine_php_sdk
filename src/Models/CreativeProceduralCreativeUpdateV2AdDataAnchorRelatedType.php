<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class CreativeProceduralCreativeUpdateV2AdDataAnchorRelatedType
{
    public const SELECT_CreativeProceduralCreativeUpdateV2AdDataAnchorRelatedType = 'SELECT';
    public const OFF_CreativeProceduralCreativeUpdateV2AdDataAnchorRelatedType = 'OFF';
    public const AUTO_CreativeProceduralCreativeUpdateV2AdDataAnchorRelatedType = 'AUTO';

    public const ALLOWED_VALUES = [
        self::SELECT_CreativeProceduralCreativeUpdateV2AdDataAnchorRelatedType,
        self::OFF_CreativeProceduralCreativeUpdateV2AdDataAnchorRelatedType,
        self::AUTO_CreativeProceduralCreativeUpdateV2AdDataAnchorRelatedType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum CreativeProceduralCreativeUpdateV2AdDataAnchorRelatedType', $value));
        }
        return (string) $value;
    }
}
