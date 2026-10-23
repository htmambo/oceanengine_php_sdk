<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsMaterialRaiseStatusGetV30ResponseDataListInner implements \JsonSerializable
{
    /**
     * 当前项目是否支持设置素材一键起量
     * @var bool
     */
    protected ?bool $canRaise = null;

    /**
     * 当前项目设置的素材一键起量状态（若can_raise = false 不返回），枚举值： - true 起量中 - false 不在起量中
     * @var bool
     */
    protected ?bool $isRaising = null;

    /**
     * 项目ID
     * @var int
     */
    protected ?int $projectId = null;

    /**
     * 当前项目是否支持设置素材一键起量
     * @return bool
     */
    public function getCanRaise(): ?bool
    {
        return $this->canRaise;
    }

    /**
     * 当前项目是否支持设置素材一键起量
     * @param bool $canRaise
     * @return self
     */
    public function setCanRaise(?bool $canRaise): self
    {
        $this->canRaise = $canRaise;
        return $this;
    }

    /**
     * 当前项目设置的素材一键起量状态（若can_raise = false 不返回），枚举值： - true 起量中 - false 不在起量中
     * @return bool
     */
    public function getIsRaising(): ?bool
    {
        return $this->isRaising;
    }

    /**
     * 当前项目设置的素材一键起量状态（若can_raise = false 不返回），枚举值： - true 起量中 - false 不在起量中
     * @param bool $isRaising
     * @return self
     */
    public function setIsRaising(?bool $isRaising): self
    {
        $this->isRaising = $isRaising;
        return $this;
    }

    /**
     * 项目ID
     * @return int
     */
    public function getProjectId(): ?int
    {
        return $this->projectId;
    }

    /**
     * 项目ID
     * @param int $projectId
     * @return self
     */
    public function setProjectId(?int $projectId): self
    {
        $this->projectId = $projectId;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->canRaise !== null) {
            $result['can_raise'] = $this->canRaise;
        }
        if ($this->isRaising !== null) {
            $result['is_raising'] = $this->isRaising;
        }
        if ($this->projectId !== null) {
            $result['project_id'] = $this->projectId;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['can_raise'] ?? null) !== null) {
            $obj->canRaise = (bool) $v;
        }
        if (($v = $data['is_raising'] ?? null) !== null) {
            $obj->isRaising = (bool) $v;
        }
        if (($v = $data['project_id'] ?? null) !== null) {
            $obj->projectId = (int) $v;
        }
        return $obj;
    }
}
