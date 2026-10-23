<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class NativeAnchorGetDetailV30ResponseDataListInnerPrivateChatAnchor implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\NativeAnchorGetDetailV30DataListPrivateChatAnchorButton
     */
    protected ?string $button = null;

    /**
     * @var string
     */
    protected ?string $chatGuide = null;

    /**
     * @return \Oceanengine\Models\NativeAnchorGetDetailV30DataListPrivateChatAnchorButton
     */
    public function getButton(): ?string
    {
        return $this->button;
    }

    /**
     * @param \Oceanengine\Models\NativeAnchorGetDetailV30DataListPrivateChatAnchorButton $button
     * @return self
     */
    public function setButton(?string $button): self
    {
        $this->button = $button;
        return $this;
    }

    /**
     * @return string
     */
    public function getChatGuide(): ?string
    {
        return $this->chatGuide;
    }

    /**
     * @param string $chatGuide
     * @return self
     */
    public function setChatGuide(?string $chatGuide): self
    {
        $this->chatGuide = $chatGuide;
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
        return $obj;
    }
}
