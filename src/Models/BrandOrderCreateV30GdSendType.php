<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class BrandOrderCreateV30GdSendType
{
    public const CPV_EFFECTIVE_BrandOrderCreateV30GdSendType = 'CPV_EFFECTIVE';
    public const CTR_BrandOrderCreateV30GdSendType = 'CTR';
    public const FANS_INCR_BrandOrderCreateV30GdSendType = 'FANS_INCR';
    public const FORM_BrandOrderCreateV30GdSendType = 'FORM';
    public const HOISTING_BrandOrderCreateV30GdSendType = 'HOISTING';
    public const INTERACTIVE_BrandOrderCreateV30GdSendType = 'INTERACTIVE';
    public const PLANT_GRASS_BrandOrderCreateV30GdSendType = 'PLANT_GRASS';
    public const REACH_BrandOrderCreateV30GdSendType = 'REACH';
    public const SEQUENCE_BrandOrderCreateV30GdSendType = 'SEQUENCE';

    public const ALLOWED_VALUES = [
        self::CPV_EFFECTIVE_BrandOrderCreateV30GdSendType,
        self::CTR_BrandOrderCreateV30GdSendType,
        self::FANS_INCR_BrandOrderCreateV30GdSendType,
        self::FORM_BrandOrderCreateV30GdSendType,
        self::HOISTING_BrandOrderCreateV30GdSendType,
        self::INTERACTIVE_BrandOrderCreateV30GdSendType,
        self::PLANT_GRASS_BrandOrderCreateV30GdSendType,
        self::REACH_BrandOrderCreateV30GdSendType,
        self::SEQUENCE_BrandOrderCreateV30GdSendType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum BrandOrderCreateV30GdSendType', $value));
        }
        return (string) $value;
    }
}
