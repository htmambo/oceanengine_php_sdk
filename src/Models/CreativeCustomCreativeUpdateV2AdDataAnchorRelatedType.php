<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class CreativeCustomCreativeUpdateV2AdDataAnchorRelatedType
{
    public const SELECT_CreativeCustomCreativeUpdateV2AdDataAnchorRelatedType = 'SELECT';
    public const OFF_CreativeCustomCreativeUpdateV2AdDataAnchorRelatedType = 'OFF';
    public const AUTO_CreativeCustomCreativeUpdateV2AdDataAnchorRelatedType = 'AUTO';

    public const ALLOWED_VALUES = [
        self::SELECT_CreativeCustomCreativeUpdateV2AdDataAnchorRelatedType,
        self::OFF_CreativeCustomCreativeUpdateV2AdDataAnchorRelatedType,
        self::AUTO_CreativeCustomCreativeUpdateV2AdDataAnchorRelatedType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum CreativeCustomCreativeUpdateV2AdDataAnchorRelatedType', $value));
        }
        return (string) $value;
    }
}
