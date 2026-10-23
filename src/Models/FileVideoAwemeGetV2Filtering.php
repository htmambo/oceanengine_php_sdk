<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class FileVideoAwemeGetV2Filtering implements \JsonSerializable
{
    /**
     * 抖音视频链接
     * @var string
     */
    protected ?string $awemeUrl = null;

    /**
     * 抖音视频链接
     * @return string
     */
    public function getAwemeUrl(): ?string
    {
        return $this->awemeUrl;
    }

    /**
     * 抖音视频链接
     * @param string $awemeUrl
     * @return self
     */
    public function setAwemeUrl(?string $awemeUrl): self
    {
        $this->awemeUrl = $awemeUrl;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->awemeUrl !== null) {
            $result['aweme_url'] = $this->awemeUrl;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['aweme_url'] ?? null) !== null) {
            $obj->awemeUrl = (string) $v;
        }
        return $obj;
    }
}
