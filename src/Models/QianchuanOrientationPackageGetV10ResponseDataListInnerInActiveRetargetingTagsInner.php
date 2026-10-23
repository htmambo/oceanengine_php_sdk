<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanOrientationPackageGetV10ResponseDataListInnerInActiveRetargetingTagsInner implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\QianchuanOrientationPackageGetV10DataListInActiveRetargetingTagsInActiveType
     */
    protected ?string $inActiveType = null;

    /**
     * @var string
     */
    protected ?string $retargetingName = null;

    /**
     * @var int
     */
    protected ?int $retargetingTag = null;

    /**
     * @return \Oceanengine\Models\QianchuanOrientationPackageGetV10DataListInActiveRetargetingTagsInActiveType
     */
    public function getInActiveType(): ?string
    {
        return $this->inActiveType;
    }

    /**
     * @param \Oceanengine\Models\QianchuanOrientationPackageGetV10DataListInActiveRetargetingTagsInActiveType $inActiveType
     * @return self
     */
    public function setInActiveType(?string $inActiveType): self
    {
        $this->inActiveType = $inActiveType;
        return $this;
    }

    /**
     * @return string
     */
    public function getRetargetingName(): ?string
    {
        return $this->retargetingName;
    }

    /**
     * @param string $retargetingName
     * @return self
     */
    public function setRetargetingName(?string $retargetingName): self
    {
        $this->retargetingName = $retargetingName;
        return $this;
    }

    /**
     * @return int
     */
    public function getRetargetingTag(): ?int
    {
        return $this->retargetingTag;
    }

    /**
     * @param int $retargetingTag
     * @return self
     */
    public function setRetargetingTag(?int $retargetingTag): self
    {
        $this->retargetingTag = $retargetingTag;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->inActiveType !== null) {
            $result['InActive_type'] = $this->inActiveType;
        }
        if ($this->retargetingName !== null) {
            $result['retargeting_name'] = $this->retargetingName;
        }
        if ($this->retargetingTag !== null) {
            $result['retargeting_tag'] = $this->retargetingTag;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['InActive_type'] ?? null) !== null) {
            $obj->inActiveType = (string) $v;
        }
        if (($v = $data['retargeting_name'] ?? null) !== null) {
            $obj->retargetingName = (string) $v;
        }
        if (($v = $data['retargeting_tag'] ?? null) !== null) {
            $obj->retargetingTag = (int) $v;
        }
        return $obj;
    }
}
