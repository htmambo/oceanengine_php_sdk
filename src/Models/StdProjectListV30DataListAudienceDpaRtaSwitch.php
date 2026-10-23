<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class StdProjectListV30DataListAudienceDpaRtaSwitch
{
    public const OFF_StdProjectListV30DataListAudienceDpaRtaSwitch = 'OFF';
    public const ON_StdProjectListV30DataListAudienceDpaRtaSwitch = 'ON';

    public const ALLOWED_VALUES = [
        self::OFF_StdProjectListV30DataListAudienceDpaRtaSwitch,
        self::ON_StdProjectListV30DataListAudienceDpaRtaSwitch,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum StdProjectListV30DataListAudienceDpaRtaSwitch', $value));
        }
        return (string) $value;
    }
}
