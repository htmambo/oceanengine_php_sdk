<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class BusinessPlatformPartnerOrganizationListV2ResponseDataListInner implements \JsonSerializable
{
    /**
     * 发起合作组织请求的组织id
     * @var int
     */
    protected ?int $partnerOrganizationId = null;

    /**
     * 备注，合作组织备注信息
     * @var string
     */
    protected ?string $remark = null;

    /**
     * @var \Oceanengine\Models\BusinessPlatformPartnerOrganizationListV2DataListStatus
     */
    protected ?string $status = null;

    /**
     * 发起合作组织请求的组织id
     * @return int
     */
    public function getPartnerOrganizationId(): ?int
    {
        return $this->partnerOrganizationId;
    }

    /**
     * 发起合作组织请求的组织id
     * @param int $partnerOrganizationId
     * @return self
     */
    public function setPartnerOrganizationId(?int $partnerOrganizationId): self
    {
        $this->partnerOrganizationId = $partnerOrganizationId;
        return $this;
    }

    /**
     * 备注，合作组织备注信息
     * @return string
     */
    public function getRemark(): ?string
    {
        return $this->remark;
    }

    /**
     * 备注，合作组织备注信息
     * @param string $remark
     * @return self
     */
    public function setRemark(?string $remark): self
    {
        $this->remark = $remark;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\BusinessPlatformPartnerOrganizationListV2DataListStatus
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * @param \Oceanengine\Models\BusinessPlatformPartnerOrganizationListV2DataListStatus $status
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
        if ($this->partnerOrganizationId !== null) {
            $result['partner_organization_id'] = $this->partnerOrganizationId;
        }
        if ($this->remark !== null) {
            $result['remark'] = $this->remark;
        }
        if ($this->status !== null) {
            $result['status'] = $this->status;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['partner_organization_id'] ?? null) !== null) {
            $obj->partnerOrganizationId = (int) $v;
        }
        if (($v = $data['remark'] ?? null) !== null) {
            $obj->remark = (string) $v;
        }
        if (($v = $data['status'] ?? null) !== null) {
            $obj->status = (string) $v;
        }
        return $obj;
    }
}
