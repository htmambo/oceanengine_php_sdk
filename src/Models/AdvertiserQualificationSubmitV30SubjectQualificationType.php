<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class AdvertiserQualificationSubmitV30SubjectQualificationType
{
    public const ASSOCIATION_REGISTER_CODE_AdvertiserQualificationSubmitV30SubjectQualificationType = 'ASSOCIATION_REGISTER_CODE';
    public const COMMERCIAL_REGISTER_NUMBER_AdvertiserQualificationSubmitV30SubjectQualificationType = 'COMMERCIAL_REGISTER_NUMBER';
    public const COMPANY_CREDIT_CODE_AdvertiserQualificationSubmitV30SubjectQualificationType = 'COMPANY_CREDIT_CODE';
    public const COMPANY_REGISTER_CODE_AdvertiserQualificationSubmitV30SubjectQualificationType = 'COMPANY_REGISTER_CODE';
    public const CREDIT_CODE_AdvertiserQualificationSubmitV30SubjectQualificationType = 'CREDIT_CODE';
    public const HK_MACAO_TAIWAN_ID_AdvertiserQualificationSubmitV30SubjectQualificationType = 'HK_MACAO_TAIWAN_ID';
    public const HK_REGISTER_CODE_AdvertiserQualificationSubmitV30SubjectQualificationType = 'HK_REGISTER_CODE';
    public const ID_AdvertiserQualificationSubmitV30SubjectQualificationType = 'ID';
    public const INDIVIDUAL_CREDIT_CODE_AdvertiserQualificationSubmitV30SubjectQualificationType = 'INDIVIDUAL_CREDIT_CODE';
    public const INDIVIDUAL_REGISTER_CODE_AdvertiserQualificationSubmitV30SubjectQualificationType = 'INDIVIDUAL_REGISTER_CODE';
    public const LAWYER_CERTIFICATE_NUMBER_AdvertiserQualificationSubmitV30SubjectQualificationType = 'LAWYER_CERTIFICATE_NUMBER';
    public const LAWYER_PERMIT_CODE_AdvertiserQualificationSubmitV30SubjectQualificationType = 'LAWYER_PERMIT_CODE';
    public const LEGAL_PERSON_CREDIT_CODE_AdvertiserQualificationSubmitV30SubjectQualificationType = 'LEGAL_PERSON_CREDIT_CODE';
    public const ORGANIZATION_REGISTER_CODE_AdvertiserQualificationSubmitV30SubjectQualificationType = 'ORGANIZATION_REGISTER_CODE';
    public const OTHER_AdvertiserQualificationSubmitV30SubjectQualificationType = 'OTHER';
    public const OVERSEA_REGISTER_CODE_AdvertiserQualificationSubmitV30SubjectQualificationType = 'OVERSEA_REGISTER_CODE';
    public const PASSPORT_ID_AdvertiserQualificationSubmitV30SubjectQualificationType = 'PASSPORT_ID';
    public const SCHOOL_PERMIT_CODE_AdvertiserQualificationSubmitV30SubjectQualificationType = 'SCHOOL_PERMIT_CODE';
    public const SOCIAL_REGISTER_CODE_AdvertiserQualificationSubmitV30SubjectQualificationType = 'SOCIAL_REGISTER_CODE';

    public const ALLOWED_VALUES = [
        self::ASSOCIATION_REGISTER_CODE_AdvertiserQualificationSubmitV30SubjectQualificationType,
        self::COMMERCIAL_REGISTER_NUMBER_AdvertiserQualificationSubmitV30SubjectQualificationType,
        self::COMPANY_CREDIT_CODE_AdvertiserQualificationSubmitV30SubjectQualificationType,
        self::COMPANY_REGISTER_CODE_AdvertiserQualificationSubmitV30SubjectQualificationType,
        self::CREDIT_CODE_AdvertiserQualificationSubmitV30SubjectQualificationType,
        self::HK_MACAO_TAIWAN_ID_AdvertiserQualificationSubmitV30SubjectQualificationType,
        self::HK_REGISTER_CODE_AdvertiserQualificationSubmitV30SubjectQualificationType,
        self::ID_AdvertiserQualificationSubmitV30SubjectQualificationType,
        self::INDIVIDUAL_CREDIT_CODE_AdvertiserQualificationSubmitV30SubjectQualificationType,
        self::INDIVIDUAL_REGISTER_CODE_AdvertiserQualificationSubmitV30SubjectQualificationType,
        self::LAWYER_CERTIFICATE_NUMBER_AdvertiserQualificationSubmitV30SubjectQualificationType,
        self::LAWYER_PERMIT_CODE_AdvertiserQualificationSubmitV30SubjectQualificationType,
        self::LEGAL_PERSON_CREDIT_CODE_AdvertiserQualificationSubmitV30SubjectQualificationType,
        self::ORGANIZATION_REGISTER_CODE_AdvertiserQualificationSubmitV30SubjectQualificationType,
        self::OTHER_AdvertiserQualificationSubmitV30SubjectQualificationType,
        self::OVERSEA_REGISTER_CODE_AdvertiserQualificationSubmitV30SubjectQualificationType,
        self::PASSPORT_ID_AdvertiserQualificationSubmitV30SubjectQualificationType,
        self::SCHOOL_PERMIT_CODE_AdvertiserQualificationSubmitV30SubjectQualificationType,
        self::SOCIAL_REGISTER_CODE_AdvertiserQualificationSubmitV30SubjectQualificationType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum AdvertiserQualificationSubmitV30SubjectQualificationType', $value));
        }
        return (string) $value;
    }
}
