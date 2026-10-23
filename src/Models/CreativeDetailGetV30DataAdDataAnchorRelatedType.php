<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class CreativeDetailGetV30DataAdDataAnchorRelatedType
{
    public const AUTO_CreativeDetailGetV30DataAdDataAnchorRelatedType = 'AUTO';
    public const OFF_CreativeDetailGetV30DataAdDataAnchorRelatedType = 'OFF';
    public const SELECT_CreativeDetailGetV30DataAdDataAnchorRelatedType = 'SELECT';

    public const ALLOWED_VALUES = [
        self::AUTO_CreativeDetailGetV30DataAdDataAnchorRelatedType,
        self::OFF_CreativeDetailGetV30DataAdDataAnchorRelatedType,
        self::SELECT_CreativeDetailGetV30DataAdDataAnchorRelatedType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum CreativeDetailGetV30DataAdDataAnchorRelatedType', $value));
        }
        return (string) $value;
    }
}
