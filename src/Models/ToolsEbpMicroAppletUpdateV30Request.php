<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsEbpMicroAppletUpdateV30Request implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $accountId = null;

    /**
     * @var \Oceanengine\Models\ToolsEbpMicroAppletUpdateV30AccountType
     */
    protected ?string $accountType = null;

    /**
     * 主成分字段
     * @var array<string,string>
     */
    protected ?array $data = null;

    /**
     * @var int
     */
    protected ?int $instanceId = null;

    /**
     * @var string
     */
    protected ?string $remark = null;

    /**
     * @var \Oceanengine\Models\ToolsEbpMicroAppletUpdateV30RequestSchemaInfoInner[]
     */
    protected ?array $schemaInfo = null;

    /**
     * @return int
     */
    public function getAccountId(): ?int
    {
        return $this->accountId;
    }

    /**
     * @param int $accountId
     * @return self
     */
    public function setAccountId(?int $accountId): self
    {
        $this->accountId = $accountId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsEbpMicroAppletUpdateV30AccountType
     */
    public function getAccountType(): ?string
    {
        return $this->accountType;
    }

    /**
     * @param \Oceanengine\Models\ToolsEbpMicroAppletUpdateV30AccountType $accountType
     * @return self
     */
    public function setAccountType(?string $accountType): self
    {
        $this->accountType = $accountType;
        return $this;
    }

    /**
     * 主成分字段
     * @return array<string,string>
     */
    public function getData(): ?array
    {
        return $this->data;
    }

    /**
     * 主成分字段
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
     * @return \Oceanengine\Models\ToolsEbpMicroAppletUpdateV30RequestSchemaInfoInner[]
     */
    public function getSchemaInfo(): ?array
    {
        return $this->schemaInfo;
    }

    /**
     * @param \Oceanengine\Models\ToolsEbpMicroAppletUpdateV30RequestSchemaInfoInner[] $schemaInfo
     * @return self
     */
    public function setSchemaInfo(?array $schemaInfo): self
    {
        $this->schemaInfo = $schemaInfo;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->accountId !== null) {
            $result['account_id'] = $this->accountId;
        }
        if ($this->accountType !== null) {
            $result['account_type'] = $this->accountType;
        }
        if ($this->data !== null) {
            $result['data'] = $this->data;
        }
        if ($this->instanceId !== null) {
            $result['instance_id'] = $this->instanceId;
        }
        if ($this->remark !== null) {
            $result['remark'] = $this->remark;
        }
        if ($this->schemaInfo !== null) {
            $result['schema_info'] = $this->schemaInfo;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['account_id'] ?? null) !== null) {
            $obj->accountId = (int) $v;
        }
        if (($v = $data['account_type'] ?? null) !== null) {
            $obj->accountType = (string) $v;
        }
        if (($v = $data['data'] ?? null) !== null && is_array($v)) {
            $obj->data = $v;
        }
        if (($v = $data['instance_id'] ?? null) !== null) {
            $obj->instanceId = (int) $v;
        }
        if (($v = $data['remark'] ?? null) !== null) {
            $obj->remark = (string) $v;
        }
        if (($v = $data['schema_info'] ?? null) !== null && is_array($v)) {
            $obj->schemaInfo = array_map(fn ($vv) => \Oceanengine\Models\ToolsEbpMicroAppletUpdateV30RequestSchemaInfoInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
