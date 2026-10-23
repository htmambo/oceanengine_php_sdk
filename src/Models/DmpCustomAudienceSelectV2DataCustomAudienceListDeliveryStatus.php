<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class DmpCustomAudienceSelectV2DataCustomAudienceListDeliveryStatus
{
    public const CUSTOM_AUDIENCE_DELIVERY_STATUS_AVAILABLE_DmpCustomAudienceSelectV2DataCustomAudienceListDeliveryStatus = 'CUSTOM_AUDIENCE_DELIVERY_STATUS_AVAILABLE';
    public const CUSTOM_AUDIENCE_DELIVERY_STATUS_NEED_PUBLISH_DmpCustomAudienceSelectV2DataCustomAudienceListDeliveryStatus = 'CUSTOM_AUDIENCE_DELIVERY_STATUS_NEED_PUBLISH';
    public const CUSTOM_AUDIENCE_DELIVERY_STATUS_NEED_PUSH_DmpCustomAudienceSelectV2DataCustomAudienceListDeliveryStatus = 'CUSTOM_AUDIENCE_DELIVERY_STATUS_NEED_PUSH';
    public const CUSTOM_AUDIENCE_DELIVERY_STATUS_UNAVAILABLE_DmpCustomAudienceSelectV2DataCustomAudienceListDeliveryStatus = 'CUSTOM_AUDIENCE_DELIVERY_STATUS_UNAVAILABLE';

    public const ALLOWED_VALUES = [
        self::CUSTOM_AUDIENCE_DELIVERY_STATUS_AVAILABLE_DmpCustomAudienceSelectV2DataCustomAudienceListDeliveryStatus,
        self::CUSTOM_AUDIENCE_DELIVERY_STATUS_NEED_PUBLISH_DmpCustomAudienceSelectV2DataCustomAudienceListDeliveryStatus,
        self::CUSTOM_AUDIENCE_DELIVERY_STATUS_NEED_PUSH_DmpCustomAudienceSelectV2DataCustomAudienceListDeliveryStatus,
        self::CUSTOM_AUDIENCE_DELIVERY_STATUS_UNAVAILABLE_DmpCustomAudienceSelectV2DataCustomAudienceListDeliveryStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum DmpCustomAudienceSelectV2DataCustomAudienceListDeliveryStatus', $value));
        }
        return (string) $value;
    }
}
