<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class PromotionListV30ResponseDataListInnerBlueFlowPackage implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $blueFlowPackageId = null;

    /**
     * @var \Oceanengine\Models\PromotionListV30DataListBlueFlowPackageBlueFlowPackageSetting
     */
    protected ?string $blueFlowPackageSetting = null;

    /**
     * @var string
     */
    protected ?string $blueFlowSuggestion = null;

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
     * @return \Oceanengine\Models\PromotionListV30DataListBlueFlowPackageBlueFlowPackageSetting
     */
    public function getBlueFlowPackageSetting(): ?string
    {
        return $this->blueFlowPackageSetting;
    }

    /**
     * @param \Oceanengine\Models\PromotionListV30DataListBlueFlowPackageBlueFlowPackageSetting $blueFlowPackageSetting
     * @return self
     */
    public function setBlueFlowPackageSetting(?string $blueFlowPackageSetting): self
    {
        $this->blueFlowPackageSetting = $blueFlowPackageSetting;
        return $this;
    }

    /**
     * @return string
     */
    public function getBlueFlowSuggestion(): ?string
    {
        return $this->blueFlowSuggestion;
    }

    /**
     * @param string $blueFlowSuggestion
     * @return self
     */
    public function setBlueFlowSuggestion(?string $blueFlowSuggestion): self
    {
        $this->blueFlowSuggestion = $blueFlowSuggestion;
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
        if ($this->blueFlowPackageSetting !== null) {
            $result['blue_flow_package_setting'] = $this->blueFlowPackageSetting;
        }
        if ($this->blueFlowSuggestion !== null) {
            $result['blue_flow_suggestion'] = $this->blueFlowSuggestion;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['blue_flow_package_id'] ?? null) !== null) {
            $obj->blueFlowPackageId = (int) $v;
        }
        if (($v = $data['blue_flow_package_setting'] ?? null) !== null) {
            $obj->blueFlowPackageSetting = (string) $v;
        }
        if (($v = $data['blue_flow_suggestion'] ?? null) !== null) {
            $obj->blueFlowSuggestion = (string) $v;
        }
        return $obj;
    }
}
