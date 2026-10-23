<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanToolsEstimateAudienceV10AudiencePlatform
{
    public const ANDROID_QianchuanToolsEstimateAudienceV10AudiencePlatform = 'ANDROID';
    public const IOS_QianchuanToolsEstimateAudienceV10AudiencePlatform = 'IOS';

    public const ALLOWED_VALUES = [
        self::ANDROID_QianchuanToolsEstimateAudienceV10AudiencePlatform,
        self::IOS_QianchuanToolsEstimateAudienceV10AudiencePlatform,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanToolsEstimateAudienceV10AudiencePlatform', $value));
        }
        return (string) $value;
    }
}
