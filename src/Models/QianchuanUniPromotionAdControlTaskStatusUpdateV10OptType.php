<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanUniPromotionAdControlTaskStatusUpdateV10OptType
{
    public const DELETE_QianchuanUniPromotionAdControlTaskStatusUpdateV10OptType = 'DELETE';
    public const DISABLE_QianchuanUniPromotionAdControlTaskStatusUpdateV10OptType = 'DISABLE';
    public const ENABLE_QianchuanUniPromotionAdControlTaskStatusUpdateV10OptType = 'ENABLE';
    public const PAUSE_QianchuanUniPromotionAdControlTaskStatusUpdateV10OptType = 'PAUSE';

    public const ALLOWED_VALUES = [
        self::DELETE_QianchuanUniPromotionAdControlTaskStatusUpdateV10OptType,
        self::DISABLE_QianchuanUniPromotionAdControlTaskStatusUpdateV10OptType,
        self::ENABLE_QianchuanUniPromotionAdControlTaskStatusUpdateV10OptType,
        self::PAUSE_QianchuanUniPromotionAdControlTaskStatusUpdateV10OptType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanUniPromotionAdControlTaskStatusUpdateV10OptType', $value));
        }
        return (string) $value;
    }
}
