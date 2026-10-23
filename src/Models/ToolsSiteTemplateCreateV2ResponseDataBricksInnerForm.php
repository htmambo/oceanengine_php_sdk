<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsSiteTemplateCreateV2ResponseDataBricksInnerForm implements \JsonSerializable
{
    /**
     * 表单ID，当`form`不为空时，有值。用户可以通过[【获取表单列表】]（https://open.oceanengine.com/doc/index.html?key=ad&type=api&id=1696710634663948#item-link-%E5%BA%94%E7%AD%94%E7%A4%BA%E4%BE%8B）接口或[【青鸟线索通平台】]（https://clue.oceanengine.com/）获取表单ID
     * @var int
     */
    protected ?int $instanceId = null;

    /**
     * 表单ID，当`form`不为空时，有值。用户可以通过[【获取表单列表】]（https://open.oceanengine.com/doc/index.html?key=ad&type=api&id=1696710634663948#item-link-%E5%BA%94%E7%AD%94%E7%A4%BA%E4%BE%8B）接口或[【青鸟线索通平台】]（https://clue.oceanengine.com/）获取表单ID
     * @return int
     */
    public function getInstanceId(): ?int
    {
        return $this->instanceId;
    }

    /**
     * 表单ID，当`form`不为空时，有值。用户可以通过[【获取表单列表】]（https://open.oceanengine.com/doc/index.html?key=ad&type=api&id=1696710634663948#item-link-%E5%BA%94%E7%AD%94%E7%A4%BA%E4%BE%8B）接口或[【青鸟线索通平台】]（https://clue.oceanengine.com/）获取表单ID
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
