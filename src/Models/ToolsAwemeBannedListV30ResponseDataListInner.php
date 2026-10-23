<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsAwemeBannedListV30ResponseDataListInner implements \JsonSerializable
{
    /**
     * 抖音昵称
     * @var string
     */
    protected ?string $awemeName = null;

    /**
     * 抖音用户id
     * @var string
     */
    protected ?string $awemeUserId = null;

    /**
     * @var \Oceanengine\Models\ToolsAwemeBannedListV30DataListBannedType
     */
    protected ?string $bannedType = null;

    /**
     * 昵称关键词
     * @var string
     */
    protected ?string $nicknameKeyword = null;

    /**
     * 抖音昵称
     * @return string
     */
    public function getAwemeName(): ?string
    {
        return $this->awemeName;
    }

    /**
     * 抖音昵称
     * @param string $awemeName
     * @return self
     */
    public function setAwemeName(?string $awemeName): self
    {
        $this->awemeName = $awemeName;
        return $this;
    }

    /**
     * 抖音用户id
     * @return string
     */
    public function getAwemeUserId(): ?string
    {
        return $this->awemeUserId;
    }

    /**
     * 抖音用户id
     * @param string $awemeUserId
     * @return self
     */
    public function setAwemeUserId(?string $awemeUserId): self
    {
        $this->awemeUserId = $awemeUserId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsAwemeBannedListV30DataListBannedType
     */
    public function getBannedType(): ?string
    {
        return $this->bannedType;
    }

    /**
     * @param \Oceanengine\Models\ToolsAwemeBannedListV30DataListBannedType $bannedType
     * @return self
     */
    public function setBannedType(?string $bannedType): self
    {
        $this->bannedType = $bannedType;
        return $this;
    }

    /**
     * 昵称关键词
     * @return string
     */
    public function getNicknameKeyword(): ?string
    {
        return $this->nicknameKeyword;
    }

    /**
     * 昵称关键词
     * @param string $nicknameKeyword
     * @return self
     */
    public function setNicknameKeyword(?string $nicknameKeyword): self
    {
        $this->nicknameKeyword = $nicknameKeyword;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->awemeName !== null) {
            $result['aweme_name'] = $this->awemeName;
        }
        if ($this->awemeUserId !== null) {
            $result['aweme_user_id'] = $this->awemeUserId;
        }
        if ($this->bannedType !== null) {
            $result['banned_type'] = $this->bannedType;
        }
        if ($this->nicknameKeyword !== null) {
            $result['nickname_keyword'] = $this->nicknameKeyword;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['aweme_name'] ?? null) !== null) {
            $obj->awemeName = (string) $v;
        }
        if (($v = $data['aweme_user_id'] ?? null) !== null) {
            $obj->awemeUserId = (string) $v;
        }
        if (($v = $data['banned_type'] ?? null) !== null) {
            $obj->bannedType = (string) $v;
        }
        if (($v = $data['nickname_keyword'] ?? null) !== null) {
            $obj->nicknameKeyword = (string) $v;
        }
        return $obj;
    }
}
