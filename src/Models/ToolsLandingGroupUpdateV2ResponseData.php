<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsLandingGroupUpdateV2ResponseData implements \JsonSerializable
{
    /**
     * 流量分配方式。
     * @var string
     */
    protected ?string $groupFlowType = null;

    /**
     * 落地页组 ID
     * @var string
     */
    protected ?string $groupId = null;

    /**
     * 落地页组状态。
     * @var string
     */
    protected ?string $groupStatus = null;

    /**
     * 落地页组名称
     * @var string
     */
    protected ?string $groupTitle = null;

    /**
     * 落地页组 URL
     * @var string
     */
    protected ?string $groupUrl = null;

    /**
     * 站点列表
     * @var \Oceanengine\Models\ToolsLandingGroupUpdateV2ResponseDataSitesInner[]
     */
    protected ?array $sites = null;

    /**
     * 流量分配方式。
     * @return string
     */
    public function getGroupFlowType(): ?string
    {
        return $this->groupFlowType;
    }

    /**
     * 流量分配方式。
     * @param string $groupFlowType
     * @return self
     */
    public function setGroupFlowType(?string $groupFlowType): self
    {
        $this->groupFlowType = $groupFlowType;
        return $this;
    }

    /**
     * 落地页组 ID
     * @return string
     */
    public function getGroupId(): ?string
    {
        return $this->groupId;
    }

    /**
     * 落地页组 ID
     * @param string $groupId
     * @return self
     */
    public function setGroupId(?string $groupId): self
    {
        $this->groupId = $groupId;
        return $this;
    }

    /**
     * 落地页组状态。
     * @return string
     */
    public function getGroupStatus(): ?string
    {
        return $this->groupStatus;
    }

    /**
     * 落地页组状态。
     * @param string $groupStatus
     * @return self
     */
    public function setGroupStatus(?string $groupStatus): self
    {
        $this->groupStatus = $groupStatus;
        return $this;
    }

    /**
     * 落地页组名称
     * @return string
     */
    public function getGroupTitle(): ?string
    {
        return $this->groupTitle;
    }

    /**
     * 落地页组名称
     * @param string $groupTitle
     * @return self
     */
    public function setGroupTitle(?string $groupTitle): self
    {
        $this->groupTitle = $groupTitle;
        return $this;
    }

    /**
     * 落地页组 URL
     * @return string
     */
    public function getGroupUrl(): ?string
    {
        return $this->groupUrl;
    }

    /**
     * 落地页组 URL
     * @param string $groupUrl
     * @return self
     */
    public function setGroupUrl(?string $groupUrl): self
    {
        $this->groupUrl = $groupUrl;
        return $this;
    }

    /**
     * 站点列表
     * @return \Oceanengine\Models\ToolsLandingGroupUpdateV2ResponseDataSitesInner[]
     */
    public function getSites(): ?array
    {
        return $this->sites;
    }

    /**
     * 站点列表
     * @param \Oceanengine\Models\ToolsLandingGroupUpdateV2ResponseDataSitesInner[] $sites
     * @return self
     */
    public function setSites(?array $sites): self
    {
        $this->sites = $sites;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->groupFlowType !== null) {
            $result['group_flow_type'] = $this->groupFlowType;
        }
        if ($this->groupId !== null) {
            $result['group_id'] = $this->groupId;
        }
        if ($this->groupStatus !== null) {
            $result['group_status'] = $this->groupStatus;
        }
        if ($this->groupTitle !== null) {
            $result['group_title'] = $this->groupTitle;
        }
        if ($this->groupUrl !== null) {
            $result['group_url'] = $this->groupUrl;
        }
        if ($this->sites !== null) {
            $result['sites'] = $this->sites;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['group_flow_type'] ?? null) !== null) {
            $obj->groupFlowType = (string) $v;
        }
        if (($v = $data['group_id'] ?? null) !== null) {
            $obj->groupId = (string) $v;
        }
        if (($v = $data['group_status'] ?? null) !== null) {
            $obj->groupStatus = (string) $v;
        }
        if (($v = $data['group_title'] ?? null) !== null) {
            $obj->groupTitle = (string) $v;
        }
        if (($v = $data['group_url'] ?? null) !== null) {
            $obj->groupUrl = (string) $v;
        }
        if (($v = $data['sites'] ?? null) !== null && is_array($v)) {
            $obj->sites = array_map(fn ($vv) => \Oceanengine\Models\ToolsLandingGroupUpdateV2ResponseDataSitesInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
