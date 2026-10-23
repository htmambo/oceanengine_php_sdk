<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsPrivativeWordProjectAddV30Request implements \JsonSerializable
{
    /**
     * 广告主id
     * @var int
     */
    protected ?int $advertiserId = null;

    /**
     * 项目列表
     * @var \Oceanengine\Models\ToolsPrivativeWordProjectAddV30RequestProjectListInner[]
     */
    protected ?array $projectList = null;

    /**
     * 广告主id
     * @return int
     */
    public function getAdvertiserId(): ?int
    {
        return $this->advertiserId;
    }

    /**
     * 广告主id
     * @param int $advertiserId
     * @return self
     */
    public function setAdvertiserId(?int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    /**
     * 项目列表
     * @return \Oceanengine\Models\ToolsPrivativeWordProjectAddV30RequestProjectListInner[]
     */
    public function getProjectList(): ?array
    {
        return $this->projectList;
    }

    /**
     * 项目列表
     * @param \Oceanengine\Models\ToolsPrivativeWordProjectAddV30RequestProjectListInner[] $projectList
     * @return self
     */
    public function setProjectList(?array $projectList): self
    {
        $this->projectList = $projectList;
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
        if ($this->projectList !== null) {
            $result['project_list'] = $this->projectList;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['advertiser_id'] ?? null) !== null) {
            $obj->advertiserId = (int) $v;
        }
        if (($v = $data['project_list'] ?? null) !== null && is_array($v)) {
            $obj->projectList = array_map(fn ($vv) => \Oceanengine\Models\ToolsPrivativeWordProjectAddV30RequestProjectListInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
