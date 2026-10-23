<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class StdProjectUpdateV30IsCommentDisable
{
    public const OFF_StdProjectUpdateV30IsCommentDisable = 'OFF';
    public const ON_StdProjectUpdateV30IsCommentDisable = 'ON';

    public const ALLOWED_VALUES = [
        self::OFF_StdProjectUpdateV30IsCommentDisable,
        self::ON_StdProjectUpdateV30IsCommentDisable,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum StdProjectUpdateV30IsCommentDisable', $value));
        }
        return (string) $value;
    }
}
