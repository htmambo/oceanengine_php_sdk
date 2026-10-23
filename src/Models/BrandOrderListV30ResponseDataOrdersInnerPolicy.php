<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class BrandOrderListV30ResponseDataOrdersInnerPolicy implements \JsonSerializable
{
    /**
     * 政策名称
     * @var string
     */
    protected ?string $policyName = null;

    /**
     * 政策编号
     * @var string
     */
    protected ?string $policyNo = null;

    /**
     * 政策类型
     * @var string
     */
    protected ?string $policyType = null;

    /**
     * 政策类型名称
     * @var string
     */
    protected ?string $policyTypeName = null;

    /**
     * 政策名称
     * @return string
     */
    public function getPolicyName(): ?string
    {
        return $this->policyName;
    }

    /**
     * 政策名称
     * @param string $policyName
     * @return self
     */
    public function setPolicyName(?string $policyName): self
    {
        $this->policyName = $policyName;
        return $this;
    }

    /**
     * 政策编号
     * @return string
     */
    public function getPolicyNo(): ?string
    {
        return $this->policyNo;
    }

    /**
     * 政策编号
     * @param string $policyNo
     * @return self
     */
    public function setPolicyNo(?string $policyNo): self
    {
        $this->policyNo = $policyNo;
        return $this;
    }

    /**
     * 政策类型
     * @return string
     */
    public function getPolicyType(): ?string
    {
        return $this->policyType;
    }

    /**
     * 政策类型
     * @param string $policyType
     * @return self
     */
    public function setPolicyType(?string $policyType): self
    {
        $this->policyType = $policyType;
        return $this;
    }

    /**
     * 政策类型名称
     * @return string
     */
    public function getPolicyTypeName(): ?string
    {
        return $this->policyTypeName;
    }

    /**
     * 政策类型名称
     * @param string $policyTypeName
     * @return self
     */
    public function setPolicyTypeName(?string $policyTypeName): self
    {
        $this->policyTypeName = $policyTypeName;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->policyName !== null) {
            $result['policy_name'] = $this->policyName;
        }
        if ($this->policyNo !== null) {
            $result['policy_no'] = $this->policyNo;
        }
        if ($this->policyType !== null) {
            $result['policy_type'] = $this->policyType;
        }
        if ($this->policyTypeName !== null) {
            $result['policy_type_name'] = $this->policyTypeName;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['policy_name'] ?? null) !== null) {
            $obj->policyName = (string) $v;
        }
        if (($v = $data['policy_no'] ?? null) !== null) {
            $obj->policyNo = (string) $v;
        }
        if (($v = $data['policy_type'] ?? null) !== null) {
            $obj->policyType = (string) $v;
        }
        if (($v = $data['policy_type_name'] ?? null) !== null) {
            $obj->policyTypeName = (string) $v;
        }
        return $obj;
    }
}
