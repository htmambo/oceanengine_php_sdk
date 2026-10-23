<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarOrderPushResourceV2Request implements \JsonSerializable
{
    /**
     * 任务ID
     * @var int
     */
    protected ?int $orderId = null;

    /**
     * 推送账户ID
     * @var int[]
     */
    protected ?array $pushAccountIds = null;

    /**
     * 推送目标平台 仅限以下 (1)：巨量引擎
     * @var int
     */
    protected ?int $pushPlatform = null;

    /**
     * 星图客户ID
     * @var int
     */
    protected ?int $starId = null;

    /**
     * 任务ID
     * @return int
     */
    public function getOrderId(): ?int
    {
        return $this->orderId;
    }

    /**
     * 任务ID
     * @param int $orderId
     * @return self
     */
    public function setOrderId(?int $orderId): self
    {
        $this->orderId = $orderId;
        return $this;
    }

    /**
     * 推送账户ID
     * @return int[]
     */
    public function getPushAccountIds(): ?array
    {
        return $this->pushAccountIds;
    }

    /**
     * 推送账户ID
     * @param int[] $pushAccountIds
     * @return self
     */
    public function setPushAccountIds(?array $pushAccountIds): self
    {
        $this->pushAccountIds = $pushAccountIds;
        return $this;
    }

    /**
     * 推送目标平台 仅限以下 (1)：巨量引擎
     * @return int
     */
    public function getPushPlatform(): ?int
    {
        return $this->pushPlatform;
    }

    /**
     * 推送目标平台 仅限以下 (1)：巨量引擎
     * @param int $pushPlatform
     * @return self
     */
    public function setPushPlatform(?int $pushPlatform): self
    {
        $this->pushPlatform = $pushPlatform;
        return $this;
    }

    /**
     * 星图客户ID
     * @return int
     */
    public function getStarId(): ?int
    {
        return $this->starId;
    }

    /**
     * 星图客户ID
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
        if ($this->orderId !== null) {
            $result['order_id'] = $this->orderId;
        }
        if ($this->pushAccountIds !== null) {
            $result['push_account_ids'] = $this->pushAccountIds;
        }
        if ($this->pushPlatform !== null) {
            $result['push_platform'] = $this->pushPlatform;
        }
        if ($this->starId !== null) {
            $result['star_id'] = $this->starId;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['order_id'] ?? null) !== null) {
            $obj->orderId = (int) $v;
        }
        if (($v = $data['push_account_ids'] ?? null) !== null && is_array($v)) {
            $obj->pushAccountIds = $v;
        }
        if (($v = $data['push_platform'] ?? null) !== null) {
            $obj->pushPlatform = (int) $v;
        }
        if (($v = $data['star_id'] ?? null) !== null) {
            $obj->starId = (int) $v;
        }
        return $obj;
    }
}
