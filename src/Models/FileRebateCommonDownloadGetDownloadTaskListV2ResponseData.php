<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class FileRebateCommonDownloadGetDownloadTaskListV2ResponseData implements \JsonSerializable
{
    /**
     * 查询ID列表
     * @var \Oceanengine\Models\FileRebateCommonDownloadGetDownloadTaskListV2ResponseDataQueryListInner[]
     */
    protected ?array $queryList = null;

    /**
     * 查询ID列表
     * @return \Oceanengine\Models\FileRebateCommonDownloadGetDownloadTaskListV2ResponseDataQueryListInner[]
     */
    public function getQueryList(): ?array
    {
        return $this->queryList;
    }

    /**
     * 查询ID列表
     * @param \Oceanengine\Models\FileRebateCommonDownloadGetDownloadTaskListV2ResponseDataQueryListInner[] $queryList
     * @return self
     */
    public function setQueryList(?array $queryList): self
    {
        $this->queryList = $queryList;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->queryList !== null) {
            $result['query_list'] = $this->queryList;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['query_list'] ?? null) !== null && is_array($v)) {
            $obj->queryList = array_map(fn ($vv) => \Oceanengine\Models\FileRebateCommonDownloadGetDownloadTaskListV2ResponseDataQueryListInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
