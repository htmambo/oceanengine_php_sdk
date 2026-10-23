<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StdProjectCreateV30ResponseDataNoticeInner implements \JsonSerializable
{
    /**
     * @var string
     */
    protected ?string $noticeMessage = null;

    /**
     * @return string
     */
    public function getNoticeMessage(): ?string
    {
        return $this->noticeMessage;
    }

    /**
     * @param string $noticeMessage
     * @return self
     */
    public function setNoticeMessage(?string $noticeMessage): self
    {
        $this->noticeMessage = $noticeMessage;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->noticeMessage !== null) {
            $result['notice_message'] = $this->noticeMessage;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['notice_message'] ?? null) !== null) {
            $obj->noticeMessage = (string) $v;
        }
        return $obj;
    }
}
