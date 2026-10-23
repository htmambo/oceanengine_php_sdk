<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanAwemeOrderCreateV10DeliverySettingLiveroomHeatMode
{
    public const BY_ROOM_QianchuanAwemeOrderCreateV10DeliverySettingLiveroomHeatMode = 'BY_ROOM';
    public const BY_VIDEO_QianchuanAwemeOrderCreateV10DeliverySettingLiveroomHeatMode = 'BY_VIDEO';

    public const ALLOWED_VALUES = [
        self::BY_ROOM_QianchuanAwemeOrderCreateV10DeliverySettingLiveroomHeatMode,
        self::BY_VIDEO_QianchuanAwemeOrderCreateV10DeliverySettingLiveroomHeatMode,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanAwemeOrderCreateV10DeliverySettingLiveroomHeatMode', $value));
        }
        return (string) $value;
    }
}
