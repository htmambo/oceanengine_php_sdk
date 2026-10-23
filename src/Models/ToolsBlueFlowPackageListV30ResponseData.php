<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsBlueFlowPackageListV30ResponseData implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\ToolsBlueFlowPackageListV30ResponseDataBlueFlowPackagesInner[]
     */
    protected ?array $blueFlowPackages = null;

    /**
     * @return \Oceanengine\Models\ToolsBlueFlowPackageListV30ResponseDataBlueFlowPackagesInner[]
     */
    public function getBlueFlowPackages(): ?array
    {
        return $this->blueFlowPackages;
    }

    /**
     * @param \Oceanengine\Models\ToolsBlueFlowPackageListV30ResponseDataBlueFlowPackagesInner[] $blueFlowPackages
     * @return self
     */
    public function setBlueFlowPackages(?array $blueFlowPackages): self
    {
        $this->blueFlowPackages = $blueFlowPackages;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->blueFlowPackages !== null) {
            $result['blue_flow_packages'] = $this->blueFlowPackages;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['blue_flow_packages'] ?? null) !== null && is_array($v)) {
            $obj->blueFlowPackages = array_map(fn ($vv) => \Oceanengine\Models\ToolsBlueFlowPackageListV30ResponseDataBlueFlowPackagesInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
