<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class DmpDataSourceReadV2ResponseData implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\DmpDataSourceReadV2ResponseDataDataListInner[]
     */
    protected ?array $dataList = null;

    /**
     * @return \Oceanengine\Models\DmpDataSourceReadV2ResponseDataDataListInner[]
     */
    public function getDataList(): ?array
    {
        return $this->dataList;
    }

    /**
     * @param \Oceanengine\Models\DmpDataSourceReadV2ResponseDataDataListInner[] $dataList
     * @return self
     */
    public function setDataList(?array $dataList): self
    {
        $this->dataList = $dataList;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->dataList !== null) {
            $result['data_list'] = $this->dataList;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['data_list'] ?? null) !== null && is_array($v)) {
            $obj->dataList = array_map(fn ($vv) => \Oceanengine\Models\DmpDataSourceReadV2ResponseDataDataListInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
