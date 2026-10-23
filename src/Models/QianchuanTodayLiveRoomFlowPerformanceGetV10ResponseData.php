<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanTodayLiveRoomFlowPerformanceGetV10ResponseData implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $activity = null;

    /**
     * @var int
     */
    protected ?int $douyinShoppingCenter = null;

    /**
     * @var int
     */
    protected ?int $ecomAdThirdQcBrand = null;

    /**
     * @var int
     */
    protected ?int $ecomAdThirdQcBrandOtherBidding = null;

    /**
     * @var int
     */
    protected ?int $ecomAdThirdQcOtherBrand = null;

    /**
     * @var int
     */
    protected ?int $ecomOther = null;

    /**
     * @var int
     */
    protected ?int $generalSearch = null;

    /**
     * @var int
     */
    protected ?int $homepageFollow = null;

    /**
     * @var int
     */
    protected ?int $homepageFresh = null;

    /**
     * @var int
     */
    protected ?int $homepageHot = null;

    /**
     * @var int
     */
    protected ?int $liveMerge = null;

    /**
     * @var int
     */
    protected ?int $livePcQianChuan = null;

    /**
     * @var int
     */
    protected ?int $liveXiaoDianQianChuan = null;

    /**
     * @var int
     */
    protected ?int $otherRecommendLive = null;

    /**
     * @var int
     */
    protected ?int $othersHomepage = null;

    /**
     * @var int
     */
    protected ?int $touxiSaas = null;

    /**
     * @var int
     */
    protected ?int $videoToLive = null;

    /**
     * @return int
     */
    public function getActivity(): ?int
    {
        return $this->activity;
    }

    /**
     * @param int $activity
     * @return self
     */
    public function setActivity(?int $activity): self
    {
        $this->activity = $activity;
        return $this;
    }

    /**
     * @return int
     */
    public function getDouyinShoppingCenter(): ?int
    {
        return $this->douyinShoppingCenter;
    }

    /**
     * @param int $douyinShoppingCenter
     * @return self
     */
    public function setDouyinShoppingCenter(?int $douyinShoppingCenter): self
    {
        $this->douyinShoppingCenter = $douyinShoppingCenter;
        return $this;
    }

    /**
     * @return int
     */
    public function getEcomAdThirdQcBrand(): ?int
    {
        return $this->ecomAdThirdQcBrand;
    }

    /**
     * @param int $ecomAdThirdQcBrand
     * @return self
     */
    public function setEcomAdThirdQcBrand(?int $ecomAdThirdQcBrand): self
    {
        $this->ecomAdThirdQcBrand = $ecomAdThirdQcBrand;
        return $this;
    }

    /**
     * @return int
     */
    public function getEcomAdThirdQcBrandOtherBidding(): ?int
    {
        return $this->ecomAdThirdQcBrandOtherBidding;
    }

    /**
     * @param int $ecomAdThirdQcBrandOtherBidding
     * @return self
     */
    public function setEcomAdThirdQcBrandOtherBidding(?int $ecomAdThirdQcBrandOtherBidding): self
    {
        $this->ecomAdThirdQcBrandOtherBidding = $ecomAdThirdQcBrandOtherBidding;
        return $this;
    }

    /**
     * @return int
     */
    public function getEcomAdThirdQcOtherBrand(): ?int
    {
        return $this->ecomAdThirdQcOtherBrand;
    }

    /**
     * @param int $ecomAdThirdQcOtherBrand
     * @return self
     */
    public function setEcomAdThirdQcOtherBrand(?int $ecomAdThirdQcOtherBrand): self
    {
        $this->ecomAdThirdQcOtherBrand = $ecomAdThirdQcOtherBrand;
        return $this;
    }

    /**
     * @return int
     */
    public function getEcomOther(): ?int
    {
        return $this->ecomOther;
    }

    /**
     * @param int $ecomOther
     * @return self
     */
    public function setEcomOther(?int $ecomOther): self
    {
        $this->ecomOther = $ecomOther;
        return $this;
    }

    /**
     * @return int
     */
    public function getGeneralSearch(): ?int
    {
        return $this->generalSearch;
    }

    /**
     * @param int $generalSearch
     * @return self
     */
    public function setGeneralSearch(?int $generalSearch): self
    {
        $this->generalSearch = $generalSearch;
        return $this;
    }

    /**
     * @return int
     */
    public function getHomepageFollow(): ?int
    {
        return $this->homepageFollow;
    }

    /**
     * @param int $homepageFollow
     * @return self
     */
    public function setHomepageFollow(?int $homepageFollow): self
    {
        $this->homepageFollow = $homepageFollow;
        return $this;
    }

    /**
     * @return int
     */
    public function getHomepageFresh(): ?int
    {
        return $this->homepageFresh;
    }

    /**
     * @param int $homepageFresh
     * @return self
     */
    public function setHomepageFresh(?int $homepageFresh): self
    {
        $this->homepageFresh = $homepageFresh;
        return $this;
    }

    /**
     * @return int
     */
    public function getHomepageHot(): ?int
    {
        return $this->homepageHot;
    }

    /**
     * @param int $homepageHot
     * @return self
     */
    public function setHomepageHot(?int $homepageHot): self
    {
        $this->homepageHot = $homepageHot;
        return $this;
    }

    /**
     * @return int
     */
    public function getLiveMerge(): ?int
    {
        return $this->liveMerge;
    }

    /**
     * @param int $liveMerge
     * @return self
     */
    public function setLiveMerge(?int $liveMerge): self
    {
        $this->liveMerge = $liveMerge;
        return $this;
    }

    /**
     * @return int
     */
    public function getLivePcQianChuan(): ?int
    {
        return $this->livePcQianChuan;
    }

    /**
     * @param int $livePcQianChuan
     * @return self
     */
    public function setLivePcQianChuan(?int $livePcQianChuan): self
    {
        $this->livePcQianChuan = $livePcQianChuan;
        return $this;
    }

    /**
     * @return int
     */
    public function getLiveXiaoDianQianChuan(): ?int
    {
        return $this->liveXiaoDianQianChuan;
    }

    /**
     * @param int $liveXiaoDianQianChuan
     * @return self
     */
    public function setLiveXiaoDianQianChuan(?int $liveXiaoDianQianChuan): self
    {
        $this->liveXiaoDianQianChuan = $liveXiaoDianQianChuan;
        return $this;
    }

    /**
     * @return int
     */
    public function getOtherRecommendLive(): ?int
    {
        return $this->otherRecommendLive;
    }

    /**
     * @param int $otherRecommendLive
     * @return self
     */
    public function setOtherRecommendLive(?int $otherRecommendLive): self
    {
        $this->otherRecommendLive = $otherRecommendLive;
        return $this;
    }

    /**
     * @return int
     */
    public function getOthersHomepage(): ?int
    {
        return $this->othersHomepage;
    }

    /**
     * @param int $othersHomepage
     * @return self
     */
    public function setOthersHomepage(?int $othersHomepage): self
    {
        $this->othersHomepage = $othersHomepage;
        return $this;
    }

    /**
     * @return int
     */
    public function getTouxiSaas(): ?int
    {
        return $this->touxiSaas;
    }

    /**
     * @param int $touxiSaas
     * @return self
     */
    public function setTouxiSaas(?int $touxiSaas): self
    {
        $this->touxiSaas = $touxiSaas;
        return $this;
    }

    /**
     * @return int
     */
    public function getVideoToLive(): ?int
    {
        return $this->videoToLive;
    }

    /**
     * @param int $videoToLive
     * @return self
     */
    public function setVideoToLive(?int $videoToLive): self
    {
        $this->videoToLive = $videoToLive;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->activity !== null) {
            $result['activity'] = $this->activity;
        }
        if ($this->douyinShoppingCenter !== null) {
            $result['douyin_shopping_center'] = $this->douyinShoppingCenter;
        }
        if ($this->ecomAdThirdQcBrand !== null) {
            $result['ecom_ad_third_qc_brand'] = $this->ecomAdThirdQcBrand;
        }
        if ($this->ecomAdThirdQcBrandOtherBidding !== null) {
            $result['ecom_ad_third_qc_brand_other_bidding'] = $this->ecomAdThirdQcBrandOtherBidding;
        }
        if ($this->ecomAdThirdQcOtherBrand !== null) {
            $result['ecom_ad_third_qc_other_brand'] = $this->ecomAdThirdQcOtherBrand;
        }
        if ($this->ecomOther !== null) {
            $result['ecom_other'] = $this->ecomOther;
        }
        if ($this->generalSearch !== null) {
            $result['general_search'] = $this->generalSearch;
        }
        if ($this->homepageFollow !== null) {
            $result['homepage_follow'] = $this->homepageFollow;
        }
        if ($this->homepageFresh !== null) {
            $result['homepage_fresh'] = $this->homepageFresh;
        }
        if ($this->homepageHot !== null) {
            $result['homepage_hot'] = $this->homepageHot;
        }
        if ($this->liveMerge !== null) {
            $result['live_merge'] = $this->liveMerge;
        }
        if ($this->livePcQianChuan !== null) {
            $result['live_pc_qian_chuan'] = $this->livePcQianChuan;
        }
        if ($this->liveXiaoDianQianChuan !== null) {
            $result['live_xiao_dian_qian_chuan'] = $this->liveXiaoDianQianChuan;
        }
        if ($this->otherRecommendLive !== null) {
            $result['other_recommend_live'] = $this->otherRecommendLive;
        }
        if ($this->othersHomepage !== null) {
            $result['others_homepage'] = $this->othersHomepage;
        }
        if ($this->touxiSaas !== null) {
            $result['touxi_saas'] = $this->touxiSaas;
        }
        if ($this->videoToLive !== null) {
            $result['video_to_live'] = $this->videoToLive;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['activity'] ?? null) !== null) {
            $obj->activity = (int) $v;
        }
        if (($v = $data['douyin_shopping_center'] ?? null) !== null) {
            $obj->douyinShoppingCenter = (int) $v;
        }
        if (($v = $data['ecom_ad_third_qc_brand'] ?? null) !== null) {
            $obj->ecomAdThirdQcBrand = (int) $v;
        }
        if (($v = $data['ecom_ad_third_qc_brand_other_bidding'] ?? null) !== null) {
            $obj->ecomAdThirdQcBrandOtherBidding = (int) $v;
        }
        if (($v = $data['ecom_ad_third_qc_other_brand'] ?? null) !== null) {
            $obj->ecomAdThirdQcOtherBrand = (int) $v;
        }
        if (($v = $data['ecom_other'] ?? null) !== null) {
            $obj->ecomOther = (int) $v;
        }
        if (($v = $data['general_search'] ?? null) !== null) {
            $obj->generalSearch = (int) $v;
        }
        if (($v = $data['homepage_follow'] ?? null) !== null) {
            $obj->homepageFollow = (int) $v;
        }
        if (($v = $data['homepage_fresh'] ?? null) !== null) {
            $obj->homepageFresh = (int) $v;
        }
        if (($v = $data['homepage_hot'] ?? null) !== null) {
            $obj->homepageHot = (int) $v;
        }
        if (($v = $data['live_merge'] ?? null) !== null) {
            $obj->liveMerge = (int) $v;
        }
        if (($v = $data['live_pc_qian_chuan'] ?? null) !== null) {
            $obj->livePcQianChuan = (int) $v;
        }
        if (($v = $data['live_xiao_dian_qian_chuan'] ?? null) !== null) {
            $obj->liveXiaoDianQianChuan = (int) $v;
        }
        if (($v = $data['other_recommend_live'] ?? null) !== null) {
            $obj->otherRecommendLive = (int) $v;
        }
        if (($v = $data['others_homepage'] ?? null) !== null) {
            $obj->othersHomepage = (int) $v;
        }
        if (($v = $data['touxi_saas'] ?? null) !== null) {
            $obj->touxiSaas = (int) $v;
        }
        if (($v = $data['video_to_live'] ?? null) !== null) {
            $obj->videoToLive = (int) $v;
        }
        return $obj;
    }
}
