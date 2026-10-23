<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class NativeAnchorUpdateV30RequestAnchorInfoPrivateChat implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\NativeAnchorUpdateV30AnchorInfoPrivateChatButton
     */
    protected ?string $button = null;

    /**
     * 咨询引导文案，如私信获取一对一解答，不超过9个字
     * @var string
     */
    protected ?string $chatGuide = null;

    /**
     * 工具名称，例如直播间私信咨询/在线咨询等，不超过20个字
     * @var string
     */
    protected ?string $toolsName = null;

    /**
     * @return \Oceanengine\Models\NativeAnchorUpdateV30AnchorInfoPrivateChatButton
     */
    public function getButton(): ?string
    {
        return $this->button;
    }

    /**
     * @param \Oceanengine\Models\NativeAnchorUpdateV30AnchorInfoPrivateChatButton $button
     * @return self
     */
    public function setButton(?string $button): self
    {
        $this->button = $button;
        return $this;
    }

    /**
     * 咨询引导文案，如私信获取一对一解答，不超过9个字
     * @return string
     */
    public function getChatGuide(): ?string
    {
        return $this->chatGuide;
    }

    /**
     * 咨询引导文案，如私信获取一对一解答，不超过9个字
     * @param string $chatGuide
     * @return self
     */
    public function setChatGuide(?string $chatGuide): self
    {
        $this->chatGuide = $chatGuide;
        return $this;
    }

    /**
     * 工具名称，例如直播间私信咨询/在线咨询等，不超过20个字
     * @return string
     */
    public function getToolsName(): ?string
    {
        return $this->toolsName;
    }

    /**
     * 工具名称，例如直播间私信咨询/在线咨询等，不超过20个字
     * @param string $toolsName
     * @return self
     */
    public function setToolsName(?string $toolsName): self
    {
        $this->toolsName = $toolsName;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->button !== null) {
            $result['button'] = $this->button;
        }
        if ($this->chatGuide !== null) {
            $result['chat_guide'] = $this->chatGuide;
        }
        if ($this->toolsName !== null) {
            $result['tools_name'] = $this->toolsName;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['button'] ?? null) !== null) {
            $obj->button = (string) $v;
        }
        if (($v = $data['chat_guide'] ?? null) !== null) {
            $obj->chatGuide = (string) $v;
        }
        if (($v = $data['tools_name'] ?? null) !== null) {
            $obj->toolsName = (string) $v;
        }
        return $obj;
    }
}
