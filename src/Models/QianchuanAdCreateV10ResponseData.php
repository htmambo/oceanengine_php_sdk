<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanAdCreateV10ResponseData implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $adId = null;

    /**
     * @var \Oceanengine\Models\QianchuanAdCreateV10ResponseDataNoticeInfosInner[]
     */
    protected ?array $noticeInfos = null;

    /**
     * @return int
     */
    public function getAdId(): ?int
    {
        return $this->adId;
    }

    /**
     * @param int $adId
     * @return self
     */
    public function setAdId(?int $adId): self
    {
        $this->adId = $adId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanAdCreateV10ResponseDataNoticeInfosInner[]
     */
    public function getNoticeInfos(): ?array
    {
        return $this->noticeInfos;
    }

    /**
     * @param \Oceanengine\Models\QianchuanAdCreateV10ResponseDataNoticeInfosInner[] $noticeInfos
     * @return self
     */
    public function setNoticeInfos(?array $noticeInfos): self
    {
        $this->noticeInfos = $noticeInfos;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->adId !== null) {
            $result['ad_id'] = $this->adId;
        }
        if ($this->noticeInfos !== null) {
            $result['notice_infos'] = $this->noticeInfos;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['ad_id'] ?? null) !== null) {
            $obj->adId = (int) $v;
        }
        if (($v = $data['notice_infos'] ?? null) !== null && is_array($v)) {
            $obj->noticeInfos = array_map(fn ($vv) => \Oceanengine\Models\QianchuanAdCreateV10ResponseDataNoticeInfosInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
