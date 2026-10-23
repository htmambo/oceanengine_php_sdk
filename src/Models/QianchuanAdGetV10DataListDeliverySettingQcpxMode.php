<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanAdGetV10DataListDeliverySettingQcpxMode
{
    public const QCPX_MODE_DEFAULT_QianchuanAdGetV10DataListDeliverySettingQcpxMode = 'QCPX_MODE_DEFAULT';
    public const QCPX_MODE_OFF_QianchuanAdGetV10DataListDeliverySettingQcpxMode = 'QCPX_MODE_OFF';
    public const QCPX_MODE_ON_QianchuanAdGetV10DataListDeliverySettingQcpxMode = 'QCPX_MODE_ON';

    public const ALLOWED_VALUES = [
        self::QCPX_MODE_DEFAULT_QianchuanAdGetV10DataListDeliverySettingQcpxMode,
        self::QCPX_MODE_OFF_QianchuanAdGetV10DataListDeliverySettingQcpxMode,
        self::QCPX_MODE_ON_QianchuanAdGetV10DataListDeliverySettingQcpxMode,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanAdGetV10DataListDeliverySettingQcpxMode', $value));
        }
        return (string) $value;
    }
}
