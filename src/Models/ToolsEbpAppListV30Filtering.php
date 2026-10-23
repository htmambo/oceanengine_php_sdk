<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsEbpAppListV30Filtering implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\ToolsEbpAppListV30FilteringAssetOwnership
     */
    protected ?string $assetOwnership = null;

    /**
     * @var \Oceanengine\Models\ToolsEbpAppListV30FilteringPublishTime
     */
    protected ?\Oceanengine\Models\ToolsEbpAppListV30FilteringPublishTime $publishTime = null;

    /**
     * @var string
     */
    protected ?string $searchKey = null;

    /**
     * @var \Oceanengine\Models\ToolsEbpAppListV30FilteringStatus
     */
    protected ?string $status = null;

    /**
     * @return \Oceanengine\Models\ToolsEbpAppListV30FilteringAssetOwnership
     */
    public function getAssetOwnership(): ?string
    {
        return $this->assetOwnership;
    }

    /**
     * @param \Oceanengine\Models\ToolsEbpAppListV30FilteringAssetOwnership $assetOwnership
     * @return self
     */
    public function setAssetOwnership(?string $assetOwnership): self
    {
        $this->assetOwnership = $assetOwnership;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsEbpAppListV30FilteringPublishTime
     */
    public function getPublishTime(): ?\Oceanengine\Models\ToolsEbpAppListV30FilteringPublishTime
    {
        return $this->publishTime;
    }

    /**
     * @param \Oceanengine\Models\ToolsEbpAppListV30FilteringPublishTime $publishTime
     * @return self
     */
    public function setPublishTime(?\Oceanengine\Models\ToolsEbpAppListV30FilteringPublishTime $publishTime): self
    {
        $this->publishTime = $publishTime;
        return $this;
    }

    /**
     * @return string
     */
    public function getSearchKey(): ?string
    {
        return $this->searchKey;
    }

    /**
     * @param string $searchKey
     * @return self
     */
    public function setSearchKey(?string $searchKey): self
    {
        $this->searchKey = $searchKey;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsEbpAppListV30FilteringStatus
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * @param \Oceanengine\Models\ToolsEbpAppListV30FilteringStatus $status
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
        if ($this->assetOwnership !== null) {
            $result['asset_ownership'] = $this->assetOwnership;
        }
        if ($this->publishTime !== null) {
            $result['publish_time'] = $this->publishTime;
        }
        if ($this->searchKey !== null) {
            $result['search_key'] = $this->searchKey;
        }
        if ($this->status !== null) {
            $result['status'] = $this->status;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['asset_ownership'] ?? null) !== null) {
            $obj->assetOwnership = (string) $v;
        }
        if (($v = $data['publish_time'] ?? null) !== null && is_array($v)) {
            $obj->publishTime = \Oceanengine\Models\ToolsEbpAppListV30FilteringPublishTime::fromArray($v);
        }
        if (($v = $data['search_key'] ?? null) !== null) {
            $obj->searchKey = (string) $v;
        }
        if (($v = $data['status'] ?? null) !== null) {
            $obj->status = (string) $v;
        }
        return $obj;
    }
}
