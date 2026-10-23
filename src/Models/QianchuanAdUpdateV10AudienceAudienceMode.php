<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanAdUpdateV10AudienceAudienceMode
{
    public const AUTO_QianchuanAdUpdateV10AudienceAudienceMode = 'AUTO';
    public const AUTO_ORIENTATION_QianchuanAdUpdateV10AudienceAudienceMode = 'AUTO_ORIENTATION';
    public const CUSTOM_QianchuanAdUpdateV10AudienceAudienceMode = 'CUSTOM';
    public const NONE_QianchuanAdUpdateV10AudienceAudienceMode = 'NONE';
    public const ORIENTATION_PACKAGE_QianchuanAdUpdateV10AudienceAudienceMode = 'ORIENTATION_PACKAGE';

    public const ALLOWED_VALUES = [
        self::AUTO_QianchuanAdUpdateV10AudienceAudienceMode,
        self::AUTO_ORIENTATION_QianchuanAdUpdateV10AudienceAudienceMode,
        self::CUSTOM_QianchuanAdUpdateV10AudienceAudienceMode,
        self::NONE_QianchuanAdUpdateV10AudienceAudienceMode,
        self::ORIENTATION_PACKAGE_QianchuanAdUpdateV10AudienceAudienceMode,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanAdUpdateV10AudienceAudienceMode', $value));
        }
        return (string) $value;
    }
}
