<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class LocalCustomAudienceGetV30ResponseDataCustomAudienceListInner implements \JsonSerializable
{
    /**
     * 人群包预计覆盖人数
     * @var int
     */
    protected ?int $coverNum = null;

    /**
     * 人群包创建时间
     * @var string
     */
    protected ?string $createTime = null;

    /**
     * 人群包ID
     * @var int
     */
    protected ?int $customAudienceId = null;

    /**
     * 人群包名称
     * @var string
     */
    protected ?string $name = null;

    /**
     * 人群包属性
     * @var string
     */
    protected ?string $tagsType = null;

    /**
     * 人群包预计覆盖人数
     * @return int
     */
    public function getCoverNum(): ?int
    {
        return $this->coverNum;
    }

    /**
     * 人群包预计覆盖人数
     * @param int $coverNum
     * @return self
     */
    public function setCoverNum(?int $coverNum): self
    {
        $this->coverNum = $coverNum;
        return $this;
    }

    /**
     * 人群包创建时间
     * @return string
     */
    public function getCreateTime(): ?string
    {
        return $this->createTime;
    }

    /**
     * 人群包创建时间
     * @param string $createTime
     * @return self
     */
    public function setCreateTime(?string $createTime): self
    {
        $this->createTime = $createTime;
        return $this;
    }

    /**
     * 人群包ID
     * @return int
     */
    public function getCustomAudienceId(): ?int
    {
        return $this->customAudienceId;
    }

    /**
     * 人群包ID
     * @param int $customAudienceId
     * @return self
     */
    public function setCustomAudienceId(?int $customAudienceId): self
    {
        $this->customAudienceId = $customAudienceId;
        return $this;
    }

    /**
     * 人群包名称
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * 人群包名称
     * @param string $name
     * @return self
     */
    public function setName(?string $name): self
    {
        $this->name = $name;
        return $this;
    }

    /**
     * 人群包属性
     * @return string
     */
    public function getTagsType(): ?string
    {
        return $this->tagsType;
    }

    /**
     * 人群包属性
     * @param string $tagsType
     * @return self
     */
    public function setTagsType(?string $tagsType): self
    {
        $this->tagsType = $tagsType;
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
        if ($this->createTime !== null) {
            $result['create_time'] = $this->createTime;
        }
        if ($this->customAudienceId !== null) {
            $result['custom_audience_id'] = $this->customAudienceId;
        }
        if ($this->name !== null) {
            $result['name'] = $this->name;
        }
        if ($this->tagsType !== null) {
            $result['tags_type'] = $this->tagsType;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['cover_num'] ?? null) !== null) {
            $obj->coverNum = (int) $v;
        }
        if (($v = $data['create_time'] ?? null) !== null) {
            $obj->createTime = (string) $v;
        }
        if (($v = $data['custom_audience_id'] ?? null) !== null) {
            $obj->customAudienceId = (int) $v;
        }
        if (($v = $data['name'] ?? null) !== null) {
            $obj->name = (string) $v;
        }
        if (($v = $data['tags_type'] ?? null) !== null) {
            $obj->tagsType = (string) $v;
        }
        return $obj;
    }
}
