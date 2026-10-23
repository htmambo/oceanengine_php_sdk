<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsSiteTemplateCreateV2ResponseDataBricksInnerButtonPhoneEvent implements \JsonSerializable
{
    /**
     * 智能电话ID，当phone_event不为空时，有值。用户可以通过[【获取智能电话列表】](https://open.oceanengine.com/doc/index.html?key=ad&type=api&id=1696710644556812 )接口或[【青鸟线索通平台】]（https://clue.oceanengine.com/）获取智能电话ID
     * @var int
     */
    protected ?int $instanceId = null;

    /**
     * 智能电话ID，当phone_event不为空时，有值。用户可以通过[【获取智能电话列表】](https://open.oceanengine.com/doc/index.html?key=ad&type=api&id=1696710644556812 )接口或[【青鸟线索通平台】]（https://clue.oceanengine.com/）获取智能电话ID
     * @return int
     */
    public function getInstanceId(): ?int
    {
        return $this->instanceId;
    }

    /**
     * 智能电话ID，当phone_event不为空时，有值。用户可以通过[【获取智能电话列表】](https://open.oceanengine.com/doc/index.html?key=ad&type=api&id=1696710644556812 )接口或[【青鸟线索通平台】]（https://clue.oceanengine.com/）获取智能电话ID
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
