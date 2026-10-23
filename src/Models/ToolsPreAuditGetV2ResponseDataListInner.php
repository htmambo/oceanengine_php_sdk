<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsPreAuditGetV2ResponseDataListInner implements \JsonSerializable
{
    /**
     * 物料内容
     * @var string
     */
    protected ?string $content = null;

    /**
     * @var \Oceanengine\Models\ToolsPreAuditGetV2DataListMaterialType
     */
    protected ?string $materialType = null;

    /**
     * 预审物料 - 文本物料：用户上传 - 图片物料：用户上传图片链接或图片ID - 视频物料：用户上传的视频云ID
     * @var int
     */
    protected ?int $preAuditId = null;

    /**
     * 拒绝理由
     * @var string
     */
    protected ?string $rejectReason = null;

    /**
     * @var \Oceanengine\Models\ToolsPreAuditGetV2DataListStatus
     */
    protected ?string $status = null;

    /**
     * 物料内容
     * @return string
     */
    public function getContent(): ?string
    {
        return $this->content;
    }

    /**
     * 物料内容
     * @param string $content
     * @return self
     */
    public function setContent(?string $content): self
    {
        $this->content = $content;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsPreAuditGetV2DataListMaterialType
     */
    public function getMaterialType(): ?string
    {
        return $this->materialType;
    }

    /**
     * @param \Oceanengine\Models\ToolsPreAuditGetV2DataListMaterialType $materialType
     * @return self
     */
    public function setMaterialType(?string $materialType): self
    {
        $this->materialType = $materialType;
        return $this;
    }

    /**
     * 预审物料 - 文本物料：用户上传 - 图片物料：用户上传图片链接或图片ID - 视频物料：用户上传的视频云ID
     * @return int
     */
    public function getPreAuditId(): ?int
    {
        return $this->preAuditId;
    }

    /**
     * 预审物料 - 文本物料：用户上传 - 图片物料：用户上传图片链接或图片ID - 视频物料：用户上传的视频云ID
     * @param int $preAuditId
     * @return self
     */
    public function setPreAuditId(?int $preAuditId): self
    {
        $this->preAuditId = $preAuditId;
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
     * @return \Oceanengine\Models\ToolsPreAuditGetV2DataListStatus
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * @param \Oceanengine\Models\ToolsPreAuditGetV2DataListStatus $status
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
        if ($this->content !== null) {
            $result['content'] = $this->content;
        }
        if ($this->materialType !== null) {
            $result['material_type'] = $this->materialType;
        }
        if ($this->preAuditId !== null) {
            $result['pre_audit_id'] = $this->preAuditId;
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
        if (($v = $data['content'] ?? null) !== null) {
            $obj->content = (string) $v;
        }
        if (($v = $data['material_type'] ?? null) !== null) {
            $obj->materialType = (string) $v;
        }
        if (($v = $data['pre_audit_id'] ?? null) !== null) {
            $obj->preAuditId = (int) $v;
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
