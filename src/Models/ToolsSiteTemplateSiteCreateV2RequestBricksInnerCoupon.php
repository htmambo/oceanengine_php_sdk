<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsSiteTemplateSiteCreateV2RequestBricksInnerCoupon implements \JsonSerializable
{
    /**
     * 活动ID，当`coupon`不为空时，必填。用户可以通过[【获取卡券列表】]（https://open.oceanengine.com/doc/index.html?key=ad&type=api&id=1696710639364108#item-link-%E6%A6%82%E5%BF%B5%E4%BB%8B%E7%BB%8D）接口或[【青鸟线索通平台】]（https://clue.oceanengine.com/）获取活动ID
     * @var int
     */
    protected ?int $activityId = null;

    /**
     * 活动ID，当`coupon`不为空时，必填。用户可以通过[【获取卡券列表】]（https://open.oceanengine.com/doc/index.html?key=ad&type=api&id=1696710639364108#item-link-%E6%A6%82%E5%BF%B5%E4%BB%8B%E7%BB%8D）接口或[【青鸟线索通平台】]（https://clue.oceanengine.com/）获取活动ID
     * @return int
     */
    public function getActivityId(): ?int
    {
        return $this->activityId;
    }

    /**
     * 活动ID，当`coupon`不为空时，必填。用户可以通过[【获取卡券列表】]（https://open.oceanengine.com/doc/index.html?key=ad&type=api&id=1696710639364108#item-link-%E6%A6%82%E5%BF%B5%E4%BB%8B%E7%BB%8D）接口或[【青鸟线索通平台】]（https://clue.oceanengine.com/）获取活动ID
     * @param int $activityId
     * @return self
     */
    public function setActivityId(?int $activityId): self
    {
        $this->activityId = $activityId;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->activityId !== null) {
            $result['activity_id'] = $this->activityId;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['activity_id'] ?? null) !== null) {
            $obj->activityId = (int) $v;
        }
        return $obj;
    }
}
