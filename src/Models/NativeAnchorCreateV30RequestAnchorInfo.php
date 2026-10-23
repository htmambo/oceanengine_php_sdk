<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class NativeAnchorCreateV30RequestAnchorInfo implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\NativeAnchorCreateV30AnchorInfoAnchorType
     */
    protected ?string $anchorType = null;

    /**
     * @var \Oceanengine\Models\NativeAnchorCreateV30RequestAnchorInfoAppEcommerceAnchor
     */
    protected ?\Oceanengine\Models\NativeAnchorCreateV30RequestAnchorInfoAppEcommerceAnchor $appEcommerceAnchor = null;

    /**
     * @var \Oceanengine\Models\NativeAnchorCreateV30RequestAnchorInfoGameAnchor
     */
    protected ?\Oceanengine\Models\NativeAnchorCreateV30RequestAnchorInfoGameAnchor $gameAnchor = null;

    /**
     * @var \Oceanengine\Models\NativeAnchorCreateV30RequestAnchorInfoNetServiceAnchor
     */
    protected ?\Oceanengine\Models\NativeAnchorCreateV30RequestAnchorInfoNetServiceAnchor $netServiceAnchor = null;

    /**
     * @var \Oceanengine\Models\NativeAnchorCreateV30RequestAnchorInfoPrivateChat
     */
    protected ?\Oceanengine\Models\NativeAnchorCreateV30RequestAnchorInfoPrivateChat $privateChat = null;

    /**
     * @var \Oceanengine\Models\NativeAnchorCreateV30RequestAnchorInfoShoppingCartAnchor
     */
    protected ?\Oceanengine\Models\NativeAnchorCreateV30RequestAnchorInfoShoppingCartAnchor $shoppingCartAnchor = null;

    /**
     * 锚点工具名称（内部管理展示）
     * @var string
     */
    protected ?string $toolTitle = null;

    /**
     * @return \Oceanengine\Models\NativeAnchorCreateV30AnchorInfoAnchorType
     */
    public function getAnchorType(): ?string
    {
        return $this->anchorType;
    }

    /**
     * @param \Oceanengine\Models\NativeAnchorCreateV30AnchorInfoAnchorType $anchorType
     * @return self
     */
    public function setAnchorType(?string $anchorType): self
    {
        $this->anchorType = $anchorType;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\NativeAnchorCreateV30RequestAnchorInfoAppEcommerceAnchor
     */
    public function getAppEcommerceAnchor(): ?\Oceanengine\Models\NativeAnchorCreateV30RequestAnchorInfoAppEcommerceAnchor
    {
        return $this->appEcommerceAnchor;
    }

    /**
     * @param \Oceanengine\Models\NativeAnchorCreateV30RequestAnchorInfoAppEcommerceAnchor $appEcommerceAnchor
     * @return self
     */
    public function setAppEcommerceAnchor(?\Oceanengine\Models\NativeAnchorCreateV30RequestAnchorInfoAppEcommerceAnchor $appEcommerceAnchor): self
    {
        $this->appEcommerceAnchor = $appEcommerceAnchor;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\NativeAnchorCreateV30RequestAnchorInfoGameAnchor
     */
    public function getGameAnchor(): ?\Oceanengine\Models\NativeAnchorCreateV30RequestAnchorInfoGameAnchor
    {
        return $this->gameAnchor;
    }

    /**
     * @param \Oceanengine\Models\NativeAnchorCreateV30RequestAnchorInfoGameAnchor $gameAnchor
     * @return self
     */
    public function setGameAnchor(?\Oceanengine\Models\NativeAnchorCreateV30RequestAnchorInfoGameAnchor $gameAnchor): self
    {
        $this->gameAnchor = $gameAnchor;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\NativeAnchorCreateV30RequestAnchorInfoNetServiceAnchor
     */
    public function getNetServiceAnchor(): ?\Oceanengine\Models\NativeAnchorCreateV30RequestAnchorInfoNetServiceAnchor
    {
        return $this->netServiceAnchor;
    }

    /**
     * @param \Oceanengine\Models\NativeAnchorCreateV30RequestAnchorInfoNetServiceAnchor $netServiceAnchor
     * @return self
     */
    public function setNetServiceAnchor(?\Oceanengine\Models\NativeAnchorCreateV30RequestAnchorInfoNetServiceAnchor $netServiceAnchor): self
    {
        $this->netServiceAnchor = $netServiceAnchor;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\NativeAnchorCreateV30RequestAnchorInfoPrivateChat
     */
    public function getPrivateChat(): ?\Oceanengine\Models\NativeAnchorCreateV30RequestAnchorInfoPrivateChat
    {
        return $this->privateChat;
    }

    /**
     * @param \Oceanengine\Models\NativeAnchorCreateV30RequestAnchorInfoPrivateChat $privateChat
     * @return self
     */
    public function setPrivateChat(?\Oceanengine\Models\NativeAnchorCreateV30RequestAnchorInfoPrivateChat $privateChat): self
    {
        $this->privateChat = $privateChat;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\NativeAnchorCreateV30RequestAnchorInfoShoppingCartAnchor
     */
    public function getShoppingCartAnchor(): ?\Oceanengine\Models\NativeAnchorCreateV30RequestAnchorInfoShoppingCartAnchor
    {
        return $this->shoppingCartAnchor;
    }

    /**
     * @param \Oceanengine\Models\NativeAnchorCreateV30RequestAnchorInfoShoppingCartAnchor $shoppingCartAnchor
     * @return self
     */
    public function setShoppingCartAnchor(?\Oceanengine\Models\NativeAnchorCreateV30RequestAnchorInfoShoppingCartAnchor $shoppingCartAnchor): self
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
        if (($v = $data['anchor_type'] ?? null) !== null) {
            $obj->anchorType = (string) $v;
        }
        if (($v = $data['app_ecommerce_anchor'] ?? null) !== null && is_array($v)) {
            $obj->appEcommerceAnchor = \Oceanengine\Models\NativeAnchorCreateV30RequestAnchorInfoAppEcommerceAnchor::fromArray($v);
        }
        if (($v = $data['game_anchor'] ?? null) !== null && is_array($v)) {
            $obj->gameAnchor = \Oceanengine\Models\NativeAnchorCreateV30RequestAnchorInfoGameAnchor::fromArray($v);
        }
        if (($v = $data['net_service_anchor'] ?? null) !== null && is_array($v)) {
            $obj->netServiceAnchor = \Oceanengine\Models\NativeAnchorCreateV30RequestAnchorInfoNetServiceAnchor::fromArray($v);
        }
        if (($v = $data['private_chat'] ?? null) !== null && is_array($v)) {
            $obj->privateChat = \Oceanengine\Models\NativeAnchorCreateV30RequestAnchorInfoPrivateChat::fromArray($v);
        }
        if (($v = $data['shopping_cart_anchor'] ?? null) !== null && is_array($v)) {
            $obj->shoppingCartAnchor = \Oceanengine\Models\NativeAnchorCreateV30RequestAnchorInfoShoppingCartAnchor::fromArray($v);
        }
        if (($v = $data['tool_title'] ?? null) !== null) {
            $obj->toolTitle = (string) $v;
        }
        return $obj;
    }
}
