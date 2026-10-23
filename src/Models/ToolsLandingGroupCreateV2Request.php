<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsLandingGroupCreateV2Request implements \JsonSerializable
{
    /**
     * 广告主id，范围：1 <= advertiser_id <= MAX_INT64
     * @var int
     */
    protected ?int $advertiserId = null;

    /**
     * @var \Oceanengine\Models\ToolsLandingGroupCreateV2ExperimentSiteType
     */
    protected ?string $experimentSiteType = null;

    /**
     * @var \Oceanengine\Models\ToolsLandingGroupCreateV2GroupFlowType
     */
    protected ?string $groupFlowType = null;

    /**
     * 落地页组名称，范围：1 <= 长度 <= 20
     * @var string
     */
    protected ?string $groupTitle = null;

    /**
     * 橙子建站站点id列表 ：2 <= 长度 <= 10 可通过【获取橙子建站站点列表】获取应答字段list
     * @var string[]
     */
    protected ?array $siteIds = null;

    /**
     * 广告主id，范围：1 <= advertiser_id <= MAX_INT64
     * @return int
     */
    public function getAdvertiserId(): ?int
    {
        return $this->advertiserId;
    }

    /**
     * 广告主id，范围：1 <= advertiser_id <= MAX_INT64
     * @param int $advertiserId
     * @return self
     */
    public function setAdvertiserId(?int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsLandingGroupCreateV2ExperimentSiteType
     */
    public function getExperimentSiteType(): ?string
    {
        return $this->experimentSiteType;
    }

    /**
     * @param \Oceanengine\Models\ToolsLandingGroupCreateV2ExperimentSiteType $experimentSiteType
     * @return self
     */
    public function setExperimentSiteType(?string $experimentSiteType): self
    {
        $this->experimentSiteType = $experimentSiteType;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsLandingGroupCreateV2GroupFlowType
     */
    public function getGroupFlowType(): ?string
    {
        return $this->groupFlowType;
    }

    /**
     * @param \Oceanengine\Models\ToolsLandingGroupCreateV2GroupFlowType $groupFlowType
     * @return self
     */
    public function setGroupFlowType(?string $groupFlowType): self
    {
        $this->groupFlowType = $groupFlowType;
        return $this;
    }

    /**
     * 落地页组名称，范围：1 <= 长度 <= 20
     * @return string
     */
    public function getGroupTitle(): ?string
    {
        return $this->groupTitle;
    }

    /**
     * 落地页组名称，范围：1 <= 长度 <= 20
     * @param string $groupTitle
     * @return self
     */
    public function setGroupTitle(?string $groupTitle): self
    {
        $this->groupTitle = $groupTitle;
        return $this;
    }

    /**
     * 橙子建站站点id列表 ：2 <= 长度 <= 10 可通过【获取橙子建站站点列表】获取应答字段list
     * @return string[]
     */
    public function getSiteIds(): ?array
    {
        return $this->siteIds;
    }

    /**
     * 橙子建站站点id列表 ：2 <= 长度 <= 10 可通过【获取橙子建站站点列表】获取应答字段list
     * @param string[] $siteIds
     * @return self
     */
    public function setSiteIds(?array $siteIds): self
    {
        $this->siteIds = $siteIds;
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
        if ($this->experimentSiteType !== null) {
            $result['experiment_site_type'] = $this->experimentSiteType;
        }
        if ($this->groupFlowType !== null) {
            $result['group_flow_type'] = $this->groupFlowType;
        }
        if ($this->groupTitle !== null) {
            $result['group_title'] = $this->groupTitle;
        }
        if ($this->siteIds !== null) {
            $result['site_ids'] = $this->siteIds;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['advertiser_id'] ?? null) !== null) {
            $obj->advertiserId = (int) $v;
        }
        if (($v = $data['experiment_site_type'] ?? null) !== null) {
            $obj->experimentSiteType = (string) $v;
        }
        if (($v = $data['group_flow_type'] ?? null) !== null) {
            $obj->groupFlowType = (string) $v;
        }
        if (($v = $data['group_title'] ?? null) !== null) {
            $obj->groupTitle = (string) $v;
        }
        if (($v = $data['site_ids'] ?? null) !== null && is_array($v)) {
            $obj->siteIds = $v;
        }
        return $obj;
    }
}
