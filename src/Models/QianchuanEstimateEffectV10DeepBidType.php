<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanEstimateEffectV10DeepBidType
{
    public const MIN_QianchuanEstimateEffectV10DeepBidType = 'MIN';

    public const ALLOWED_VALUES = [
        self::MIN_QianchuanEstimateEffectV10DeepBidType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanEstimateEffectV10DeepBidType', $value));
        }
        return (string) $value;
    }
}
