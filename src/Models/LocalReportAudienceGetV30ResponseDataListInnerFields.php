<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class LocalReportAudienceGetV30ResponseDataListInnerFields implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $clickCnt = null;

    /**
     * @var int
     */
    protected ?int $clueMessageCount = null;

    /**
     * @var int
     */
    protected ?int $cluePayOrderCnt = null;

    /**
     * @var float
     */
    protected ?float $conversionCost = null;

    /**
     * @var float
     */
    protected ?float $conversionRate = null;

    /**
     * @var int
     */
    protected ?int $convertCnt = null;

    /**
     * @var float
     */
    protected ?float $ctr = null;

    /**
     * @var int
     */
    protected ?int $dyFollow = null;

    /**
     * @var int
     */
    protected ?int $formCnt = null;

    /**
     * @var int
     */
    protected ?int $intentionFormCnt = null;

    /**
     * @var int
     */
    protected ?int $intentionPhoneCnt = null;

    /**
     * @var int
     */
    protected ?int $lifeConvertCnt = null;

    /**
     * @var float
     */
    protected ?float $liveCostPerOtoPayOrderForRoi2New = null;

    /**
     * @var int
     */
    protected ?int $liveOtoPayOrderCount = null;

    /**
     * @var int
     */
    protected ?int $liveOtoPayOrderCountForRoi2 = null;

    /**
     * @var float
     */
    protected ?float $liveOtoPayOrderStatAmount = null;

    /**
     * @var float
     */
    protected ?float $liveOtoPayOrderStatAmountForRoi2 = null;

    /**
     * @var int
     */
    protected ?int $liveShowCountForRoi2 = null;

    /**
     * @var float
     */
    protected ?float $liveStatCostForRoi2 = null;

    /**
     * @var int
     */
    protected ?int $liveWatchCountForRoi2 = null;

    /**
     * @var int
     */
    protected ?int $lubanLiveEnterCnt = null;

    /**
     * @var int
     */
    protected ?int $messageActionCnt = null;

    /**
     * @var int
     */
    protected ?int $phoneConnectCnt = null;

    /**
     * @var int
     */
    protected ?int $poiRecommendCount = null;

    /**
     * @var int
     */
    protected ?int $showCnt = null;

    /**
     * @var float
     */
    protected ?float $statCost = null;

    /**
     * @var int
     */
    protected ?int $totalPlay = null;

    /**
     * @var float
     */
    protected ?float $videoCostPerOtoPayOrderForRoi2New = null;

    /**
     * @var int
     */
    protected ?int $videoOtoPayOrderCount = null;

    /**
     * @var int
     */
    protected ?int $videoOtoPayOrderCountForRoi2 = null;

    /**
     * @var float
     */
    protected ?float $videoOtoPayOrderRoi2New = null;

    /**
     * @var float
     */
    protected ?float $videoOtoPayOrderStatAmount = null;

    /**
     * @var float
     */
    protected ?float $videoOtoPayOrderStatAmountForRoi2 = null;

    /**
     * @var float
     */
    protected ?float $videoStatCostForRoi2 = null;

    /**
     * @return int
     */
    public function getClickCnt(): ?int
    {
        return $this->clickCnt;
    }

    /**
     * @param int $clickCnt
     * @return self
     */
    public function setClickCnt(?int $clickCnt): self
    {
        $this->clickCnt = $clickCnt;
        return $this;
    }

    /**
     * @return int
     */
    public function getClueMessageCount(): ?int
    {
        return $this->clueMessageCount;
    }

    /**
     * @param int $clueMessageCount
     * @return self
     */
    public function setClueMessageCount(?int $clueMessageCount): self
    {
        $this->clueMessageCount = $clueMessageCount;
        return $this;
    }

    /**
     * @return int
     */
    public function getCluePayOrderCnt(): ?int
    {
        return $this->cluePayOrderCnt;
    }

    /**
     * @param int $cluePayOrderCnt
     * @return self
     */
    public function setCluePayOrderCnt(?int $cluePayOrderCnt): self
    {
        $this->cluePayOrderCnt = $cluePayOrderCnt;
        return $this;
    }

    /**
     * @return float
     */
    public function getConversionCost(): ?float
    {
        return $this->conversionCost;
    }

    /**
     * @param float $conversionCost
     * @return self
     */
    public function setConversionCost(?float $conversionCost): self
    {
        $this->conversionCost = $conversionCost;
        return $this;
    }

    /**
     * @return float
     */
    public function getConversionRate(): ?float
    {
        return $this->conversionRate;
    }

    /**
     * @param float $conversionRate
     * @return self
     */
    public function setConversionRate(?float $conversionRate): self
    {
        $this->conversionRate = $conversionRate;
        return $this;
    }

    /**
     * @return int
     */
    public function getConvertCnt(): ?int
    {
        return $this->convertCnt;
    }

    /**
     * @param int $convertCnt
     * @return self
     */
    public function setConvertCnt(?int $convertCnt): self
    {
        $this->convertCnt = $convertCnt;
        return $this;
    }

    /**
     * @return float
     */
    public function getCtr(): ?float
    {
        return $this->ctr;
    }

    /**
     * @param float $ctr
     * @return self
     */
    public function setCtr(?float $ctr): self
    {
        $this->ctr = $ctr;
        return $this;
    }

    /**
     * @return int
     */
    public function getDyFollow(): ?int
    {
        return $this->dyFollow;
    }

    /**
     * @param int $dyFollow
     * @return self
     */
    public function setDyFollow(?int $dyFollow): self
    {
        $this->dyFollow = $dyFollow;
        return $this;
    }

    /**
     * @return int
     */
    public function getFormCnt(): ?int
    {
        return $this->formCnt;
    }

    /**
     * @param int $formCnt
     * @return self
     */
    public function setFormCnt(?int $formCnt): self
    {
        $this->formCnt = $formCnt;
        return $this;
    }

    /**
     * @return int
     */
    public function getIntentionFormCnt(): ?int
    {
        return $this->intentionFormCnt;
    }

    /**
     * @param int $intentionFormCnt
     * @return self
     */
    public function setIntentionFormCnt(?int $intentionFormCnt): self
    {
        $this->intentionFormCnt = $intentionFormCnt;
        return $this;
    }

    /**
     * @return int
     */
    public function getIntentionPhoneCnt(): ?int
    {
        return $this->intentionPhoneCnt;
    }

    /**
     * @param int $intentionPhoneCnt
     * @return self
     */
    public function setIntentionPhoneCnt(?int $intentionPhoneCnt): self
    {
        $this->intentionPhoneCnt = $intentionPhoneCnt;
        return $this;
    }

    /**
     * @return int
     */
    public function getLifeConvertCnt(): ?int
    {
        return $this->lifeConvertCnt;
    }

    /**
     * @param int $lifeConvertCnt
     * @return self
     */
    public function setLifeConvertCnt(?int $lifeConvertCnt): self
    {
        $this->lifeConvertCnt = $lifeConvertCnt;
        return $this;
    }

    /**
     * @return float
     */
    public function getLiveCostPerOtoPayOrderForRoi2New(): ?float
    {
        return $this->liveCostPerOtoPayOrderForRoi2New;
    }

    /**
     * @param float $liveCostPerOtoPayOrderForRoi2New
     * @return self
     */
    public function setLiveCostPerOtoPayOrderForRoi2New(?float $liveCostPerOtoPayOrderForRoi2New): self
    {
        $this->liveCostPerOtoPayOrderForRoi2New = $liveCostPerOtoPayOrderForRoi2New;
        return $this;
    }

    /**
     * @return int
     */
    public function getLiveOtoPayOrderCount(): ?int
    {
        return $this->liveOtoPayOrderCount;
    }

    /**
     * @param int $liveOtoPayOrderCount
     * @return self
     */
    public function setLiveOtoPayOrderCount(?int $liveOtoPayOrderCount): self
    {
        $this->liveOtoPayOrderCount = $liveOtoPayOrderCount;
        return $this;
    }

    /**
     * @return int
     */
    public function getLiveOtoPayOrderCountForRoi2(): ?int
    {
        return $this->liveOtoPayOrderCountForRoi2;
    }

    /**
     * @param int $liveOtoPayOrderCountForRoi2
     * @return self
     */
    public function setLiveOtoPayOrderCountForRoi2(?int $liveOtoPayOrderCountForRoi2): self
    {
        $this->liveOtoPayOrderCountForRoi2 = $liveOtoPayOrderCountForRoi2;
        return $this;
    }

    /**
     * @return float
     */
    public function getLiveOtoPayOrderStatAmount(): ?float
    {
        return $this->liveOtoPayOrderStatAmount;
    }

    /**
     * @param float $liveOtoPayOrderStatAmount
     * @return self
     */
    public function setLiveOtoPayOrderStatAmount(?float $liveOtoPayOrderStatAmount): self
    {
        $this->liveOtoPayOrderStatAmount = $liveOtoPayOrderStatAmount;
        return $this;
    }

    /**
     * @return float
     */
    public function getLiveOtoPayOrderStatAmountForRoi2(): ?float
    {
        return $this->liveOtoPayOrderStatAmountForRoi2;
    }

    /**
     * @param float $liveOtoPayOrderStatAmountForRoi2
     * @return self
     */
    public function setLiveOtoPayOrderStatAmountForRoi2(?float $liveOtoPayOrderStatAmountForRoi2): self
    {
        $this->liveOtoPayOrderStatAmountForRoi2 = $liveOtoPayOrderStatAmountForRoi2;
        return $this;
    }

    /**
     * @return int
     */
    public function getLiveShowCountForRoi2(): ?int
    {
        return $this->liveShowCountForRoi2;
    }

    /**
     * @param int $liveShowCountForRoi2
     * @return self
     */
    public function setLiveShowCountForRoi2(?int $liveShowCountForRoi2): self
    {
        $this->liveShowCountForRoi2 = $liveShowCountForRoi2;
        return $this;
    }

    /**
     * @return float
     */
    public function getLiveStatCostForRoi2(): ?float
    {
        return $this->liveStatCostForRoi2;
    }

    /**
     * @param float $liveStatCostForRoi2
     * @return self
     */
    public function setLiveStatCostForRoi2(?float $liveStatCostForRoi2): self
    {
        $this->liveStatCostForRoi2 = $liveStatCostForRoi2;
        return $this;
    }

    /**
     * @return int
     */
    public function getLiveWatchCountForRoi2(): ?int
    {
        return $this->liveWatchCountForRoi2;
    }

    /**
     * @param int $liveWatchCountForRoi2
     * @return self
     */
    public function setLiveWatchCountForRoi2(?int $liveWatchCountForRoi2): self
    {
        $this->liveWatchCountForRoi2 = $liveWatchCountForRoi2;
        return $this;
    }

    /**
     * @return int
     */
    public function getLubanLiveEnterCnt(): ?int
    {
        return $this->lubanLiveEnterCnt;
    }

    /**
     * @param int $lubanLiveEnterCnt
     * @return self
     */
    public function setLubanLiveEnterCnt(?int $lubanLiveEnterCnt): self
    {
        $this->lubanLiveEnterCnt = $lubanLiveEnterCnt;
        return $this;
    }

    /**
     * @return int
     */
    public function getMessageActionCnt(): ?int
    {
        return $this->messageActionCnt;
    }

    /**
     * @param int $messageActionCnt
     * @return self
     */
    public function setMessageActionCnt(?int $messageActionCnt): self
    {
        $this->messageActionCnt = $messageActionCnt;
        return $this;
    }

    /**
     * @return int
     */
    public function getPhoneConnectCnt(): ?int
    {
        return $this->phoneConnectCnt;
    }

    /**
     * @param int $phoneConnectCnt
     * @return self
     */
    public function setPhoneConnectCnt(?int $phoneConnectCnt): self
    {
        $this->phoneConnectCnt = $phoneConnectCnt;
        return $this;
    }

    /**
     * @return int
     */
    public function getPoiRecommendCount(): ?int
    {
        return $this->poiRecommendCount;
    }

    /**
     * @param int $poiRecommendCount
     * @return self
     */
    public function setPoiRecommendCount(?int $poiRecommendCount): self
    {
        $this->poiRecommendCount = $poiRecommendCount;
        return $this;
    }

    /**
     * @return int
     */
    public function getShowCnt(): ?int
    {
        return $this->showCnt;
    }

    /**
     * @param int $showCnt
     * @return self
     */
    public function setShowCnt(?int $showCnt): self
    {
        $this->showCnt = $showCnt;
        return $this;
    }

    /**
     * @return float
     */
    public function getStatCost(): ?float
    {
        return $this->statCost;
    }

    /**
     * @param float $statCost
     * @return self
     */
    public function setStatCost(?float $statCost): self
    {
        $this->statCost = $statCost;
        return $this;
    }

    /**
     * @return int
     */
    public function getTotalPlay(): ?int
    {
        return $this->totalPlay;
    }

    /**
     * @param int $totalPlay
     * @return self
     */
    public function setTotalPlay(?int $totalPlay): self
    {
        $this->totalPlay = $totalPlay;
        return $this;
    }

    /**
     * @return float
     */
    public function getVideoCostPerOtoPayOrderForRoi2New(): ?float
    {
        return $this->videoCostPerOtoPayOrderForRoi2New;
    }

    /**
     * @param float $videoCostPerOtoPayOrderForRoi2New
     * @return self
     */
    public function setVideoCostPerOtoPayOrderForRoi2New(?float $videoCostPerOtoPayOrderForRoi2New): self
    {
        $this->videoCostPerOtoPayOrderForRoi2New = $videoCostPerOtoPayOrderForRoi2New;
        return $this;
    }

    /**
     * @return int
     */
    public function getVideoOtoPayOrderCount(): ?int
    {
        return $this->videoOtoPayOrderCount;
    }

    /**
     * @param int $videoOtoPayOrderCount
     * @return self
     */
    public function setVideoOtoPayOrderCount(?int $videoOtoPayOrderCount): self
    {
        $this->videoOtoPayOrderCount = $videoOtoPayOrderCount;
        return $this;
    }

    /**
     * @return int
     */
    public function getVideoOtoPayOrderCountForRoi2(): ?int
    {
        return $this->videoOtoPayOrderCountForRoi2;
    }

    /**
     * @param int $videoOtoPayOrderCountForRoi2
     * @return self
     */
    public function setVideoOtoPayOrderCountForRoi2(?int $videoOtoPayOrderCountForRoi2): self
    {
        $this->videoOtoPayOrderCountForRoi2 = $videoOtoPayOrderCountForRoi2;
        return $this;
    }

    /**
     * @return float
     */
    public function getVideoOtoPayOrderRoi2New(): ?float
    {
        return $this->videoOtoPayOrderRoi2New;
    }

    /**
     * @param float $videoOtoPayOrderRoi2New
     * @return self
     */
    public function setVideoOtoPayOrderRoi2New(?float $videoOtoPayOrderRoi2New): self
    {
        $this->videoOtoPayOrderRoi2New = $videoOtoPayOrderRoi2New;
        return $this;
    }

    /**
     * @return float
     */
    public function getVideoOtoPayOrderStatAmount(): ?float
    {
        return $this->videoOtoPayOrderStatAmount;
    }

    /**
     * @param float $videoOtoPayOrderStatAmount
     * @return self
     */
    public function setVideoOtoPayOrderStatAmount(?float $videoOtoPayOrderStatAmount): self
    {
        $this->videoOtoPayOrderStatAmount = $videoOtoPayOrderStatAmount;
        return $this;
    }

    /**
     * @return float
     */
    public function getVideoOtoPayOrderStatAmountForRoi2(): ?float
    {
        return $this->videoOtoPayOrderStatAmountForRoi2;
    }

    /**
     * @param float $videoOtoPayOrderStatAmountForRoi2
     * @return self
     */
    public function setVideoOtoPayOrderStatAmountForRoi2(?float $videoOtoPayOrderStatAmountForRoi2): self
    {
        $this->videoOtoPayOrderStatAmountForRoi2 = $videoOtoPayOrderStatAmountForRoi2;
        return $this;
    }

    /**
     * @return float
     */
    public function getVideoStatCostForRoi2(): ?float
    {
        return $this->videoStatCostForRoi2;
    }

    /**
     * @param float $videoStatCostForRoi2
     * @return self
     */
    public function setVideoStatCostForRoi2(?float $videoStatCostForRoi2): self
    {
        $this->videoStatCostForRoi2 = $videoStatCostForRoi2;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->clickCnt !== null) {
            $result['click_cnt'] = $this->clickCnt;
        }
        if ($this->clueMessageCount !== null) {
            $result['clue_message_count'] = $this->clueMessageCount;
        }
        if ($this->cluePayOrderCnt !== null) {
            $result['clue_pay_order_cnt'] = $this->cluePayOrderCnt;
        }
        if ($this->conversionCost !== null) {
            $result['conversion_cost'] = $this->conversionCost;
        }
        if ($this->conversionRate !== null) {
            $result['conversion_rate'] = $this->conversionRate;
        }
        if ($this->convertCnt !== null) {
            $result['convert_cnt'] = $this->convertCnt;
        }
        if ($this->ctr !== null) {
            $result['ctr'] = $this->ctr;
        }
        if ($this->dyFollow !== null) {
            $result['dy_follow'] = $this->dyFollow;
        }
        if ($this->formCnt !== null) {
            $result['form_cnt'] = $this->formCnt;
        }
        if ($this->intentionFormCnt !== null) {
            $result['intention_form_cnt'] = $this->intentionFormCnt;
        }
        if ($this->intentionPhoneCnt !== null) {
            $result['intention_phone_cnt'] = $this->intentionPhoneCnt;
        }
        if ($this->lifeConvertCnt !== null) {
            $result['life_convert_cnt'] = $this->lifeConvertCnt;
        }
        if ($this->liveCostPerOtoPayOrderForRoi2New !== null) {
            $result['live_cost_per_oto_pay_order_for_roi2_new'] = $this->liveCostPerOtoPayOrderForRoi2New;
        }
        if ($this->liveOtoPayOrderCount !== null) {
            $result['live_oto_pay_order_count'] = $this->liveOtoPayOrderCount;
        }
        if ($this->liveOtoPayOrderCountForRoi2 !== null) {
            $result['live_oto_pay_order_count_for_roi2'] = $this->liveOtoPayOrderCountForRoi2;
        }
        if ($this->liveOtoPayOrderStatAmount !== null) {
            $result['live_oto_pay_order_stat_amount'] = $this->liveOtoPayOrderStatAmount;
        }
        if ($this->liveOtoPayOrderStatAmountForRoi2 !== null) {
            $result['live_oto_pay_order_stat_amount_for_roi2'] = $this->liveOtoPayOrderStatAmountForRoi2;
        }
        if ($this->liveShowCountForRoi2 !== null) {
            $result['live_show_count_for_roi2'] = $this->liveShowCountForRoi2;
        }
        if ($this->liveStatCostForRoi2 !== null) {
            $result['live_stat_cost_for_roi2'] = $this->liveStatCostForRoi2;
        }
        if ($this->liveWatchCountForRoi2 !== null) {
            $result['live_watch_count_for_roi2'] = $this->liveWatchCountForRoi2;
        }
        if ($this->lubanLiveEnterCnt !== null) {
            $result['luban_live_enter_cnt'] = $this->lubanLiveEnterCnt;
        }
        if ($this->messageActionCnt !== null) {
            $result['message_action_cnt'] = $this->messageActionCnt;
        }
        if ($this->phoneConnectCnt !== null) {
            $result['phone_connect_cnt'] = $this->phoneConnectCnt;
        }
        if ($this->poiRecommendCount !== null) {
            $result['poi_recommend_count'] = $this->poiRecommendCount;
        }
        if ($this->showCnt !== null) {
            $result['show_cnt'] = $this->showCnt;
        }
        if ($this->statCost !== null) {
            $result['stat_cost'] = $this->statCost;
        }
        if ($this->totalPlay !== null) {
            $result['total_play'] = $this->totalPlay;
        }
        if ($this->videoCostPerOtoPayOrderForRoi2New !== null) {
            $result['video_cost_per_oto_pay_order_for_roi2_new'] = $this->videoCostPerOtoPayOrderForRoi2New;
        }
        if ($this->videoOtoPayOrderCount !== null) {
            $result['video_oto_pay_order_count'] = $this->videoOtoPayOrderCount;
        }
        if ($this->videoOtoPayOrderCountForRoi2 !== null) {
            $result['video_oto_pay_order_count_for_roi2'] = $this->videoOtoPayOrderCountForRoi2;
        }
        if ($this->videoOtoPayOrderRoi2New !== null) {
            $result['video_oto_pay_order_roi2_new'] = $this->videoOtoPayOrderRoi2New;
        }
        if ($this->videoOtoPayOrderStatAmount !== null) {
            $result['video_oto_pay_order_stat_amount'] = $this->videoOtoPayOrderStatAmount;
        }
        if ($this->videoOtoPayOrderStatAmountForRoi2 !== null) {
            $result['video_oto_pay_order_stat_amount_for_roi2'] = $this->videoOtoPayOrderStatAmountForRoi2;
        }
        if ($this->videoStatCostForRoi2 !== null) {
            $result['video_stat_cost_for_roi2'] = $this->videoStatCostForRoi2;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['click_cnt'] ?? null) !== null) {
            $obj->clickCnt = (int) $v;
        }
        if (($v = $data['clue_message_count'] ?? null) !== null) {
            $obj->clueMessageCount = (int) $v;
        }
        if (($v = $data['clue_pay_order_cnt'] ?? null) !== null) {
            $obj->cluePayOrderCnt = (int) $v;
        }
        if (($v = $data['conversion_cost'] ?? null) !== null) {
            $obj->conversionCost = (float) $v;
        }
        if (($v = $data['conversion_rate'] ?? null) !== null) {
            $obj->conversionRate = (float) $v;
        }
        if (($v = $data['convert_cnt'] ?? null) !== null) {
            $obj->convertCnt = (int) $v;
        }
        if (($v = $data['ctr'] ?? null) !== null) {
            $obj->ctr = (float) $v;
        }
        if (($v = $data['dy_follow'] ?? null) !== null) {
            $obj->dyFollow = (int) $v;
        }
        if (($v = $data['form_cnt'] ?? null) !== null) {
            $obj->formCnt = (int) $v;
        }
        if (($v = $data['intention_form_cnt'] ?? null) !== null) {
            $obj->intentionFormCnt = (int) $v;
        }
        if (($v = $data['intention_phone_cnt'] ?? null) !== null) {
            $obj->intentionPhoneCnt = (int) $v;
        }
        if (($v = $data['life_convert_cnt'] ?? null) !== null) {
            $obj->lifeConvertCnt = (int) $v;
        }
        if (($v = $data['live_cost_per_oto_pay_order_for_roi2_new'] ?? null) !== null) {
            $obj->liveCostPerOtoPayOrderForRoi2New = (float) $v;
        }
        if (($v = $data['live_oto_pay_order_count'] ?? null) !== null) {
            $obj->liveOtoPayOrderCount = (int) $v;
        }
        if (($v = $data['live_oto_pay_order_count_for_roi2'] ?? null) !== null) {
            $obj->liveOtoPayOrderCountForRoi2 = (int) $v;
        }
        if (($v = $data['live_oto_pay_order_stat_amount'] ?? null) !== null) {
            $obj->liveOtoPayOrderStatAmount = (float) $v;
        }
        if (($v = $data['live_oto_pay_order_stat_amount_for_roi2'] ?? null) !== null) {
            $obj->liveOtoPayOrderStatAmountForRoi2 = (float) $v;
        }
        if (($v = $data['live_show_count_for_roi2'] ?? null) !== null) {
            $obj->liveShowCountForRoi2 = (int) $v;
        }
        if (($v = $data['live_stat_cost_for_roi2'] ?? null) !== null) {
            $obj->liveStatCostForRoi2 = (float) $v;
        }
        if (($v = $data['live_watch_count_for_roi2'] ?? null) !== null) {
            $obj->liveWatchCountForRoi2 = (int) $v;
        }
        if (($v = $data['luban_live_enter_cnt'] ?? null) !== null) {
            $obj->lubanLiveEnterCnt = (int) $v;
        }
        if (($v = $data['message_action_cnt'] ?? null) !== null) {
            $obj->messageActionCnt = (int) $v;
        }
        if (($v = $data['phone_connect_cnt'] ?? null) !== null) {
            $obj->phoneConnectCnt = (int) $v;
        }
        if (($v = $data['poi_recommend_count'] ?? null) !== null) {
            $obj->poiRecommendCount = (int) $v;
        }
        if (($v = $data['show_cnt'] ?? null) !== null) {
            $obj->showCnt = (int) $v;
        }
        if (($v = $data['stat_cost'] ?? null) !== null) {
            $obj->statCost = (float) $v;
        }
        if (($v = $data['total_play'] ?? null) !== null) {
            $obj->totalPlay = (int) $v;
        }
        if (($v = $data['video_cost_per_oto_pay_order_for_roi2_new'] ?? null) !== null) {
            $obj->videoCostPerOtoPayOrderForRoi2New = (float) $v;
        }
        if (($v = $data['video_oto_pay_order_count'] ?? null) !== null) {
            $obj->videoOtoPayOrderCount = (int) $v;
        }
        if (($v = $data['video_oto_pay_order_count_for_roi2'] ?? null) !== null) {
            $obj->videoOtoPayOrderCountForRoi2 = (int) $v;
        }
        if (($v = $data['video_oto_pay_order_roi2_new'] ?? null) !== null) {
            $obj->videoOtoPayOrderRoi2New = (float) $v;
        }
        if (($v = $data['video_oto_pay_order_stat_amount'] ?? null) !== null) {
            $obj->videoOtoPayOrderStatAmount = (float) $v;
        }
        if (($v = $data['video_oto_pay_order_stat_amount_for_roi2'] ?? null) !== null) {
            $obj->videoOtoPayOrderStatAmountForRoi2 = (float) $v;
        }
        if (($v = $data['video_stat_cost_for_roi2'] ?? null) !== null) {
            $obj->videoStatCostForRoi2 = (float) $v;
        }
        return $obj;
    }
}
