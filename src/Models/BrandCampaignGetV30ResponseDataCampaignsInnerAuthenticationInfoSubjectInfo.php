<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class BrandCampaignGetV30ResponseDataCampaignsInnerAuthenticationInfoSubjectInfo implements \JsonSerializable
{
    /**
     * 名称
     * @var string
     */
    protected ?string $name = null;

    /**
     * 内广签约主体ID
     * @var string
     */
    protected ?string $subjectId = null;

    /**
     * 名称
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * 名称
     * @param string $name
     * @return self
     */
    public function setName(?string $name): self
    {
        $this->name = $name;
        return $this;
    }

    /**
     * 内广签约主体ID
     * @return string
     */
    public function getSubjectId(): ?string
    {
        return $this->subjectId;
    }

    /**
     * 内广签约主体ID
     * @param string $subjectId
     * @return self
     */
    public function setSubjectId(?string $subjectId): self
    {
        $this->subjectId = $subjectId;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->name !== null) {
            $result['name'] = $this->name;
        }
        if ($this->subjectId !== null) {
            $result['subject_id'] = $this->subjectId;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['name'] ?? null) !== null) {
            $obj->name = (string) $v;
        }
        if (($v = $data['subject_id'] ?? null) !== null) {
            $obj->subjectId = (string) $v;
        }
        return $obj;
    }
}
