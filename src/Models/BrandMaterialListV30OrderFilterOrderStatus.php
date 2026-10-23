<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class BrandMaterialListV30OrderFilterOrderStatus
{
    public const COMPLETE_BrandMaterialListV30OrderFilterOrderStatus = 'COMPLETE';
    public const DELIVERING_BrandMaterialListV30OrderFilterOrderStatus = 'DELIVERING';
    public const EDITING_BrandMaterialListV30OrderFilterOrderStatus = 'EDITING';
    public const IS_DEL_BrandMaterialListV30OrderFilterOrderStatus = 'IS_DEL';
    public const NEW_ORDER_BrandMaterialListV30OrderFilterOrderStatus = 'NEW_ORDER';
    public const NOT_DELIVER_BrandMaterialListV30OrderFilterOrderStatus = 'NOT_DELIVER';
    public const PAUSE_BrandMaterialListV30OrderFilterOrderStatus = 'PAUSE';
    public const RESUBMITTING_BrandMaterialListV30OrderFilterOrderStatus = 'RESUBMITTING';
    public const RESUBMIT_FAILED_BrandMaterialListV30OrderFilterOrderStatus = 'RESUBMIT_FAILED';
    public const SUBMITTING_BrandMaterialListV30OrderFilterOrderStatus = 'SUBMITTING';
    public const SUBMIT_FAILED_BrandMaterialListV30OrderFilterOrderStatus = 'SUBMIT_FAILED';
    public const WAIT_DELETING_BrandMaterialListV30OrderFilterOrderStatus = 'WAIT_DELETING';

    public const ALLOWED_VALUES = [
        self::COMPLETE_BrandMaterialListV30OrderFilterOrderStatus,
        self::DELIVERING_BrandMaterialListV30OrderFilterOrderStatus,
        self::EDITING_BrandMaterialListV30OrderFilterOrderStatus,
        self::IS_DEL_BrandMaterialListV30OrderFilterOrderStatus,
        self::NEW_ORDER_BrandMaterialListV30OrderFilterOrderStatus,
        self::NOT_DELIVER_BrandMaterialListV30OrderFilterOrderStatus,
        self::PAUSE_BrandMaterialListV30OrderFilterOrderStatus,
        self::RESUBMITTING_BrandMaterialListV30OrderFilterOrderStatus,
        self::RESUBMIT_FAILED_BrandMaterialListV30OrderFilterOrderStatus,
        self::SUBMITTING_BrandMaterialListV30OrderFilterOrderStatus,
        self::SUBMIT_FAILED_BrandMaterialListV30OrderFilterOrderStatus,
        self::WAIT_DELETING_BrandMaterialListV30OrderFilterOrderStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum BrandMaterialListV30OrderFilterOrderStatus', $value));
        }
        return (string) $value;
    }
}
