<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class LocalImQueryMsgV30ResponseData implements \JsonSerializable
{
    /**
     * @var string
     */
    protected ?string $content = null;

    /**
     * @var string
     */
    protected ?string $conversationId = null;

    /**
     * @var string
     */
    protected ?string $createTime = null;

    /**
     * @var \Oceanengine\Models\LocalImQueryMsgV30DataEventType
     */
    protected ?string $eventType = null;

    /**
     * @var array<string,string>
     */
    protected ?array $extra = null;

    /**
     * @var string
     */
    protected ?string $logId = null;

    /**
     * @var string
     */
    protected ?string $msgId = null;

    /**
     * @var int
     */
    protected ?int $receiveAdvId = null;

    /**
     * @return string
     */
    public function getContent(): ?string
    {
        return $this->content;
    }

    /**
     * @param string $content
     * @return self
     */
    public function setContent(?string $content): self
    {
        $this->content = $content;
        return $this;
    }

    /**
     * @return string
     */
    public function getConversationId(): ?string
    {
        return $this->conversationId;
    }

    /**
     * @param string $conversationId
     * @return self
     */
    public function setConversationId(?string $conversationId): self
    {
        $this->conversationId = $conversationId;
        return $this;
    }

    /**
     * @return string
     */
    public function getCreateTime(): ?string
    {
        return $this->createTime;
    }

    /**
     * @param string $createTime
     * @return self
     */
    public function setCreateTime(?string $createTime): self
    {
        $this->createTime = $createTime;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\LocalImQueryMsgV30DataEventType
     */
    public function getEventType(): ?string
    {
        return $this->eventType;
    }

    /**
     * @param \Oceanengine\Models\LocalImQueryMsgV30DataEventType $eventType
     * @return self
     */
    public function setEventType(?string $eventType): self
    {
        $this->eventType = $eventType;
        return $this;
    }

    /**
     * @return array<string,string>
     */
    public function getExtra(): ?array
    {
        return $this->extra;
    }

    /**
     * @param array<string,string> $extra
     * @return self
     */
    public function setExtra(?array $extra): self
    {
        $this->extra = $extra;
        return $this;
    }

    /**
     * @return string
     */
    public function getLogId(): ?string
    {
        return $this->logId;
    }

    /**
     * @param string $logId
     * @return self
     */
    public function setLogId(?string $logId): self
    {
        $this->logId = $logId;
        return $this;
    }

    /**
     * @return string
     */
    public function getMsgId(): ?string
    {
        return $this->msgId;
    }

    /**
     * @param string $msgId
     * @return self
     */
    public function setMsgId(?string $msgId): self
    {
        $this->msgId = $msgId;
        return $this;
    }

    /**
     * @return int
     */
    public function getReceiveAdvId(): ?int
    {
        return $this->receiveAdvId;
    }

    /**
     * @param int $receiveAdvId
     * @return self
     */
    public function setReceiveAdvId(?int $receiveAdvId): self
    {
        $this->receiveAdvId = $receiveAdvId;
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
        if ($this->createTime !== null) {
            $result['create_time'] = $this->createTime;
        }
        if ($this->eventType !== null) {
            $result['event_type'] = $this->eventType;
        }
        if ($this->extra !== null) {
            $result['extra'] = $this->extra;
        }
        if ($this->logId !== null) {
            $result['log_id'] = $this->logId;
        }
        if ($this->msgId !== null) {
            $result['msg_id'] = $this->msgId;
        }
        if ($this->receiveAdvId !== null) {
            $result['receive_adv_id'] = $this->receiveAdvId;
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
        if (($v = $data['create_time'] ?? null) !== null) {
            $obj->createTime = (string) $v;
        }
        if (($v = $data['event_type'] ?? null) !== null) {
            $obj->eventType = (string) $v;
        }
        if (($v = $data['extra'] ?? null) !== null && is_array($v)) {
            $obj->extra = $v;
        }
        if (($v = $data['log_id'] ?? null) !== null) {
            $obj->logId = (string) $v;
        }
        if (($v = $data['msg_id'] ?? null) !== null) {
            $obj->msgId = (string) $v;
        }
        if (($v = $data['receive_adv_id'] ?? null) !== null) {
            $obj->receiveAdvId = (int) $v;
        }
        return $obj;
    }
}
