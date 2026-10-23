<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class BrandCreativeCreateV30TrackUrlInfoTrackUrlSendType
{
    public const CLIENT_BrandCreativeCreateV30TrackUrlInfoTrackUrlSendType = 'CLIENT';
    public const SERVER_BrandCreativeCreateV30TrackUrlInfoTrackUrlSendType = 'SERVER';

    public const ALLOWED_VALUES = [
        self::CLIENT_BrandCreativeCreateV30TrackUrlInfoTrackUrlSendType,
        self::SERVER_BrandCreativeCreateV30TrackUrlInfoTrackUrlSendType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum BrandCreativeCreateV30TrackUrlInfoTrackUrlSendType', $value));
        }
        return (string) $value;
    }
}
