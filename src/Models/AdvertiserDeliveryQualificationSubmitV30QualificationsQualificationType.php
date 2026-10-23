<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class AdvertiserDeliveryQualificationSubmitV30QualificationsQualificationType
{
    public const AGENT_ARRANGEMENT_AdvertiserDeliveryQualificationSubmitV30QualificationsQualificationType = 'AGENT_ARRANGEMENT';
    public const AUTHORIZATION_CONTRACT_AdvertiserDeliveryQualificationSubmitV30QualificationsQualificationType = 'AUTHORIZATION_CONTRACT';
    public const DISTRIBUTION_AUTHORIZATION_AdvertiserDeliveryQualificationSubmitV30QualificationsQualificationType = 'DISTRIBUTION_AUTHORIZATION';
    public const ICP_RECORD_AUTHORIZATION_AdvertiserDeliveryQualificationSubmitV30QualificationsQualificationType = 'ICP_RECORD_AUTHORIZATION';
    public const OTHER_CERTIFICATION_AdvertiserDeliveryQualificationSubmitV30QualificationsQualificationType = 'OTHER_CERTIFICATION';
    public const PATENT_CERTIFICATE_AdvertiserDeliveryQualificationSubmitV30QualificationsQualificationType = 'PATENT_CERTIFICATE';
    public const PORTRAIT_AUTHORIZATION_AdvertiserDeliveryQualificationSubmitV30QualificationsQualificationType = 'PORTRAIT_AUTHORIZATION';
    public const QUALITY_REPORT_AdvertiserDeliveryQualificationSubmitV30QualificationsQualificationType = 'QUALITY_REPORT';
    public const SOFTWARE_COPYRIGHT_REGISTRATION_CERTIFICATE_AdvertiserDeliveryQualificationSubmitV30QualificationsQualificationType = 'SOFTWARE_COPYRIGHT_REGISTRATION_CERTIFICATE';
    public const TRADEMARK_REGISTRATION_CERTIFICATE_AdvertiserDeliveryQualificationSubmitV30QualificationsQualificationType = 'TRADEMARK_REGISTRATION_CERTIFICATE';
    public const VIDEO_MATERIAL_PRODUCTION_IP_AUTHORIZATION_AdvertiserDeliveryQualificationSubmitV30QualificationsQualificationType = 'VIDEO_MATERIAL_PRODUCTION_IP_AUTHORIZATION';

    public const ALLOWED_VALUES = [
        self::AGENT_ARRANGEMENT_AdvertiserDeliveryQualificationSubmitV30QualificationsQualificationType,
        self::AUTHORIZATION_CONTRACT_AdvertiserDeliveryQualificationSubmitV30QualificationsQualificationType,
        self::DISTRIBUTION_AUTHORIZATION_AdvertiserDeliveryQualificationSubmitV30QualificationsQualificationType,
        self::ICP_RECORD_AUTHORIZATION_AdvertiserDeliveryQualificationSubmitV30QualificationsQualificationType,
        self::OTHER_CERTIFICATION_AdvertiserDeliveryQualificationSubmitV30QualificationsQualificationType,
        self::PATENT_CERTIFICATE_AdvertiserDeliveryQualificationSubmitV30QualificationsQualificationType,
        self::PORTRAIT_AUTHORIZATION_AdvertiserDeliveryQualificationSubmitV30QualificationsQualificationType,
        self::QUALITY_REPORT_AdvertiserDeliveryQualificationSubmitV30QualificationsQualificationType,
        self::SOFTWARE_COPYRIGHT_REGISTRATION_CERTIFICATE_AdvertiserDeliveryQualificationSubmitV30QualificationsQualificationType,
        self::TRADEMARK_REGISTRATION_CERTIFICATE_AdvertiserDeliveryQualificationSubmitV30QualificationsQualificationType,
        self::VIDEO_MATERIAL_PRODUCTION_IP_AUTHORIZATION_AdvertiserDeliveryQualificationSubmitV30QualificationsQualificationType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum AdvertiserDeliveryQualificationSubmitV30QualificationsQualificationType', $value));
        }
        return (string) $value;
    }
}
