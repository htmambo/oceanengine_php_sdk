<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsSiteCreateV2RequestBricksInnerEventsInnerBehavior implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\ToolsSiteCreateV2RequestBricksInnerEventsInnerBehaviorAndroidLink
     */
    protected ?\Oceanengine\Models\ToolsSiteCreateV2RequestBricksInnerEventsInnerBehaviorAndroidLink $androidLink = null;

    /**
     * @var \Oceanengine\Models\ToolsSiteCreateV2RequestBricksInnerEventsInnerBehaviorIosLink
     */
    protected ?\Oceanengine\Models\ToolsSiteCreateV2RequestBricksInnerEventsInnerBehaviorIosLink $iosLink = null;

    /**
     * @var \Oceanengine\Models\ToolsSiteCreateV2RequestBricksInnerEventsInnerBehaviorLink
     */
    protected ?\Oceanengine\Models\ToolsSiteCreateV2RequestBricksInnerEventsInnerBehaviorLink $link = null;

    /**
     * @var string
     */
    protected ?string $name = null;

    /**
     * @var \Oceanengine\Models\ToolsSiteCreateV2RequestBricksInnerEventsInnerBehaviorSmartPhone
     */
    protected ?\Oceanengine\Models\ToolsSiteCreateV2RequestBricksInnerEventsInnerBehaviorSmartPhone $smartPhone = null;

    /**
     * @return \Oceanengine\Models\ToolsSiteCreateV2RequestBricksInnerEventsInnerBehaviorAndroidLink
     */
    public function getAndroidLink(): ?\Oceanengine\Models\ToolsSiteCreateV2RequestBricksInnerEventsInnerBehaviorAndroidLink
    {
        return $this->androidLink;
    }

    /**
     * @param \Oceanengine\Models\ToolsSiteCreateV2RequestBricksInnerEventsInnerBehaviorAndroidLink $androidLink
     * @return self
     */
    public function setAndroidLink(?\Oceanengine\Models\ToolsSiteCreateV2RequestBricksInnerEventsInnerBehaviorAndroidLink $androidLink): self
    {
        $this->androidLink = $androidLink;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsSiteCreateV2RequestBricksInnerEventsInnerBehaviorIosLink
     */
    public function getIosLink(): ?\Oceanengine\Models\ToolsSiteCreateV2RequestBricksInnerEventsInnerBehaviorIosLink
    {
        return $this->iosLink;
    }

    /**
     * @param \Oceanengine\Models\ToolsSiteCreateV2RequestBricksInnerEventsInnerBehaviorIosLink $iosLink
     * @return self
     */
    public function setIosLink(?\Oceanengine\Models\ToolsSiteCreateV2RequestBricksInnerEventsInnerBehaviorIosLink $iosLink): self
    {
        $this->iosLink = $iosLink;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsSiteCreateV2RequestBricksInnerEventsInnerBehaviorLink
     */
    public function getLink(): ?\Oceanengine\Models\ToolsSiteCreateV2RequestBricksInnerEventsInnerBehaviorLink
    {
        return $this->link;
    }

    /**
     * @param \Oceanengine\Models\ToolsSiteCreateV2RequestBricksInnerEventsInnerBehaviorLink $link
     * @return self
     */
    public function setLink(?\Oceanengine\Models\ToolsSiteCreateV2RequestBricksInnerEventsInnerBehaviorLink $link): self
    {
        $this->link = $link;
        return $this;
    }

    /**
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return self
     */
    public function setName(?string $name): self
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsSiteCreateV2RequestBricksInnerEventsInnerBehaviorSmartPhone
     */
    public function getSmartPhone(): ?\Oceanengine\Models\ToolsSiteCreateV2RequestBricksInnerEventsInnerBehaviorSmartPhone
    {
        return $this->smartPhone;
    }

    /**
     * @param \Oceanengine\Models\ToolsSiteCreateV2RequestBricksInnerEventsInnerBehaviorSmartPhone $smartPhone
     * @return self
     */
    public function setSmartPhone(?\Oceanengine\Models\ToolsSiteCreateV2RequestBricksInnerEventsInnerBehaviorSmartPhone $smartPhone): self
    {
        $this->smartPhone = $smartPhone;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->androidLink !== null) {
            $result['android_link'] = $this->androidLink;
        }
        if ($this->iosLink !== null) {
            $result['ios_link'] = $this->iosLink;
        }
        if ($this->link !== null) {
            $result['link'] = $this->link;
        }
        if ($this->name !== null) {
            $result['name'] = $this->name;
        }
        if ($this->smartPhone !== null) {
            $result['smart_phone'] = $this->smartPhone;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['android_link'] ?? null) !== null && is_array($v)) {
            $obj->androidLink = \Oceanengine\Models\ToolsSiteCreateV2RequestBricksInnerEventsInnerBehaviorAndroidLink::fromArray($v);
        }
        if (($v = $data['ios_link'] ?? null) !== null && is_array($v)) {
            $obj->iosLink = \Oceanengine\Models\ToolsSiteCreateV2RequestBricksInnerEventsInnerBehaviorIosLink::fromArray($v);
        }
        if (($v = $data['link'] ?? null) !== null && is_array($v)) {
            $obj->link = \Oceanengine\Models\ToolsSiteCreateV2RequestBricksInnerEventsInnerBehaviorLink::fromArray($v);
        }
        if (($v = $data['name'] ?? null) !== null) {
            $obj->name = (string) $v;
        }
        if (($v = $data['smart_phone'] ?? null) !== null && is_array($v)) {
            $obj->smartPhone = \Oceanengine\Models\ToolsSiteCreateV2RequestBricksInnerEventsInnerBehaviorSmartPhone::fromArray($v);
        }
        return $obj;
    }
}
