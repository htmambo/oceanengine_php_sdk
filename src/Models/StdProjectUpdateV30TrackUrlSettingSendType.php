<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class StdProjectUpdateV30TrackUrlSettingSendType
{
    public const CLIENT_SEND_StdProjectUpdateV30TrackUrlSettingSendType = 'CLIENT_SEND';
    public const SERVER_SEND_StdProjectUpdateV30TrackUrlSettingSendType = 'SERVER_SEND';

    public const ALLOWED_VALUES = [
        self::CLIENT_SEND_StdProjectUpdateV30TrackUrlSettingSendType,
        self::SERVER_SEND_StdProjectUpdateV30TrackUrlSettingSendType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum StdProjectUpdateV30TrackUrlSettingSendType', $value));
        }
        return (string) $value;
    }
}
