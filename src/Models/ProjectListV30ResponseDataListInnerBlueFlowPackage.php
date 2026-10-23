<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ProjectListV30ResponseDataListInnerBlueFlowPackage implements \JsonSerializable
{
    /**
     * @var string[]
     */
    protected ?array $blueFlowKeywordName = null;

    /**
     * @var int
     */
    protected ?int $blueFlowPackageId = null;

    /**
     * @var \Oceanengine\Models\ProjectListV30DataListBlueFlowPackageBlueFlowPackageSetting
     */
    protected ?string $blueFlowPackageSetting = null;

    /**
     * @return string[]
     */
    public function getBlueFlowKeywordName(): ?array
    {
        return $this->blueFlowKeywordName;
    }

    /**
     * @param string[] $blueFlowKeywordName
     * @return self
     */
    public function setBlueFlowKeywordName(?array $blueFlowKeywordName): self
    {
        $this->blueFlowKeywordName = $blueFlowKeywordName;
        return $this;
    }

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
     * @return \Oceanengine\Models\ProjectListV30DataListBlueFlowPackageBlueFlowPackageSetting
     */
    public function getBlueFlowPackageSetting(): ?string
    {
        return $this->blueFlowPackageSetting;
    }

    /**
     * @param \Oceanengine\Models\ProjectListV30DataListBlueFlowPackageBlueFlowPackageSetting $blueFlowPackageSetting
     * @return self
     */
    public function setBlueFlowPackageSetting(?string $blueFlowPackageSetting): self
    {
        $this->blueFlowPackageSetting = $blueFlowPackageSetting;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->blueFlowKeywordName !== null) {
            $result['blue_flow_keyword_name'] = $this->blueFlowKeywordName;
        }
        if ($this->blueFlowPackageId !== null) {
            $result['blue_flow_package_id'] = $this->blueFlowPackageId;
        }
        if ($this->blueFlowPackageSetting !== null) {
            $result['blue_flow_package_setting'] = $this->blueFlowPackageSetting;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['blue_flow_keyword_name'] ?? null) !== null && is_array($v)) {
            $obj->blueFlowKeywordName = $v;
        }
        if (($v = $data['blue_flow_package_id'] ?? null) !== null) {
            $obj->blueFlowPackageId = (int) $v;
        }
        if (($v = $data['blue_flow_package_setting'] ?? null) !== null) {
            $obj->blueFlowPackageSetting = (string) $v;
        }
        return $obj;
    }
}
