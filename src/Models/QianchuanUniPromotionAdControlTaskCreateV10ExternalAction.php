<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanUniPromotionAdControlTaskCreateV10ExternalAction
{
    public const AD_CONVERT_TYPE_LIVE_HEAT_QianchuanUniPromotionAdControlTaskCreateV10ExternalAction = 'AD_CONVERT_TYPE_LIVE_HEAT';
    public const AD_CONVERT_TYPE_LIVE_SUCCESSORDER_PAY_QianchuanUniPromotionAdControlTaskCreateV10ExternalAction = 'AD_CONVERT_TYPE_LIVE_SUCCESSORDER_PAY';

    public const ALLOWED_VALUES = [
        self::AD_CONVERT_TYPE_LIVE_HEAT_QianchuanUniPromotionAdControlTaskCreateV10ExternalAction,
        self::AD_CONVERT_TYPE_LIVE_SUCCESSORDER_PAY_QianchuanUniPromotionAdControlTaskCreateV10ExternalAction,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanUniPromotionAdControlTaskCreateV10ExternalAction', $value));
        }
        return (string) $value;
    }
}
