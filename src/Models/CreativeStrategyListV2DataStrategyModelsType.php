<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class CreativeStrategyListV2DataStrategyModelsType
{
    public const HORIZONTAL2_HORIZONTAL_CreativeStrategyListV2DataStrategyModelsType = 'Horizontal2Horizontal';
    public const HORIZONTAL2_VERTICAL_CreativeStrategyListV2DataStrategyModelsType = 'Horizontal2Vertical';
    public const VERTICAL2_HORIZONTAL_CreativeStrategyListV2DataStrategyModelsType = 'Vertical2Horizontal';
    public const VERTICAL2_VERTICAL_CreativeStrategyListV2DataStrategyModelsType = 'Vertical2Vertical';

    public const ALLOWED_VALUES = [
        self::HORIZONTAL2_HORIZONTAL_CreativeStrategyListV2DataStrategyModelsType,
        self::HORIZONTAL2_VERTICAL_CreativeStrategyListV2DataStrategyModelsType,
        self::VERTICAL2_HORIZONTAL_CreativeStrategyListV2DataStrategyModelsType,
        self::VERTICAL2_VERTICAL_CreativeStrategyListV2DataStrategyModelsType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum CreativeStrategyListV2DataStrategyModelsType', $value));
        }
        return (string) $value;
    }
}
