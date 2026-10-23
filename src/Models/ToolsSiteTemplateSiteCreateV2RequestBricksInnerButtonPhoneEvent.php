<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsSiteTemplateSiteCreateV2RequestBricksInnerButtonPhoneEvent implements \JsonSerializable
{
    /**
     * 智能电话组件ID，用户可以通过[【创建智能电话】](https://open.oceanengine.com/doc/index.html?key=ad&type=api&id=1696710643975180#item-link-%E8%AF%B7%E6%B1%82%E5%9C%B0%E5%9D%80)接口或[【青鸟线索通平台】]（https://clue.oceanengine.com/）创建智能电话组件
     * @var int
     */
    protected ?int $instanceId = null;

    /**
     * 智能电话组件ID，用户可以通过[【创建智能电话】](https://open.oceanengine.com/doc/index.html?key=ad&type=api&id=1696710643975180#item-link-%E8%AF%B7%E6%B1%82%E5%9C%B0%E5%9D%80)接口或[【青鸟线索通平台】]（https://clue.oceanengine.com/）创建智能电话组件
     * @return int
     */
    public function getInstanceId(): ?int
    {
        return $this->instanceId;
    }

    /**
     * 智能电话组件ID，用户可以通过[【创建智能电话】](https://open.oceanengine.com/doc/index.html?key=ad&type=api&id=1696710643975180#item-link-%E8%AF%B7%E6%B1%82%E5%9C%B0%E5%9D%80)接口或[【青鸟线索通平台】]（https://clue.oceanengine.com/）创建智能电话组件
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
