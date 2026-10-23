<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class DiagnosisTaskAgentCreateV2Request implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $advertiserId = null;

    /**
     * @var int
     */
    protected ?int $agentId = null;

    /**
     * @var \Oceanengine\Models\DiagnosisTaskAgentCreateV2RequestDiagnoseConfig
     */
    protected ?\Oceanengine\Models\DiagnosisTaskAgentCreateV2RequestDiagnoseConfig $diagnoseConfig = null;

    /**
     * 参考广告id，可复用该广告id的setting进行前测，非空情况下会忽略diagnose_config。 和ref_ad_id二选一
     * @var int
     */
    protected ?int $refAdId = null;

    /**
     * 参考广告id，可复用该广告id的setting进行前测，非空情况下会忽略diagnose_config。 和ref_ad_id二选一
     * @var int
     */
    protected ?int $refPromotionId = null;

    /**
     * 视频id
     * @var string[]
     */
    protected ?array $videoIds = null;

    /**
     * @return int
     */
    public function getAdvertiserId(): ?int
    {
        return $this->advertiserId;
    }

    /**
     * @param int $advertiserId
     * @return self
     */
    public function setAdvertiserId(?int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    /**
     * @return int
     */
    public function getAgentId(): ?int
    {
        return $this->agentId;
    }

    /**
     * @param int $agentId
     * @return self
     */
    public function setAgentId(?int $agentId): self
    {
        $this->agentId = $agentId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\DiagnosisTaskAgentCreateV2RequestDiagnoseConfig
     */
    public function getDiagnoseConfig(): ?\Oceanengine\Models\DiagnosisTaskAgentCreateV2RequestDiagnoseConfig
    {
        return $this->diagnoseConfig;
    }

    /**
     * @param \Oceanengine\Models\DiagnosisTaskAgentCreateV2RequestDiagnoseConfig $diagnoseConfig
     * @return self
     */
    public function setDiagnoseConfig(?\Oceanengine\Models\DiagnosisTaskAgentCreateV2RequestDiagnoseConfig $diagnoseConfig): self
    {
        $this->diagnoseConfig = $diagnoseConfig;
        return $this;
    }

    /**
     * 参考广告id，可复用该广告id的setting进行前测，非空情况下会忽略diagnose_config。 和ref_ad_id二选一
     * @return int
     */
    public function getRefAdId(): ?int
    {
        return $this->refAdId;
    }

    /**
     * 参考广告id，可复用该广告id的setting进行前测，非空情况下会忽略diagnose_config。 和ref_ad_id二选一
     * @param int $refAdId
     * @return self
     */
    public function setRefAdId(?int $refAdId): self
    {
        $this->refAdId = $refAdId;
        return $this;
    }

    /**
     * 参考广告id，可复用该广告id的setting进行前测，非空情况下会忽略diagnose_config。 和ref_ad_id二选一
     * @return int
     */
    public function getRefPromotionId(): ?int
    {
        return $this->refPromotionId;
    }

    /**
     * 参考广告id，可复用该广告id的setting进行前测，非空情况下会忽略diagnose_config。 和ref_ad_id二选一
     * @param int $refPromotionId
     * @return self
     */
    public function setRefPromotionId(?int $refPromotionId): self
    {
        $this->refPromotionId = $refPromotionId;
        return $this;
    }

    /**
     * 视频id
     * @return string[]
     */
    public function getVideoIds(): ?array
    {
        return $this->videoIds;
    }

    /**
     * 视频id
     * @param string[] $videoIds
     * @return self
     */
    public function setVideoIds(?array $videoIds): self
    {
        $this->videoIds = $videoIds;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->advertiserId !== null) {
            $result['advertiser_id'] = $this->advertiserId;
        }
        if ($this->agentId !== null) {
            $result['agent_id'] = $this->agentId;
        }
        if ($this->diagnoseConfig !== null) {
            $result['diagnose_config'] = $this->diagnoseConfig;
        }
        if ($this->refAdId !== null) {
            $result['ref_ad_id'] = $this->refAdId;
        }
        if ($this->refPromotionId !== null) {
            $result['ref_promotion_id'] = $this->refPromotionId;
        }
        if ($this->videoIds !== null) {
            $result['video_ids'] = $this->videoIds;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['advertiser_id'] ?? null) !== null) {
            $obj->advertiserId = (int) $v;
        }
        if (($v = $data['agent_id'] ?? null) !== null) {
            $obj->agentId = (int) $v;
        }
        if (($v = $data['diagnose_config'] ?? null) !== null && is_array($v)) {
            $obj->diagnoseConfig = \Oceanengine\Models\DiagnosisTaskAgentCreateV2RequestDiagnoseConfig::fromArray($v);
        }
        if (($v = $data['ref_ad_id'] ?? null) !== null) {
            $obj->refAdId = (int) $v;
        }
        if (($v = $data['ref_promotion_id'] ?? null) !== null) {
            $obj->refPromotionId = (int) $v;
        }
        if (($v = $data['video_ids'] ?? null) !== null && is_array($v)) {
            $obj->videoIds = $v;
        }
        return $obj;
    }
}
