<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class AgentTransferTransactionRecordV2ResponseData implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\AgentTransferTransactionRecordV2ResponseDataPageInfo
     */
    protected ?\Oceanengine\Models\AgentTransferTransactionRecordV2ResponseDataPageInfo $pageInfo = null;

    /**
     * @var \Oceanengine\Models\AgentTransferTransactionRecordV2ResponseDataRecordsInner[]
     */
    protected ?array $records = null;

    /**
     * @return \Oceanengine\Models\AgentTransferTransactionRecordV2ResponseDataPageInfo
     */
    public function getPageInfo(): ?\Oceanengine\Models\AgentTransferTransactionRecordV2ResponseDataPageInfo
    {
        return $this->pageInfo;
    }

    /**
     * @param \Oceanengine\Models\AgentTransferTransactionRecordV2ResponseDataPageInfo $pageInfo
     * @return self
     */
    public function setPageInfo(?\Oceanengine\Models\AgentTransferTransactionRecordV2ResponseDataPageInfo $pageInfo): self
    {
        $this->pageInfo = $pageInfo;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\AgentTransferTransactionRecordV2ResponseDataRecordsInner[]
     */
    public function getRecords(): ?array
    {
        return $this->records;
    }

    /**
     * @param \Oceanengine\Models\AgentTransferTransactionRecordV2ResponseDataRecordsInner[] $records
     * @return self
     */
    public function setRecords(?array $records): self
    {
        $this->records = $records;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->pageInfo !== null) {
            $result['page_info'] = $this->pageInfo;
        }
        if ($this->records !== null) {
            $result['records'] = $this->records;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['page_info'] ?? null) !== null && is_array($v)) {
            $obj->pageInfo = \Oceanengine\Models\AgentTransferTransactionRecordV2ResponseDataPageInfo::fromArray($v);
        }
        if (($v = $data['records'] ?? null) !== null && is_array($v)) {
            $obj->records = array_map(fn ($vv) => \Oceanengine\Models\AgentTransferTransactionRecordV2ResponseDataRecordsInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
