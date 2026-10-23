<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanEstimateEffectV10ExternalAction
{
    public const AD_CONVERT_TYPE_LIVE_SUCCESSORDER_PAY_QianchuanEstimateEffectV10ExternalAction = 'AD_CONVERT_TYPE_LIVE_SUCCESSORDER_PAY';

    public const ALLOWED_VALUES = [
        self::AD_CONVERT_TYPE_LIVE_SUCCESSORDER_PAY_QianchuanEstimateEffectV10ExternalAction,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanEstimateEffectV10ExternalAction', $value));
        }
        return (string) $value;
    }
}
