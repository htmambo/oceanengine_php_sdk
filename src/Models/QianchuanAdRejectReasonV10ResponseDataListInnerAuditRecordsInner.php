<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanAdRejectReasonV10ResponseDataListInnerAuditRecordsInner implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\QianchuanAdRejectReasonV10DataListAuditRecordsAuditPlatform
     */
    protected ?string $auditPlatform = null;

    /**
     * @var string
     */
    protected ?string $content = null;

    /**
     * @var string
     */
    protected ?string $desc = null;

    /**
     * @var string
     */
    protected ?string $imageId = null;

    /**
     * @var string[]
     */
    protected ?array $rejectReason = null;

    /**
     * @var string[]
     */
    protected ?array $suggestion = null;

    /**
     * @var string
     */
    protected ?string $videoId = null;

    /**
     * @return \Oceanengine\Models\QianchuanAdRejectReasonV10DataListAuditRecordsAuditPlatform
     */
    public function getAuditPlatform(): ?string
    {
        return $this->auditPlatform;
    }

    /**
     * @param \Oceanengine\Models\QianchuanAdRejectReasonV10DataListAuditRecordsAuditPlatform $auditPlatform
     * @return self
     */
    public function setAuditPlatform(?string $auditPlatform): self
    {
        $this->auditPlatform = $auditPlatform;
        return $this;
    }

    /**
     * @return string
     */
    public function getContent(): ?string
    {
        return $this->content;
    }

    /**
     * @param string $content
     * @return self
     */
    public function setContent(?string $content): self
    {
        $this->content = $content;
        return $this;
    }

    /**
     * @return string
     */
    public function getDesc(): ?string
    {
        return $this->desc;
    }

    /**
     * @param string $desc
     * @return self
     */
    public function setDesc(?string $desc): self
    {
        $this->desc = $desc;
        return $this;
    }

    /**
     * @return string
     */
    public function getImageId(): ?string
    {
        return $this->imageId;
    }

    /**
     * @param string $imageId
     * @return self
     */
    public function setImageId(?string $imageId): self
    {
        $this->imageId = $imageId;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getRejectReason(): ?array
    {
        return $this->rejectReason;
    }

    /**
     * @param string[] $rejectReason
     * @return self
     */
    public function setRejectReason(?array $rejectReason): self
    {
        $this->rejectReason = $rejectReason;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getSuggestion(): ?array
    {
        return $this->suggestion;
    }

    /**
     * @param string[] $suggestion
     * @return self
     */
    public function setSuggestion(?array $suggestion): self
    {
        $this->suggestion = $suggestion;
        return $this;
    }

    /**
     * @return string
     */
    public function getVideoId(): ?string
    {
        return $this->videoId;
    }

    /**
     * @param string $videoId
     * @return self
     */
    public function setVideoId(?string $videoId): self
    {
        $this->videoId = $videoId;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->auditPlatform !== null) {
            $result['audit_platform'] = $this->auditPlatform;
        }
        if ($this->content !== null) {
            $result['content'] = $this->content;
        }
        if ($this->desc !== null) {
            $result['desc'] = $this->desc;
        }
        if ($this->imageId !== null) {
            $result['image_id'] = $this->imageId;
        }
        if ($this->rejectReason !== null) {
            $result['reject_reason'] = $this->rejectReason;
        }
        if ($this->suggestion !== null) {
            $result['suggestion'] = $this->suggestion;
        }
        if ($this->videoId !== null) {
            $result['video_id'] = $this->videoId;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['audit_platform'] ?? null) !== null) {
            $obj->auditPlatform = (string) $v;
        }
        if (($v = $data['content'] ?? null) !== null) {
            $obj->content = (string) $v;
        }
        if (($v = $data['desc'] ?? null) !== null) {
            $obj->desc = (string) $v;
        }
        if (($v = $data['image_id'] ?? null) !== null) {
            $obj->imageId = (string) $v;
        }
        if (($v = $data['reject_reason'] ?? null) !== null && is_array($v)) {
            $obj->rejectReason = $v;
        }
        if (($v = $data['suggestion'] ?? null) !== null && is_array($v)) {
            $obj->suggestion = $v;
        }
        if (($v = $data['video_id'] ?? null) !== null) {
            $obj->videoId = (string) $v;
        }
        return $obj;
    }
}
