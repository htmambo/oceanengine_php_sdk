<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ReportCustomGetV30DataTopic
{
    public const BASIC_DATA_ReportCustomGetV30DataTopic = 'BASIC_DATA';
    public const BIDWORD_DATA_ReportCustomGetV30DataTopic = 'BIDWORD_DATA';
    public const DMP_DATA_ReportCustomGetV30DataTopic = 'DMP_DATA';
    public const DPA_VIDEO_DATA_ReportCustomGetV30DataTopic = 'DPA_VIDEO_DATA';
    public const MATERIAL_BOOST_DATA_ReportCustomGetV30DataTopic = 'MATERIAL_BOOST_DATA';
    public const MATERIAL_DATA_ReportCustomGetV30DataTopic = 'MATERIAL_DATA';
    public const ONE_KEY_BOOST_DATA_ReportCustomGetV30DataTopic = 'ONE_KEY_BOOST_DATA';
    public const PRODUCT_DATA_ReportCustomGetV30DataTopic = 'PRODUCT_DATA';
    public const QUERY_DATA_ReportCustomGetV30DataTopic = 'QUERY_DATA';
    public const STD_BASIC_DATA_ReportCustomGetV30DataTopic = 'STD_BASIC_DATA';
    public const STD_BIDWORD_DATA_ReportCustomGetV30DataTopic = 'STD_BIDWORD_DATA';
    public const STD_DMP_DATA_ReportCustomGetV30DataTopic = 'STD_DMP_DATA';
    public const STD_MATERIAL_DATA_ReportCustomGetV30DataTopic = 'STD_MATERIAL_DATA';
    public const STD_PRODUCT_DATA_ReportCustomGetV30DataTopic = 'STD_PRODUCT_DATA';
    public const STD_QUERY_DATA_ReportCustomGetV30DataTopic = 'STD_QUERY_DATA';
    public const UNI_PROJECT_DATA_ReportCustomGetV30DataTopic = 'UNI_PROJECT_DATA';
    public const UNI_PROJECT_MATERIAL_DATA_ReportCustomGetV30DataTopic = 'UNI_PROJECT_MATERIAL_DATA';
    public const VIDEO_DUARATION_DATA_ReportCustomGetV30DataTopic = 'VIDEO_DUARATION_DATA';

    public const ALLOWED_VALUES = [
        self::BASIC_DATA_ReportCustomGetV30DataTopic,
        self::BIDWORD_DATA_ReportCustomGetV30DataTopic,
        self::DMP_DATA_ReportCustomGetV30DataTopic,
        self::DPA_VIDEO_DATA_ReportCustomGetV30DataTopic,
        self::MATERIAL_BOOST_DATA_ReportCustomGetV30DataTopic,
        self::MATERIAL_DATA_ReportCustomGetV30DataTopic,
        self::ONE_KEY_BOOST_DATA_ReportCustomGetV30DataTopic,
        self::PRODUCT_DATA_ReportCustomGetV30DataTopic,
        self::QUERY_DATA_ReportCustomGetV30DataTopic,
        self::STD_BASIC_DATA_ReportCustomGetV30DataTopic,
        self::STD_BIDWORD_DATA_ReportCustomGetV30DataTopic,
        self::STD_DMP_DATA_ReportCustomGetV30DataTopic,
        self::STD_MATERIAL_DATA_ReportCustomGetV30DataTopic,
        self::STD_PRODUCT_DATA_ReportCustomGetV30DataTopic,
        self::STD_QUERY_DATA_ReportCustomGetV30DataTopic,
        self::UNI_PROJECT_DATA_ReportCustomGetV30DataTopic,
        self::UNI_PROJECT_MATERIAL_DATA_ReportCustomGetV30DataTopic,
        self::VIDEO_DUARATION_DATA_ReportCustomGetV30DataTopic,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ReportCustomGetV30DataTopic', $value));
        }
        return (string) $value;
    }
}
