<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class AdvertiserAvatarGetV2DataSourceStatus
{
    public const UNSET_AdvertiserAvatarGetV2DataSourceStatus = 'UNSET';
    public const IN_AUDIT_AdvertiserAvatarGetV2DataSourceStatus = 'IN_AUDIT';
    public const AUDIT_REJECT_AdvertiserAvatarGetV2DataSourceStatus = 'AUDIT_REJECT';
    public const AUDIT_PASS_AdvertiserAvatarGetV2DataSourceStatus = 'AUDIT_PASS';

    public const ALLOWED_VALUES = [
        self::UNSET_AdvertiserAvatarGetV2DataSourceStatus,
        self::IN_AUDIT_AdvertiserAvatarGetV2DataSourceStatus,
        self::AUDIT_REJECT_AdvertiserAvatarGetV2DataSourceStatus,
        self::AUDIT_PASS_AdvertiserAvatarGetV2DataSourceStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum AdvertiserAvatarGetV2DataSourceStatus', $value));
        }
        return (string) $value;
    }
}
