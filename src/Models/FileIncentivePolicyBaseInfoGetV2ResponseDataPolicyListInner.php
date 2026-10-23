<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class FileIncentivePolicyBaseInfoGetV2ResponseDataPolicyListInner implements \JsonSerializable
{
    /**
     * @var string
     */
    protected ?string $assessmentEndDate = null;

    /**
     * @var string
     */
    protected ?string $assessmentStartDate = null;

    /**
     * @var string
     */
    protected ?string $businessLines = null;

    /**
     * @var string
     */
    protected ?string $inventiveDetails = null;

    /**
     * @var int
     */
    protected ?int $policyId = null;

    /**
     * @var string
     */
    protected ?string $policyName = null;

    /**
     * @var string
     */
    protected ?string $queryTypes = null;

    /**
     * @var string
     */
    protected ?string $referEndDate = null;

    /**
     * @var string
     */
    protected ?string $referStartDate = null;

    /**
     * @var string
     */
    protected ?string $status = null;

    /**
     * @return string
     */
    public function getAssessmentEndDate(): ?string
    {
        return $this->assessmentEndDate;
    }

    /**
     * @param string $assessmentEndDate
     * @return self
     */
    public function setAssessmentEndDate(?string $assessmentEndDate): self
    {
        $this->assessmentEndDate = $assessmentEndDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getAssessmentStartDate(): ?string
    {
        return $this->assessmentStartDate;
    }

    /**
     * @param string $assessmentStartDate
     * @return self
     */
    public function setAssessmentStartDate(?string $assessmentStartDate): self
    {
        $this->assessmentStartDate = $assessmentStartDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getBusinessLines(): ?string
    {
        return $this->businessLines;
    }

    /**
     * @param string $businessLines
     * @return self
     */
    public function setBusinessLines(?string $businessLines): self
    {
        $this->businessLines = $businessLines;
        return $this;
    }

    /**
     * @return string
     */
    public function getInventiveDetails(): ?string
    {
        return $this->inventiveDetails;
    }

    /**
     * @param string $inventiveDetails
     * @return self
     */
    public function setInventiveDetails(?string $inventiveDetails): self
    {
        $this->inventiveDetails = $inventiveDetails;
        return $this;
    }

    /**
     * @return int
     */
    public function getPolicyId(): ?int
    {
        return $this->policyId;
    }

    /**
     * @param int $policyId
     * @return self
     */
    public function setPolicyId(?int $policyId): self
    {
        $this->policyId = $policyId;
        return $this;
    }

    /**
     * @return string
     */
    public function getPolicyName(): ?string
    {
        return $this->policyName;
    }

    /**
     * @param string $policyName
     * @return self
     */
    public function setPolicyName(?string $policyName): self
    {
        $this->policyName = $policyName;
        return $this;
    }

    /**
     * @return string
     */
    public function getQueryTypes(): ?string
    {
        return $this->queryTypes;
    }

    /**
     * @param string $queryTypes
     * @return self
     */
    public function setQueryTypes(?string $queryTypes): self
    {
        $this->queryTypes = $queryTypes;
        return $this;
    }

    /**
     * @return string
     */
    public function getReferEndDate(): ?string
    {
        return $this->referEndDate;
    }

    /**
     * @param string $referEndDate
     * @return self
     */
    public function setReferEndDate(?string $referEndDate): self
    {
        $this->referEndDate = $referEndDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getReferStartDate(): ?string
    {
        return $this->referStartDate;
    }

    /**
     * @param string $referStartDate
     * @return self
     */
    public function setReferStartDate(?string $referStartDate): self
    {
        $this->referStartDate = $referStartDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * @param string $status
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
        if ($this->assessmentEndDate !== null) {
            $result['assessment_end_date'] = $this->assessmentEndDate;
        }
        if ($this->assessmentStartDate !== null) {
            $result['assessment_start_date'] = $this->assessmentStartDate;
        }
        if ($this->businessLines !== null) {
            $result['business_lines'] = $this->businessLines;
        }
        if ($this->inventiveDetails !== null) {
            $result['inventive_details'] = $this->inventiveDetails;
        }
        if ($this->policyId !== null) {
            $result['policy_id'] = $this->policyId;
        }
        if ($this->policyName !== null) {
            $result['policy_name'] = $this->policyName;
        }
        if ($this->queryTypes !== null) {
            $result['query_types'] = $this->queryTypes;
        }
        if ($this->referEndDate !== null) {
            $result['refer_end_date'] = $this->referEndDate;
        }
        if ($this->referStartDate !== null) {
            $result['refer_start_date'] = $this->referStartDate;
        }
        if ($this->status !== null) {
            $result['status'] = $this->status;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['assessment_end_date'] ?? null) !== null) {
            $obj->assessmentEndDate = (string) $v;
        }
        if (($v = $data['assessment_start_date'] ?? null) !== null) {
            $obj->assessmentStartDate = (string) $v;
        }
        if (($v = $data['business_lines'] ?? null) !== null) {
            $obj->businessLines = (string) $v;
        }
        if (($v = $data['inventive_details'] ?? null) !== null) {
            $obj->inventiveDetails = (string) $v;
        }
        if (($v = $data['policy_id'] ?? null) !== null) {
            $obj->policyId = (int) $v;
        }
        if (($v = $data['policy_name'] ?? null) !== null) {
            $obj->policyName = (string) $v;
        }
        if (($v = $data['query_types'] ?? null) !== null) {
            $obj->queryTypes = (string) $v;
        }
        if (($v = $data['refer_end_date'] ?? null) !== null) {
            $obj->referEndDate = (string) $v;
        }
        if (($v = $data['refer_start_date'] ?? null) !== null) {
            $obj->referStartDate = (string) $v;
        }
        if (($v = $data['status'] ?? null) !== null) {
            $obj->status = (string) $v;
        }
        return $obj;
    }
}
