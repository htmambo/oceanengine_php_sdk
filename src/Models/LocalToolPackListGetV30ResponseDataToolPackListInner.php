<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class LocalToolPackListGetV30ResponseDataToolPackListInner implements \JsonSerializable
{
    /**
     * 是否可用，false: 不可用，前端置灰
     * @var bool
     */
    protected ?bool $enable = null;

    /**
     * 是否支持智能优选
     * @var bool
     */
    protected ?bool $enableIntelligentSelection = null;

    /**
     * 留资组件组id
     * @var int
     */
    protected ?int $toolPackId = null;

    /**
     * 留资组件组name
     * @var string
     */
    protected ?string $toolPackName = null;

    /**
     * 组件类型
     * @var \Oceanengine\Models\LocalToolPackListGetV30DataToolPackListToolPackTypes[]
     */
    protected ?array $toolPackTypes = null;

    /**
     * 是否可用，false: 不可用，前端置灰
     * @return bool
     */
    public function getEnable(): ?bool
    {
        return $this->enable;
    }

    /**
     * 是否可用，false: 不可用，前端置灰
     * @param bool $enable
     * @return self
     */
    public function setEnable(?bool $enable): self
    {
        $this->enable = $enable;
        return $this;
    }

    /**
     * 是否支持智能优选
     * @return bool
     */
    public function getEnableIntelligentSelection(): ?bool
    {
        return $this->enableIntelligentSelection;
    }

    /**
     * 是否支持智能优选
     * @param bool $enableIntelligentSelection
     * @return self
     */
    public function setEnableIntelligentSelection(?bool $enableIntelligentSelection): self
    {
        $this->enableIntelligentSelection = $enableIntelligentSelection;
        return $this;
    }

    /**
     * 留资组件组id
     * @return int
     */
    public function getToolPackId(): ?int
    {
        return $this->toolPackId;
    }

    /**
     * 留资组件组id
     * @param int $toolPackId
     * @return self
     */
    public function setToolPackId(?int $toolPackId): self
    {
        $this->toolPackId = $toolPackId;
        return $this;
    }

    /**
     * 留资组件组name
     * @return string
     */
    public function getToolPackName(): ?string
    {
        return $this->toolPackName;
    }

    /**
     * 留资组件组name
     * @param string $toolPackName
     * @return self
     */
    public function setToolPackName(?string $toolPackName): self
    {
        $this->toolPackName = $toolPackName;
        return $this;
    }

    /**
     * 组件类型
     * @return \Oceanengine\Models\LocalToolPackListGetV30DataToolPackListToolPackTypes[]
     */
    public function getToolPackTypes(): ?array
    {
        return $this->toolPackTypes;
    }

    /**
     * 组件类型
     * @param \Oceanengine\Models\LocalToolPackListGetV30DataToolPackListToolPackTypes[] $toolPackTypes
     * @return self
     */
    public function setToolPackTypes(?array $toolPackTypes): self
    {
        $this->toolPackTypes = $toolPackTypes;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->enable !== null) {
            $result['enable'] = $this->enable;
        }
        if ($this->enableIntelligentSelection !== null) {
            $result['enable_intelligent_selection'] = $this->enableIntelligentSelection;
        }
        if ($this->toolPackId !== null) {
            $result['tool_pack_id'] = $this->toolPackId;
        }
        if ($this->toolPackName !== null) {
            $result['tool_pack_name'] = $this->toolPackName;
        }
        if ($this->toolPackTypes !== null) {
            $result['tool_pack_types'] = $this->toolPackTypes;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['enable'] ?? null) !== null) {
            $obj->enable = (bool) $v;
        }
        if (($v = $data['enable_intelligent_selection'] ?? null) !== null) {
            $obj->enableIntelligentSelection = (bool) $v;
        }
        if (($v = $data['tool_pack_id'] ?? null) !== null) {
            $obj->toolPackId = (int) $v;
        }
        if (($v = $data['tool_pack_name'] ?? null) !== null) {
            $obj->toolPackName = (string) $v;
        }
        if (($v = $data['tool_pack_types'] ?? null) !== null && is_array($v)) {
            $obj->toolPackTypes = $v;
        }
        return $obj;
    }
}
