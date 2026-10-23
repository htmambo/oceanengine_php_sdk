<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class AgentAdvertiserSelectV2ResponseData implements \JsonSerializable
{
    /**
     * @var string
     */
    protected ?string $accountSource = null;

    /**
     * @var int[]
     */
    protected ?array $advertiserIds = null;

    /**
     * @var \Oceanengine\Models\AgentAdvertiserSelectV2ResponseDataCursorPageInfo
     */
    protected ?\Oceanengine\Models\AgentAdvertiserSelectV2ResponseDataCursorPageInfo $cursorPageInfo = null;

    /**
     * @var int[]
     */
    protected ?array $list = null;

    /**
     * @var \Oceanengine\Models\AgentAdvertiserSelectV2ResponseDataPageInfo
     */
    protected ?\Oceanengine\Models\AgentAdvertiserSelectV2ResponseDataPageInfo $pageInfo = null;

    /**
     * @return string
     */
    public function getAccountSource(): ?string
    {
        return $this->accountSource;
    }

    /**
     * @param string $accountSource
     * @return self
     */
    public function setAccountSource(?string $accountSource): self
    {
        $this->accountSource = $accountSource;
        return $this;
    }

    /**
     * @return int[]
     */
    public function getAdvertiserIds(): ?array
    {
        return $this->advertiserIds;
    }

    /**
     * @param int[] $advertiserIds
     * @return self
     */
    public function setAdvertiserIds(?array $advertiserIds): self
    {
        $this->advertiserIds = $advertiserIds;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\AgentAdvertiserSelectV2ResponseDataCursorPageInfo
     */
    public function getCursorPageInfo(): ?\Oceanengine\Models\AgentAdvertiserSelectV2ResponseDataCursorPageInfo
    {
        return $this->cursorPageInfo;
    }

    /**
     * @param \Oceanengine\Models\AgentAdvertiserSelectV2ResponseDataCursorPageInfo $cursorPageInfo
     * @return self
     */
    public function setCursorPageInfo(?\Oceanengine\Models\AgentAdvertiserSelectV2ResponseDataCursorPageInfo $cursorPageInfo): self
    {
        $this->cursorPageInfo = $cursorPageInfo;
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
     * @return \Oceanengine\Models\AgentAdvertiserSelectV2ResponseDataPageInfo
     */
    public function getPageInfo(): ?\Oceanengine\Models\AgentAdvertiserSelectV2ResponseDataPageInfo
    {
        return $this->pageInfo;
    }

    /**
     * @param \Oceanengine\Models\AgentAdvertiserSelectV2ResponseDataPageInfo $pageInfo
     * @return self
     */
    public function setPageInfo(?\Oceanengine\Models\AgentAdvertiserSelectV2ResponseDataPageInfo $pageInfo): self
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
        if ($this->accountSource !== null) {
            $result['account_source'] = $this->accountSource;
        }
        if ($this->advertiserIds !== null) {
            $result['advertiser_ids'] = $this->advertiserIds;
        }
        if ($this->cursorPageInfo !== null) {
            $result['cursor_page_info'] = $this->cursorPageInfo;
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
        if (($v = $data['account_source'] ?? null) !== null) {
            $obj->accountSource = (string) $v;
        }
        if (($v = $data['advertiser_ids'] ?? null) !== null && is_array($v)) {
            $obj->advertiserIds = $v;
        }
        if (($v = $data['cursor_page_info'] ?? null) !== null && is_array($v)) {
            $obj->cursorPageInfo = \Oceanengine\Models\AgentAdvertiserSelectV2ResponseDataCursorPageInfo::fromArray($v);
        }
        if (($v = $data['list'] ?? null) !== null && is_array($v)) {
            $obj->list = $v;
        }
        if (($v = $data['page_info'] ?? null) !== null && is_array($v)) {
            $obj->pageInfo = \Oceanengine\Models\AgentAdvertiserSelectV2ResponseDataPageInfo::fromArray($v);
        }
        return $obj;
    }
}
