<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsCommentTermsBannedDeleteV30Request implements \JsonSerializable
{
    /**
     * 广告主id
     * @var int
     */
    protected ?int $advertiserId = null;

    /**
     * 抖音号，当is_apply_to_adv不传或为false时，aweme_id生效
     * @var string
     */
    protected ?string $awemeId = null;

    /**
     * 是否应用于当前账户，当is_apply_to_adv不传或为false时，aweme_id生效
     * @var bool
     */
    protected ?bool $isApplyToAdv = null;

    /**
     * 屏蔽词列表，一次最多操作100个词，屏蔽词最大20字
     * @var string[]
     */
    protected ?array $terms = null;

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
     * 抖音号，当is_apply_to_adv不传或为false时，aweme_id生效
     * @return string
     */
    public function getAwemeId(): ?string
    {
        return $this->awemeId;
    }

    /**
     * 抖音号，当is_apply_to_adv不传或为false时，aweme_id生效
     * @param string $awemeId
     * @return self
     */
    public function setAwemeId(?string $awemeId): self
    {
        $this->awemeId = $awemeId;
        return $this;
    }

    /**
     * 是否应用于当前账户，当is_apply_to_adv不传或为false时，aweme_id生效
     * @return bool
     */
    public function getIsApplyToAdv(): ?bool
    {
        return $this->isApplyToAdv;
    }

    /**
     * 是否应用于当前账户，当is_apply_to_adv不传或为false时，aweme_id生效
     * @param bool $isApplyToAdv
     * @return self
     */
    public function setIsApplyToAdv(?bool $isApplyToAdv): self
    {
        $this->isApplyToAdv = $isApplyToAdv;
        return $this;
    }

    /**
     * 屏蔽词列表，一次最多操作100个词，屏蔽词最大20字
     * @return string[]
     */
    public function getTerms(): ?array
    {
        return $this->terms;
    }

    /**
     * 屏蔽词列表，一次最多操作100个词，屏蔽词最大20字
     * @param string[] $terms
     * @return self
     */
    public function setTerms(?array $terms): self
    {
        $this->terms = $terms;
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
        if ($this->awemeId !== null) {
            $result['aweme_id'] = $this->awemeId;
        }
        if ($this->isApplyToAdv !== null) {
            $result['is_apply_to_adv'] = $this->isApplyToAdv;
        }
        if ($this->terms !== null) {
            $result['terms'] = $this->terms;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['advertiser_id'] ?? null) !== null) {
            $obj->advertiserId = (int) $v;
        }
        if (($v = $data['aweme_id'] ?? null) !== null) {
            $obj->awemeId = (string) $v;
        }
        if (($v = $data['is_apply_to_adv'] ?? null) !== null) {
            $obj->isApplyToAdv = (bool) $v;
        }
        if (($v = $data['terms'] ?? null) !== null && is_array($v)) {
            $obj->terms = $v;
        }
        return $obj;
    }
}
