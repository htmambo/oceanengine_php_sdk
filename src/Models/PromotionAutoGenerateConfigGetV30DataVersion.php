<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class PromotionAutoGenerateConfigGetV30DataVersion
{
    public const STRATEGY_PromotionAutoGenerateConfigGetV30DataVersion = 'Strategy';
    public const TEMPLATE_PromotionAutoGenerateConfigGetV30DataVersion = 'Template';

    public const ALLOWED_VALUES = [
        self::STRATEGY_PromotionAutoGenerateConfigGetV30DataVersion,
        self::TEMPLATE_PromotionAutoGenerateConfigGetV30DataVersion,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum PromotionAutoGenerateConfigGetV30DataVersion', $value));
        }
        return (string) $value;
    }
}
