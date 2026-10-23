<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class BrandPolicyListV30ResponseDataPolicyInfosInner implements \JsonSerializable
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
    protected ?string $policyTypeName = null;

    /**
     * 规则行ID
     * @var string
     */
    protected ?string $ruleLineId = null;

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
    public function getPolicyTypeName(): ?string
    {
        return $this->policyTypeName;
    }

    /**
     * 政策类型
     * @param string $policyTypeName
     * @return self
     */
    public function setPolicyTypeName(?string $policyTypeName): self
    {
        $this->policyTypeName = $policyTypeName;
        return $this;
    }

    /**
     * 规则行ID
     * @return string
     */
    public function getRuleLineId(): ?string
    {
        return $this->ruleLineId;
    }

    /**
     * 规则行ID
     * @param string $ruleLineId
     * @return self
     */
    public function setRuleLineId(?string $ruleLineId): self
    {
        $this->ruleLineId = $ruleLineId;
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
        if ($this->policyTypeName !== null) {
            $result['policy_type_name'] = $this->policyTypeName;
        }
        if ($this->ruleLineId !== null) {
            $result['rule_line_id'] = $this->ruleLineId;
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
        if (($v = $data['policy_type_name'] ?? null) !== null) {
            $obj->policyTypeName = (string) $v;
        }
        if (($v = $data['rule_line_id'] ?? null) !== null) {
            $obj->ruleLineId = (string) $v;
        }
        return $obj;
    }
}
