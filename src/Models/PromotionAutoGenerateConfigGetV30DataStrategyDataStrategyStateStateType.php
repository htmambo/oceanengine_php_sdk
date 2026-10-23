<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class PromotionAutoGenerateConfigGetV30DataStrategyDataStrategyStateStateType
{
    public const IMAGE_PromotionAutoGenerateConfigGetV30DataStrategyDataStrategyStateStateType = 'Image';
    public const TEXT_PromotionAutoGenerateConfigGetV30DataStrategyDataStrategyStateStateType = 'Text';

    public const ALLOWED_VALUES = [
        self::IMAGE_PromotionAutoGenerateConfigGetV30DataStrategyDataStrategyStateStateType,
        self::TEXT_PromotionAutoGenerateConfigGetV30DataStrategyDataStrategyStateStateType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum PromotionAutoGenerateConfigGetV30DataStrategyDataStrategyStateStateType', $value));
        }
        return (string) $value;
    }
}
