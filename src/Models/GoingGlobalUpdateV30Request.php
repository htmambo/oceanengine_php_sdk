<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class GoingGlobalUpdateV30Request implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $advertiserId = null;

    /**
     * @var \Oceanengine\Models\GoingGlobalUpdateV30RequestProjectListInner[]
     */
    protected ?array $projectList = null;

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
     * @return \Oceanengine\Models\GoingGlobalUpdateV30RequestProjectListInner[]
     */
    public function getProjectList(): ?array
    {
        return $this->projectList;
    }

    /**
     * @param \Oceanengine\Models\GoingGlobalUpdateV30RequestProjectListInner[] $projectList
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
            $obj->projectList = array_map(fn ($vv) => \Oceanengine\Models\GoingGlobalUpdateV30RequestProjectListInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
