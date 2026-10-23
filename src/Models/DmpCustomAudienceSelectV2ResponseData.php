<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class DmpCustomAudienceSelectV2ResponseData implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\DmpCustomAudienceSelectV2ResponseDataCustomAudienceListInner[]
     */
    protected ?array $customAudienceList = null;

    /**
     * @var int
     */
    protected ?int $offset = null;

    /**
     * @var int
     */
    protected ?int $totalNum = null;

    /**
     * @return \Oceanengine\Models\DmpCustomAudienceSelectV2ResponseDataCustomAudienceListInner[]
     */
    public function getCustomAudienceList(): ?array
    {
        return $this->customAudienceList;
    }

    /**
     * @param \Oceanengine\Models\DmpCustomAudienceSelectV2ResponseDataCustomAudienceListInner[] $customAudienceList
     * @return self
     */
    public function setCustomAudienceList(?array $customAudienceList): self
    {
        $this->customAudienceList = $customAudienceList;
        return $this;
    }

    /**
     * @return int
     */
    public function getOffset(): ?int
    {
        return $this->offset;
    }

    /**
     * @param int $offset
     * @return self
     */
    public function setOffset(?int $offset): self
    {
        $this->offset = $offset;
        return $this;
    }

    /**
     * @return int
     */
    public function getTotalNum(): ?int
    {
        return $this->totalNum;
    }

    /**
     * @param int $totalNum
     * @return self
     */
    public function setTotalNum(?int $totalNum): self
    {
        $this->totalNum = $totalNum;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->customAudienceList !== null) {
            $result['custom_audience_list'] = $this->customAudienceList;
        }
        if ($this->offset !== null) {
            $result['offset'] = $this->offset;
        }
        if ($this->totalNum !== null) {
            $result['total_num'] = $this->totalNum;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['custom_audience_list'] ?? null) !== null && is_array($v)) {
            $obj->customAudienceList = array_map(fn ($vv) => \Oceanengine\Models\DmpCustomAudienceSelectV2ResponseDataCustomAudienceListInner::fromArray($vv), $v);
        }
        if (($v = $data['offset'] ?? null) !== null) {
            $obj->offset = (int) $v;
        }
        if (($v = $data['total_num'] ?? null) !== null) {
            $obj->totalNum = (int) $v;
        }
        return $obj;
    }
}
