<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class StarVasGetBoostGroupListV2DataBoostGroupInfosBoostType
{
    public const CUSTOM_PACKAGE_StarVasGetBoostGroupListV2DataBoostGroupInfosBoostType = 'CUSTOM_PACKAGE';
    public const CUSTOM_TAG_StarVasGetBoostGroupListV2DataBoostGroupInfosBoostType = 'CUSTOM_TAG';
    public const NONE_StarVasGetBoostGroupListV2DataBoostGroupInfosBoostType = 'NONE';

    public const ALLOWED_VALUES = [
        self::CUSTOM_PACKAGE_StarVasGetBoostGroupListV2DataBoostGroupInfosBoostType,
        self::CUSTOM_TAG_StarVasGetBoostGroupListV2DataBoostGroupInfosBoostType,
        self::NONE_StarVasGetBoostGroupListV2DataBoostGroupInfosBoostType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum StarVasGetBoostGroupListV2DataBoostGroupInfosBoostType', $value));
        }
        return (string) $value;
    }
}
