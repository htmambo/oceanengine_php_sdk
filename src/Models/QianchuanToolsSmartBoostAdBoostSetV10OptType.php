<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanToolsSmartBoostAdBoostSetV10OptType
{
    public const CANCEL_SUBSCRIBE_QianchuanToolsSmartBoostAdBoostSetV10OptType = 'CANCEL_SUBSCRIBE';
    public const START_RAISE_QianchuanToolsSmartBoostAdBoostSetV10OptType = 'START_RAISE';
    public const STOP_RAISE_QianchuanToolsSmartBoostAdBoostSetV10OptType = 'STOP_RAISE';
    public const SUBSCRIBE_RAISE_QianchuanToolsSmartBoostAdBoostSetV10OptType = 'SUBSCRIBE_RAISE';

    public const ALLOWED_VALUES = [
        self::CANCEL_SUBSCRIBE_QianchuanToolsSmartBoostAdBoostSetV10OptType,
        self::START_RAISE_QianchuanToolsSmartBoostAdBoostSetV10OptType,
        self::STOP_RAISE_QianchuanToolsSmartBoostAdBoostSetV10OptType,
        self::SUBSCRIBE_RAISE_QianchuanToolsSmartBoostAdBoostSetV10OptType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanToolsSmartBoostAdBoostSetV10OptType', $value));
        }
        return (string) $value;
    }
}
