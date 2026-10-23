<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class BrandOperationLogQueryV30ResponseData implements \JsonSerializable
{
    /**
     * 操作日志列表
     * @var \Oceanengine\Models\BrandOperationLogQueryV30ResponseDataLogListInner[]
     */
    protected ?array $logList = null;

    /**
     * @var \Oceanengine\Models\BrandOperationLogQueryV30ResponseDataPage
     */
    protected ?\Oceanengine\Models\BrandOperationLogQueryV30ResponseDataPage $page = null;

    /**
     * 操作日志列表
     * @return \Oceanengine\Models\BrandOperationLogQueryV30ResponseDataLogListInner[]
     */
    public function getLogList(): ?array
    {
        return $this->logList;
    }

    /**
     * 操作日志列表
     * @param \Oceanengine\Models\BrandOperationLogQueryV30ResponseDataLogListInner[] $logList
     * @return self
     */
    public function setLogList(?array $logList): self
    {
        $this->logList = $logList;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\BrandOperationLogQueryV30ResponseDataPage
     */
    public function getPage(): ?\Oceanengine\Models\BrandOperationLogQueryV30ResponseDataPage
    {
        return $this->page;
    }

    /**
     * @param \Oceanengine\Models\BrandOperationLogQueryV30ResponseDataPage $page
     * @return self
     */
    public function setPage(?\Oceanengine\Models\BrandOperationLogQueryV30ResponseDataPage $page): self
    {
        $this->page = $page;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->logList !== null) {
            $result['log_list'] = $this->logList;
        }
        if ($this->page !== null) {
            $result['page'] = $this->page;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['log_list'] ?? null) !== null && is_array($v)) {
            $obj->logList = array_map(fn ($vv) => \Oceanengine\Models\BrandOperationLogQueryV30ResponseDataLogListInner::fromArray($vv), $v);
        }
        if (($v = $data['page'] ?? null) !== null && is_array($v)) {
            $obj->page = \Oceanengine\Models\BrandOperationLogQueryV30ResponseDataPage::fromArray($v);
        }
        return $obj;
    }
}
