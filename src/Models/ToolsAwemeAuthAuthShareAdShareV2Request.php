<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsAwemeAuthAuthShareAdShareV2Request implements \JsonSerializable
{
    /**
     * 广告主账户id
     * @var int
     */
    protected ?int $advertiserId = null;

    /**
     * 共享账号范围，一次最多操作20个
     * @var int[]
     */
    protected ?array $advertiserIds = null;

    /**
     * @var \Oceanengine\Models\ToolsAwemeAuthAuthShareAdShareV2AuthType
     */
    protected ?string $authType = null;

    /**
     * 抖音号
     * @var string
     */
    protected ?string $awemeId = null;

    /**
     * 抖音号视频id
     * @var int
     */
    protected ?int $itemId = null;

    /**
     * 广告主账户id
     * @return int
     */
    public function getAdvertiserId(): ?int
    {
        return $this->advertiserId;
    }

    /**
     * 广告主账户id
     * @param int $advertiserId
     * @return self
     */
    public function setAdvertiserId(?int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    /**
     * 共享账号范围，一次最多操作20个
     * @return int[]
     */
    public function getAdvertiserIds(): ?array
    {
        return $this->advertiserIds;
    }

    /**
     * 共享账号范围，一次最多操作20个
     * @param int[] $advertiserIds
     * @return self
     */
    public function setAdvertiserIds(?array $advertiserIds): self
    {
        $this->advertiserIds = $advertiserIds;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsAwemeAuthAuthShareAdShareV2AuthType
     */
    public function getAuthType(): ?string
    {
        return $this->authType;
    }

    /**
     * @param \Oceanengine\Models\ToolsAwemeAuthAuthShareAdShareV2AuthType $authType
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
     * 抖音号视频id
     * @return int
     */
    public function getItemId(): ?int
    {
        return $this->itemId;
    }

    /**
     * 抖音号视频id
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
        if ($this->advertiserIds !== null) {
            $result['advertiser_ids'] = $this->advertiserIds;
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
        if (($v = $data['advertiser_ids'] ?? null) !== null && is_array($v)) {
            $obj->advertiserIds = $v;
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
