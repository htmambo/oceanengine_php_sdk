<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class StdProjectListV30DataListAudienceSmartExtend
{
    public const OFF_StdProjectListV30DataListAudienceSmartExtend = 'OFF';
    public const ON_StdProjectListV30DataListAudienceSmartExtend = 'ON';

    public const ALLOWED_VALUES = [
        self::OFF_StdProjectListV30DataListAudienceSmartExtend,
        self::ON_StdProjectListV30DataListAudienceSmartExtend,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum StdProjectListV30DataListAudienceSmartExtend', $value));
        }
        return (string) $value;
    }
}
