<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarOrderRejectResourceV2Request implements \JsonSerializable
{
    /**
     * 反馈信息 100字内
     * @var string
     */
    protected ?string $feedbackContent = null;

    /**
     * 任务ID
     * @var int
     */
    protected ?int $orderId = null;

    /**
     * 产出物ID
     * @var int
     */
    protected ?int $resourceId = null;

    /**
     * 产出物类型 仅限以下 (2)：脚本 (3)：视频
     * @var int
     */
    protected ?int $resourceType = null;

    /**
     * 星图客户ID
     * @var int
     */
    protected ?int $starId = null;

    /**
     * 反馈信息 100字内
     * @return string
     */
    public function getFeedbackContent(): ?string
    {
        return $this->feedbackContent;
    }

    /**
     * 反馈信息 100字内
     * @param string $feedbackContent
     * @return self
     */
    public function setFeedbackContent(?string $feedbackContent): self
    {
        $this->feedbackContent = $feedbackContent;
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
     * 产出物ID
     * @return int
     */
    public function getResourceId(): ?int
    {
        return $this->resourceId;
    }

    /**
     * 产出物ID
     * @param int $resourceId
     * @return self
     */
    public function setResourceId(?int $resourceId): self
    {
        $this->resourceId = $resourceId;
        return $this;
    }

    /**
     * 产出物类型 仅限以下 (2)：脚本 (3)：视频
     * @return int
     */
    public function getResourceType(): ?int
    {
        return $this->resourceType;
    }

    /**
     * 产出物类型 仅限以下 (2)：脚本 (3)：视频
     * @param int $resourceType
     * @return self
     */
    public function setResourceType(?int $resourceType): self
    {
        $this->resourceType = $resourceType;
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
        if ($this->feedbackContent !== null) {
            $result['feedback_content'] = $this->feedbackContent;
        }
        if ($this->orderId !== null) {
            $result['order_id'] = $this->orderId;
        }
        if ($this->resourceId !== null) {
            $result['resource_id'] = $this->resourceId;
        }
        if ($this->resourceType !== null) {
            $result['resource_type'] = $this->resourceType;
        }
        if ($this->starId !== null) {
            $result['star_id'] = $this->starId;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['feedback_content'] ?? null) !== null) {
            $obj->feedbackContent = (string) $v;
        }
        if (($v = $data['order_id'] ?? null) !== null) {
            $obj->orderId = (int) $v;
        }
        if (($v = $data['resource_id'] ?? null) !== null) {
            $obj->resourceId = (int) $v;
        }
        if (($v = $data['resource_type'] ?? null) !== null) {
            $obj->resourceType = (int) $v;
        }
        if (($v = $data['star_id'] ?? null) !== null) {
            $obj->starId = (int) $v;
        }
        return $obj;
    }
}
