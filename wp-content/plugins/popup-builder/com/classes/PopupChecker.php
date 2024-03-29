<?php
namespace sgpb;
use \DateTime;
use \DateTimeZone;
use \ConfigDataHelper;

/**
 * Popup checker class to check if the popup must be loaded on the current page
 *
 * @since 1.0.0
 *
 */
class PopupChecker
{
	private static $instance;
	private $popup;
	private $post;

	public static function instance()
	{
		if (!isset(self::$instance)) {
			self::$instance = new self;
		}

		return self::$instance;
	}

	public function setPopup($popup)
	{
		$this->popup = $popup;
	}

	public function getPopup()
	{
		return $this->popup;
	}

	public function setPost($post)
	{
		$this->post = $post;
	}

	public function getPost()
	{
		return $this->post;
	}

	/**
	 * It checks whether popup should be loaded on the current page.
	 *
	 * @since 1.0.0
	 *
	 * @param int $popupId popup id
	 * @param  object $post page post data
	 *
	 * @return bool
	 *
	 */
	public function isLoadable($popup, $post)
	{
		$this->setPopup($popup);
		$this->setPost($post);

		$popupOptions = $popup->getOptions();
		$isActive = $popup->getOptionValue('sgpb-is-active', true);
		$saveMode = $popup->getSaveMode();
		$allowToLoad = $this->allowToLoad();

		if ($saveMode) {
			$allowToLoad['option_event'] = false;
			return $allowToLoad;
		}

		if (isset($popupOptions['sgpb-is-active'])) {
			$isActive = $popupOptions['sgpb-is-active'];
		}

		if (!$isActive) {
			$allowToLoad['option_event'] = false;
		}

		return $allowToLoad;
	}

	/**
	 * Decides whether popup data should be loaded or not
	 *
	 * @since 1.0.0
	 *
	 * @return array
	 *
	 */
	private function allowToLoad()
	{
		$isCustomInserted = $this->isCustomInserted();
		$insertedModes = array(
			'attr_event' => false,
			'option_event' => false
		);

		if ($isCustomInserted) {
			$insertedModes['attr_event'] = true;
		}

		$target = $this->divideTargetData();
		$isPostInForbidden = $this->isPostInForbidden($target);

		if ($isPostInForbidden) {
			return $insertedModes;
		}
		$isPermissive = $this->isPermissive($target);
		//If permissive for current page check conditions
		if ($isPermissive) {
			$conditions = $this->divideConditionsData();
			$isSatisfyForConditions = $this->isSatisfyForConditions($conditions);

			if ($isSatisfyForConditions === false) {
				return $insertedModes;
			}
			if ($this->isSatisfyForOtherConditions() === false) {
				return $insertedModes;
			}
			$insertedModes['option_event'] = $isPermissive;
		}

		return $insertedModes;
	}

	/**
	 * check is Satisfy popup conditions
	 *
	 * @since 1.0.0
	 *
	 * @param array $conditions assoc array
	 *
	 * @return bool
	 *
	 */
	private function isSatisfyForConditions($conditions)
	{
		// proStartSilver
		$forbiddenConditions = $conditions['forbidden'];
		if (!empty($forbiddenConditions)) {
			foreach ($forbiddenConditions as $forbiddenCondition) {
				$isForbiddenConditions = $this->isSatisfyForConditionsOptions($forbiddenCondition);
				//If $isForbiddenConditions popup does not open
				if ($isForbiddenConditions) {
					return false;
				}
			}
		}
		$permissiveOptions = $conditions['permissive'];
		if (!empty($permissiveOptions)) {
			foreach ($permissiveOptions as $permissiveOption) {
				$isPermissiveConditions = $this->isSatisfyForConditionsOptions($permissiveOption);

				if ($isPermissiveConditions === false) {
					return $isPermissiveConditions;
				}
			}
		}
		// proEndSilver
		return true;
	}

	private function isSatisfyForConditionsOptions($option)
	{
		global $post;
		$paramName  = $option['param'];
		$defaultStatus = false;

		// proStartSilver
		if ($paramName == 'select_role') {
			return true;
		}

		if ($paramName == 'groups_devices' && !empty($option['value'])) {

			if (is_array($option['value'])) {
				$device = Functions::getUserDevice();
				if (in_array($device, $option['value'])) {
					return true;
				}
 			}
		}
		// proEndSilver

		// proStartPlatinum
		else if ($paramName == 'groups_countries' && !empty($option['value'])) {
			if (is_array($option['value'])) {
				$ipAddress = Functions::getIpAddress();
				$country = Functions::getCountryName($ipAddress);

				if (in_array($country, $option['value'])) {
					return true;
				}
			}

		}
		// proEndPlatinum
		// proStartSilver
		else if ($paramName == 'groups_user_role' && !empty($option['value'])) {
			$userStatus = is_user_logged_in();

			if ($userStatus) {
				return true;
			}
		}

		if (!$defaultStatus && do_action('isAllowedForConditions', $option, $post)) {
			$defaultStatus = true;
		}
		// proEndSilver

		return $defaultStatus;
	}

	/**
	 * Check is popup inserted via short code or class attribute
	 *
	 * @since 1.0.0
	 *
	 * @param
	 *
	 * @return bool
	 *
	 */
	private function isCustomInserted()
	{
		$customInsertData = $this->getCustomInsertedData();
		$popup = $this->getPopup();
		// When popup object is empty it's mean popup is not custom inserted
		if (empty($popup)) {
			return false;
		}
		$popupId = $popup->getId();

		return in_array($popupId, $customInsertData);
	}

	/**
	 * Should load data in the current page
	 *
	 * @since 1.0.0
	 *
	 * @param array $target popup saved target data
	 *
	 * @return bool $isPermissive true => allow false => don't allow
	 *
	 */
	private function isPermissive($target)
	{
		$isPermissive = false;

		if (empty($target['permissive'])) {
			$isPermissive = false;
			return $isPermissive;
		}

		foreach ($target['permissive'] as $targetData) {
			if ($this->isSatisfyForParam($targetData)) {
				$isPermissive = true;
				break;
			}
		}

		return $isPermissive;
	}

	/**
	 * Check whether the target data disallows loading the popup data on the current page
	 *
	 * @since 1.0.0
	 *
	 * @param array $target popup saved target data
	 *
	 * @return bool $isForbidden true => don't allow false => allow
	 *
	 */
	private function isPostInForbidden($target)
	{
		$isForbidden = false;

		if (empty($target['forbidden'])) {
			return $isForbidden;
		}

		foreach ($target['forbidden'] as $targetData) {
			if ($this->isSatisfyForParam($targetData)) {
				$isForbidden = true;
				break;
			}
		}

		return $isForbidden;
	}

	/**
	 * Check whether the current page is corresponding to the saved target data
	 *
	 * @since 1.0.0
	 *
	 * @param array $targetData popup saved target data
	 *
	 * @return bool $isSatisfy
	 *
	 */
	private function isSatisfyForParam($targetData)
	{
		$isSatisfy = false;
		$postId = 0;

		if (empty($targetData['param'])) {
			return $isSatisfy;
		}

		$post = $this->getPost();
		if (isset($post)) {
			$postId = $post->ID;
		}

		if (strpos($targetData['param'], '_all')) {
			$endIndex = strpos($targetData['param'], '_all');
			$postType = substr($targetData['param'], 0, $endIndex);
			$currentPostType = get_post_type($postId);

			if ($postType == $currentPostType) {
				$isSatisfy = true;
			}
		}
		else if (strpos($targetData['param'], '_selected')) {
			$values = array();

			if (!empty($targetData['value'])) {
				$values = array_keys($targetData['value']);
			}

			if (in_array($postId, $values)) {
				$isSatisfy = true;
			}
		}
		else if ($targetData['param'] == 'post_type' && !empty($targetData['value'])) {
			$selectedCustomPostTypes = array_values($targetData['value']);
			$currentPostType = get_post_type($postId);

			if (in_array($currentPostType, $selectedCustomPostTypes)) {
				$isSatisfy = true;
			}
		}
		else if ($targetData['param'] == 'post_category' && !empty($targetData['value'])) {
			$values = $targetData['value'];
			$currentPostCategories = get_the_category($postId);

			foreach ($currentPostCategories as $categoryName) {
				if (in_array($categoryName->term_id, $values)) {
					$isSatisfy = true;
					break;
				}

			}
		}
		else if ($targetData['param'] == 'page_type' && !empty($targetData['value'])) {
			$postTypes = $targetData['value'];
			foreach ($postTypes as $postType) {

				if ($postType == 'is_home_page') {
					if (is_front_page() && is_home()) {
						// Default homepage
						$isSatisfy = true;
						break;
					} else if ( is_front_page() ) {
						// static homepage
						$isSatisfy = true;
					    break;
					}
				}
				else if ($postType()) {
					$isSatisfy = true;
					break;
				}
			}
		}
		else if ($targetData['param'] == 'page_template' && !empty($targetData['value'])) {
			$currentPageTemplate = basename(get_page_template());
			if (in_array($currentPageTemplate, $targetData['value'])) {
				$isSatisfy = true;
			}
		}
		else if ($targetData['param'] == 'post_tags') {
			if (has_tag()) {
				$isSatisfy = true;
			}
		}
		else if ($targetData['param'] == 'post_tags_ids') {
			$tagsObj = wp_get_post_tags($postId);
			$selectedTags = array_values($targetData['value']);

			foreach ($tagsObj as $tagObj) {
				if (in_array($tagObj->slug, $selectedTags)) {
					$isSatisfy = true;
					break;
				}
			}
		}


		if (!$isSatisfy && do_action('isAllowedForTarget', $targetData, $post)) {
			$isSatisfy = true;
		}

		return $isSatisfy;
	}

	/**
	 * Divide conditions data to Permissive and Forbidden
	 *
	 * @since 1.0.0
	 *
	 * @return array $popupTargetData
	 *
	 */
	private function divideConditionsData()
	{
		$popup = $this->getPopup();
		$conditions = $popup->getConditions();
		$conditions = $this->divideIntoPermissiveAndForbidden($conditions);

		return $conditions;
	}
	/**
	 * Divide target data to Permissive and Forbidden
	 *
	 * @since 1.0.0
	 *
	 * @return array $popupTargetData
	 *
	 */
	public function divideTargetData()
	{
		$popup = $this->getPopup();
		$targetData = $popup->getTarget();
		return $this->divideIntoPermissiveAndForbidden($targetData);
	}

	/**
	 * Divide the Popup target data into Permissive And Forbidden assoc array
	 *
	 * @since 1.0.0
	 *
	 * @param array $postMetaData popup saved target data
	 *
	 * @return array $postMetaDivideData
	 *
	 */
	public function divideIntoPermissiveAndForbidden($targetData)
	{
		$permissive = array();
		$forbidden = array();

		if (!empty($targetData)) {
			foreach ($targetData as $data) {
				if (empty($data['operator'])) {
					break;
				}

				if ($data['operator'] == '==') {
					$permissive[] = $data;
				}
				else {
					$forbidden[] = $data;
				}
			}
		}

		$postMetaDivideData = array(
			'permissive' => $permissive,
			'forbidden' => $forbidden
		);

		return $postMetaDivideData;
	}

	/**
	 * Get custom inserted data
	 *
	 * @since 1.0.0
	 *
	 * @return array $insertedData
	 */
	public function getCustomInsertedData()
	{
		$post = $this->getPost();
		$insertedData = array();

		if (isset($post)) {
			$insertedData = SGPopup::getCustomInsertedDataByPostId($this->getPost()->ID);
		}

		return $insertedData;
	}

	/**
	 * Check Popup conditions
	 *
	 * @since 1.0.0
	 *
	 * @return array
	 *
	 */
	private function isSatisfyForOtherConditions()
	{
		$popup = $this->getPopup();
		$popupOptions = $popup->getOptions();
		$popupId = $popup->getId();

		$dontAlowOpenPopup = apply_filters('sgpbOtherConditions', array('id' => $popupId, 'popupOptions' => $popupOptions));

		return $dontAlowOpenPopup;
	}

	public static function checkUserStatus($savedStatus)
	{
		$equalStatus = true;

		/*When current user status and saved options does not matched popup must not open*/
		if (is_user_logged_in() != (int)$savedStatus) {
			$equalStatus = false;
		}

		return $equalStatus;
	}

	public static function popupInSchedule($popupOptions)
	{
		$scheduleStartWeeks = $popupOptions['sgpb-schedule-weeks'];
		$outInSchedule = false;

		$scheduleStartTime = $popupOptions['sgpb-schedule-start-time'];
		$scheduleEndTime = $popupOptions['sgpb-schedule-end-time'];

		$currentWeekDayName = date('D');
		if (in_array($currentWeekDayName, $scheduleStartWeeks)) {

			$timezone = get_option('timezone_string');
			if (!$timezone) {
				$timezone = SG_POPUP_DEFAULT_TIME_ZONE;
			}

			$date = new DateTime('now', new DateTimeZone($timezone));
			$currentHour =  $date->format('H:i');

			$currentHour = strtotime($currentHour);
			$startTime = strtotime($scheduleStartTime);
			$endTime = strtotime($scheduleEndTime);

			if (empty($scheduleEndTime)) {
				$endTime = strtotime('23:59:59');
			}

			if ($currentHour >= $startTime && $currentHour <= $endTime) {
				return true;
			}
		}

		return $outInSchedule;
	}

	public static function popupInTimeRange($popupOptions)
	{
		$finishDate = false;

		$startDate = strtotime($popupOptions['sgpb-popup-start-timer']);

		if (!empty($popupOptions['sgpb-popup-end-timer'])) {
			$finishDate = strtotime($popupOptions['sgpb-popup-end-timer']);
		}

		$timezone = ConfigDataHelper::getPopupDefaultTimeZone();
		$timeDate = new DateTime('now', new DateTimeZone($timezone));
		$timeNow = strtotime($timeDate->format('Y-m-d H:i:s'));

		if ($finishDate != false && $timeNow > $startDate && $timeNow < $finishDate) {
			return true;
		}
		else if ($finishDate == false && $timeNow > $startDate) {
			return true;
		}

		return false;
	}

	public static function checkOtherConditionsActions($args)
	{
		if (empty($args['id']) || empty($args['popupOptions'])) {
			return false;
		}

		$popupOptions = $args['popupOptions'];

		// proStartSilver
		//User status check
		if (!empty($popupOptions['sgpb-user-status'])) {
			$restrictUserStatus = PopupChecker::checkUserStatus($popupOptions['sgpb-loggedin-user']);

			if ($restrictUserStatus === false) {
				return $restrictUserStatus;
			}
		}

		//schedule checking
		if (!empty($popupOptions['sgpb-schedule-status'])) {
			$isInSchedule = PopupChecker::popupInSchedule($popupOptions);

			if ($isInSchedule === false) {
				return $isInSchedule;
			}
		}

		/*Date range checking*/
		if (!empty($popupOptions['sgpb-popup-timer-status'])) {
			$inTimeRange = PopupChecker::popupInTimeRange($popupOptions);

			if ($inTimeRange === false) {
				return $inTimeRange;
			}
		}
		// proEndSilver

		// proStartPlatinum
		if (!empty($popupOptions['sgpb-popup-country-status'])) {
			$ipAddress = Functions::getIpAddress();

			$country = Functions::getCountryName($ipAddress);
			$countriesIso = $popupOptions['sgpb-countries-iso'];
			$allowCountries = $popupOptions['sgpb-allow-countries'];
			$countriesIsoArray = explode(',', $countriesIso);

			if ($allowCountries  == 'allow') {
				$isInArray = in_array($country, $countriesIsoArray);
				if ($isInArray === false) {
					return $isInArray;
				}
			}
			if ($allowCountries  == 'disallow') {
				$isInArray = in_array($country, $countriesIsoArray);
				if ($isInArray === true) {
					return false;
				}
			}
		}
		// proEndPlatinum

		// checking by popup type
		if (!empty($popupOptions['sgpb-type'])) {
			$popupClassName = SGPopup::getPopupClassNameFormType($popupOptions['sgpb-type']);
			$popupClassName = __NAMESPACE__.'\\'.$popupClassName;

			if (method_exists($popupClassName, 'allowToOpen')) {
				$allowToOpen = $popupClassName::allowToOpen($popupOptions);
				return $allowToOpen;
			}
		}

		return true;
	}
}
