<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsClueRefundInfoQueryV2Request implements \JsonSerializable
{
    /**
     * 广告主ID
     * @var int
     */
    protected ?int $advertiserId = null;

    /**
     * 线索ID
     * @var int[]
     */
    protected ?array $clueIds = null;

    /**
     * 广告主ID
     * @return int
     */
    public function getAdvertiserId(): ?int
    {
        return $this->advertiserId;
    }

    /**
     * 广告主ID
     * @param int $advertiserId
     * @return self
     */
    public function setAdvertiserId(?int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    /**
     * 线索ID
     * @return int[]
     */
    public function getClueIds(): ?array
    {
        return $this->clueIds;
    }

    /**
     * 线索ID
     * @param int[] $clueIds
     * @return self
     */
    public function setClueIds(?array $clueIds): self
    {
        $this->clueIds = $clueIds;
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
        if ($this->clueIds !== null) {
            $result['clue_ids'] = $this->clueIds;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['advertiser_id'] ?? null) !== null) {
            $obj->advertiserId = (int) $v;
        }
        if (($v = $data['clue_ids'] ?? null) !== null && is_array($v)) {
            $obj->clueIds = $v;
        }
        return $obj;
    }
}
