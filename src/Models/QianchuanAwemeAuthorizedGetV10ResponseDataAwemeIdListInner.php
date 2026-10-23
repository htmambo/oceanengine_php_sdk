<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanAwemeAuthorizedGetV10ResponseDataAwemeIdListInner implements \JsonSerializable
{
    /**
     * 抖音头像
     * @var string
     */
    protected ?string $awemeAvatar = null;

    /**
     * 抖音号是否有直播带货权限，只有具有带货权限才可以创建直播带货投放 如需开通请前往抖音APP-【创作作者服务中心】-【商品橱窗】进行申请
     * @var bool
     */
    protected ?bool $awemeHasLivePermission = null;

    /**
     * 标识抖音号是否有\"使用抖音号发布作品\"权限 注意：针对官方/自运营类型的抖音号，是否支持\"使用抖音号发布作品\"得根据该字段来做判断。如果为false，那么针对官方/自运营的创编权限同达人。
     * @var bool
     */
    protected ?bool $awemeHasPublishPermission = null;

    /**
     * 该抖音号是否有直播全域推广计划投放，如果开启了投放，那么该抖音号不可以用来投放其他直播带货广告
     * @var bool
     */
    protected ?bool $awemeHasUniProm = null;

    /**
     * 抖音号是否有短视频带货权限，只有具有带货权限才可以创建短视频投放 如需开通请前往抖音APP-【创作作者服务中心】-【商品橱窗】进行申请
     * @var bool
     */
    protected ?bool $awemeHasVideoPermission = null;

    /**
     * 抖音id，用于创建计划，拉取抖音号视频素材时入参
     * @var int
     */
    protected ?int $awemeId = null;

    /**
     * 抖音号名称
     * @var string
     */
    protected ?string $awemeName = null;

    /**
     * 抖音号，即客户在手机端上看到的抖音号，若向客户披露抖音号请使用该字段
     * @var string
     */
    protected ?string $awemeShowId = null;

    /**
     * @var \Oceanengine\Models\QianchuanAwemeAuthorizedGetV10DataAwemeIdListAwemeStatus
     */
    protected ?string $awemeStatus = null;

    /**
     * 抖音号授权类型，枚举值： - `AWEME_COOPERATOR` 合作达人 - `DOU_SHOP_LIVE_SELF` 抖店自运营 - `EXPIRED` 已过期 - `OFFICIAL` 官方 - `ROOM` 直播间 -`SELF` 自运营 - `TALENT_USER_OWNER` 无店达人登录时的owner账户 - `UNAUTHORIZED` 未授权
     * @var \Oceanengine\Models\QianchuanAwemeAuthorizedGetV10DataAwemeIdListBindType[]
     */
    protected ?array $bindType = null;

    /**
     * 抖音头像
     * @return string
     */
    public function getAwemeAvatar(): ?string
    {
        return $this->awemeAvatar;
    }

    /**
     * 抖音头像
     * @param string $awemeAvatar
     * @return self
     */
    public function setAwemeAvatar(?string $awemeAvatar): self
    {
        $this->awemeAvatar = $awemeAvatar;
        return $this;
    }

    /**
     * 抖音号是否有直播带货权限，只有具有带货权限才可以创建直播带货投放 如需开通请前往抖音APP-【创作作者服务中心】-【商品橱窗】进行申请
     * @return bool
     */
    public function getAwemeHasLivePermission(): ?bool
    {
        return $this->awemeHasLivePermission;
    }

    /**
     * 抖音号是否有直播带货权限，只有具有带货权限才可以创建直播带货投放 如需开通请前往抖音APP-【创作作者服务中心】-【商品橱窗】进行申请
     * @param bool $awemeHasLivePermission
     * @return self
     */
    public function setAwemeHasLivePermission(?bool $awemeHasLivePermission): self
    {
        $this->awemeHasLivePermission = $awemeHasLivePermission;
        return $this;
    }

    /**
     * 标识抖音号是否有\"使用抖音号发布作品\"权限 注意：针对官方/自运营类型的抖音号，是否支持\"使用抖音号发布作品\"得根据该字段来做判断。如果为false，那么针对官方/自运营的创编权限同达人。
     * @return bool
     */
    public function getAwemeHasPublishPermission(): ?bool
    {
        return $this->awemeHasPublishPermission;
    }

    /**
     * 标识抖音号是否有\"使用抖音号发布作品\"权限 注意：针对官方/自运营类型的抖音号，是否支持\"使用抖音号发布作品\"得根据该字段来做判断。如果为false，那么针对官方/自运营的创编权限同达人。
     * @param bool $awemeHasPublishPermission
     * @return self
     */
    public function setAwemeHasPublishPermission(?bool $awemeHasPublishPermission): self
    {
        $this->awemeHasPublishPermission = $awemeHasPublishPermission;
        return $this;
    }

    /**
     * 该抖音号是否有直播全域推广计划投放，如果开启了投放，那么该抖音号不可以用来投放其他直播带货广告
     * @return bool
     */
    public function getAwemeHasUniProm(): ?bool
    {
        return $this->awemeHasUniProm;
    }

    /**
     * 该抖音号是否有直播全域推广计划投放，如果开启了投放，那么该抖音号不可以用来投放其他直播带货广告
     * @param bool $awemeHasUniProm
     * @return self
     */
    public function setAwemeHasUniProm(?bool $awemeHasUniProm): self
    {
        $this->awemeHasUniProm = $awemeHasUniProm;
        return $this;
    }

    /**
     * 抖音号是否有短视频带货权限，只有具有带货权限才可以创建短视频投放 如需开通请前往抖音APP-【创作作者服务中心】-【商品橱窗】进行申请
     * @return bool
     */
    public function getAwemeHasVideoPermission(): ?bool
    {
        return $this->awemeHasVideoPermission;
    }

    /**
     * 抖音号是否有短视频带货权限，只有具有带货权限才可以创建短视频投放 如需开通请前往抖音APP-【创作作者服务中心】-【商品橱窗】进行申请
     * @param bool $awemeHasVideoPermission
     * @return self
     */
    public function setAwemeHasVideoPermission(?bool $awemeHasVideoPermission): self
    {
        $this->awemeHasVideoPermission = $awemeHasVideoPermission;
        return $this;
    }

    /**
     * 抖音id，用于创建计划，拉取抖音号视频素材时入参
     * @return int
     */
    public function getAwemeId(): ?int
    {
        return $this->awemeId;
    }

    /**
     * 抖音id，用于创建计划，拉取抖音号视频素材时入参
     * @param int $awemeId
     * @return self
     */
    public function setAwemeId(?int $awemeId): self
    {
        $this->awemeId = $awemeId;
        return $this;
    }

    /**
     * 抖音号名称
     * @return string
     */
    public function getAwemeName(): ?string
    {
        return $this->awemeName;
    }

    /**
     * 抖音号名称
     * @param string $awemeName
     * @return self
     */
    public function setAwemeName(?string $awemeName): self
    {
        $this->awemeName = $awemeName;
        return $this;
    }

    /**
     * 抖音号，即客户在手机端上看到的抖音号，若向客户披露抖音号请使用该字段
     * @return string
     */
    public function getAwemeShowId(): ?string
    {
        return $this->awemeShowId;
    }

    /**
     * 抖音号，即客户在手机端上看到的抖音号，若向客户披露抖音号请使用该字段
     * @param string $awemeShowId
     * @return self
     */
    public function setAwemeShowId(?string $awemeShowId): self
    {
        $this->awemeShowId = $awemeShowId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanAwemeAuthorizedGetV10DataAwemeIdListAwemeStatus
     */
    public function getAwemeStatus(): ?string
    {
        return $this->awemeStatus;
    }

    /**
     * @param \Oceanengine\Models\QianchuanAwemeAuthorizedGetV10DataAwemeIdListAwemeStatus $awemeStatus
     * @return self
     */
    public function setAwemeStatus(?string $awemeStatus): self
    {
        $this->awemeStatus = $awemeStatus;
        return $this;
    }

    /**
     * 抖音号授权类型，枚举值： - `AWEME_COOPERATOR` 合作达人 - `DOU_SHOP_LIVE_SELF` 抖店自运营 - `EXPIRED` 已过期 - `OFFICIAL` 官方 - `ROOM` 直播间 -`SELF` 自运营 - `TALENT_USER_OWNER` 无店达人登录时的owner账户 - `UNAUTHORIZED` 未授权
     * @return \Oceanengine\Models\QianchuanAwemeAuthorizedGetV10DataAwemeIdListBindType[]
     */
    public function getBindType(): ?array
    {
        return $this->bindType;
    }

    /**
     * 抖音号授权类型，枚举值： - `AWEME_COOPERATOR` 合作达人 - `DOU_SHOP_LIVE_SELF` 抖店自运营 - `EXPIRED` 已过期 - `OFFICIAL` 官方 - `ROOM` 直播间 -`SELF` 自运营 - `TALENT_USER_OWNER` 无店达人登录时的owner账户 - `UNAUTHORIZED` 未授权
     * @param \Oceanengine\Models\QianchuanAwemeAuthorizedGetV10DataAwemeIdListBindType[] $bindType
     * @return self
     */
    public function setBindType(?array $bindType): self
    {
        $this->bindType = $bindType;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->awemeAvatar !== null) {
            $result['aweme_avatar'] = $this->awemeAvatar;
        }
        if ($this->awemeHasLivePermission !== null) {
            $result['aweme_has_live_permission'] = $this->awemeHasLivePermission;
        }
        if ($this->awemeHasPublishPermission !== null) {
            $result['aweme_has_publish_permission'] = $this->awemeHasPublishPermission;
        }
        if ($this->awemeHasUniProm !== null) {
            $result['aweme_has_uni_prom'] = $this->awemeHasUniProm;
        }
        if ($this->awemeHasVideoPermission !== null) {
            $result['aweme_has_video_permission'] = $this->awemeHasVideoPermission;
        }
        if ($this->awemeId !== null) {
            $result['aweme_id'] = $this->awemeId;
        }
        if ($this->awemeName !== null) {
            $result['aweme_name'] = $this->awemeName;
        }
        if ($this->awemeShowId !== null) {
            $result['aweme_show_id'] = $this->awemeShowId;
        }
        if ($this->awemeStatus !== null) {
            $result['aweme_status'] = $this->awemeStatus;
        }
        if ($this->bindType !== null) {
            $result['bind_type'] = $this->bindType;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['aweme_avatar'] ?? null) !== null) {
            $obj->awemeAvatar = (string) $v;
        }
        if (($v = $data['aweme_has_live_permission'] ?? null) !== null) {
            $obj->awemeHasLivePermission = (bool) $v;
        }
        if (($v = $data['aweme_has_publish_permission'] ?? null) !== null) {
            $obj->awemeHasPublishPermission = (bool) $v;
        }
        if (($v = $data['aweme_has_uni_prom'] ?? null) !== null) {
            $obj->awemeHasUniProm = (bool) $v;
        }
        if (($v = $data['aweme_has_video_permission'] ?? null) !== null) {
            $obj->awemeHasVideoPermission = (bool) $v;
        }
        if (($v = $data['aweme_id'] ?? null) !== null) {
            $obj->awemeId = (int) $v;
        }
        if (($v = $data['aweme_name'] ?? null) !== null) {
            $obj->awemeName = (string) $v;
        }
        if (($v = $data['aweme_show_id'] ?? null) !== null) {
            $obj->awemeShowId = (string) $v;
        }
        if (($v = $data['aweme_status'] ?? null) !== null) {
            $obj->awemeStatus = (string) $v;
        }
        if (($v = $data['bind_type'] ?? null) !== null && is_array($v)) {
            $obj->bindType = $v;
        }
        return $obj;
    }
}
