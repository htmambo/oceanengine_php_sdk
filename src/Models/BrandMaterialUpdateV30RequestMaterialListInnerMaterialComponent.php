<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class BrandMaterialUpdateV30RequestMaterialListInnerMaterialComponent implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\BrandMaterialUpdateV30RequestMaterialListInnerMaterialComponentAvatarIcon
     */
    protected ?\Oceanengine\Models\BrandMaterialUpdateV30RequestMaterialListInnerMaterialComponentAvatarIcon $avatarIcon = null;

    /**
     * @var \Oceanengine\Models\BrandMaterialUpdateV30RequestMaterialListInnerMaterialComponentAwemeAnchor
     */
    protected ?\Oceanengine\Models\BrandMaterialUpdateV30RequestMaterialListInnerMaterialComponentAwemeAnchor $awemeAnchor = null;

    /**
     * @var \Oceanengine\Models\BrandMaterialUpdateV30RequestMaterialListInnerMaterialComponentAwemeShopHomePage
     */
    protected ?\Oceanengine\Models\BrandMaterialUpdateV30RequestMaterialListInnerMaterialComponentAwemeShopHomePage $awemeShopHomePage = null;

    /**
     * @var \Oceanengine\Models\BrandMaterialUpdateV30RequestMaterialListInnerMaterialComponentAwemeVideo
     */
    protected ?\Oceanengine\Models\BrandMaterialUpdateV30RequestMaterialListInnerMaterialComponentAwemeVideo $awemeVideo = null;

    /**
     * @var \Oceanengine\Models\BrandMaterialUpdateV30RequestMaterialListInnerMaterialComponentBusinessUrl
     */
    protected ?\Oceanengine\Models\BrandMaterialUpdateV30RequestMaterialListInnerMaterialComponentBusinessUrl $businessUrl = null;

    /**
     * @var \Oceanengine\Models\BrandMaterialUpdateV30RequestMaterialListInnerMaterialComponentCommonExternal
     */
    protected ?\Oceanengine\Models\BrandMaterialUpdateV30RequestMaterialListInnerMaterialComponentCommonExternal $commonExternal = null;

    /**
     * @var \Oceanengine\Models\BrandMaterialUpdateV30RequestMaterialListInnerMaterialComponentDeliveryTimeList
     */
    protected ?\Oceanengine\Models\BrandMaterialUpdateV30RequestMaterialListInnerMaterialComponentDeliveryTimeList $deliveryTimeList = null;

    /**
     * @var \Oceanengine\Models\BrandMaterialUpdateV30RequestMaterialListInnerMaterialComponentExploreOneTime
     */
    protected ?\Oceanengine\Models\BrandMaterialUpdateV30RequestMaterialListInnerMaterialComponentExploreOneTime $exploreOneTime = null;

    /**
     * @var \Oceanengine\Models\BrandMaterialUpdateV30RequestMaterialListInnerMaterialComponentExternalTitle
     */
    protected ?\Oceanengine\Models\BrandMaterialUpdateV30RequestMaterialListInnerMaterialComponentExternalTitle $externalTitle = null;

    /**
     * @var \Oceanengine\Models\BrandMaterialUpdateV30RequestMaterialListInnerMaterialComponentFeedButtonText
     */
    protected ?\Oceanengine\Models\BrandMaterialUpdateV30RequestMaterialListInnerMaterialComponentFeedButtonText $feedButtonText = null;

    /**
     * @var \Oceanengine\Models\BrandMaterialUpdateV30RequestMaterialListInnerMaterialComponentIesCoreUser
     */
    protected ?\Oceanengine\Models\BrandMaterialUpdateV30RequestMaterialListInnerMaterialComponentIesCoreUser $iesCoreUser = null;

    /**
     * @var \Oceanengine\Models\BrandMaterialUpdateV30RequestMaterialListInnerMaterialComponentImageCard
     */
    protected ?\Oceanengine\Models\BrandMaterialUpdateV30RequestMaterialListInnerMaterialComponentImageCard $imageCard = null;

    /**
     * @var \Oceanengine\Models\BrandMaterialUpdateV30RequestMaterialListInnerMaterialComponentLbsExternal
     */
    protected ?\Oceanengine\Models\BrandMaterialUpdateV30RequestMaterialListInnerMaterialComponentLbsExternal $lbsExternal = null;

    /**
     * @var \Oceanengine\Models\BrandMaterialUpdateV30RequestMaterialListInnerMaterialComponentMallActivityPage
     */
    protected ?\Oceanengine\Models\BrandMaterialUpdateV30RequestMaterialListInnerMaterialComponentMallActivityPage $mallActivityPage = null;

    /**
     * @var \Oceanengine\Models\BrandMaterialUpdateV30RequestMaterialListInnerMaterialComponentMusicText
     */
    protected ?\Oceanengine\Models\BrandMaterialUpdateV30RequestMaterialListInnerMaterialComponentMusicText $musicText = null;

    /**
     * @var \Oceanengine\Models\BrandMaterialUpdateV30RequestMaterialListInnerMaterialComponentProductDetailPage
     */
    protected ?\Oceanengine\Models\BrandMaterialUpdateV30RequestMaterialListInnerMaterialComponentProductDetailPage $productDetailPage = null;

    /**
     * @var \Oceanengine\Models\BrandMaterialUpdateV30RequestMaterialListInnerMaterialComponentSearch
     */
    protected ?\Oceanengine\Models\BrandMaterialUpdateV30RequestMaterialListInnerMaterialComponentSearch $search = null;

    /**
     * @var \Oceanengine\Models\BrandMaterialUpdateV30RequestMaterialListInnerMaterialComponentVideoComment
     */
    protected ?\Oceanengine\Models\BrandMaterialUpdateV30RequestMaterialListInnerMaterialComponentVideoComment $videoComment = null;

    /**
     * @var \Oceanengine\Models\BrandMaterialUpdateV30RequestMaterialListInnerMaterialComponentVideoDownload
     */
    protected ?\Oceanengine\Models\BrandMaterialUpdateV30RequestMaterialListInnerMaterialComponentVideoDownload $videoDownload = null;

    /**
     * @return \Oceanengine\Models\BrandMaterialUpdateV30RequestMaterialListInnerMaterialComponentAvatarIcon
     */
    public function getAvatarIcon(): ?\Oceanengine\Models\BrandMaterialUpdateV30RequestMaterialListInnerMaterialComponentAvatarIcon
    {
        return $this->avatarIcon;
    }

    /**
     * @param \Oceanengine\Models\BrandMaterialUpdateV30RequestMaterialListInnerMaterialComponentAvatarIcon $avatarIcon
     * @return self
     */
    public function setAvatarIcon(?\Oceanengine\Models\BrandMaterialUpdateV30RequestMaterialListInnerMaterialComponentAvatarIcon $avatarIcon): self
    {
        $this->avatarIcon = $avatarIcon;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\BrandMaterialUpdateV30RequestMaterialListInnerMaterialComponentAwemeAnchor
     */
    public function getAwemeAnchor(): ?\Oceanengine\Models\BrandMaterialUpdateV30RequestMaterialListInnerMaterialComponentAwemeAnchor
    {
        return $this->awemeAnchor;
    }

    /**
     * @param \Oceanengine\Models\BrandMaterialUpdateV30RequestMaterialListInnerMaterialComponentAwemeAnchor $awemeAnchor
     * @return self
     */
    public function setAwemeAnchor(?\Oceanengine\Models\BrandMaterialUpdateV30RequestMaterialListInnerMaterialComponentAwemeAnchor $awemeAnchor): self
    {
        $this->awemeAnchor = $awemeAnchor;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\BrandMaterialUpdateV30RequestMaterialListInnerMaterialComponentAwemeShopHomePage
     */
    public function getAwemeShopHomePage(): ?\Oceanengine\Models\BrandMaterialUpdateV30RequestMaterialListInnerMaterialComponentAwemeShopHomePage
    {
        return $this->awemeShopHomePage;
    }

    /**
     * @param \Oceanengine\Models\BrandMaterialUpdateV30RequestMaterialListInnerMaterialComponentAwemeShopHomePage $awemeShopHomePage
     * @return self
     */
    public function setAwemeShopHomePage(?\Oceanengine\Models\BrandMaterialUpdateV30RequestMaterialListInnerMaterialComponentAwemeShopHomePage $awemeShopHomePage): self
    {
        $this->awemeShopHomePage = $awemeShopHomePage;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\BrandMaterialUpdateV30RequestMaterialListInnerMaterialComponentAwemeVideo
     */
    public function getAwemeVideo(): ?\Oceanengine\Models\BrandMaterialUpdateV30RequestMaterialListInnerMaterialComponentAwemeVideo
    {
        return $this->awemeVideo;
    }

    /**
     * @param \Oceanengine\Models\BrandMaterialUpdateV30RequestMaterialListInnerMaterialComponentAwemeVideo $awemeVideo
     * @return self
     */
    public function setAwemeVideo(?\Oceanengine\Models\BrandMaterialUpdateV30RequestMaterialListInnerMaterialComponentAwemeVideo $awemeVideo): self
    {
        $this->awemeVideo = $awemeVideo;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\BrandMaterialUpdateV30RequestMaterialListInnerMaterialComponentBusinessUrl
     */
    public function getBusinessUrl(): ?\Oceanengine\Models\BrandMaterialUpdateV30RequestMaterialListInnerMaterialComponentBusinessUrl
    {
        return $this->businessUrl;
    }

    /**
     * @param \Oceanengine\Models\BrandMaterialUpdateV30RequestMaterialListInnerMaterialComponentBusinessUrl $businessUrl
     * @return self
     */
    public function setBusinessUrl(?\Oceanengine\Models\BrandMaterialUpdateV30RequestMaterialListInnerMaterialComponentBusinessUrl $businessUrl): self
    {
        $this->businessUrl = $businessUrl;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\BrandMaterialUpdateV30RequestMaterialListInnerMaterialComponentCommonExternal
     */
    public function getCommonExternal(): ?\Oceanengine\Models\BrandMaterialUpdateV30RequestMaterialListInnerMaterialComponentCommonExternal
    {
        return $this->commonExternal;
    }

    /**
     * @param \Oceanengine\Models\BrandMaterialUpdateV30RequestMaterialListInnerMaterialComponentCommonExternal $commonExternal
     * @return self
     */
    public function setCommonExternal(?\Oceanengine\Models\BrandMaterialUpdateV30RequestMaterialListInnerMaterialComponentCommonExternal $commonExternal): self
    {
        $this->commonExternal = $commonExternal;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\BrandMaterialUpdateV30RequestMaterialListInnerMaterialComponentDeliveryTimeList
     */
    public function getDeliveryTimeList(): ?\Oceanengine\Models\BrandMaterialUpdateV30RequestMaterialListInnerMaterialComponentDeliveryTimeList
    {
        return $this->deliveryTimeList;
    }

    /**
     * @param \Oceanengine\Models\BrandMaterialUpdateV30RequestMaterialListInnerMaterialComponentDeliveryTimeList $deliveryTimeList
     * @return self
     */
    public function setDeliveryTimeList(?\Oceanengine\Models\BrandMaterialUpdateV30RequestMaterialListInnerMaterialComponentDeliveryTimeList $deliveryTimeList): self
    {
        $this->deliveryTimeList = $deliveryTimeList;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\BrandMaterialUpdateV30RequestMaterialListInnerMaterialComponentExploreOneTime
     */
    public function getExploreOneTime(): ?\Oceanengine\Models\BrandMaterialUpdateV30RequestMaterialListInnerMaterialComponentExploreOneTime
    {
        return $this->exploreOneTime;
    }

    /**
     * @param \Oceanengine\Models\BrandMaterialUpdateV30RequestMaterialListInnerMaterialComponentExploreOneTime $exploreOneTime
     * @return self
     */
    public function setExploreOneTime(?\Oceanengine\Models\BrandMaterialUpdateV30RequestMaterialListInnerMaterialComponentExploreOneTime $exploreOneTime): self
    {
        $this->exploreOneTime = $exploreOneTime;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\BrandMaterialUpdateV30RequestMaterialListInnerMaterialComponentExternalTitle
     */
    public function getExternalTitle(): ?\Oceanengine\Models\BrandMaterialUpdateV30RequestMaterialListInnerMaterialComponentExternalTitle
    {
        return $this->externalTitle;
    }

    /**
     * @param \Oceanengine\Models\BrandMaterialUpdateV30RequestMaterialListInnerMaterialComponentExternalTitle $externalTitle
     * @return self
     */
    public function setExternalTitle(?\Oceanengine\Models\BrandMaterialUpdateV30RequestMaterialListInnerMaterialComponentExternalTitle $externalTitle): self
    {
        $this->externalTitle = $externalTitle;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\BrandMaterialUpdateV30RequestMaterialListInnerMaterialComponentFeedButtonText
     */
    public function getFeedButtonText(): ?\Oceanengine\Models\BrandMaterialUpdateV30RequestMaterialListInnerMaterialComponentFeedButtonText
    {
        return $this->feedButtonText;
    }

    /**
     * @param \Oceanengine\Models\BrandMaterialUpdateV30RequestMaterialListInnerMaterialComponentFeedButtonText $feedButtonText
     * @return self
     */
    public function setFeedButtonText(?\Oceanengine\Models\BrandMaterialUpdateV30RequestMaterialListInnerMaterialComponentFeedButtonText $feedButtonText): self
    {
        $this->feedButtonText = $feedButtonText;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\BrandMaterialUpdateV30RequestMaterialListInnerMaterialComponentIesCoreUser
     */
    public function getIesCoreUser(): ?\Oceanengine\Models\BrandMaterialUpdateV30RequestMaterialListInnerMaterialComponentIesCoreUser
    {
        return $this->iesCoreUser;
    }

    /**
     * @param \Oceanengine\Models\BrandMaterialUpdateV30RequestMaterialListInnerMaterialComponentIesCoreUser $iesCoreUser
     * @return self
     */
    public function setIesCoreUser(?\Oceanengine\Models\BrandMaterialUpdateV30RequestMaterialListInnerMaterialComponentIesCoreUser $iesCoreUser): self
    {
        $this->iesCoreUser = $iesCoreUser;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\BrandMaterialUpdateV30RequestMaterialListInnerMaterialComponentImageCard
     */
    public function getImageCard(): ?\Oceanengine\Models\BrandMaterialUpdateV30RequestMaterialListInnerMaterialComponentImageCard
    {
        return $this->imageCard;
    }

    /**
     * @param \Oceanengine\Models\BrandMaterialUpdateV30RequestMaterialListInnerMaterialComponentImageCard $imageCard
     * @return self
     */
    public function setImageCard(?\Oceanengine\Models\BrandMaterialUpdateV30RequestMaterialListInnerMaterialComponentImageCard $imageCard): self
    {
        $this->imageCard = $imageCard;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\BrandMaterialUpdateV30RequestMaterialListInnerMaterialComponentLbsExternal
     */
    public function getLbsExternal(): ?\Oceanengine\Models\BrandMaterialUpdateV30RequestMaterialListInnerMaterialComponentLbsExternal
    {
        return $this->lbsExternal;
    }

    /**
     * @param \Oceanengine\Models\BrandMaterialUpdateV30RequestMaterialListInnerMaterialComponentLbsExternal $lbsExternal
     * @return self
     */
    public function setLbsExternal(?\Oceanengine\Models\BrandMaterialUpdateV30RequestMaterialListInnerMaterialComponentLbsExternal $lbsExternal): self
    {
        $this->lbsExternal = $lbsExternal;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\BrandMaterialUpdateV30RequestMaterialListInnerMaterialComponentMallActivityPage
     */
    public function getMallActivityPage(): ?\Oceanengine\Models\BrandMaterialUpdateV30RequestMaterialListInnerMaterialComponentMallActivityPage
    {
        return $this->mallActivityPage;
    }

    /**
     * @param \Oceanengine\Models\BrandMaterialUpdateV30RequestMaterialListInnerMaterialComponentMallActivityPage $mallActivityPage
     * @return self
     */
    public function setMallActivityPage(?\Oceanengine\Models\BrandMaterialUpdateV30RequestMaterialListInnerMaterialComponentMallActivityPage $mallActivityPage): self
    {
        $this->mallActivityPage = $mallActivityPage;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\BrandMaterialUpdateV30RequestMaterialListInnerMaterialComponentMusicText
     */
    public function getMusicText(): ?\Oceanengine\Models\BrandMaterialUpdateV30RequestMaterialListInnerMaterialComponentMusicText
    {
        return $this->musicText;
    }

    /**
     * @param \Oceanengine\Models\BrandMaterialUpdateV30RequestMaterialListInnerMaterialComponentMusicText $musicText
     * @return self
     */
    public function setMusicText(?\Oceanengine\Models\BrandMaterialUpdateV30RequestMaterialListInnerMaterialComponentMusicText $musicText): self
    {
        $this->musicText = $musicText;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\BrandMaterialUpdateV30RequestMaterialListInnerMaterialComponentProductDetailPage
     */
    public function getProductDetailPage(): ?\Oceanengine\Models\BrandMaterialUpdateV30RequestMaterialListInnerMaterialComponentProductDetailPage
    {
        return $this->productDetailPage;
    }

    /**
     * @param \Oceanengine\Models\BrandMaterialUpdateV30RequestMaterialListInnerMaterialComponentProductDetailPage $productDetailPage
     * @return self
     */
    public function setProductDetailPage(?\Oceanengine\Models\BrandMaterialUpdateV30RequestMaterialListInnerMaterialComponentProductDetailPage $productDetailPage): self
    {
        $this->productDetailPage = $productDetailPage;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\BrandMaterialUpdateV30RequestMaterialListInnerMaterialComponentSearch
     */
    public function getSearch(): ?\Oceanengine\Models\BrandMaterialUpdateV30RequestMaterialListInnerMaterialComponentSearch
    {
        return $this->search;
    }

    /**
     * @param \Oceanengine\Models\BrandMaterialUpdateV30RequestMaterialListInnerMaterialComponentSearch $search
     * @return self
     */
    public function setSearch(?\Oceanengine\Models\BrandMaterialUpdateV30RequestMaterialListInnerMaterialComponentSearch $search): self
    {
        $this->search = $search;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\BrandMaterialUpdateV30RequestMaterialListInnerMaterialComponentVideoComment
     */
    public function getVideoComment(): ?\Oceanengine\Models\BrandMaterialUpdateV30RequestMaterialListInnerMaterialComponentVideoComment
    {
        return $this->videoComment;
    }

    /**
     * @param \Oceanengine\Models\BrandMaterialUpdateV30RequestMaterialListInnerMaterialComponentVideoComment $videoComment
     * @return self
     */
    public function setVideoComment(?\Oceanengine\Models\BrandMaterialUpdateV30RequestMaterialListInnerMaterialComponentVideoComment $videoComment): self
    {
        $this->videoComment = $videoComment;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\BrandMaterialUpdateV30RequestMaterialListInnerMaterialComponentVideoDownload
     */
    public function getVideoDownload(): ?\Oceanengine\Models\BrandMaterialUpdateV30RequestMaterialListInnerMaterialComponentVideoDownload
    {
        return $this->videoDownload;
    }

    /**
     * @param \Oceanengine\Models\BrandMaterialUpdateV30RequestMaterialListInnerMaterialComponentVideoDownload $videoDownload
     * @return self
     */
    public function setVideoDownload(?\Oceanengine\Models\BrandMaterialUpdateV30RequestMaterialListInnerMaterialComponentVideoDownload $videoDownload): self
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
            $obj->avatarIcon = \Oceanengine\Models\BrandMaterialUpdateV30RequestMaterialListInnerMaterialComponentAvatarIcon::fromArray($v);
        }
        if (($v = $data['aweme_anchor'] ?? null) !== null && is_array($v)) {
            $obj->awemeAnchor = \Oceanengine\Models\BrandMaterialUpdateV30RequestMaterialListInnerMaterialComponentAwemeAnchor::fromArray($v);
        }
        if (($v = $data['aweme_shop_home_page'] ?? null) !== null && is_array($v)) {
            $obj->awemeShopHomePage = \Oceanengine\Models\BrandMaterialUpdateV30RequestMaterialListInnerMaterialComponentAwemeShopHomePage::fromArray($v);
        }
        if (($v = $data['aweme_video'] ?? null) !== null && is_array($v)) {
            $obj->awemeVideo = \Oceanengine\Models\BrandMaterialUpdateV30RequestMaterialListInnerMaterialComponentAwemeVideo::fromArray($v);
        }
        if (($v = $data['business_url'] ?? null) !== null && is_array($v)) {
            $obj->businessUrl = \Oceanengine\Models\BrandMaterialUpdateV30RequestMaterialListInnerMaterialComponentBusinessUrl::fromArray($v);
        }
        if (($v = $data['common_external'] ?? null) !== null && is_array($v)) {
            $obj->commonExternal = \Oceanengine\Models\BrandMaterialUpdateV30RequestMaterialListInnerMaterialComponentCommonExternal::fromArray($v);
        }
        if (($v = $data['delivery_time_list'] ?? null) !== null && is_array($v)) {
            $obj->deliveryTimeList = \Oceanengine\Models\BrandMaterialUpdateV30RequestMaterialListInnerMaterialComponentDeliveryTimeList::fromArray($v);
        }
        if (($v = $data['explore_one_time'] ?? null) !== null && is_array($v)) {
            $obj->exploreOneTime = \Oceanengine\Models\BrandMaterialUpdateV30RequestMaterialListInnerMaterialComponentExploreOneTime::fromArray($v);
        }
        if (($v = $data['external_title'] ?? null) !== null && is_array($v)) {
            $obj->externalTitle = \Oceanengine\Models\BrandMaterialUpdateV30RequestMaterialListInnerMaterialComponentExternalTitle::fromArray($v);
        }
        if (($v = $data['feed_button_text'] ?? null) !== null && is_array($v)) {
            $obj->feedButtonText = \Oceanengine\Models\BrandMaterialUpdateV30RequestMaterialListInnerMaterialComponentFeedButtonText::fromArray($v);
        }
        if (($v = $data['ies_core_user'] ?? null) !== null && is_array($v)) {
            $obj->iesCoreUser = \Oceanengine\Models\BrandMaterialUpdateV30RequestMaterialListInnerMaterialComponentIesCoreUser::fromArray($v);
        }
        if (($v = $data['image_card'] ?? null) !== null && is_array($v)) {
            $obj->imageCard = \Oceanengine\Models\BrandMaterialUpdateV30RequestMaterialListInnerMaterialComponentImageCard::fromArray($v);
        }
        if (($v = $data['lbs_external'] ?? null) !== null && is_array($v)) {
            $obj->lbsExternal = \Oceanengine\Models\BrandMaterialUpdateV30RequestMaterialListInnerMaterialComponentLbsExternal::fromArray($v);
        }
        if (($v = $data['mall_activity_page'] ?? null) !== null && is_array($v)) {
            $obj->mallActivityPage = \Oceanengine\Models\BrandMaterialUpdateV30RequestMaterialListInnerMaterialComponentMallActivityPage::fromArray($v);
        }
        if (($v = $data['music_text'] ?? null) !== null && is_array($v)) {
            $obj->musicText = \Oceanengine\Models\BrandMaterialUpdateV30RequestMaterialListInnerMaterialComponentMusicText::fromArray($v);
        }
        if (($v = $data['product_detail_page'] ?? null) !== null && is_array($v)) {
            $obj->productDetailPage = \Oceanengine\Models\BrandMaterialUpdateV30RequestMaterialListInnerMaterialComponentProductDetailPage::fromArray($v);
        }
        if (($v = $data['search'] ?? null) !== null && is_array($v)) {
            $obj->search = \Oceanengine\Models\BrandMaterialUpdateV30RequestMaterialListInnerMaterialComponentSearch::fromArray($v);
        }
        if (($v = $data['video_comment'] ?? null) !== null && is_array($v)) {
            $obj->videoComment = \Oceanengine\Models\BrandMaterialUpdateV30RequestMaterialListInnerMaterialComponentVideoComment::fromArray($v);
        }
        if (($v = $data['video_download'] ?? null) !== null && is_array($v)) {
            $obj->videoDownload = \Oceanengine\Models\BrandMaterialUpdateV30RequestMaterialListInnerMaterialComponentVideoDownload::fromArray($v);
        }
        return $obj;
    }
}
