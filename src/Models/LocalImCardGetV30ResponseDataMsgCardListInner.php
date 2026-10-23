<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class LocalImCardGetV30ResponseDataMsgCardListInner implements \JsonSerializable
{
    /**
     * 文字链接，电话收集->len(list)=1
     * @var \Oceanengine\Models\LocalImCardGetV30ResponseDataMsgCardListInnerActionsInner[]
     */
    protected ?array $actions = null;

    /**
     * 卡片类型 1-文字链接；5-电话收集; 6-新版留资卡
     * @var int
     */
    protected ?int $cardType = null;

    /**
     * 内容
     * @var string
     */
    protected ?string $content = null;

    /**
     * 卡片id
     * @var int
     */
    protected ?int $id = null;

    /**
     * 卡片名
     * @var string
     */
    protected ?string $name = null;

    /**
     * 卡片状态
     * @var int
     */
    protected ?int $status = null;

    /**
     * 审核状态信息
     * @var string
     */
    protected ?string $statusMsg = null;

    /**
     * @var \Oceanengine\Models\LocalImCardGetV30ResponseDataMsgCardListInnerUrlStruct
     */
    protected ?\Oceanengine\Models\LocalImCardGetV30ResponseDataMsgCardListInnerUrlStruct $urlStruct = null;

    /**
     * 文字链接，电话收集->len(list)=1
     * @return \Oceanengine\Models\LocalImCardGetV30ResponseDataMsgCardListInnerActionsInner[]
     */
    public function getActions(): ?array
    {
        return $this->actions;
    }

    /**
     * 文字链接，电话收集->len(list)=1
     * @param \Oceanengine\Models\LocalImCardGetV30ResponseDataMsgCardListInnerActionsInner[] $actions
     * @return self
     */
    public function setActions(?array $actions): self
    {
        $this->actions = $actions;
        return $this;
    }

    /**
     * 卡片类型 1-文字链接；5-电话收集; 6-新版留资卡
     * @return int
     */
    public function getCardType(): ?int
    {
        return $this->cardType;
    }

    /**
     * 卡片类型 1-文字链接；5-电话收集; 6-新版留资卡
     * @param int $cardType
     * @return self
     */
    public function setCardType(?int $cardType): self
    {
        $this->cardType = $cardType;
        return $this;
    }

    /**
     * 内容
     * @return string
     */
    public function getContent(): ?string
    {
        return $this->content;
    }

    /**
     * 内容
     * @param string $content
     * @return self
     */
    public function setContent(?string $content): self
    {
        $this->content = $content;
        return $this;
    }

    /**
     * 卡片id
     * @return int
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * 卡片id
     * @param int $id
     * @return self
     */
    public function setId(?int $id): self
    {
        $this->id = $id;
        return $this;
    }

    /**
     * 卡片名
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * 卡片名
     * @param string $name
     * @return self
     */
    public function setName(?string $name): self
    {
        $this->name = $name;
        return $this;
    }

    /**
     * 卡片状态
     * @return int
     */
    public function getStatus(): ?int
    {
        return $this->status;
    }

    /**
     * 卡片状态
     * @param int $status
     * @return self
     */
    public function setStatus(?int $status): self
    {
        $this->status = $status;
        return $this;
    }

    /**
     * 审核状态信息
     * @return string
     */
    public function getStatusMsg(): ?string
    {
        return $this->statusMsg;
    }

    /**
     * 审核状态信息
     * @param string $statusMsg
     * @return self
     */
    public function setStatusMsg(?string $statusMsg): self
    {
        $this->statusMsg = $statusMsg;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\LocalImCardGetV30ResponseDataMsgCardListInnerUrlStruct
     */
    public function getUrlStruct(): ?\Oceanengine\Models\LocalImCardGetV30ResponseDataMsgCardListInnerUrlStruct
    {
        return $this->urlStruct;
    }

    /**
     * @param \Oceanengine\Models\LocalImCardGetV30ResponseDataMsgCardListInnerUrlStruct $urlStruct
     * @return self
     */
    public function setUrlStruct(?\Oceanengine\Models\LocalImCardGetV30ResponseDataMsgCardListInnerUrlStruct $urlStruct): self
    {
        $this->urlStruct = $urlStruct;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->actions !== null) {
            $result['actions'] = $this->actions;
        }
        if ($this->cardType !== null) {
            $result['card_type'] = $this->cardType;
        }
        if ($this->content !== null) {
            $result['content'] = $this->content;
        }
        if ($this->id !== null) {
            $result['id'] = $this->id;
        }
        if ($this->name !== null) {
            $result['name'] = $this->name;
        }
        if ($this->status !== null) {
            $result['status'] = $this->status;
        }
        if ($this->statusMsg !== null) {
            $result['status_msg'] = $this->statusMsg;
        }
        if ($this->urlStruct !== null) {
            $result['url_struct'] = $this->urlStruct;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['actions'] ?? null) !== null && is_array($v)) {
            $obj->actions = array_map(fn ($vv) => \Oceanengine\Models\LocalImCardGetV30ResponseDataMsgCardListInnerActionsInner::fromArray($vv), $v);
        }
        if (($v = $data['card_type'] ?? null) !== null) {
            $obj->cardType = (int) $v;
        }
        if (($v = $data['content'] ?? null) !== null) {
            $obj->content = (string) $v;
        }
        if (($v = $data['id'] ?? null) !== null) {
            $obj->id = (int) $v;
        }
        if (($v = $data['name'] ?? null) !== null) {
            $obj->name = (string) $v;
        }
        if (($v = $data['status'] ?? null) !== null) {
            $obj->status = (int) $v;
        }
        if (($v = $data['status_msg'] ?? null) !== null) {
            $obj->statusMsg = (string) $v;
        }
        if (($v = $data['url_struct'] ?? null) !== null && is_array($v)) {
            $obj->urlStruct = \Oceanengine\Models\LocalImCardGetV30ResponseDataMsgCardListInnerUrlStruct::fromArray($v);
        }
        return $obj;
    }
}
