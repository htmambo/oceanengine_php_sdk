<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class AdvertiserAttachmentUploadV30ResponseData implements \JsonSerializable
{
    /**
     * 附件id
     * @var int
     */
    protected ?int $attachmentId = null;

    /**
     * 附件id
     * @return int
     */
    public function getAttachmentId(): ?int
    {
        return $this->attachmentId;
    }

    /**
     * 附件id
     * @param int $attachmentId
     * @return self
     */
    public function setAttachmentId(?int $attachmentId): self
    {
        $this->attachmentId = $attachmentId;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->attachmentId !== null) {
            $result['attachment_id'] = $this->attachmentId;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['attachment_id'] ?? null) !== null) {
            $obj->attachmentId = (int) $v;
        }
        return $obj;
    }
}
