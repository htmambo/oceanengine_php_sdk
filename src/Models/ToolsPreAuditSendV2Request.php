<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsPreAuditSendV2Request implements \JsonSerializable
{
    /**
     * 广告主ID
     * @var int
     */
    protected ?int $advertiserId = null;

    /**
     * 前置预审物料列表
     * @var \Oceanengine\Models\ToolsPreAuditSendV2RequestPreAuditMaterialsInner[]
     */
    protected ?array $preAuditMaterials = null;

    /**
     * 广告主ID
     * @return int
     */
    public function getAdvertiserId(): ?int
    {
        return $this->advertiserId;
    }

    /**
     * 广告主ID
     * @param int $advertiserId
     * @return self
     */
    public function setAdvertiserId(?int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    /**
     * 前置预审物料列表
     * @return \Oceanengine\Models\ToolsPreAuditSendV2RequestPreAuditMaterialsInner[]
     */
    public function getPreAuditMaterials(): ?array
    {
        return $this->preAuditMaterials;
    }

    /**
     * 前置预审物料列表
     * @param \Oceanengine\Models\ToolsPreAuditSendV2RequestPreAuditMaterialsInner[] $preAuditMaterials
     * @return self
     */
    public function setPreAuditMaterials(?array $preAuditMaterials): self
    {
        $this->preAuditMaterials = $preAuditMaterials;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->advertiserId !== null) {
            $result['advertiser_id'] = $this->advertiserId;
        }
        if ($this->preAuditMaterials !== null) {
            $result['pre_audit_materials'] = $this->preAuditMaterials;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['advertiser_id'] ?? null) !== null) {
            $obj->advertiserId = (int) $v;
        }
        if (($v = $data['pre_audit_materials'] ?? null) !== null && is_array($v)) {
            $obj->preAuditMaterials = array_map(fn ($vv) => \Oceanengine\Models\ToolsPreAuditSendV2RequestPreAuditMaterialsInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
