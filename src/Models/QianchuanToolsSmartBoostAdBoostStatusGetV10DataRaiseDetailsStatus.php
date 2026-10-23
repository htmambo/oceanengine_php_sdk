<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanToolsSmartBoostAdBoostStatusGetV10DataRaiseDetailsStatus
{
    public const CANNOT_RAISE_QianchuanToolsSmartBoostAdBoostStatusGetV10DataRaiseDetailsStatus = 'CANNOT_RAISE';
    public const CAN_RAISE_QianchuanToolsSmartBoostAdBoostStatusGetV10DataRaiseDetailsStatus = 'CAN_RAISE';
    public const FINISH_RAISE_QianchuanToolsSmartBoostAdBoostStatusGetV10DataRaiseDetailsStatus = 'FINISH_RAISE';
    public const HASPRE_RAISE_QianchuanToolsSmartBoostAdBoostStatusGetV10DataRaiseDetailsStatus = 'HASPRE_RAISE';
    public const RAISE_FAILED_QianchuanToolsSmartBoostAdBoostStatusGetV10DataRaiseDetailsStatus = 'RAISE_FAILED';
    public const RAISING_QianchuanToolsSmartBoostAdBoostStatusGetV10DataRaiseDetailsStatus = 'RAISING';

    public const ALLOWED_VALUES = [
        self::CANNOT_RAISE_QianchuanToolsSmartBoostAdBoostStatusGetV10DataRaiseDetailsStatus,
        self::CAN_RAISE_QianchuanToolsSmartBoostAdBoostStatusGetV10DataRaiseDetailsStatus,
        self::FINISH_RAISE_QianchuanToolsSmartBoostAdBoostStatusGetV10DataRaiseDetailsStatus,
        self::HASPRE_RAISE_QianchuanToolsSmartBoostAdBoostStatusGetV10DataRaiseDetailsStatus,
        self::RAISE_FAILED_QianchuanToolsSmartBoostAdBoostStatusGetV10DataRaiseDetailsStatus,
        self::RAISING_QianchuanToolsSmartBoostAdBoostStatusGetV10DataRaiseDetailsStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanToolsSmartBoostAdBoostStatusGetV10DataRaiseDetailsStatus', $value));
        }
        return (string) $value;
    }
}
