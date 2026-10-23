<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class SharedWalletWalletAdvOperationLogGetV30ResponseDataListInnerOperationDetail implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\SharedWalletWalletAdvOperationLogGetV30ResponseDataListInnerOperationDetailRelationChangeOperationDetail
     */
    protected ?\Oceanengine\Models\SharedWalletWalletAdvOperationLogGetV30ResponseDataListInnerOperationDetailRelationChangeOperationDetail $relationChangeOperationDetail = null;

    /**
     * @return \Oceanengine\Models\SharedWalletWalletAdvOperationLogGetV30ResponseDataListInnerOperationDetailRelationChangeOperationDetail
     */
    public function getRelationChangeOperationDetail(): ?\Oceanengine\Models\SharedWalletWalletAdvOperationLogGetV30ResponseDataListInnerOperationDetailRelationChangeOperationDetail
    {
        return $this->relationChangeOperationDetail;
    }

    /**
     * @param \Oceanengine\Models\SharedWalletWalletAdvOperationLogGetV30ResponseDataListInnerOperationDetailRelationChangeOperationDetail $relationChangeOperationDetail
     * @return self
     */
    public function setRelationChangeOperationDetail(?\Oceanengine\Models\SharedWalletWalletAdvOperationLogGetV30ResponseDataListInnerOperationDetailRelationChangeOperationDetail $relationChangeOperationDetail): self
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
            $obj->relationChangeOperationDetail = \Oceanengine\Models\SharedWalletWalletAdvOperationLogGetV30ResponseDataListInnerOperationDetailRelationChangeOperationDetail::fromArray($v);
        }
        return $obj;
    }
}
