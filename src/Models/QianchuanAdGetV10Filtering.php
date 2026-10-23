<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanAdGetV10Filtering implements \JsonSerializable
{
    /**
     * @var string
     */
    protected ?string $adCreateEndDate = null;

    /**
     * @var string
     */
    protected ?string $adCreateStartDate = null;

    /**
     * @var string
     */
    protected ?string $adModifyTime = null;

    /**
     * @var string
     */
    protected ?string $adName = null;

    /**
     * @var \Oceanengine\Models\QianchuanAdGetV10FilteringAutoManageFilter
     */
    protected ?string $autoManageFilter = null;

    /**
     * @var int
     */
    protected ?int $awemeId = null;

    /**
     * @var int
     */
    protected ?int $campaignId = null;

    /**
     * @var \Oceanengine\Models\QianchuanAdGetV10FilteringCampaignScene[]
     */
    protected ?array $campaignScene = null;

    /**
     * @var int[]
     */
    protected ?array $ids = null;

    /**
     * @var \Oceanengine\Models\QianchuanAdGetV10FilteringMarketingGoal
     */
    protected ?string $marketingGoal = null;

    /**
     * @var \Oceanengine\Models\QianchuanAdGetV10FilteringMarketingScene
     */
    protected ?string $marketingScene = null;

    /**
     * @var \Oceanengine\Models\QianchuanAdGetV10FilteringStatus
     */
    protected ?string $status = null;

    /**
     * @return string
     */
    public function getAdCreateEndDate(): ?string
    {
        return $this->adCreateEndDate;
    }

    /**
     * @param string $adCreateEndDate
     * @return self
     */
    public function setAdCreateEndDate(?string $adCreateEndDate): self
    {
        $this->adCreateEndDate = $adCreateEndDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getAdCreateStartDate(): ?string
    {
        return $this->adCreateStartDate;
    }

    /**
     * @param string $adCreateStartDate
     * @return self
     */
    public function setAdCreateStartDate(?string $adCreateStartDate): self
    {
        $this->adCreateStartDate = $adCreateStartDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getAdModifyTime(): ?string
    {
        return $this->adModifyTime;
    }

    /**
     * @param string $adModifyTime
     * @return self
     */
    public function setAdModifyTime(?string $adModifyTime): self
    {
        $this->adModifyTime = $adModifyTime;
        return $this;
    }

    /**
     * @return string
     */
    public function getAdName(): ?string
    {
        return $this->adName;
    }

    /**
     * @param string $adName
     * @return self
     */
    public function setAdName(?string $adName): self
    {
        $this->adName = $adName;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanAdGetV10FilteringAutoManageFilter
     */
    public function getAutoManageFilter(): ?string
    {
        return $this->autoManageFilter;
    }

    /**
     * @param \Oceanengine\Models\QianchuanAdGetV10FilteringAutoManageFilter $autoManageFilter
     * @return self
     */
    public function setAutoManageFilter(?string $autoManageFilter): self
    {
        $this->autoManageFilter = $autoManageFilter;
        return $this;
    }

    /**
     * @return int
     */
    public function getAwemeId(): ?int
    {
        return $this->awemeId;
    }

    /**
     * @param int $awemeId
     * @return self
     */
    public function setAwemeId(?int $awemeId): self
    {
        $this->awemeId = $awemeId;
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
     * @return \Oceanengine\Models\QianchuanAdGetV10FilteringCampaignScene[]
     */
    public function getCampaignScene(): ?array
    {
        return $this->campaignScene;
    }

    /**
     * @param \Oceanengine\Models\QianchuanAdGetV10FilteringCampaignScene[] $campaignScene
     * @return self
     */
    public function setCampaignScene(?array $campaignScene): self
    {
        $this->campaignScene = $campaignScene;
        return $this;
    }

    /**
     * @return int[]
     */
    public function getIds(): ?array
    {
        return $this->ids;
    }

    /**
     * @param int[] $ids
     * @return self
     */
    public function setIds(?array $ids): self
    {
        $this->ids = $ids;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanAdGetV10FilteringMarketingGoal
     */
    public function getMarketingGoal(): ?string
    {
        return $this->marketingGoal;
    }

    /**
     * @param \Oceanengine\Models\QianchuanAdGetV10FilteringMarketingGoal $marketingGoal
     * @return self
     */
    public function setMarketingGoal(?string $marketingGoal): self
    {
        $this->marketingGoal = $marketingGoal;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanAdGetV10FilteringMarketingScene
     */
    public function getMarketingScene(): ?string
    {
        return $this->marketingScene;
    }

    /**
     * @param \Oceanengine\Models\QianchuanAdGetV10FilteringMarketingScene $marketingScene
     * @return self
     */
    public function setMarketingScene(?string $marketingScene): self
    {
        $this->marketingScene = $marketingScene;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanAdGetV10FilteringStatus
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * @param \Oceanengine\Models\QianchuanAdGetV10FilteringStatus $status
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
        if ($this->adCreateEndDate !== null) {
            $result['ad_create_end_date'] = $this->adCreateEndDate;
        }
        if ($this->adCreateStartDate !== null) {
            $result['ad_create_start_date'] = $this->adCreateStartDate;
        }
        if ($this->adModifyTime !== null) {
            $result['ad_modify_time'] = $this->adModifyTime;
        }
        if ($this->adName !== null) {
            $result['ad_name'] = $this->adName;
        }
        if ($this->autoManageFilter !== null) {
            $result['auto_manage_filter'] = $this->autoManageFilter;
        }
        if ($this->awemeId !== null) {
            $result['aweme_id'] = $this->awemeId;
        }
        if ($this->campaignId !== null) {
            $result['campaign_id'] = $this->campaignId;
        }
        if ($this->campaignScene !== null) {
            $result['campaign_scene'] = $this->campaignScene;
        }
        if ($this->ids !== null) {
            $result['ids'] = $this->ids;
        }
        if ($this->marketingGoal !== null) {
            $result['marketing_goal'] = $this->marketingGoal;
        }
        if ($this->marketingScene !== null) {
            $result['marketing_scene'] = $this->marketingScene;
        }
        if ($this->status !== null) {
            $result['status'] = $this->status;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['ad_create_end_date'] ?? null) !== null) {
            $obj->adCreateEndDate = (string) $v;
        }
        if (($v = $data['ad_create_start_date'] ?? null) !== null) {
            $obj->adCreateStartDate = (string) $v;
        }
        if (($v = $data['ad_modify_time'] ?? null) !== null) {
            $obj->adModifyTime = (string) $v;
        }
        if (($v = $data['ad_name'] ?? null) !== null) {
            $obj->adName = (string) $v;
        }
        if (($v = $data['auto_manage_filter'] ?? null) !== null) {
            $obj->autoManageFilter = (string) $v;
        }
        if (($v = $data['aweme_id'] ?? null) !== null) {
            $obj->awemeId = (int) $v;
        }
        if (($v = $data['campaign_id'] ?? null) !== null) {
            $obj->campaignId = (int) $v;
        }
        if (($v = $data['campaign_scene'] ?? null) !== null && is_array($v)) {
            $obj->campaignScene = $v;
        }
        if (($v = $data['ids'] ?? null) !== null && is_array($v)) {
            $obj->ids = $v;
        }
        if (($v = $data['marketing_goal'] ?? null) !== null) {
            $obj->marketingGoal = (string) $v;
        }
        if (($v = $data['marketing_scene'] ?? null) !== null) {
            $obj->marketingScene = (string) $v;
        }
        if (($v = $data['status'] ?? null) !== null) {
            $obj->status = (string) $v;
        }
        return $obj;
    }
}
