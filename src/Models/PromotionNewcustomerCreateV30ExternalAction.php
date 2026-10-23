<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class PromotionNewcustomerCreateV30ExternalAction
{
    public const AD_CONVERT_TYPE_FORM_PromotionNewcustomerCreateV30ExternalAction = 'AD_CONVERT_TYPE_FORM';
    public const AD_CONVERT_TYPE_MESSAGE_ACTION_PromotionNewcustomerCreateV30ExternalAction = 'AD_CONVERT_TYPE_MESSAGE_ACTION';
    public const AD_CONVERT_TYPE_MESSAGE_CLUE_PromotionNewcustomerCreateV30ExternalAction = 'AD_CONVERT_TYPE_MESSAGE_CLUE';

    public const ALLOWED_VALUES = [
        self::AD_CONVERT_TYPE_FORM_PromotionNewcustomerCreateV30ExternalAction,
        self::AD_CONVERT_TYPE_MESSAGE_ACTION_PromotionNewcustomerCreateV30ExternalAction,
        self::AD_CONVERT_TYPE_MESSAGE_CLUE_PromotionNewcustomerCreateV30ExternalAction,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum PromotionNewcustomerCreateV30ExternalAction', $value));
        }
        return (string) $value;
    }
}
