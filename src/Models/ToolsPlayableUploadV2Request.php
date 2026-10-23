<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsPlayableUploadV2Request implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $advertiserId = null;

    /**
     * 试玩素材文件 【格式说明】： 1.格式为zip，大小不超过3M 2.已接入穿山甲JS-SDK，并且调用方式为window.openAppStore(); 3.主html文件需命名为index，且位于一级目录中 4.试玩广告播放方向字段应存储于config.json文件中，位于一级目录中，取值为0,1,2 5.文件名称仅支持大小写字母、数字、减号和下划线 6.素材中不允许使用 mraid.js 格式 7.素材不允许通过外部网络加载动态素材 8.素材中不允许包含JS 重定向 9.素材不允许发出 HTTP 请求 10.素材中不允许存在内容为空的文件
     * @var mixed
     */
    protected $playablePackage = null;

    /**
     * @return int
     */
    public function getAdvertiserId(): ?int
    {
        return $this->advertiserId;
    }

    /**
     * @param int $advertiserId
     * @return self
     */
    public function setAdvertiserId(?int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    /**
     * 试玩素材文件 【格式说明】： 1.格式为zip，大小不超过3M 2.已接入穿山甲JS-SDK，并且调用方式为window.openAppStore(); 3.主html文件需命名为index，且位于一级目录中 4.试玩广告播放方向字段应存储于config.json文件中，位于一级目录中，取值为0,1,2 5.文件名称仅支持大小写字母、数字、减号和下划线 6.素材中不允许使用 mraid.js 格式 7.素材不允许通过外部网络加载动态素材 8.素材中不允许包含JS 重定向 9.素材不允许发出 HTTP 请求 10.素材中不允许存在内容为空的文件
     * @return mixed
     */
    public function getPlayablePackage()
    {
        return $this->playablePackage;
    }

    /**
     * 试玩素材文件 【格式说明】： 1.格式为zip，大小不超过3M 2.已接入穿山甲JS-SDK，并且调用方式为window.openAppStore(); 3.主html文件需命名为index，且位于一级目录中 4.试玩广告播放方向字段应存储于config.json文件中，位于一级目录中，取值为0,1,2 5.文件名称仅支持大小写字母、数字、减号和下划线 6.素材中不允许使用 mraid.js 格式 7.素材不允许通过外部网络加载动态素材 8.素材中不允许包含JS 重定向 9.素材不允许发出 HTTP 请求 10.素材中不允许存在内容为空的文件
     * @param mixed $playablePackage
     * @return self
     */
    public function setPlayablePackage($playablePackage): self
    {
        $this->playablePackage = $playablePackage;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->advertiserId !== null) {
            $result['advertiser_id'] = $this->advertiserId;
        }
        if ($this->playablePackage !== null) {
            $result['playable_package'] = $this->playablePackage;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['advertiser_id'] ?? null) !== null) {
            $obj->advertiserId = (int) $v;
        }
        if (($v = $data['playable_package'] ?? null) !== null) {
            $obj->playablePackage = $v;
        }
        return $obj;
    }
}
