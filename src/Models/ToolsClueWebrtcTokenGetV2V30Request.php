<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsClueWebrtcTokenGetV2V30Request implements \JsonSerializable
{
    /**
     * 广告主ID
     * @var int
     */
    protected ?int $advertiserId = null;

    /**
     * 客服ID。平台下客服ID不得重复。
     * @var int
     */
    protected ?int $userId = null;

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
     * 客服ID。平台下客服ID不得重复。
     * @return int
     */
    public function getUserId(): ?int
    {
        return $this->userId;
    }

    /**
     * 客服ID。平台下客服ID不得重复。
     * @param int $userId
     * @return self
     */
    public function setUserId(?int $userId): self
    {
        $this->userId = $userId;
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
        if ($this->userId !== null) {
            $result['user_id'] = $this->userId;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['advertiser_id'] ?? null) !== null) {
            $obj->advertiserId = (int) $v;
        }
        if (($v = $data['user_id'] ?? null) !== null) {
            $obj->userId = (int) $v;
        }
        return $obj;
    }
}
