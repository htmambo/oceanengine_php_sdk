<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsLandingGroupCreateV2ResponseData implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\ToolsLandingGroupCreateV2DataGroupFlowType
     */
    protected ?string $groupFlowType = null;

    /**
     * @var string
     */
    protected ?string $groupId = null;

    /**
     * @var \Oceanengine\Models\ToolsLandingGroupCreateV2DataGroupStatus
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
     * @var \Oceanengine\Models\ToolsLandingGroupCreateV2ResponseDataSitesInner[]
     */
    protected ?array $sites = null;

    /**
     * @return \Oceanengine\Models\ToolsLandingGroupCreateV2DataGroupFlowType
     */
    public function getGroupFlowType(): ?string
    {
        return $this->groupFlowType;
    }

    /**
     * @param \Oceanengine\Models\ToolsLandingGroupCreateV2DataGroupFlowType $groupFlowType
     * @return self
     */
    public function setGroupFlowType(?string $groupFlowType): self
    {
        $this->groupFlowType = $groupFlowType;
        return $this;
    }

    /**
     * @return string
     */
    public function getGroupId(): ?string
    {
        return $this->groupId;
    }

    /**
     * @param string $groupId
     * @return self
     */
    public function setGroupId(?string $groupId): self
    {
        $this->groupId = $groupId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsLandingGroupCreateV2DataGroupStatus
     */
    public function getGroupStatus(): ?string
    {
        return $this->groupStatus;
    }

    /**
     * @param \Oceanengine\Models\ToolsLandingGroupCreateV2DataGroupStatus $groupStatus
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
     * @return \Oceanengine\Models\ToolsLandingGroupCreateV2ResponseDataSitesInner[]
     */
    public function getSites(): ?array
    {
        return $this->sites;
    }

    /**
     * @param \Oceanengine\Models\ToolsLandingGroupCreateV2ResponseDataSitesInner[] $sites
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
            $obj->sites = array_map(fn ($vv) => \Oceanengine\Models\ToolsLandingGroupCreateV2ResponseDataSitesInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
