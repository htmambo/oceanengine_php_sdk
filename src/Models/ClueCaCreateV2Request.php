<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ClueCaCreateV2Request implements \JsonSerializable
{
    /**
     * 广告主id
     * @var int
     */
    protected ?int $advertiserId = null;

    /**
     * 线索通后台企微id
     * @var string
     */
    protected ?string $corpId = null;

    /**
     * 获客助手组件名称
     * @var string
     */
    protected ?string $name = null;

    /**
     * 客服user_id列表
     * @var string[]
     */
    protected ?array $userIds = null;

    /**
     * 广告主id
     * @return int
     */
    public function getAdvertiserId(): ?int
    {
        return $this->advertiserId;
    }

    /**
     * 广告主id
     * @param int $advertiserId
     * @return self
     */
    public function setAdvertiserId(?int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    /**
     * 线索通后台企微id
     * @return string
     */
    public function getCorpId(): ?string
    {
        return $this->corpId;
    }

    /**
     * 线索通后台企微id
     * @param string $corpId
     * @return self
     */
    public function setCorpId(?string $corpId): self
    {
        $this->corpId = $corpId;
        return $this;
    }

    /**
     * 获客助手组件名称
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * 获客助手组件名称
     * @param string $name
     * @return self
     */
    public function setName(?string $name): self
    {
        $this->name = $name;
        return $this;
    }

    /**
     * 客服user_id列表
     * @return string[]
     */
    public function getUserIds(): ?array
    {
        return $this->userIds;
    }

    /**
     * 客服user_id列表
     * @param string[] $userIds
     * @return self
     */
    public function setUserIds(?array $userIds): self
    {
        $this->userIds = $userIds;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->advertiserId !== null) {
            $result['advertiser_id'] = $this->advertiserId;
        }
        if ($this->corpId !== null) {
            $result['corp_id'] = $this->corpId;
        }
        if ($this->name !== null) {
            $result['name'] = $this->name;
        }
        if ($this->userIds !== null) {
            $result['user_ids'] = $this->userIds;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['advertiser_id'] ?? null) !== null) {
            $obj->advertiserId = (int) $v;
        }
        if (($v = $data['corp_id'] ?? null) !== null) {
            $obj->corpId = (string) $v;
        }
        if (($v = $data['name'] ?? null) !== null) {
            $obj->name = (string) $v;
        }
        if (($v = $data['user_ids'] ?? null) !== null && is_array($v)) {
            $obj->userIds = $v;
        }
        return $obj;
    }
}
