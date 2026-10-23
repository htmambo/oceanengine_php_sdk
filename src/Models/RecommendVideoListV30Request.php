<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class RecommendVideoListV30Request implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $advertiserId = null;

    /**
     * 抖音号id
     * @var string[]
     */
    protected ?array $awemeId = null;

    /**
     * @var int
     */
    protected ?int $projectId = null;

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
     * 抖音号id
     * @return string[]
     */
    public function getAwemeId(): ?array
    {
        return $this->awemeId;
    }

    /**
     * 抖音号id
     * @param string[] $awemeId
     * @return self
     */
    public function setAwemeId(?array $awemeId): self
    {
        $this->awemeId = $awemeId;
        return $this;
    }

    /**
     * @return int
     */
    public function getProjectId(): ?int
    {
        return $this->projectId;
    }

    /**
     * @param int $projectId
     * @return self
     */
    public function setProjectId(?int $projectId): self
    {
        $this->projectId = $projectId;
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
        if ($this->awemeId !== null) {
            $result['aweme_id'] = $this->awemeId;
        }
        if ($this->projectId !== null) {
            $result['project_id'] = $this->projectId;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['advertiser_id'] ?? null) !== null) {
            $obj->advertiserId = (int) $v;
        }
        if (($v = $data['aweme_id'] ?? null) !== null && is_array($v)) {
            $obj->awemeId = $v;
        }
        if (($v = $data['project_id'] ?? null) !== null) {
            $obj->projectId = (int) $v;
        }
        return $obj;
    }
}
