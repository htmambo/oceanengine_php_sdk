<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarMcnRecuritProviderGetTaskOrderListGetV2ResponseDataDataInner implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $challengeStatus = null;

    /**
     * 报名截止时间，格式：%Y-%m-%d %H:%M:%S
     * @var string
     */
    protected ?string $createTime = null;

    /**
     * @var int
     */
    protected ?int $demandId = null;

    /**
     * @var string
     */
    protected ?string $demandName = null;

    /**
     * @var string
     */
    protected ?string $demanderName = null;

    /**
     * @var int
     */
    protected ?int $evaluateType = null;

    /**
     * @var int
     */
    protected ?int $payType = null;

    /**
     * @var int
     */
    protected ?int $videoType = null;

    /**
     * @return int
     */
    public function getChallengeStatus(): ?int
    {
        return $this->challengeStatus;
    }

    /**
     * @param int $challengeStatus
     * @return self
     */
    public function setChallengeStatus(?int $challengeStatus): self
    {
        $this->challengeStatus = $challengeStatus;
        return $this;
    }

    /**
     * 报名截止时间，格式：%Y-%m-%d %H:%M:%S
     * @return string
     */
    public function getCreateTime(): ?string
    {
        return $this->createTime;
    }

    /**
     * 报名截止时间，格式：%Y-%m-%d %H:%M:%S
     * @param string $createTime
     * @return self
     */
    public function setCreateTime(?string $createTime): self
    {
        $this->createTime = $createTime;
        return $this;
    }

    /**
     * @return int
     */
    public function getDemandId(): ?int
    {
        return $this->demandId;
    }

    /**
     * @param int $demandId
     * @return self
     */
    public function setDemandId(?int $demandId): self
    {
        $this->demandId = $demandId;
        return $this;
    }

    /**
     * @return string
     */
    public function getDemandName(): ?string
    {
        return $this->demandName;
    }

    /**
     * @param string $demandName
     * @return self
     */
    public function setDemandName(?string $demandName): self
    {
        $this->demandName = $demandName;
        return $this;
    }

    /**
     * @return string
     */
    public function getDemanderName(): ?string
    {
        return $this->demanderName;
    }

    /**
     * @param string $demanderName
     * @return self
     */
    public function setDemanderName(?string $demanderName): self
    {
        $this->demanderName = $demanderName;
        return $this;
    }

    /**
     * @return int
     */
    public function getEvaluateType(): ?int
    {
        return $this->evaluateType;
    }

    /**
     * @param int $evaluateType
     * @return self
     */
    public function setEvaluateType(?int $evaluateType): self
    {
        $this->evaluateType = $evaluateType;
        return $this;
    }

    /**
     * @return int
     */
    public function getPayType(): ?int
    {
        return $this->payType;
    }

    /**
     * @param int $payType
     * @return self
     */
    public function setPayType(?int $payType): self
    {
        $this->payType = $payType;
        return $this;
    }

    /**
     * @return int
     */
    public function getVideoType(): ?int
    {
        return $this->videoType;
    }

    /**
     * @param int $videoType
     * @return self
     */
    public function setVideoType(?int $videoType): self
    {
        $this->videoType = $videoType;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->challengeStatus !== null) {
            $result['challenge_status'] = $this->challengeStatus;
        }
        if ($this->createTime !== null) {
            $result['create_time'] = $this->createTime;
        }
        if ($this->demandId !== null) {
            $result['demand_id'] = $this->demandId;
        }
        if ($this->demandName !== null) {
            $result['demand_name'] = $this->demandName;
        }
        if ($this->demanderName !== null) {
            $result['demander_name'] = $this->demanderName;
        }
        if ($this->evaluateType !== null) {
            $result['evaluate_type'] = $this->evaluateType;
        }
        if ($this->payType !== null) {
            $result['pay_type'] = $this->payType;
        }
        if ($this->videoType !== null) {
            $result['video_type'] = $this->videoType;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['challenge_status'] ?? null) !== null) {
            $obj->challengeStatus = (int) $v;
        }
        if (($v = $data['create_time'] ?? null) !== null) {
            $obj->createTime = (string) $v;
        }
        if (($v = $data['demand_id'] ?? null) !== null) {
            $obj->demandId = (int) $v;
        }
        if (($v = $data['demand_name'] ?? null) !== null) {
            $obj->demandName = (string) $v;
        }
        if (($v = $data['demander_name'] ?? null) !== null) {
            $obj->demanderName = (string) $v;
        }
        if (($v = $data['evaluate_type'] ?? null) !== null) {
            $obj->evaluateType = (int) $v;
        }
        if (($v = $data['pay_type'] ?? null) !== null) {
            $obj->payType = (int) $v;
        }
        if (($v = $data['video_type'] ?? null) !== null) {
            $obj->videoType = (int) $v;
        }
        return $obj;
    }
}
