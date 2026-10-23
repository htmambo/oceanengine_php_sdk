<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ReportReportLiveRoomAudiencePortraitGetV30ResponseDataListInnerFields implements \JsonSerializable
{
    /**
     * 整体观众平均停留时长
     * @var int
     */
    protected ?int $allAvgLiveWatchDurationSecondsTd = null;

    /**
     * 整体评论数
     * @var int
     */
    protected ?int $allLiveCommentCntTd = null;

    /**
     * 整体加入粉丝团数
     * @var int
     */
    protected ?int $allLiveFansClubJoinCntTd = null;

    /**
     * 整体关注数
     * @var int
     */
    protected ?int $allLiveFollowCntTd = null;

    /**
     * 整体点赞数
     * @var int
     */
    protected ?int $allLiveLikeCntTd = null;

    /**
     * 整体分享数
     * @var int
     */
    protected ?int $allLiveShareCntTd = null;

    /**
     * 整体超一分钟观看数
     * @var int
     */
    protected ?int $allLiveSingleWatchOver1mCntTd = null;

    /**
     * 整体观看数
     * @var int
     */
    protected ?int $allLiveWatchCntTd = null;

    /**
     * 安卓应用激活
     * @var int
     */
    protected ?int $stdAppActiveCntTd = null;

    /**
     * 注册数
     * @var int
     */
    protected ?int $stdAppActiveRegisterCntTd = null;

    /**
     * 安卓下载完成数
     * @var int
     */
    protected ?int $stdAppDownloadFinishCntTd = null;

    /**
     * 安卓应用下载开始
     * @var int
     */
    protected ?int $stdAppDownloadStartCntTd = null;

    /**
     * 首次付费数
     * @var int
     */
    protected ?int $stdAppFirstPaymentCntTd = null;

    /**
     * 付费次数
     * @var int
     */
    protected ?int $stdAppGamePayCntTd = null;

    /**
     * 安卓应用安装完成
     * @var int
     */
    protected ?int $stdAppInstallFinishCntTd = null;

    /**
     * 有效咨询
     * @var int
     */
    protected ?int $stdConsultEffectiveCntTd = null;

    /**
     * 有效获客
     * @var int
     */
    protected ?int $stdCustomerEffectiveCntTd = null;

    /**
     * 表单提交数
     * @var int
     */
    protected ?int $stdFormSubmitCntTd = null;

    /**
     * 保险支付数
     * @var int
     */
    protected ?int $stdPremiumPaymentCntTd = null;

    /**
     * 添加企业微信数
     * @var int
     */
    protected ?int $stdWorkWechatAddedCntTd = null;

    /**
     * 整体观众平均停留时长
     * @return int
     */
    public function getAllAvgLiveWatchDurationSecondsTd(): ?int
    {
        return $this->allAvgLiveWatchDurationSecondsTd;
    }

    /**
     * 整体观众平均停留时长
     * @param int $allAvgLiveWatchDurationSecondsTd
     * @return self
     */
    public function setAllAvgLiveWatchDurationSecondsTd(?int $allAvgLiveWatchDurationSecondsTd): self
    {
        $this->allAvgLiveWatchDurationSecondsTd = $allAvgLiveWatchDurationSecondsTd;
        return $this;
    }

    /**
     * 整体评论数
     * @return int
     */
    public function getAllLiveCommentCntTd(): ?int
    {
        return $this->allLiveCommentCntTd;
    }

    /**
     * 整体评论数
     * @param int $allLiveCommentCntTd
     * @return self
     */
    public function setAllLiveCommentCntTd(?int $allLiveCommentCntTd): self
    {
        $this->allLiveCommentCntTd = $allLiveCommentCntTd;
        return $this;
    }

    /**
     * 整体加入粉丝团数
     * @return int
     */
    public function getAllLiveFansClubJoinCntTd(): ?int
    {
        return $this->allLiveFansClubJoinCntTd;
    }

    /**
     * 整体加入粉丝团数
     * @param int $allLiveFansClubJoinCntTd
     * @return self
     */
    public function setAllLiveFansClubJoinCntTd(?int $allLiveFansClubJoinCntTd): self
    {
        $this->allLiveFansClubJoinCntTd = $allLiveFansClubJoinCntTd;
        return $this;
    }

    /**
     * 整体关注数
     * @return int
     */
    public function getAllLiveFollowCntTd(): ?int
    {
        return $this->allLiveFollowCntTd;
    }

    /**
     * 整体关注数
     * @param int $allLiveFollowCntTd
     * @return self
     */
    public function setAllLiveFollowCntTd(?int $allLiveFollowCntTd): self
    {
        $this->allLiveFollowCntTd = $allLiveFollowCntTd;
        return $this;
    }

    /**
     * 整体点赞数
     * @return int
     */
    public function getAllLiveLikeCntTd(): ?int
    {
        return $this->allLiveLikeCntTd;
    }

    /**
     * 整体点赞数
     * @param int $allLiveLikeCntTd
     * @return self
     */
    public function setAllLiveLikeCntTd(?int $allLiveLikeCntTd): self
    {
        $this->allLiveLikeCntTd = $allLiveLikeCntTd;
        return $this;
    }

    /**
     * 整体分享数
     * @return int
     */
    public function getAllLiveShareCntTd(): ?int
    {
        return $this->allLiveShareCntTd;
    }

    /**
     * 整体分享数
     * @param int $allLiveShareCntTd
     * @return self
     */
    public function setAllLiveShareCntTd(?int $allLiveShareCntTd): self
    {
        $this->allLiveShareCntTd = $allLiveShareCntTd;
        return $this;
    }

    /**
     * 整体超一分钟观看数
     * @return int
     */
    public function getAllLiveSingleWatchOver1mCntTd(): ?int
    {
        return $this->allLiveSingleWatchOver1mCntTd;
    }

    /**
     * 整体超一分钟观看数
     * @param int $allLiveSingleWatchOver1mCntTd
     * @return self
     */
    public function setAllLiveSingleWatchOver1mCntTd(?int $allLiveSingleWatchOver1mCntTd): self
    {
        $this->allLiveSingleWatchOver1mCntTd = $allLiveSingleWatchOver1mCntTd;
        return $this;
    }

    /**
     * 整体观看数
     * @return int
     */
    public function getAllLiveWatchCntTd(): ?int
    {
        return $this->allLiveWatchCntTd;
    }

    /**
     * 整体观看数
     * @param int $allLiveWatchCntTd
     * @return self
     */
    public function setAllLiveWatchCntTd(?int $allLiveWatchCntTd): self
    {
        $this->allLiveWatchCntTd = $allLiveWatchCntTd;
        return $this;
    }

    /**
     * 安卓应用激活
     * @return int
     */
    public function getStdAppActiveCntTd(): ?int
    {
        return $this->stdAppActiveCntTd;
    }

    /**
     * 安卓应用激活
     * @param int $stdAppActiveCntTd
     * @return self
     */
    public function setStdAppActiveCntTd(?int $stdAppActiveCntTd): self
    {
        $this->stdAppActiveCntTd = $stdAppActiveCntTd;
        return $this;
    }

    /**
     * 注册数
     * @return int
     */
    public function getStdAppActiveRegisterCntTd(): ?int
    {
        return $this->stdAppActiveRegisterCntTd;
    }

    /**
     * 注册数
     * @param int $stdAppActiveRegisterCntTd
     * @return self
     */
    public function setStdAppActiveRegisterCntTd(?int $stdAppActiveRegisterCntTd): self
    {
        $this->stdAppActiveRegisterCntTd = $stdAppActiveRegisterCntTd;
        return $this;
    }

    /**
     * 安卓下载完成数
     * @return int
     */
    public function getStdAppDownloadFinishCntTd(): ?int
    {
        return $this->stdAppDownloadFinishCntTd;
    }

    /**
     * 安卓下载完成数
     * @param int $stdAppDownloadFinishCntTd
     * @return self
     */
    public function setStdAppDownloadFinishCntTd(?int $stdAppDownloadFinishCntTd): self
    {
        $this->stdAppDownloadFinishCntTd = $stdAppDownloadFinishCntTd;
        return $this;
    }

    /**
     * 安卓应用下载开始
     * @return int
     */
    public function getStdAppDownloadStartCntTd(): ?int
    {
        return $this->stdAppDownloadStartCntTd;
    }

    /**
     * 安卓应用下载开始
     * @param int $stdAppDownloadStartCntTd
     * @return self
     */
    public function setStdAppDownloadStartCntTd(?int $stdAppDownloadStartCntTd): self
    {
        $this->stdAppDownloadStartCntTd = $stdAppDownloadStartCntTd;
        return $this;
    }

    /**
     * 首次付费数
     * @return int
     */
    public function getStdAppFirstPaymentCntTd(): ?int
    {
        return $this->stdAppFirstPaymentCntTd;
    }

    /**
     * 首次付费数
     * @param int $stdAppFirstPaymentCntTd
     * @return self
     */
    public function setStdAppFirstPaymentCntTd(?int $stdAppFirstPaymentCntTd): self
    {
        $this->stdAppFirstPaymentCntTd = $stdAppFirstPaymentCntTd;
        return $this;
    }

    /**
     * 付费次数
     * @return int
     */
    public function getStdAppGamePayCntTd(): ?int
    {
        return $this->stdAppGamePayCntTd;
    }

    /**
     * 付费次数
     * @param int $stdAppGamePayCntTd
     * @return self
     */
    public function setStdAppGamePayCntTd(?int $stdAppGamePayCntTd): self
    {
        $this->stdAppGamePayCntTd = $stdAppGamePayCntTd;
        return $this;
    }

    /**
     * 安卓应用安装完成
     * @return int
     */
    public function getStdAppInstallFinishCntTd(): ?int
    {
        return $this->stdAppInstallFinishCntTd;
    }

    /**
     * 安卓应用安装完成
     * @param int $stdAppInstallFinishCntTd
     * @return self
     */
    public function setStdAppInstallFinishCntTd(?int $stdAppInstallFinishCntTd): self
    {
        $this->stdAppInstallFinishCntTd = $stdAppInstallFinishCntTd;
        return $this;
    }

    /**
     * 有效咨询
     * @return int
     */
    public function getStdConsultEffectiveCntTd(): ?int
    {
        return $this->stdConsultEffectiveCntTd;
    }

    /**
     * 有效咨询
     * @param int $stdConsultEffectiveCntTd
     * @return self
     */
    public function setStdConsultEffectiveCntTd(?int $stdConsultEffectiveCntTd): self
    {
        $this->stdConsultEffectiveCntTd = $stdConsultEffectiveCntTd;
        return $this;
    }

    /**
     * 有效获客
     * @return int
     */
    public function getStdCustomerEffectiveCntTd(): ?int
    {
        return $this->stdCustomerEffectiveCntTd;
    }

    /**
     * 有效获客
     * @param int $stdCustomerEffectiveCntTd
     * @return self
     */
    public function setStdCustomerEffectiveCntTd(?int $stdCustomerEffectiveCntTd): self
    {
        $this->stdCustomerEffectiveCntTd = $stdCustomerEffectiveCntTd;
        return $this;
    }

    /**
     * 表单提交数
     * @return int
     */
    public function getStdFormSubmitCntTd(): ?int
    {
        return $this->stdFormSubmitCntTd;
    }

    /**
     * 表单提交数
     * @param int $stdFormSubmitCntTd
     * @return self
     */
    public function setStdFormSubmitCntTd(?int $stdFormSubmitCntTd): self
    {
        $this->stdFormSubmitCntTd = $stdFormSubmitCntTd;
        return $this;
    }

    /**
     * 保险支付数
     * @return int
     */
    public function getStdPremiumPaymentCntTd(): ?int
    {
        return $this->stdPremiumPaymentCntTd;
    }

    /**
     * 保险支付数
     * @param int $stdPremiumPaymentCntTd
     * @return self
     */
    public function setStdPremiumPaymentCntTd(?int $stdPremiumPaymentCntTd): self
    {
        $this->stdPremiumPaymentCntTd = $stdPremiumPaymentCntTd;
        return $this;
    }

    /**
     * 添加企业微信数
     * @return int
     */
    public function getStdWorkWechatAddedCntTd(): ?int
    {
        return $this->stdWorkWechatAddedCntTd;
    }

    /**
     * 添加企业微信数
     * @param int $stdWorkWechatAddedCntTd
     * @return self
     */
    public function setStdWorkWechatAddedCntTd(?int $stdWorkWechatAddedCntTd): self
    {
        $this->stdWorkWechatAddedCntTd = $stdWorkWechatAddedCntTd;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->allAvgLiveWatchDurationSecondsTd !== null) {
            $result['all_avg_live_watch_duration_seconds_td'] = $this->allAvgLiveWatchDurationSecondsTd;
        }
        if ($this->allLiveCommentCntTd !== null) {
            $result['all_live_comment_cnt_td'] = $this->allLiveCommentCntTd;
        }
        if ($this->allLiveFansClubJoinCntTd !== null) {
            $result['all_live_fans_club_join_cnt_td'] = $this->allLiveFansClubJoinCntTd;
        }
        if ($this->allLiveFollowCntTd !== null) {
            $result['all_live_follow_cnt_td'] = $this->allLiveFollowCntTd;
        }
        if ($this->allLiveLikeCntTd !== null) {
            $result['all_live_like_cnt_td'] = $this->allLiveLikeCntTd;
        }
        if ($this->allLiveShareCntTd !== null) {
            $result['all_live_share_cnt_td'] = $this->allLiveShareCntTd;
        }
        if ($this->allLiveSingleWatchOver1mCntTd !== null) {
            $result['all_live_single_watch_over_1m_cnt_td'] = $this->allLiveSingleWatchOver1mCntTd;
        }
        if ($this->allLiveWatchCntTd !== null) {
            $result['all_live_watch_cnt_td'] = $this->allLiveWatchCntTd;
        }
        if ($this->stdAppActiveCntTd !== null) {
            $result['std_app_active_cnt_td'] = $this->stdAppActiveCntTd;
        }
        if ($this->stdAppActiveRegisterCntTd !== null) {
            $result['std_app_active_register_cnt_td'] = $this->stdAppActiveRegisterCntTd;
        }
        if ($this->stdAppDownloadFinishCntTd !== null) {
            $result['std_app_download_finish_cnt_td'] = $this->stdAppDownloadFinishCntTd;
        }
        if ($this->stdAppDownloadStartCntTd !== null) {
            $result['std_app_download_start_cnt_td'] = $this->stdAppDownloadStartCntTd;
        }
        if ($this->stdAppFirstPaymentCntTd !== null) {
            $result['std_app_first_payment_cnt_td'] = $this->stdAppFirstPaymentCntTd;
        }
        if ($this->stdAppGamePayCntTd !== null) {
            $result['std_app_game_pay_cnt_td'] = $this->stdAppGamePayCntTd;
        }
        if ($this->stdAppInstallFinishCntTd !== null) {
            $result['std_app_install_finish_cnt_td'] = $this->stdAppInstallFinishCntTd;
        }
        if ($this->stdConsultEffectiveCntTd !== null) {
            $result['std_consult_effective_cnt_td'] = $this->stdConsultEffectiveCntTd;
        }
        if ($this->stdCustomerEffectiveCntTd !== null) {
            $result['std_customer_effective_cnt_td'] = $this->stdCustomerEffectiveCntTd;
        }
        if ($this->stdFormSubmitCntTd !== null) {
            $result['std_form_submit_cnt_td'] = $this->stdFormSubmitCntTd;
        }
        if ($this->stdPremiumPaymentCntTd !== null) {
            $result['std_premium_payment_cnt_td'] = $this->stdPremiumPaymentCntTd;
        }
        if ($this->stdWorkWechatAddedCntTd !== null) {
            $result['std_work_wechat_added_cnt_td'] = $this->stdWorkWechatAddedCntTd;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['all_avg_live_watch_duration_seconds_td'] ?? null) !== null) {
            $obj->allAvgLiveWatchDurationSecondsTd = (int) $v;
        }
        if (($v = $data['all_live_comment_cnt_td'] ?? null) !== null) {
            $obj->allLiveCommentCntTd = (int) $v;
        }
        if (($v = $data['all_live_fans_club_join_cnt_td'] ?? null) !== null) {
            $obj->allLiveFansClubJoinCntTd = (int) $v;
        }
        if (($v = $data['all_live_follow_cnt_td'] ?? null) !== null) {
            $obj->allLiveFollowCntTd = (int) $v;
        }
        if (($v = $data['all_live_like_cnt_td'] ?? null) !== null) {
            $obj->allLiveLikeCntTd = (int) $v;
        }
        if (($v = $data['all_live_share_cnt_td'] ?? null) !== null) {
            $obj->allLiveShareCntTd = (int) $v;
        }
        if (($v = $data['all_live_single_watch_over_1m_cnt_td'] ?? null) !== null) {
            $obj->allLiveSingleWatchOver1mCntTd = (int) $v;
        }
        if (($v = $data['all_live_watch_cnt_td'] ?? null) !== null) {
            $obj->allLiveWatchCntTd = (int) $v;
        }
        if (($v = $data['std_app_active_cnt_td'] ?? null) !== null) {
            $obj->stdAppActiveCntTd = (int) $v;
        }
        if (($v = $data['std_app_active_register_cnt_td'] ?? null) !== null) {
            $obj->stdAppActiveRegisterCntTd = (int) $v;
        }
        if (($v = $data['std_app_download_finish_cnt_td'] ?? null) !== null) {
            $obj->stdAppDownloadFinishCntTd = (int) $v;
        }
        if (($v = $data['std_app_download_start_cnt_td'] ?? null) !== null) {
            $obj->stdAppDownloadStartCntTd = (int) $v;
        }
        if (($v = $data['std_app_first_payment_cnt_td'] ?? null) !== null) {
            $obj->stdAppFirstPaymentCntTd = (int) $v;
        }
        if (($v = $data['std_app_game_pay_cnt_td'] ?? null) !== null) {
            $obj->stdAppGamePayCntTd = (int) $v;
        }
        if (($v = $data['std_app_install_finish_cnt_td'] ?? null) !== null) {
            $obj->stdAppInstallFinishCntTd = (int) $v;
        }
        if (($v = $data['std_consult_effective_cnt_td'] ?? null) !== null) {
            $obj->stdConsultEffectiveCntTd = (int) $v;
        }
        if (($v = $data['std_customer_effective_cnt_td'] ?? null) !== null) {
            $obj->stdCustomerEffectiveCntTd = (int) $v;
        }
        if (($v = $data['std_form_submit_cnt_td'] ?? null) !== null) {
            $obj->stdFormSubmitCntTd = (int) $v;
        }
        if (($v = $data['std_premium_payment_cnt_td'] ?? null) !== null) {
            $obj->stdPremiumPaymentCntTd = (int) $v;
        }
        if (($v = $data['std_work_wechat_added_cnt_td'] ?? null) !== null) {
            $obj->stdWorkWechatAddedCntTd = (int) $v;
        }
        return $obj;
    }
}
