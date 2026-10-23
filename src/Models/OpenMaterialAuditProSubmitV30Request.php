<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class OpenMaterialAuditProSubmitV30Request implements \JsonSerializable
{
    /**
     * 广告主ID
     * @var int
     */
    protected ?int $advertiserId = null;

    /**
     * @var \Oceanengine\Models\OpenMaterialAuditProSubmitV30BusinessType
     */
    protected ?string $businessType = null;

    /**
     * @var \Oceanengine\Models\OpenMaterialAuditProSubmitV30RequestInput
     */
    protected ?\Oceanengine\Models\OpenMaterialAuditProSubmitV30RequestInput $input = null;

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
     * @return \Oceanengine\Models\OpenMaterialAuditProSubmitV30BusinessType
     */
    public function getBusinessType(): ?string
    {
        return $this->businessType;
    }

    /**
     * @param \Oceanengine\Models\OpenMaterialAuditProSubmitV30BusinessType $businessType
     * @return self
     */
    public function setBusinessType(?string $businessType): self
    {
        $this->businessType = $businessType;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\OpenMaterialAuditProSubmitV30RequestInput
     */
    public function getInput(): ?\Oceanengine\Models\OpenMaterialAuditProSubmitV30RequestInput
    {
        return $this->input;
    }

    /**
     * @param \Oceanengine\Models\OpenMaterialAuditProSubmitV30RequestInput $input
     * @return self
     */
    public function setInput(?\Oceanengine\Models\OpenMaterialAuditProSubmitV30RequestInput $input): self
    {
        $this->input = $input;
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
        if ($this->businessType !== null) {
            $result['business_type'] = $this->businessType;
        }
        if ($this->input !== null) {
            $result['input'] = $this->input;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['advertiser_id'] ?? null) !== null) {
            $obj->advertiserId = (int) $v;
        }
        if (($v = $data['business_type'] ?? null) !== null) {
            $obj->businessType = (string) $v;
        }
        if (($v = $data['input'] ?? null) !== null && is_array($v)) {
            $obj->input = \Oceanengine\Models\OpenMaterialAuditProSubmitV30RequestInput::fromArray($v);
        }
        return $obj;
    }
}
