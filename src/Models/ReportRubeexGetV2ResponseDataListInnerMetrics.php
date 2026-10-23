<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ReportRubeexGetV2ResponseDataListInnerMetrics implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $clickCnt = null;

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
    protected ?float $cost = null;

    /**
     * @var float
     */
    protected ?float $cpc = null;

    /**
     * @var float
     */
    protected ?float $cpm = null;

    /**
     * @var float
     */
    protected ?float $ctr = null;

    /**
     * @var int
     */
    protected ?int $customFinishPlayPlayableCount = null;

    /**
     * @var float
     */
    protected ?float $customFinishPlayPlayableLayerRate = null;

    /**
     * @var float
     */
    protected ?float $customFinishPlayPlayableRate = null;

    /**
     * @var int
     */
    protected ?int $customLoadMainSceneCount = null;

    /**
     * @var float
     */
    protected ?float $customLoadMainSceneRate = null;

    /**
     * @var int
     */
    protected ?int $customStartPlayPlayableCount = null;

    /**
     * @var float
     */
    protected ?float $customStartPlayPlayableLayerRate = null;

    /**
     * @var float
     */
    protected ?float $customStartPlayPlayableRate = null;

    /**
     * @var int
     */
    protected ?int $downloadButtonClickCountAll = null;

    /**
     * @var int
     */
    protected ?int $enterSectionCount = null;

    /**
     * @var float
     */
    protected ?float $playDurationAvgSdk = null;

    /**
     * @var float
     */
    protected ?float $playDurationSdk = null;

    /**
     * @var float
     */
    protected ?float $playableCtr = null;

    /**
     * @var int
     */
    protected ?int $playableDurationUserCount = null;

    /**
     * @var float
     */
    protected ?float $prePlayDurationAvgSdk = null;

    /**
     * @var float
     */
    protected ?float $prePlayDurationSdk = null;

    /**
     * @var int
     */
    protected ?int $predefinePageviewCount = null;

    /**
     * @var int
     */
    protected ?int $sdkPlayableShowCount = null;

    /**
     * @var int
     */
    protected ?int $showCnt = null;

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
    public function getCost(): ?float
    {
        return $this->cost;
    }

    /**
     * @param float $cost
     * @return self
     */
    public function setCost(?float $cost): self
    {
        $this->cost = $cost;
        return $this;
    }

    /**
     * @return float
     */
    public function getCpc(): ?float
    {
        return $this->cpc;
    }

    /**
     * @param float $cpc
     * @return self
     */
    public function setCpc(?float $cpc): self
    {
        $this->cpc = $cpc;
        return $this;
    }

    /**
     * @return float
     */
    public function getCpm(): ?float
    {
        return $this->cpm;
    }

    /**
     * @param float $cpm
     * @return self
     */
    public function setCpm(?float $cpm): self
    {
        $this->cpm = $cpm;
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
    public function getCustomFinishPlayPlayableCount(): ?int
    {
        return $this->customFinishPlayPlayableCount;
    }

    /**
     * @param int $customFinishPlayPlayableCount
     * @return self
     */
    public function setCustomFinishPlayPlayableCount(?int $customFinishPlayPlayableCount): self
    {
        $this->customFinishPlayPlayableCount = $customFinishPlayPlayableCount;
        return $this;
    }

    /**
     * @return float
     */
    public function getCustomFinishPlayPlayableLayerRate(): ?float
    {
        return $this->customFinishPlayPlayableLayerRate;
    }

    /**
     * @param float $customFinishPlayPlayableLayerRate
     * @return self
     */
    public function setCustomFinishPlayPlayableLayerRate(?float $customFinishPlayPlayableLayerRate): self
    {
        $this->customFinishPlayPlayableLayerRate = $customFinishPlayPlayableLayerRate;
        return $this;
    }

    /**
     * @return float
     */
    public function getCustomFinishPlayPlayableRate(): ?float
    {
        return $this->customFinishPlayPlayableRate;
    }

    /**
     * @param float $customFinishPlayPlayableRate
     * @return self
     */
    public function setCustomFinishPlayPlayableRate(?float $customFinishPlayPlayableRate): self
    {
        $this->customFinishPlayPlayableRate = $customFinishPlayPlayableRate;
        return $this;
    }

    /**
     * @return int
     */
    public function getCustomLoadMainSceneCount(): ?int
    {
        return $this->customLoadMainSceneCount;
    }

    /**
     * @param int $customLoadMainSceneCount
     * @return self
     */
    public function setCustomLoadMainSceneCount(?int $customLoadMainSceneCount): self
    {
        $this->customLoadMainSceneCount = $customLoadMainSceneCount;
        return $this;
    }

    /**
     * @return float
     */
    public function getCustomLoadMainSceneRate(): ?float
    {
        return $this->customLoadMainSceneRate;
    }

    /**
     * @param float $customLoadMainSceneRate
     * @return self
     */
    public function setCustomLoadMainSceneRate(?float $customLoadMainSceneRate): self
    {
        $this->customLoadMainSceneRate = $customLoadMainSceneRate;
        return $this;
    }

    /**
     * @return int
     */
    public function getCustomStartPlayPlayableCount(): ?int
    {
        return $this->customStartPlayPlayableCount;
    }

    /**
     * @param int $customStartPlayPlayableCount
     * @return self
     */
    public function setCustomStartPlayPlayableCount(?int $customStartPlayPlayableCount): self
    {
        $this->customStartPlayPlayableCount = $customStartPlayPlayableCount;
        return $this;
    }

    /**
     * @return float
     */
    public function getCustomStartPlayPlayableLayerRate(): ?float
    {
        return $this->customStartPlayPlayableLayerRate;
    }

    /**
     * @param float $customStartPlayPlayableLayerRate
     * @return self
     */
    public function setCustomStartPlayPlayableLayerRate(?float $customStartPlayPlayableLayerRate): self
    {
        $this->customStartPlayPlayableLayerRate = $customStartPlayPlayableLayerRate;
        return $this;
    }

    /**
     * @return float
     */
    public function getCustomStartPlayPlayableRate(): ?float
    {
        return $this->customStartPlayPlayableRate;
    }

    /**
     * @param float $customStartPlayPlayableRate
     * @return self
     */
    public function setCustomStartPlayPlayableRate(?float $customStartPlayPlayableRate): self
    {
        $this->customStartPlayPlayableRate = $customStartPlayPlayableRate;
        return $this;
    }

    /**
     * @return int
     */
    public function getDownloadButtonClickCountAll(): ?int
    {
        return $this->downloadButtonClickCountAll;
    }

    /**
     * @param int $downloadButtonClickCountAll
     * @return self
     */
    public function setDownloadButtonClickCountAll(?int $downloadButtonClickCountAll): self
    {
        $this->downloadButtonClickCountAll = $downloadButtonClickCountAll;
        return $this;
    }

    /**
     * @return int
     */
    public function getEnterSectionCount(): ?int
    {
        return $this->enterSectionCount;
    }

    /**
     * @param int $enterSectionCount
     * @return self
     */
    public function setEnterSectionCount(?int $enterSectionCount): self
    {
        $this->enterSectionCount = $enterSectionCount;
        return $this;
    }

    /**
     * @return float
     */
    public function getPlayDurationAvgSdk(): ?float
    {
        return $this->playDurationAvgSdk;
    }

    /**
     * @param float $playDurationAvgSdk
     * @return self
     */
    public function setPlayDurationAvgSdk(?float $playDurationAvgSdk): self
    {
        $this->playDurationAvgSdk = $playDurationAvgSdk;
        return $this;
    }

    /**
     * @return float
     */
    public function getPlayDurationSdk(): ?float
    {
        return $this->playDurationSdk;
    }

    /**
     * @param float $playDurationSdk
     * @return self
     */
    public function setPlayDurationSdk(?float $playDurationSdk): self
    {
        $this->playDurationSdk = $playDurationSdk;
        return $this;
    }

    /**
     * @return float
     */
    public function getPlayableCtr(): ?float
    {
        return $this->playableCtr;
    }

    /**
     * @param float $playableCtr
     * @return self
     */
    public function setPlayableCtr(?float $playableCtr): self
    {
        $this->playableCtr = $playableCtr;
        return $this;
    }

    /**
     * @return int
     */
    public function getPlayableDurationUserCount(): ?int
    {
        return $this->playableDurationUserCount;
    }

    /**
     * @param int $playableDurationUserCount
     * @return self
     */
    public function setPlayableDurationUserCount(?int $playableDurationUserCount): self
    {
        $this->playableDurationUserCount = $playableDurationUserCount;
        return $this;
    }

    /**
     * @return float
     */
    public function getPrePlayDurationAvgSdk(): ?float
    {
        return $this->prePlayDurationAvgSdk;
    }

    /**
     * @param float $prePlayDurationAvgSdk
     * @return self
     */
    public function setPrePlayDurationAvgSdk(?float $prePlayDurationAvgSdk): self
    {
        $this->prePlayDurationAvgSdk = $prePlayDurationAvgSdk;
        return $this;
    }

    /**
     * @return float
     */
    public function getPrePlayDurationSdk(): ?float
    {
        return $this->prePlayDurationSdk;
    }

    /**
     * @param float $prePlayDurationSdk
     * @return self
     */
    public function setPrePlayDurationSdk(?float $prePlayDurationSdk): self
    {
        $this->prePlayDurationSdk = $prePlayDurationSdk;
        return $this;
    }

    /**
     * @return int
     */
    public function getPredefinePageviewCount(): ?int
    {
        return $this->predefinePageviewCount;
    }

    /**
     * @param int $predefinePageviewCount
     * @return self
     */
    public function setPredefinePageviewCount(?int $predefinePageviewCount): self
    {
        $this->predefinePageviewCount = $predefinePageviewCount;
        return $this;
    }

    /**
     * @return int
     */
    public function getSdkPlayableShowCount(): ?int
    {
        return $this->sdkPlayableShowCount;
    }

    /**
     * @param int $sdkPlayableShowCount
     * @return self
     */
    public function setSdkPlayableShowCount(?int $sdkPlayableShowCount): self
    {
        $this->sdkPlayableShowCount = $sdkPlayableShowCount;
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
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->clickCnt !== null) {
            $result['click_cnt'] = $this->clickCnt;
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
        if ($this->cost !== null) {
            $result['cost'] = $this->cost;
        }
        if ($this->cpc !== null) {
            $result['cpc'] = $this->cpc;
        }
        if ($this->cpm !== null) {
            $result['cpm'] = $this->cpm;
        }
        if ($this->ctr !== null) {
            $result['ctr'] = $this->ctr;
        }
        if ($this->customFinishPlayPlayableCount !== null) {
            $result['custom_finish_play_playable_count'] = $this->customFinishPlayPlayableCount;
        }
        if ($this->customFinishPlayPlayableLayerRate !== null) {
            $result['custom_finish_play_playable_layer_rate'] = $this->customFinishPlayPlayableLayerRate;
        }
        if ($this->customFinishPlayPlayableRate !== null) {
            $result['custom_finish_play_playable_rate'] = $this->customFinishPlayPlayableRate;
        }
        if ($this->customLoadMainSceneCount !== null) {
            $result['custom_load_main_scene_count'] = $this->customLoadMainSceneCount;
        }
        if ($this->customLoadMainSceneRate !== null) {
            $result['custom_load_main_scene_rate'] = $this->customLoadMainSceneRate;
        }
        if ($this->customStartPlayPlayableCount !== null) {
            $result['custom_start_play_playable_count'] = $this->customStartPlayPlayableCount;
        }
        if ($this->customStartPlayPlayableLayerRate !== null) {
            $result['custom_start_play_playable_layer_rate'] = $this->customStartPlayPlayableLayerRate;
        }
        if ($this->customStartPlayPlayableRate !== null) {
            $result['custom_start_play_playable_rate'] = $this->customStartPlayPlayableRate;
        }
        if ($this->downloadButtonClickCountAll !== null) {
            $result['download_button_click_count_all'] = $this->downloadButtonClickCountAll;
        }
        if ($this->enterSectionCount !== null) {
            $result['enter_section_count'] = $this->enterSectionCount;
        }
        if ($this->playDurationAvgSdk !== null) {
            $result['play_duration_avg_sdk'] = $this->playDurationAvgSdk;
        }
        if ($this->playDurationSdk !== null) {
            $result['play_duration_sdk'] = $this->playDurationSdk;
        }
        if ($this->playableCtr !== null) {
            $result['playable_ctr'] = $this->playableCtr;
        }
        if ($this->playableDurationUserCount !== null) {
            $result['playable_duration_user_count'] = $this->playableDurationUserCount;
        }
        if ($this->prePlayDurationAvgSdk !== null) {
            $result['pre_play_duration_avg_sdk'] = $this->prePlayDurationAvgSdk;
        }
        if ($this->prePlayDurationSdk !== null) {
            $result['pre_play_duration_sdk'] = $this->prePlayDurationSdk;
        }
        if ($this->predefinePageviewCount !== null) {
            $result['predefine_pageview_count'] = $this->predefinePageviewCount;
        }
        if ($this->sdkPlayableShowCount !== null) {
            $result['sdk_playable_show_count'] = $this->sdkPlayableShowCount;
        }
        if ($this->showCnt !== null) {
            $result['show_cnt'] = $this->showCnt;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['click_cnt'] ?? null) !== null) {
            $obj->clickCnt = (int) $v;
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
        if (($v = $data['cost'] ?? null) !== null) {
            $obj->cost = (float) $v;
        }
        if (($v = $data['cpc'] ?? null) !== null) {
            $obj->cpc = (float) $v;
        }
        if (($v = $data['cpm'] ?? null) !== null) {
            $obj->cpm = (float) $v;
        }
        if (($v = $data['ctr'] ?? null) !== null) {
            $obj->ctr = (float) $v;
        }
        if (($v = $data['custom_finish_play_playable_count'] ?? null) !== null) {
            $obj->customFinishPlayPlayableCount = (int) $v;
        }
        if (($v = $data['custom_finish_play_playable_layer_rate'] ?? null) !== null) {
            $obj->customFinishPlayPlayableLayerRate = (float) $v;
        }
        if (($v = $data['custom_finish_play_playable_rate'] ?? null) !== null) {
            $obj->customFinishPlayPlayableRate = (float) $v;
        }
        if (($v = $data['custom_load_main_scene_count'] ?? null) !== null) {
            $obj->customLoadMainSceneCount = (int) $v;
        }
        if (($v = $data['custom_load_main_scene_rate'] ?? null) !== null) {
            $obj->customLoadMainSceneRate = (float) $v;
        }
        if (($v = $data['custom_start_play_playable_count'] ?? null) !== null) {
            $obj->customStartPlayPlayableCount = (int) $v;
        }
        if (($v = $data['custom_start_play_playable_layer_rate'] ?? null) !== null) {
            $obj->customStartPlayPlayableLayerRate = (float) $v;
        }
        if (($v = $data['custom_start_play_playable_rate'] ?? null) !== null) {
            $obj->customStartPlayPlayableRate = (float) $v;
        }
        if (($v = $data['download_button_click_count_all'] ?? null) !== null) {
            $obj->downloadButtonClickCountAll = (int) $v;
        }
        if (($v = $data['enter_section_count'] ?? null) !== null) {
            $obj->enterSectionCount = (int) $v;
        }
        if (($v = $data['play_duration_avg_sdk'] ?? null) !== null) {
            $obj->playDurationAvgSdk = (float) $v;
        }
        if (($v = $data['play_duration_sdk'] ?? null) !== null) {
            $obj->playDurationSdk = (float) $v;
        }
        if (($v = $data['playable_ctr'] ?? null) !== null) {
            $obj->playableCtr = (float) $v;
        }
        if (($v = $data['playable_duration_user_count'] ?? null) !== null) {
            $obj->playableDurationUserCount = (int) $v;
        }
        if (($v = $data['pre_play_duration_avg_sdk'] ?? null) !== null) {
            $obj->prePlayDurationAvgSdk = (float) $v;
        }
        if (($v = $data['pre_play_duration_sdk'] ?? null) !== null) {
            $obj->prePlayDurationSdk = (float) $v;
        }
        if (($v = $data['predefine_pageview_count'] ?? null) !== null) {
            $obj->predefinePageviewCount = (int) $v;
        }
        if (($v = $data['sdk_playable_show_count'] ?? null) !== null) {
            $obj->sdkPlayableShowCount = (int) $v;
        }
        if (($v = $data['show_cnt'] ?? null) !== null) {
            $obj->showCnt = (int) $v;
        }
        return $obj;
    }
}
