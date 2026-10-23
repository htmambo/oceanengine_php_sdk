<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class AdvertiserQualificationGetV30ResponseDataIndustriesInnerOthersInner implements \JsonSerializable
{
    /**
     * 资质图片附件id
     * @var string
     */
    protected ?string $attachmentId = null;

    /**
     * 资质图片地址
     * @var string
     */
    protected ?string $pictureUrl = null;

    /**
     * 资质id
     * @var int
     */
    protected ?int $qualificationId = null;

    /**
     * 拒绝理由
     * @var string
     */
    protected ?string $rejectReason = null;

    /**
     * @var \Oceanengine\Models\AdvertiserQualificationGetV30DataIndustriesOthersStatus
     */
    protected ?string $status = null;

    /**
     * 资质图片附件id
     * @return string
     */
    public function getAttachmentId(): ?string
    {
        return $this->attachmentId;
    }

    /**
     * 资质图片附件id
     * @param string $attachmentId
     * @return self
     */
    public function setAttachmentId(?string $attachmentId): self
    {
        $this->attachmentId = $attachmentId;
        return $this;
    }

    /**
     * 资质图片地址
     * @return string
     */
    public function getPictureUrl(): ?string
    {
        return $this->pictureUrl;
    }

    /**
     * 资质图片地址
     * @param string $pictureUrl
     * @return self
     */
    public function setPictureUrl(?string $pictureUrl): self
    {
        $this->pictureUrl = $pictureUrl;
        return $this;
    }

    /**
     * 资质id
     * @return int
     */
    public function getQualificationId(): ?int
    {
        return $this->qualificationId;
    }

    /**
     * 资质id
     * @param int $qualificationId
     * @return self
     */
    public function setQualificationId(?int $qualificationId): self
    {
        $this->qualificationId = $qualificationId;
        return $this;
    }

    /**
     * 拒绝理由
     * @return string
     */
    public function getRejectReason(): ?string
    {
        return $this->rejectReason;
    }

    /**
     * 拒绝理由
     * @param string $rejectReason
     * @return self
     */
    public function setRejectReason(?string $rejectReason): self
    {
        $this->rejectReason = $rejectReason;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\AdvertiserQualificationGetV30DataIndustriesOthersStatus
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * @param \Oceanengine\Models\AdvertiserQualificationGetV30DataIndustriesOthersStatus $status
     * @return self
     */
    public function setStatus(?string $status): self
    {
        $this->status = $status;
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
        if ($this->qualificationId !== null) {
            $result['qualification_id'] = $this->qualificationId;
        }
        if ($this->rejectReason !== null) {
            $result['reject_reason'] = $this->rejectReason;
        }
        if ($this->status !== null) {
            $result['status'] = $this->status;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['attachment_id'] ?? null) !== null) {
            $obj->attachmentId = (string) $v;
        }
        if (($v = $data['picture_url'] ?? null) !== null) {
            $obj->pictureUrl = (string) $v;
        }
        if (($v = $data['qualification_id'] ?? null) !== null) {
            $obj->qualificationId = (int) $v;
        }
        if (($v = $data['reject_reason'] ?? null) !== null) {
            $obj->rejectReason = (string) $v;
        }
        if (($v = $data['status'] ?? null) !== null) {
            $obj->status = (string) $v;
        }
        return $obj;
    }
}
