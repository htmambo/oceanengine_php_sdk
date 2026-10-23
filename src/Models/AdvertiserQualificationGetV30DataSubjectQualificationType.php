<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class AdvertiserQualificationGetV30DataSubjectQualificationType
{
    public const ASSOCIATION_REGISTER_CODE_AdvertiserQualificationGetV30DataSubjectQualificationType = 'ASSOCIATION_REGISTER_CODE';
    public const COMMERCIAL_REGISTER_NUMBER_AdvertiserQualificationGetV30DataSubjectQualificationType = 'COMMERCIAL_REGISTER_NUMBER';
    public const COMPANY_CREDIT_CODE_AdvertiserQualificationGetV30DataSubjectQualificationType = 'COMPANY_CREDIT_CODE';
    public const COMPANY_REGISTER_CODE_AdvertiserQualificationGetV30DataSubjectQualificationType = 'COMPANY_REGISTER_CODE';
    public const CREDIT_CODE_AdvertiserQualificationGetV30DataSubjectQualificationType = 'CREDIT_CODE';
    public const HK_MACAO_TAIWAN_ID_AdvertiserQualificationGetV30DataSubjectQualificationType = 'HK_MACAO_TAIWAN_ID';
    public const HK_REGISTER_CODE_AdvertiserQualificationGetV30DataSubjectQualificationType = 'HK_REGISTER_CODE';
    public const ID_AdvertiserQualificationGetV30DataSubjectQualificationType = 'ID';
    public const INDIVIDUAL_CREDIT_CODE_AdvertiserQualificationGetV30DataSubjectQualificationType = 'INDIVIDUAL_CREDIT_CODE';
    public const INDIVIDUAL_REGISTER_CODE_AdvertiserQualificationGetV30DataSubjectQualificationType = 'INDIVIDUAL_REGISTER_CODE';
    public const LAWYER_CERTIFICATE_NUMBER_AdvertiserQualificationGetV30DataSubjectQualificationType = 'LAWYER_CERTIFICATE_NUMBER';
    public const LAWYER_PERMIT_CODE_AdvertiserQualificationGetV30DataSubjectQualificationType = 'LAWYER_PERMIT_CODE';
    public const LEGAL_PERSON_CREDIT_CODE_AdvertiserQualificationGetV30DataSubjectQualificationType = 'LEGAL_PERSON_CREDIT_CODE';
    public const ORGANIZATION_REGISTER_CODE_AdvertiserQualificationGetV30DataSubjectQualificationType = 'ORGANIZATION_REGISTER_CODE';
    public const OTHER_AdvertiserQualificationGetV30DataSubjectQualificationType = 'OTHER';
    public const OVERSEA_REGISTER_CODE_AdvertiserQualificationGetV30DataSubjectQualificationType = 'OVERSEA_REGISTER_CODE';
    public const PASSPORT_ID_AdvertiserQualificationGetV30DataSubjectQualificationType = 'PASSPORT_ID';
    public const SCHOOL_PERMIT_CODE_AdvertiserQualificationGetV30DataSubjectQualificationType = 'SCHOOL_PERMIT_CODE';
    public const SOCIAL_REGISTER_CODE_AdvertiserQualificationGetV30DataSubjectQualificationType = 'SOCIAL_REGISTER_CODE';

    public const ALLOWED_VALUES = [
        self::ASSOCIATION_REGISTER_CODE_AdvertiserQualificationGetV30DataSubjectQualificationType,
        self::COMMERCIAL_REGISTER_NUMBER_AdvertiserQualificationGetV30DataSubjectQualificationType,
        self::COMPANY_CREDIT_CODE_AdvertiserQualificationGetV30DataSubjectQualificationType,
        self::COMPANY_REGISTER_CODE_AdvertiserQualificationGetV30DataSubjectQualificationType,
        self::CREDIT_CODE_AdvertiserQualificationGetV30DataSubjectQualificationType,
        self::HK_MACAO_TAIWAN_ID_AdvertiserQualificationGetV30DataSubjectQualificationType,
        self::HK_REGISTER_CODE_AdvertiserQualificationGetV30DataSubjectQualificationType,
        self::ID_AdvertiserQualificationGetV30DataSubjectQualificationType,
        self::INDIVIDUAL_CREDIT_CODE_AdvertiserQualificationGetV30DataSubjectQualificationType,
        self::INDIVIDUAL_REGISTER_CODE_AdvertiserQualificationGetV30DataSubjectQualificationType,
        self::LAWYER_CERTIFICATE_NUMBER_AdvertiserQualificationGetV30DataSubjectQualificationType,
        self::LAWYER_PERMIT_CODE_AdvertiserQualificationGetV30DataSubjectQualificationType,
        self::LEGAL_PERSON_CREDIT_CODE_AdvertiserQualificationGetV30DataSubjectQualificationType,
        self::ORGANIZATION_REGISTER_CODE_AdvertiserQualificationGetV30DataSubjectQualificationType,
        self::OTHER_AdvertiserQualificationGetV30DataSubjectQualificationType,
        self::OVERSEA_REGISTER_CODE_AdvertiserQualificationGetV30DataSubjectQualificationType,
        self::PASSPORT_ID_AdvertiserQualificationGetV30DataSubjectQualificationType,
        self::SCHOOL_PERMIT_CODE_AdvertiserQualificationGetV30DataSubjectQualificationType,
        self::SOCIAL_REGISTER_CODE_AdvertiserQualificationGetV30DataSubjectQualificationType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum AdvertiserQualificationGetV30DataSubjectQualificationType', $value));
        }
        return (string) $value;
    }
}
