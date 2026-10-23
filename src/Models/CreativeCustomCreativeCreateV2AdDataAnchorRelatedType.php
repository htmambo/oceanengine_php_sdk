<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class CreativeCustomCreativeCreateV2AdDataAnchorRelatedType
{
    public const SELECT_CreativeCustomCreativeCreateV2AdDataAnchorRelatedType = 'SELECT';
    public const OFF_CreativeCustomCreativeCreateV2AdDataAnchorRelatedType = 'OFF';
    public const AUTO_CreativeCustomCreativeCreateV2AdDataAnchorRelatedType = 'AUTO';

    public const ALLOWED_VALUES = [
        self::SELECT_CreativeCustomCreativeCreateV2AdDataAnchorRelatedType,
        self::OFF_CreativeCustomCreativeCreateV2AdDataAnchorRelatedType,
        self::AUTO_CreativeCustomCreativeCreateV2AdDataAnchorRelatedType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum CreativeCustomCreativeCreateV2AdDataAnchorRelatedType', $value));
        }
        return (string) $value;
    }
}
