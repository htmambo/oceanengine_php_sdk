<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class DouplusOrderCreateV30TargetingAge
{
    public const AGE_BETWEEN_18_23_DouplusOrderCreateV30TargetingAge = 'AGE_BETWEEN_18_23';
    public const AGE_BETWEEN_24_30_DouplusOrderCreateV30TargetingAge = 'AGE_BETWEEN_24_30';
    public const AGE_BETWEEN_31_40_DouplusOrderCreateV30TargetingAge = 'AGE_BETWEEN_31_40';
    public const AGE_BETWEEN_41_49_DouplusOrderCreateV30TargetingAge = 'AGE_BETWEEN_41_49';

    public const ALLOWED_VALUES = [
        self::AGE_BETWEEN_18_23_DouplusOrderCreateV30TargetingAge,
        self::AGE_BETWEEN_24_30_DouplusOrderCreateV30TargetingAge,
        self::AGE_BETWEEN_31_40_DouplusOrderCreateV30TargetingAge,
        self::AGE_BETWEEN_41_49_DouplusOrderCreateV30TargetingAge,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum DouplusOrderCreateV30TargetingAge', $value));
        }
        return (string) $value;
    }
}
