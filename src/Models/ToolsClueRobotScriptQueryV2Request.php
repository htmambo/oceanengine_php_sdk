<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsClueRobotScriptQueryV2Request implements \JsonSerializable
{
    /**
     * 广告主ID
     * @var int
     */
    protected ?int $advertiserId = null;

    /**
     * 页面编号
     * @var int
     */
    protected ?int $pageNumber = null;

    /**
     * 页面大小
     * @var int
     */
    protected ?int $pageSize = null;

    /**
     * 广告主ID
     * @return int
     */
    public function getAdvertiserId(): ?int
    {
        return $this->advertiserId;
    }

    /**
     * 广告主ID
     * @param int $advertiserId
     * @return self
     */
    public function setAdvertiserId(?int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    /**
     * 页面编号
     * @return int
     */
    public function getPageNumber(): ?int
    {
        return $this->pageNumber;
    }

    /**
     * 页面编号
     * @param int $pageNumber
     * @return self
     */
    public function setPageNumber(?int $pageNumber): self
    {
        $this->pageNumber = $pageNumber;
        return $this;
    }

    /**
     * 页面大小
     * @return int
     */
    public function getPageSize(): ?int
    {
        return $this->pageSize;
    }

    /**
     * 页面大小
     * @param int $pageSize
     * @return self
     */
    public function setPageSize(?int $pageSize): self
    {
        $this->pageSize = $pageSize;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->advertiserId !== null) {
            $result['advertiser_id'] = $this->advertiserId;
        }
        if ($this->pageNumber !== null) {
            $result['page_number'] = $this->pageNumber;
        }
        if ($this->pageSize !== null) {
            $result['page_size'] = $this->pageSize;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['advertiser_id'] ?? null) !== null) {
            $obj->advertiserId = (int) $v;
        }
        if (($v = $data['page_number'] ?? null) !== null) {
            $obj->pageNumber = (int) $v;
        }
        if (($v = $data['page_size'] ?? null) !== null) {
            $obj->pageSize = (int) $v;
        }
        return $obj;
    }
}
