<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class NativeAnchorUpdateV30AnchorInfoPrivateChatButton
{
    public const PRIVATE_MESSAGE_NativeAnchorUpdateV30AnchorInfoPrivateChatButton = 'PRIVATE_MESSAGE';
    public const CONSULT_NOW_NativeAnchorUpdateV30AnchorInfoPrivateChatButton = 'CONSULT_NOW';
    public const CONSULT_ADVISOR_NativeAnchorUpdateV30AnchorInfoPrivateChatButton = 'CONSULT_ADVISOR';
    public const CONSULT_DESIGNER_NativeAnchorUpdateV30AnchorInfoPrivateChatButton = 'CONSULT_DESIGNER';
    public const ASK_TEACHER_NativeAnchorUpdateV30AnchorInfoPrivateChatButton = 'ASK_TEACHER';

    public const ALLOWED_VALUES = [
        self::PRIVATE_MESSAGE_NativeAnchorUpdateV30AnchorInfoPrivateChatButton,
        self::CONSULT_NOW_NativeAnchorUpdateV30AnchorInfoPrivateChatButton,
        self::CONSULT_ADVISOR_NativeAnchorUpdateV30AnchorInfoPrivateChatButton,
        self::CONSULT_DESIGNER_NativeAnchorUpdateV30AnchorInfoPrivateChatButton,
        self::ASK_TEACHER_NativeAnchorUpdateV30AnchorInfoPrivateChatButton,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum NativeAnchorUpdateV30AnchorInfoPrivateChatButton', $value));
        }
        return (string) $value;
    }
}
