<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsCluePrivateMessageCallbackV2RequestMsgInfo implements \JsonSerializable
{
    /**
     * 产生线索的会话 ID
     * @var string
     */
    protected ?string $conversationShortId = null;

    /**
     * 产生线索的消息 ID
     * @var string
     */
    protected ?string $serverMessageId = null;

    /**
     * 产生线索的会话 ID
     * @return string
     */
    public function getConversationShortId(): ?string
    {
        return $this->conversationShortId;
    }

    /**
     * 产生线索的会话 ID
     * @param string $conversationShortId
     * @return self
     */
    public function setConversationShortId(?string $conversationShortId): self
    {
        $this->conversationShortId = $conversationShortId;
        return $this;
    }

    /**
     * 产生线索的消息 ID
     * @return string
     */
    public function getServerMessageId(): ?string
    {
        return $this->serverMessageId;
    }

    /**
     * 产生线索的消息 ID
     * @param string $serverMessageId
     * @return self
     */
    public function setServerMessageId(?string $serverMessageId): self
    {
        $this->serverMessageId = $serverMessageId;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->conversationShortId !== null) {
            $result['conversation_short_id'] = $this->conversationShortId;
        }
        if ($this->serverMessageId !== null) {
            $result['server_message_id'] = $this->serverMessageId;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['conversation_short_id'] ?? null) !== null) {
            $obj->conversationShortId = (string) $v;
        }
        if (($v = $data['server_message_id'] ?? null) !== null) {
            $obj->serverMessageId = (string) $v;
        }
        return $obj;
    }
}
