<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class StdProjectListV30DataListAudienceCarrier
{
    public const MOBILE_StdProjectListV30DataListAudienceCarrier = 'MOBILE';
    public const TELCOM_StdProjectListV30DataListAudienceCarrier = 'TELCOM';
    public const UNICOM_StdProjectListV30DataListAudienceCarrier = 'UNICOM';

    public const ALLOWED_VALUES = [
        self::MOBILE_StdProjectListV30DataListAudienceCarrier,
        self::TELCOM_StdProjectListV30DataListAudienceCarrier,
        self::UNICOM_StdProjectListV30DataListAudienceCarrier,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum StdProjectListV30DataListAudienceCarrier', $value));
        }
        return (string) $value;
    }
}
