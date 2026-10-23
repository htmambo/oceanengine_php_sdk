<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanUniPromotionAdDetailV10DataMultiProductCreativeListCreativeType
{
    public const CUSTOM_CREATIVE_QianchuanUniPromotionAdDetailV10DataMultiProductCreativeListCreativeType = 'CUSTOM_CREATIVE';
    public const PROGRAMMATIC_CREATIVE_QianchuanUniPromotionAdDetailV10DataMultiProductCreativeListCreativeType = 'PROGRAMMATIC_CREATIVE';

    public const ALLOWED_VALUES = [
        self::CUSTOM_CREATIVE_QianchuanUniPromotionAdDetailV10DataMultiProductCreativeListCreativeType,
        self::PROGRAMMATIC_CREATIVE_QianchuanUniPromotionAdDetailV10DataMultiProductCreativeListCreativeType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanUniPromotionAdDetailV10DataMultiProductCreativeListCreativeType', $value));
        }
        return (string) $value;
    }
}
