<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanAwemeOrderCreateV10AudienceRegionVersion
{
    public const Enum_2_3_2_QianchuanAwemeOrderCreateV10AudienceRegionVersion = '2.3.2';

    public const ALLOWED_VALUES = [
        self::Enum_2_3_2_QianchuanAwemeOrderCreateV10AudienceRegionVersion,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanAwemeOrderCreateV10AudienceRegionVersion', $value));
        }
        return (string) $value;
    }
}
