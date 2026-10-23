<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class LocalPromotionRejectReasonGetV30ResponseDataListInnerMaterialRejectInner implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\LocalPromotionRejectReasonGetV30DataListMaterialRejectAuditPlatform
     */
    protected ?string $auditPlatform = null;

    /**
     * 审核拒绝的具体内容
     * @var string
     */
    protected ?string $content = null;

    /**
     * @var \Oceanengine\Models\LocalPromotionRejectReasonGetV30ResponseDataListInnerMaterialRejectInnerImageMaterialInner[]
     */
    protected ?array $imageMaterial = null;

    /**
     * 拒绝理由
     * @var string[]
     */
    protected ?array $rejectReason = null;

    /**
     * 审核建议
     * @var string[]
     */
    protected ?array $suggestion = null;

    /**
     * @var \Oceanengine\Models\LocalPromotionRejectReasonGetV30DataListMaterialRejectType
     */
    protected ?string $type = null;

    /**
     * @var \Oceanengine\Models\LocalPromotionRejectReasonGetV30ResponseDataListInnerMaterialRejectInnerVideoMaterial
     */
    protected ?\Oceanengine\Models\LocalPromotionRejectReasonGetV30ResponseDataListInnerMaterialRejectInnerVideoMaterial $videoMaterial = null;

    /**
     * @return \Oceanengine\Models\LocalPromotionRejectReasonGetV30DataListMaterialRejectAuditPlatform
     */
    public function getAuditPlatform(): ?string
    {
        return $this->auditPlatform;
    }

    /**
     * @param \Oceanengine\Models\LocalPromotionRejectReasonGetV30DataListMaterialRejectAuditPlatform $auditPlatform
     * @return self
     */
    public function setAuditPlatform(?string $auditPlatform): self
    {
        $this->auditPlatform = $auditPlatform;
        return $this;
    }

    /**
     * 审核拒绝的具体内容
     * @return string
     */
    public function getContent(): ?string
    {
        return $this->content;
    }

    /**
     * 审核拒绝的具体内容
     * @param string $content
     * @return self
     */
    public function setContent(?string $content): self
    {
        $this->content = $content;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\LocalPromotionRejectReasonGetV30ResponseDataListInnerMaterialRejectInnerImageMaterialInner[]
     */
    public function getImageMaterial(): ?array
    {
        return $this->imageMaterial;
    }

    /**
     * @param \Oceanengine\Models\LocalPromotionRejectReasonGetV30ResponseDataListInnerMaterialRejectInnerImageMaterialInner[] $imageMaterial
     * @return self
     */
    public function setImageMaterial(?array $imageMaterial): self
    {
        $this->imageMaterial = $imageMaterial;
        return $this;
    }

    /**
     * 拒绝理由
     * @return string[]
     */
    public function getRejectReason(): ?array
    {
        return $this->rejectReason;
    }

    /**
     * 拒绝理由
     * @param string[] $rejectReason
     * @return self
     */
    public function setRejectReason(?array $rejectReason): self
    {
        $this->rejectReason = $rejectReason;
        return $this;
    }

    /**
     * 审核建议
     * @return string[]
     */
    public function getSuggestion(): ?array
    {
        return $this->suggestion;
    }

    /**
     * 审核建议
     * @param string[] $suggestion
     * @return self
     */
    public function setSuggestion(?array $suggestion): self
    {
        $this->suggestion = $suggestion;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\LocalPromotionRejectReasonGetV30DataListMaterialRejectType
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * @param \Oceanengine\Models\LocalPromotionRejectReasonGetV30DataListMaterialRejectType $type
     * @return self
     */
    public function setType(?string $type): self
    {
        $this->type = $type;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\LocalPromotionRejectReasonGetV30ResponseDataListInnerMaterialRejectInnerVideoMaterial
     */
    public function getVideoMaterial(): ?\Oceanengine\Models\LocalPromotionRejectReasonGetV30ResponseDataListInnerMaterialRejectInnerVideoMaterial
    {
        return $this->videoMaterial;
    }

    /**
     * @param \Oceanengine\Models\LocalPromotionRejectReasonGetV30ResponseDataListInnerMaterialRejectInnerVideoMaterial $videoMaterial
     * @return self
     */
    public function setVideoMaterial(?\Oceanengine\Models\LocalPromotionRejectReasonGetV30ResponseDataListInnerMaterialRejectInnerVideoMaterial $videoMaterial): self
    {
        $this->videoMaterial = $videoMaterial;
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
        if ($this->imageMaterial !== null) {
            $result['image_material'] = $this->imageMaterial;
        }
        if ($this->rejectReason !== null) {
            $result['reject_reason'] = $this->rejectReason;
        }
        if ($this->suggestion !== null) {
            $result['suggestion'] = $this->suggestion;
        }
        if ($this->type !== null) {
            $result['type'] = $this->type;
        }
        if ($this->videoMaterial !== null) {
            $result['video_material'] = $this->videoMaterial;
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
        if (($v = $data['image_material'] ?? null) !== null && is_array($v)) {
            $obj->imageMaterial = array_map(fn ($vv) => \Oceanengine\Models\LocalPromotionRejectReasonGetV30ResponseDataListInnerMaterialRejectInnerImageMaterialInner::fromArray($vv), $v);
        }
        if (($v = $data['reject_reason'] ?? null) !== null && is_array($v)) {
            $obj->rejectReason = $v;
        }
        if (($v = $data['suggestion'] ?? null) !== null && is_array($v)) {
            $obj->suggestion = $v;
        }
        if (($v = $data['type'] ?? null) !== null) {
            $obj->type = (string) $v;
        }
        if (($v = $data['video_material'] ?? null) !== null && is_array($v)) {
            $obj->videoMaterial = \Oceanengine\Models\LocalPromotionRejectReasonGetV30ResponseDataListInnerMaterialRejectInnerVideoMaterial::fromArray($v);
        }
        return $obj;
    }
}
