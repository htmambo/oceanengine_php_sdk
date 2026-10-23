<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsStarTaskTitleTopicGetV2ResponseDataTopicsInner implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $topicId = null;

    /**
     * @var string
     */
    protected ?string $topicName = null;

    /**
     * @return int
     */
    public function getTopicId(): ?int
    {
        return $this->topicId;
    }

    /**
     * @param int $topicId
     * @return self
     */
    public function setTopicId(?int $topicId): self
    {
        $this->topicId = $topicId;
        return $this;
    }

    /**
     * @return string
     */
    public function getTopicName(): ?string
    {
        return $this->topicName;
    }

    /**
     * @param string $topicName
     * @return self
     */
    public function setTopicName(?string $topicName): self
    {
        $this->topicName = $topicName;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->topicId !== null) {
            $result['topic_id'] = $this->topicId;
        }
        if ($this->topicName !== null) {
            $result['topic_name'] = $this->topicName;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['topic_id'] ?? null) !== null) {
            $obj->topicId = (int) $v;
        }
        if (($v = $data['topic_name'] ?? null) !== null) {
            $obj->topicName = (string) $v;
        }
        return $obj;
    }
}
