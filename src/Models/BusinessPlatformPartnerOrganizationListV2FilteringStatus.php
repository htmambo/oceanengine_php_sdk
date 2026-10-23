<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class BusinessPlatformPartnerOrganizationListV2FilteringStatus
{
    public const BOUND_BusinessPlatformPartnerOrganizationListV2FilteringStatus = 'BOUND';
    public const BINDING_BusinessPlatformPartnerOrganizationListV2FilteringStatus = 'BINDING';
    public const INVALID_BusinessPlatformPartnerOrganizationListV2FilteringStatus = 'INVALID';
    public const DELETED_BusinessPlatformPartnerOrganizationListV2FilteringStatus = 'DELETED';

    public const ALLOWED_VALUES = [
        self::BOUND_BusinessPlatformPartnerOrganizationListV2FilteringStatus,
        self::BINDING_BusinessPlatformPartnerOrganizationListV2FilteringStatus,
        self::INVALID_BusinessPlatformPartnerOrganizationListV2FilteringStatus,
        self::DELETED_BusinessPlatformPartnerOrganizationListV2FilteringStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum BusinessPlatformPartnerOrganizationListV2FilteringStatus', $value));
        }
        return (string) $value;
    }
}
