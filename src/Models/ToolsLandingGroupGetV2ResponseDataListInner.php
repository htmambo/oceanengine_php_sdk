<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsLandingGroupGetV2ResponseDataListInner implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\ToolsLandingGroupGetV2DataListGroupFlowType
     */
    protected ?string $groupFlowType = null;

    /**
     * @var int
     */
    protected ?int $groupId = null;

    /**
     * @var \Oceanengine\Models\ToolsLandingGroupGetV2DataListGroupStatus
     */
    protected ?string $groupStatus = null;

    /**
     * @var string
     */
    protected ?string $groupTitle = null;

    /**
     * @var string
     */
    protected ?string $groupUrl = null;

    /**
     * @var \Oceanengine\Models\ToolsLandingGroupGetV2ResponseDataListInnerSitesInner[]
     */
    protected ?array $sites = null;

    /**
     * @return \Oceanengine\Models\ToolsLandingGroupGetV2DataListGroupFlowType
     */
    public function getGroupFlowType(): ?string
    {
        return $this->groupFlowType;
    }

    /**
     * @param \Oceanengine\Models\ToolsLandingGroupGetV2DataListGroupFlowType $groupFlowType
     * @return self
     */
    public function setGroupFlowType(?string $groupFlowType): self
    {
        $this->groupFlowType = $groupFlowType;
        return $this;
    }

    /**
     * @return int
     */
    public function getGroupId(): ?int
    {
        return $this->groupId;
    }

    /**
     * @param int $groupId
     * @return self
     */
    public function setGroupId(?int $groupId): self
    {
        $this->groupId = $groupId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsLandingGroupGetV2DataListGroupStatus
     */
    public function getGroupStatus(): ?string
    {
        return $this->groupStatus;
    }

    /**
     * @param \Oceanengine\Models\ToolsLandingGroupGetV2DataListGroupStatus $groupStatus
     * @return self
     */
    public function setGroupStatus(?string $groupStatus): self
    {
        $this->groupStatus = $groupStatus;
        return $this;
    }

    /**
     * @return string
     */
    public function getGroupTitle(): ?string
    {
        return $this->groupTitle;
    }

    /**
     * @param string $groupTitle
     * @return self
     */
    public function setGroupTitle(?string $groupTitle): self
    {
        $this->groupTitle = $groupTitle;
        return $this;
    }

    /**
     * @return string
     */
    public function getGroupUrl(): ?string
    {
        return $this->groupUrl;
    }

    /**
     * @param string $groupUrl
     * @return self
     */
    public function setGroupUrl(?string $groupUrl): self
    {
        $this->groupUrl = $groupUrl;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsLandingGroupGetV2ResponseDataListInnerSitesInner[]
     */
    public function getSites(): ?array
    {
        return $this->sites;
    }

    /**
     * @param \Oceanengine\Models\ToolsLandingGroupGetV2ResponseDataListInnerSitesInner[] $sites
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
            $obj->groupId = (int) $v;
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
            $obj->sites = array_map(fn ($vv) => \Oceanengine\Models\ToolsLandingGroupGetV2ResponseDataListInnerSitesInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
