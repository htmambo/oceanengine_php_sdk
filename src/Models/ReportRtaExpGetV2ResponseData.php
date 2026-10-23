<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ReportRtaExpGetV2ResponseData implements \JsonSerializable
{
    /**
     * 返回数据结构体
     * @var \Oceanengine\Models\ReportRtaExpGetV2ResponseDataDataArrayInner[]
     */
    protected ?array $dataArray = null;

    /**
     * 返回数据结构体
     * @return \Oceanengine\Models\ReportRtaExpGetV2ResponseDataDataArrayInner[]
     */
    public function getDataArray(): ?array
    {
        return $this->dataArray;
    }

    /**
     * 返回数据结构体
     * @param \Oceanengine\Models\ReportRtaExpGetV2ResponseDataDataArrayInner[] $dataArray
     * @return self
     */
    public function setDataArray(?array $dataArray): self
    {
        $this->dataArray = $dataArray;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->dataArray !== null) {
            $result['data_array'] = $this->dataArray;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['data_array'] ?? null) !== null && is_array($v)) {
            $obj->dataArray = array_map(fn ($vv) => \Oceanengine\Models\ReportRtaExpGetV2ResponseDataDataArrayInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
