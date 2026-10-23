<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsEbpAssetAuthV30ResponseData implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\ToolsEbpAssetAuthV30ResponseDataFailedRecordsInner[]
     */
    protected ?array $failedRecords = null;

    /**
     * @return \Oceanengine\Models\ToolsEbpAssetAuthV30ResponseDataFailedRecordsInner[]
     */
    public function getFailedRecords(): ?array
    {
        return $this->failedRecords;
    }

    /**
     * @param \Oceanengine\Models\ToolsEbpAssetAuthV30ResponseDataFailedRecordsInner[] $failedRecords
     * @return self
     */
    public function setFailedRecords(?array $failedRecords): self
    {
        $this->failedRecords = $failedRecords;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->failedRecords !== null) {
            $result['failed_records'] = $this->failedRecords;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['failed_records'] ?? null) !== null && is_array($v)) {
            $obj->failedRecords = array_map(fn ($vv) => \Oceanengine\Models\ToolsEbpAssetAuthV30ResponseDataFailedRecordsInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
