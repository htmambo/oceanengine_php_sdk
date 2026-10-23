<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanDmpAudiencesGetV10ResponseDataRetargetingTagsInner implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $coverNum = null;

    /**
     * @var \Oceanengine\Models\QianchuanDmpAudiencesGetV10DataRetargetingTagsHasOfflineTag
     */
    protected ?string $hasOfflineTag = null;

    /**
     * @var \Oceanengine\Models\QianchuanDmpAudiencesGetV10DataRetargetingTagsIsCommon
     */
    protected ?string $isCommon = null;

    /**
     * @var string
     */
    protected ?string $name = null;

    /**
     * @var int
     */
    protected ?int $retargetingTagsId = null;

    /**
     * @var \Oceanengine\Models\QianchuanDmpAudiencesGetV10DataRetargetingTagsRetargetingTagsOp
     */
    protected ?string $retargetingTagsOp = null;

    /**
     * @var string
     */
    protected ?string $retargetingTagsTip = null;

    /**
     * @var \Oceanengine\Models\QianchuanDmpAudiencesGetV10DataRetargetingTagsSource
     */
    protected ?string $source = null;

    /**
     * @var int
     */
    protected ?int $status = null;

    /**
     * @return int
     */
    public function getCoverNum(): ?int
    {
        return $this->coverNum;
    }

    /**
     * @param int $coverNum
     * @return self
     */
    public function setCoverNum(?int $coverNum): self
    {
        $this->coverNum = $coverNum;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanDmpAudiencesGetV10DataRetargetingTagsHasOfflineTag
     */
    public function getHasOfflineTag(): ?string
    {
        return $this->hasOfflineTag;
    }

    /**
     * @param \Oceanengine\Models\QianchuanDmpAudiencesGetV10DataRetargetingTagsHasOfflineTag $hasOfflineTag
     * @return self
     */
    public function setHasOfflineTag(?string $hasOfflineTag): self
    {
        $this->hasOfflineTag = $hasOfflineTag;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanDmpAudiencesGetV10DataRetargetingTagsIsCommon
     */
    public function getIsCommon(): ?string
    {
        return $this->isCommon;
    }

    /**
     * @param \Oceanengine\Models\QianchuanDmpAudiencesGetV10DataRetargetingTagsIsCommon $isCommon
     * @return self
     */
    public function setIsCommon(?string $isCommon): self
    {
        $this->isCommon = $isCommon;
        return $this;
    }

    /**
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return self
     */
    public function setName(?string $name): self
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return int
     */
    public function getRetargetingTagsId(): ?int
    {
        return $this->retargetingTagsId;
    }

    /**
     * @param int $retargetingTagsId
     * @return self
     */
    public function setRetargetingTagsId(?int $retargetingTagsId): self
    {
        $this->retargetingTagsId = $retargetingTagsId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanDmpAudiencesGetV10DataRetargetingTagsRetargetingTagsOp
     */
    public function getRetargetingTagsOp(): ?string
    {
        return $this->retargetingTagsOp;
    }

    /**
     * @param \Oceanengine\Models\QianchuanDmpAudiencesGetV10DataRetargetingTagsRetargetingTagsOp $retargetingTagsOp
     * @return self
     */
    public function setRetargetingTagsOp(?string $retargetingTagsOp): self
    {
        $this->retargetingTagsOp = $retargetingTagsOp;
        return $this;
    }

    /**
     * @return string
     */
    public function getRetargetingTagsTip(): ?string
    {
        return $this->retargetingTagsTip;
    }

    /**
     * @param string $retargetingTagsTip
     * @return self
     */
    public function setRetargetingTagsTip(?string $retargetingTagsTip): self
    {
        $this->retargetingTagsTip = $retargetingTagsTip;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanDmpAudiencesGetV10DataRetargetingTagsSource
     */
    public function getSource(): ?string
    {
        return $this->source;
    }

    /**
     * @param \Oceanengine\Models\QianchuanDmpAudiencesGetV10DataRetargetingTagsSource $source
     * @return self
     */
    public function setSource(?string $source): self
    {
        $this->source = $source;
        return $this;
    }

    /**
     * @return int
     */
    public function getStatus(): ?int
    {
        return $this->status;
    }

    /**
     * @param int $status
     * @return self
     */
    public function setStatus(?int $status): self
    {
        $this->status = $status;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->coverNum !== null) {
            $result['cover_num'] = $this->coverNum;
        }
        if ($this->hasOfflineTag !== null) {
            $result['has_offline_tag'] = $this->hasOfflineTag;
        }
        if ($this->isCommon !== null) {
            $result['is_common'] = $this->isCommon;
        }
        if ($this->name !== null) {
            $result['name'] = $this->name;
        }
        if ($this->retargetingTagsId !== null) {
            $result['retargeting_tags_id'] = $this->retargetingTagsId;
        }
        if ($this->retargetingTagsOp !== null) {
            $result['retargeting_tags_op'] = $this->retargetingTagsOp;
        }
        if ($this->retargetingTagsTip !== null) {
            $result['retargeting_tags_tip'] = $this->retargetingTagsTip;
        }
        if ($this->source !== null) {
            $result['source'] = $this->source;
        }
        if ($this->status !== null) {
            $result['status'] = $this->status;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['cover_num'] ?? null) !== null) {
            $obj->coverNum = (int) $v;
        }
        if (($v = $data['has_offline_tag'] ?? null) !== null) {
            $obj->hasOfflineTag = (string) $v;
        }
        if (($v = $data['is_common'] ?? null) !== null) {
            $obj->isCommon = (string) $v;
        }
        if (($v = $data['name'] ?? null) !== null) {
            $obj->name = (string) $v;
        }
        if (($v = $data['retargeting_tags_id'] ?? null) !== null) {
            $obj->retargetingTagsId = (int) $v;
        }
        if (($v = $data['retargeting_tags_op'] ?? null) !== null) {
            $obj->retargetingTagsOp = (string) $v;
        }
        if (($v = $data['retargeting_tags_tip'] ?? null) !== null) {
            $obj->retargetingTagsTip = (string) $v;
        }
        if (($v = $data['source'] ?? null) !== null) {
            $obj->source = (string) $v;
        }
        if (($v = $data['status'] ?? null) !== null) {
            $obj->status = (int) $v;
        }
        return $obj;
    }
}
