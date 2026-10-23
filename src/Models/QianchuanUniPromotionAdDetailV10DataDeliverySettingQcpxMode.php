<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanUniPromotionAdDetailV10DataDeliverySettingQcpxMode
{
    public const QCPX_MODE_DEFAULT_QianchuanUniPromotionAdDetailV10DataDeliverySettingQcpxMode = 'QCPX_MODE_DEFAULT';
    public const QCPX_MODE_OFF_QianchuanUniPromotionAdDetailV10DataDeliverySettingQcpxMode = 'QCPX_MODE_OFF';
    public const QCPX_MODE_ON_QianchuanUniPromotionAdDetailV10DataDeliverySettingQcpxMode = 'QCPX_MODE_ON';

    public const ALLOWED_VALUES = [
        self::QCPX_MODE_DEFAULT_QianchuanUniPromotionAdDetailV10DataDeliverySettingQcpxMode,
        self::QCPX_MODE_OFF_QianchuanUniPromotionAdDetailV10DataDeliverySettingQcpxMode,
        self::QCPX_MODE_ON_QianchuanUniPromotionAdDetailV10DataDeliverySettingQcpxMode,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanUniPromotionAdDetailV10DataDeliverySettingQcpxMode', $value));
        }
        return (string) $value;
    }
}
