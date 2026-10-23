<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarChallengeSyncItemToAdV2Request implements \JsonSerializable
{
    /**
     * 广告主ID
     * @var int[]
     */
    protected ?array $advIds = null;

    /**
     * 任务ID
     * @var int
     */
    protected ?int $challengeId = null;

    /**
     * 视频ID
     * @var int[]
     */
    protected ?array $itemIds = null;

    /**
     * 仅推送平台：1-巨量平台 - 竞价广告，7-本地推
     * @var int
     */
    protected ?int $materialPlatform = null;

    /**
     * @var int
     */
    protected ?int $starId = null;

    /**
     * 广告主ID
     * @return int[]
     */
    public function getAdvIds(): ?array
    {
        return $this->advIds;
    }

    /**
     * 广告主ID
     * @param int[] $advIds
     * @return self
     */
    public function setAdvIds(?array $advIds): self
    {
        $this->advIds = $advIds;
        return $this;
    }

    /**
     * 任务ID
     * @return int
     */
    public function getChallengeId(): ?int
    {
        return $this->challengeId;
    }

    /**
     * 任务ID
     * @param int $challengeId
     * @return self
     */
    public function setChallengeId(?int $challengeId): self
    {
        $this->challengeId = $challengeId;
        return $this;
    }

    /**
     * 视频ID
     * @return int[]
     */
    public function getItemIds(): ?array
    {
        return $this->itemIds;
    }

    /**
     * 视频ID
     * @param int[] $itemIds
     * @return self
     */
    public function setItemIds(?array $itemIds): self
    {
        $this->itemIds = $itemIds;
        return $this;
    }

    /**
     * 仅推送平台：1-巨量平台 - 竞价广告，7-本地推
     * @return int
     */
    public function getMaterialPlatform(): ?int
    {
        return $this->materialPlatform;
    }

    /**
     * 仅推送平台：1-巨量平台 - 竞价广告，7-本地推
     * @param int $materialPlatform
     * @return self
     */
    public function setMaterialPlatform(?int $materialPlatform): self
    {
        $this->materialPlatform = $materialPlatform;
        return $this;
    }

    /**
     * @return int
     */
    public function getStarId(): ?int
    {
        return $this->starId;
    }

    /**
     * @param int $starId
     * @return self
     */
    public function setStarId(?int $starId): self
    {
        $this->starId = $starId;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->advIds !== null) {
            $result['adv_ids'] = $this->advIds;
        }
        if ($this->challengeId !== null) {
            $result['challenge_id'] = $this->challengeId;
        }
        if ($this->itemIds !== null) {
            $result['item_ids'] = $this->itemIds;
        }
        if ($this->materialPlatform !== null) {
            $result['material_platform'] = $this->materialPlatform;
        }
        if ($this->starId !== null) {
            $result['star_id'] = $this->starId;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['adv_ids'] ?? null) !== null && is_array($v)) {
            $obj->advIds = $v;
        }
        if (($v = $data['challenge_id'] ?? null) !== null) {
            $obj->challengeId = (int) $v;
        }
        if (($v = $data['item_ids'] ?? null) !== null && is_array($v)) {
            $obj->itemIds = $v;
        }
        if (($v = $data['material_platform'] ?? null) !== null) {
            $obj->materialPlatform = (int) $v;
        }
        if (($v = $data['star_id'] ?? null) !== null) {
            $obj->starId = (int) $v;
        }
        return $obj;
    }
}
