<?php
	/**
	 * QDraggableGen File
	 * 
	 * The abstract QDraggableGen class defined here is
	 * code-generated and contains options, events and methods scraped from the
	 * JQuery UI documentation Web site. It is not generated by the typical
	 * codegen process, but rather is generated periodically by the core QCubed
	 * team and checked in. However, the code to generate this file is
	 * in the assets/_core/php/_devetools/jquery_ui_gen/jq_control_gen.php file
	 * and you can regenerate the files if you need to.
	 *
	 * The comments in this file are taken from the JQuery UI site, so they do
	 * not always make sense with regard to QCubed. They are simply provided
	 * as reference. Note that this is very low-level code, and does not always
	 * update QCubed state variables. See the QDraggableBase 
	 * file, which contains code to interface between this generated file and QCubed.
	 *
	 * Because subsequent re-code generations will overwrite any changes to this
	 * file, you should leave this file unaltered to prevent yourself from losing
	 * any information or code changes.  All customizations should be done by
	 * overriding existing or implementing new methods, properties and variables
	 * in the QDraggable class file.
	 *
	 */

	/* Custom event classes for this control */
	
	
	/**
	 * <div>Triggered when the draggable is
	 * 		created.</div><ul><li><div><strong>event</strong></div> <div>Type:
	 * 		<a>Event</a></div> <div></div></li> <li><div><strong>ui</strong></div>
	 * 		<div>Type: <a>Object</a></div> <div></div></li></ul>
	 */
	class QDraggable_CreateEvent extends QJqUiEvent {
		const EventName = 'dragcreate';
	}
	/**
	 * <div>Triggered while the mouse is moved during the
	 * 		dragging.</div><ul><li><div><strong>event</strong></div> <div>Type:
	 * 		<a>Event</a></div> <div></div></li> <li><div><strong>ui</strong></div>
	 * 		<div>Type: <a>Object</a></div> <div></div>
	 * 		<ul><li><div><strong>helper</strong></div> <div>Type: <a>jQuery</a></div>
	 * 		<div>The jQuery object representing the helper that's being
	 * 		dragged.</div></li> <li><div><strong>position</strong></div> <div>Type:
	 * 		<a>Object</a></div> <div>Current CSS position of the helper as <code>{ top,
	 * 		left }</code> object.</div></li> <li><div><strong>offset</strong></div>
	 * 		<div>Type: <a>Object</a></div> <div>Current offset position of the helper
	 * 		as <code>{ top, left }</code> object.</div></li></ul></li></ul>
	 */
	class QDraggable_DragEvent extends QJqUiEvent {
		const EventName = 'drag';
	}
	/**
	 * <div>Triggered when dragging
	 * 		starts.</div><ul><li><div><strong>event</strong></div> <div>Type:
	 * 		<a>Event</a></div> <div></div></li> <li><div><strong>ui</strong></div>
	 * 		<div>Type: <a>Object</a></div> <div></div>
	 * 		<ul><li><div><strong>helper</strong></div> <div>Type: <a>jQuery</a></div>
	 * 		<div>The jQuery object representing the helper that's being
	 * 		dragged.</div></li> <li><div><strong>position</strong></div> <div>Type:
	 * 		<a>Object</a></div> <div>Current CSS position of the helper as <code>{ top,
	 * 		left }</code> object.</div></li> <li><div><strong>offset</strong></div>
	 * 		<div>Type: <a>Object</a></div> <div>Current offset position of the helper
	 * 		as <code>{ top, left }</code> object.</div></li></ul></li></ul>
	 */
	class QDraggable_StartEvent extends QJqUiEvent {
		const EventName = 'dragstart';
	}
	/**
	 * <div>Triggered when dragging
	 * 		stops.</div><ul><li><div><strong>event</strong></div> <div>Type:
	 * 		<a>Event</a></div> <div></div></li> <li><div><strong>ui</strong></div>
	 * 		<div>Type: <a>Object</a></div> <div></div>
	 * 		<ul><li><div><strong>helper</strong></div> <div>Type: <a>jQuery</a></div>
	 * 		<div>The jQuery object representing the helper that's being
	 * 		dragged.</div></li> <li><div><strong>position</strong></div> <div>Type:
	 * 		<a>Object</a></div> <div>Current CSS position of the helper as <code>{ top,
	 * 		left }</code> object.</div></li> <li><div><strong>offset</strong></div>
	 * 		<div>Type: <a>Object</a></div> <div>Current offset position of the helper
	 * 		as <code>{ top, left }</code> object.</div></li></ul></li></ul>
	 */
	class QDraggable_StopEvent extends QJqUiEvent {
		const EventName = 'dragstop';
	}

	/* Custom "property" event classes for this control */

	/**
	 * Generated QDraggableGen class.
	 * 
	 * This is the QDraggableGen class which is automatically generated
	 * by scraping the JQuery UI documentation website. As such, it includes all the options
	 * as listed by the JQuery UI website, which may or may not be appropriate for QCubed. See
	 * the QDraggableBase class for any glue code to make this class more
	 * usable in QCubed.
	 * 
	 * @see QDraggableBase
	 * @package Controls\Base
	 * @property boolean $AddClasses <div>If set to <code>false</code>, will prevent the
	 * 		<code>ui-draggable</code> class from being added. This may be desired as a
	 * 		performance optimization when calling <code>.draggable()</code> on hundreds
	 * 		of elements.</div>
	 * @property mixed $AppendTo <div>Which element the draggable helper should be appended to while
	 * 		dragging.</div><strong>Multiple types
	 * 		supported:</strong><ul><li><strong>jQuery</strong>: A jQuery object
	 * 		containing the element to append the helper to.</li>
	 * 		<li><strong>Element</strong>: The element to append the helper to.</li>
	 * 		<li><strong>Selector</strong>: A selector specifying which element to
	 * 		append the helper to.</li> <li><strong>String</strong>: The string
	 * 		<code>"parent"</code> will cause the helper to be a sibling of the
	 * 		draggable.</li></ul>
	 * @property string $Axis <div>Constrains dragging to either the horizontal (x) or vertical (y) axis.
	 * 		Possible values: <code>"x"</code>, <code>"y"</code>.</div>
	 * @property mixed $Cancel <div>Prevents dragging from starting on specified elements.</div>
	 * @property mixed $ConnectToSortable <div>Allows the draggable to be dropped onto the specified sortables. If
	 * 		this option is used, a draggable can be dropped onto a sortable list and
	 * 		then becomes part of it. Note: The <a><code>helper</code></a> option must
	 * 		be set to <code>"clone"</code> in order to work flawlessly. Requires the
	 * 		<a>jQuery UI Sortable plugin</a> to be included.</div>
	 * @property mixed $Containment <div>Constrains dragging to within the bounds of the specified element or
	 * 		region.</div><strong>Multiple types
	 * 		supported:</strong><ul><li><strong>Selector</strong>: The draggable element
	 * 		will be contained to the bounding box of the first element found by the
	 * 		selector. If no element is found, no containment will be set.</li>
	 * 		<li><strong>Element</strong>: The draggable element will be contained to
	 * 		the bounding box of this element.</li> <li><strong>String</strong>:
	 * 		Possible values: <code>"parent"</code>, <code>"document"</code>,
	 * 		<code>"window"</code>.</li> <li><strong>Array</strong>: An array defining a
	 * 		bounding box in the form <code>[ x1, y1, x2, y2 ]</code>.</li></ul>
	 * @property string $Cursor <div>The CSS cursor during the drag operation.</div>
	 * @property mixed $CursorAt <div>Sets the offset of the dragging helper relative to the mouse cursor.
	 * 		Coordinates can be given as a hash using a combination of one or two keys:
	 * 		<code>{ top, left, right, bottom }</code>.</div>
	 * @property integer $Delay <div>Time in milliseconds after mousedown until dragging should start. This
	 * 		option can be used to prevent unwanted drags when clicking on an
	 * 		element.</div>
	 * @property boolean $Disabled <div>Disables the draggable if set to <code>true</code>.</div>
	 * @property integer $Distance <div>Distance in pixels after mousedown the mouse must move before dragging
	 * 		should start. This option can be used to prevent unwanted drags when
	 * 		clicking on an element.</div>
	 * @property array $Grid <div>Snaps the dragging helper to a grid, every x and y pixels. The array
	 * 		must be of the form <code>[ x, y ]</code>.</div>
	 * @property mixed $Handle <div>If specified, restricts dragging from starting unless the mousedown
	 * 		occurs on the specified element(s).</div>
	 * @property mixed $Helper <div>Allows for a helper element to be used for dragging
	 * 		display.</div><strong>Multiple types
	 * 		supported:</strong><ul><li><strong>String</strong>: If set to
	 * 		<code>"clone"</code>, then the element will be cloned and the clone will be
	 * 		dragged.</li> <li><strong>Function</strong>: A function that will return a
	 * 		DOMElement to use while dragging.</li></ul>
	 * @property mixed $IframeFix <div>Prevent iframes from capturing the mousemove events during a drag.
	 * 		Useful in combination with the <a><code>cursorAt</code></a> option, or in
	 * 		any case where the mouse cursor may not be over the
	 * 		helper.</div><strong>Multiple types
	 * 		supported:</strong><ul><li><strong>Boolean</strong>: When set to
	 * 		<code>true</code>, transparent overlays will be placed over all iframes on
	 * 		the page.</li> <li><strong>Selector</strong>: Any iframes matching the
	 * 		selector will be covered by transparent overlays.</li></ul>
	 * @property integer $Opacity <div>Opacity for the helper while being dragged.</div>
	 * @property boolean $RefreshPositions <div>If set to <code>true</code>, all droppable positions are calculated on
	 * 		every mousemove. 				<em>Caution: This solves issues on highly dynamic
	 * 		pages, but dramatically decreases performance.</em></div>
	 * @property mixed $Revert <div>Whether the element should revert to its start position when dragging
	 * 		stops.</div><strong>Multiple types
	 * 		supported:</strong><ul><li><strong>Boolean</strong>: If set to
	 * 		<code>true</code> the element will always revert.</li>
	 * 		<li><strong>String</strong>: If set to <code>"invalid"</code>, revert will
	 * 		only occur if the draggable has not been dropped on a droppable. For
	 * 		<code>"valid"</code>, it's the other way around.</li></ul>
	 * @property integer $RevertDuration <div>The duration of the revert animation, in milliseconds. Ignored if the
	 * 		<a><code>revert</code></a> option is <code>false</code>.</div>
	 * @property string $Scope <div>Used to group sets of draggable and droppable items, in addition to
	 * 		droppable's <a><code>accept</code></a> option. A draggable with the same
	 * 		<code>scope</code> value as a droppable will be accepted by the
	 * 		droppable.</div>
	 * @property boolean $Scroll <div>If set to <code>true</code>, container auto-scrolls while
	 * 		dragging.</div>
	 * @property integer $ScrollSensitivity <div>Distance in pixels from the edge of the viewport after which the
	 * 		viewport should scroll. Distance is relative to pointer, not the draggable.
	 * 		Ignored if the <a><code>scroll</code></a> option is
	 * 		<code>false</code>.</div>
	 * @property integer $ScrollSpeed <div>The speed at which the window should scroll once the mouse pointer
	 * 		gets within the <a><code>scrollSensitivity</code></a> distance. Ignored if
	 * 		the <a><code>scroll</code></a> option is <code>false</code>.</div>
	 * @property mixed $Snap <div>Whether the element should snap to other
	 * 		elements.</div><strong>Multiple types
	 * 		supported:</strong><ul><li><strong>Boolean</strong>: When set to
	 * 		<code>true</code>, the element will snap to all other draggable
	 * 		elements.</li> <li><strong>Selector</strong>: A selector specifying which
	 * 		elements to snap to.</li></ul>
	 * @property string $SnapMode <div>Determines which edges of snap elements the draggable will snap to.
	 * 		Ignored if the <a><code>snap</code></a> option is <code>false</code>.
	 * 		Possible values: <code>"inner"</code>, <code>"outer"</code>,
	 * 		<code>"both"</code>.</div>
	 * @property integer $SnapTolerance <div>The distance in pixels from the snap element edges at which snapping
	 * 		should occur. Ignored if the <a><code>snap</code></a> option is
	 * 		<code>false</code>.</div>
	 * @property mixed $Stack <div>Controls the z-index of the set of elements that match the selector,
	 * 		always brings the currently dragged item to the front. Very useful in
	 * 		things like window managers.</div>
	 * @property integer $ZIndex <div>Z-index for the helper while being dragged.</div>
	 */

	abstract class QDraggableGen extends QControl	{
		protected $strJavaScripts = __JQUERY_EFFECTS__;
		protected $strStyleSheets = __JQUERY_CSS__;
		/** @var boolean */
		protected $blnAddClasses = null;
		/** @var mixed */
		protected $mixAppendTo = null;
		/** @var string */
		protected $strAxis = null;
		/** @var mixed */
		protected $mixCancel = null;
		/** @var mixed */
		protected $mixConnectToSortable = null;
		/** @var mixed */
		protected $mixContainment = null;
		/** @var string */
		protected $strCursor = null;
		/** @var mixed */
		protected $mixCursorAt = null;
		/** @var integer */
		protected $intDelay;
		/** @var boolean */
		protected $blnDisabled = null;
		/** @var integer */
		protected $intDistance = null;
		/** @var array */
		protected $arrGrid = null;
		/** @var mixed */
		protected $mixHandle = null;
		/** @var mixed */
		protected $mixHelper = null;
		/** @var mixed */
		protected $mixIframeFix = null;
		/** @var integer */
		protected $intOpacity = null;
		/** @var boolean */
		protected $blnRefreshPositions = null;
		/** @var mixed */
		protected $mixRevert = null;
		/** @var integer */
		protected $intRevertDuration = null;
		/** @var string */
		protected $strScope = null;
		/** @var boolean */
		protected $blnScroll = null;
		/** @var integer */
		protected $intScrollSensitivity = null;
		/** @var integer */
		protected $intScrollSpeed = null;
		/** @var mixed */
		protected $mixSnap = null;
		/** @var string */
		protected $strSnapMode = null;
		/** @var integer */
		protected $intSnapTolerance = null;
		/** @var mixed */
		protected $mixStack = null;
		/** @var integer */
		protected $intZIndex = null;
		
		protected function makeJsProperty($strProp, $strKey) {
			$objValue = $this->$strProp;
			if (null === $objValue) {
				return '';
			}

			return $strKey . ': ' . JavaScriptHelper::toJsObject($objValue) . ', ';
		}

		protected function makeJqOptions() {
			$strJqOptions = '';
			$strJqOptions .= $this->makeJsProperty('AddClasses', 'addClasses');
			$strJqOptions .= $this->makeJsProperty('AppendTo', 'appendTo');
			$strJqOptions .= $this->makeJsProperty('Axis', 'axis');
			$strJqOptions .= $this->makeJsProperty('Cancel', 'cancel');
			$strJqOptions .= $this->makeJsProperty('ConnectToSortable', 'connectToSortable');
			$strJqOptions .= $this->makeJsProperty('Containment', 'containment');
			$strJqOptions .= $this->makeJsProperty('Cursor', 'cursor');
			$strJqOptions .= $this->makeJsProperty('CursorAt', 'cursorAt');
			$strJqOptions .= $this->makeJsProperty('Delay', 'delay');
			$strJqOptions .= $this->makeJsProperty('Disabled', 'disabled');
			$strJqOptions .= $this->makeJsProperty('Distance', 'distance');
			$strJqOptions .= $this->makeJsProperty('Grid', 'grid');
			$strJqOptions .= $this->makeJsProperty('Handle', 'handle');
			$strJqOptions .= $this->makeJsProperty('Helper', 'helper');
			$strJqOptions .= $this->makeJsProperty('IframeFix', 'iframeFix');
			$strJqOptions .= $this->makeJsProperty('Opacity', 'opacity');
			$strJqOptions .= $this->makeJsProperty('RefreshPositions', 'refreshPositions');
			$strJqOptions .= $this->makeJsProperty('Revert', 'revert');
			$strJqOptions .= $this->makeJsProperty('RevertDuration', 'revertDuration');
			$strJqOptions .= $this->makeJsProperty('Scope', 'scope');
			$strJqOptions .= $this->makeJsProperty('Scroll', 'scroll');
			$strJqOptions .= $this->makeJsProperty('ScrollSensitivity', 'scrollSensitivity');
			$strJqOptions .= $this->makeJsProperty('ScrollSpeed', 'scrollSpeed');
			$strJqOptions .= $this->makeJsProperty('Snap', 'snap');
			$strJqOptions .= $this->makeJsProperty('SnapMode', 'snapMode');
			$strJqOptions .= $this->makeJsProperty('SnapTolerance', 'snapTolerance');
			$strJqOptions .= $this->makeJsProperty('Stack', 'stack');
			$strJqOptions .= $this->makeJsProperty('ZIndex', 'zIndex');
			if ($strJqOptions) $strJqOptions = substr($strJqOptions, 0, -2);
			return $strJqOptions;
		}

		public function getJqSetupFunction() {
			return 'draggable';
		}

		public function GetControlJavaScript() {
			return sprintf('jQuery("#%s").%s({%s})', $this->getJqControlId(), $this->getJqSetupFunction(), $this->makeJqOptions());
		}

		public function GetEndScript() {
			$str = '';
			if ($this->getJqControlId() !== $this->ControlId) {
				// #845: if the element receiving the jQuery UI events is different than this control
				// we need to clean-up the previously attached event handlers, so that they are not duplicated 
				// during the next ajax update which replaces this control.
				$str = sprintf('jQuery("#%s").off(); ', $this->getJqControlId());
			}
			return $str . $this->GetControlJavaScript() . '; ' . parent::GetEndScript();
		}
		
		/**
		 * Call a JQuery UI Method on the object. 
		 * 
		 * A helper function to call a jQuery UI Method. Takes variable number of arguments.
		 * 
		 * @param string $strMethodName the method name to call
		 * @internal param $mixed [optional] $mixParam1
		 * @internal param $mixed [optional] $mixParam2
		 */
		protected function CallJqUiMethod($strMethodName /*, ... */) {
			$args = func_get_args();

			$strArgs = JavaScriptHelper::toJsObject($args);
			$strJs = sprintf('jQuery("#%s").%s(%s)',
				$this->getJqControlId(),
				$this->getJqSetupFunction(),
				substr($strArgs, 1, strlen($strArgs)-2));	// params without brackets
			QApplication::ExecuteJavaScript($strJs);
		}


		/**
		 * <div>Removes the draggable functionality completely. This will return the
		 * element back to its pre-init state.</div><ul><li><div>This method does not
		 * accept any arguments.</div></li></ul>
		 */
		public function Destroy() {
			$this->CallJqUiMethod("destroy");
		}
		/**
		 * <div>Disables the draggable.</div><ul><li><div>This method does not accept
		 * any arguments.</div></li></ul>
		 */
		public function Disable() {
			$this->CallJqUiMethod("disable");
		}
		/**
		 * <div>Enables the draggable.</div><ul><li><div>This method does not accept
		 * any arguments.</div></li></ul>
		 */
		public function Enable() {
			$this->CallJqUiMethod("enable");
		}
		/**
		 * <div>Gets the value currently associated with the specified
		 * <code>optionName</code>.</div><ul><li><div><strong>optionName</strong></div>
		 * <div>Type: <a>String</a></div> <div>The name of the option to
		 * get.</div></li></ul>
		 * @param $optionName
		 */
		public function Option($optionName) {
			$this->CallJqUiMethod("option", $optionName);
		}
		/**
		 * <div>Gets an object containing key/value pairs representing the current
		 * draggable options hash.</div><ul><li><div>This method does not accept any
		 * arguments.</div></li></ul>
		 */
		public function Option1() {
			$this->CallJqUiMethod("option");
		}
		/**
		 * <div>Sets the value of the draggable option associated with the specified
		 * <code>optionName</code>.</div><ul><li><div><strong>optionName</strong></div>
		 * <div>Type: <a>String</a></div> <div>The name of the option to
		 * set.</div></li> <li><div><strong>value</strong></div> <div>Type:
		 * <a>Object</a></div> <div>A value to set for the option.</div></li></ul>
		 * @param $optionName
		 * @param $value
		 */
		public function Option2($optionName, $value) {
			$this->CallJqUiMethod("option", $optionName, $value);
		}
		/**
		 * <div>Sets one or more options for the
		 * draggable.</div><ul><li><div><strong>options</strong></div> <div>Type:
		 * <a>Object</a></div> <div>A map of option-value pairs to
		 * set.</div></li></ul>
		 * @param $options
		 */
		public function Option3($options) {
			$this->CallJqUiMethod("option", $options);
		}


		public function __get($strName) {
			switch ($strName) {
				case 'AddClasses': return $this->blnAddClasses;
				case 'AppendTo': return $this->mixAppendTo;
				case 'Axis': return $this->strAxis;
				case 'Cancel': return $this->mixCancel;
				case 'ConnectToSortable': return $this->mixConnectToSortable;
				case 'Containment': return $this->mixContainment;
				case 'Cursor': return $this->strCursor;
				case 'CursorAt': return $this->mixCursorAt;
				case 'Delay': return $this->intDelay;
				case 'Disabled': return $this->blnDisabled;
				case 'Distance': return $this->intDistance;
				case 'Grid': return $this->arrGrid;
				case 'Handle': return $this->mixHandle;
				case 'Helper': return $this->mixHelper;
				case 'IframeFix': return $this->mixIframeFix;
				case 'Opacity': return $this->intOpacity;
				case 'RefreshPositions': return $this->blnRefreshPositions;
				case 'Revert': return $this->mixRevert;
				case 'RevertDuration': return $this->intRevertDuration;
				case 'Scope': return $this->strScope;
				case 'Scroll': return $this->blnScroll;
				case 'ScrollSensitivity': return $this->intScrollSensitivity;
				case 'ScrollSpeed': return $this->intScrollSpeed;
				case 'Snap': return $this->mixSnap;
				case 'SnapMode': return $this->strSnapMode;
				case 'SnapTolerance': return $this->intSnapTolerance;
				case 'Stack': return $this->mixStack;
				case 'ZIndex': return $this->intZIndex;
				default: 
					try { 
						return parent::__get($strName); 
					} catch (QCallerException $objExc) { 
						$objExc->IncrementOffset(); 
						throw $objExc; 
					}
			}
		}

		public function __set($strName, $mixValue) {
			switch ($strName) {
				case 'AddClasses':
					try {
						$this->blnAddClasses = QType::Cast($mixValue, QType::Boolean);
						if ($this->Rendered) {
							$this->CallJqUiMethod('option', 'addClasses', $this->blnAddClasses);
						}
						break;
					} catch (QInvalidCastException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'AppendTo':
					$this->mixAppendTo = $mixValue;
				
					if ($this->Rendered) {
						$this->CallJqUiMethod('option', 'appendTo', $mixValue);
					}
					break;

				case 'Axis':
					try {
						$this->strAxis = QType::Cast($mixValue, QType::String);
						if ($this->Rendered) {
							$this->CallJqUiMethod('option', 'axis', $this->strAxis);
						}
						break;
					} catch (QInvalidCastException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Cancel':
					$this->mixCancel = $mixValue;
				
					if ($this->Rendered) {
						$this->CallJqUiMethod('option', 'cancel', $mixValue);
					}
					break;

				case 'ConnectToSortable':
					$this->mixConnectToSortable = $mixValue;
				
					if ($this->Rendered) {
						$this->CallJqUiMethod('option', 'connectToSortable', $mixValue);
					}
					break;

				case 'Containment':
					$this->mixContainment = $mixValue;
				
					if ($this->Rendered) {
						$this->CallJqUiMethod('option', 'containment', $mixValue);
					}
					break;

				case 'Cursor':
					try {
						$this->strCursor = QType::Cast($mixValue, QType::String);
						if ($this->Rendered) {
							$this->CallJqUiMethod('option', 'cursor', $this->strCursor);
						}
						break;
					} catch (QInvalidCastException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'CursorAt':
					$this->mixCursorAt = $mixValue;
				
					if ($this->Rendered) {
						$this->CallJqUiMethod('option', 'cursorAt', $mixValue);
					}
					break;

				case 'Delay':
					try {
						$this->intDelay = QType::Cast($mixValue, QType::Integer);
						if ($this->Rendered) {
							$this->CallJqUiMethod('option', 'delay', $this->intDelay);
						}
						break;
					} catch (QInvalidCastException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Disabled':
					try {
						$this->blnDisabled = QType::Cast($mixValue, QType::Boolean);
						if ($this->Rendered) {
							$this->CallJqUiMethod('option', 'disabled', $this->blnDisabled);
						}
						break;
					} catch (QInvalidCastException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Distance':
					try {
						$this->intDistance = QType::Cast($mixValue, QType::Integer);
						if ($this->Rendered) {
							$this->CallJqUiMethod('option', 'distance', $this->intDistance);
						}
						break;
					} catch (QInvalidCastException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Grid':
					try {
						$this->arrGrid = QType::Cast($mixValue, QType::ArrayType);
						if ($this->Rendered) {
							$this->CallJqUiMethod('option', 'grid', $this->arrGrid);
						}
						break;
					} catch (QInvalidCastException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Handle':
					$this->mixHandle = $mixValue;
				
					if ($this->Rendered) {
						$this->CallJqUiMethod('option', 'handle', $mixValue);
					}
					break;

				case 'Helper':
					$this->mixHelper = $mixValue;
				
					if ($this->Rendered) {
						$this->CallJqUiMethod('option', 'helper', $mixValue);
					}
					break;

				case 'IframeFix':
					$this->mixIframeFix = $mixValue;
				
					if ($this->Rendered) {
						$this->CallJqUiMethod('option', 'iframeFix', $mixValue);
					}
					break;

				case 'Opacity':
					try {
						$this->intOpacity = QType::Cast($mixValue, QType::Integer);
						if ($this->Rendered) {
							$this->CallJqUiMethod('option', 'opacity', $this->intOpacity);
						}
						break;
					} catch (QInvalidCastException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'RefreshPositions':
					try {
						$this->blnRefreshPositions = QType::Cast($mixValue, QType::Boolean);
						if ($this->Rendered) {
							$this->CallJqUiMethod('option', 'refreshPositions', $this->blnRefreshPositions);
						}
						break;
					} catch (QInvalidCastException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Revert':
					$this->mixRevert = $mixValue;
				
					if ($this->Rendered) {
						$this->CallJqUiMethod('option', 'revert', $mixValue);
					}
					break;

				case 'RevertDuration':
					try {
						$this->intRevertDuration = QType::Cast($mixValue, QType::Integer);
						if ($this->Rendered) {
							$this->CallJqUiMethod('option', 'revertDuration', $this->intRevertDuration);
						}
						break;
					} catch (QInvalidCastException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Scope':
					try {
						$this->strScope = QType::Cast($mixValue, QType::String);
						if ($this->Rendered) {
							$this->CallJqUiMethod('option', 'scope', $this->strScope);
						}
						break;
					} catch (QInvalidCastException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Scroll':
					try {
						$this->blnScroll = QType::Cast($mixValue, QType::Boolean);
						if ($this->Rendered) {
							$this->CallJqUiMethod('option', 'scroll', $this->blnScroll);
						}
						break;
					} catch (QInvalidCastException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'ScrollSensitivity':
					try {
						$this->intScrollSensitivity = QType::Cast($mixValue, QType::Integer);
						if ($this->Rendered) {
							$this->CallJqUiMethod('option', 'scrollSensitivity', $this->intScrollSensitivity);
						}
						break;
					} catch (QInvalidCastException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'ScrollSpeed':
					try {
						$this->intScrollSpeed = QType::Cast($mixValue, QType::Integer);
						if ($this->Rendered) {
							$this->CallJqUiMethod('option', 'scrollSpeed', $this->intScrollSpeed);
						}
						break;
					} catch (QInvalidCastException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Snap':
					$this->mixSnap = $mixValue;
				
					if ($this->Rendered) {
						$this->CallJqUiMethod('option', 'snap', $mixValue);
					}
					break;

				case 'SnapMode':
					try {
						$this->strSnapMode = QType::Cast($mixValue, QType::String);
						if ($this->Rendered) {
							$this->CallJqUiMethod('option', 'snapMode', $this->strSnapMode);
						}
						break;
					} catch (QInvalidCastException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'SnapTolerance':
					try {
						$this->intSnapTolerance = QType::Cast($mixValue, QType::Integer);
						if ($this->Rendered) {
							$this->CallJqUiMethod('option', 'snapTolerance', $this->intSnapTolerance);
						}
						break;
					} catch (QInvalidCastException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Stack':
					$this->mixStack = $mixValue;
				
					if ($this->Rendered) {
						$this->CallJqUiMethod('option', 'stack', $mixValue);
					}
					break;

				case 'ZIndex':
					try {
						$this->intZIndex = QType::Cast($mixValue, QType::Integer);
						if ($this->Rendered) {
							$this->CallJqUiMethod('option', 'zIndex', $this->intZIndex);
						}
						break;
					} catch (QInvalidCastException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}


				case 'Enabled':
					$this->Disabled = !$mixValue;	// Tie in standard QCubed functionality
					parent::__set($strName, $mixValue);
					break;
					
				default:
					try {
						parent::__set($strName, $mixValue);
						break;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}
			}
		}
	}

?>
