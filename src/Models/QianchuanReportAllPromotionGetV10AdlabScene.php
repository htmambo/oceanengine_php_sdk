<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanReportAllPromotionGetV10AdlabScene
{
    public const OVERALL_PROJECT_QianchuanReportAllPromotionGetV10AdlabScene = 'OVERALL_PROJECT';
    public const UNI_PROJECT_QianchuanReportAllPromotionGetV10AdlabScene = 'UNI_PROJECT';

    public const ALLOWED_VALUES = [
        self::OVERALL_PROJECT_QianchuanReportAllPromotionGetV10AdlabScene,
        self::UNI_PROJECT_QianchuanReportAllPromotionGetV10AdlabScene,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanReportAllPromotionGetV10AdlabScene', $value));
        }
        return (string) $value;
    }
}
