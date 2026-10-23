<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class DmpDataSourceReadV2DataDataListDefaultAudienceDeliveryStatus
{
    public const CUSTOM_AUDIENCE_DELIVERY_STATUS_NEED_PUSH_DmpDataSourceReadV2DataDataListDefaultAudienceDeliveryStatus = 'CUSTOM_AUDIENCE_DELIVERY_STATUS_NEED_PUSH';
    public const CUSTOM_AUDIENCE_DELIVERY_STATUS_UNAVAILABLE_DmpDataSourceReadV2DataDataListDefaultAudienceDeliveryStatus = 'CUSTOM_AUDIENCE_DELIVERY_STATUS_UNAVAILABLE';
    public const CUSTOM_AUDIENCE_DELIVERY_STATUS_NEED_PUBLISH_DmpDataSourceReadV2DataDataListDefaultAudienceDeliveryStatus = 'CUSTOM_AUDIENCE_DELIVERY_STATUS_NEED_PUBLISH';
    public const CUSTOM_AUDIENCE_DELIVERY_STATUS_AVAILABLE_DmpDataSourceReadV2DataDataListDefaultAudienceDeliveryStatus = 'CUSTOM_AUDIENCE_DELIVERY_STATUS_AVAILABLE';

    public const ALLOWED_VALUES = [
        self::CUSTOM_AUDIENCE_DELIVERY_STATUS_NEED_PUSH_DmpDataSourceReadV2DataDataListDefaultAudienceDeliveryStatus,
        self::CUSTOM_AUDIENCE_DELIVERY_STATUS_UNAVAILABLE_DmpDataSourceReadV2DataDataListDefaultAudienceDeliveryStatus,
        self::CUSTOM_AUDIENCE_DELIVERY_STATUS_NEED_PUBLISH_DmpDataSourceReadV2DataDataListDefaultAudienceDeliveryStatus,
        self::CUSTOM_AUDIENCE_DELIVERY_STATUS_AVAILABLE_DmpDataSourceReadV2DataDataListDefaultAudienceDeliveryStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum DmpDataSourceReadV2DataDataListDefaultAudienceDeliveryStatus', $value));
        }
        return (string) $value;
    }
}
