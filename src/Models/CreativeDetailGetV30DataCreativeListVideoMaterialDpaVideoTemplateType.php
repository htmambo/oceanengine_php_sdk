<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class CreativeDetailGetV30DataCreativeListVideoMaterialDpaVideoTemplateType
{
    public const DPA_VIDEO_TEMPLATE_CUSTOM_CreativeDetailGetV30DataCreativeListVideoMaterialDpaVideoTemplateType = 'DPA_VIDEO_TEMPLATE_CUSTOM';
    public const DPA_VIDEO_TEMPLATE_DEPRECATED_CreativeDetailGetV30DataCreativeListVideoMaterialDpaVideoTemplateType = 'DPA_VIDEO_TEMPLATE_DEPRECATED';
    public const DPA_VIDEO_TEMPLATE_SMART_CreativeDetailGetV30DataCreativeListVideoMaterialDpaVideoTemplateType = 'DPA_VIDEO_TEMPLATE_SMART';

    public const ALLOWED_VALUES = [
        self::DPA_VIDEO_TEMPLATE_CUSTOM_CreativeDetailGetV30DataCreativeListVideoMaterialDpaVideoTemplateType,
        self::DPA_VIDEO_TEMPLATE_DEPRECATED_CreativeDetailGetV30DataCreativeListVideoMaterialDpaVideoTemplateType,
        self::DPA_VIDEO_TEMPLATE_SMART_CreativeDetailGetV30DataCreativeListVideoMaterialDpaVideoTemplateType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum CreativeDetailGetV30DataCreativeListVideoMaterialDpaVideoTemplateType', $value));
        }
        return (string) $value;
    }
}
