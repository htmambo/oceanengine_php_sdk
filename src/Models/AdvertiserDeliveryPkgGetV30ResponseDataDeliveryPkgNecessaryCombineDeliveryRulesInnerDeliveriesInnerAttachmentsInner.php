<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class AdvertiserDeliveryPkgGetV30ResponseDataDeliveryPkgNecessaryCombineDeliveryRulesInnerDeliveriesInnerAttachmentsInner implements \JsonSerializable
{
    /**
     * 附件id
     * @var int
     */
    protected ?int $attachmentId = null;

    /**
     * 图片链接
     * @var string
     */
    protected ?string $pictureUrl = null;

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
     * 图片链接
     * @return string
     */
    public function getPictureUrl(): ?string
    {
        return $this->pictureUrl;
    }

    /**
     * 图片链接
     * @param string $pictureUrl
     * @return self
     */
    public function setPictureUrl(?string $pictureUrl): self
    {
        $this->pictureUrl = $pictureUrl;
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
        if ($this->pictureUrl !== null) {
            $result['picture_url'] = $this->pictureUrl;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['attachment_id'] ?? null) !== null) {
            $obj->attachmentId = (int) $v;
        }
        if (($v = $data['picture_url'] ?? null) !== null) {
            $obj->pictureUrl = (string) $v;
        }
        return $obj;
    }
}
