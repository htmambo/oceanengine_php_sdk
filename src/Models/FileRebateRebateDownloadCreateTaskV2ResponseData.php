<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class FileRebateRebateDownloadCreateTaskV2ResponseData implements \JsonSerializable
{
    /**
     * 对应下载任务的查询ID
     * @var string
     */
    protected ?string $queryId = null;

    /**
     * 当前下载数据最新更新时间
     * @var string
     */
    protected ?string $updateDate = null;

    /**
     * 对应下载任务的查询ID
     * @return string
     */
    public function getQueryId(): ?string
    {
        return $this->queryId;
    }

    /**
     * 对应下载任务的查询ID
     * @param string $queryId
     * @return self
     */
    public function setQueryId(?string $queryId): self
    {
        $this->queryId = $queryId;
        return $this;
    }

    /**
     * 当前下载数据最新更新时间
     * @return string
     */
    public function getUpdateDate(): ?string
    {
        return $this->updateDate;
    }

    /**
     * 当前下载数据最新更新时间
     * @param string $updateDate
     * @return self
     */
    public function setUpdateDate(?string $updateDate): self
    {
        $this->updateDate = $updateDate;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->queryId !== null) {
            $result['query_id'] = $this->queryId;
        }
        if ($this->updateDate !== null) {
            $result['update_date'] = $this->updateDate;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['query_id'] ?? null) !== null) {
            $obj->queryId = (string) $v;
        }
        if (($v = $data['update_date'] ?? null) !== null) {
            $obj->updateDate = (string) $v;
        }
        return $obj;
    }
}
