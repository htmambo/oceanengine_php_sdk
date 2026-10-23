<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class DpaAlbumCreateV30RequestVideoMetaMicoInner implements \JsonSerializable
{
    /**
     * 集序号
     * @var int
     */
    protected ?int $seq = null;

    /**
     * 集名称
     * @var string
     */
    protected ?string $title = null;

    /**
     * 视频url，需要带有文件扩展名， 示例：https://xxxx.com/ xxxxx.mp4，目前视频只支持mp4 avi mov m3u8格式
     * @var string
     */
    protected ?string $url = null;

    /**
     * 集序号
     * @return int
     */
    public function getSeq(): ?int
    {
        return $this->seq;
    }

    /**
     * 集序号
     * @param int $seq
     * @return self
     */
    public function setSeq(?int $seq): self
    {
        $this->seq = $seq;
        return $this;
    }

    /**
     * 集名称
     * @return string
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }

    /**
     * 集名称
     * @param string $title
     * @return self
     */
    public function setTitle(?string $title): self
    {
        $this->title = $title;
        return $this;
    }

    /**
     * 视频url，需要带有文件扩展名， 示例：https://xxxx.com/ xxxxx.mp4，目前视频只支持mp4 avi mov m3u8格式
     * @return string
     */
    public function getUrl(): ?string
    {
        return $this->url;
    }

    /**
     * 视频url，需要带有文件扩展名， 示例：https://xxxx.com/ xxxxx.mp4，目前视频只支持mp4 avi mov m3u8格式
     * @param string $url
     * @return self
     */
    public function setUrl(?string $url): self
    {
        $this->url = $url;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->seq !== null) {
            $result['seq'] = $this->seq;
        }
        if ($this->title !== null) {
            $result['title'] = $this->title;
        }
        if ($this->url !== null) {
            $result['url'] = $this->url;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['seq'] ?? null) !== null) {
            $obj->seq = (int) $v;
        }
        if (($v = $data['title'] ?? null) !== null) {
            $obj->title = (string) $v;
        }
        if (($v = $data['url'] ?? null) !== null) {
            $obj->url = (string) $v;
        }
        return $obj;
    }
}
