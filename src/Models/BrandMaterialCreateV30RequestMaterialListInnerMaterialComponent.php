<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class BrandMaterialCreateV30RequestMaterialListInnerMaterialComponent implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\BrandMaterialCreateV30RequestMaterialListInnerMaterialComponentAvatarIcon
     */
    protected ?\Oceanengine\Models\BrandMaterialCreateV30RequestMaterialListInnerMaterialComponentAvatarIcon $avatarIcon = null;

    /**
     * @var \Oceanengine\Models\BrandMaterialCreateV30RequestMaterialListInnerMaterialComponentAwemeAnchor
     */
    protected ?\Oceanengine\Models\BrandMaterialCreateV30RequestMaterialListInnerMaterialComponentAwemeAnchor $awemeAnchor = null;

    /**
     * @var \Oceanengine\Models\BrandMaterialCreateV30RequestMaterialListInnerMaterialComponentAwemeShopHomePage
     */
    protected ?\Oceanengine\Models\BrandMaterialCreateV30RequestMaterialListInnerMaterialComponentAwemeShopHomePage $awemeShopHomePage = null;

    /**
     * @var \Oceanengine\Models\BrandMaterialCreateV30RequestMaterialListInnerMaterialComponentAwemeVideo
     */
    protected ?\Oceanengine\Models\BrandMaterialCreateV30RequestMaterialListInnerMaterialComponentAwemeVideo $awemeVideo = null;

    /**
     * @var \Oceanengine\Models\BrandMaterialCreateV30RequestMaterialListInnerMaterialComponentBusinessUrl
     */
    protected ?\Oceanengine\Models\BrandMaterialCreateV30RequestMaterialListInnerMaterialComponentBusinessUrl $businessUrl = null;

    /**
     * @var \Oceanengine\Models\BrandMaterialCreateV30RequestMaterialListInnerMaterialComponentCommonExternal
     */
    protected ?\Oceanengine\Models\BrandMaterialCreateV30RequestMaterialListInnerMaterialComponentCommonExternal $commonExternal = null;

    /**
     * @var \Oceanengine\Models\BrandMaterialCreateV30RequestMaterialListInnerMaterialComponentDeliveryTimeList
     */
    protected ?\Oceanengine\Models\BrandMaterialCreateV30RequestMaterialListInnerMaterialComponentDeliveryTimeList $deliveryTimeList = null;

    /**
     * @var \Oceanengine\Models\BrandMaterialCreateV30RequestMaterialListInnerMaterialComponentExploreOneTime
     */
    protected ?\Oceanengine\Models\BrandMaterialCreateV30RequestMaterialListInnerMaterialComponentExploreOneTime $exploreOneTime = null;

    /**
     * @var \Oceanengine\Models\BrandMaterialCreateV30RequestMaterialListInnerMaterialComponentExternalTitle
     */
    protected ?\Oceanengine\Models\BrandMaterialCreateV30RequestMaterialListInnerMaterialComponentExternalTitle $externalTitle = null;

    /**
     * @var \Oceanengine\Models\BrandMaterialCreateV30RequestMaterialListInnerMaterialComponentFeedButtonText
     */
    protected ?\Oceanengine\Models\BrandMaterialCreateV30RequestMaterialListInnerMaterialComponentFeedButtonText $feedButtonText = null;

    /**
     * @var \Oceanengine\Models\BrandMaterialCreateV30RequestMaterialListInnerMaterialComponentIesCoreUser
     */
    protected ?\Oceanengine\Models\BrandMaterialCreateV30RequestMaterialListInnerMaterialComponentIesCoreUser $iesCoreUser = null;

    /**
     * @var \Oceanengine\Models\BrandMaterialCreateV30RequestMaterialListInnerMaterialComponentImageCard
     */
    protected ?\Oceanengine\Models\BrandMaterialCreateV30RequestMaterialListInnerMaterialComponentImageCard $imageCard = null;

    /**
     * @var \Oceanengine\Models\BrandMaterialCreateV30RequestMaterialListInnerMaterialComponentLbsExternal
     */
    protected ?\Oceanengine\Models\BrandMaterialCreateV30RequestMaterialListInnerMaterialComponentLbsExternal $lbsExternal = null;

    /**
     * @var \Oceanengine\Models\BrandMaterialCreateV30RequestMaterialListInnerMaterialComponentMallActivityPage
     */
    protected ?\Oceanengine\Models\BrandMaterialCreateV30RequestMaterialListInnerMaterialComponentMallActivityPage $mallActivityPage = null;

    /**
     * @var \Oceanengine\Models\BrandMaterialCreateV30RequestMaterialListInnerMaterialComponentMusicText
     */
    protected ?\Oceanengine\Models\BrandMaterialCreateV30RequestMaterialListInnerMaterialComponentMusicText $musicText = null;

    /**
     * @var \Oceanengine\Models\BrandMaterialCreateV30RequestMaterialListInnerMaterialComponentProductDetailPage
     */
    protected ?\Oceanengine\Models\BrandMaterialCreateV30RequestMaterialListInnerMaterialComponentProductDetailPage $productDetailPage = null;

    /**
     * @var \Oceanengine\Models\BrandMaterialCreateV30RequestMaterialListInnerMaterialComponentSearch
     */
    protected ?\Oceanengine\Models\BrandMaterialCreateV30RequestMaterialListInnerMaterialComponentSearch $search = null;

    /**
     * @var \Oceanengine\Models\BrandMaterialCreateV30RequestMaterialListInnerMaterialComponentVideoComment
     */
    protected ?\Oceanengine\Models\BrandMaterialCreateV30RequestMaterialListInnerMaterialComponentVideoComment $videoComment = null;

    /**
     * @var \Oceanengine\Models\BrandMaterialCreateV30RequestMaterialListInnerMaterialComponentVideoDownload
     */
    protected ?\Oceanengine\Models\BrandMaterialCreateV30RequestMaterialListInnerMaterialComponentVideoDownload $videoDownload = null;

    /**
     * @return \Oceanengine\Models\BrandMaterialCreateV30RequestMaterialListInnerMaterialComponentAvatarIcon
     */
    public function getAvatarIcon(): ?\Oceanengine\Models\BrandMaterialCreateV30RequestMaterialListInnerMaterialComponentAvatarIcon
    {
        return $this->avatarIcon;
    }

    /**
     * @param \Oceanengine\Models\BrandMaterialCreateV30RequestMaterialListInnerMaterialComponentAvatarIcon $avatarIcon
     * @return self
     */
    public function setAvatarIcon(?\Oceanengine\Models\BrandMaterialCreateV30RequestMaterialListInnerMaterialComponentAvatarIcon $avatarIcon): self
    {
        $this->avatarIcon = $avatarIcon;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\BrandMaterialCreateV30RequestMaterialListInnerMaterialComponentAwemeAnchor
     */
    public function getAwemeAnchor(): ?\Oceanengine\Models\BrandMaterialCreateV30RequestMaterialListInnerMaterialComponentAwemeAnchor
    {
        return $this->awemeAnchor;
    }

    /**
     * @param \Oceanengine\Models\BrandMaterialCreateV30RequestMaterialListInnerMaterialComponentAwemeAnchor $awemeAnchor
     * @return self
     */
    public function setAwemeAnchor(?\Oceanengine\Models\BrandMaterialCreateV30RequestMaterialListInnerMaterialComponentAwemeAnchor $awemeAnchor): self
    {
        $this->awemeAnchor = $awemeAnchor;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\BrandMaterialCreateV30RequestMaterialListInnerMaterialComponentAwemeShopHomePage
     */
    public function getAwemeShopHomePage(): ?\Oceanengine\Models\BrandMaterialCreateV30RequestMaterialListInnerMaterialComponentAwemeShopHomePage
    {
        return $this->awemeShopHomePage;
    }

    /**
     * @param \Oceanengine\Models\BrandMaterialCreateV30RequestMaterialListInnerMaterialComponentAwemeShopHomePage $awemeShopHomePage
     * @return self
     */
    public function setAwemeShopHomePage(?\Oceanengine\Models\BrandMaterialCreateV30RequestMaterialListInnerMaterialComponentAwemeShopHomePage $awemeShopHomePage): self
    {
        $this->awemeShopHomePage = $awemeShopHomePage;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\BrandMaterialCreateV30RequestMaterialListInnerMaterialComponentAwemeVideo
     */
    public function getAwemeVideo(): ?\Oceanengine\Models\BrandMaterialCreateV30RequestMaterialListInnerMaterialComponentAwemeVideo
    {
        return $this->awemeVideo;
    }

    /**
     * @param \Oceanengine\Models\BrandMaterialCreateV30RequestMaterialListInnerMaterialComponentAwemeVideo $awemeVideo
     * @return self
     */
    public function setAwemeVideo(?\Oceanengine\Models\BrandMaterialCreateV30RequestMaterialListInnerMaterialComponentAwemeVideo $awemeVideo): self
    {
        $this->awemeVideo = $awemeVideo;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\BrandMaterialCreateV30RequestMaterialListInnerMaterialComponentBusinessUrl
     */
    public function getBusinessUrl(): ?\Oceanengine\Models\BrandMaterialCreateV30RequestMaterialListInnerMaterialComponentBusinessUrl
    {
        return $this->businessUrl;
    }

    /**
     * @param \Oceanengine\Models\BrandMaterialCreateV30RequestMaterialListInnerMaterialComponentBusinessUrl $businessUrl
     * @return self
     */
    public function setBusinessUrl(?\Oceanengine\Models\BrandMaterialCreateV30RequestMaterialListInnerMaterialComponentBusinessUrl $businessUrl): self
    {
        $this->businessUrl = $businessUrl;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\BrandMaterialCreateV30RequestMaterialListInnerMaterialComponentCommonExternal
     */
    public function getCommonExternal(): ?\Oceanengine\Models\BrandMaterialCreateV30RequestMaterialListInnerMaterialComponentCommonExternal
    {
        return $this->commonExternal;
    }

    /**
     * @param \Oceanengine\Models\BrandMaterialCreateV30RequestMaterialListInnerMaterialComponentCommonExternal $commonExternal
     * @return self
     */
    public function setCommonExternal(?\Oceanengine\Models\BrandMaterialCreateV30RequestMaterialListInnerMaterialComponentCommonExternal $commonExternal): self
    {
        $this->commonExternal = $commonExternal;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\BrandMaterialCreateV30RequestMaterialListInnerMaterialComponentDeliveryTimeList
     */
    public function getDeliveryTimeList(): ?\Oceanengine\Models\BrandMaterialCreateV30RequestMaterialListInnerMaterialComponentDeliveryTimeList
    {
        return $this->deliveryTimeList;
    }

    /**
     * @param \Oceanengine\Models\BrandMaterialCreateV30RequestMaterialListInnerMaterialComponentDeliveryTimeList $deliveryTimeList
     * @return self
     */
    public function setDeliveryTimeList(?\Oceanengine\Models\BrandMaterialCreateV30RequestMaterialListInnerMaterialComponentDeliveryTimeList $deliveryTimeList): self
    {
        $this->deliveryTimeList = $deliveryTimeList;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\BrandMaterialCreateV30RequestMaterialListInnerMaterialComponentExploreOneTime
     */
    public function getExploreOneTime(): ?\Oceanengine\Models\BrandMaterialCreateV30RequestMaterialListInnerMaterialComponentExploreOneTime
    {
        return $this->exploreOneTime;
    }

    /**
     * @param \Oceanengine\Models\BrandMaterialCreateV30RequestMaterialListInnerMaterialComponentExploreOneTime $exploreOneTime
     * @return self
     */
    public function setExploreOneTime(?\Oceanengine\Models\BrandMaterialCreateV30RequestMaterialListInnerMaterialComponentExploreOneTime $exploreOneTime): self
    {
        $this->exploreOneTime = $exploreOneTime;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\BrandMaterialCreateV30RequestMaterialListInnerMaterialComponentExternalTitle
     */
    public function getExternalTitle(): ?\Oceanengine\Models\BrandMaterialCreateV30RequestMaterialListInnerMaterialComponentExternalTitle
    {
        return $this->externalTitle;
    }

    /**
     * @param \Oceanengine\Models\BrandMaterialCreateV30RequestMaterialListInnerMaterialComponentExternalTitle $externalTitle
     * @return self
     */
    public function setExternalTitle(?\Oceanengine\Models\BrandMaterialCreateV30RequestMaterialListInnerMaterialComponentExternalTitle $externalTitle): self
    {
        $this->externalTitle = $externalTitle;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\BrandMaterialCreateV30RequestMaterialListInnerMaterialComponentFeedButtonText
     */
    public function getFeedButtonText(): ?\Oceanengine\Models\BrandMaterialCreateV30RequestMaterialListInnerMaterialComponentFeedButtonText
    {
        return $this->feedButtonText;
    }

    /**
     * @param \Oceanengine\Models\BrandMaterialCreateV30RequestMaterialListInnerMaterialComponentFeedButtonText $feedButtonText
     * @return self
     */
    public function setFeedButtonText(?\Oceanengine\Models\BrandMaterialCreateV30RequestMaterialListInnerMaterialComponentFeedButtonText $feedButtonText): self
    {
        $this->feedButtonText = $feedButtonText;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\BrandMaterialCreateV30RequestMaterialListInnerMaterialComponentIesCoreUser
     */
    public function getIesCoreUser(): ?\Oceanengine\Models\BrandMaterialCreateV30RequestMaterialListInnerMaterialComponentIesCoreUser
    {
        return $this->iesCoreUser;
    }

    /**
     * @param \Oceanengine\Models\BrandMaterialCreateV30RequestMaterialListInnerMaterialComponentIesCoreUser $iesCoreUser
     * @return self
     */
    public function setIesCoreUser(?\Oceanengine\Models\BrandMaterialCreateV30RequestMaterialListInnerMaterialComponentIesCoreUser $iesCoreUser): self
    {
        $this->iesCoreUser = $iesCoreUser;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\BrandMaterialCreateV30RequestMaterialListInnerMaterialComponentImageCard
     */
    public function getImageCard(): ?\Oceanengine\Models\BrandMaterialCreateV30RequestMaterialListInnerMaterialComponentImageCard
    {
        return $this->imageCard;
    }

    /**
     * @param \Oceanengine\Models\BrandMaterialCreateV30RequestMaterialListInnerMaterialComponentImageCard $imageCard
     * @return self
     */
    public function setImageCard(?\Oceanengine\Models\BrandMaterialCreateV30RequestMaterialListInnerMaterialComponentImageCard $imageCard): self
    {
        $this->imageCard = $imageCard;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\BrandMaterialCreateV30RequestMaterialListInnerMaterialComponentLbsExternal
     */
    public function getLbsExternal(): ?\Oceanengine\Models\BrandMaterialCreateV30RequestMaterialListInnerMaterialComponentLbsExternal
    {
        return $this->lbsExternal;
    }

    /**
     * @param \Oceanengine\Models\BrandMaterialCreateV30RequestMaterialListInnerMaterialComponentLbsExternal $lbsExternal
     * @return self
     */
    public function setLbsExternal(?\Oceanengine\Models\BrandMaterialCreateV30RequestMaterialListInnerMaterialComponentLbsExternal $lbsExternal): self
    {
        $this->lbsExternal = $lbsExternal;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\BrandMaterialCreateV30RequestMaterialListInnerMaterialComponentMallActivityPage
     */
    public function getMallActivityPage(): ?\Oceanengine\Models\BrandMaterialCreateV30RequestMaterialListInnerMaterialComponentMallActivityPage
    {
        return $this->mallActivityPage;
    }

    /**
     * @param \Oceanengine\Models\BrandMaterialCreateV30RequestMaterialListInnerMaterialComponentMallActivityPage $mallActivityPage
     * @return self
     */
    public function setMallActivityPage(?\Oceanengine\Models\BrandMaterialCreateV30RequestMaterialListInnerMaterialComponentMallActivityPage $mallActivityPage): self
    {
        $this->mallActivityPage = $mallActivityPage;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\BrandMaterialCreateV30RequestMaterialListInnerMaterialComponentMusicText
     */
    public function getMusicText(): ?\Oceanengine\Models\BrandMaterialCreateV30RequestMaterialListInnerMaterialComponentMusicText
    {
        return $this->musicText;
    }

    /**
     * @param \Oceanengine\Models\BrandMaterialCreateV30RequestMaterialListInnerMaterialComponentMusicText $musicText
     * @return self
     */
    public function setMusicText(?\Oceanengine\Models\BrandMaterialCreateV30RequestMaterialListInnerMaterialComponentMusicText $musicText): self
    {
        $this->musicText = $musicText;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\BrandMaterialCreateV30RequestMaterialListInnerMaterialComponentProductDetailPage
     */
    public function getProductDetailPage(): ?\Oceanengine\Models\BrandMaterialCreateV30RequestMaterialListInnerMaterialComponentProductDetailPage
    {
        return $this->productDetailPage;
    }

    /**
     * @param \Oceanengine\Models\BrandMaterialCreateV30RequestMaterialListInnerMaterialComponentProductDetailPage $productDetailPage
     * @return self
     */
    public function setProductDetailPage(?\Oceanengine\Models\BrandMaterialCreateV30RequestMaterialListInnerMaterialComponentProductDetailPage $productDetailPage): self
    {
        $this->productDetailPage = $productDetailPage;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\BrandMaterialCreateV30RequestMaterialListInnerMaterialComponentSearch
     */
    public function getSearch(): ?\Oceanengine\Models\BrandMaterialCreateV30RequestMaterialListInnerMaterialComponentSearch
    {
        return $this->search;
    }

    /**
     * @param \Oceanengine\Models\BrandMaterialCreateV30RequestMaterialListInnerMaterialComponentSearch $search
     * @return self
     */
    public function setSearch(?\Oceanengine\Models\BrandMaterialCreateV30RequestMaterialListInnerMaterialComponentSearch $search): self
    {
        $this->search = $search;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\BrandMaterialCreateV30RequestMaterialListInnerMaterialComponentVideoComment
     */
    public function getVideoComment(): ?\Oceanengine\Models\BrandMaterialCreateV30RequestMaterialListInnerMaterialComponentVideoComment
    {
        return $this->videoComment;
    }

    /**
     * @param \Oceanengine\Models\BrandMaterialCreateV30RequestMaterialListInnerMaterialComponentVideoComment $videoComment
     * @return self
     */
    public function setVideoComment(?\Oceanengine\Models\BrandMaterialCreateV30RequestMaterialListInnerMaterialComponentVideoComment $videoComment): self
    {
        $this->videoComment = $videoComment;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\BrandMaterialCreateV30RequestMaterialListInnerMaterialComponentVideoDownload
     */
    public function getVideoDownload(): ?\Oceanengine\Models\BrandMaterialCreateV30RequestMaterialListInnerMaterialComponentVideoDownload
    {
        return $this->videoDownload;
    }

    /**
     * @param \Oceanengine\Models\BrandMaterialCreateV30RequestMaterialListInnerMaterialComponentVideoDownload $videoDownload
     * @return self
     */
    public function setVideoDownload(?\Oceanengine\Models\BrandMaterialCreateV30RequestMaterialListInnerMaterialComponentVideoDownload $videoDownload): self
    {
        $this->videoDownload = $videoDownload;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->avatarIcon !== null) {
            $result['avatar_icon'] = $this->avatarIcon;
        }
        if ($this->awemeAnchor !== null) {
            $result['aweme_anchor'] = $this->awemeAnchor;
        }
        if ($this->awemeShopHomePage !== null) {
            $result['aweme_shop_home_page'] = $this->awemeShopHomePage;
        }
        if ($this->awemeVideo !== null) {
            $result['aweme_video'] = $this->awemeVideo;
        }
        if ($this->businessUrl !== null) {
            $result['business_url'] = $this->businessUrl;
        }
        if ($this->commonExternal !== null) {
            $result['common_external'] = $this->commonExternal;
        }
        if ($this->deliveryTimeList !== null) {
            $result['delivery_time_list'] = $this->deliveryTimeList;
        }
        if ($this->exploreOneTime !== null) {
            $result['explore_one_time'] = $this->exploreOneTime;
        }
        if ($this->externalTitle !== null) {
            $result['external_title'] = $this->externalTitle;
        }
        if ($this->feedButtonText !== null) {
            $result['feed_button_text'] = $this->feedButtonText;
        }
        if ($this->iesCoreUser !== null) {
            $result['ies_core_user'] = $this->iesCoreUser;
        }
        if ($this->imageCard !== null) {
            $result['image_card'] = $this->imageCard;
        }
        if ($this->lbsExternal !== null) {
            $result['lbs_external'] = $this->lbsExternal;
        }
        if ($this->mallActivityPage !== null) {
            $result['mall_activity_page'] = $this->mallActivityPage;
        }
        if ($this->musicText !== null) {
            $result['music_text'] = $this->musicText;
        }
        if ($this->productDetailPage !== null) {
            $result['product_detail_page'] = $this->productDetailPage;
        }
        if ($this->search !== null) {
            $result['search'] = $this->search;
        }
        if ($this->videoComment !== null) {
            $result['video_comment'] = $this->videoComment;
        }
        if ($this->videoDownload !== null) {
            $result['video_download'] = $this->videoDownload;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['avatar_icon'] ?? null) !== null && is_array($v)) {
            $obj->avatarIcon = \Oceanengine\Models\BrandMaterialCreateV30RequestMaterialListInnerMaterialComponentAvatarIcon::fromArray($v);
        }
        if (($v = $data['aweme_anchor'] ?? null) !== null && is_array($v)) {
            $obj->awemeAnchor = \Oceanengine\Models\BrandMaterialCreateV30RequestMaterialListInnerMaterialComponentAwemeAnchor::fromArray($v);
        }
        if (($v = $data['aweme_shop_home_page'] ?? null) !== null && is_array($v)) {
            $obj->awemeShopHomePage = \Oceanengine\Models\BrandMaterialCreateV30RequestMaterialListInnerMaterialComponentAwemeShopHomePage::fromArray($v);
        }
        if (($v = $data['aweme_video'] ?? null) !== null && is_array($v)) {
            $obj->awemeVideo = \Oceanengine\Models\BrandMaterialCreateV30RequestMaterialListInnerMaterialComponentAwemeVideo::fromArray($v);
        }
        if (($v = $data['business_url'] ?? null) !== null && is_array($v)) {
            $obj->businessUrl = \Oceanengine\Models\BrandMaterialCreateV30RequestMaterialListInnerMaterialComponentBusinessUrl::fromArray($v);
        }
        if (($v = $data['common_external'] ?? null) !== null && is_array($v)) {
            $obj->commonExternal = \Oceanengine\Models\BrandMaterialCreateV30RequestMaterialListInnerMaterialComponentCommonExternal::fromArray($v);
        }
        if (($v = $data['delivery_time_list'] ?? null) !== null && is_array($v)) {
            $obj->deliveryTimeList = \Oceanengine\Models\BrandMaterialCreateV30RequestMaterialListInnerMaterialComponentDeliveryTimeList::fromArray($v);
        }
        if (($v = $data['explore_one_time'] ?? null) !== null && is_array($v)) {
            $obj->exploreOneTime = \Oceanengine\Models\BrandMaterialCreateV30RequestMaterialListInnerMaterialComponentExploreOneTime::fromArray($v);
        }
        if (($v = $data['external_title'] ?? null) !== null && is_array($v)) {
            $obj->externalTitle = \Oceanengine\Models\BrandMaterialCreateV30RequestMaterialListInnerMaterialComponentExternalTitle::fromArray($v);
        }
        if (($v = $data['feed_button_text'] ?? null) !== null && is_array($v)) {
            $obj->feedButtonText = \Oceanengine\Models\BrandMaterialCreateV30RequestMaterialListInnerMaterialComponentFeedButtonText::fromArray($v);
        }
        if (($v = $data['ies_core_user'] ?? null) !== null && is_array($v)) {
            $obj->iesCoreUser = \Oceanengine\Models\BrandMaterialCreateV30RequestMaterialListInnerMaterialComponentIesCoreUser::fromArray($v);
        }
        if (($v = $data['image_card'] ?? null) !== null && is_array($v)) {
            $obj->imageCard = \Oceanengine\Models\BrandMaterialCreateV30RequestMaterialListInnerMaterialComponentImageCard::fromArray($v);
        }
        if (($v = $data['lbs_external'] ?? null) !== null && is_array($v)) {
            $obj->lbsExternal = \Oceanengine\Models\BrandMaterialCreateV30RequestMaterialListInnerMaterialComponentLbsExternal::fromArray($v);
        }
        if (($v = $data['mall_activity_page'] ?? null) !== null && is_array($v)) {
            $obj->mallActivityPage = \Oceanengine\Models\BrandMaterialCreateV30RequestMaterialListInnerMaterialComponentMallActivityPage::fromArray($v);
        }
        if (($v = $data['music_text'] ?? null) !== null && is_array($v)) {
            $obj->musicText = \Oceanengine\Models\BrandMaterialCreateV30RequestMaterialListInnerMaterialComponentMusicText::fromArray($v);
        }
        if (($v = $data['product_detail_page'] ?? null) !== null && is_array($v)) {
            $obj->productDetailPage = \Oceanengine\Models\BrandMaterialCreateV30RequestMaterialListInnerMaterialComponentProductDetailPage::fromArray($v);
        }
        if (($v = $data['search'] ?? null) !== null && is_array($v)) {
            $obj->search = \Oceanengine\Models\BrandMaterialCreateV30RequestMaterialListInnerMaterialComponentSearch::fromArray($v);
        }
        if (($v = $data['video_comment'] ?? null) !== null && is_array($v)) {
            $obj->videoComment = \Oceanengine\Models\BrandMaterialCreateV30RequestMaterialListInnerMaterialComponentVideoComment::fromArray($v);
        }
        if (($v = $data['video_download'] ?? null) !== null && is_array($v)) {
            $obj->videoDownload = \Oceanengine\Models\BrandMaterialCreateV30RequestMaterialListInnerMaterialComponentVideoDownload::fromArray($v);
        }
        return $obj;
    }
}
