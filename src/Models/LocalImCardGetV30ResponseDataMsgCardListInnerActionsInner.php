<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class LocalImCardGetV30ResponseDataMsgCardListInnerActionsInner implements \JsonSerializable
{
    /**
     * 动作类型：2-跳转
     * @var int
     */
    protected ?int $actionType = null;

    /**
     * @var \Oceanengine\Models\LocalImCardGetV30ResponseDataMsgCardListInnerActionsInnerImComponent
     */
    protected ?\Oceanengine\Models\LocalImCardGetV30ResponseDataMsgCardListInnerActionsInnerImComponent $imComponent = null;

    /**
     * @var \Oceanengine\Models\LocalImCardGetV30ResponseDataMsgCardListInnerActionsInnerLeadsInfo
     */
    protected ?\Oceanengine\Models\LocalImCardGetV30ResponseDataMsgCardListInnerActionsInnerLeadsInfo $leadsInfo = null;

    /**
     * 跳转链接名称
     * @var string
     */
    protected ?string $name = null;

    /**
     * 动作类型：2-跳转
     * @return int
     */
    public function getActionType(): ?int
    {
        return $this->actionType;
    }

    /**
     * 动作类型：2-跳转
     * @param int $actionType
     * @return self
     */
    public function setActionType(?int $actionType): self
    {
        $this->actionType = $actionType;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\LocalImCardGetV30ResponseDataMsgCardListInnerActionsInnerImComponent
     */
    public function getImComponent(): ?\Oceanengine\Models\LocalImCardGetV30ResponseDataMsgCardListInnerActionsInnerImComponent
    {
        return $this->imComponent;
    }

    /**
     * @param \Oceanengine\Models\LocalImCardGetV30ResponseDataMsgCardListInnerActionsInnerImComponent $imComponent
     * @return self
     */
    public function setImComponent(?\Oceanengine\Models\LocalImCardGetV30ResponseDataMsgCardListInnerActionsInnerImComponent $imComponent): self
    {
        $this->imComponent = $imComponent;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\LocalImCardGetV30ResponseDataMsgCardListInnerActionsInnerLeadsInfo
     */
    public function getLeadsInfo(): ?\Oceanengine\Models\LocalImCardGetV30ResponseDataMsgCardListInnerActionsInnerLeadsInfo
    {
        return $this->leadsInfo;
    }

    /**
     * @param \Oceanengine\Models\LocalImCardGetV30ResponseDataMsgCardListInnerActionsInnerLeadsInfo $leadsInfo
     * @return self
     */
    public function setLeadsInfo(?\Oceanengine\Models\LocalImCardGetV30ResponseDataMsgCardListInnerActionsInnerLeadsInfo $leadsInfo): self
    {
        $this->leadsInfo = $leadsInfo;
        return $this;
    }

    /**
     * 跳转链接名称
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * 跳转链接名称
     * @param string $name
     * @return self
     */
    public function setName(?string $name): self
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->actionType !== null) {
            $result['action_type'] = $this->actionType;
        }
        if ($this->imComponent !== null) {
            $result['im_component'] = $this->imComponent;
        }
        if ($this->leadsInfo !== null) {
            $result['leads_info'] = $this->leadsInfo;
        }
        if ($this->name !== null) {
            $result['name'] = $this->name;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['action_type'] ?? null) !== null) {
            $obj->actionType = (int) $v;
        }
        if (($v = $data['im_component'] ?? null) !== null && is_array($v)) {
            $obj->imComponent = \Oceanengine\Models\LocalImCardGetV30ResponseDataMsgCardListInnerActionsInnerImComponent::fromArray($v);
        }
        if (($v = $data['leads_info'] ?? null) !== null && is_array($v)) {
            $obj->leadsInfo = \Oceanengine\Models\LocalImCardGetV30ResponseDataMsgCardListInnerActionsInnerLeadsInfo::fromArray($v);
        }
        if (($v = $data['name'] ?? null) !== null) {
            $obj->name = (string) $v;
        }
        return $obj;
    }
}
