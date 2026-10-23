<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class StdProjectCreateV30ProjectMaterialsOpenUrlType
{
    public const CUSTOM_StdProjectCreateV30ProjectMaterialsOpenUrlType = 'CUSTOM';
    public const DPA_StdProjectCreateV30ProjectMaterialsOpenUrlType = 'DPA';
    public const NONE_StdProjectCreateV30ProjectMaterialsOpenUrlType = 'NONE';

    public const ALLOWED_VALUES = [
        self::CUSTOM_StdProjectCreateV30ProjectMaterialsOpenUrlType,
        self::DPA_StdProjectCreateV30ProjectMaterialsOpenUrlType,
        self::NONE_StdProjectCreateV30ProjectMaterialsOpenUrlType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum StdProjectCreateV30ProjectMaterialsOpenUrlType', $value));
        }
        return (string) $value;
    }
}
