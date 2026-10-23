<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class StdProjectCreateV30ProjectMaterialsProductInfoProductNameType
{
    public const CUSTOM_StdProjectCreateV30ProjectMaterialsProductInfoProductNameType = 'CUSTOM';
    public const DPA_StdProjectCreateV30ProjectMaterialsProductInfoProductNameType = 'DPA';

    public const ALLOWED_VALUES = [
        self::CUSTOM_StdProjectCreateV30ProjectMaterialsProductInfoProductNameType,
        self::DPA_StdProjectCreateV30ProjectMaterialsProductInfoProductNameType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum StdProjectCreateV30ProjectMaterialsProductInfoProductNameType', $value));
        }
        return (string) $value;
    }
}
