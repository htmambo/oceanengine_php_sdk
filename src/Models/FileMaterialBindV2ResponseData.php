<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class FileMaterialBindV2ResponseData implements \JsonSerializable
{
    /**
     * 推送失败列表
     * @var \Oceanengine\Models\FileMaterialBindV2ResponseDataFailListInner[]
     */
    protected ?array $failList = null;

    /**
     * 推送失败列表
     * @return \Oceanengine\Models\FileMaterialBindV2ResponseDataFailListInner[]
     */
    public function getFailList(): ?array
    {
        return $this->failList;
    }

    /**
     * 推送失败列表
     * @param \Oceanengine\Models\FileMaterialBindV2ResponseDataFailListInner[] $failList
     * @return self
     */
    public function setFailList(?array $failList): self
    {
        $this->failList = $failList;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->failList !== null) {
            $result['fail_list'] = $this->failList;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['fail_list'] ?? null) !== null && is_array($v)) {
            $obj->failList = array_map(fn ($vv) => \Oceanengine\Models\FileMaterialBindV2ResponseDataFailListInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
