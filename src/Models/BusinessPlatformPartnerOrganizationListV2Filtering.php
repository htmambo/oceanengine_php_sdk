<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class BusinessPlatformPartnerOrganizationListV2Filtering implements \JsonSerializable
{
    /**
     * 合作的巨量纵横组织id，最大不超过200
     * @var int[]
     */
    protected ?array $partnerOrganizationIds = null;

    /**
     * 合作状态，默认查询绑定成功的状态<br>枚举值：`BOUND`（已绑定）、`BINDING`（绑定中）、`INVALID`（失效）、`DELETED`（删除）
     * @var \Oceanengine\Models\BusinessPlatformPartnerOrganizationListV2FilteringStatus[]
     */
    protected ?array $status = null;

    /**
     * 合作的巨量纵横组织id，最大不超过200
     * @return int[]
     */
    public function getPartnerOrganizationIds(): ?array
    {
        return $this->partnerOrganizationIds;
    }

    /**
     * 合作的巨量纵横组织id，最大不超过200
     * @param int[] $partnerOrganizationIds
     * @return self
     */
    public function setPartnerOrganizationIds(?array $partnerOrganizationIds): self
    {
        $this->partnerOrganizationIds = $partnerOrganizationIds;
        return $this;
    }

    /**
     * 合作状态，默认查询绑定成功的状态<br>枚举值：`BOUND`（已绑定）、`BINDING`（绑定中）、`INVALID`（失效）、`DELETED`（删除）
     * @return \Oceanengine\Models\BusinessPlatformPartnerOrganizationListV2FilteringStatus[]
     */
    public function getStatus(): ?array
    {
        return $this->status;
    }

    /**
     * 合作状态，默认查询绑定成功的状态<br>枚举值：`BOUND`（已绑定）、`BINDING`（绑定中）、`INVALID`（失效）、`DELETED`（删除）
     * @param \Oceanengine\Models\BusinessPlatformPartnerOrganizationListV2FilteringStatus[] $status
     * @return self
     */
    public function setStatus(?array $status): self
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
        if ($this->partnerOrganizationIds !== null) {
            $result['partner_organization_ids'] = $this->partnerOrganizationIds;
        }
        if ($this->status !== null) {
            $result['status'] = $this->status;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['partner_organization_ids'] ?? null) !== null && is_array($v)) {
            $obj->partnerOrganizationIds = $v;
        }
        if (($v = $data['status'] ?? null) !== null && is_array($v)) {
            $obj->status = $v;
        }
        return $obj;
    }
}
