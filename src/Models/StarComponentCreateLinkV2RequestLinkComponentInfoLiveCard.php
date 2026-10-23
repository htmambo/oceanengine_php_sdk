<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarComponentCreateLinkV2RequestLinkComponentInfoLiveCard implements \JsonSerializable
{
    /**
     * 按钮文案
     * @var string
     */
    protected ?string $buttonText = null;

    /**
     * 通过附件上传过的小风车背景Jpg/Jpeg文件 要求224 px* 224px 小于300KB
     * @var string
     */
    protected ?string $name = null;

    /**
     * 按钮文案
     * @return string
     */
    public function getButtonText(): ?string
    {
        return $this->buttonText;
    }

    /**
     * 按钮文案
     * @param string $buttonText
     * @return self
     */
    public function setButtonText(?string $buttonText): self
    {
        $this->buttonText = $buttonText;
        return $this;
    }

    /**
     * 通过附件上传过的小风车背景Jpg/Jpeg文件 要求224 px* 224px 小于300KB
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * 通过附件上传过的小风车背景Jpg/Jpeg文件 要求224 px* 224px 小于300KB
     * @param string $name
     * @return self
     */
    public function setName(?string $name): self
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->buttonText !== null) {
            $result['button_text'] = $this->buttonText;
        }
        if ($this->name !== null) {
            $result['name'] = $this->name;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['button_text'] ?? null) !== null) {
            $obj->buttonText = (string) $v;
        }
        if (($v = $data['name'] ?? null) !== null) {
            $obj->name = (string) $v;
        }
        return $obj;
    }
}
