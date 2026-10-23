<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ReportCustomAsyncTaskCreateV30DataTopic
{
    public const BASIC_DATA_ReportCustomAsyncTaskCreateV30DataTopic = 'BASIC_DATA';
    public const BIDWORD_DATA_ReportCustomAsyncTaskCreateV30DataTopic = 'BIDWORD_DATA';
    public const DPA_VIDEO_DATA_ReportCustomAsyncTaskCreateV30DataTopic = 'DPA_VIDEO_DATA';
    public const MATERIAL_DATA_ReportCustomAsyncTaskCreateV30DataTopic = 'MATERIAL_DATA';
    public const PRODUCT_DATA_ReportCustomAsyncTaskCreateV30DataTopic = 'PRODUCT_DATA';
    public const QUERY_DATA_ReportCustomAsyncTaskCreateV30DataTopic = 'QUERY_DATA';
    public const STD_BASIC_DATA_ReportCustomAsyncTaskCreateV30DataTopic = 'STD_BASIC_DATA';
    public const STD_BIDWORD_DATA_ReportCustomAsyncTaskCreateV30DataTopic = 'STD_BIDWORD_DATA';
    public const STD_DMP_DATA_ReportCustomAsyncTaskCreateV30DataTopic = 'STD_DMP_DATA';
    public const STD_MATERIAL_DATA_ReportCustomAsyncTaskCreateV30DataTopic = 'STD_MATERIAL_DATA';
    public const STD_PRODUCT_DATA_ReportCustomAsyncTaskCreateV30DataTopic = 'STD_PRODUCT_DATA';
    public const STD_QUERY_DATA_ReportCustomAsyncTaskCreateV30DataTopic = 'STD_QUERY_DATA';

    public const ALLOWED_VALUES = [
        self::BASIC_DATA_ReportCustomAsyncTaskCreateV30DataTopic,
        self::BIDWORD_DATA_ReportCustomAsyncTaskCreateV30DataTopic,
        self::DPA_VIDEO_DATA_ReportCustomAsyncTaskCreateV30DataTopic,
        self::MATERIAL_DATA_ReportCustomAsyncTaskCreateV30DataTopic,
        self::PRODUCT_DATA_ReportCustomAsyncTaskCreateV30DataTopic,
        self::QUERY_DATA_ReportCustomAsyncTaskCreateV30DataTopic,
        self::STD_BASIC_DATA_ReportCustomAsyncTaskCreateV30DataTopic,
        self::STD_BIDWORD_DATA_ReportCustomAsyncTaskCreateV30DataTopic,
        self::STD_DMP_DATA_ReportCustomAsyncTaskCreateV30DataTopic,
        self::STD_MATERIAL_DATA_ReportCustomAsyncTaskCreateV30DataTopic,
        self::STD_PRODUCT_DATA_ReportCustomAsyncTaskCreateV30DataTopic,
        self::STD_QUERY_DATA_ReportCustomAsyncTaskCreateV30DataTopic,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ReportCustomAsyncTaskCreateV30DataTopic', $value));
        }
        return (string) $value;
    }
}
