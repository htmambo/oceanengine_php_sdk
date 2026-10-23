<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarDemanderDemanderGetAuthorBindInfoV2ResponseDataAuthorInfoInner implements \JsonSerializable
{
    /**
     * @var string
     */
    protected ?string $bizUid = null;

    /**
     * 抖音号
     * @var string
     */
    protected ?string $douyinId = null;

    /**
     * 星图昵称
     * @var string
     */
    protected ?string $nickName = null;

    /**
     * 星图id
     * @var int
     */
    protected ?int $starId = null;

    /**
     * @return string
     */
    public function getBizUid(): ?string
    {
        return $this->bizUid;
    }

    /**
     * @param string $bizUid
     * @return self
     */
    public function setBizUid(?string $bizUid): self
    {
        $this->bizUid = $bizUid;
        return $this;
    }

    /**
     * 抖音号
     * @return string
     */
    public function getDouyinId(): ?string
    {
        return $this->douyinId;
    }

    /**
     * 抖音号
     * @param string $douyinId
     * @return self
     */
    public function setDouyinId(?string $douyinId): self
    {
        $this->douyinId = $douyinId;
        return $this;
    }

    /**
     * 星图昵称
     * @return string
     */
    public function getNickName(): ?string
    {
        return $this->nickName;
    }

    /**
     * 星图昵称
     * @param string $nickName
     * @return self
     */
    public function setNickName(?string $nickName): self
    {
        $this->nickName = $nickName;
        return $this;
    }

    /**
     * 星图id
     * @return int
     */
    public function getStarId(): ?int
    {
        return $this->starId;
    }

    /**
     * 星图id
     * @param int $starId
     * @return self
     */
    public function setStarId(?int $starId): self
    {
        $this->starId = $starId;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->bizUid !== null) {
            $result['biz_uid'] = $this->bizUid;
        }
        if ($this->douyinId !== null) {
            $result['douyin_id'] = $this->douyinId;
        }
        if ($this->nickName !== null) {
            $result['nick_name'] = $this->nickName;
        }
        if ($this->starId !== null) {
            $result['star_id'] = $this->starId;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['biz_uid'] ?? null) !== null) {
            $obj->bizUid = (string) $v;
        }
        if (($v = $data['douyin_id'] ?? null) !== null) {
            $obj->douyinId = (string) $v;
        }
        if (($v = $data['nick_name'] ?? null) !== null) {
            $obj->nickName = (string) $v;
        }
        if (($v = $data['star_id'] ?? null) !== null) {
            $obj->starId = (int) $v;
        }
        return $obj;
    }
}
