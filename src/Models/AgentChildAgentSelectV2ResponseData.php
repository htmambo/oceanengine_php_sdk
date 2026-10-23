<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class AgentChildAgentSelectV2ResponseData implements \JsonSerializable
{
    /**
     * @var int[]
     */
    protected ?array $childAgentIds = null;

    /**
     * @var int[]
     */
    protected ?array $list = null;

    /**
     * @var \Oceanengine\Models\AgentChildAgentSelectV2ResponseDataPageInfo
     */
    protected ?\Oceanengine\Models\AgentChildAgentSelectV2ResponseDataPageInfo $pageInfo = null;

    /**
     * @return int[]
     */
    public function getChildAgentIds(): ?array
    {
        return $this->childAgentIds;
    }

    /**
     * @param int[] $childAgentIds
     * @return self
     */
    public function setChildAgentIds(?array $childAgentIds): self
    {
        $this->childAgentIds = $childAgentIds;
        return $this;
    }

    /**
     * @return int[]
     */
    public function getList(): ?array
    {
        return $this->list;
    }

    /**
     * @param int[] $list
     * @return self
     */
    public function setList(?array $list): self
    {
        $this->list = $list;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\AgentChildAgentSelectV2ResponseDataPageInfo
     */
    public function getPageInfo(): ?\Oceanengine\Models\AgentChildAgentSelectV2ResponseDataPageInfo
    {
        return $this->pageInfo;
    }

    /**
     * @param \Oceanengine\Models\AgentChildAgentSelectV2ResponseDataPageInfo $pageInfo
     * @return self
     */
    public function setPageInfo(?\Oceanengine\Models\AgentChildAgentSelectV2ResponseDataPageInfo $pageInfo): self
    {
        $this->pageInfo = $pageInfo;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->childAgentIds !== null) {
            $result['child_agent_ids'] = $this->childAgentIds;
        }
        if ($this->list !== null) {
            $result['list'] = $this->list;
        }
        if ($this->pageInfo !== null) {
            $result['page_info'] = $this->pageInfo;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['child_agent_ids'] ?? null) !== null && is_array($v)) {
            $obj->childAgentIds = $v;
        }
        if (($v = $data['list'] ?? null) !== null && is_array($v)) {
            $obj->list = $v;
        }
        if (($v = $data['page_info'] ?? null) !== null && is_array($v)) {
            $obj->pageInfo = \Oceanengine\Models\AgentChildAgentSelectV2ResponseDataPageInfo::fromArray($v);
        }
        return $obj;
    }
}
