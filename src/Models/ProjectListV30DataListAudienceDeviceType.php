<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ProjectListV30DataListAudienceDeviceType
{
    public const MOBILE_ProjectListV30DataListAudienceDeviceType = 'MOBILE';
    public const PAD_ProjectListV30DataListAudienceDeviceType = 'PAD';

    public const ALLOWED_VALUES = [
        self::MOBILE_ProjectListV30DataListAudienceDeviceType,
        self::PAD_ProjectListV30DataListAudienceDeviceType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ProjectListV30DataListAudienceDeviceType', $value));
        }
        return (string) $value;
    }
}
