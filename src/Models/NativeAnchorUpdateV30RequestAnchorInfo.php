<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class NativeAnchorUpdateV30RequestAnchorInfo implements \JsonSerializable
{
    /**
     * 待更新的锚点id
     * @var string
     */
    protected ?string $anchorId = null;

    /**
     * @var \Oceanengine\Models\NativeAnchorUpdateV30AnchorInfoAnchorType
     */
    protected ?string $anchorType = null;

    /**
     * @var \Oceanengine\Models\NativeAnchorUpdateV30RequestAnchorInfoAppEcommerceAnchor
     */
    protected ?\Oceanengine\Models\NativeAnchorUpdateV30RequestAnchorInfoAppEcommerceAnchor $appEcommerceAnchor = null;

    /**
     * @var \Oceanengine\Models\NativeAnchorUpdateV30RequestAnchorInfoGameAnchor
     */
    protected ?\Oceanengine\Models\NativeAnchorUpdateV30RequestAnchorInfoGameAnchor $gameAnchor = null;

    /**
     * @var \Oceanengine\Models\NativeAnchorUpdateV30RequestAnchorInfoNetServiceAnchor
     */
    protected ?\Oceanengine\Models\NativeAnchorUpdateV30RequestAnchorInfoNetServiceAnchor $netServiceAnchor = null;

    /**
     * @var \Oceanengine\Models\NativeAnchorUpdateV30RequestAnchorInfoPrivateChat
     */
    protected ?\Oceanengine\Models\NativeAnchorUpdateV30RequestAnchorInfoPrivateChat $privateChat = null;

    /**
     * @var \Oceanengine\Models\NativeAnchorUpdateV30RequestAnchorInfoShoppingCartAnchor
     */
    protected ?\Oceanengine\Models\NativeAnchorUpdateV30RequestAnchorInfoShoppingCartAnchor $shoppingCartAnchor = null;

    /**
     * 锚点工具名称（内部管理展示）
     * @var string
     */
    protected ?string $toolTitle = null;

    /**
     * 待更新的锚点id
     * @return string
     */
    public function getAnchorId(): ?string
    {
        return $this->anchorId;
    }

    /**
     * 待更新的锚点id
     * @param string $anchorId
     * @return self
     */
    public function setAnchorId(?string $anchorId): self
    {
        $this->anchorId = $anchorId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\NativeAnchorUpdateV30AnchorInfoAnchorType
     */
    public function getAnchorType(): ?string
    {
        return $this->anchorType;
    }

    /**
     * @param \Oceanengine\Models\NativeAnchorUpdateV30AnchorInfoAnchorType $anchorType
     * @return self
     */
    public function setAnchorType(?string $anchorType): self
    {
        $this->anchorType = $anchorType;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\NativeAnchorUpdateV30RequestAnchorInfoAppEcommerceAnchor
     */
    public function getAppEcommerceAnchor(): ?\Oceanengine\Models\NativeAnchorUpdateV30RequestAnchorInfoAppEcommerceAnchor
    {
        return $this->appEcommerceAnchor;
    }

    /**
     * @param \Oceanengine\Models\NativeAnchorUpdateV30RequestAnchorInfoAppEcommerceAnchor $appEcommerceAnchor
     * @return self
     */
    public function setAppEcommerceAnchor(?\Oceanengine\Models\NativeAnchorUpdateV30RequestAnchorInfoAppEcommerceAnchor $appEcommerceAnchor): self
    {
        $this->appEcommerceAnchor = $appEcommerceAnchor;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\NativeAnchorUpdateV30RequestAnchorInfoGameAnchor
     */
    public function getGameAnchor(): ?\Oceanengine\Models\NativeAnchorUpdateV30RequestAnchorInfoGameAnchor
    {
        return $this->gameAnchor;
    }

    /**
     * @param \Oceanengine\Models\NativeAnchorUpdateV30RequestAnchorInfoGameAnchor $gameAnchor
     * @return self
     */
    public function setGameAnchor(?\Oceanengine\Models\NativeAnchorUpdateV30RequestAnchorInfoGameAnchor $gameAnchor): self
    {
        $this->gameAnchor = $gameAnchor;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\NativeAnchorUpdateV30RequestAnchorInfoNetServiceAnchor
     */
    public function getNetServiceAnchor(): ?\Oceanengine\Models\NativeAnchorUpdateV30RequestAnchorInfoNetServiceAnchor
    {
        return $this->netServiceAnchor;
    }

    /**
     * @param \Oceanengine\Models\NativeAnchorUpdateV30RequestAnchorInfoNetServiceAnchor $netServiceAnchor
     * @return self
     */
    public function setNetServiceAnchor(?\Oceanengine\Models\NativeAnchorUpdateV30RequestAnchorInfoNetServiceAnchor $netServiceAnchor): self
    {
        $this->netServiceAnchor = $netServiceAnchor;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\NativeAnchorUpdateV30RequestAnchorInfoPrivateChat
     */
    public function getPrivateChat(): ?\Oceanengine\Models\NativeAnchorUpdateV30RequestAnchorInfoPrivateChat
    {
        return $this->privateChat;
    }

    /**
     * @param \Oceanengine\Models\NativeAnchorUpdateV30RequestAnchorInfoPrivateChat $privateChat
     * @return self
     */
    public function setPrivateChat(?\Oceanengine\Models\NativeAnchorUpdateV30RequestAnchorInfoPrivateChat $privateChat): self
    {
        $this->privateChat = $privateChat;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\NativeAnchorUpdateV30RequestAnchorInfoShoppingCartAnchor
     */
    public function getShoppingCartAnchor(): ?\Oceanengine\Models\NativeAnchorUpdateV30RequestAnchorInfoShoppingCartAnchor
    {
        return $this->shoppingCartAnchor;
    }

    /**
     * @param \Oceanengine\Models\NativeAnchorUpdateV30RequestAnchorInfoShoppingCartAnchor $shoppingCartAnchor
     * @return self
     */
    public function setShoppingCartAnchor(?\Oceanengine\Models\NativeAnchorUpdateV30RequestAnchorInfoShoppingCartAnchor $shoppingCartAnchor): self
    {
        $this->shoppingCartAnchor = $shoppingCartAnchor;
        return $this;
    }

    /**
     * 锚点工具名称（内部管理展示）
     * @return string
     */
    public function getToolTitle(): ?string
    {
        return $this->toolTitle;
    }

    /**
     * 锚点工具名称（内部管理展示）
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
        if ($this->anchorId !== null) {
            $result['anchor_id'] = $this->anchorId;
        }
        if ($this->anchorType !== null) {
            $result['anchor_type'] = $this->anchorType;
        }
        if ($this->appEcommerceAnchor !== null) {
            $result['app_ecommerce_anchor'] = $this->appEcommerceAnchor;
        }
        if ($this->gameAnchor !== null) {
            $result['game_anchor'] = $this->gameAnchor;
        }
        if ($this->netServiceAnchor !== null) {
            $result['net_service_anchor'] = $this->netServiceAnchor;
        }
        if ($this->privateChat !== null) {
            $result['private_chat'] = $this->privateChat;
        }
        if ($this->shoppingCartAnchor !== null) {
            $result['shopping_cart_anchor'] = $this->shoppingCartAnchor;
        }
        if ($this->toolTitle !== null) {
            $result['tool_title'] = $this->toolTitle;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['anchor_id'] ?? null) !== null) {
            $obj->anchorId = (string) $v;
        }
        if (($v = $data['anchor_type'] ?? null) !== null) {
            $obj->anchorType = (string) $v;
        }
        if (($v = $data['app_ecommerce_anchor'] ?? null) !== null && is_array($v)) {
            $obj->appEcommerceAnchor = \Oceanengine\Models\NativeAnchorUpdateV30RequestAnchorInfoAppEcommerceAnchor::fromArray($v);
        }
        if (($v = $data['game_anchor'] ?? null) !== null && is_array($v)) {
            $obj->gameAnchor = \Oceanengine\Models\NativeAnchorUpdateV30RequestAnchorInfoGameAnchor::fromArray($v);
        }
        if (($v = $data['net_service_anchor'] ?? null) !== null && is_array($v)) {
            $obj->netServiceAnchor = \Oceanengine\Models\NativeAnchorUpdateV30RequestAnchorInfoNetServiceAnchor::fromArray($v);
        }
        if (($v = $data['private_chat'] ?? null) !== null && is_array($v)) {
            $obj->privateChat = \Oceanengine\Models\NativeAnchorUpdateV30RequestAnchorInfoPrivateChat::fromArray($v);
        }
        if (($v = $data['shopping_cart_anchor'] ?? null) !== null && is_array($v)) {
            $obj->shoppingCartAnchor = \Oceanengine\Models\NativeAnchorUpdateV30RequestAnchorInfoShoppingCartAnchor::fromArray($v);
        }
        if (($v = $data['tool_title'] ?? null) !== null) {
            $obj->toolTitle = (string) $v;
        }
        return $obj;
    }
}
