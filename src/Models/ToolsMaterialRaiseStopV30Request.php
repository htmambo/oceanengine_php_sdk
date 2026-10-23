<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsMaterialRaiseStopV30Request implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $advertiserId = null;

    /**
     * 起量任务id
     * @var int
     */
    protected ?int $recordId = null;

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
     * 起量任务id
     * @return int
     */
    public function getRecordId(): ?int
    {
        return $this->recordId;
    }

    /**
     * 起量任务id
     * @param int $recordId
     * @return self
     */
    public function setRecordId(?int $recordId): self
    {
        $this->recordId = $recordId;
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
        if ($this->recordId !== null) {
            $result['record_id'] = $this->recordId;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['advertiser_id'] ?? null) !== null) {
            $obj->advertiserId = (int) $v;
        }
        if (($v = $data['record_id'] ?? null) !== null) {
            $obj->recordId = (int) $v;
        }
        return $obj;
    }
}
