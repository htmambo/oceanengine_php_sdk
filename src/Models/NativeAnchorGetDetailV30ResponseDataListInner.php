<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class NativeAnchorGetDetailV30ResponseDataListInner implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $advertiserId = null;

    /**
     * @var string
     */
    protected ?string $anchorId = null;

    /**
     * @var \Oceanengine\Models\NativeAnchorGetDetailV30DataListAnchorType
     */
    protected ?string $anchorType = null;

    /**
     * @var \Oceanengine\Models\NativeAnchorGetDetailV30ResponseDataListInnerAppEcommerceAnchor
     */
    protected ?\Oceanengine\Models\NativeAnchorGetDetailV30ResponseDataListInnerAppEcommerceAnchor $appEcommerceAnchor = null;

    /**
     * @var string
     */
    protected ?string $createTime = null;

    /**
     * @var \Oceanengine\Models\NativeAnchorGetDetailV30ResponseDataListInnerGameAnchor
     */
    protected ?\Oceanengine\Models\NativeAnchorGetDetailV30ResponseDataListInnerGameAnchor $gameAnchor = null;

    /**
     * @var \Oceanengine\Models\NativeAnchorGetDetailV30ResponseDataListInnerInsuranceEnterpriseAnchor
     */
    protected ?\Oceanengine\Models\NativeAnchorGetDetailV30ResponseDataListInnerInsuranceEnterpriseAnchor $insuranceEnterpriseAnchor = null;

    /**
     * @var \Oceanengine\Models\NativeAnchorGetDetailV30ResponseDataListInnerMicroAppAnchor
     */
    protected ?\Oceanengine\Models\NativeAnchorGetDetailV30ResponseDataListInnerMicroAppAnchor $microAppAnchor = null;

    /**
     * @var \Oceanengine\Models\NativeAnchorGetDetailV30ResponseDataListInnerMicroGameAnchor
     */
    protected ?\Oceanengine\Models\NativeAnchorGetDetailV30ResponseDataListInnerMicroGameAnchor $microGameAnchor = null;

    /**
     * @var string
     */
    protected ?string $modifyTime = null;

    /**
     * @var \Oceanengine\Models\NativeAnchorGetDetailV30ResponseDataListInnerNetServiceAnchor
     */
    protected ?\Oceanengine\Models\NativeAnchorGetDetailV30ResponseDataListInnerNetServiceAnchor $netServiceAnchor = null;

    /**
     * @var \Oceanengine\Models\NativeAnchorGetDetailV30ResponseDataListInnerPrivateChatAnchor
     */
    protected ?\Oceanengine\Models\NativeAnchorGetDetailV30ResponseDataListInnerPrivateChatAnchor $privateChatAnchor = null;

    /**
     * @var \Oceanengine\Models\NativeAnchorGetDetailV30ResponseDataListInnerShoppingCartAnchor
     */
    protected ?\Oceanengine\Models\NativeAnchorGetDetailV30ResponseDataListInnerShoppingCartAnchor $shoppingCartAnchor = null;

    /**
     * @var \Oceanengine\Models\NativeAnchorGetDetailV30DataListSource
     */
    protected ?string $source = null;

    /**
     * @var string
     */
    protected ?string $toolTitle = null;

    /**
     * @return int
     */
    public function getAdvertiserId(): ?int
    {
        return $this->advertiserId;
    }

    /**
     * @param int $advertiserId
     * @return self
     */
    public function setAdvertiserId(?int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    /**
     * @return string
     */
    public function getAnchorId(): ?string
    {
        return $this->anchorId;
    }

    /**
     * @param string $anchorId
     * @return self
     */
    public function setAnchorId(?string $anchorId): self
    {
        $this->anchorId = $anchorId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\NativeAnchorGetDetailV30DataListAnchorType
     */
    public function getAnchorType(): ?string
    {
        return $this->anchorType;
    }

    /**
     * @param \Oceanengine\Models\NativeAnchorGetDetailV30DataListAnchorType $anchorType
     * @return self
     */
    public function setAnchorType(?string $anchorType): self
    {
        $this->anchorType = $anchorType;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\NativeAnchorGetDetailV30ResponseDataListInnerAppEcommerceAnchor
     */
    public function getAppEcommerceAnchor(): ?\Oceanengine\Models\NativeAnchorGetDetailV30ResponseDataListInnerAppEcommerceAnchor
    {
        return $this->appEcommerceAnchor;
    }

    /**
     * @param \Oceanengine\Models\NativeAnchorGetDetailV30ResponseDataListInnerAppEcommerceAnchor $appEcommerceAnchor
     * @return self
     */
    public function setAppEcommerceAnchor(?\Oceanengine\Models\NativeAnchorGetDetailV30ResponseDataListInnerAppEcommerceAnchor $appEcommerceAnchor): self
    {
        $this->appEcommerceAnchor = $appEcommerceAnchor;
        return $this;
    }

    /**
     * @return string
     */
    public function getCreateTime(): ?string
    {
        return $this->createTime;
    }

    /**
     * @param string $createTime
     * @return self
     */
    public function setCreateTime(?string $createTime): self
    {
        $this->createTime = $createTime;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\NativeAnchorGetDetailV30ResponseDataListInnerGameAnchor
     */
    public function getGameAnchor(): ?\Oceanengine\Models\NativeAnchorGetDetailV30ResponseDataListInnerGameAnchor
    {
        return $this->gameAnchor;
    }

    /**
     * @param \Oceanengine\Models\NativeAnchorGetDetailV30ResponseDataListInnerGameAnchor $gameAnchor
     * @return self
     */
    public function setGameAnchor(?\Oceanengine\Models\NativeAnchorGetDetailV30ResponseDataListInnerGameAnchor $gameAnchor): self
    {
        $this->gameAnchor = $gameAnchor;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\NativeAnchorGetDetailV30ResponseDataListInnerInsuranceEnterpriseAnchor
     */
    public function getInsuranceEnterpriseAnchor(): ?\Oceanengine\Models\NativeAnchorGetDetailV30ResponseDataListInnerInsuranceEnterpriseAnchor
    {
        return $this->insuranceEnterpriseAnchor;
    }

    /**
     * @param \Oceanengine\Models\NativeAnchorGetDetailV30ResponseDataListInnerInsuranceEnterpriseAnchor $insuranceEnterpriseAnchor
     * @return self
     */
    public function setInsuranceEnterpriseAnchor(?\Oceanengine\Models\NativeAnchorGetDetailV30ResponseDataListInnerInsuranceEnterpriseAnchor $insuranceEnterpriseAnchor): self
    {
        $this->insuranceEnterpriseAnchor = $insuranceEnterpriseAnchor;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\NativeAnchorGetDetailV30ResponseDataListInnerMicroAppAnchor
     */
    public function getMicroAppAnchor(): ?\Oceanengine\Models\NativeAnchorGetDetailV30ResponseDataListInnerMicroAppAnchor
    {
        return $this->microAppAnchor;
    }

    /**
     * @param \Oceanengine\Models\NativeAnchorGetDetailV30ResponseDataListInnerMicroAppAnchor $microAppAnchor
     * @return self
     */
    public function setMicroAppAnchor(?\Oceanengine\Models\NativeAnchorGetDetailV30ResponseDataListInnerMicroAppAnchor $microAppAnchor): self
    {
        $this->microAppAnchor = $microAppAnchor;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\NativeAnchorGetDetailV30ResponseDataListInnerMicroGameAnchor
     */
    public function getMicroGameAnchor(): ?\Oceanengine\Models\NativeAnchorGetDetailV30ResponseDataListInnerMicroGameAnchor
    {
        return $this->microGameAnchor;
    }

    /**
     * @param \Oceanengine\Models\NativeAnchorGetDetailV30ResponseDataListInnerMicroGameAnchor $microGameAnchor
     * @return self
     */
    public function setMicroGameAnchor(?\Oceanengine\Models\NativeAnchorGetDetailV30ResponseDataListInnerMicroGameAnchor $microGameAnchor): self
    {
        $this->microGameAnchor = $microGameAnchor;
        return $this;
    }

    /**
     * @return string
     */
    public function getModifyTime(): ?string
    {
        return $this->modifyTime;
    }

    /**
     * @param string $modifyTime
     * @return self
     */
    public function setModifyTime(?string $modifyTime): self
    {
        $this->modifyTime = $modifyTime;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\NativeAnchorGetDetailV30ResponseDataListInnerNetServiceAnchor
     */
    public function getNetServiceAnchor(): ?\Oceanengine\Models\NativeAnchorGetDetailV30ResponseDataListInnerNetServiceAnchor
    {
        return $this->netServiceAnchor;
    }

    /**
     * @param \Oceanengine\Models\NativeAnchorGetDetailV30ResponseDataListInnerNetServiceAnchor $netServiceAnchor
     * @return self
     */
    public function setNetServiceAnchor(?\Oceanengine\Models\NativeAnchorGetDetailV30ResponseDataListInnerNetServiceAnchor $netServiceAnchor): self
    {
        $this->netServiceAnchor = $netServiceAnchor;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\NativeAnchorGetDetailV30ResponseDataListInnerPrivateChatAnchor
     */
    public function getPrivateChatAnchor(): ?\Oceanengine\Models\NativeAnchorGetDetailV30ResponseDataListInnerPrivateChatAnchor
    {
        return $this->privateChatAnchor;
    }

    /**
     * @param \Oceanengine\Models\NativeAnchorGetDetailV30ResponseDataListInnerPrivateChatAnchor $privateChatAnchor
     * @return self
     */
    public function setPrivateChatAnchor(?\Oceanengine\Models\NativeAnchorGetDetailV30ResponseDataListInnerPrivateChatAnchor $privateChatAnchor): self
    {
        $this->privateChatAnchor = $privateChatAnchor;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\NativeAnchorGetDetailV30ResponseDataListInnerShoppingCartAnchor
     */
    public function getShoppingCartAnchor(): ?\Oceanengine\Models\NativeAnchorGetDetailV30ResponseDataListInnerShoppingCartAnchor
    {
        return $this->shoppingCartAnchor;
    }

    /**
     * @param \Oceanengine\Models\NativeAnchorGetDetailV30ResponseDataListInnerShoppingCartAnchor $shoppingCartAnchor
     * @return self
     */
    public function setShoppingCartAnchor(?\Oceanengine\Models\NativeAnchorGetDetailV30ResponseDataListInnerShoppingCartAnchor $shoppingCartAnchor): self
    {
        $this->shoppingCartAnchor = $shoppingCartAnchor;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\NativeAnchorGetDetailV30DataListSource
     */
    public function getSource(): ?string
    {
        return $this->source;
    }

    /**
     * @param \Oceanengine\Models\NativeAnchorGetDetailV30DataListSource $source
     * @return self
     */
    public function setSource(?string $source): self
    {
        $this->source = $source;
        return $this;
    }

    /**
     * @return string
     */
    public function getToolTitle(): ?string
    {
        return $this->toolTitle;
    }

    /**
     * @param string $toolTitle
     * @return self
     */
    public function setToolTitle(?string $toolTitle): self
    {
        $this->toolTitle = $toolTitle;
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
        if ($this->anchorId !== null) {
            $result['anchor_id'] = $this->anchorId;
        }
        if ($this->anchorType !== null) {
            $result['anchor_type'] = $this->anchorType;
        }
        if ($this->appEcommerceAnchor !== null) {
            $result['app_ecommerce_anchor'] = $this->appEcommerceAnchor;
        }
        if ($this->createTime !== null) {
            $result['create_time'] = $this->createTime;
        }
        if ($this->gameAnchor !== null) {
            $result['game_anchor'] = $this->gameAnchor;
        }
        if ($this->insuranceEnterpriseAnchor !== null) {
            $result['insurance_enterprise_anchor'] = $this->insuranceEnterpriseAnchor;
        }
        if ($this->microAppAnchor !== null) {
            $result['micro_app_anchor'] = $this->microAppAnchor;
        }
        if ($this->microGameAnchor !== null) {
            $result['micro_game_anchor'] = $this->microGameAnchor;
        }
        if ($this->modifyTime !== null) {
            $result['modify_time'] = $this->modifyTime;
        }
        if ($this->netServiceAnchor !== null) {
            $result['net_service_anchor'] = $this->netServiceAnchor;
        }
        if ($this->privateChatAnchor !== null) {
            $result['private_chat_anchor'] = $this->privateChatAnchor;
        }
        if ($this->shoppingCartAnchor !== null) {
            $result['shopping_cart_anchor'] = $this->shoppingCartAnchor;
        }
        if ($this->source !== null) {
            $result['source'] = $this->source;
        }
        if ($this->toolTitle !== null) {
            $result['tool_title'] = $this->toolTitle;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['advertiser_id'] ?? null) !== null) {
            $obj->advertiserId = (int) $v;
        }
        if (($v = $data['anchor_id'] ?? null) !== null) {
            $obj->anchorId = (string) $v;
        }
        if (($v = $data['anchor_type'] ?? null) !== null) {
            $obj->anchorType = (string) $v;
        }
        if (($v = $data['app_ecommerce_anchor'] ?? null) !== null && is_array($v)) {
            $obj->appEcommerceAnchor = \Oceanengine\Models\NativeAnchorGetDetailV30ResponseDataListInnerAppEcommerceAnchor::fromArray($v);
        }
        if (($v = $data['create_time'] ?? null) !== null) {
            $obj->createTime = (string) $v;
        }
        if (($v = $data['game_anchor'] ?? null) !== null && is_array($v)) {
            $obj->gameAnchor = \Oceanengine\Models\NativeAnchorGetDetailV30ResponseDataListInnerGameAnchor::fromArray($v);
        }
        if (($v = $data['insurance_enterprise_anchor'] ?? null) !== null && is_array($v)) {
            $obj->insuranceEnterpriseAnchor = \Oceanengine\Models\NativeAnchorGetDetailV30ResponseDataListInnerInsuranceEnterpriseAnchor::fromArray($v);
        }
        if (($v = $data['micro_app_anchor'] ?? null) !== null && is_array($v)) {
            $obj->microAppAnchor = \Oceanengine\Models\NativeAnchorGetDetailV30ResponseDataListInnerMicroAppAnchor::fromArray($v);
        }
        if (($v = $data['micro_game_anchor'] ?? null) !== null && is_array($v)) {
            $obj->microGameAnchor = \Oceanengine\Models\NativeAnchorGetDetailV30ResponseDataListInnerMicroGameAnchor::fromArray($v);
        }
        if (($v = $data['modify_time'] ?? null) !== null) {
            $obj->modifyTime = (string) $v;
        }
        if (($v = $data['net_service_anchor'] ?? null) !== null && is_array($v)) {
            $obj->netServiceAnchor = \Oceanengine\Models\NativeAnchorGetDetailV30ResponseDataListInnerNetServiceAnchor::fromArray($v);
        }
        if (($v = $data['private_chat_anchor'] ?? null) !== null && is_array($v)) {
            $obj->privateChatAnchor = \Oceanengine\Models\NativeAnchorGetDetailV30ResponseDataListInnerPrivateChatAnchor::fromArray($v);
        }
        if (($v = $data['shopping_cart_anchor'] ?? null) !== null && is_array($v)) {
            $obj->shoppingCartAnchor = \Oceanengine\Models\NativeAnchorGetDetailV30ResponseDataListInnerShoppingCartAnchor::fromArray($v);
        }
        if (($v = $data['source'] ?? null) !== null) {
            $obj->source = (string) $v;
        }
        if (($v = $data['tool_title'] ?? null) !== null) {
            $obj->toolTitle = (string) $v;
        }
        return $obj;
    }
}
