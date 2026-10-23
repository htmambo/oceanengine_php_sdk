<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ReportAdGetV2DataListExternalAction
{
    public const AD_CONVERT_TYPE_DIALBACK_CONNECT_ReportAdGetV2DataListExternalAction = 'AD_CONVERT_TYPE_DIALBACK_CONNECT';
    public const AD_CONVERT_TYPE_OTO_STAY_TIME_ReportAdGetV2DataListExternalAction = 'AD_CONVERT_TYPE_OTO_STAY_TIME';
    public const AD_CONVERT_TYPE_FOLLOW_LIVE_ENTER_ReportAdGetV2DataListExternalAction = 'AD_CONVERT_TYPE_FOLLOW_LIVE_ENTER';
    public const AD_CONVERT_TYPE_CLUE_CONFIRM_ReportAdGetV2DataListExternalAction = 'AD_CONVERT_TYPE_CLUE_CONFIRM';
    public const AD_CONVERT_TYPE_SHOPPING_CART_ReportAdGetV2DataListExternalAction = 'AD_CONVERT_TYPE_SHOPPING_CART';
    public const AD_CONVERT_TYPE_RETENTION_7_D_ReportAdGetV2DataListExternalAction = 'AD_CONVERT_TYPE_RETENTION_7D';
    public const AD_CONVERT_TYPE_INAPP_NEXT_DAY_OPEN_ReportAdGetV2DataListExternalAction = 'AD_CONVERT_TYPE_INAPP_NEXT_DAY_OPEN';
    public const AD_CONVERT_TYPE_XPATH_ReportAdGetV2DataListExternalAction = 'AD_CONVERT_TYPE_XPATH';
    public const AD_CONVERT_TYPE_OTHER_ReportAdGetV2DataListExternalAction = 'AD_CONVERT_TYPE_OTHER';
    public const AD_CONVERT_TYPE_LIVE_CLICK_PRODUCT_ACTION_ReportAdGetV2DataListExternalAction = 'AD_CONVERT_TYPE_LIVE_CLICK_PRODUCT_ACTION';
    public const AD_CONVERT_TYPE_LINK_ACTION_ReportAdGetV2DataListExternalAction = 'AD_CONVERT_TYPE_LINK_ACTION';
    public const AD_CONVERT_TYPE_QC_FOLLOW_ACTION_ReportAdGetV2DataListExternalAction = 'AD_CONVERT_TYPE_QC_FOLLOW_ACTION';
    public const AD_CONVERT_TYPE_ANCHOR_CLICK_ReportAdGetV2DataListExternalAction = 'AD_CONVERT_TYPE_ANCHOR_CLICK';
    public const AD_CONVERT_TYPE_SHOPPING_ReportAdGetV2DataListExternalAction = 'AD_CONVERT_TYPE_SHOPPING';
    public const AD_CONVERT_TYPE_CLUE_PAY_SUCCEED_ReportAdGetV2DataListExternalAction = 'AD_CONVERT_TYPE_CLUE_PAY_SUCCEED';
    public const AD_CONVERT_TYPE_IPU_QUALIFY_ReportAdGetV2DataListExternalAction = 'AD_CONVERT_TYPE_IPU_QUALIFY';
    public const AD_CONVERT_TYPE_LIVE_SUCCESSORDER_ACTION_ReportAdGetV2DataListExternalAction = 'AD_CONVERT_TYPE_LIVE_SUCCESSORDER_ACTION';
    public const AD_CONVERT_TYPE_LT_ROI_ReportAdGetV2DataListExternalAction = 'AD_CONVERT_TYPE_LT_ROI';
    public const AD_CONVERT_TYPE_LIVE_FANS_ACTION_ReportAdGetV2DataListExternalAction = 'AD_CONVERT_TYPE_LIVE_FANS_ACTION';
    public const AD_CONVERT_TYPE_FORM_ReportAdGetV2DataListExternalAction = 'AD_CONVERT_TYPE_FORM';
    public const AD_CONVERT_TYPE_FORM_DEEP_ReportAdGetV2DataListExternalAction = 'AD_CONVERT_TYPE_FORM_DEEP';
    public const AD_CONVERT_TYPE_MULTIPLE_ReportAdGetV2DataListExternalAction = 'AD_CONVERT_TYPE_MULTIPLE';
    public const AD_CONVERT_TYPE_ACTIVE_REGISTER_ReportAdGetV2DataListExternalAction = 'AD_CONVERT_TYPE_ACTIVE_REGISTER';
    public const AD_CONVERT_TYPE_PAID_CLUE_ReportAdGetV2DataListExternalAction = 'AD_CONVERT_TYPE_PAID_CLUE';
    public const AD_CONVERT_TYPE_FEED_LIVE_HOMEPAGE_ReportAdGetV2DataListExternalAction = 'AD_CONVERT_TYPE_FEED_LIVE_HOMEPAGE';
    public const AD_CONVERT_TYPE_PHONE_CONFIRM_ReportAdGetV2DataListExternalAction = 'AD_CONVERT_TYPE_PHONE_CONFIRM';
    public const AD_CONVERT_TYPE_BOOST_ReportAdGetV2DataListExternalAction = 'AD_CONVERT_TYPE_BOOST';
    public const AD_CONVERT_TYPE_HIGH_VALUE_CLUE_ReportAdGetV2DataListExternalAction = 'AD_CONVERT_TYPE_HIGH_VALUE_CLUE';
    public const AD_CONVERT_TYPE_CLICK_DOWNLOAD_ReportAdGetV2DataListExternalAction = 'AD_CONVERT_TYPE_CLICK_DOWNLOAD';
    public const AD_CONVERT_TYPE_APPLET_CLICK_ReportAdGetV2DataListExternalAction = 'AD_CONVERT_TYPE_APPLET_CLICK';
    public const AD_CONVERT_TYPE_FORM_ANSWER_ReportAdGetV2DataListExternalAction = 'AD_CONVERT_TYPE_FORM_ANSWER';
    public const AD_CONVERT_TYPE_PERSONAL_INFORMATION_ReportAdGetV2DataListExternalAction = 'AD_CONVERT_TYPE_PERSONAL_INFORMATION';
    public const AD_CONVERT_TYPE_CONSULT_CLUE_ReportAdGetV2DataListExternalAction = 'AD_CONVERT_TYPE_CONSULT_CLUE';
    public const AD_CONVERT_TYPE_GAME_ADDICTION_ReportAdGetV2DataListExternalAction = 'AD_CONVERT_TYPE_GAME_ADDICTION';
    public const AD_CONVERT_TYPE_PREMIUM_UPGEADE_ReportAdGetV2DataListExternalAction = 'AD_CONVERT_TYPE_PREMIUM_UPGEADE';
    public const AD_CONVERT_TYPE_RETENTION_DAYS_ReportAdGetV2DataListExternalAction = 'AD_CONVERT_TYPE_RETENTION_DAYS';
    public const AD_CONVERT_TYPE_NOTIFY_DOWNLOAD_ReportAdGetV2DataListExternalAction = 'AD_CONVERT_TYPE_NOTIFY_DOWNLOAD';
    public const AD_CONVERT_TYPE_FOLLOW_ACTION_ReportAdGetV2DataListExternalAction = 'AD_CONVERT_TYPE_FOLLOW_ACTION';
    public const AD_CONVERT_TYPE_BUTTON_ReportAdGetV2DataListExternalAction = 'AD_CONVERT_TYPE_BUTTON';
    public const AD_CONVERT_TYPE_CREATE_GAMEROLE_ReportAdGetV2DataListExternalAction = 'AD_CONVERT_TYPE_CREATE_GAMEROLE';
    public const AD_CONVERT_TYPE_LOAN_ReportAdGetV2DataListExternalAction = 'AD_CONVERT_TYPE_LOAN';
    public const AD_CONVERT_TYPE_LIVE_APPOINTMENT_ReportAdGetV2DataListExternalAction = 'AD_CONVERT_TYPE_LIVE_APPOINTMENT';
    public const AD_CONVERT_TYPE_CLASS_ReportAdGetV2DataListExternalAction = 'AD_CONVERT_TYPE_CLASS';
    public const AD_CONVERT_TYPE_PHONE_CONNECT_ReportAdGetV2DataListExternalAction = 'AD_CONVERT_TYPE_PHONE_CONNECT';
    public const AD_CONVERT_TYPE_PREMIUM_ROI_ReportAdGetV2DataListExternalAction = 'AD_CONVERT_TYPE_PREMIUM_ROI';
    public const AD_CONVERT_TYPE_APP_ORDER_ReportAdGetV2DataListExternalAction = 'AD_CONVERT_TYPE_APP_ORDER';
    public const AD_CONVERT_TYPE_NATIVE_ACTION_ReportAdGetV2DataListExternalAction = 'AD_CONVERT_TYPE_NATIVE_ACTION';
    public const AD_CONVERT_TYPE_WECHAT_REGISTER_ReportAdGetV2DataListExternalAction = 'AD_CONVERT_TYPE_WECHAT_REGISTER';
    public const AD_CONVERT_TYPE_RESERVATION_ReportAdGetV2DataListExternalAction = 'AD_CONVERT_TYPE_RESERVATION';
    public const AD_CONVERT_TYPE_LIVE_SUCCESSORDER_PAY_ReportAdGetV2DataListExternalAction = 'AD_CONVERT_TYPE_LIVE_SUCCESSORDER_PAY';
    public const AD_CONVERT_TYPE_LIVE_HOMEPAGE_ReportAdGetV2DataListExternalAction = 'AD_CONVERT_TYPE_LIVE_HOMEPAGE';
    public const AD_CONVERT_TYPE_QQ_ReportAdGetV2DataListExternalAction = 'AD_CONVERT_TYPE_QQ';
    public const AD_CONVERT_TYPE_MESSAGE_INTERACTION_ReportAdGetV2DataListExternalAction = 'AD_CONVERT_TYPE_MESSAGE_INTERACTION';
    public const AD_CONVERT_TYPE_DIALBACK_ReportAdGetV2DataListExternalAction = 'AD_CONVERT_TYPE_DIALBACK';
    public const AD_CONVERT_TYPE_POI_MULTIPLE_ReportAdGetV2DataListExternalAction = 'AD_CONVERT_TYPE_POI_MULTIPLE';
    public const AD_CONVERT_TYPE_SHOPPING_ACTION_ReportAdGetV2DataListExternalAction = 'AD_CONVERT_TYPE_SHOPPING_ACTION';
    public const AD_CONVERT_TYPE_LOCATION_ACTION_ReportAdGetV2DataListExternalAction = 'AD_CONVERT_TYPE_LOCATION_ACTION';
    public const AD_CONVERT_TYPE_FOLLOW_VIDEO_PLAY_FINISH_ReportAdGetV2DataListExternalAction = 'AD_CONVERT_TYPE_FOLLOW_VIDEO_PLAY_FINISH';
    public const AD_CONVERT_TYPE_CONSULT_ReportAdGetV2DataListExternalAction = 'AD_CONVERT_TYPE_CONSULT';
    public const AD_CONVERT_TYPE_DEEP_PURCHASE_ReportAdGetV2DataListExternalAction = 'AD_CONVERT_TYPE_DEEP_PURCHASE';
    public const AD_CONVERT_TYPE_PURCHASE_OF_GOODS_ReportAdGetV2DataListExternalAction = 'AD_CONVERT_TYPE_PURCHASE_OF_GOODS';
    public const AD_CONVERT_TYPE_INVALID_CLUE_ReportAdGetV2DataListExternalAction = 'AD_CONVERT_TYPE_INVALID_CLUE';
    public const AD_CONVERT_TYPE_WECHAT_USER_FIRST_MESSAGE_ReportAdGetV2DataListExternalAction = 'AD_CONVERT_TYPE_WECHAT_USER_FIRST_MESSAGE';
    public const AD_CONVERT_TYPE_LIVE_OTO_PAY_ReportAdGetV2DataListExternalAction = 'AD_CONVERT_TYPE_LIVE_OTO_PAY';
    public const AD_CONVERT_TYPE_INSTALL_FINISH_ReportAdGetV2DataListExternalAction = 'AD_CONVERT_TYPE_INSTALL_FINISH';
    public const AD_CONVERT_TYPE_MESSAGE_CLICK_ReportAdGetV2DataListExternalAction = 'AD_CONVERT_TYPE_MESSAGE_CLICK';
    public const AD_CONVERT_TYPE_UPDATE_LEVEL_ReportAdGetV2DataListExternalAction = 'AD_CONVERT_TYPE_UPDATE_LEVEL';
    public const AD_CONVERT_TYPE_LIVE_COMMENT_ACTION_ReportAdGetV2DataListExternalAction = 'AD_CONVERT_TYPE_LIVE_COMMENT_ACTION';
    public const AD_CONVERT_TYPE_WECHAT_PAY_ReportAdGetV2DataListExternalAction = 'AD_CONVERT_TYPE_WECHAT_PAY';
    public const AD_CONVERT_TYPE_QC_MUST_BUY_ReportAdGetV2DataListExternalAction = 'AD_CONVERT_TYPE_QC_MUST_BUY';
    public const AD_CONVERT_TYPE_PRE_LOAN_CREDIT_ReportAdGetV2DataListExternalAction = 'AD_CONVERT_TYPE_PRE_LOAN_CREDIT';
    public const AD_CONVERT_TYPE_BANKCARD_INFORMATION_ReportAdGetV2DataListExternalAction = 'AD_CONVERT_TYPE_BANKCARD_INFORMATION';
    public const AD_CONVERT_TYPE_CLUE_INTERFLOW_ReportAdGetV2DataListExternalAction = 'AD_CONVERT_TYPE_CLUE_INTERFLOW';
    public const AD_CONVERT_TYPE_EFFECTIVE_COPY_ReportAdGetV2DataListExternalAction = 'AD_CONVERT_TYPE_EFFECTIVE_COPY';
    public const AD_CONVERT_TYPE_FORM_CONNECT_ReportAdGetV2DataListExternalAction = 'AD_CONVERT_TYPE_FORM_CONNECT';
    public const AD_CONVERT_TYPE_NEXT_DAY_OPEN_ReportAdGetV2DataListExternalAction = 'AD_CONVERT_TYPE_NEXT_DAY_OPEN';
    public const AD_CONVERT_TYPE_LIVE_SLIDECART_CLICK_ACTION_ReportAdGetV2DataListExternalAction = 'AD_CONVERT_TYPE_LIVE_SLIDECART_CLICK_ACTION';
    public const AD_CONVERT_TYPE_REDIRECT_TO_SHOP_ReportAdGetV2DataListExternalAction = 'AD_CONVERT_TYPE_REDIRECT_TO_SHOP';
    public const AD_CONVERT_TYPE_SALES_LEAD_ReportAdGetV2DataListExternalAction = 'AD_CONVERT_TYPE_SALES_LEAD';
    public const AD_CONVERT_TYPE_CLICK_CALL_DY_ReportAdGetV2DataListExternalAction = 'AD_CONVERT_TYPE_CLICK_CALL_DY';
    public const AD_CONVERT_TYPE_FIRST_CLASS_ReportAdGetV2DataListExternalAction = 'AD_CONVERT_TYPE_FIRST_CLASS';
    public const AD_CONVERT_TYPE_SHARE_ACTION_ReportAdGetV2DataListExternalAction = 'AD_CONVERT_TYPE_SHARE_ACTION';
    public const AD_CONVERT_TYPE_CONSULT_EFFECTIVE_ReportAdGetV2DataListExternalAction = 'AD_CONVERT_TYPE_CONSULT_EFFECTIVE';
    public const AD_CONVERT_TYPE_MAP_SEARCH_ReportAdGetV2DataListExternalAction = 'AD_CONVERT_TYPE_MAP_SEARCH';
    public const AD_CONVERT_TYPE_MESSAGE_ReportAdGetV2DataListExternalAction = 'AD_CONVERT_TYPE_MESSAGE';
    public const AD_CONVERT_TYPE_CLICK_LANDING_PAGE_ReportAdGetV2DataListExternalAction = 'AD_CONVERT_TYPE_CLICK_LANDING_PAGE';
    public const AD_CONVERT_TYPE_LIVE_OTO_CLICK_ReportAdGetV2DataListExternalAction = 'AD_CONVERT_TYPE_LIVE_OTO_CLICK';
    public const AD_CONVERT_TYPE_PHONE_EFFECTIVE_ReportAdGetV2DataListExternalAction = 'AD_CONVERT_TYPE_PHONE_EFFECTIVE';
    public const AD_CONVERT_TYPE_NEW_FOLLOW_ACTION_ReportAdGetV2DataListExternalAction = 'AD_CONVERT_TYPE_NEW_FOLLOW_ACTION';
    public const AD_CONVERT_TYPE_CUSTOMER_EFFECTIVE_ReportAdGetV2DataListExternalAction = 'AD_CONVERT_TYPE_CUSTOMER_EFFECTIVE';
    public const AD_CONVERT_TYPE_LIKE_ACTION_ReportAdGetV2DataListExternalAction = 'AD_CONVERT_TYPE_LIKE_ACTION';
    public const AD_CONVERT_PAGE_VIEW_ReportAdGetV2DataListExternalAction = 'AD_CONVERT_PAGE_VIEW';
    public const AD_CONVERT_TYPE_DOWNLOAD_START_ReportAdGetV2DataListExternalAction = 'AD_CONVERT_TYPE_DOWNLOAD_START';
    public const AD_CONVERT_TYPE_UG_ROI_ReportAdGetV2DataListExternalAction = 'AD_CONVERT_TYPE_UG_ROI';
    public const AD_CONVERT_TYPE_INTELLIGENT_SERVICE_OPEN_ReportAdGetV2DataListExternalAction = 'AD_CONVERT_TYPE_INTELLIGENT_SERVICE_OPEN';
    public const AD_CONVERT_TYPE_LIVE_STAY_TIME_ReportAdGetV2DataListExternalAction = 'AD_CONVERT_TYPE_LIVE_STAY_TIME';
    public const AD_CONVERT_TYPE_LIVE_COMPONENT_CLICK_ReportAdGetV2DataListExternalAction = 'AD_CONVERT_TYPE_LIVE_COMPONENT_CLICK';
    public const AD_CONVERT_TYPE_POI_ADDRESS_CLICK_ReportAdGetV2DataListExternalAction = 'AD_CONVERT_TYPE_POI_ADDRESS_CLICK';
    public const AD_CONVERT_TYPE_PREMIUM_PAYMENT_ReportAdGetV2DataListExternalAction = 'AD_CONVERT_TYPE_PREMIUM_PAYMENT';
    public const AD_CONVERT_TYPE_INTENTION_CLUE_ReportAdGetV2DataListExternalAction = 'AD_CONVERT_TYPE_INTENTION_CLUE';
    public const AD_CONVERT_TYPE_LIVE_FOLLOW_ACITON_ReportAdGetV2DataListExternalAction = 'AD_CONVERT_TYPE_LIVE_FOLLOW_ACITON';
    public const AD_CONVERT_TYPE_LIVE_OTO_PAY_CLICK_ReportAdGetV2DataListExternalAction = 'AD_CONVERT_TYPE_LIVE_OTO_PAY_CLICK';
    public const AD_CONVERT_TYPE_WECHAT_WECOM_ADD_ReportAdGetV2DataListExternalAction = 'AD_CONVERT_TYPE_WECHAT_WECOM_ADD';
    public const AD_CONVERT_TYPE_CLICK_NUM_ReportAdGetV2DataListExternalAction = 'AD_CONVERT_TYPE_CLICK_NUM';
    public const AD_CONVERT_TYPE_ENTER_HOMEPAGE_ReportAdGetV2DataListExternalAction = 'AD_CONVERT_TYPE_ENTER_HOMEPAGE';
    public const AD_CONVERT_TYPE_DIALBACK_CONFIRM_ReportAdGetV2DataListExternalAction = 'AD_CONVERT_TYPE_DIALBACK_CONFIRM';
    public const AD_CONVERT_TYPE_COMMODITY_CLICK_ReportAdGetV2DataListExternalAction = 'AD_CONVERT_TYPE_COMMODITY_CLICK';
    public const AD_CONVERT_TYPE_PAY_ReportAdGetV2DataListExternalAction = 'AD_CONVERT_TYPE_PAY';
    public const AD_CONVERT_TYPE_REDIRECT_ReportAdGetV2DataListExternalAction = 'AD_CONVERT_TYPE_REDIRECT';
    public const AD_CONVERT_TYPE_INTERACTION_ReportAdGetV2DataListExternalAction = 'AD_CONVERT_TYPE_INTERACTION';
    public const AD_CONVERT_TYPE_FIRST_RENTAL_ORDER_ReportAdGetV2DataListExternalAction = 'AD_CONVERT_TYPE_FIRST_RENTAL_ORDER';
    public const AD_CONVERT_TYPE_CERTIFICATION_INFORMATION_ReportAdGetV2DataListExternalAction = 'AD_CONVERT_TYPE_CERTIFICATION_INFORMATION';
    public const AD_CONVERT_TYPE_NOTIFY_FORM_ReportAdGetV2DataListExternalAction = 'AD_CONVERT_TYPE_NOTIFY_FORM';
    public const AD_CONVERT_TYPE_STAY_TIME_ReportAdGetV2DataListExternalAction = 'AD_CONVERT_TYPE_STAY_TIME';
    public const AD_CONVERT_TYPE_APP_UV_ReportAdGetV2DataListExternalAction = 'AD_CONVERT_TYPE_APP_UV';
    public const AD_CONVERT_TYPE_APP_DETAIL_UV_ReportAdGetV2DataListExternalAction = 'AD_CONVERT_TYPE_APP_DETAIL_UV';
    public const AD_CONVERT_TYPE_SUBMIT_CERTIFICATION_ReportAdGetV2DataListExternalAction = 'AD_CONVERT_TYPE_SUBMIT_CERTIFICATION';
    public const AD_CONVERT_TYPE_LOAN_COMPLETION_ReportAdGetV2DataListExternalAction = 'AD_CONVERT_TYPE_LOAN_COMPLETION';
    public const AD_CONVERT_TYPE_MESSAGE_CLUE_ReportAdGetV2DataListExternalAction = 'AD_CONVERT_TYPE_MESSAGE_CLUE';
    public const AD_CONVERT_TYPE_PURCHASE_ROI_ReportAdGetV2DataListExternalAction = 'AD_CONVERT_TYPE_PURCHASE_ROI';
    public const AD_CONVERT_TYPE_EFFECTIVE_PLAY_ReportAdGetV2DataListExternalAction = 'AD_CONVERT_TYPE_EFFECTIVE_PLAY';
    public const AD_CONVERT_TYPE_VIEW_ReportAdGetV2DataListExternalAction = 'AD_CONVERT_TYPE_VIEW';
    public const AD_CONVERT_TYPE_MESSAGE_SERVICE_ReportAdGetV2DataListExternalAction = 'AD_CONVERT_TYPE_MESSAGE_SERVICE';
    public const AD_CONVERT_TYPE_PURCHASE_ROI_7_D_ReportAdGetV2DataListExternalAction = 'AD_CONVERT_TYPE_PURCHASE_ROI_7D';
    public const AD_CONVERT_TYPE_APP_CART_ReportAdGetV2DataListExternalAction = 'AD_CONVERT_TYPE_APP_CART';
    public const AD_CONVERT_TYPE_LIVE_GIFT_ACTION_ReportAdGetV2DataListExternalAction = 'AD_CONVERT_TYPE_LIVE_GIFT_ACTION';
    public const AD_CONVERT_TYPE_LOAN_CREDIT_ReportAdGetV2DataListExternalAction = 'AD_CONVERT_TYPE_LOAN_CREDIT';
    public const AD_CONVERT_TYPE_MESSAGE_ACTION_ReportAdGetV2DataListExternalAction = 'AD_CONVERT_TYPE_MESSAGE_ACTION';
    public const AD_CONVERT_TYPE_SHOW_OFF_NUM_ReportAdGetV2DataListExternalAction = 'AD_CONVERT_TYPE_SHOW_OFF_NUM';
    public const AD_CONVERT_TYPE_ACTIVE_ReportAdGetV2DataListExternalAction = 'AD_CONVERT_TYPE_ACTIVE';
    public const AD_CONVERT_TYPE_PURCHASE_ROI_2_D_ReportAdGetV2DataListExternalAction = 'AD_CONVERT_TYPE_PURCHASE_ROI_2D';
    public const AD_CONVERT_TYPE_LOTTERY_ReportAdGetV2DataListExternalAction = 'AD_CONVERT_TYPE_LOTTERY';
    public const AD_CONVERT_TYPE_WECHAT_ReportAdGetV2DataListExternalAction = 'AD_CONVERT_TYPE_WECHAT';
    public const AD_CONVERT_TYPE_IDCARD_INFORMATION_ReportAdGetV2DataListExternalAction = 'AD_CONVERT_TYPE_IDCARD_INFORMATION';
    public const AD_CONVERT_TYPE_ARPU0_ReportAdGetV2DataListExternalAction = 'AD_CONVERT_TYPE_ARPU0';
    public const AD_CONVERT_TYPE_RSS_ReportAdGetV2DataListExternalAction = 'AD_CONVERT_TYPE_RSS';
    public const AD_CONVERT_TYPE_MESSAGE_JOIN_GROUP_ReportAdGetV2DataListExternalAction = 'AD_CONVERT_TYPE_MESSAGE_JOIN_GROUP';
    public const AD_CONVERT_TYPE_COMMENT_ACTION_ReportAdGetV2DataListExternalAction = 'AD_CONVERT_TYPE_COMMENT_ACTION';
    public const AD_CONVERT_TYPE_CLUE_HIGH_INTENTION_ReportAdGetV2DataListExternalAction = 'AD_CONVERT_TYPE_CLUE_HIGH_INTENTION';
    public const AD_CONVERT_TYPE_PHONE_ReportAdGetV2DataListExternalAction = 'AD_CONVERT_TYPE_PHONE';
    public const AD_CONVERT_TYPE_REDIRECT_TO_STORE_ReportAdGetV2DataListExternalAction = 'AD_CONVERT_TYPE_REDIRECT_TO_STORE';
    public const AD_CONVERT_TYPE_COUPON_ReportAdGetV2DataListExternalAction = 'AD_CONVERT_TYPE_COUPON';
    public const AD_CONVERT_TYPE_CLICK_SHOPWINDOW_ReportAdGetV2DataListExternalAction = 'AD_CONVERT_TYPE_CLICK_SHOPWINDOW';
    public const AD_CONVERT_TYPE_OTO_PAY_ReportAdGetV2DataListExternalAction = 'AD_CONVERT_TYPE_OTO_PAY';
    public const AD_CONVERT_TYPE_POI_COLLECT_ReportAdGetV2DataListExternalAction = 'AD_CONVERT_TYPE_POI_COLLECT';
    public const AD_CONVERT_TYPE_CLICK_WEBSITE_ReportAdGetV2DataListExternalAction = 'AD_CONVERT_TYPE_CLICK_WEBSITE';
    public const AD_CONVERT_TYPE_LIVE_ENTER_ACTION_ReportAdGetV2DataListExternalAction = 'AD_CONVERT_TYPE_LIVE_ENTER_ACTION';
    public const AD_CONVERT_TYPE_DOWNLOAD_FINISH_ReportAdGetV2DataListExternalAction = 'AD_CONVERT_TYPE_DOWNLOAD_FINISH';
    public const AD_CONVERT_TYPE_MESSAGE_ORDER_SUCCESS_ReportAdGetV2DataListExternalAction = 'AD_CONVERT_TYPE_MESSAGE_ORDER_SUCCESS';
    public const AD_CONVERT_TYPE_FOLLOW_CLICK_PRODUCT_ReportAdGetV2DataListExternalAction = 'AD_CONVERT_TYPE_FOLLOW_CLICK_PRODUCT';
    public const AD_CONVERT_TYPE_AUTHORIZATION_ReportAdGetV2DataListExternalAction = 'AD_CONVERT_TYPE_AUTHORIZATION';
    public const AD_CONVERT_TYPE_SUCCESSORDER_ACTION_ReportAdGetV2DataListExternalAction = 'AD_CONVERT_TYPE_SUCCESSORDER_ACTION';
    public const AD_CONVERT_TYPE_VOTE_ReportAdGetV2DataListExternalAction = 'AD_CONVERT_TYPE_VOTE';
    public const AD_CONVERT_TYPE_LIVE_NATIVE_ACITON_ReportAdGetV2DataListExternalAction = 'AD_CONVERT_TYPE_LIVE_NATIVE_ACITON';
    public const AD_CONVERT_TYPE_LIVE_JOIN_GROUP_ReportAdGetV2DataListExternalAction = 'AD_CONVERT_TYPE_LIVE_JOIN_GROUP';
    public const AD_CONVERT_TYPE_APP_PAY_ReportAdGetV2DataListExternalAction = 'AD_CONVERT_TYPE_APP_PAY';

    public const ALLOWED_VALUES = [
        self::AD_CONVERT_TYPE_DIALBACK_CONNECT_ReportAdGetV2DataListExternalAction,
        self::AD_CONVERT_TYPE_OTO_STAY_TIME_ReportAdGetV2DataListExternalAction,
        self::AD_CONVERT_TYPE_FOLLOW_LIVE_ENTER_ReportAdGetV2DataListExternalAction,
        self::AD_CONVERT_TYPE_CLUE_CONFIRM_ReportAdGetV2DataListExternalAction,
        self::AD_CONVERT_TYPE_SHOPPING_CART_ReportAdGetV2DataListExternalAction,
        self::AD_CONVERT_TYPE_RETENTION_7_D_ReportAdGetV2DataListExternalAction,
        self::AD_CONVERT_TYPE_INAPP_NEXT_DAY_OPEN_ReportAdGetV2DataListExternalAction,
        self::AD_CONVERT_TYPE_XPATH_ReportAdGetV2DataListExternalAction,
        self::AD_CONVERT_TYPE_OTHER_ReportAdGetV2DataListExternalAction,
        self::AD_CONVERT_TYPE_LIVE_CLICK_PRODUCT_ACTION_ReportAdGetV2DataListExternalAction,
        self::AD_CONVERT_TYPE_LINK_ACTION_ReportAdGetV2DataListExternalAction,
        self::AD_CONVERT_TYPE_QC_FOLLOW_ACTION_ReportAdGetV2DataListExternalAction,
        self::AD_CONVERT_TYPE_ANCHOR_CLICK_ReportAdGetV2DataListExternalAction,
        self::AD_CONVERT_TYPE_SHOPPING_ReportAdGetV2DataListExternalAction,
        self::AD_CONVERT_TYPE_CLUE_PAY_SUCCEED_ReportAdGetV2DataListExternalAction,
        self::AD_CONVERT_TYPE_IPU_QUALIFY_ReportAdGetV2DataListExternalAction,
        self::AD_CONVERT_TYPE_LIVE_SUCCESSORDER_ACTION_ReportAdGetV2DataListExternalAction,
        self::AD_CONVERT_TYPE_LT_ROI_ReportAdGetV2DataListExternalAction,
        self::AD_CONVERT_TYPE_LIVE_FANS_ACTION_ReportAdGetV2DataListExternalAction,
        self::AD_CONVERT_TYPE_FORM_ReportAdGetV2DataListExternalAction,
        self::AD_CONVERT_TYPE_FORM_DEEP_ReportAdGetV2DataListExternalAction,
        self::AD_CONVERT_TYPE_MULTIPLE_ReportAdGetV2DataListExternalAction,
        self::AD_CONVERT_TYPE_ACTIVE_REGISTER_ReportAdGetV2DataListExternalAction,
        self::AD_CONVERT_TYPE_PAID_CLUE_ReportAdGetV2DataListExternalAction,
        self::AD_CONVERT_TYPE_FEED_LIVE_HOMEPAGE_ReportAdGetV2DataListExternalAction,
        self::AD_CONVERT_TYPE_PHONE_CONFIRM_ReportAdGetV2DataListExternalAction,
        self::AD_CONVERT_TYPE_BOOST_ReportAdGetV2DataListExternalAction,
        self::AD_CONVERT_TYPE_HIGH_VALUE_CLUE_ReportAdGetV2DataListExternalAction,
        self::AD_CONVERT_TYPE_CLICK_DOWNLOAD_ReportAdGetV2DataListExternalAction,
        self::AD_CONVERT_TYPE_APPLET_CLICK_ReportAdGetV2DataListExternalAction,
        self::AD_CONVERT_TYPE_FORM_ANSWER_ReportAdGetV2DataListExternalAction,
        self::AD_CONVERT_TYPE_PERSONAL_INFORMATION_ReportAdGetV2DataListExternalAction,
        self::AD_CONVERT_TYPE_CONSULT_CLUE_ReportAdGetV2DataListExternalAction,
        self::AD_CONVERT_TYPE_GAME_ADDICTION_ReportAdGetV2DataListExternalAction,
        self::AD_CONVERT_TYPE_PREMIUM_UPGEADE_ReportAdGetV2DataListExternalAction,
        self::AD_CONVERT_TYPE_RETENTION_DAYS_ReportAdGetV2DataListExternalAction,
        self::AD_CONVERT_TYPE_NOTIFY_DOWNLOAD_ReportAdGetV2DataListExternalAction,
        self::AD_CONVERT_TYPE_FOLLOW_ACTION_ReportAdGetV2DataListExternalAction,
        self::AD_CONVERT_TYPE_BUTTON_ReportAdGetV2DataListExternalAction,
        self::AD_CONVERT_TYPE_CREATE_GAMEROLE_ReportAdGetV2DataListExternalAction,
        self::AD_CONVERT_TYPE_LOAN_ReportAdGetV2DataListExternalAction,
        self::AD_CONVERT_TYPE_LIVE_APPOINTMENT_ReportAdGetV2DataListExternalAction,
        self::AD_CONVERT_TYPE_CLASS_ReportAdGetV2DataListExternalAction,
        self::AD_CONVERT_TYPE_PHONE_CONNECT_ReportAdGetV2DataListExternalAction,
        self::AD_CONVERT_TYPE_PREMIUM_ROI_ReportAdGetV2DataListExternalAction,
        self::AD_CONVERT_TYPE_APP_ORDER_ReportAdGetV2DataListExternalAction,
        self::AD_CONVERT_TYPE_NATIVE_ACTION_ReportAdGetV2DataListExternalAction,
        self::AD_CONVERT_TYPE_WECHAT_REGISTER_ReportAdGetV2DataListExternalAction,
        self::AD_CONVERT_TYPE_RESERVATION_ReportAdGetV2DataListExternalAction,
        self::AD_CONVERT_TYPE_LIVE_SUCCESSORDER_PAY_ReportAdGetV2DataListExternalAction,
        self::AD_CONVERT_TYPE_LIVE_HOMEPAGE_ReportAdGetV2DataListExternalAction,
        self::AD_CONVERT_TYPE_QQ_ReportAdGetV2DataListExternalAction,
        self::AD_CONVERT_TYPE_MESSAGE_INTERACTION_ReportAdGetV2DataListExternalAction,
        self::AD_CONVERT_TYPE_DIALBACK_ReportAdGetV2DataListExternalAction,
        self::AD_CONVERT_TYPE_POI_MULTIPLE_ReportAdGetV2DataListExternalAction,
        self::AD_CONVERT_TYPE_SHOPPING_ACTION_ReportAdGetV2DataListExternalAction,
        self::AD_CONVERT_TYPE_LOCATION_ACTION_ReportAdGetV2DataListExternalAction,
        self::AD_CONVERT_TYPE_FOLLOW_VIDEO_PLAY_FINISH_ReportAdGetV2DataListExternalAction,
        self::AD_CONVERT_TYPE_CONSULT_ReportAdGetV2DataListExternalAction,
        self::AD_CONVERT_TYPE_DEEP_PURCHASE_ReportAdGetV2DataListExternalAction,
        self::AD_CONVERT_TYPE_PURCHASE_OF_GOODS_ReportAdGetV2DataListExternalAction,
        self::AD_CONVERT_TYPE_INVALID_CLUE_ReportAdGetV2DataListExternalAction,
        self::AD_CONVERT_TYPE_WECHAT_USER_FIRST_MESSAGE_ReportAdGetV2DataListExternalAction,
        self::AD_CONVERT_TYPE_LIVE_OTO_PAY_ReportAdGetV2DataListExternalAction,
        self::AD_CONVERT_TYPE_INSTALL_FINISH_ReportAdGetV2DataListExternalAction,
        self::AD_CONVERT_TYPE_MESSAGE_CLICK_ReportAdGetV2DataListExternalAction,
        self::AD_CONVERT_TYPE_UPDATE_LEVEL_ReportAdGetV2DataListExternalAction,
        self::AD_CONVERT_TYPE_LIVE_COMMENT_ACTION_ReportAdGetV2DataListExternalAction,
        self::AD_CONVERT_TYPE_WECHAT_PAY_ReportAdGetV2DataListExternalAction,
        self::AD_CONVERT_TYPE_QC_MUST_BUY_ReportAdGetV2DataListExternalAction,
        self::AD_CONVERT_TYPE_PRE_LOAN_CREDIT_ReportAdGetV2DataListExternalAction,
        self::AD_CONVERT_TYPE_BANKCARD_INFORMATION_ReportAdGetV2DataListExternalAction,
        self::AD_CONVERT_TYPE_CLUE_INTERFLOW_ReportAdGetV2DataListExternalAction,
        self::AD_CONVERT_TYPE_EFFECTIVE_COPY_ReportAdGetV2DataListExternalAction,
        self::AD_CONVERT_TYPE_FORM_CONNECT_ReportAdGetV2DataListExternalAction,
        self::AD_CONVERT_TYPE_NEXT_DAY_OPEN_ReportAdGetV2DataListExternalAction,
        self::AD_CONVERT_TYPE_LIVE_SLIDECART_CLICK_ACTION_ReportAdGetV2DataListExternalAction,
        self::AD_CONVERT_TYPE_REDIRECT_TO_SHOP_ReportAdGetV2DataListExternalAction,
        self::AD_CONVERT_TYPE_SALES_LEAD_ReportAdGetV2DataListExternalAction,
        self::AD_CONVERT_TYPE_CLICK_CALL_DY_ReportAdGetV2DataListExternalAction,
        self::AD_CONVERT_TYPE_FIRST_CLASS_ReportAdGetV2DataListExternalAction,
        self::AD_CONVERT_TYPE_SHARE_ACTION_ReportAdGetV2DataListExternalAction,
        self::AD_CONVERT_TYPE_CONSULT_EFFECTIVE_ReportAdGetV2DataListExternalAction,
        self::AD_CONVERT_TYPE_MAP_SEARCH_ReportAdGetV2DataListExternalAction,
        self::AD_CONVERT_TYPE_MESSAGE_ReportAdGetV2DataListExternalAction,
        self::AD_CONVERT_TYPE_CLICK_LANDING_PAGE_ReportAdGetV2DataListExternalAction,
        self::AD_CONVERT_TYPE_LIVE_OTO_CLICK_ReportAdGetV2DataListExternalAction,
        self::AD_CONVERT_TYPE_PHONE_EFFECTIVE_ReportAdGetV2DataListExternalAction,
        self::AD_CONVERT_TYPE_NEW_FOLLOW_ACTION_ReportAdGetV2DataListExternalAction,
        self::AD_CONVERT_TYPE_CUSTOMER_EFFECTIVE_ReportAdGetV2DataListExternalAction,
        self::AD_CONVERT_TYPE_LIKE_ACTION_ReportAdGetV2DataListExternalAction,
        self::AD_CONVERT_PAGE_VIEW_ReportAdGetV2DataListExternalAction,
        self::AD_CONVERT_TYPE_DOWNLOAD_START_ReportAdGetV2DataListExternalAction,
        self::AD_CONVERT_TYPE_UG_ROI_ReportAdGetV2DataListExternalAction,
        self::AD_CONVERT_TYPE_INTELLIGENT_SERVICE_OPEN_ReportAdGetV2DataListExternalAction,
        self::AD_CONVERT_TYPE_LIVE_STAY_TIME_ReportAdGetV2DataListExternalAction,
        self::AD_CONVERT_TYPE_LIVE_COMPONENT_CLICK_ReportAdGetV2DataListExternalAction,
        self::AD_CONVERT_TYPE_POI_ADDRESS_CLICK_ReportAdGetV2DataListExternalAction,
        self::AD_CONVERT_TYPE_PREMIUM_PAYMENT_ReportAdGetV2DataListExternalAction,
        self::AD_CONVERT_TYPE_INTENTION_CLUE_ReportAdGetV2DataListExternalAction,
        self::AD_CONVERT_TYPE_LIVE_FOLLOW_ACITON_ReportAdGetV2DataListExternalAction,
        self::AD_CONVERT_TYPE_LIVE_OTO_PAY_CLICK_ReportAdGetV2DataListExternalAction,
        self::AD_CONVERT_TYPE_WECHAT_WECOM_ADD_ReportAdGetV2DataListExternalAction,
        self::AD_CONVERT_TYPE_CLICK_NUM_ReportAdGetV2DataListExternalAction,
        self::AD_CONVERT_TYPE_ENTER_HOMEPAGE_ReportAdGetV2DataListExternalAction,
        self::AD_CONVERT_TYPE_DIALBACK_CONFIRM_ReportAdGetV2DataListExternalAction,
        self::AD_CONVERT_TYPE_COMMODITY_CLICK_ReportAdGetV2DataListExternalAction,
        self::AD_CONVERT_TYPE_PAY_ReportAdGetV2DataListExternalAction,
        self::AD_CONVERT_TYPE_REDIRECT_ReportAdGetV2DataListExternalAction,
        self::AD_CONVERT_TYPE_INTERACTION_ReportAdGetV2DataListExternalAction,
        self::AD_CONVERT_TYPE_FIRST_RENTAL_ORDER_ReportAdGetV2DataListExternalAction,
        self::AD_CONVERT_TYPE_CERTIFICATION_INFORMATION_ReportAdGetV2DataListExternalAction,
        self::AD_CONVERT_TYPE_NOTIFY_FORM_ReportAdGetV2DataListExternalAction,
        self::AD_CONVERT_TYPE_STAY_TIME_ReportAdGetV2DataListExternalAction,
        self::AD_CONVERT_TYPE_APP_UV_ReportAdGetV2DataListExternalAction,
        self::AD_CONVERT_TYPE_APP_DETAIL_UV_ReportAdGetV2DataListExternalAction,
        self::AD_CONVERT_TYPE_SUBMIT_CERTIFICATION_ReportAdGetV2DataListExternalAction,
        self::AD_CONVERT_TYPE_LOAN_COMPLETION_ReportAdGetV2DataListExternalAction,
        self::AD_CONVERT_TYPE_MESSAGE_CLUE_ReportAdGetV2DataListExternalAction,
        self::AD_CONVERT_TYPE_PURCHASE_ROI_ReportAdGetV2DataListExternalAction,
        self::AD_CONVERT_TYPE_EFFECTIVE_PLAY_ReportAdGetV2DataListExternalAction,
        self::AD_CONVERT_TYPE_VIEW_ReportAdGetV2DataListExternalAction,
        self::AD_CONVERT_TYPE_MESSAGE_SERVICE_ReportAdGetV2DataListExternalAction,
        self::AD_CONVERT_TYPE_PURCHASE_ROI_7_D_ReportAdGetV2DataListExternalAction,
        self::AD_CONVERT_TYPE_APP_CART_ReportAdGetV2DataListExternalAction,
        self::AD_CONVERT_TYPE_LIVE_GIFT_ACTION_ReportAdGetV2DataListExternalAction,
        self::AD_CONVERT_TYPE_LOAN_CREDIT_ReportAdGetV2DataListExternalAction,
        self::AD_CONVERT_TYPE_MESSAGE_ACTION_ReportAdGetV2DataListExternalAction,
        self::AD_CONVERT_TYPE_SHOW_OFF_NUM_ReportAdGetV2DataListExternalAction,
        self::AD_CONVERT_TYPE_ACTIVE_ReportAdGetV2DataListExternalAction,
        self::AD_CONVERT_TYPE_PURCHASE_ROI_2_D_ReportAdGetV2DataListExternalAction,
        self::AD_CONVERT_TYPE_LOTTERY_ReportAdGetV2DataListExternalAction,
        self::AD_CONVERT_TYPE_WECHAT_ReportAdGetV2DataListExternalAction,
        self::AD_CONVERT_TYPE_IDCARD_INFORMATION_ReportAdGetV2DataListExternalAction,
        self::AD_CONVERT_TYPE_ARPU0_ReportAdGetV2DataListExternalAction,
        self::AD_CONVERT_TYPE_RSS_ReportAdGetV2DataListExternalAction,
        self::AD_CONVERT_TYPE_MESSAGE_JOIN_GROUP_ReportAdGetV2DataListExternalAction,
        self::AD_CONVERT_TYPE_COMMENT_ACTION_ReportAdGetV2DataListExternalAction,
        self::AD_CONVERT_TYPE_CLUE_HIGH_INTENTION_ReportAdGetV2DataListExternalAction,
        self::AD_CONVERT_TYPE_PHONE_ReportAdGetV2DataListExternalAction,
        self::AD_CONVERT_TYPE_REDIRECT_TO_STORE_ReportAdGetV2DataListExternalAction,
        self::AD_CONVERT_TYPE_COUPON_ReportAdGetV2DataListExternalAction,
        self::AD_CONVERT_TYPE_CLICK_SHOPWINDOW_ReportAdGetV2DataListExternalAction,
        self::AD_CONVERT_TYPE_OTO_PAY_ReportAdGetV2DataListExternalAction,
        self::AD_CONVERT_TYPE_POI_COLLECT_ReportAdGetV2DataListExternalAction,
        self::AD_CONVERT_TYPE_CLICK_WEBSITE_ReportAdGetV2DataListExternalAction,
        self::AD_CONVERT_TYPE_LIVE_ENTER_ACTION_ReportAdGetV2DataListExternalAction,
        self::AD_CONVERT_TYPE_DOWNLOAD_FINISH_ReportAdGetV2DataListExternalAction,
        self::AD_CONVERT_TYPE_MESSAGE_ORDER_SUCCESS_ReportAdGetV2DataListExternalAction,
        self::AD_CONVERT_TYPE_FOLLOW_CLICK_PRODUCT_ReportAdGetV2DataListExternalAction,
        self::AD_CONVERT_TYPE_AUTHORIZATION_ReportAdGetV2DataListExternalAction,
        self::AD_CONVERT_TYPE_SUCCESSORDER_ACTION_ReportAdGetV2DataListExternalAction,
        self::AD_CONVERT_TYPE_VOTE_ReportAdGetV2DataListExternalAction,
        self::AD_CONVERT_TYPE_LIVE_NATIVE_ACITON_ReportAdGetV2DataListExternalAction,
        self::AD_CONVERT_TYPE_LIVE_JOIN_GROUP_ReportAdGetV2DataListExternalAction,
        self::AD_CONVERT_TYPE_APP_PAY_ReportAdGetV2DataListExternalAction,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ReportAdGetV2DataListExternalAction', $value));
        }
        return (string) $value;
    }
}
