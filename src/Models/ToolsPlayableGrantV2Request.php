<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsPlayableGrantV2Request implements \JsonSerializable
{
    /**
     * 广告主ID
     * @var int
     */
    protected ?int $advertiserId = null;

    /**
     * 推送的目标（广告主id）列表，一次最多同时推送给50个广告主
     * @var int[]
     */
    protected ?array $grantedIds = null;

    /**
     * 需要推送的试玩素材ID，与playable_url有且仅有一个
     * @var int
     */
    protected ?int $playableId = null;

    /**
     * 需要推送的试玩素材url，与playable_id有且仅有一个
     * @var string
     */
    protected ?string $playableUrl = null;

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
     * 推送的目标（广告主id）列表，一次最多同时推送给50个广告主
     * @return int[]
     */
    public function getGrantedIds(): ?array
    {
        return $this->grantedIds;
    }

    /**
     * 推送的目标（广告主id）列表，一次最多同时推送给50个广告主
     * @param int[] $grantedIds
     * @return self
     */
    public function setGrantedIds(?array $grantedIds): self
    {
        $this->grantedIds = $grantedIds;
        return $this;
    }

    /**
     * 需要推送的试玩素材ID，与playable_url有且仅有一个
     * @return int
     */
    public function getPlayableId(): ?int
    {
        return $this->playableId;
    }

    /**
     * 需要推送的试玩素材ID，与playable_url有且仅有一个
     * @param int $playableId
     * @return self
     */
    public function setPlayableId(?int $playableId): self
    {
        $this->playableId = $playableId;
        return $this;
    }

    /**
     * 需要推送的试玩素材url，与playable_id有且仅有一个
     * @return string
     */
    public function getPlayableUrl(): ?string
    {
        return $this->playableUrl;
    }

    /**
     * 需要推送的试玩素材url，与playable_id有且仅有一个
     * @param string $playableUrl
     * @return self
     */
    public function setPlayableUrl(?string $playableUrl): self
    {
        $this->playableUrl = $playableUrl;
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
        if ($this->grantedIds !== null) {
            $result['granted_ids'] = $this->grantedIds;
        }
        if ($this->playableId !== null) {
            $result['playable_id'] = $this->playableId;
        }
        if ($this->playableUrl !== null) {
            $result['playable_url'] = $this->playableUrl;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['advertiser_id'] ?? null) !== null) {
            $obj->advertiserId = (int) $v;
        }
        if (($v = $data['granted_ids'] ?? null) !== null && is_array($v)) {
            $obj->grantedIds = $v;
        }
        if (($v = $data['playable_id'] ?? null) !== null) {
            $obj->playableId = (int) $v;
        }
        if (($v = $data['playable_url'] ?? null) !== null) {
            $obj->playableUrl = (string) $v;
        }
        return $obj;
    }
}
