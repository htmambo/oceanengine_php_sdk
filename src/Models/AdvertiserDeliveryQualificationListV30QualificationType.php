<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class AdvertiserDeliveryQualificationListV30QualificationType
{
    public const AGENT_ARRANGEMENT_AdvertiserDeliveryQualificationListV30QualificationType = 'AGENT_ARRANGEMENT';
    public const AUTHORIZATION_CONTRACT_AdvertiserDeliveryQualificationListV30QualificationType = 'AUTHORIZATION_CONTRACT';
    public const DISTRIBUTION_AUTHORIZATION_AdvertiserDeliveryQualificationListV30QualificationType = 'DISTRIBUTION_AUTHORIZATION';
    public const FOOD_BUSINESS_LICENSE_AdvertiserDeliveryQualificationListV30QualificationType = 'FOOD_BUSINESS_LICENSE';
    public const ICP_RECORD_AUTHORIZATION_AdvertiserDeliveryQualificationListV30QualificationType = 'ICP_RECORD_AUTHORIZATION';
    public const OTHER_CERTIFICATION_AdvertiserDeliveryQualificationListV30QualificationType = 'OTHER_CERTIFICATION';
    public const PATENT_CERTIFICATE_AdvertiserDeliveryQualificationListV30QualificationType = 'PATENT_CERTIFICATE';
    public const PORTRAIT_AUTHORIZATION_AdvertiserDeliveryQualificationListV30QualificationType = 'PORTRAIT_AUTHORIZATION';
    public const QUALITY_REPORT_AdvertiserDeliveryQualificationListV30QualificationType = 'QUALITY_REPORT';
    public const SOFTWARE_COPYRIGHT_REGISTRATION_CERTIFICATE_AdvertiserDeliveryQualificationListV30QualificationType = 'SOFTWARE_COPYRIGHT_REGISTRATION_CERTIFICATE';
    public const TRADEMARK_REGISTRATION_CERTIFICATE_AdvertiserDeliveryQualificationListV30QualificationType = 'TRADEMARK_REGISTRATION_CERTIFICATE';
    public const VIDEO_MATERIAL_PRODUCTION_IP_AUTHORIZATION_AdvertiserDeliveryQualificationListV30QualificationType = 'VIDEO_MATERIAL_PRODUCTION_IP_AUTHORIZATION';

    public const ALLOWED_VALUES = [
        self::AGENT_ARRANGEMENT_AdvertiserDeliveryQualificationListV30QualificationType,
        self::AUTHORIZATION_CONTRACT_AdvertiserDeliveryQualificationListV30QualificationType,
        self::DISTRIBUTION_AUTHORIZATION_AdvertiserDeliveryQualificationListV30QualificationType,
        self::FOOD_BUSINESS_LICENSE_AdvertiserDeliveryQualificationListV30QualificationType,
        self::ICP_RECORD_AUTHORIZATION_AdvertiserDeliveryQualificationListV30QualificationType,
        self::OTHER_CERTIFICATION_AdvertiserDeliveryQualificationListV30QualificationType,
        self::PATENT_CERTIFICATE_AdvertiserDeliveryQualificationListV30QualificationType,
        self::PORTRAIT_AUTHORIZATION_AdvertiserDeliveryQualificationListV30QualificationType,
        self::QUALITY_REPORT_AdvertiserDeliveryQualificationListV30QualificationType,
        self::SOFTWARE_COPYRIGHT_REGISTRATION_CERTIFICATE_AdvertiserDeliveryQualificationListV30QualificationType,
        self::TRADEMARK_REGISTRATION_CERTIFICATE_AdvertiserDeliveryQualificationListV30QualificationType,
        self::VIDEO_MATERIAL_PRODUCTION_IP_AUTHORIZATION_AdvertiserDeliveryQualificationListV30QualificationType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum AdvertiserDeliveryQualificationListV30QualificationType', $value));
        }
        return (string) $value;
    }
}
