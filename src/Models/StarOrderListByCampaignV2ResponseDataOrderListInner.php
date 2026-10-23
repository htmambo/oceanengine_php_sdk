<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarOrderListByCampaignV2ResponseDataOrderListInner implements \JsonSerializable
{
    /**
     * 达人ID
     * @var int
     */
    protected ?int $authorId = null;

    /**
     * 达人昵称
     * @var string
     */
    protected ?string $authorName = null;

    /**
     * 达人头像
     * @var string
     */
    protected ?string $avatarUri = null;

    /**
     * 需求ID
     * @var int
     */
    protected ?int $campaignId = null;

    /**
     * 任务创建时间 unix timestamp
     * @var int
     */
    protected ?int $createTime = null;

    /**
     * 任务ID
     * @var int
     */
    protected ?int $demandId = null;

    /**
     * 任务ID
     * @var int
     */
    protected ?int $orderId = null;

    /**
     * 任务状态 待接收 = -1 达人已接单 = 1 已关闭 = 2 已完成 = 3 已取消 = 4 待付尾款 = 10 脚本已上传 = 41 脚本已拒绝 = 42 脚本已确认 = 43 脚本已跳过 = 44 视频已上传 = 51 视频已拒绝 = 52 视频已确认 = 53 视频已发布 = 54
     * @var int
     */
    protected ?int $orderStatus = null;

    /**
     * 达人ID
     * @return int
     */
    public function getAuthorId(): ?int
    {
        return $this->authorId;
    }

    /**
     * 达人ID
     * @param int $authorId
     * @return self
     */
    public function setAuthorId(?int $authorId): self
    {
        $this->authorId = $authorId;
        return $this;
    }

    /**
     * 达人昵称
     * @return string
     */
    public function getAuthorName(): ?string
    {
        return $this->authorName;
    }

    /**
     * 达人昵称
     * @param string $authorName
     * @return self
     */
    public function setAuthorName(?string $authorName): self
    {
        $this->authorName = $authorName;
        return $this;
    }

    /**
     * 达人头像
     * @return string
     */
    public function getAvatarUri(): ?string
    {
        return $this->avatarUri;
    }

    /**
     * 达人头像
     * @param string $avatarUri
     * @return self
     */
    public function setAvatarUri(?string $avatarUri): self
    {
        $this->avatarUri = $avatarUri;
        return $this;
    }

    /**
     * 需求ID
     * @return int
     */
    public function getCampaignId(): ?int
    {
        return $this->campaignId;
    }

    /**
     * 需求ID
     * @param int $campaignId
     * @return self
     */
    public function setCampaignId(?int $campaignId): self
    {
        $this->campaignId = $campaignId;
        return $this;
    }

    /**
     * 任务创建时间 unix timestamp
     * @return int
     */
    public function getCreateTime(): ?int
    {
        return $this->createTime;
    }

    /**
     * 任务创建时间 unix timestamp
     * @param int $createTime
     * @return self
     */
    public function setCreateTime(?int $createTime): self
    {
        $this->createTime = $createTime;
        return $this;
    }

    /**
     * 任务ID
     * @return int
     */
    public function getDemandId(): ?int
    {
        return $this->demandId;
    }

    /**
     * 任务ID
     * @param int $demandId
     * @return self
     */
    public function setDemandId(?int $demandId): self
    {
        $this->demandId = $demandId;
        return $this;
    }

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
     * 任务状态 待接收 = -1 达人已接单 = 1 已关闭 = 2 已完成 = 3 已取消 = 4 待付尾款 = 10 脚本已上传 = 41 脚本已拒绝 = 42 脚本已确认 = 43 脚本已跳过 = 44 视频已上传 = 51 视频已拒绝 = 52 视频已确认 = 53 视频已发布 = 54
     * @return int
     */
    public function getOrderStatus(): ?int
    {
        return $this->orderStatus;
    }

    /**
     * 任务状态 待接收 = -1 达人已接单 = 1 已关闭 = 2 已完成 = 3 已取消 = 4 待付尾款 = 10 脚本已上传 = 41 脚本已拒绝 = 42 脚本已确认 = 43 脚本已跳过 = 44 视频已上传 = 51 视频已拒绝 = 52 视频已确认 = 53 视频已发布 = 54
     * @param int $orderStatus
     * @return self
     */
    public function setOrderStatus(?int $orderStatus): self
    {
        $this->orderStatus = $orderStatus;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->authorId !== null) {
            $result['author_id'] = $this->authorId;
        }
        if ($this->authorName !== null) {
            $result['author_name'] = $this->authorName;
        }
        if ($this->avatarUri !== null) {
            $result['avatar_uri'] = $this->avatarUri;
        }
        if ($this->campaignId !== null) {
            $result['campaign_id'] = $this->campaignId;
        }
        if ($this->createTime !== null) {
            $result['create_time'] = $this->createTime;
        }
        if ($this->demandId !== null) {
            $result['demand_id'] = $this->demandId;
        }
        if ($this->orderId !== null) {
            $result['order_id'] = $this->orderId;
        }
        if ($this->orderStatus !== null) {
            $result['order_status'] = $this->orderStatus;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['author_id'] ?? null) !== null) {
            $obj->authorId = (int) $v;
        }
        if (($v = $data['author_name'] ?? null) !== null) {
            $obj->authorName = (string) $v;
        }
        if (($v = $data['avatar_uri'] ?? null) !== null) {
            $obj->avatarUri = (string) $v;
        }
        if (($v = $data['campaign_id'] ?? null) !== null) {
            $obj->campaignId = (int) $v;
        }
        if (($v = $data['create_time'] ?? null) !== null) {
            $obj->createTime = (int) $v;
        }
        if (($v = $data['demand_id'] ?? null) !== null) {
            $obj->demandId = (int) $v;
        }
        if (($v = $data['order_id'] ?? null) !== null) {
            $obj->orderId = (int) $v;
        }
        if (($v = $data['order_status'] ?? null) !== null) {
            $obj->orderStatus = (int) $v;
        }
        return $obj;
    }
}
