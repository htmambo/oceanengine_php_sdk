<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class BrandPolicyListV30GdSendType
{
    public const CPV_EFFECTIVE_BrandPolicyListV30GdSendType = 'CPV_EFFECTIVE';
    public const CTR_BrandPolicyListV30GdSendType = 'CTR';
    public const FANS_INCR_BrandPolicyListV30GdSendType = 'FANS_INCR';
    public const FORM_BrandPolicyListV30GdSendType = 'FORM';
    public const HOISTING_BrandPolicyListV30GdSendType = 'HOISTING';
    public const INTERACTIVE_BrandPolicyListV30GdSendType = 'INTERACTIVE';
    public const PLANT_GRASS_BrandPolicyListV30GdSendType = 'PLANT_GRASS';
    public const REACH_BrandPolicyListV30GdSendType = 'REACH';
    public const SEQUENCE_BrandPolicyListV30GdSendType = 'SEQUENCE';

    public const ALLOWED_VALUES = [
        self::CPV_EFFECTIVE_BrandPolicyListV30GdSendType,
        self::CTR_BrandPolicyListV30GdSendType,
        self::FANS_INCR_BrandPolicyListV30GdSendType,
        self::FORM_BrandPolicyListV30GdSendType,
        self::HOISTING_BrandPolicyListV30GdSendType,
        self::INTERACTIVE_BrandPolicyListV30GdSendType,
        self::PLANT_GRASS_BrandPolicyListV30GdSendType,
        self::REACH_BrandPolicyListV30GdSendType,
        self::SEQUENCE_BrandPolicyListV30GdSendType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum BrandPolicyListV30GdSendType', $value));
        }
        return (string) $value;
    }
}
