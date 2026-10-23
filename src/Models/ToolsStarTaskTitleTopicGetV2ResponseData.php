<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsStarTaskTitleTopicGetV2ResponseData implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\ToolsStarTaskTitleTopicGetV2ResponseDataTopicsInner[]
     */
    protected ?array $topics = null;

    /**
     * @return \Oceanengine\Models\ToolsStarTaskTitleTopicGetV2ResponseDataTopicsInner[]
     */
    public function getTopics(): ?array
    {
        return $this->topics;
    }

    /**
     * @param \Oceanengine\Models\ToolsStarTaskTitleTopicGetV2ResponseDataTopicsInner[] $topics
     * @return self
     */
    public function setTopics(?array $topics): self
    {
        $this->topics = $topics;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->topics !== null) {
            $result['topics'] = $this->topics;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['topics'] ?? null) !== null && is_array($v)) {
            $obj->topics = array_map(fn ($vv) => \Oceanengine\Models\ToolsStarTaskTitleTopicGetV2ResponseDataTopicsInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
