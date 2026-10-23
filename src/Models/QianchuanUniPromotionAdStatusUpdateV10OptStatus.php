<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanUniPromotionAdStatusUpdateV10OptStatus
{
    public const DISABLE_QianchuanUniPromotionAdStatusUpdateV10OptStatus = 'DISABLE';
    public const ENABLE_QianchuanUniPromotionAdStatusUpdateV10OptStatus = 'ENABLE';
    public const DELETE_QianchuanUniPromotionAdStatusUpdateV10OptStatus = 'DELETE';

    public const ALLOWED_VALUES = [
        self::DISABLE_QianchuanUniPromotionAdStatusUpdateV10OptStatus,
        self::ENABLE_QianchuanUniPromotionAdStatusUpdateV10OptStatus,
        self::DELETE_QianchuanUniPromotionAdStatusUpdateV10OptStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanUniPromotionAdStatusUpdateV10OptStatus', $value));
        }
        return (string) $value;
    }
}
