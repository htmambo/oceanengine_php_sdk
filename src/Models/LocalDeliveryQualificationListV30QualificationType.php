<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class LocalDeliveryQualificationListV30QualificationType
{
    public const AGENT_ARRANGEMENT_LocalDeliveryQualificationListV30QualificationType = 'AGENT_ARRANGEMENT';
    public const AUTHORIZATION_CONTRACT_LocalDeliveryQualificationListV30QualificationType = 'AUTHORIZATION_CONTRACT';
    public const DISTRIBUTION_AUTHORIZATION_LocalDeliveryQualificationListV30QualificationType = 'DISTRIBUTION_AUTHORIZATION';
    public const FOOD_BUSINESS_LICENSE_LocalDeliveryQualificationListV30QualificationType = 'FOOD_BUSINESS_LICENSE';
    public const ICP_RECORD_AUTHORIZATION_LocalDeliveryQualificationListV30QualificationType = 'ICP_RECORD_AUTHORIZATION';
    public const OTHER_CERTIFICATION_LocalDeliveryQualificationListV30QualificationType = 'OTHER_CERTIFICATION';
    public const PATENT_CERTIFICATE_LocalDeliveryQualificationListV30QualificationType = 'PATENT_CERTIFICATE';
    public const PORTRAIT_AUTHORIZATION_LocalDeliveryQualificationListV30QualificationType = 'PORTRAIT_AUTHORIZATION';
    public const QUALITY_REPORT_LocalDeliveryQualificationListV30QualificationType = 'QUALITY_REPORT';
    public const SOFTWARE_COPYRIGHT_REGISTRATION_CERTIFICATE_LocalDeliveryQualificationListV30QualificationType = 'SOFTWARE_COPYRIGHT_REGISTRATION_CERTIFICATE';
    public const TRADEMARK_REGISTRATION_CERTIFICATE_LocalDeliveryQualificationListV30QualificationType = 'TRADEMARK_REGISTRATION_CERTIFICATE';
    public const VIDEO_MATERIAL_PRODUCTION_IP_AUTHORIZATION_LocalDeliveryQualificationListV30QualificationType = 'VIDEO_MATERIAL_PRODUCTION_IP_AUTHORIZATION';

    public const ALLOWED_VALUES = [
        self::AGENT_ARRANGEMENT_LocalDeliveryQualificationListV30QualificationType,
        self::AUTHORIZATION_CONTRACT_LocalDeliveryQualificationListV30QualificationType,
        self::DISTRIBUTION_AUTHORIZATION_LocalDeliveryQualificationListV30QualificationType,
        self::FOOD_BUSINESS_LICENSE_LocalDeliveryQualificationListV30QualificationType,
        self::ICP_RECORD_AUTHORIZATION_LocalDeliveryQualificationListV30QualificationType,
        self::OTHER_CERTIFICATION_LocalDeliveryQualificationListV30QualificationType,
        self::PATENT_CERTIFICATE_LocalDeliveryQualificationListV30QualificationType,
        self::PORTRAIT_AUTHORIZATION_LocalDeliveryQualificationListV30QualificationType,
        self::QUALITY_REPORT_LocalDeliveryQualificationListV30QualificationType,
        self::SOFTWARE_COPYRIGHT_REGISTRATION_CERTIFICATE_LocalDeliveryQualificationListV30QualificationType,
        self::TRADEMARK_REGISTRATION_CERTIFICATE_LocalDeliveryQualificationListV30QualificationType,
        self::VIDEO_MATERIAL_PRODUCTION_IP_AUTHORIZATION_LocalDeliveryQualificationListV30QualificationType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum LocalDeliveryQualificationListV30QualificationType', $value));
        }
        return (string) $value;
    }
}
