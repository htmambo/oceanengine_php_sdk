<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class StarVasGetBoostGroupListV2DataBoostGroupInfosBoostAction
{
    public const LINK_ACTION_StarVasGetBoostGroupListV2DataBoostGroupInfosBoostAction = 'LINK_ACTION';
    public const NATIVE_ACTION_StarVasGetBoostGroupListV2DataBoostGroupInfosBoostAction = 'NATIVE_ACTION';

    public const ALLOWED_VALUES = [
        self::LINK_ACTION_StarVasGetBoostGroupListV2DataBoostGroupInfosBoostAction,
        self::NATIVE_ACTION_StarVasGetBoostGroupListV2DataBoostGroupInfosBoostAction,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum StarVasGetBoostGroupListV2DataBoostGroupInfosBoostAction', $value));
        }
        return (string) $value;
    }
}
