<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ReportProductAsyncTaskGetV30Request implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $advertiserId = null;

    /**
     * @var \Oceanengine\Models\ReportProductAsyncTaskGetV30RequestFiltering
     */
    protected ?\Oceanengine\Models\ReportProductAsyncTaskGetV30RequestFiltering $filtering = null;

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
     * @return \Oceanengine\Models\ReportProductAsyncTaskGetV30RequestFiltering
     */
    public function getFiltering(): ?\Oceanengine\Models\ReportProductAsyncTaskGetV30RequestFiltering
    {
        return $this->filtering;
    }

    /**
     * @param \Oceanengine\Models\ReportProductAsyncTaskGetV30RequestFiltering $filtering
     * @return self
     */
    public function setFiltering(?\Oceanengine\Models\ReportProductAsyncTaskGetV30RequestFiltering $filtering): self
    {
        $this->filtering = $filtering;
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
        if ($this->filtering !== null) {
            $result['filtering'] = $this->filtering;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['advertiser_id'] ?? null) !== null) {
            $obj->advertiserId = (int) $v;
        }
        if (($v = $data['filtering'] ?? null) !== null && is_array($v)) {
            $obj->filtering = \Oceanengine\Models\ReportProductAsyncTaskGetV30RequestFiltering::fromArray($v);
        }
        return $obj;
    }
}
