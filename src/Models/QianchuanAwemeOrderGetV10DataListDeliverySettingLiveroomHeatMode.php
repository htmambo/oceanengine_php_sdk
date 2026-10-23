<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanAwemeOrderGetV10DataListDeliverySettingLiveroomHeatMode
{
    public const BY_ROOM_QianchuanAwemeOrderGetV10DataListDeliverySettingLiveroomHeatMode = 'BY_ROOM';
    public const BY_VIDEO_QianchuanAwemeOrderGetV10DataListDeliverySettingLiveroomHeatMode = 'BY_VIDEO';

    public const ALLOWED_VALUES = [
        self::BY_ROOM_QianchuanAwemeOrderGetV10DataListDeliverySettingLiveroomHeatMode,
        self::BY_VIDEO_QianchuanAwemeOrderGetV10DataListDeliverySettingLiveroomHeatMode,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanAwemeOrderGetV10DataListDeliverySettingLiveroomHeatMode', $value));
        }
        return (string) $value;
    }
}
