<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsEbpMicroGameListV30ResponseDataAppletsInner implements \JsonSerializable
{
    /**
     * @var string
     */
    protected ?string $appId = null;

    /**
     * @var \Oceanengine\Models\ToolsEbpMicroGameListV30DataAppletsAssetGeneration
     */
    protected ?string $assetGeneration = null;

    /**
     * @var \Oceanengine\Models\ToolsEbpMicroGameListV30DataAppletsAuditStatus
     */
    protected ?string $auditStatus = null;

    /**
     * 应管主成分字段
     * @var array<string,string>
     */
    protected ?array $data = null;

    /**
     * @var int
     */
    protected ?int $instanceId = null;

    /**
     * @var bool
     */
    protected ?bool $isEbpAsset = null;

    /**
     * @var string
     */
    protected ?string $name = null;

    /**
     * @var string
     */
    protected ?string $reason = null;

    /**
     * @var string
     */
    protected ?string $remark = null;

    /**
     * @return string
     */
    public function getAppId(): ?string
    {
        return $this->appId;
    }

    /**
     * @param string $appId
     * @return self
     */
    public function setAppId(?string $appId): self
    {
        $this->appId = $appId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsEbpMicroGameListV30DataAppletsAssetGeneration
     */
    public function getAssetGeneration(): ?string
    {
        return $this->assetGeneration;
    }

    /**
     * @param \Oceanengine\Models\ToolsEbpMicroGameListV30DataAppletsAssetGeneration $assetGeneration
     * @return self
     */
    public function setAssetGeneration(?string $assetGeneration): self
    {
        $this->assetGeneration = $assetGeneration;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsEbpMicroGameListV30DataAppletsAuditStatus
     */
    public function getAuditStatus(): ?string
    {
        return $this->auditStatus;
    }

    /**
     * @param \Oceanengine\Models\ToolsEbpMicroGameListV30DataAppletsAuditStatus $auditStatus
     * @return self
     */
    public function setAuditStatus(?string $auditStatus): self
    {
        $this->auditStatus = $auditStatus;
        return $this;
    }

    /**
     * 应管主成分字段
     * @return array<string,string>
     */
    public function getData(): ?array
    {
        return $this->data;
    }

    /**
     * 应管主成分字段
     * @param array<string,string> $data
     * @return self
     */
    public function setData(?array $data): self
    {
        $this->data = $data;
        return $this;
    }

    /**
     * @return int
     */
    public function getInstanceId(): ?int
    {
        return $this->instanceId;
    }

    /**
     * @param int $instanceId
     * @return self
     */
    public function setInstanceId(?int $instanceId): self
    {
        $this->instanceId = $instanceId;
        return $this;
    }

    /**
     * @return bool
     */
    public function getIsEbpAsset(): ?bool
    {
        return $this->isEbpAsset;
    }

    /**
     * @param bool $isEbpAsset
     * @return self
     */
    public function setIsEbpAsset(?bool $isEbpAsset): self
    {
        $this->isEbpAsset = $isEbpAsset;
        return $this;
    }

    /**
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return self
     */
    public function setName(?string $name): self
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getReason(): ?string
    {
        return $this->reason;
    }

    /**
     * @param string $reason
     * @return self
     */
    public function setReason(?string $reason): self
    {
        $this->reason = $reason;
        return $this;
    }

    /**
     * @return string
     */
    public function getRemark(): ?string
    {
        return $this->remark;
    }

    /**
     * @param string $remark
     * @return self
     */
    public function setRemark(?string $remark): self
    {
        $this->remark = $remark;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->appId !== null) {
            $result['app_id'] = $this->appId;
        }
        if ($this->assetGeneration !== null) {
            $result['asset_generation'] = $this->assetGeneration;
        }
        if ($this->auditStatus !== null) {
            $result['audit_status'] = $this->auditStatus;
        }
        if ($this->data !== null) {
            $result['data'] = $this->data;
        }
        if ($this->instanceId !== null) {
            $result['instance_id'] = $this->instanceId;
        }
        if ($this->isEbpAsset !== null) {
            $result['is_ebp_asset'] = $this->isEbpAsset;
        }
        if ($this->name !== null) {
            $result['name'] = $this->name;
        }
        if ($this->reason !== null) {
            $result['reason'] = $this->reason;
        }
        if ($this->remark !== null) {
            $result['remark'] = $this->remark;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['app_id'] ?? null) !== null) {
            $obj->appId = (string) $v;
        }
        if (($v = $data['asset_generation'] ?? null) !== null) {
            $obj->assetGeneration = (string) $v;
        }
        if (($v = $data['audit_status'] ?? null) !== null) {
            $obj->auditStatus = (string) $v;
        }
        if (($v = $data['data'] ?? null) !== null && is_array($v)) {
            $obj->data = $v;
        }
        if (($v = $data['instance_id'] ?? null) !== null) {
            $obj->instanceId = (int) $v;
        }
        if (($v = $data['is_ebp_asset'] ?? null) !== null) {
            $obj->isEbpAsset = (bool) $v;
        }
        if (($v = $data['name'] ?? null) !== null) {
            $obj->name = (string) $v;
        }
        if (($v = $data['reason'] ?? null) !== null) {
            $obj->reason = (string) $v;
        }
        if (($v = $data['remark'] ?? null) !== null) {
            $obj->remark = (string) $v;
        }
        return $obj;
    }
}
