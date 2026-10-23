<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class AicVideoMixcutCreateV30AccountType
{
    public const AGENT_AicVideoMixcutCreateV30AccountType = 'AGENT';
    public const BP_AicVideoMixcutCreateV30AccountType = 'BP';

    public const ALLOWED_VALUES = [
        self::AGENT_AicVideoMixcutCreateV30AccountType,
        self::BP_AicVideoMixcutCreateV30AccountType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum AicVideoMixcutCreateV30AccountType', $value));
        }
        return (string) $value;
    }
}
