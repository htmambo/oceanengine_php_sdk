<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ReportRtaExpLocalHourlyGetV30ResponseData implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\ReportRtaExpLocalHourlyGetV30ResponseDataDataInner[]
     */
    protected ?array $data = null;

    /**
     * @return \Oceanengine\Models\ReportRtaExpLocalHourlyGetV30ResponseDataDataInner[]
     */
    public function getData(): ?array
    {
        return $this->data;
    }

    /**
     * @param \Oceanengine\Models\ReportRtaExpLocalHourlyGetV30ResponseDataDataInner[] $data
     * @return self
     */
    public function setData(?array $data): self
    {
        $this->data = $data;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->data !== null) {
            $result['data'] = $this->data;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['data'] ?? null) !== null && is_array($v)) {
            $obj->data = array_map(fn ($vv) => \Oceanengine\Models\ReportRtaExpLocalHourlyGetV30ResponseDataDataInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
