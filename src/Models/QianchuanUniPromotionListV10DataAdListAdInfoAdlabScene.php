<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanUniPromotionListV10DataAdListAdInfoAdlabScene
{
    public const OVERALL_PROJECT_QianchuanUniPromotionListV10DataAdListAdInfoAdlabScene = 'OVERALL_PROJECT';
    public const UNI_PROJECT_QianchuanUniPromotionListV10DataAdListAdInfoAdlabScene = 'UNI_PROJECT';

    public const ALLOWED_VALUES = [
        self::OVERALL_PROJECT_QianchuanUniPromotionListV10DataAdListAdInfoAdlabScene,
        self::UNI_PROJECT_QianchuanUniPromotionListV10DataAdListAdInfoAdlabScene,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanUniPromotionListV10DataAdListAdInfoAdlabScene', $value));
        }
        return (string) $value;
    }
}
