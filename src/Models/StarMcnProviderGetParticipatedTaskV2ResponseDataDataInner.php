<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarMcnProviderGetParticipatedTaskV2ResponseDataDataInner implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $challengeStatus = null;

    /**
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
     * @var int
     */
    protected ?int $payType = null;

    /**
     * @var int
     */
    protected ?int $providerOrderTaskStatus = null;

    /**
     * @var \Oceanengine\Models\StarMcnProviderGetParticipatedTaskV2ResponseDataDataInnerQuotaInfo
     */
    protected ?\Oceanengine\Models\StarMcnProviderGetParticipatedTaskV2ResponseDataDataInnerQuotaInfo $quotaInfo = null;

    /**
     * 0-1000，撮合服务商兜底抽佣比例。千分之一，例如50%，写入500
     * @var int
     */
    protected ?int $serviceProviderProfitRate = null;

    /**
     * 0-1000，撮合服务商分渠道抽佣比例，千分之一
     * @var array<string,int>
     */
    protected ?array $serviceProviderProfitRateChannel = null;

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
     * @return string
     */
    public function getCreateTime(): ?string
    {
        return $this->createTime;
    }

    /**
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
    public function getProviderOrderTaskStatus(): ?int
    {
        return $this->providerOrderTaskStatus;
    }

    /**
     * @param int $providerOrderTaskStatus
     * @return self
     */
    public function setProviderOrderTaskStatus(?int $providerOrderTaskStatus): self
    {
        $this->providerOrderTaskStatus = $providerOrderTaskStatus;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\StarMcnProviderGetParticipatedTaskV2ResponseDataDataInnerQuotaInfo
     */
    public function getQuotaInfo(): ?\Oceanengine\Models\StarMcnProviderGetParticipatedTaskV2ResponseDataDataInnerQuotaInfo
    {
        return $this->quotaInfo;
    }

    /**
     * @param \Oceanengine\Models\StarMcnProviderGetParticipatedTaskV2ResponseDataDataInnerQuotaInfo $quotaInfo
     * @return self
     */
    public function setQuotaInfo(?\Oceanengine\Models\StarMcnProviderGetParticipatedTaskV2ResponseDataDataInnerQuotaInfo $quotaInfo): self
    {
        $this->quotaInfo = $quotaInfo;
        return $this;
    }

    /**
     * 0-1000，撮合服务商兜底抽佣比例。千分之一，例如50%，写入500
     * @return int
     */
    public function getServiceProviderProfitRate(): ?int
    {
        return $this->serviceProviderProfitRate;
    }

    /**
     * 0-1000，撮合服务商兜底抽佣比例。千分之一，例如50%，写入500
     * @param int $serviceProviderProfitRate
     * @return self
     */
    public function setServiceProviderProfitRate(?int $serviceProviderProfitRate): self
    {
        $this->serviceProviderProfitRate = $serviceProviderProfitRate;
        return $this;
    }

    /**
     * 0-1000，撮合服务商分渠道抽佣比例，千分之一
     * @return array<string,int>
     */
    public function getServiceProviderProfitRateChannel(): ?array
    {
        return $this->serviceProviderProfitRateChannel;
    }

    /**
     * 0-1000，撮合服务商分渠道抽佣比例，千分之一
     * @param array<string,int> $serviceProviderProfitRateChannel
     * @return self
     */
    public function setServiceProviderProfitRateChannel(?array $serviceProviderProfitRateChannel): self
    {
        $this->serviceProviderProfitRateChannel = $serviceProviderProfitRateChannel;
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
        if ($this->payType !== null) {
            $result['pay_type'] = $this->payType;
        }
        if ($this->providerOrderTaskStatus !== null) {
            $result['provider_order_task_status'] = $this->providerOrderTaskStatus;
        }
        if ($this->quotaInfo !== null) {
            $result['quota_info'] = $this->quotaInfo;
        }
        if ($this->serviceProviderProfitRate !== null) {
            $result['service_provider_profit_rate'] = $this->serviceProviderProfitRate;
        }
        if ($this->serviceProviderProfitRateChannel !== null) {
            $result['service_provider_profit_rate_channel'] = $this->serviceProviderProfitRateChannel;
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
        if (($v = $data['pay_type'] ?? null) !== null) {
            $obj->payType = (int) $v;
        }
        if (($v = $data['provider_order_task_status'] ?? null) !== null) {
            $obj->providerOrderTaskStatus = (int) $v;
        }
        if (($v = $data['quota_info'] ?? null) !== null && is_array($v)) {
            $obj->quotaInfo = \Oceanengine\Models\StarMcnProviderGetParticipatedTaskV2ResponseDataDataInnerQuotaInfo::fromArray($v);
        }
        if (($v = $data['service_provider_profit_rate'] ?? null) !== null) {
            $obj->serviceProviderProfitRate = (int) $v;
        }
        if (($v = $data['service_provider_profit_rate_channel'] ?? null) !== null && is_array($v)) {
            $obj->serviceProviderProfitRateChannel = $v;
        }
        return $obj;
    }
}
