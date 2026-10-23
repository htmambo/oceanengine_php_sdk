<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanToolsEstimateAudienceV10AudienceAudienceMode
{
    public const AUTO_QianchuanToolsEstimateAudienceV10AudienceAudienceMode = 'AUTO';
    public const AUTO_ORIENTATION_QianchuanToolsEstimateAudienceV10AudienceAudienceMode = 'AUTO_ORIENTATION';
    public const CUSTOM_QianchuanToolsEstimateAudienceV10AudienceAudienceMode = 'CUSTOM';
    public const NONE_QianchuanToolsEstimateAudienceV10AudienceAudienceMode = 'NONE';
    public const ORIENTATION_PACKAGE_QianchuanToolsEstimateAudienceV10AudienceAudienceMode = 'ORIENTATION_PACKAGE';

    public const ALLOWED_VALUES = [
        self::AUTO_QianchuanToolsEstimateAudienceV10AudienceAudienceMode,
        self::AUTO_ORIENTATION_QianchuanToolsEstimateAudienceV10AudienceAudienceMode,
        self::CUSTOM_QianchuanToolsEstimateAudienceV10AudienceAudienceMode,
        self::NONE_QianchuanToolsEstimateAudienceV10AudienceAudienceMode,
        self::ORIENTATION_PACKAGE_QianchuanToolsEstimateAudienceV10AudienceAudienceMode,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanToolsEstimateAudienceV10AudienceAudienceMode', $value));
        }
        return (string) $value;
    }
}
