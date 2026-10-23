<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class PromotionAutoGenerateConfigCreateV30StrategyDataStrategyStateStateType
{
    public const IMAGE_PromotionAutoGenerateConfigCreateV30StrategyDataStrategyStateStateType = 'Image';
    public const TEXT_PromotionAutoGenerateConfigCreateV30StrategyDataStrategyStateStateType = 'Text';

    public const ALLOWED_VALUES = [
        self::IMAGE_PromotionAutoGenerateConfigCreateV30StrategyDataStrategyStateStateType,
        self::TEXT_PromotionAutoGenerateConfigCreateV30StrategyDataStrategyStateStateType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum PromotionAutoGenerateConfigCreateV30StrategyDataStrategyStateStateType', $value));
        }
        return (string) $value;
    }
}
