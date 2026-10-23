<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class EbpGroupBindAccountCreateV30RequestBindModel implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\EbpGroupBindAccountCreateV30BindModelApplyBindType
     */
    protected ?string $applyBindType = null;

    /**
     * 主体id, 通用主体方式绑定时必传
     * @var int
     */
    protected ?int $companyId = null;

    /**
     * 客户id, 通过客账关系绑定时必传
     * @var int
     */
    protected ?int $customerId = null;

    /**
     * @return \Oceanengine\Models\EbpGroupBindAccountCreateV30BindModelApplyBindType
     */
    public function getApplyBindType(): ?string
    {
        return $this->applyBindType;
    }

    /**
     * @param \Oceanengine\Models\EbpGroupBindAccountCreateV30BindModelApplyBindType $applyBindType
     * @return self
     */
    public function setApplyBindType(?string $applyBindType): self
    {
        $this->applyBindType = $applyBindType;
        return $this;
    }

    /**
     * 主体id, 通用主体方式绑定时必传
     * @return int
     */
    public function getCompanyId(): ?int
    {
        return $this->companyId;
    }

    /**
     * 主体id, 通用主体方式绑定时必传
     * @param int $companyId
     * @return self
     */
    public function setCompanyId(?int $companyId): self
    {
        $this->companyId = $companyId;
        return $this;
    }

    /**
     * 客户id, 通过客账关系绑定时必传
     * @return int
     */
    public function getCustomerId(): ?int
    {
        return $this->customerId;
    }

    /**
     * 客户id, 通过客账关系绑定时必传
     * @param int $customerId
     * @return self
     */
    public function setCustomerId(?int $customerId): self
    {
        $this->customerId = $customerId;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->applyBindType !== null) {
            $result['apply_bind_type'] = $this->applyBindType;
        }
        if ($this->companyId !== null) {
            $result['company_id'] = $this->companyId;
        }
        if ($this->customerId !== null) {
            $result['customer_id'] = $this->customerId;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['apply_bind_type'] ?? null) !== null) {
            $obj->applyBindType = (string) $v;
        }
        if (($v = $data['company_id'] ?? null) !== null) {
            $obj->companyId = (int) $v;
        }
        if (($v = $data['customer_id'] ?? null) !== null) {
            $obj->customerId = (int) $v;
        }
        return $obj;
    }
}
