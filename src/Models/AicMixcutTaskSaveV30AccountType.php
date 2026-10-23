<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class AicMixcutTaskSaveV30AccountType
{
    public const AGENT_AicMixcutTaskSaveV30AccountType = 'AGENT';
    public const BP_AicMixcutTaskSaveV30AccountType = 'BP';

    public const ALLOWED_VALUES = [
        self::AGENT_AicMixcutTaskSaveV30AccountType,
        self::BP_AicMixcutTaskSaveV30AccountType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum AicMixcutTaskSaveV30AccountType', $value));
        }
        return (string) $value;
    }
}
