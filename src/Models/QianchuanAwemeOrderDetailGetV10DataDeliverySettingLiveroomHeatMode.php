<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanAwemeOrderDetailGetV10DataDeliverySettingLiveroomHeatMode
{
    public const BY_ROOM_QianchuanAwemeOrderDetailGetV10DataDeliverySettingLiveroomHeatMode = 'BY_ROOM';
    public const BY_VIDEO_QianchuanAwemeOrderDetailGetV10DataDeliverySettingLiveroomHeatMode = 'BY_VIDEO';

    public const ALLOWED_VALUES = [
        self::BY_ROOM_QianchuanAwemeOrderDetailGetV10DataDeliverySettingLiveroomHeatMode,
        self::BY_VIDEO_QianchuanAwemeOrderDetailGetV10DataDeliverySettingLiveroomHeatMode,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanAwemeOrderDetailGetV10DataDeliverySettingLiveroomHeatMode', $value));
        }
        return (string) $value;
    }
}
