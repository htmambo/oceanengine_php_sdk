<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanUniPromotionAdControlTaskUpdateV10ResponseData implements \JsonSerializable
{
    /**
     * 报错信息
     * @var int[]
     */
    protected ?array $failedInfos = null;

    /**
     * 报错信息
     * @return int[]
     */
    public function getFailedInfos(): ?array
    {
        return $this->failedInfos;
    }

    /**
     * 报错信息
     * @param int[] $failedInfos
     * @return self
     */
    public function setFailedInfos(?array $failedInfos): self
    {
        $this->failedInfos = $failedInfos;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->failedInfos !== null) {
            $result['failed_infos'] = $this->failedInfos;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['failed_infos'] ?? null) !== null && is_array($v)) {
            $obj->failedInfos = $v;
        }
        return $obj;
    }
}
