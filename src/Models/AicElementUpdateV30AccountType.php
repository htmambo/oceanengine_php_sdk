<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class AicElementUpdateV30AccountType
{
    public const AGENT_AicElementUpdateV30AccountType = 'AGENT';
    public const BP_AicElementUpdateV30AccountType = 'BP';

    public const ALLOWED_VALUES = [
        self::AGENT_AicElementUpdateV30AccountType,
        self::BP_AicElementUpdateV30AccountType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum AicElementUpdateV30AccountType', $value));
        }
        return (string) $value;
    }
}
