<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class StdProjectCreateV30ProjectMaterialsProductInfoProductImageType
{
    public const CUSTOM_StdProjectCreateV30ProjectMaterialsProductInfoProductImageType = 'CUSTOM';
    public const DPA_StdProjectCreateV30ProjectMaterialsProductInfoProductImageType = 'DPA';

    public const ALLOWED_VALUES = [
        self::CUSTOM_StdProjectCreateV30ProjectMaterialsProductInfoProductImageType,
        self::DPA_StdProjectCreateV30ProjectMaterialsProductInfoProductImageType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum StdProjectCreateV30ProjectMaterialsProductInfoProductImageType', $value));
        }
        return (string) $value;
    }
}
