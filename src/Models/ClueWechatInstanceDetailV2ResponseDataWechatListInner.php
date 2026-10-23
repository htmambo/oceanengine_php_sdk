<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ClueWechatInstanceDetailV2ResponseDataWechatListInner implements \JsonSerializable
{
    /**
     * 公众号的开发者ID
     * @var string
     */
    protected ?string $appId = null;

    /**
     * 总复制次数
     * @var int
     */
    protected ?int $clueCount = null;

    /**
     * 创建时间，格式：2022-07-21 15:36:09
     * @var string
     */
    protected ?string $createTime = null;

    /**
     * @var \Oceanengine\Models\ClueWechatInstanceDetailV2DataWechatListHasQrCode
     */
    protected ?string $hasQrCode = null;

    /**
     * 微信号在当前号码包复制次数
     * @var int
     */
    protected ?int $instanceClueCount = null;

    /**
     * 修改时间，格式：2022-07-21 15:36:09
     * @var string
     */
    protected ?string $modTime = null;

    /**
     * 微信昵称
     * @var string
     */
    protected ?string $nickName = null;

    /**
     * 启用状态，0使用中、1暂停使用
     * @var int
     */
    protected ?int $status = null;

    /**
     * 微信号尾缀
     * @var string
     */
    protected ?string $suffix = null;

    /**
     * @var \Oceanengine\Models\ClueWechatInstanceDetailV2DataWechatListWechatType
     */
    protected ?string $wechatType = null;

    /**
     * 公众号的开发者ID
     * @return string
     */
    public function getAppId(): ?string
    {
        return $this->appId;
    }

    /**
     * 公众号的开发者ID
     * @param string $appId
     * @return self
     */
    public function setAppId(?string $appId): self
    {
        $this->appId = $appId;
        return $this;
    }

    /**
     * 总复制次数
     * @return int
     */
    public function getClueCount(): ?int
    {
        return $this->clueCount;
    }

    /**
     * 总复制次数
     * @param int $clueCount
     * @return self
     */
    public function setClueCount(?int $clueCount): self
    {
        $this->clueCount = $clueCount;
        return $this;
    }

    /**
     * 创建时间，格式：2022-07-21 15:36:09
     * @return string
     */
    public function getCreateTime(): ?string
    {
        return $this->createTime;
    }

    /**
     * 创建时间，格式：2022-07-21 15:36:09
     * @param string $createTime
     * @return self
     */
    public function setCreateTime(?string $createTime): self
    {
        $this->createTime = $createTime;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ClueWechatInstanceDetailV2DataWechatListHasQrCode
     */
    public function getHasQrCode(): ?string
    {
        return $this->hasQrCode;
    }

    /**
     * @param \Oceanengine\Models\ClueWechatInstanceDetailV2DataWechatListHasQrCode $hasQrCode
     * @return self
     */
    public function setHasQrCode(?string $hasQrCode): self
    {
        $this->hasQrCode = $hasQrCode;
        return $this;
    }

    /**
     * 微信号在当前号码包复制次数
     * @return int
     */
    public function getInstanceClueCount(): ?int
    {
        return $this->instanceClueCount;
    }

    /**
     * 微信号在当前号码包复制次数
     * @param int $instanceClueCount
     * @return self
     */
    public function setInstanceClueCount(?int $instanceClueCount): self
    {
        $this->instanceClueCount = $instanceClueCount;
        return $this;
    }

    /**
     * 修改时间，格式：2022-07-21 15:36:09
     * @return string
     */
    public function getModTime(): ?string
    {
        return $this->modTime;
    }

    /**
     * 修改时间，格式：2022-07-21 15:36:09
     * @param string $modTime
     * @return self
     */
    public function setModTime(?string $modTime): self
    {
        $this->modTime = $modTime;
        return $this;
    }

    /**
     * 微信昵称
     * @return string
     */
    public function getNickName(): ?string
    {
        return $this->nickName;
    }

    /**
     * 微信昵称
     * @param string $nickName
     * @return self
     */
    public function setNickName(?string $nickName): self
    {
        $this->nickName = $nickName;
        return $this;
    }

    /**
     * 启用状态，0使用中、1暂停使用
     * @return int
     */
    public function getStatus(): ?int
    {
        return $this->status;
    }

    /**
     * 启用状态，0使用中、1暂停使用
     * @param int $status
     * @return self
     */
    public function setStatus(?int $status): self
    {
        $this->status = $status;
        return $this;
    }

    /**
     * 微信号尾缀
     * @return string
     */
    public function getSuffix(): ?string
    {
        return $this->suffix;
    }

    /**
     * 微信号尾缀
     * @param string $suffix
     * @return self
     */
    public function setSuffix(?string $suffix): self
    {
        $this->suffix = $suffix;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ClueWechatInstanceDetailV2DataWechatListWechatType
     */
    public function getWechatType(): ?string
    {
        return $this->wechatType;
    }

    /**
     * @param \Oceanengine\Models\ClueWechatInstanceDetailV2DataWechatListWechatType $wechatType
     * @return self
     */
    public function setWechatType(?string $wechatType): self
    {
        $this->wechatType = $wechatType;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->appId !== null) {
            $result['app_id'] = $this->appId;
        }
        if ($this->clueCount !== null) {
            $result['clue_count'] = $this->clueCount;
        }
        if ($this->createTime !== null) {
            $result['create_time'] = $this->createTime;
        }
        if ($this->hasQrCode !== null) {
            $result['has_qr_code'] = $this->hasQrCode;
        }
        if ($this->instanceClueCount !== null) {
            $result['instance_clue_count'] = $this->instanceClueCount;
        }
        if ($this->modTime !== null) {
            $result['mod_time'] = $this->modTime;
        }
        if ($this->nickName !== null) {
            $result['nick_name'] = $this->nickName;
        }
        if ($this->status !== null) {
            $result['status'] = $this->status;
        }
        if ($this->suffix !== null) {
            $result['suffix'] = $this->suffix;
        }
        if ($this->wechatType !== null) {
            $result['wechat_type'] = $this->wechatType;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['app_id'] ?? null) !== null) {
            $obj->appId = (string) $v;
        }
        if (($v = $data['clue_count'] ?? null) !== null) {
            $obj->clueCount = (int) $v;
        }
        if (($v = $data['create_time'] ?? null) !== null) {
            $obj->createTime = (string) $v;
        }
        if (($v = $data['has_qr_code'] ?? null) !== null) {
            $obj->hasQrCode = (string) $v;
        }
        if (($v = $data['instance_clue_count'] ?? null) !== null) {
            $obj->instanceClueCount = (int) $v;
        }
        if (($v = $data['mod_time'] ?? null) !== null) {
            $obj->modTime = (string) $v;
        }
        if (($v = $data['nick_name'] ?? null) !== null) {
            $obj->nickName = (string) $v;
        }
        if (($v = $data['status'] ?? null) !== null) {
            $obj->status = (int) $v;
        }
        if (($v = $data['suffix'] ?? null) !== null) {
            $obj->suffix = (string) $v;
        }
        if (($v = $data['wechat_type'] ?? null) !== null) {
            $obj->wechatType = (string) $v;
        }
        return $obj;
    }
}
