<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class CreativeStrategyListV2DataStrategyModelsStateListStateType
{
    public const IMAGE_CreativeStrategyListV2DataStrategyModelsStateListStateType = 'Image';
    public const TEXT_CreativeStrategyListV2DataStrategyModelsStateListStateType = 'Text';

    public const ALLOWED_VALUES = [
        self::IMAGE_CreativeStrategyListV2DataStrategyModelsStateListStateType,
        self::TEXT_CreativeStrategyListV2DataStrategyModelsStateListStateType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum CreativeStrategyListV2DataStrategyModelsStateListStateType', $value));
        }
        return (string) $value;
    }
}
