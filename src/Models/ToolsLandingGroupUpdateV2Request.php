<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsLandingGroupUpdateV2Request implements \JsonSerializable
{
    /**
     * 广告主id，范围：1 <= advertiser_id <= MAX_INT64
     * @var int
     */
    protected ?int $advertiserId = null;

    /**
     * 新加站点列表
     * @var string[]
     */
    protected ?array $appendSites = null;

    /**
     * 落地页组 ID
     * @var string
     */
    protected ?string $groupId = null;

    /**
     * 落地页组名称
     * @var string
     */
    protected ?string $groupTitle = null;

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
     * 新加站点列表
     * @return string[]
     */
    public function getAppendSites(): ?array
    {
        return $this->appendSites;
    }

    /**
     * 新加站点列表
     * @param string[] $appendSites
     * @return self
     */
    public function setAppendSites(?array $appendSites): self
    {
        $this->appendSites = $appendSites;
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
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->advertiserId !== null) {
            $result['advertiser_id'] = $this->advertiserId;
        }
        if ($this->appendSites !== null) {
            $result['append_sites'] = $this->appendSites;
        }
        if ($this->groupId !== null) {
            $result['group_id'] = $this->groupId;
        }
        if ($this->groupTitle !== null) {
            $result['group_title'] = $this->groupTitle;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['advertiser_id'] ?? null) !== null) {
            $obj->advertiserId = (int) $v;
        }
        if (($v = $data['append_sites'] ?? null) !== null && is_array($v)) {
            $obj->appendSites = $v;
        }
        if (($v = $data['group_id'] ?? null) !== null) {
            $obj->groupId = (string) $v;
        }
        if (($v = $data['group_title'] ?? null) !== null) {
            $obj->groupTitle = (string) $v;
        }
        return $obj;
    }
}
