<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class StarVasGetBoostItemGroupDetailV2DataTaskInfoBoostType
{
    public const CUSTOM_PACKAGE_StarVasGetBoostItemGroupDetailV2DataTaskInfoBoostType = 'CUSTOM_PACKAGE';
    public const CUSTOM_TAG_StarVasGetBoostItemGroupDetailV2DataTaskInfoBoostType = 'CUSTOM_TAG';
    public const NONE_StarVasGetBoostItemGroupDetailV2DataTaskInfoBoostType = 'NONE';

    public const ALLOWED_VALUES = [
        self::CUSTOM_PACKAGE_StarVasGetBoostItemGroupDetailV2DataTaskInfoBoostType,
        self::CUSTOM_TAG_StarVasGetBoostItemGroupDetailV2DataTaskInfoBoostType,
        self::NONE_StarVasGetBoostItemGroupDetailV2DataTaskInfoBoostType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum StarVasGetBoostItemGroupDetailV2DataTaskInfoBoostType', $value));
        }
        return (string) $value;
    }
}
