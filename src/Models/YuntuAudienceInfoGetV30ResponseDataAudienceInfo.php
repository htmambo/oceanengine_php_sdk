<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class YuntuAudienceInfoGetV30ResponseDataAudienceInfo implements \JsonSerializable
{
    /**
     * 人群包覆盖人群数目
     * @var int
     */
    protected ?int $coverNum = null;

    /**
     * 人群包id
     * @var int
     */
    protected ?int $customAudienceId = null;

    /**
     * 人群包名称
     * @var string
     */
    protected ?string $name = null;

    /**
     * 人群包状态
     * @var int
     */
    protected ?int $status = null;

    /**
     * 人群包覆盖人群数目
     * @return int
     */
    public function getCoverNum(): ?int
    {
        return $this->coverNum;
    }

    /**
     * 人群包覆盖人群数目
     * @param int $coverNum
     * @return self
     */
    public function setCoverNum(?int $coverNum): self
    {
        $this->coverNum = $coverNum;
        return $this;
    }

    /**
     * 人群包id
     * @return int
     */
    public function getCustomAudienceId(): ?int
    {
        return $this->customAudienceId;
    }

    /**
     * 人群包id
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
     * 人群包状态
     * @return int
     */
    public function getStatus(): ?int
    {
        return $this->status;
    }

    /**
     * 人群包状态
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
        if ($this->customAudienceId !== null) {
            $result['custom_audience_id'] = $this->customAudienceId;
        }
        if ($this->name !== null) {
            $result['name'] = $this->name;
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
        if (($v = $data['custom_audience_id'] ?? null) !== null) {
            $obj->customAudienceId = (int) $v;
        }
        if (($v = $data['name'] ?? null) !== null) {
            $obj->name = (string) $v;
        }
        if (($v = $data['status'] ?? null) !== null) {
            $obj->status = (int) $v;
        }
        return $obj;
    }
}
