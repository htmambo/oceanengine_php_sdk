<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class StarStarAdUniteTaskItemListV2DataStatInfoItemStatus
{
    public const AUDIT_PASS_StarStarAdUniteTaskItemListV2DataStatInfoItemStatus = 'AUDIT_PASS';
    public const CREATED_StarStarAdUniteTaskItemListV2DataStatInfoItemStatus = 'CREATED';
    public const PRIVATE_AREA_StarStarAdUniteTaskItemListV2DataStatInfoItemStatus = 'PRIVATE_AREA';
    public const USER_DELETED_StarStarAdUniteTaskItemListV2DataStatInfoItemStatus = 'USER_DELETED';

    public const ALLOWED_VALUES = [
        self::AUDIT_PASS_StarStarAdUniteTaskItemListV2DataStatInfoItemStatus,
        self::CREATED_StarStarAdUniteTaskItemListV2DataStatInfoItemStatus,
        self::PRIVATE_AREA_StarStarAdUniteTaskItemListV2DataStatInfoItemStatus,
        self::USER_DELETED_StarStarAdUniteTaskItemListV2DataStatInfoItemStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum StarStarAdUniteTaskItemListV2DataStatInfoItemStatus', $value));
        }
        return (string) $value;
    }
}
