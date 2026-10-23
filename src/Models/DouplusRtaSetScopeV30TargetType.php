<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class DouplusRtaSetScopeV30TargetType
{
    public const ORDER_DouplusRtaSetScopeV30TargetType = 'ORDER';
    public const ADV_DouplusRtaSetScopeV30TargetType = 'ADV';

    public const ALLOWED_VALUES = [
        self::ORDER_DouplusRtaSetScopeV30TargetType,
        self::ADV_DouplusRtaSetScopeV30TargetType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum DouplusRtaSetScopeV30TargetType', $value));
        }
        return (string) $value;
    }
}
