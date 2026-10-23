<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarComponentQueryIndustryAnchorV2ResponseDataComponentsInner implements \JsonSerializable
{
    /**
     * 组件名称
     * @var string
     */
    protected ?string $anchorName = null;

    /**
     * 组件状态
     * @var int
     */
    protected ?int $anchorStatus = null;

    /**
     * 主标题
     * @var string
     */
    protected ?string $anchorTitle = null;

    /**
     * 行业锚点类型
     * @var int
     */
    protected ?int $anchorType = null;

    /**
     * 审核驳回原因（如果组件被审核驳回）
     * @var string
     */
    protected ?string $auditRejectReason = null;

    /**
     * 行业组件id
     * @var int
     */
    protected ?int $industryAnchorId = null;

    /**
     * 六分屏预览链接
     * @var string
     */
    protected ?string $previewUrl = null;

    /**
     * 组件名称
     * @return string
     */
    public function getAnchorName(): ?string
    {
        return $this->anchorName;
    }

    /**
     * 组件名称
     * @param string $anchorName
     * @return self
     */
    public function setAnchorName(?string $anchorName): self
    {
        $this->anchorName = $anchorName;
        return $this;
    }

    /**
     * 组件状态
     * @return int
     */
    public function getAnchorStatus(): ?int
    {
        return $this->anchorStatus;
    }

    /**
     * 组件状态
     * @param int $anchorStatus
     * @return self
     */
    public function setAnchorStatus(?int $anchorStatus): self
    {
        $this->anchorStatus = $anchorStatus;
        return $this;
    }

    /**
     * 主标题
     * @return string
     */
    public function getAnchorTitle(): ?string
    {
        return $this->anchorTitle;
    }

    /**
     * 主标题
     * @param string $anchorTitle
     * @return self
     */
    public function setAnchorTitle(?string $anchorTitle): self
    {
        $this->anchorTitle = $anchorTitle;
        return $this;
    }

    /**
     * 行业锚点类型
     * @return int
     */
    public function getAnchorType(): ?int
    {
        return $this->anchorType;
    }

    /**
     * 行业锚点类型
     * @param int $anchorType
     * @return self
     */
    public function setAnchorType(?int $anchorType): self
    {
        $this->anchorType = $anchorType;
        return $this;
    }

    /**
     * 审核驳回原因（如果组件被审核驳回）
     * @return string
     */
    public function getAuditRejectReason(): ?string
    {
        return $this->auditRejectReason;
    }

    /**
     * 审核驳回原因（如果组件被审核驳回）
     * @param string $auditRejectReason
     * @return self
     */
    public function setAuditRejectReason(?string $auditRejectReason): self
    {
        $this->auditRejectReason = $auditRejectReason;
        return $this;
    }

    /**
     * 行业组件id
     * @return int
     */
    public function getIndustryAnchorId(): ?int
    {
        return $this->industryAnchorId;
    }

    /**
     * 行业组件id
     * @param int $industryAnchorId
     * @return self
     */
    public function setIndustryAnchorId(?int $industryAnchorId): self
    {
        $this->industryAnchorId = $industryAnchorId;
        return $this;
    }

    /**
     * 六分屏预览链接
     * @return string
     */
    public function getPreviewUrl(): ?string
    {
        return $this->previewUrl;
    }

    /**
     * 六分屏预览链接
     * @param string $previewUrl
     * @return self
     */
    public function setPreviewUrl(?string $previewUrl): self
    {
        $this->previewUrl = $previewUrl;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->anchorName !== null) {
            $result['anchor_name'] = $this->anchorName;
        }
        if ($this->anchorStatus !== null) {
            $result['anchor_status'] = $this->anchorStatus;
        }
        if ($this->anchorTitle !== null) {
            $result['anchor_title'] = $this->anchorTitle;
        }
        if ($this->anchorType !== null) {
            $result['anchor_type'] = $this->anchorType;
        }
        if ($this->auditRejectReason !== null) {
            $result['audit_reject_reason'] = $this->auditRejectReason;
        }
        if ($this->industryAnchorId !== null) {
            $result['industry_anchor_id'] = $this->industryAnchorId;
        }
        if ($this->previewUrl !== null) {
            $result['preview_url'] = $this->previewUrl;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['anchor_name'] ?? null) !== null) {
            $obj->anchorName = (string) $v;
        }
        if (($v = $data['anchor_status'] ?? null) !== null) {
            $obj->anchorStatus = (int) $v;
        }
        if (($v = $data['anchor_title'] ?? null) !== null) {
            $obj->anchorTitle = (string) $v;
        }
        if (($v = $data['anchor_type'] ?? null) !== null) {
            $obj->anchorType = (int) $v;
        }
        if (($v = $data['audit_reject_reason'] ?? null) !== null) {
            $obj->auditRejectReason = (string) $v;
        }
        if (($v = $data['industry_anchor_id'] ?? null) !== null) {
            $obj->industryAnchorId = (int) $v;
        }
        if (($v = $data['preview_url'] ?? null) !== null) {
            $obj->previewUrl = (string) $v;
        }
        return $obj;
    }
}
