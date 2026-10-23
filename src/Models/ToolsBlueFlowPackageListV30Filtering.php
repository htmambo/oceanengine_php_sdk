<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsBlueFlowPackageListV30Filtering implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $blueFlowPackageId = null;

    /**
     * @var string
     */
    protected ?string $blueFlowPackageName = null;

    /**
     * @return int
     */
    public function getBlueFlowPackageId(): ?int
    {
        return $this->blueFlowPackageId;
    }

    /**
     * @param int $blueFlowPackageId
     * @return self
     */
    public function setBlueFlowPackageId(?int $blueFlowPackageId): self
    {
        $this->blueFlowPackageId = $blueFlowPackageId;
        return $this;
    }

    /**
     * @return string
     */
    public function getBlueFlowPackageName(): ?string
    {
        return $this->blueFlowPackageName;
    }

    /**
     * @param string $blueFlowPackageName
     * @return self
     */
    public function setBlueFlowPackageName(?string $blueFlowPackageName): self
    {
        $this->blueFlowPackageName = $blueFlowPackageName;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->blueFlowPackageId !== null) {
            $result['blue_flow_package_id'] = $this->blueFlowPackageId;
        }
        if ($this->blueFlowPackageName !== null) {
            $result['blue_flow_package_name'] = $this->blueFlowPackageName;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['blue_flow_package_id'] ?? null) !== null) {
            $obj->blueFlowPackageId = (int) $v;
        }
        if (($v = $data['blue_flow_package_name'] ?? null) !== null) {
            $obj->blueFlowPackageName = (string) $v;
        }
        return $obj;
    }
}
