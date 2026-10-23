<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class LocalImSendMsgV30Request implements \JsonSerializable
{
    /**
     * 会话内容
     * @var string
     */
    protected ?string $content = null;

    /**
     * 用于消息沟通的会话id
     * @var string
     */
    protected ?string $conversationId = null;

    /**
     * 用于消息发送的账号信息，本次场景传入广告主id
     * @var int
     */
    protected ?int $localAccountId = null;

    /**
     * @var \Oceanengine\Models\LocalImSendMsgV30Scene
     */
    protected ?string $scene = null;

    /**
     * @var \Oceanengine\Models\LocalImSendMsgV30SourceName
     */
    protected ?string $sourceName = null;

    /**
     * 会话内容
     * @return string
     */
    public function getContent(): ?string
    {
        return $this->content;
    }

    /**
     * 会话内容
     * @param string $content
     * @return self
     */
    public function setContent(?string $content): self
    {
        $this->content = $content;
        return $this;
    }

    /**
     * 用于消息沟通的会话id
     * @return string
     */
    public function getConversationId(): ?string
    {
        return $this->conversationId;
    }

    /**
     * 用于消息沟通的会话id
     * @param string $conversationId
     * @return self
     */
    public function setConversationId(?string $conversationId): self
    {
        $this->conversationId = $conversationId;
        return $this;
    }

    /**
     * 用于消息发送的账号信息，本次场景传入广告主id
     * @return int
     */
    public function getLocalAccountId(): ?int
    {
        return $this->localAccountId;
    }

    /**
     * 用于消息发送的账号信息，本次场景传入广告主id
     * @param int $localAccountId
     * @return self
     */
    public function setLocalAccountId(?int $localAccountId): self
    {
        $this->localAccountId = $localAccountId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\LocalImSendMsgV30Scene
     */
    public function getScene(): ?string
    {
        return $this->scene;
    }

    /**
     * @param \Oceanengine\Models\LocalImSendMsgV30Scene $scene
     * @return self
     */
    public function setScene(?string $scene): self
    {
        $this->scene = $scene;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\LocalImSendMsgV30SourceName
     */
    public function getSourceName(): ?string
    {
        return $this->sourceName;
    }

    /**
     * @param \Oceanengine\Models\LocalImSendMsgV30SourceName $sourceName
     * @return self
     */
    public function setSourceName(?string $sourceName): self
    {
        $this->sourceName = $sourceName;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->content !== null) {
            $result['content'] = $this->content;
        }
        if ($this->conversationId !== null) {
            $result['conversation_id'] = $this->conversationId;
        }
        if ($this->localAccountId !== null) {
            $result['local_account_id'] = $this->localAccountId;
        }
        if ($this->scene !== null) {
            $result['scene'] = $this->scene;
        }
        if ($this->sourceName !== null) {
            $result['source_name'] = $this->sourceName;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['content'] ?? null) !== null) {
            $obj->content = (string) $v;
        }
        if (($v = $data['conversation_id'] ?? null) !== null) {
            $obj->conversationId = (string) $v;
        }
        if (($v = $data['local_account_id'] ?? null) !== null) {
            $obj->localAccountId = (int) $v;
        }
        if (($v = $data['scene'] ?? null) !== null) {
            $obj->scene = (string) $v;
        }
        if (($v = $data['source_name'] ?? null) !== null) {
            $obj->sourceName = (string) $v;
        }
        return $obj;
    }
}
