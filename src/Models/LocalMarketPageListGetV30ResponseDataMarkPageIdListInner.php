<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class LocalMarketPageListGetV30ResponseDataMarkPageIdListInner implements \JsonSerializable
{
    /**
     * 营销页图片链接
     * @var string
     */
    protected ?string $coverImageUrl = null;

    /**
     * 营销页id
     * @var int
     */
    protected ?int $marketPageId = null;

    /**
     * 营销页名称
     * @var string
     */
    protected ?string $marketPageName = null;

    /**
     * @var \Oceanengine\Models\LocalMarketPageListGetV30DataMarkPageIdListStatus
     */
    protected ?string $status = null;

    /**
     * @var \Oceanengine\Models\LocalMarketPageListGetV30ResponseDataMarkPageIdListInnerToolPackInfo
     */
    protected ?\Oceanengine\Models\LocalMarketPageListGetV30ResponseDataMarkPageIdListInnerToolPackInfo $toolPackInfo = null;

    /**
     * 营销页图片链接
     * @return string
     */
    public function getCoverImageUrl(): ?string
    {
        return $this->coverImageUrl;
    }

    /**
     * 营销页图片链接
     * @param string $coverImageUrl
     * @return self
     */
    public function setCoverImageUrl(?string $coverImageUrl): self
    {
        $this->coverImageUrl = $coverImageUrl;
        return $this;
    }

    /**
     * 营销页id
     * @return int
     */
    public function getMarketPageId(): ?int
    {
        return $this->marketPageId;
    }

    /**
     * 营销页id
     * @param int $marketPageId
     * @return self
     */
    public function setMarketPageId(?int $marketPageId): self
    {
        $this->marketPageId = $marketPageId;
        return $this;
    }

    /**
     * 营销页名称
     * @return string
     */
    public function getMarketPageName(): ?string
    {
        return $this->marketPageName;
    }

    /**
     * 营销页名称
     * @param string $marketPageName
     * @return self
     */
    public function setMarketPageName(?string $marketPageName): self
    {
        $this->marketPageName = $marketPageName;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\LocalMarketPageListGetV30DataMarkPageIdListStatus
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * @param \Oceanengine\Models\LocalMarketPageListGetV30DataMarkPageIdListStatus $status
     * @return self
     */
    public function setStatus(?string $status): self
    {
        $this->status = $status;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\LocalMarketPageListGetV30ResponseDataMarkPageIdListInnerToolPackInfo
     */
    public function getToolPackInfo(): ?\Oceanengine\Models\LocalMarketPageListGetV30ResponseDataMarkPageIdListInnerToolPackInfo
    {
        return $this->toolPackInfo;
    }

    /**
     * @param \Oceanengine\Models\LocalMarketPageListGetV30ResponseDataMarkPageIdListInnerToolPackInfo $toolPackInfo
     * @return self
     */
    public function setToolPackInfo(?\Oceanengine\Models\LocalMarketPageListGetV30ResponseDataMarkPageIdListInnerToolPackInfo $toolPackInfo): self
    {
        $this->toolPackInfo = $toolPackInfo;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->coverImageUrl !== null) {
            $result['cover_image_url'] = $this->coverImageUrl;
        }
        if ($this->marketPageId !== null) {
            $result['market_page_id'] = $this->marketPageId;
        }
        if ($this->marketPageName !== null) {
            $result['market_page_name'] = $this->marketPageName;
        }
        if ($this->status !== null) {
            $result['status'] = $this->status;
        }
        if ($this->toolPackInfo !== null) {
            $result['tool_pack_info'] = $this->toolPackInfo;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['cover_image_url'] ?? null) !== null) {
            $obj->coverImageUrl = (string) $v;
        }
        if (($v = $data['market_page_id'] ?? null) !== null) {
            $obj->marketPageId = (int) $v;
        }
        if (($v = $data['market_page_name'] ?? null) !== null) {
            $obj->marketPageName = (string) $v;
        }
        if (($v = $data['status'] ?? null) !== null) {
            $obj->status = (string) $v;
        }
        if (($v = $data['tool_pack_info'] ?? null) !== null && is_array($v)) {
            $obj->toolPackInfo = \Oceanengine\Models\LocalMarketPageListGetV30ResponseDataMarkPageIdListInnerToolPackInfo::fromArray($v);
        }
        return $obj;
    }
}
