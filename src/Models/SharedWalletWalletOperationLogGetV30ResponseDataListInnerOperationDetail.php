<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class SharedWalletWalletOperationLogGetV30ResponseDataListInnerOperationDetail implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\SharedWalletWalletOperationLogGetV30ResponseDataListInnerOperationDetailRelationChangeOperationDetail
     */
    protected ?\Oceanengine\Models\SharedWalletWalletOperationLogGetV30ResponseDataListInnerOperationDetailRelationChangeOperationDetail $relationChangeOperationDetail = null;

    /**
     * @return \Oceanengine\Models\SharedWalletWalletOperationLogGetV30ResponseDataListInnerOperationDetailRelationChangeOperationDetail
     */
    public function getRelationChangeOperationDetail(): ?\Oceanengine\Models\SharedWalletWalletOperationLogGetV30ResponseDataListInnerOperationDetailRelationChangeOperationDetail
    {
        return $this->relationChangeOperationDetail;
    }

    /**
     * @param \Oceanengine\Models\SharedWalletWalletOperationLogGetV30ResponseDataListInnerOperationDetailRelationChangeOperationDetail $relationChangeOperationDetail
     * @return self
     */
    public function setRelationChangeOperationDetail(?\Oceanengine\Models\SharedWalletWalletOperationLogGetV30ResponseDataListInnerOperationDetailRelationChangeOperationDetail $relationChangeOperationDetail): self
    {
        $this->relationChangeOperationDetail = $relationChangeOperationDetail;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->relationChangeOperationDetail !== null) {
            $result['relation_change_operation_detail'] = $this->relationChangeOperationDetail;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['relation_change_operation_detail'] ?? null) !== null && is_array($v)) {
            $obj->relationChangeOperationDetail = \Oceanengine\Models\SharedWalletWalletOperationLogGetV30ResponseDataListInnerOperationDetailRelationChangeOperationDetail::fromArray($v);
        }
        return $obj;
    }
}
