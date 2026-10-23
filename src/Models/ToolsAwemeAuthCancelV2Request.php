<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsAwemeAuthCancelV2Request implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $advertiserId = null;

    /**
     * @var \Oceanengine\Models\ToolsAwemeAuthCancelV2AuthType
     */
    protected ?string $authType = null;

    /**
     * 抖音号
     * @var string
     */
    protected ?string $awemeId = null;

    /**
     * 抖音短视频ID
     * @var int
     */
    protected ?int $itemId = null;

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
     * @return \Oceanengine\Models\ToolsAwemeAuthCancelV2AuthType
     */
    public function getAuthType(): ?string
    {
        return $this->authType;
    }

    /**
     * @param \Oceanengine\Models\ToolsAwemeAuthCancelV2AuthType $authType
     * @return self
     */
    public function setAuthType(?string $authType): self
    {
        $this->authType = $authType;
        return $this;
    }

    /**
     * 抖音号
     * @return string
     */
    public function getAwemeId(): ?string
    {
        return $this->awemeId;
    }

    /**
     * 抖音号
     * @param string $awemeId
     * @return self
     */
    public function setAwemeId(?string $awemeId): self
    {
        $this->awemeId = $awemeId;
        return $this;
    }

    /**
     * 抖音短视频ID
     * @return int
     */
    public function getItemId(): ?int
    {
        return $this->itemId;
    }

    /**
     * 抖音短视频ID
     * @param int $itemId
     * @return self
     */
    public function setItemId(?int $itemId): self
    {
        $this->itemId = $itemId;
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
        if ($this->authType !== null) {
            $result['auth_type'] = $this->authType;
        }
        if ($this->awemeId !== null) {
            $result['aweme_id'] = $this->awemeId;
        }
        if ($this->itemId !== null) {
            $result['item_id'] = $this->itemId;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['advertiser_id'] ?? null) !== null) {
            $obj->advertiserId = (int) $v;
        }
        if (($v = $data['auth_type'] ?? null) !== null) {
            $obj->authType = (string) $v;
        }
        if (($v = $data['aweme_id'] ?? null) !== null) {
            $obj->awemeId = (string) $v;
        }
        if (($v = $data['item_id'] ?? null) !== null) {
            $obj->itemId = (int) $v;
        }
        return $obj;
    }
}
