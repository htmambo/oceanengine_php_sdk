<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class DouplusOrderCreateV30LiveroomHeatMode
{
    public const BY_ROOM_DouplusOrderCreateV30LiveroomHeatMode = 'BY_ROOM';
    public const BY_VIDEO_DouplusOrderCreateV30LiveroomHeatMode = 'BY_VIDEO';

    public const ALLOWED_VALUES = [
        self::BY_ROOM_DouplusOrderCreateV30LiveroomHeatMode,
        self::BY_VIDEO_DouplusOrderCreateV30LiveroomHeatMode,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum DouplusOrderCreateV30LiveroomHeatMode', $value));
        }
        return (string) $value;
    }
}
