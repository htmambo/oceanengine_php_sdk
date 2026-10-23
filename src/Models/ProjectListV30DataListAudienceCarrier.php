<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ProjectListV30DataListAudienceCarrier
{
    public const MOBILE_ProjectListV30DataListAudienceCarrier = 'MOBILE';
    public const TELCOM_ProjectListV30DataListAudienceCarrier = 'TELCOM';
    public const UNICOM_ProjectListV30DataListAudienceCarrier = 'UNICOM';

    public const ALLOWED_VALUES = [
        self::MOBILE_ProjectListV30DataListAudienceCarrier,
        self::TELCOM_ProjectListV30DataListAudienceCarrier,
        self::UNICOM_ProjectListV30DataListAudienceCarrier,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ProjectListV30DataListAudienceCarrier', $value));
        }
        return (string) $value;
    }
}
