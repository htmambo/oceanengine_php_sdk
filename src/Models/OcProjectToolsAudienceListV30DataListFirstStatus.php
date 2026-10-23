<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class OcProjectToolsAudienceListV30DataListFirstStatus
{
    public const ADJUSTING_OcProjectToolsAudienceListV30DataListFirstStatus = 'ADJUSTING';
    public const DELETED_OcProjectToolsAudienceListV30DataListFirstStatus = 'DELETED';
    public const FINISH_OcProjectToolsAudienceListV30DataListFirstStatus = 'FINISH';
    public const TERMINAL_OcProjectToolsAudienceListV30DataListFirstStatus = 'TERMINAL';
    public const UNADJUSTED_OcProjectToolsAudienceListV30DataListFirstStatus = 'UNADJUSTED';

    public const ALLOWED_VALUES = [
        self::ADJUSTING_OcProjectToolsAudienceListV30DataListFirstStatus,
        self::DELETED_OcProjectToolsAudienceListV30DataListFirstStatus,
        self::FINISH_OcProjectToolsAudienceListV30DataListFirstStatus,
        self::TERMINAL_OcProjectToolsAudienceListV30DataListFirstStatus,
        self::UNADJUSTED_OcProjectToolsAudienceListV30DataListFirstStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum OcProjectToolsAudienceListV30DataListFirstStatus', $value));
        }
        return (string) $value;
    }
}
