<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class AdGetV2DataTrackUrlSendType
{
    public const CLIENT_SEND_AdGetV2DataTrackUrlSendType = 'CLIENT_SEND';
    public const SERVER_SEND_AdGetV2DataTrackUrlSendType = 'SERVER_SEND';

    public const ALLOWED_VALUES = [
        self::CLIENT_SEND_AdGetV2DataTrackUrlSendType,
        self::SERVER_SEND_AdGetV2DataTrackUrlSendType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum AdGetV2DataTrackUrlSendType', $value));
        }
        return (string) $value;
    }
}
