<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class BrandAdGetV30ResponseDataAdsInnerPromotionsInner implements \JsonSerializable
{
    /**
     * 政策ID
     * @var int
     */
    protected ?int $policyId = null;

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
     * 政策ID
     * @return int
     */
    public function getPolicyId(): ?int
    {
        return $this->policyId;
    }

    /**
     * 政策ID
     * @param int $policyId
     * @return self
     */
    public function setPolicyId(?int $policyId): self
    {
        $this->policyId = $policyId;
        return $this;
    }

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
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->policyId !== null) {
            $result['policy_id'] = $this->policyId;
        }
        if ($this->policyName !== null) {
            $result['policy_name'] = $this->policyName;
        }
        if ($this->policyNo !== null) {
            $result['policy_no'] = $this->policyNo;
        }
        if ($this->policyType !== null) {
            $result['policy_type'] = $this->policyType;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['policy_id'] ?? null) !== null) {
            $obj->policyId = (int) $v;
        }
        if (($v = $data['policy_name'] ?? null) !== null) {
            $obj->policyName = (string) $v;
        }
        if (($v = $data['policy_no'] ?? null) !== null) {
            $obj->policyNo = (string) $v;
        }
        if (($v = $data['policy_type'] ?? null) !== null) {
            $obj->policyType = (string) $v;
        }
        return $obj;
    }
}
