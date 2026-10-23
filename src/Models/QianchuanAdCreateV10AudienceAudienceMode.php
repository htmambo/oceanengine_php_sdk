<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanAdCreateV10AudienceAudienceMode
{
    public const AUTO_QianchuanAdCreateV10AudienceAudienceMode = 'AUTO';
    public const AUTO_ORIENTATION_QianchuanAdCreateV10AudienceAudienceMode = 'AUTO_ORIENTATION';
    public const CUSTOM_QianchuanAdCreateV10AudienceAudienceMode = 'CUSTOM';
    public const NONE_QianchuanAdCreateV10AudienceAudienceMode = 'NONE';
    public const ORIENTATION_PACKAGE_QianchuanAdCreateV10AudienceAudienceMode = 'ORIENTATION_PACKAGE';

    public const ALLOWED_VALUES = [
        self::AUTO_QianchuanAdCreateV10AudienceAudienceMode,
        self::AUTO_ORIENTATION_QianchuanAdCreateV10AudienceAudienceMode,
        self::CUSTOM_QianchuanAdCreateV10AudienceAudienceMode,
        self::NONE_QianchuanAdCreateV10AudienceAudienceMode,
        self::ORIENTATION_PACKAGE_QianchuanAdCreateV10AudienceAudienceMode,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanAdCreateV10AudienceAudienceMode', $value));
        }
        return (string) $value;
    }
}
