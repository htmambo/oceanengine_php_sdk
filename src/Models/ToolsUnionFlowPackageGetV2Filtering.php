<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsUnionFlowPackageGetV2Filtering implements \JsonSerializable
{
    /**
     * @var int[]
     */
    protected ?array $flowPackageIds = null;

    /**
     * @var \Oceanengine\Models\ToolsUnionFlowPackageGetV2FilteringFlowPackageType
     */
    protected ?string $flowPackageType = null;

    /**
     * @return int[]
     */
    public function getFlowPackageIds(): ?array
    {
        return $this->flowPackageIds;
    }

    /**
     * @param int[] $flowPackageIds
     * @return self
     */
    public function setFlowPackageIds(?array $flowPackageIds): self
    {
        $this->flowPackageIds = $flowPackageIds;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsUnionFlowPackageGetV2FilteringFlowPackageType
     */
    public function getFlowPackageType(): ?string
    {
        return $this->flowPackageType;
    }

    /**
     * @param \Oceanengine\Models\ToolsUnionFlowPackageGetV2FilteringFlowPackageType $flowPackageType
     * @return self
     */
    public function setFlowPackageType(?string $flowPackageType): self
    {
        $this->flowPackageType = $flowPackageType;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->flowPackageIds !== null) {
            $result['flow_package_ids'] = $this->flowPackageIds;
        }
        if ($this->flowPackageType !== null) {
            $result['flow_package_type'] = $this->flowPackageType;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['flow_package_ids'] ?? null) !== null && is_array($v)) {
            $obj->flowPackageIds = $v;
        }
        if (($v = $data['flow_package_type'] ?? null) !== null) {
            $obj->flowPackageType = (string) $v;
        }
        return $obj;
    }
}
