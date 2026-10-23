<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ReportCustomAsyncTaskGetV30ResponseDataListInner implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\ReportCustomAsyncTaskGetV30DataListDataTopic
     */
    protected ?string $dataTopic = null;

    /**
     * @return \Oceanengine\Models\ReportCustomAsyncTaskGetV30DataListDataTopic
     */
    public function getDataTopic(): ?string
    {
        return $this->dataTopic;
    }

    /**
     * @param \Oceanengine\Models\ReportCustomAsyncTaskGetV30DataListDataTopic $dataTopic
     * @return self
     */
    public function setDataTopic(?string $dataTopic): self
    {
        $this->dataTopic = $dataTopic;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->dataTopic !== null) {
            $result['data_topic'] = $this->dataTopic;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['data_topic'] ?? null) !== null) {
            $obj->dataTopic = (string) $v;
        }
        return $obj;
    }
}
