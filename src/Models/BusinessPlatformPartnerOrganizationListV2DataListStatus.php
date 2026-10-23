<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class BusinessPlatformPartnerOrganizationListV2DataListStatus
{
    public const BOUND_BusinessPlatformPartnerOrganizationListV2DataListStatus = 'BOUND';
    public const BINDING_BusinessPlatformPartnerOrganizationListV2DataListStatus = 'BINDING';
    public const INVALID_BusinessPlatformPartnerOrganizationListV2DataListStatus = 'INVALID';
    public const DELETED_BusinessPlatformPartnerOrganizationListV2DataListStatus = 'DELETED';

    public const ALLOWED_VALUES = [
        self::BOUND_BusinessPlatformPartnerOrganizationListV2DataListStatus,
        self::BINDING_BusinessPlatformPartnerOrganizationListV2DataListStatus,
        self::INVALID_BusinessPlatformPartnerOrganizationListV2DataListStatus,
        self::DELETED_BusinessPlatformPartnerOrganizationListV2DataListStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum BusinessPlatformPartnerOrganizationListV2DataListStatus', $value));
        }
        return (string) $value;
    }
}
