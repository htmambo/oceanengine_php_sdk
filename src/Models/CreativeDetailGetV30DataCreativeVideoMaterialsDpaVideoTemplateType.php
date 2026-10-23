<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class CreativeDetailGetV30DataCreativeVideoMaterialsDpaVideoTemplateType
{
    public const DPA_VIDEO_TEMPLATE_CUSTOM_CreativeDetailGetV30DataCreativeVideoMaterialsDpaVideoTemplateType = 'DPA_VIDEO_TEMPLATE_CUSTOM';
    public const DPA_VIDEO_TEMPLATE_DEPRECATED_CreativeDetailGetV30DataCreativeVideoMaterialsDpaVideoTemplateType = 'DPA_VIDEO_TEMPLATE_DEPRECATED';
    public const DPA_VIDEO_TEMPLATE_SMART_CreativeDetailGetV30DataCreativeVideoMaterialsDpaVideoTemplateType = 'DPA_VIDEO_TEMPLATE_SMART';

    public const ALLOWED_VALUES = [
        self::DPA_VIDEO_TEMPLATE_CUSTOM_CreativeDetailGetV30DataCreativeVideoMaterialsDpaVideoTemplateType,
        self::DPA_VIDEO_TEMPLATE_DEPRECATED_CreativeDetailGetV30DataCreativeVideoMaterialsDpaVideoTemplateType,
        self::DPA_VIDEO_TEMPLATE_SMART_CreativeDetailGetV30DataCreativeVideoMaterialsDpaVideoTemplateType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum CreativeDetailGetV30DataCreativeVideoMaterialsDpaVideoTemplateType', $value));
        }
        return (string) $value;
    }
}
