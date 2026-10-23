<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class StarVasCreateBoostItemGroupV2BoostAction
{
    public const LINK_ACTION_StarVasCreateBoostItemGroupV2BoostAction = 'LINK_ACTION';
    public const NATIVE_ACTION_StarVasCreateBoostItemGroupV2BoostAction = 'NATIVE_ACTION';

    public const ALLOWED_VALUES = [
        self::LINK_ACTION_StarVasCreateBoostItemGroupV2BoostAction,
        self::NATIVE_ACTION_StarVasCreateBoostItemGroupV2BoostAction,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum StarVasCreateBoostItemGroupV2BoostAction', $value));
        }
        return (string) $value;
    }
}
