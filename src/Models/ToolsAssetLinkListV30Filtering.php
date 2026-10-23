<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsAssetLinkListV30Filtering implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\ToolsAssetLinkListV30FilteringCreateTime
     */
    protected ?\Oceanengine\Models\ToolsAssetLinkListV30FilteringCreateTime $createTime = null;

    /**
     * @var int
     */
    protected ?int $instanceId = null;

    /**
     * @return \Oceanengine\Models\ToolsAssetLinkListV30FilteringCreateTime
     */
    public function getCreateTime(): ?\Oceanengine\Models\ToolsAssetLinkListV30FilteringCreateTime
    {
        return $this->createTime;
    }

    /**
     * @param \Oceanengine\Models\ToolsAssetLinkListV30FilteringCreateTime $createTime
     * @return self
     */
    public function setCreateTime(?\Oceanengine\Models\ToolsAssetLinkListV30FilteringCreateTime $createTime): self
    {
        $this->createTime = $createTime;
        return $this;
    }

    /**
     * @return int
     */
    public function getInstanceId(): ?int
    {
        return $this->instanceId;
    }

    /**
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
        if ($this->createTime !== null) {
            $result['create_time'] = $this->createTime;
        }
        if ($this->instanceId !== null) {
            $result['instance_id'] = $this->instanceId;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['create_time'] ?? null) !== null && is_array($v)) {
            $obj->createTime = \Oceanengine\Models\ToolsAssetLinkListV30FilteringCreateTime::fromArray($v);
        }
        if (($v = $data['instance_id'] ?? null) !== null) {
            $obj->instanceId = (int) $v;
        }
        return $obj;
    }
}
