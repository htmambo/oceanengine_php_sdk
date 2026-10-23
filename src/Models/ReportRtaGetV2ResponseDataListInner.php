<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ReportRtaGetV2ResponseDataListInner implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $adId = null;

    /**
     * @var int
     */
    protected ?int $advertiserId = null;

    /**
     * @var int
     */
    protected ?int $campaignId = null;

    /**
     * @var int
     */
    protected ?int $creativeId = null;

    /**
     * @var int
     */
    protected ?int $isRtaBid = null;

    /**
     * @var \Oceanengine\Models\ReportRtaGetV2ResponseDataListInnerMetrics
     */
    protected ?\Oceanengine\Models\ReportRtaGetV2ResponseDataListInnerMetrics $metrics = null;

    /**
     * @var string
     */
    protected ?string $platform = null;

    /**
     * @var string
     */
    protected ?string $statTime = null;

    /**
     * @var string
     */
    protected ?string $statTimeDay = null;

    /**
     * @return int
     */
    public function getAdId(): ?int
    {
        return $this->adId;
    }

    /**
     * @param int $adId
     * @return self
     */
    public function setAdId(?int $adId): self
    {
        $this->adId = $adId;
        return $this;
    }

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
    public function getCampaignId(): ?int
    {
        return $this->campaignId;
    }

    /**
     * @param int $campaignId
     * @return self
     */
    public function setCampaignId(?int $campaignId): self
    {
        $this->campaignId = $campaignId;
        return $this;
    }

    /**
     * @return int
     */
    public function getCreativeId(): ?int
    {
        return $this->creativeId;
    }

    /**
     * @param int $creativeId
     * @return self
     */
    public function setCreativeId(?int $creativeId): self
    {
        $this->creativeId = $creativeId;
        return $this;
    }

    /**
     * @return int
     */
    public function getIsRtaBid(): ?int
    {
        return $this->isRtaBid;
    }

    /**
     * @param int $isRtaBid
     * @return self
     */
    public function setIsRtaBid(?int $isRtaBid): self
    {
        $this->isRtaBid = $isRtaBid;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ReportRtaGetV2ResponseDataListInnerMetrics
     */
    public function getMetrics(): ?\Oceanengine\Models\ReportRtaGetV2ResponseDataListInnerMetrics
    {
        return $this->metrics;
    }

    /**
     * @param \Oceanengine\Models\ReportRtaGetV2ResponseDataListInnerMetrics $metrics
     * @return self
     */
    public function setMetrics(?\Oceanengine\Models\ReportRtaGetV2ResponseDataListInnerMetrics $metrics): self
    {
        $this->metrics = $metrics;
        return $this;
    }

    /**
     * @return string
     */
    public function getPlatform(): ?string
    {
        return $this->platform;
    }

    /**
     * @param string $platform
     * @return self
     */
    public function setPlatform(?string $platform): self
    {
        $this->platform = $platform;
        return $this;
    }

    /**
     * @return string
     */
    public function getStatTime(): ?string
    {
        return $this->statTime;
    }

    /**
     * @param string $statTime
     * @return self
     */
    public function setStatTime(?string $statTime): self
    {
        $this->statTime = $statTime;
        return $this;
    }

    /**
     * @return string
     */
    public function getStatTimeDay(): ?string
    {
        return $this->statTimeDay;
    }

    /**
     * @param string $statTimeDay
     * @return self
     */
    public function setStatTimeDay(?string $statTimeDay): self
    {
        $this->statTimeDay = $statTimeDay;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->adId !== null) {
            $result['ad_id'] = $this->adId;
        }
        if ($this->advertiserId !== null) {
            $result['advertiser_id'] = $this->advertiserId;
        }
        if ($this->campaignId !== null) {
            $result['campaign_id'] = $this->campaignId;
        }
        if ($this->creativeId !== null) {
            $result['creative_id'] = $this->creativeId;
        }
        if ($this->isRtaBid !== null) {
            $result['is_rta_bid'] = $this->isRtaBid;
        }
        if ($this->metrics !== null) {
            $result['metrics'] = $this->metrics;
        }
        if ($this->platform !== null) {
            $result['platform'] = $this->platform;
        }
        if ($this->statTime !== null) {
            $result['stat_time'] = $this->statTime;
        }
        if ($this->statTimeDay !== null) {
            $result['stat_time_day'] = $this->statTimeDay;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['ad_id'] ?? null) !== null) {
            $obj->adId = (int) $v;
        }
        if (($v = $data['advertiser_id'] ?? null) !== null) {
            $obj->advertiserId = (int) $v;
        }
        if (($v = $data['campaign_id'] ?? null) !== null) {
            $obj->campaignId = (int) $v;
        }
        if (($v = $data['creative_id'] ?? null) !== null) {
            $obj->creativeId = (int) $v;
        }
        if (($v = $data['is_rta_bid'] ?? null) !== null) {
            $obj->isRtaBid = (int) $v;
        }
        if (($v = $data['metrics'] ?? null) !== null && is_array($v)) {
            $obj->metrics = \Oceanengine\Models\ReportRtaGetV2ResponseDataListInnerMetrics::fromArray($v);
        }
        if (($v = $data['platform'] ?? null) !== null) {
            $obj->platform = (string) $v;
        }
        if (($v = $data['stat_time'] ?? null) !== null) {
            $obj->statTime = (string) $v;
        }
        if (($v = $data['stat_time_day'] ?? null) !== null) {
            $obj->statTimeDay = (string) $v;
        }
        return $obj;
    }
}
