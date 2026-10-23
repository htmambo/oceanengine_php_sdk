<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class PromotionAutoGenerateConfigGetV30DataTemplatesTemplateType
{
    public const HORIZONTAL_TO_VERTICAL_DYNAMIC_BACK_VIDEO_PromotionAutoGenerateConfigGetV30DataTemplatesTemplateType = 'HORIZONTAL_TO_VERTICAL_DYNAMIC_BACK_VIDEO';
    public const VERTICAL_TO_HORIZONTAL_DYNAMIC_BACK_VIDEO_PromotionAutoGenerateConfigGetV30DataTemplatesTemplateType = 'VERTICAL_TO_HORIZONTAL_DYNAMIC_BACK_VIDEO';
    public const VERTICAL_TO_HORIZONTAL_STATIC_BACK_VIDEO_PromotionAutoGenerateConfigGetV30DataTemplatesTemplateType = 'VERTICAL_TO_HORIZONTAL_STATIC_BACK_VIDEO';

    public const ALLOWED_VALUES = [
        self::HORIZONTAL_TO_VERTICAL_DYNAMIC_BACK_VIDEO_PromotionAutoGenerateConfigGetV30DataTemplatesTemplateType,
        self::VERTICAL_TO_HORIZONTAL_DYNAMIC_BACK_VIDEO_PromotionAutoGenerateConfigGetV30DataTemplatesTemplateType,
        self::VERTICAL_TO_HORIZONTAL_STATIC_BACK_VIDEO_PromotionAutoGenerateConfigGetV30DataTemplatesTemplateType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum PromotionAutoGenerateConfigGetV30DataTemplatesTemplateType', $value));
        }
        return (string) $value;
    }
}
