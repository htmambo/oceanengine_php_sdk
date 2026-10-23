<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class BrandToolQueryPublishPriceV30GdSendType
{
    public const CPV_EFFECTIVE_BrandToolQueryPublishPriceV30GdSendType = 'CPV_EFFECTIVE';
    public const CTR_BrandToolQueryPublishPriceV30GdSendType = 'CTR';
    public const FANS_INCR_BrandToolQueryPublishPriceV30GdSendType = 'FANS_INCR';
    public const FORM_BrandToolQueryPublishPriceV30GdSendType = 'FORM';
    public const HOISTING_BrandToolQueryPublishPriceV30GdSendType = 'HOISTING';
    public const INTERACTIVE_BrandToolQueryPublishPriceV30GdSendType = 'INTERACTIVE';
    public const PLANT_GRASS_BrandToolQueryPublishPriceV30GdSendType = 'PLANT_GRASS';
    public const REACH_BrandToolQueryPublishPriceV30GdSendType = 'REACH';
    public const SEQUENCE_BrandToolQueryPublishPriceV30GdSendType = 'SEQUENCE';

    public const ALLOWED_VALUES = [
        self::CPV_EFFECTIVE_BrandToolQueryPublishPriceV30GdSendType,
        self::CTR_BrandToolQueryPublishPriceV30GdSendType,
        self::FANS_INCR_BrandToolQueryPublishPriceV30GdSendType,
        self::FORM_BrandToolQueryPublishPriceV30GdSendType,
        self::HOISTING_BrandToolQueryPublishPriceV30GdSendType,
        self::INTERACTIVE_BrandToolQueryPublishPriceV30GdSendType,
        self::PLANT_GRASS_BrandToolQueryPublishPriceV30GdSendType,
        self::REACH_BrandToolQueryPublishPriceV30GdSendType,
        self::SEQUENCE_BrandToolQueryPublishPriceV30GdSendType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum BrandToolQueryPublishPriceV30GdSendType', $value));
        }
        return (string) $value;
    }
}
