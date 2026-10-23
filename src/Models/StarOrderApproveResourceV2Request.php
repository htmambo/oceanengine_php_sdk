<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarOrderApproveResourceV2Request implements \JsonSerializable
{
    /**
     * 视频同步广告决策 不传或传0：判断所有审核结果，均通过时才可确认视频。 1：除内容审核外的审核渠道结果为不通过，可以用此参数放弃广告投放，继续发布视频。 2：除内容审核外的审核渠道结果为审核中，可以用此参数先行确认视频进行发布。若其他审核渠道结果为不通过，则无法进行广告投放。
     * @var int
     */
    protected ?int $adSyncDecision = null;

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
     * 视频同步广告决策 不传或传0：判断所有审核结果，均通过时才可确认视频。 1：除内容审核外的审核渠道结果为不通过，可以用此参数放弃广告投放，继续发布视频。 2：除内容审核外的审核渠道结果为审核中，可以用此参数先行确认视频进行发布。若其他审核渠道结果为不通过，则无法进行广告投放。
     * @return int
     */
    public function getAdSyncDecision(): ?int
    {
        return $this->adSyncDecision;
    }

    /**
     * 视频同步广告决策 不传或传0：判断所有审核结果，均通过时才可确认视频。 1：除内容审核外的审核渠道结果为不通过，可以用此参数放弃广告投放，继续发布视频。 2：除内容审核外的审核渠道结果为审核中，可以用此参数先行确认视频进行发布。若其他审核渠道结果为不通过，则无法进行广告投放。
     * @param int $adSyncDecision
     * @return self
     */
    public function setAdSyncDecision(?int $adSyncDecision): self
    {
        $this->adSyncDecision = $adSyncDecision;
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
        if ($this->adSyncDecision !== null) {
            $result['ad_sync_decision'] = $this->adSyncDecision;
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
        if (($v = $data['ad_sync_decision'] ?? null) !== null) {
            $obj->adSyncDecision = (int) $v;
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
