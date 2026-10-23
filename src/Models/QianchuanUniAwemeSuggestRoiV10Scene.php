<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanUniAwemeSuggestRoiV10Scene
{
    public const MATERIAL_ADD_BUDGET_QianchuanUniAwemeSuggestRoiV10Scene = 'MATERIAL_ADD_BUDGET';

    public const ALLOWED_VALUES = [
        self::MATERIAL_ADD_BUDGET_QianchuanUniAwemeSuggestRoiV10Scene,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanUniAwemeSuggestRoiV10Scene', $value));
        }
        return (string) $value;
    }
}
