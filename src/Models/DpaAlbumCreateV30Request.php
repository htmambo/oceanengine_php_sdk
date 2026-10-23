<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class DpaAlbumCreateV30Request implements \JsonSerializable
{
    /**
     * 短剧标题，请注意命名符合 https://www.volcengine.com/docs/4/1200126 规则
     * @var string
     */
    protected ?string $albumTitle = null;

    /**
     * @var int
     */
    protected ?int $appId = null;

    /**
     * 总集数
     * @var int
     */
    protected ?int $seqNum = null;

    /**
     * @var \Oceanengine\Models\DpaAlbumCreateV30RequestVideoMetaMicoInner[]
     */
    protected ?array $videoMetaMico = null;

    /**
     * 短剧标题，请注意命名符合 https://www.volcengine.com/docs/4/1200126 规则
     * @return string
     */
    public function getAlbumTitle(): ?string
    {
        return $this->albumTitle;
    }

    /**
     * 短剧标题，请注意命名符合 https://www.volcengine.com/docs/4/1200126 规则
     * @param string $albumTitle
     * @return self
     */
    public function setAlbumTitle(?string $albumTitle): self
    {
        $this->albumTitle = $albumTitle;
        return $this;
    }

    /**
     * @return int
     */
    public function getAppId(): ?int
    {
        return $this->appId;
    }

    /**
     * @param int $appId
     * @return self
     */
    public function setAppId(?int $appId): self
    {
        $this->appId = $appId;
        return $this;
    }

    /**
     * 总集数
     * @return int
     */
    public function getSeqNum(): ?int
    {
        return $this->seqNum;
    }

    /**
     * 总集数
     * @param int $seqNum
     * @return self
     */
    public function setSeqNum(?int $seqNum): self
    {
        $this->seqNum = $seqNum;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\DpaAlbumCreateV30RequestVideoMetaMicoInner[]
     */
    public function getVideoMetaMico(): ?array
    {
        return $this->videoMetaMico;
    }

    /**
     * @param \Oceanengine\Models\DpaAlbumCreateV30RequestVideoMetaMicoInner[] $videoMetaMico
     * @return self
     */
    public function setVideoMetaMico(?array $videoMetaMico): self
    {
        $this->videoMetaMico = $videoMetaMico;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->albumTitle !== null) {
            $result['album_title'] = $this->albumTitle;
        }
        if ($this->appId !== null) {
            $result['app_id'] = $this->appId;
        }
        if ($this->seqNum !== null) {
            $result['seq_num'] = $this->seqNum;
        }
        if ($this->videoMetaMico !== null) {
            $result['video_meta_mico'] = $this->videoMetaMico;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['album_title'] ?? null) !== null) {
            $obj->albumTitle = (string) $v;
        }
        if (($v = $data['app_id'] ?? null) !== null) {
            $obj->appId = (int) $v;
        }
        if (($v = $data['seq_num'] ?? null) !== null) {
            $obj->seqNum = (int) $v;
        }
        if (($v = $data['video_meta_mico'] ?? null) !== null && is_array($v)) {
            $obj->videoMetaMico = array_map(fn ($vv) => \Oceanengine\Models\DpaAlbumCreateV30RequestVideoMetaMicoInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
