<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanOverallLiveCreateV10DeliverySettingQcpxMode
{
    public const QCPX_MODE_DEFAULT_QianchuanOverallLiveCreateV10DeliverySettingQcpxMode = 'QCPX_MODE_DEFAULT';
    public const QCPX_MODE_OFF_QianchuanOverallLiveCreateV10DeliverySettingQcpxMode = 'QCPX_MODE_OFF';
    public const QCPX_MODE_ON_QianchuanOverallLiveCreateV10DeliverySettingQcpxMode = 'QCPX_MODE_ON';

    public const ALLOWED_VALUES = [
        self::QCPX_MODE_DEFAULT_QianchuanOverallLiveCreateV10DeliverySettingQcpxMode,
        self::QCPX_MODE_OFF_QianchuanOverallLiveCreateV10DeliverySettingQcpxMode,
        self::QCPX_MODE_ON_QianchuanOverallLiveCreateV10DeliverySettingQcpxMode,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanOverallLiveCreateV10DeliverySettingQcpxMode', $value));
        }
        return (string) $value;
    }
}
