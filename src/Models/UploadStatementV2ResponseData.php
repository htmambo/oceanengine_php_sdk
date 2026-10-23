<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class UploadStatementV2ResponseData implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $attachId = null;

    /**
     * @return int
     */
    public function getAttachId(): ?int
    {
        return $this->attachId;
    }

    /**
     * @param int $attachId
     * @return self
     */
    public function setAttachId(?int $attachId): self
    {
        $this->attachId = $attachId;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->attachId !== null) {
            $result['attach_id'] = $this->attachId;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['attach_id'] ?? null) !== null) {
            $obj->attachId = (int) $v;
        }
        return $obj;
    }
}
