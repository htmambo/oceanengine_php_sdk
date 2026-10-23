<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class CreativeStrategyListV2StrategyTypes
{
    public const HORIZONTAL2_HORIZONTAL_CreativeStrategyListV2StrategyTypes = 'Horizontal2Horizontal';
    public const HORIZONTAL2_VERTICAL_CreativeStrategyListV2StrategyTypes = 'Horizontal2Vertical';
    public const VERTICAL2_HORIZONTAL_CreativeStrategyListV2StrategyTypes = 'Vertical2Horizontal';
    public const VERTICAL2_VERTICAL_CreativeStrategyListV2StrategyTypes = 'Vertical2Vertical';

    public const ALLOWED_VALUES = [
        self::HORIZONTAL2_HORIZONTAL_CreativeStrategyListV2StrategyTypes,
        self::HORIZONTAL2_VERTICAL_CreativeStrategyListV2StrategyTypes,
        self::VERTICAL2_HORIZONTAL_CreativeStrategyListV2StrategyTypes,
        self::VERTICAL2_VERTICAL_CreativeStrategyListV2StrategyTypes,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum CreativeStrategyListV2StrategyTypes', $value));
        }
        return (string) $value;
    }
}
