<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class AdvertiserQualificationSelectV2V2ResponseDataListInnerImageListInner implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $attachmentId = null;

    /**
     * @var string
     */
    protected ?string $imageUrl = null;

    /**
     * @return int
     */
    public function getAttachmentId(): ?int
    {
        return $this->attachmentId;
    }

    /**
     * @param int $attachmentId
     * @return self
     */
    public function setAttachmentId(?int $attachmentId): self
    {
        $this->attachmentId = $attachmentId;
        return $this;
    }

    /**
     * @return string
     */
    public function getImageUrl(): ?string
    {
        return $this->imageUrl;
    }

    /**
     * @param string $imageUrl
     * @return self
     */
    public function setImageUrl(?string $imageUrl): self
    {
        $this->imageUrl = $imageUrl;
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
        if ($this->imageUrl !== null) {
            $result['image_url'] = $this->imageUrl;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['attachment_id'] ?? null) !== null) {
            $obj->attachmentId = (int) $v;
        }
        if (($v = $data['image_url'] ?? null) !== null) {
            $obj->imageUrl = (string) $v;
        }
        return $obj;
    }
}
