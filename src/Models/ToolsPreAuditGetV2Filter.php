<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsPreAuditGetV2Filter implements \JsonSerializable
{
    /**
     * 前置预审物料 - 文本物料：用户上传文本 - 图片物料：用户上传图片链接或图片ID - 视频物料：用户上传的视频云ID - 落地页物料： 用户上传落地页URL
     * @var string[]
     */
    protected ?array $contents = null;

    /**
     * @var \Oceanengine\Models\ToolsPreAuditGetV2FilterMaterialType
     */
    protected ?string $materialType = null;

    /**
     * 前置预审ID列表
     * @var int[]
     */
    protected ?array $preAuditIds = null;

    /**
     * 前置预审物料 - 文本物料：用户上传文本 - 图片物料：用户上传图片链接或图片ID - 视频物料：用户上传的视频云ID - 落地页物料： 用户上传落地页URL
     * @return string[]
     */
    public function getContents(): ?array
    {
        return $this->contents;
    }

    /**
     * 前置预审物料 - 文本物料：用户上传文本 - 图片物料：用户上传图片链接或图片ID - 视频物料：用户上传的视频云ID - 落地页物料： 用户上传落地页URL
     * @param string[] $contents
     * @return self
     */
    public function setContents(?array $contents): self
    {
        $this->contents = $contents;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsPreAuditGetV2FilterMaterialType
     */
    public function getMaterialType(): ?string
    {
        return $this->materialType;
    }

    /**
     * @param \Oceanengine\Models\ToolsPreAuditGetV2FilterMaterialType $materialType
     * @return self
     */
    public function setMaterialType(?string $materialType): self
    {
        $this->materialType = $materialType;
        return $this;
    }

    /**
     * 前置预审ID列表
     * @return int[]
     */
    public function getPreAuditIds(): ?array
    {
        return $this->preAuditIds;
    }

    /**
     * 前置预审ID列表
     * @param int[] $preAuditIds
     * @return self
     */
    public function setPreAuditIds(?array $preAuditIds): self
    {
        $this->preAuditIds = $preAuditIds;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->contents !== null) {
            $result['contents'] = $this->contents;
        }
        if ($this->materialType !== null) {
            $result['material_type'] = $this->materialType;
        }
        if ($this->preAuditIds !== null) {
            $result['pre_audit_ids'] = $this->preAuditIds;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['contents'] ?? null) !== null && is_array($v)) {
            $obj->contents = $v;
        }
        if (($v = $data['material_type'] ?? null) !== null) {
            $obj->materialType = (string) $v;
        }
        if (($v = $data['pre_audit_ids'] ?? null) !== null && is_array($v)) {
            $obj->preAuditIds = $v;
        }
        return $obj;
    }
}
