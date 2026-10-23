<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class AdvertiserAvatarGetV2DataAvatarStatus
{
    public const UNSET_AdvertiserAvatarGetV2DataAvatarStatus = 'UNSET';
    public const IN_AUDIT_AdvertiserAvatarGetV2DataAvatarStatus = 'IN_AUDIT';
    public const AUDIT_REJECT_AdvertiserAvatarGetV2DataAvatarStatus = 'AUDIT_REJECT';
    public const AUDIT_PASS_AdvertiserAvatarGetV2DataAvatarStatus = 'AUDIT_PASS';

    public const ALLOWED_VALUES = [
        self::UNSET_AdvertiserAvatarGetV2DataAvatarStatus,
        self::IN_AUDIT_AdvertiserAvatarGetV2DataAvatarStatus,
        self::AUDIT_REJECT_AdvertiserAvatarGetV2DataAvatarStatus,
        self::AUDIT_PASS_AdvertiserAvatarGetV2DataAvatarStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum AdvertiserAvatarGetV2DataAvatarStatus', $value));
        }
        return (string) $value;
    }
}
