<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class AdvertiserDeliveryQualificationListV30DataListQualificationType
{
    public const AGENT_ARRANGEMENT_AdvertiserDeliveryQualificationListV30DataListQualificationType = 'AGENT_ARRANGEMENT';
    public const AUTHORIZATION_CONTRACT_AdvertiserDeliveryQualificationListV30DataListQualificationType = 'AUTHORIZATION_CONTRACT';
    public const DISTRIBUTION_AUTHORIZATION_AdvertiserDeliveryQualificationListV30DataListQualificationType = 'DISTRIBUTION_AUTHORIZATION';
    public const FOOD_BUSINESS_LICENSE_AdvertiserDeliveryQualificationListV30DataListQualificationType = 'FOOD_BUSINESS_LICENSE';
    public const ICP_RECORD_AUTHORIZATION_AdvertiserDeliveryQualificationListV30DataListQualificationType = 'ICP_RECORD_AUTHORIZATION';
    public const OTHER_CERTIFICATION_AdvertiserDeliveryQualificationListV30DataListQualificationType = 'OTHER_CERTIFICATION';
    public const PATENT_CERTIFICATE_AdvertiserDeliveryQualificationListV30DataListQualificationType = 'PATENT_CERTIFICATE';
    public const PORTRAIT_AUTHORIZATION_AdvertiserDeliveryQualificationListV30DataListQualificationType = 'PORTRAIT_AUTHORIZATION';
    public const QUALITY_REPORT_AdvertiserDeliveryQualificationListV30DataListQualificationType = 'QUALITY_REPORT';
    public const SOFTWARE_COPYRIGHT_REGISTRATION_CERTIFICATE_AdvertiserDeliveryQualificationListV30DataListQualificationType = 'SOFTWARE_COPYRIGHT_REGISTRATION_CERTIFICATE';
    public const TRADEMARK_REGISTRATION_CERTIFICATE_AdvertiserDeliveryQualificationListV30DataListQualificationType = 'TRADEMARK_REGISTRATION_CERTIFICATE';
    public const VIDEO_MATERIAL_PRODUCTION_IP_AUTHORIZATION_AdvertiserDeliveryQualificationListV30DataListQualificationType = 'VIDEO_MATERIAL_PRODUCTION_IP_AUTHORIZATION';

    public const ALLOWED_VALUES = [
        self::AGENT_ARRANGEMENT_AdvertiserDeliveryQualificationListV30DataListQualificationType,
        self::AUTHORIZATION_CONTRACT_AdvertiserDeliveryQualificationListV30DataListQualificationType,
        self::DISTRIBUTION_AUTHORIZATION_AdvertiserDeliveryQualificationListV30DataListQualificationType,
        self::FOOD_BUSINESS_LICENSE_AdvertiserDeliveryQualificationListV30DataListQualificationType,
        self::ICP_RECORD_AUTHORIZATION_AdvertiserDeliveryQualificationListV30DataListQualificationType,
        self::OTHER_CERTIFICATION_AdvertiserDeliveryQualificationListV30DataListQualificationType,
        self::PATENT_CERTIFICATE_AdvertiserDeliveryQualificationListV30DataListQualificationType,
        self::PORTRAIT_AUTHORIZATION_AdvertiserDeliveryQualificationListV30DataListQualificationType,
        self::QUALITY_REPORT_AdvertiserDeliveryQualificationListV30DataListQualificationType,
        self::SOFTWARE_COPYRIGHT_REGISTRATION_CERTIFICATE_AdvertiserDeliveryQualificationListV30DataListQualificationType,
        self::TRADEMARK_REGISTRATION_CERTIFICATE_AdvertiserDeliveryQualificationListV30DataListQualificationType,
        self::VIDEO_MATERIAL_PRODUCTION_IP_AUTHORIZATION_AdvertiserDeliveryQualificationListV30DataListQualificationType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum AdvertiserDeliveryQualificationListV30DataListQualificationType', $value));
        }
        return (string) $value;
    }
}
