<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanAdDetailGetV10DataAudienceAudienceMode
{
    public const AUTO_QianchuanAdDetailGetV10DataAudienceAudienceMode = 'AUTO';
    public const AUTO_ORIENTATION_QianchuanAdDetailGetV10DataAudienceAudienceMode = 'AUTO_ORIENTATION';
    public const CUSTOM_QianchuanAdDetailGetV10DataAudienceAudienceMode = 'CUSTOM';
    public const NONE_QianchuanAdDetailGetV10DataAudienceAudienceMode = 'NONE';
    public const ORIENTATION_PACKAGE_QianchuanAdDetailGetV10DataAudienceAudienceMode = 'ORIENTATION_PACKAGE';
    public const UNKNOWN_QianchuanAdDetailGetV10DataAudienceAudienceMode = 'UNKNOWN';

    public const ALLOWED_VALUES = [
        self::AUTO_QianchuanAdDetailGetV10DataAudienceAudienceMode,
        self::AUTO_ORIENTATION_QianchuanAdDetailGetV10DataAudienceAudienceMode,
        self::CUSTOM_QianchuanAdDetailGetV10DataAudienceAudienceMode,
        self::NONE_QianchuanAdDetailGetV10DataAudienceAudienceMode,
        self::ORIENTATION_PACKAGE_QianchuanAdDetailGetV10DataAudienceAudienceMode,
        self::UNKNOWN_QianchuanAdDetailGetV10DataAudienceAudienceMode,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanAdDetailGetV10DataAudienceAudienceMode', $value));
        }
        return (string) $value;
    }
}
