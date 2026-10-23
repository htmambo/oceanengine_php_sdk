<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanAdDetailGetV10ResponseDataAudienceInactiveRetargetingTagsInner implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\QianchuanAdDetailGetV10DataAudienceInactiveRetargetingTagsInactiveType
     */
    protected ?string $inactiveType = null;

    /**
     * @var string
     */
    protected ?string $name = null;

    /**
     * @var int
     */
    protected ?int $retargetingTag = null;

    /**
     * @return \Oceanengine\Models\QianchuanAdDetailGetV10DataAudienceInactiveRetargetingTagsInactiveType
     */
    public function getInactiveType(): ?string
    {
        return $this->inactiveType;
    }

    /**
     * @param \Oceanengine\Models\QianchuanAdDetailGetV10DataAudienceInactiveRetargetingTagsInactiveType $inactiveType
     * @return self
     */
    public function setInactiveType(?string $inactiveType): self
    {
        $this->inactiveType = $inactiveType;
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
        if ($this->inactiveType !== null) {
            $result['inactive_type'] = $this->inactiveType;
        }
        if ($this->name !== null) {
            $result['name'] = $this->name;
        }
        if ($this->retargetingTag !== null) {
            $result['retargeting_tag'] = $this->retargetingTag;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['inactive_type'] ?? null) !== null) {
            $obj->inactiveType = (string) $v;
        }
        if (($v = $data['name'] ?? null) !== null) {
            $obj->name = (string) $v;
        }
        if (($v = $data['retargeting_tag'] ?? null) !== null) {
            $obj->retargetingTag = (int) $v;
        }
        return $obj;
    }
}
