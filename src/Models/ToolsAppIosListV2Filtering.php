<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsAppIosListV2Filtering implements \JsonSerializable
{
    /**
     * @var string
     */
    protected ?string $searchKey = null;

    /**
     * @var \Oceanengine\Models\ToolsAppIosListV2FilteringStatus
     */
    protected ?string $status = null;

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
     * @return \Oceanengine\Models\ToolsAppIosListV2FilteringStatus
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * @param \Oceanengine\Models\ToolsAppIosListV2FilteringStatus $status
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
        if (($v = $data['search_key'] ?? null) !== null) {
            $obj->searchKey = (string) $v;
        }
        if (($v = $data['status'] ?? null) !== null) {
            $obj->status = (string) $v;
        }
        return $obj;
    }
}
