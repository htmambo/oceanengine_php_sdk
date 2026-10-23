<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class NativeAnchorCreateV30AnchorInfoPrivateChatButton
{
    public const PRIVATE_MESSAGE_NativeAnchorCreateV30AnchorInfoPrivateChatButton = 'PRIVATE_MESSAGE';
    public const CONSULT_NOW_NativeAnchorCreateV30AnchorInfoPrivateChatButton = 'CONSULT_NOW';
    public const CONSULT_ADVISOR_NativeAnchorCreateV30AnchorInfoPrivateChatButton = 'CONSULT_ADVISOR';
    public const CONSULT_DESIGNER_NativeAnchorCreateV30AnchorInfoPrivateChatButton = 'CONSULT_DESIGNER';
    public const ASK_TEACHER_NativeAnchorCreateV30AnchorInfoPrivateChatButton = 'ASK_TEACHER';

    public const ALLOWED_VALUES = [
        self::PRIVATE_MESSAGE_NativeAnchorCreateV30AnchorInfoPrivateChatButton,
        self::CONSULT_NOW_NativeAnchorCreateV30AnchorInfoPrivateChatButton,
        self::CONSULT_ADVISOR_NativeAnchorCreateV30AnchorInfoPrivateChatButton,
        self::CONSULT_DESIGNER_NativeAnchorCreateV30AnchorInfoPrivateChatButton,
        self::ASK_TEACHER_NativeAnchorCreateV30AnchorInfoPrivateChatButton,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum NativeAnchorCreateV30AnchorInfoPrivateChatButton', $value));
        }
        return (string) $value;
    }
}
