<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class StarVasGetBoostItemGroupDetailV2DataTaskInfoBoostAction
{
    public const LINK_ACTION_StarVasGetBoostItemGroupDetailV2DataTaskInfoBoostAction = 'LINK_ACTION';
    public const NATIVE_ACTION_StarVasGetBoostItemGroupDetailV2DataTaskInfoBoostAction = 'NATIVE_ACTION';

    public const ALLOWED_VALUES = [
        self::LINK_ACTION_StarVasGetBoostItemGroupDetailV2DataTaskInfoBoostAction,
        self::NATIVE_ACTION_StarVasGetBoostItemGroupDetailV2DataTaskInfoBoostAction,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum StarVasGetBoostItemGroupDetailV2DataTaskInfoBoostAction', $value));
        }
        return (string) $value;
    }
}
