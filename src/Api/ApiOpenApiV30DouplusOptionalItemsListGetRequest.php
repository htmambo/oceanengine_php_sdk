<?php

/**
 * 本文件由 go2php 生成，源: api_douplus_optional_items_list_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 获取DOU+可投视频列表
 */
class ApiOpenApiV30DouplusOptionalItemsListGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?string $awemeSecUid = null;
    /** @var string 投放目的，将返回对应投放目的下的可投视频清单 1. LIKE_COMMENT_AMOUNT 点赞评论量 2. FOLLOWER_COUNT 粉丝量 3. VIDEO_PLAYBACK_VOLUME 视频播放量 4. DY_PRIVATE_MESSAGES 抖音私信 5. HIGH_INTERACTION_QUALITY 互动质量高 6. HIGH_INTERACTION_FREQUENCY 互动数量多 7. ONLY_FOR_ACTIVATION 激活 8. COMMENT_LINK_CLICK 评论链接点击 9. LIVE_ROOM_POPULARITY 直播间人气 10. LIVE_ROOM_FOLLOWER_INCREASE 直播间涨粉 11. VIEWER_DONATION 观众打赏 12. VIEWER_INTERACTION 观众互动 */
    private ?string $externalAction = null;
    /** @var string 需要拉取视频的抖音号id */
    private ?string $awemeId = null;
    /** @var int 单页拉取视频数 允许值：1- 20 */
    private ?int $count = null;
    /** @var int 游标，翻页使用 最小值：0 翻页使用，第一页传0，第二页开始，需要传前一页resp返回的cursor */
    private ?int $cursor = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(DouplusOptionalItemsListV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function awemeSecUid(string $awemeSecUid): self
    {
        $this->awemeSecUid = $awemeSecUid;
        return $this;
    }

    /**
     * 投放目的，将返回对应投放目的下的可投视频清单 1. LIKE_COMMENT_AMOUNT 点赞评论量 2. FOLLOWER_COUNT 粉丝量 3. VIDEO_PLAYBACK_VOLUME 视频播放量 4. DY_PRIVATE_MESSAGES 抖音私信 5. HIGH_INTERACTION_QUALITY 互动质量高 6. HIGH_INTERACTION_FREQUENCY 互动数量多 7. ONLY_FOR_ACTIVATION 激活 8. COMMENT_LINK_CLICK 评论链接点击 9. LIVE_ROOM_POPULARITY 直播间人气 10. LIVE_ROOM_FOLLOWER_INCREASE 直播间涨粉 11. VIEWER_DONATION 观众打赏 12. VIEWER_INTERACTION 观众互动
     */
    public function externalAction(string $externalAction): self
    {
        $this->externalAction = $externalAction;
        return $this;
    }

    /**
     * 需要拉取视频的抖音号id
     */
    public function awemeId(string $awemeId): self
    {
        $this->awemeId = $awemeId;
        return $this;
    }

    /**
     * 单页拉取视频数 允许值：1- 20
     */
    public function count(int $count): self
    {
        $this->count = $count;
        return $this;
    }

    /**
     * 游标，翻页使用 最小值：0 翻页使用，第一页传0，第二页开始，需要传前一页resp返回的cursor
     */
    public function cursor(int $cursor): self
    {
        $this->cursor = $cursor;
        return $this;
    }

    public function accessToken(string $accessToken): self
    {
        $this->accessToken = $accessToken;
        return $this;
    }

    public function withLog(bool $enable): self
    {
        $this->logEnabled = $enable;
        return $this;
    }

    /**
     * @throws \InvalidArgumentException
     * 获取DOU+可投视频列表
     */
    public function execute(): \Oceanengine\Models\DouplusOptionalItemsListV30Response
    {
        if ($this->awemeSecUid === null) {
            throw new \InvalidArgumentException('awemeSecUid is required and must be specified');
        }
        if ($this->externalAction === null) {
            throw new \InvalidArgumentException('externalAction is required and must be specified');
        }
        if ($this->awemeId === null) {
            throw new \InvalidArgumentException('awemeId is required and must be specified');
        }
        if ($this->count === null) {
            throw new \InvalidArgumentException('count is required and must be specified');
        }
        if ($this->count < 1) {
            throw new \InvalidArgumentException('count must be greater than 1');
        }
        if ($this->count > 20) {
            throw new \InvalidArgumentException('count must be less than 20');
        }
        if ($this->cursor === null) {
            throw new \InvalidArgumentException('cursor is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['aweme_sec_uid'] = $this->awemeSecUid;
        $queryParams['external_action'] = $this->externalAction;
        $queryParams['aweme_id'] = $this->awemeId;
        $queryParams['count'] = $this->count;
        $queryParams['cursor'] = $this->cursor;
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/douplus/optional_items/list/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\DouplusOptionalItemsListV30Response::class);

        return $result['model'];
    }
}
