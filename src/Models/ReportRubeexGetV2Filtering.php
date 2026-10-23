<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ReportRubeexGetV2Filtering implements \JsonSerializable
{
    /**
     * @var int[]
     */
    protected ?array $adIds = null;

    /**
     * @var \Oceanengine\Models\ReportRubeexGetV2FilteringAppCode
     */
    protected ?string $appCode = null;

    /**
     * @var int[]
     */
    protected ?array $campaignIds = null;

    /**
     * @var int[]
     */
    protected ?array $creativeIds = null;

    /**
     * @var string
     */
    protected ?string $dataMd5 = null;

    /**
     * @var \Oceanengine\Models\ReportRubeexGetV2FilteringDataScope
     */
    protected ?string $dataScope = null;

    /**
     * @var \Oceanengine\Models\ReportRubeexGetV2FilteringOsType
     */
    protected ?string $osType = null;

    /**
     * @var \Oceanengine\Models\ReportRubeexGetV2FilteringPlayableType
     */
    protected ?string $playableType = null;

    /**
     * @var \Oceanengine\Models\ReportRubeexGetV2FilteringType
     */
    protected ?string $type = null;

    /**
     * @return int[]
     */
    public function getAdIds(): ?array
    {
        return $this->adIds;
    }

    /**
     * @param int[] $adIds
     * @return self
     */
    public function setAdIds(?array $adIds): self
    {
        $this->adIds = $adIds;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ReportRubeexGetV2FilteringAppCode
     */
    public function getAppCode(): ?string
    {
        return $this->appCode;
    }

    /**
     * @param \Oceanengine\Models\ReportRubeexGetV2FilteringAppCode $appCode
     * @return self
     */
    public function setAppCode(?string $appCode): self
    {
        $this->appCode = $appCode;
        return $this;
    }

    /**
     * @return int[]
     */
    public function getCampaignIds(): ?array
    {
        return $this->campaignIds;
    }

    /**
     * @param int[] $campaignIds
     * @return self
     */
    public function setCampaignIds(?array $campaignIds): self
    {
        $this->campaignIds = $campaignIds;
        return $this;
    }

    /**
     * @return int[]
     */
    public function getCreativeIds(): ?array
    {
        return $this->creativeIds;
    }

    /**
     * @param int[] $creativeIds
     * @return self
     */
    public function setCreativeIds(?array $creativeIds): self
    {
        $this->creativeIds = $creativeIds;
        return $this;
    }

    /**
     * @return string
     */
    public function getDataMd5(): ?string
    {
        return $this->dataMd5;
    }

    /**
     * @param string $dataMd5
     * @return self
     */
    public function setDataMd5(?string $dataMd5): self
    {
        $this->dataMd5 = $dataMd5;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ReportRubeexGetV2FilteringDataScope
     */
    public function getDataScope(): ?string
    {
        return $this->dataScope;
    }

    /**
     * @param \Oceanengine\Models\ReportRubeexGetV2FilteringDataScope $dataScope
     * @return self
     */
    public function setDataScope(?string $dataScope): self
    {
        $this->dataScope = $dataScope;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ReportRubeexGetV2FilteringOsType
     */
    public function getOsType(): ?string
    {
        return $this->osType;
    }

    /**
     * @param \Oceanengine\Models\ReportRubeexGetV2FilteringOsType $osType
     * @return self
     */
    public function setOsType(?string $osType): self
    {
        $this->osType = $osType;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ReportRubeexGetV2FilteringPlayableType
     */
    public function getPlayableType(): ?string
    {
        return $this->playableType;
    }

    /**
     * @param \Oceanengine\Models\ReportRubeexGetV2FilteringPlayableType $playableType
     * @return self
     */
    public function setPlayableType(?string $playableType): self
    {
        $this->playableType = $playableType;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ReportRubeexGetV2FilteringType
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * @param \Oceanengine\Models\ReportRubeexGetV2FilteringType $type
     * @return self
     */
    public function setType(?string $type): self
    {
        $this->type = $type;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->adIds !== null) {
            $result['ad_ids'] = $this->adIds;
        }
        if ($this->appCode !== null) {
            $result['app_code'] = $this->appCode;
        }
        if ($this->campaignIds !== null) {
            $result['campaign_ids'] = $this->campaignIds;
        }
        if ($this->creativeIds !== null) {
            $result['creative_ids'] = $this->creativeIds;
        }
        if ($this->dataMd5 !== null) {
            $result['data_md5'] = $this->dataMd5;
        }
        if ($this->dataScope !== null) {
            $result['data_scope'] = $this->dataScope;
        }
        if ($this->osType !== null) {
            $result['os_type'] = $this->osType;
        }
        if ($this->playableType !== null) {
            $result['playable_type'] = $this->playableType;
        }
        if ($this->type !== null) {
            $result['type'] = $this->type;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['ad_ids'] ?? null) !== null && is_array($v)) {
            $obj->adIds = $v;
        }
        if (($v = $data['app_code'] ?? null) !== null) {
            $obj->appCode = (string) $v;
        }
        if (($v = $data['campaign_ids'] ?? null) !== null && is_array($v)) {
            $obj->campaignIds = $v;
        }
        if (($v = $data['creative_ids'] ?? null) !== null && is_array($v)) {
            $obj->creativeIds = $v;
        }
        if (($v = $data['data_md5'] ?? null) !== null) {
            $obj->dataMd5 = (string) $v;
        }
        if (($v = $data['data_scope'] ?? null) !== null) {
            $obj->dataScope = (string) $v;
        }
        if (($v = $data['os_type'] ?? null) !== null) {
            $obj->osType = (string) $v;
        }
        if (($v = $data['playable_type'] ?? null) !== null) {
            $obj->playableType = (string) $v;
        }
        if (($v = $data['type'] ?? null) !== null) {
            $obj->type = (string) $v;
        }
        return $obj;
    }
}
