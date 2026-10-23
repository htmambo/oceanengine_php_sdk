<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarDemandMixListGetV2ResponseDataMixListInnerBaseInfo implements \JsonSerializable
{
    /**
     * 创建时间
     * @var int
     */
    protected ?int $createTime = null;

    /**
     * 剧集审核状态
     * @var int
     */
    protected ?int $mixAwemeStatus = null;

    /**
     * 剧集ID
     * @var int
     */
    protected ?int $mixId = null;

    /**
     * 剧集标题
     * @var string
     */
    protected ?string $title = null;

    /**
     * 创建时间
     * @return int
     */
    public function getCreateTime(): ?int
    {
        return $this->createTime;
    }

    /**
     * 创建时间
     * @param int $createTime
     * @return self
     */
    public function setCreateTime(?int $createTime): self
    {
        $this->createTime = $createTime;
        return $this;
    }

    /**
     * 剧集审核状态
     * @return int
     */
    public function getMixAwemeStatus(): ?int
    {
        return $this->mixAwemeStatus;
    }

    /**
     * 剧集审核状态
     * @param int $mixAwemeStatus
     * @return self
     */
    public function setMixAwemeStatus(?int $mixAwemeStatus): self
    {
        $this->mixAwemeStatus = $mixAwemeStatus;
        return $this;
    }

    /**
     * 剧集ID
     * @return int
     */
    public function getMixId(): ?int
    {
        return $this->mixId;
    }

    /**
     * 剧集ID
     * @param int $mixId
     * @return self
     */
    public function setMixId(?int $mixId): self
    {
        $this->mixId = $mixId;
        return $this;
    }

    /**
     * 剧集标题
     * @return string
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }

    /**
     * 剧集标题
     * @param string $title
     * @return self
     */
    public function setTitle(?string $title): self
    {
        $this->title = $title;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->createTime !== null) {
            $result['create_time'] = $this->createTime;
        }
        if ($this->mixAwemeStatus !== null) {
            $result['mix_aweme_status'] = $this->mixAwemeStatus;
        }
        if ($this->mixId !== null) {
            $result['mix_id'] = $this->mixId;
        }
        if ($this->title !== null) {
            $result['title'] = $this->title;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['create_time'] ?? null) !== null) {
            $obj->createTime = (int) $v;
        }
        if (($v = $data['mix_aweme_status'] ?? null) !== null) {
            $obj->mixAwemeStatus = (int) $v;
        }
        if (($v = $data['mix_id'] ?? null) !== null) {
            $obj->mixId = (int) $v;
        }
        if (($v = $data['title'] ?? null) !== null) {
            $obj->title = (string) $v;
        }
        return $obj;
    }
}
