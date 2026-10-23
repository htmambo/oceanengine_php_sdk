<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsSiteTemplateSiteCreateV2RequestBricksInnerForm implements \JsonSerializable
{
    /**
     * 活动ID，当`coupon`不为空时，必填。用户可以通过[【获取卡券列表】]（https://open.oceanengine.com/doc/index.html?key=ad&type=api&id=1696710639364108#item-link-%E6%A6%82%E5%BF%B5%E4%BB%8B%E7%BB%8D）接口或[【青鸟线索通平台】]（https://clue.oceanengine.com/）获取活动ID
     * @var int
     */
    protected ?int $instanceId = null;

    /**
     * 活动ID，当`coupon`不为空时，必填。用户可以通过[【获取卡券列表】]（https://open.oceanengine.com/doc/index.html?key=ad&type=api&id=1696710639364108#item-link-%E6%A6%82%E5%BF%B5%E4%BB%8B%E7%BB%8D）接口或[【青鸟线索通平台】]（https://clue.oceanengine.com/）获取活动ID
     * @return int
     */
    public function getInstanceId(): ?int
    {
        return $this->instanceId;
    }

    /**
     * 活动ID，当`coupon`不为空时，必填。用户可以通过[【获取卡券列表】]（https://open.oceanengine.com/doc/index.html?key=ad&type=api&id=1696710639364108#item-link-%E6%A6%82%E5%BF%B5%E4%BB%8B%E7%BB%8D）接口或[【青鸟线索通平台】]（https://clue.oceanengine.com/）获取活动ID
     * @param int $instanceId
     * @return self
     */
    public function setInstanceId(?int $instanceId): self
    {
        $this->instanceId = $instanceId;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->instanceId !== null) {
            $result['instance_id'] = $this->instanceId;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['instance_id'] ?? null) !== null) {
            $obj->instanceId = (int) $v;
        }
        return $obj;
    }
}
