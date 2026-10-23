<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarReportDataTopicConfigV2ResponseData implements \JsonSerializable
{
    /**
     * 对应请求的数据主题数组
     * @var \Oceanengine\Models\StarReportDataTopicConfigV2ResponseDataStatInner[]
     */
    protected ?array $stat = null;

    /**
     * 对应请求的数据主题数组
     * @return \Oceanengine\Models\StarReportDataTopicConfigV2ResponseDataStatInner[]
     */
    public function getStat(): ?array
    {
        return $this->stat;
    }

    /**
     * 对应请求的数据主题数组
     * @param \Oceanengine\Models\StarReportDataTopicConfigV2ResponseDataStatInner[] $stat
     * @return self
     */
    public function setStat(?array $stat): self
    {
        $this->stat = $stat;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->stat !== null) {
            $result['stat'] = $this->stat;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['stat'] ?? null) !== null && is_array($v)) {
            $obj->stat = array_map(fn ($vv) => \Oceanengine\Models\StarReportDataTopicConfigV2ResponseDataStatInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
