<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class PromotionAutoGenerateConfigGetV30DataStrategyDataType
{
    public const HORIZONTAL2_HORIZONTAL_PromotionAutoGenerateConfigGetV30DataStrategyDataType = 'Horizontal2Horizontal';
    public const HORIZONTAL2_VERTICAL_PromotionAutoGenerateConfigGetV30DataStrategyDataType = 'Horizontal2Vertical';
    public const VERTICAL2_HORIZONTAL_PromotionAutoGenerateConfigGetV30DataStrategyDataType = 'Vertical2Horizontal';
    public const VERTICAL2_VERTICAL_PromotionAutoGenerateConfigGetV30DataStrategyDataType = 'Vertical2Vertical';

    public const ALLOWED_VALUES = [
        self::HORIZONTAL2_HORIZONTAL_PromotionAutoGenerateConfigGetV30DataStrategyDataType,
        self::HORIZONTAL2_VERTICAL_PromotionAutoGenerateConfigGetV30DataStrategyDataType,
        self::VERTICAL2_HORIZONTAL_PromotionAutoGenerateConfigGetV30DataStrategyDataType,
        self::VERTICAL2_VERTICAL_PromotionAutoGenerateConfigGetV30DataStrategyDataType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum PromotionAutoGenerateConfigGetV30DataStrategyDataType', $value));
        }
        return (string) $value;
    }
}
