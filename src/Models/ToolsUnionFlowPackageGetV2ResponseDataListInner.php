<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsUnionFlowPackageGetV2ResponseDataListInner implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $flowPackageId = null;

    /**
     * @var \Oceanengine\Models\ToolsUnionFlowPackageGetV2DataListFlowPackageType
     */
    protected ?string $flowPackageType = null;

    /**
     * @var string
     */
    protected ?string $name = null;

    /**
     * @var int[]
     */
    protected ?array $rit = null;

    /**
     * @var \Oceanengine\Models\ToolsUnionFlowPackageGetV2DataListStatus
     */
    protected ?string $status = null;

    /**
     * @return int
     */
    public function getFlowPackageId(): ?int
    {
        return $this->flowPackageId;
    }

    /**
     * @param int $flowPackageId
     * @return self
     */
    public function setFlowPackageId(?int $flowPackageId): self
    {
        $this->flowPackageId = $flowPackageId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsUnionFlowPackageGetV2DataListFlowPackageType
     */
    public function getFlowPackageType(): ?string
    {
        return $this->flowPackageType;
    }

    /**
     * @param \Oceanengine\Models\ToolsUnionFlowPackageGetV2DataListFlowPackageType $flowPackageType
     * @return self
     */
    public function setFlowPackageType(?string $flowPackageType): self
    {
        $this->flowPackageType = $flowPackageType;
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
     * @return int[]
     */
    public function getRit(): ?array
    {
        return $this->rit;
    }

    /**
     * @param int[] $rit
     * @return self
     */
    public function setRit(?array $rit): self
    {
        $this->rit = $rit;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsUnionFlowPackageGetV2DataListStatus
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * @param \Oceanengine\Models\ToolsUnionFlowPackageGetV2DataListStatus $status
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
        if ($this->flowPackageId !== null) {
            $result['flow_package_id'] = $this->flowPackageId;
        }
        if ($this->flowPackageType !== null) {
            $result['flow_package_type'] = $this->flowPackageType;
        }
        if ($this->name !== null) {
            $result['name'] = $this->name;
        }
        if ($this->rit !== null) {
            $result['rit'] = $this->rit;
        }
        if ($this->status !== null) {
            $result['status'] = $this->status;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['flow_package_id'] ?? null) !== null) {
            $obj->flowPackageId = (int) $v;
        }
        if (($v = $data['flow_package_type'] ?? null) !== null) {
            $obj->flowPackageType = (string) $v;
        }
        if (($v = $data['name'] ?? null) !== null) {
            $obj->name = (string) $v;
        }
        if (($v = $data['rit'] ?? null) !== null && is_array($v)) {
            $obj->rit = $v;
        }
        if (($v = $data['status'] ?? null) !== null) {
            $obj->status = (string) $v;
        }
        return $obj;
    }
}
