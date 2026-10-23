<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class PromotionNewcustomerTypeGetV30DataCustomerTypes
{
    public const NEW_CUSTOMER_PromotionNewcustomerTypeGetV30DataCustomerTypes = 'NEW_CUSTOMER';
    public const SMALL_CUSTOMER_PromotionNewcustomerTypeGetV30DataCustomerTypes = 'SMALL_CUSTOMER';
    public const WAIST_OR_BIGCUS_PromotionNewcustomerTypeGetV30DataCustomerTypes = 'WAIST_OR_BIGCUS';

    public const ALLOWED_VALUES = [
        self::NEW_CUSTOMER_PromotionNewcustomerTypeGetV30DataCustomerTypes,
        self::SMALL_CUSTOMER_PromotionNewcustomerTypeGetV30DataCustomerTypes,
        self::WAIST_OR_BIGCUS_PromotionNewcustomerTypeGetV30DataCustomerTypes,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum PromotionNewcustomerTypeGetV30DataCustomerTypes', $value));
        }
        return (string) $value;
    }
}
