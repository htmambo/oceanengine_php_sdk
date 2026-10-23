<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class OcProjectToolsAudienceListV30FilteringFirstStatus
{
    public const ADJUSTING_OcProjectToolsAudienceListV30FilteringFirstStatus = 'ADJUSTING';
    public const ALL_OcProjectToolsAudienceListV30FilteringFirstStatus = 'ALL';
    public const ALL_INCLUDE_DELETED_OcProjectToolsAudienceListV30FilteringFirstStatus = 'ALL_INCLUDE_DELETED';
    public const DELETED_OcProjectToolsAudienceListV30FilteringFirstStatus = 'DELETED';
    public const FINISH_OcProjectToolsAudienceListV30FilteringFirstStatus = 'FINISH';
    public const TERMINAL_OcProjectToolsAudienceListV30FilteringFirstStatus = 'TERMINAL';
    public const UNADJUSTED_OcProjectToolsAudienceListV30FilteringFirstStatus = 'UNADJUSTED';

    public const ALLOWED_VALUES = [
        self::ADJUSTING_OcProjectToolsAudienceListV30FilteringFirstStatus,
        self::ALL_OcProjectToolsAudienceListV30FilteringFirstStatus,
        self::ALL_INCLUDE_DELETED_OcProjectToolsAudienceListV30FilteringFirstStatus,
        self::DELETED_OcProjectToolsAudienceListV30FilteringFirstStatus,
        self::FINISH_OcProjectToolsAudienceListV30FilteringFirstStatus,
        self::TERMINAL_OcProjectToolsAudienceListV30FilteringFirstStatus,
        self::UNADJUSTED_OcProjectToolsAudienceListV30FilteringFirstStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum OcProjectToolsAudienceListV30FilteringFirstStatus', $value));
        }
        return (string) $value;
    }
}
