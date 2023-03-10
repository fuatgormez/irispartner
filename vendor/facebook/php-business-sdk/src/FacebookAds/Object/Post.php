<?php
/**
 * Copyright (c) 2015-present, Facebook, Inc. All rights reserved.
 *
 * You are hereby granted a non-exclusive, worldwide, royalty-free license to
 * use, copy, modify, and distribute this software in source code or binary
 * form for use in connection with the web services and APIs provided by
 * Facebook.
 *
 * As with any software that integrates with the Facebook platform, your use
 * of this software is subject to the Facebook Developer Principles and
 * Policies [http://developers.facebook.com/policy/]. This copyright notice
 * shall be included in all copies or substantial portions of the software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL
 * THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING
 * FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER
 * DEALINGS IN THE SOFTWARE.
 *
 */

namespace FacebookAds\Object;

use FacebookAds\ApiRequest;
use FacebookAds\Cursor;
use FacebookAds\Http\RequestInterface;
use FacebookAds\TypeChecker;
use FacebookAds\Object\Fields\PostFields;
use FacebookAds\Object\Values\CommentCommentPrivacyValueValues;
use FacebookAds\Object\Values\CommentFilterValues;
use FacebookAds\Object\Values\CommentLiveFilterValues;
use FacebookAds\Object\Values\CommentOrderValues;
use FacebookAds\Object\Values\InsightsResultDatePresetValues;
use FacebookAds\Object\Values\InsightsResultPeriodValues;
use FacebookAds\Object\Values\PostBackdatedTimeGranularityValues;
use FacebookAds\Object\Values\PostCheckinEntryPointValues;
use FacebookAds\Object\Values\PostFeedStoryVisibilityValues;
use FacebookAds\Object\Values\PostFormattingValues;
use FacebookAds\Object\Values\PostPlaceAttachmentSettingValues;
use FacebookAds\Object\Values\PostPostSurfacesBlacklistValues;
use FacebookAds\Object\Values\PostPostingToRedspaceValues;
use FacebookAds\Object\Values\PostTargetSurfaceValues;
use FacebookAds\Object\Values\PostTimelineVisibilityValues;
use FacebookAds\Object\Values\PostUnpublishedContentTypeValues;
use FacebookAds\Object\Values\ProfileTypeValues;

/**
 * This class is auto-generated.
 *
 * For any issues or feature requests related to this class, please let us know
 * on github and we'll fix in our codegen framework. We'll not be able to accept
 * pull request for this class.
 *
 */

class Post extends AbstractCrudObject {

  /**
   * @return PostFields
   */
  public static function getFieldsEnum() {
    return PostFields::getInstance();
  }

  protected static function getReferencedEnums() {
    $ref_enums = array();
    $ref_enums['BackdatedTimeGranularity'] = PostBackdatedTimeGranularityValues::getInstance()->getValues();
    $ref_enums['FeedStoryVisibility'] = PostFeedStoryVisibilityValues::getInstance()->getValues();
    $ref_enums['TimelineVisibility'] = PostTimelineVisibilityValues::getInstance()->getValues();
    $ref_enums['CheckinEntryPoint'] = PostCheckinEntryPointValues::getInstance()->getValues();
    $ref_enums['Formatting'] = PostFormattingValues::getInstance()->getValues();
    $ref_enums['PlaceAttachmentSetting'] = PostPlaceAttachmentSettingValues::getInstance()->getValues();
    $ref_enums['PostSurfacesBlacklist'] = PostPostSurfacesBlacklistValues::getInstance()->getValues();
    $ref_enums['PostingToRedspace'] = PostPostingToRedspaceValues::getInstance()->getValues();
    $ref_enums['TargetSurface'] = PostTargetSurfaceValues::getInstance()->getValues();
    $ref_enums['UnpublishedContentType'] = PostUnpublishedContentTypeValues::getInstance()->getValues();
    return $ref_enums;
  }


  public function getAttachments(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/attachments',
      new AbstractCrudObject(),
      'EDGE',
      array(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getComments(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'filter' => 'filter_enum',
      'live_filter' => 'live_filter_enum',
      'order' => 'order_enum',
      'since' => 'datetime',
    );
    $enums = array(
      'filter_enum' => CommentFilterValues::getInstance()->getValues(),
      'live_filter_enum' => CommentLiveFilterValues::getInstance()->getValues(),
      'order_enum' => CommentOrderValues::getInstance()->getValues(),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/comments',
      new Comment(),
      'EDGE',
      Comment::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function createComment(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'attachment_id' => 'string',
      'attachment_share_url' => 'string',
      'attachment_url' => 'string',
      'comment' => 'string',
      'comment_privacy_value' => 'comment_privacy_value_enum',
      'feedback_source' => 'string',
      'message' => 'string',
      'nectar_module' => 'string',
      'parent_comment_id' => 'Object',
      'post_id' => 'string',
      'tracking' => 'string',
    );
    $enums = array(
      'comment_privacy_value_enum' => CommentCommentPrivacyValueValues::getInstance()->getValues(),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/comments',
      new Comment(),
      'EDGE',
      Comment::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getDynamicPosts(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/dynamic_posts',
      new RTBDynamicPost(),
      'EDGE',
      RTBDynamicPost::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getInsights(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'date_preset' => 'date_preset_enum',
      'metric' => 'list<Object>',
      'period' => 'period_enum',
      'since' => 'datetime',
      'until' => 'datetime',
    );
    $enums = array(
      'date_preset_enum' => InsightsResultDatePresetValues::getInstance()->getValues(),
      'period_enum' => InsightsResultPeriodValues::getInstance()->getValues(),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/insights',
      new InsightsResult(),
      'EDGE',
      InsightsResult::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function deleteLikes(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'nectar_module' => 'string',
      'tracking' => 'string',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_DELETE,
      '/likes',
      new AbstractCrudObject(),
      'EDGE',
      array(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function createLike(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'feedback_source' => 'string',
      'nectar_module' => 'string',
      'tracking' => 'string',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/likes',
      new Post(),
      'EDGE',
      Post::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function createPromotion(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'ad_account_id' => 'string',
      'ad_conversion_pixel_id' => 'unsigned int',
      'audience' => 'audience_enum',
      'audience_id' => 'string',
      'bid_amount' => 'unsigned int',
      'budget' => 'unsigned int',
      'cta_type' => 'cta_type_enum',
      'currency' => 'string',
      'flow_id' => 'string',
      'placement' => 'string',
      'start_time' => 'unsigned int',
      'stop_time' => 'unsigned int',
      'targeting' => 'Targeting',
    );
    $enums = array(
      'audience_enum' => array(
        'AUTO_LOOKALIKE',
        'AUTO_PAGE_LOOKALIKE',
        'AUTO_TARGETING',
        'COUNTRY_AND_INTEREST',
        'CREATE_NEW',
        'CUSTOM_AUDIENCE',
        'DISTRICT',
        'EVENT_CUSTOM_AUDIENCES',
        'EVENT_ENGAGEMENT',
        'FANS',
        'GROUPER',
        'HEC_AUDIENCE',
        'IG_PROMOTED_POST_AUTO',
        'LOCAL',
        'LOOKALIKE',
        'MARKETPLACE_DEFAULT',
        'MARKETPLACE_NATIONWIDE_AUDIENCE',
        'MARKETPLACE_SAVED_AUDIENCE',
        'MULT_CUSTOM_AUDIENCES',
        'NCPP',
        'SAVED_AUDIENCE',
        'SMART_AUDIENCE',
      ),
      'cta_type_enum' => array(
        'ADD_TO_CART',
        'APPLY_NOW',
        'BOOK_TRAVEL',
        'BUY',
        'BUY_NOW',
        'BUY_TICKETS',
        'CALL',
        'CALL_ME',
        'CONTACT',
        'CONTACT_US',
        'DONATE',
        'DONATE_NOW',
        'DOWNLOAD',
        'EVENT_RSVP',
        'FIND_A_GROUP',
        'FIND_YOUR_GROUPS',
        'FOLLOW_NEWS_STORYLINE',
        'FOLLOW_PAGE',
        'FOLLOW_USER',
        'GET_DIRECTIONS',
        'GET_OFFER',
        'GET_OFFER_VIEW',
        'GET_QUOTE',
        'GET_SHOWTIMES',
        'INSTALL_APP',
        'INSTALL_MOBILE_APP',
        'LEARN_MORE',
        'LIKE_PAGE',
        'LISTEN_MUSIC',
        'LISTEN_NOW',
        'MESSAGE_PAGE',
        'MOBILE_DOWNLOAD',
        'MOMENTS',
        'NO_BUTTON',
        'OPEN_LINK',
        'ORDER_NOW',
        'PAY_TO_ACCESS',
        'PLAY_GAME',
        'PURCHASE_GIFT_CARDS',
        'RECORD_NOW',
        'REFER_FRIENDS',
        'REQUEST_TIME',
        'SAY_THANKS',
        'SEE_MORE',
        'SELL_NOW',
        'SEND_A_GIFT',
        'SHARE',
        'SHOP_NOW',
        'SIGN_UP',
        'SOTTO_SUBSCRIBE',
        'SUBSCRIBE',
        'SWIPE_UP_PRODUCT',
        'SWIPE_UP_SHOP',
        'UPDATE_APP',
        'USE_APP',
        'USE_MOBILE_APP',
        'VIDEO_ANNOTATION',
        'VISIT_PAGES_FEED',
        'WATCH_MORE',
        'WATCH_VIDEO',
        'WHATSAPP_MESSAGE',
        'WOODHENGE_SUPPORT',
      ),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/promotions',
      new AbstractCrudObject(),
      'EDGE',
      array(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getReactions(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'type' => 'type_enum',
    );
    $enums = array(
      'type_enum' => ProfileTypeValues::getInstance()->getValues(),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/reactions',
      new Profile(),
      'EDGE',
      Profile::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getSharedPosts(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/sharedposts',
      new Post(),
      'EDGE',
      Post::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getSponsorTags(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/sponsor_tags',
      new Page(),
      'EDGE',
      Page::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getTo(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/to',
      new Profile(),
      'EDGE',
      Profile::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function deleteSelf(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_DELETE,
      '/',
      new AbstractCrudObject(),
      'NODE',
      array(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getSelf(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/',
      new Post(),
      'NODE',
      Post::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function updateSelf(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'attached_media' => 'list<Object>',
      'backdated_time' => 'datetime',
      'backdated_time_granularity' => 'backdated_time_granularity_enum',
      'composer_session_id' => 'string',
      'direct_share_status' => 'unsigned int',
      'feed_story_visibility' => 'feed_story_visibility_enum',
      'is_explicit_location' => 'bool',
      'is_hidden' => 'bool',
      'is_pinned' => 'bool',
      'is_published' => 'bool',
      'message' => 'string',
      'og_action_type_id' => 'string',
      'og_hide_object_attachment' => 'bool',
      'og_icon_id' => 'string',
      'og_object_id' => 'string',
      'og_phrase' => 'string',
      'og_set_profile_badge' => 'bool',
      'og_suggestion_mechanism' => 'string',
      'place' => 'Object',
      'privacy' => 'string',
      'product_item' => 'Object',
      'scheduled_publish_time' => 'unsigned int',
      'should_sync_product_edit' => 'bool',
      'source_type' => 'string',
      'sponsor_id' => 'string',
      'sponsor_relationship' => 'unsigned int',
      'tags' => 'list<int>',
      'text_format_preset_id' => 'string',
      'timeline_visibility' => 'timeline_visibility_enum',
      'tracking' => 'string',
    );
    $enums = array(
      'backdated_time_granularity_enum' => PostBackdatedTimeGranularityValues::getInstance()->getValues(),
      'feed_story_visibility_enum' => PostFeedStoryVisibilityValues::getInstance()->getValues(),
      'timeline_visibility_enum' => PostTimelineVisibilityValues::getInstance()->getValues(),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/',
      new Post(),
      'NODE',
      Post::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

}
