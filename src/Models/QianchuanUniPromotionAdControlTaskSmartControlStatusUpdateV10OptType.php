<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanUniPromotionAdControlTaskSmartControlStatusUpdateV10OptType
{
    public const DISABLE_QianchuanUniPromotionAdControlTaskSmartControlStatusUpdateV10OptType = 'DISABLE';

    public const ALLOWED_VALUES = [
        self::DISABLE_QianchuanUniPromotionAdControlTaskSmartControlStatusUpdateV10OptType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanUniPromotionAdControlTaskSmartControlStatusUpdateV10OptType', $value));
        }
        return (string) $value;
    }
}
