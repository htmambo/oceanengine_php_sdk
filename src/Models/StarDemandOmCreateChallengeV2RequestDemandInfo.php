<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarDemandOmCreateChallengeV2RequestDemandInfo implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\StarDemandOmCreateChallengeV2RequestDemandInfoAdSyncConf
     */
    protected ?\Oceanengine\Models\StarDemandOmCreateChallengeV2RequestDemandInfoAdSyncConf $adSyncConf = null;

    /**
     * 参考素材 list<string> 最多3个
     * @var string[]
     */
    protected ?array $attatchmentsUrl = null;

    /**
     * 任务名称 字符串，最长17
     * @var string
     */
    protected ?string $demandName = null;

    /**
     * 任务开始时间 秒级时间戳，默认任务创建时间+1h
     * @var int
     */
    protected ?int $expirationTime = null;

    /**
     * 任务截止时间 秒级时间戳，最长365天
     * @var int
     */
    protected ?int $expirationTimeEnd = null;

    /**
     * @return \Oceanengine\Models\StarDemandOmCreateChallengeV2RequestDemandInfoAdSyncConf
     */
    public function getAdSyncConf(): ?\Oceanengine\Models\StarDemandOmCreateChallengeV2RequestDemandInfoAdSyncConf
    {
        return $this->adSyncConf;
    }

    /**
     * @param \Oceanengine\Models\StarDemandOmCreateChallengeV2RequestDemandInfoAdSyncConf $adSyncConf
     * @return self
     */
    public function setAdSyncConf(?\Oceanengine\Models\StarDemandOmCreateChallengeV2RequestDemandInfoAdSyncConf $adSyncConf): self
    {
        $this->adSyncConf = $adSyncConf;
        return $this;
    }

    /**
     * 参考素材 list<string> 最多3个
     * @return string[]
     */
    public function getAttatchmentsUrl(): ?array
    {
        return $this->attatchmentsUrl;
    }

    /**
     * 参考素材 list<string> 最多3个
     * @param string[] $attatchmentsUrl
     * @return self
     */
    public function setAttatchmentsUrl(?array $attatchmentsUrl): self
    {
        $this->attatchmentsUrl = $attatchmentsUrl;
        return $this;
    }

    /**
     * 任务名称 字符串，最长17
     * @return string
     */
    public function getDemandName(): ?string
    {
        return $this->demandName;
    }

    /**
     * 任务名称 字符串，最长17
     * @param string $demandName
     * @return self
     */
    public function setDemandName(?string $demandName): self
    {
        $this->demandName = $demandName;
        return $this;
    }

    /**
     * 任务开始时间 秒级时间戳，默认任务创建时间+1h
     * @return int
     */
    public function getExpirationTime(): ?int
    {
        return $this->expirationTime;
    }

    /**
     * 任务开始时间 秒级时间戳，默认任务创建时间+1h
     * @param int $expirationTime
     * @return self
     */
    public function setExpirationTime(?int $expirationTime): self
    {
        $this->expirationTime = $expirationTime;
        return $this;
    }

    /**
     * 任务截止时间 秒级时间戳，最长365天
     * @return int
     */
    public function getExpirationTimeEnd(): ?int
    {
        return $this->expirationTimeEnd;
    }

    /**
     * 任务截止时间 秒级时间戳，最长365天
     * @param int $expirationTimeEnd
     * @return self
     */
    public function setExpirationTimeEnd(?int $expirationTimeEnd): self
    {
        $this->expirationTimeEnd = $expirationTimeEnd;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->adSyncConf !== null) {
            $result['ad_sync_conf'] = $this->adSyncConf;
        }
        if ($this->attatchmentsUrl !== null) {
            $result['attatchments_url'] = $this->attatchmentsUrl;
        }
        if ($this->demandName !== null) {
            $result['demand_name'] = $this->demandName;
        }
        if ($this->expirationTime !== null) {
            $result['expiration_time'] = $this->expirationTime;
        }
        if ($this->expirationTimeEnd !== null) {
            $result['expiration_time_end'] = $this->expirationTimeEnd;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['ad_sync_conf'] ?? null) !== null && is_array($v)) {
            $obj->adSyncConf = \Oceanengine\Models\StarDemandOmCreateChallengeV2RequestDemandInfoAdSyncConf::fromArray($v);
        }
        if (($v = $data['attatchments_url'] ?? null) !== null && is_array($v)) {
            $obj->attatchmentsUrl = $v;
        }
        if (($v = $data['demand_name'] ?? null) !== null) {
            $obj->demandName = (string) $v;
        }
        if (($v = $data['expiration_time'] ?? null) !== null) {
            $obj->expirationTime = (int) $v;
        }
        if (($v = $data['expiration_time_end'] ?? null) !== null) {
            $obj->expirationTimeEnd = (int) $v;
        }
        return $obj;
    }
}
