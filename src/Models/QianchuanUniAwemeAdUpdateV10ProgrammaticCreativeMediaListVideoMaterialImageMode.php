<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanUniAwemeAdUpdateV10ProgrammaticCreativeMediaListVideoMaterialImageMode
{
    public const AWEME_LIVE_ROOM_QianchuanUniAwemeAdUpdateV10ProgrammaticCreativeMediaListVideoMaterialImageMode = 'AWEME_LIVE_ROOM';
    public const CAROUSEL_QianchuanUniAwemeAdUpdateV10ProgrammaticCreativeMediaListVideoMaterialImageMode = 'CAROUSEL';
    public const LARGE_QianchuanUniAwemeAdUpdateV10ProgrammaticCreativeMediaListVideoMaterialImageMode = 'LARGE';
    public const LARGE_VERTICAL_QianchuanUniAwemeAdUpdateV10ProgrammaticCreativeMediaListVideoMaterialImageMode = 'LARGE_VERTICAL';
    public const SMALL_QianchuanUniAwemeAdUpdateV10ProgrammaticCreativeMediaListVideoMaterialImageMode = 'SMALL';
    public const SQUARE_QianchuanUniAwemeAdUpdateV10ProgrammaticCreativeMediaListVideoMaterialImageMode = 'SQUARE';
    public const UNION_SPLASH_QianchuanUniAwemeAdUpdateV10ProgrammaticCreativeMediaListVideoMaterialImageMode = 'UNION_SPLASH';
    public const VIDEO_LARGE_QianchuanUniAwemeAdUpdateV10ProgrammaticCreativeMediaListVideoMaterialImageMode = 'VIDEO_LARGE';
    public const VIDEO_VERTICAL_QianchuanUniAwemeAdUpdateV10ProgrammaticCreativeMediaListVideoMaterialImageMode = 'VIDEO_VERTICAL';

    public const ALLOWED_VALUES = [
        self::AWEME_LIVE_ROOM_QianchuanUniAwemeAdUpdateV10ProgrammaticCreativeMediaListVideoMaterialImageMode,
        self::CAROUSEL_QianchuanUniAwemeAdUpdateV10ProgrammaticCreativeMediaListVideoMaterialImageMode,
        self::LARGE_QianchuanUniAwemeAdUpdateV10ProgrammaticCreativeMediaListVideoMaterialImageMode,
        self::LARGE_VERTICAL_QianchuanUniAwemeAdUpdateV10ProgrammaticCreativeMediaListVideoMaterialImageMode,
        self::SMALL_QianchuanUniAwemeAdUpdateV10ProgrammaticCreativeMediaListVideoMaterialImageMode,
        self::SQUARE_QianchuanUniAwemeAdUpdateV10ProgrammaticCreativeMediaListVideoMaterialImageMode,
        self::UNION_SPLASH_QianchuanUniAwemeAdUpdateV10ProgrammaticCreativeMediaListVideoMaterialImageMode,
        self::VIDEO_LARGE_QianchuanUniAwemeAdUpdateV10ProgrammaticCreativeMediaListVideoMaterialImageMode,
        self::VIDEO_VERTICAL_QianchuanUniAwemeAdUpdateV10ProgrammaticCreativeMediaListVideoMaterialImageMode,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanUniAwemeAdUpdateV10ProgrammaticCreativeMediaListVideoMaterialImageMode', $value));
        }
        return (string) $value;
    }
}
