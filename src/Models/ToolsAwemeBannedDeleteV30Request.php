<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsAwemeBannedDeleteV30Request implements \JsonSerializable
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
     * 抖音用户id列表，传入屏蔽用户的抖音号； 当banned_type为AWEME_TYPE时必填，每次最多传50个抖音id，纯数字id不能以0开头；一个抖音号最多屏蔽5000个抖音ID。
     * @var string[]
     */
    protected ?array $awemeUserIds = null;

    /**
     * @var \Oceanengine\Models\ToolsAwemeBannedDeleteV30BannedType
     */
    protected ?string $bannedType = null;

    /**
     * 是否应用于当前账户，当is_apply_to_adv不传或为false时，aweme_id生效
     * @var bool
     */
    protected ?bool $isApplyToAdv = null;

    /**
     * 抖音昵称关键词列表， 当banned_type为CUSTOM_TYPE时必填，关键词长度不大于20个字；每次最多传50个关键词。
     * @var string[]
     */
    protected ?array $nicknameKeywords = null;

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
     * 抖音用户id列表，传入屏蔽用户的抖音号； 当banned_type为AWEME_TYPE时必填，每次最多传50个抖音id，纯数字id不能以0开头；一个抖音号最多屏蔽5000个抖音ID。
     * @return string[]
     */
    public function getAwemeUserIds(): ?array
    {
        return $this->awemeUserIds;
    }

    /**
     * 抖音用户id列表，传入屏蔽用户的抖音号； 当banned_type为AWEME_TYPE时必填，每次最多传50个抖音id，纯数字id不能以0开头；一个抖音号最多屏蔽5000个抖音ID。
     * @param string[] $awemeUserIds
     * @return self
     */
    public function setAwemeUserIds(?array $awemeUserIds): self
    {
        $this->awemeUserIds = $awemeUserIds;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsAwemeBannedDeleteV30BannedType
     */
    public function getBannedType(): ?string
    {
        return $this->bannedType;
    }

    /**
     * @param \Oceanengine\Models\ToolsAwemeBannedDeleteV30BannedType $bannedType
     * @return self
     */
    public function setBannedType(?string $bannedType): self
    {
        $this->bannedType = $bannedType;
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
     * 抖音昵称关键词列表， 当banned_type为CUSTOM_TYPE时必填，关键词长度不大于20个字；每次最多传50个关键词。
     * @return string[]
     */
    public function getNicknameKeywords(): ?array
    {
        return $this->nicknameKeywords;
    }

    /**
     * 抖音昵称关键词列表， 当banned_type为CUSTOM_TYPE时必填，关键词长度不大于20个字；每次最多传50个关键词。
     * @param string[] $nicknameKeywords
     * @return self
     */
    public function setNicknameKeywords(?array $nicknameKeywords): self
    {
        $this->nicknameKeywords = $nicknameKeywords;
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
        if ($this->awemeUserIds !== null) {
            $result['aweme_user_ids'] = $this->awemeUserIds;
        }
        if ($this->bannedType !== null) {
            $result['banned_type'] = $this->bannedType;
        }
        if ($this->isApplyToAdv !== null) {
            $result['is_apply_to_adv'] = $this->isApplyToAdv;
        }
        if ($this->nicknameKeywords !== null) {
            $result['nickname_keywords'] = $this->nicknameKeywords;
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
        if (($v = $data['aweme_user_ids'] ?? null) !== null && is_array($v)) {
            $obj->awemeUserIds = $v;
        }
        if (($v = $data['banned_type'] ?? null) !== null) {
            $obj->bannedType = (string) $v;
        }
        if (($v = $data['is_apply_to_adv'] ?? null) !== null) {
            $obj->isApplyToAdv = (bool) $v;
        }
        if (($v = $data['nickname_keywords'] ?? null) !== null && is_array($v)) {
            $obj->nicknameKeywords = $v;
        }
        return $obj;
    }
}
