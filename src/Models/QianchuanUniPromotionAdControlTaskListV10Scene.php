<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanUniPromotionAdControlTaskListV10Scene
{
    public const MATERIAL_ADD_BUDGET_QianchuanUniPromotionAdControlTaskListV10Scene = 'MATERIAL_ADD_BUDGET';
    public const SMART_BOOST_QianchuanUniPromotionAdControlTaskListV10Scene = 'SMART_BOOST';

    public const ALLOWED_VALUES = [
        self::MATERIAL_ADD_BUDGET_QianchuanUniPromotionAdControlTaskListV10Scene,
        self::SMART_BOOST_QianchuanUniPromotionAdControlTaskListV10Scene,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanUniPromotionAdControlTaskListV10Scene', $value));
        }
        return (string) $value;
    }
}
