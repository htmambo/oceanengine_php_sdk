<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanDmpAudiencesGetV10ResponseData implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $offset = null;

    /**
     * @var \Oceanengine\Models\QianchuanDmpAudiencesGetV10ResponseDataRetargetingTagsInner[]
     */
    protected ?array $retargetingTags = null;

    /**
     * @var int
     */
    protected ?int $totalNum = null;

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
     * @return \Oceanengine\Models\QianchuanDmpAudiencesGetV10ResponseDataRetargetingTagsInner[]
     */
    public function getRetargetingTags(): ?array
    {
        return $this->retargetingTags;
    }

    /**
     * @param \Oceanengine\Models\QianchuanDmpAudiencesGetV10ResponseDataRetargetingTagsInner[] $retargetingTags
     * @return self
     */
    public function setRetargetingTags(?array $retargetingTags): self
    {
        $this->retargetingTags = $retargetingTags;
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
        if ($this->offset !== null) {
            $result['offset'] = $this->offset;
        }
        if ($this->retargetingTags !== null) {
            $result['retargeting_tags'] = $this->retargetingTags;
        }
        if ($this->totalNum !== null) {
            $result['total_num'] = $this->totalNum;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['offset'] ?? null) !== null) {
            $obj->offset = (int) $v;
        }
        if (($v = $data['retargeting_tags'] ?? null) !== null && is_array($v)) {
            $obj->retargetingTags = array_map(fn ($vv) => \Oceanengine\Models\QianchuanDmpAudiencesGetV10ResponseDataRetargetingTagsInner::fromArray($vv), $v);
        }
        if (($v = $data['total_num'] ?? null) !== null) {
            $obj->totalNum = (int) $v;
        }
        return $obj;
    }
}
