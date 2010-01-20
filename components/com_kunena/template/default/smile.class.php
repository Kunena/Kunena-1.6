<?php
/**
* @version $Id$
* Kunena Component
* @package Kunena
*
* @Copyright (C) 2008 - 2010 Kunena Team All rights reserved
* @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
* @link http://www.kunena.com
*
* Based on FireBoard Component
* @Copyright (C) 2006 - 2007 Best Of Joomla All rights reserved
* @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
* @link http://www.bestofjoomla.com
*
* Based on Joomlaboard Component
* @copyright (C) 2000 - 2004 TSMF / Jan de Graaff / All Rights Reserved
* @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
* @author TSMF & Jan de Graaff
**/
defined( '_JEXEC' ) or die();

include_once(KUNENA_PATH_LIB .DS. "kunena.parser.base.php");
include_once(KUNENA_PATH_LIB .DS. "kunena.parser.php");

class smile
{
    function smileParserCallback($fb_message, $history, $emoticons, $iconList = null)
    {
        // from context HTML into HTML

        // where $history can be 1 or 0. If 1 then we need to load the grey
        // emoticons for the Topic History. If 0 we need the normal ones

	static $regexp_trans = array('/' => '\/', '^' => '\^', '$' => '\$', '.' => '\.', '[' => '\[', ']' => '\]', '|' => '\|', '(' => '\(', ')' => '\)', '?' => '\?', '*' => '\*', '+' => '\+', '{' => '\{', '}' => '\}', '\\' => '\\\\', '^' => '\^', '-' => '\-');

		$utf8 = (KUNENA_CHARSET == 'UTF-8') ? "u" : "";
        $type = ($history == 1) ? "-grey" : "";
        $message_emoticons = array();
        $message_emoticons = $iconList? $iconList : smile::getEmoticons($history);
        // now the text is parsed, next are the emoticons
	    $fb_message_txt = $fb_message;

        if ($emoticons != 1)
        {
            reset($message_emoticons);

            foreach ($message_emoticons as $emo_txt => $emo_src)
            {
				$emo_txt = strtr($emo_txt, $regexp_trans);
				// Check that smileys are not part of text like:soon (:s)
                $fb_message_txt = preg_replace('/(\W|\A)'.$emo_txt.'(\W|\Z)/'.$utf8, '\1<img src="' . $emo_src . '" alt="" style="vertical-align: middle;border:0px;" />\2', $fb_message_txt);
				// Previous check causes :) :) not to work, workaround is to run the same regexp twice
                $fb_message_txt = preg_replace('/(\W|\A)'.$emo_txt.'(\W|\Z)/'.$utf8, '\1<img src="' . $emo_src . '" alt="" style="vertical-align: middle;border:0px;" />\2', $fb_message_txt);
            }
        }

        return $fb_message_txt;
    }

    function smileReplace($fb_message, $history, $emoticons, $iconList = null)
    {

        $fb_message_txt = $fb_message;

        //implement the new parser
        $parser = new TagParser();
        $interpreter = new KunenaBBCodeInterpreter($parser);
        $task = $interpreter->NewTask();
        $task->SetText($fb_message_txt.' _EOP_');
        $task->dry = FALSE;
        $task->drop_errtag = FALSE;
	    $task->history = $history;
	    $task->emoticons = $emoticons;
	    $task->iconList = $iconList;
        $task->Parse();

        return JString::substr($task->text,0,-6);
    }
    /**
    * function to retrieve the emoticons out of the database
    *
    * @author Niels Vandekeybus <progster@wina.be>
    * @version 1.0
    * @since 2005-04-19
    * @param boolean $grayscale
    *            determines wether to return the grayscale or the ordinary emoticon
    * @param boolean  $emoticonbar
    *            only list emoticons to be displayed in the emoticonbar (currently unused)
    * @return array
    *             array consisting of emoticon codes and their respective location (NOT the entire img tag)
    */
    function getEmoticons($grayscale, $emoticonbar = 0)
    {
        $kunena_db = &JFactory::getDBO();
        $grayscale == 1 ? $column = "greylocation" : $column = "location";
        $sql = "SELECT code, `$column` FROM #__fb_smileys";

        if ($emoticonbar == 1)
        $sql .= " WHERE emoticonbar='1'";

        $kunena_db->setQuery($sql);
        $smilies = $kunena_db->loadObjectList();
        	check_dberror("Unable to load smilies.");

        $smileyArray = array();
        foreach ($smilies as $smiley) {                                                    // We load all smileys in array, so we can sort them
            $smileyArray[$smiley->code] = '' . KUNENA_URLEMOTIONSPATH . $smiley->$column; // This makes sure that for example :pinch: gets translated before :p
        }

        if ($emoticonbar == 0)
        { // don't sort when it's only for use in the emoticonbar
            array_multisort(array_keys($smileyArray), SORT_DESC, $smileyArray);
            reset($smileyArray);
        }

        return $smileyArray;
    }

    function topicToolbar($selected, $tawidth)
    {
        //TO USE
        // $topicToolbar = smile:topicToolbar();
        // echo $topicToolbar;
        //$selected var is used to check the right selected icon
        //important for the edit function
        $selected = (int)$selected;
?>

<table border="0" cellspacing="0" cellpadding="0" class="kflat">
	<tr>
		<td><input type="radio" name="topic_emoticon" value="0"
			<?php echo $selected==0?" checked=\"checked\" ":"";?> /><?php @print(_NO_SMILIE); ?>

		<input type="radio" name="topic_emoticon" value="1"
			<?php echo $selected==1?" checked=\"checked\" ":"";?> /> <img
			src="<?php echo KUNENA_URLEMOTIONSPATH ;?>exclam.gif" alt=""
			border="0" /> <input type="radio" name="topic_emoticon" value="2"
			<?php echo $selected==2?" checked=\"checked\" ":"";?> /> <img
			src="<?php echo KUNENA_URLEMOTIONSPATH ;?>question.gif" alt=""
			border="0" /> <input type="radio" name="topic_emoticon" value="3"
			<?php echo $selected==3?" checked=\"checked\" ":"";?> /> <img
			src="<?php echo KUNENA_URLEMOTIONSPATH ;?>arrow.gif" alt=""
			border="0" /> <?php
            if ($tawidth <= 320) {
                echo '</tr><tr>';
            }
            ?>

		<input type="radio" name="topic_emoticon" value="4"
			<?php echo $selected==4?" checked=\"checked\" ":"";?> /> <img
			src="<?php echo KUNENA_URLEMOTIONSPATH ;?>love.gif" alt="" border="0" />

		<input type="radio" name="topic_emoticon" value="5"
			<?php echo $selected==5?" checked=\"checked\" ":"";?> /> <img
			src="<?php echo KUNENA_URLEMOTIONSPATH ;?>grin.gif" alt="" border="0" />

		<input type="radio" name="topic_emoticon" value="6"
			<?php echo $selected==6?" checked=\"checked\" ":"";?> /> <img
			src="<?php echo KUNENA_URLEMOTIONSPATH ;?>shock.gif" alt=""
			border="0" /> <input type="radio" name="topic_emoticon" value="7"
			<?php echo $selected==7?" checked=\"checked\" ":"";?> /> <img
			src="<?php echo KUNENA_URLEMOTIONSPATH ;?>smile.gif" alt=""
			border="0" /></td>
	</tr>
</table>

<?php
    }

    /**
     * This function will write the TextArea
     */
    function fbWriteTextarea($areaname, $html, $width, $height, $useRte, $emoticons, $editmode)
    {
        // well $html is the $message to edit, generally it means in PLAINTEXT @Kunena!
        $kunena_config =& CKunenaConfig::getInstance();
        ?>

<tr class="ksectiontableentry1">
	<?php //if ($kunena_config->enablehelppage) {
		// TODO: Help link need to point by default to a bbcode help page on kunena wiki
		?>
	<!--<td class="kleftcolumn" valign="top"><strong><?php echo CKunenaLink::GetSefHrefLink(KUNENA_LIVEURLREL.'&amp;func=help', @print(_COM_BOARDCODE), NULL , 'follow' , NULL, 'boardcode', 'target=\'_new\''); ?></strong>:
	</td>-->
	<?php //}else { ?>
	<td class="kleftcolumn" valign="top"><strong><?php @print(_COM_BOARDCODE); ?></strong>:
	</td>
	<?php //} ?>
	<td>
	<table border="0" cellspacing="0" cellpadding="0"
		class="k-postbuttonset">
		<tr>
			<td class="k-postbuttons">
			<img class="k-bbcode"
				title="Bold" name="addbbcode0"
				src="<?php echo KUNENA_LIVEUPLOADEDPATH.'/editor/'; ?>text_bold.png"
				alt="B" onclick="bbfontstyle('[b]', '[/b]');"
				onmouseover="javascript:$('helpbox').set('value', '<?php @print(addslashes(_KUNENA_EDITOR_HELPLINE_BOLD));?>')" />
			<img class="k-bbcode" title="Italic" name="addbbcode2"
				src="<?php echo KUNENA_LIVEUPLOADEDPATH.'/editor/'; ?>text_italic.png"
				alt="I" onclick="bbfontstyle('[i]', '[/i]');"
				onmouseover="javascript:$('helpbox').set('value', '<?php @print(addslashes(_KUNENA_EDITOR_HELPLINE_ITALIC));?>')" />
			<img class="k-bbcode" title="Underline" name="addbbcode4"
				src="<?php echo KUNENA_LIVEUPLOADEDPATH.'/editor/'; ?>text_underline.png"
				alt="U" onclick="bbfontstyle('[u]', '[/u]');"
				onmouseover="javascript:$('helpbox').set('value', '<?php @print(addslashes(_KUNENA_EDITOR_HELPLINE_UNDERL));?>')" />
			<img class="k-bbcode" title="Strike through" name="addbbcode4"
				src="<?php echo KUNENA_LIVEUPLOADEDPATH.'/editor/'; ?>text_strike.png"
				alt="S" onclick="bbfontstyle('[strike]', '[/strike]');"
				onmouseover="javascript:$('helpbox').set('value', '<?php @print(addslashes(_KUNENA_EDITOR_HELPLINE_STRIKE));?>')" />
			<img class="k-bbcode" title="Subscript" name="addbbcode4"
				src="<?php echo KUNENA_LIVEUPLOADEDPATH.'/editor/'; ?>text_sub.png"
				alt="Sub" onclick="bbfontstyle('[sub]', '[/sub]');"
				onmouseover="javascript:$('helpbox').set('value', '<?php @print(addslashes(_KUNENA_EDITOR_HELPLINE_SUB));?>')" />
			<img class="k-bbcode" title="Supperscript" name="addbbcode4"
				src="<?php echo KUNENA_LIVEUPLOADEDPATH.'/editor/'; ?>text_sup.png"
				alt="Sup" onclick="bbfontstyle('[sup]', '[/sup]');"
				onmouseover="javascript:$('helpbox').set('value', '<?php @print(addslashes(_KUNENA_EDITOR_HELPLINE_SUP));?>')" />
			<img class="k-bbcode" name="addbbcode62"
				src="<?php echo KUNENA_LIVEUPLOADEDPATH.'/editor/'; ?>text_smallcaps.png"
				alt="<?php @print(_SMILE_SIZE); ?>"
				onclick="bbfontstyle('[size=' + document.postform.addbbcode22.options[document.postform.addbbcode22.selectedIndex].value + ']', '[/size]');"
				onmouseover="javascript:$('helpbox').set('value', '<?php @print(addslashes(_KUNENA_EDITOR_HELPLINE_FONTSIZE));?>')" />
			<select id="k-bbcode_size" class="kslcbox" name="addbbcode22"
				onmouseover="javascript:$('helpbox').set('value', '<?php @print(addslashes(_KUNENA_EDITOR_HELPLINE_FONTSIZESELECTION));?>')">
				<option value="1"><?php @print(_SIZE_VSMALL); ?></option>
				<option value="2"><?php @print(_SIZE_SMALL); ?></option>
				<option value="3" selected="selected"><?php @print(_SIZE_NORMAL); ?></option>
				<option value="4"><?php @print(_SIZE_BIG); ?></option>
				<option value="5"><?php @print(_SIZE_VBIG); ?></option>
			</select> <img id="ueberschrift" class="k-bbcode" name="addbbcode20"
				src="<?php echo KUNENA_LIVEUPLOADEDPATH.'/editor/'; ?>color_swatch.png"
				alt="<?php @print(_SMILE_COLOUR); ?>"
				onclick="javascript:change_palette();"
				onmouseover="javascript:$('helpbox').set('value', '<?php @print(addslashes(_KUNENA_EDITOR_HELPLINE_COLOR));?>')" />
			<?php if ($kunena_config->showspoilertag) {?> <img class="k-bbcode"
				name="addbbcode40"
				src="<?php echo KUNENA_LIVEUPLOADEDPATH.'/editor/'; ?>spoiler.png"
				alt="Spoiler" onclick="bbfontstyle('[spoiler]', '[/spoiler]')"
				onmouseover="javascript:$('helpbox').set('value', '<?php @print(addslashes(_KUNENA_EDITOR_HELPLINE_SPOILER));?>')" />
			<?php } ?> <img class="k-bbcode" name="addbbcode24"
				src="<?php echo KUNENA_LIVEUPLOADEDPATH.'/editor/'; ?>group_key.png"
				alt="Hide" onclick="bbfontstyle('[hide]', '[/hide]');"
				onmouseover="javascript:$('helpbox').set('value', '<?php @print(addslashes(_KUNENA_EDITOR_HELPLINE_HIDE));?>')" />
			<img class="k-bbcode" alt=""
				src="<?php echo KUNENA_LIVEUPLOADEDPATH.'/editor/'; ?>spacer.png"
				style="cursor: auto;" /> <img class="k-bbcode" name="addbbcode10"
				src="<?php echo KUNENA_LIVEUPLOADEDPATH.'/editor/'; ?>text_list_bullets.png"
				alt="ul" onclick="bbfontstyle('[ul]', '[/ul]');"
				onmouseover="javascript:$('helpbox').set('value', '<?php @print(addslashes(_KUNENA_EDITOR_HELPLINE_UL));?>')" />
			<img class="k-bbcode" name="addbbcode12"
				src="<?php echo KUNENA_LIVEUPLOADEDPATH.'/editor/'; ?>text_list_numbers.png"
				alt="ol" onclick="bbfontstyle('[ol]', '[/ol]');"
				onmouseover="javascript:$('helpbox').set('value', '<?php @print(addslashes(_KUNENA_EDITOR_HELPLINE_OL));?>')" />
			<img class="k-bbcode" name="addbbcode18"
				src="<?php echo KUNENA_LIVEUPLOADEDPATH.'/editor/'; ?>text_list_none.png"
				alt="li" onclick="bbfontstyle('[li]', '[/li]');"
				onmouseover="javascript:$('helpbox').set('value', '<?php @print(addslashes(_KUNENA_EDITOR_HELPLINE_LI));?>')" />
			<img class="k-bbcode" name="addbbcode4"
				src="<?php echo KUNENA_LIVEUPLOADEDPATH.'/editor/'; ?>text_align_left.png"
				alt="left" onclick="bbfontstyle('[left]', '[/left]');"
				onmouseover="javascript:$('helpbox').set('value', '<?php @print(addslashes(_KUNENA_EDITOR_HELPLINE_ALIGN_LEFT));?>')" />
			<img class="k-bbcode" name="addbbcode4"
				src="<?php echo KUNENA_LIVEUPLOADEDPATH.'/editor/'; ?>text_align_center.png"
				alt="center" onclick="bbfontstyle('[center]', '[/center]');"
				onmouseover="javascript:$('helpbox').set('value', '<?php @print(addslashes(_KUNENA_EDITOR_HELPLINE_ALIGN_CENTER));?>')" />
			<img class="k-bbcode" name="addbbcode4"
				src="<?php echo KUNENA_LIVEUPLOADEDPATH.'/editor/'; ?>text_align_right.png"
				alt="right" onclick="bbfontstyle('[right]', '[/right]');"
				onmouseover="javascript:$('helpbox').set('value', '<?php @print(addslashes(_KUNENA_EDITOR_HELPLINE_ALIGN_RIGHT));?>')" />
			<img class="k-bbcode" alt=""
				src="<?php echo KUNENA_LIVEUPLOADEDPATH.'/editor/'; ?>spacer.png"
				style="cursor: auto;" /> <img class="k-bbcode" name="addbbcode6"
				src="<?php echo KUNENA_LIVEUPLOADEDPATH.'/editor/'; ?>comment.png"
				alt="Quote" onclick="bbfontstyle('[quote]', '[/quote]');"
				onmouseover="javascript:$('helpbox').set('value', '<?php @print(addslashes(_KUNENA_EDITOR_HELPLINE_QUOTE));?>')" />
			<img class="k-bbcode" name="addbbcode8"
				src="<?php echo KUNENA_LIVEUPLOADEDPATH.'/editor/'; ?>code.png"
				alt="Code" onclick="bbfontstyle('[code]', '[/code]');"
				onmouseover="javascript:$('helpbox').set('value', '<?php @print(addslashes(_KUNENA_EDITOR_HELPLINE_CODE));?>')" />
			<img class="k-bbcode" alt=""
				src="<?php echo KUNENA_LIVEUPLOADEDPATH.'/editor/'; ?>spacer.png"
				style="cursor: auto;" /> <img class="k-bbcode" name="addbbcode14"
				src="<?php echo KUNENA_LIVEUPLOADEDPATH.'/editor/'; ?>picture_link.png"
				alt="Img" onclick="javascript:dE('image');"
				onmouseover="javascript:$('helpbox').set('value', '<?php @print(addslashes(_KUNENA_EDITOR_HELPLINE_IMAGELINK));?>')" />
			<img class="k-bbcode" name="addbbcode16"
				src="<?php echo KUNENA_LIVEUPLOADEDPATH.'/editor/'; ?>link_url.png"
				alt="URL" onclick="javascript:dE('link');"
				onmouseover="javascript:$('helpbox').set('value', '<?php @print(addslashes(_KUNENA_EDITOR_HELPLINE_LINK));?>')" />
			<?php if ($kunena_config->showebaytag) {?> <img class="k-bbcode"
				name="addbbcode20"
				src="<?php echo KUNENA_LIVEUPLOADEDPATH.'/editor/'; ?>ebay.png"
				alt="Ebay" onclick="bbfontstyle('[ebay]', '[/ebay]')"
				onmouseover="javascript:$('helpbox').set('value', '<?php @print(addslashes(_KUNENA_EDITOR_HELPLINE_EBAY));?>')" />
			<?php } ?> <?php if ($kunena_config->showvideotag) {?> &nbsp;<span
				style="white-space: nowrap;"><img class="k-bbcode" alt="video"
				src="<?php echo KUNENA_LIVEUPLOADEDPATH.'/editor/'; ?>film.png"
				onmouseover="javascript:$('helpbox').set('value', '<?php @print(addslashes(_KUNENA_EDITOR_HELPLINE_VIDEO));?>')"
				onclick="javascript:dE('video');" /></span> <?php } ?></td>
		</tr>
		<!-- Start extendable fields -->
		<tr>
			<td class="k-postbuttons">
			<div id="k-color_palette" style="display: none;"><script
				type="text/javascript">
								function change_palette() {dE('k-color_palette');}
								colorPalette('h', '4%', '15px');
							</script></div>

			<div id="link" style="display: none;"><?php @print(_KUNENA_EDITOR_LINK_URL); ?><input
				name="url" type="text" size="40" maxlength="100" value="http://"
				onmouseover="javascript:$('helpbox').set('value', '<?php @print(addslashes(_KUNENA_EDITOR_HELPLINE_LINKURL));?>')" />
			<?php @print(_KUNENA_EDITOR_LINK_TEXT); ?><input name="text2"
				type="text" size="30" maxlength="100"
				onmouseover="javascript:$('helpbox').set('value', '<?php @print(addslashes(_KUNENA_EDITOR_HELPLINE_LINKTEXT));?>')" />
			<input type="button" name="Link" accesskey="w"
				value="<?php @print(_KUNENA_EDITOR_LINK_INSERT); ?>"
				onclick="bbfontstyle('[url=' + this.form.url.value + ']'+ this.form.text2.value,'[/url]')"
				onmouseover="javascript:$('helpbox').set('value', '<?php @print(addslashes(_KUNENA_EDITOR_HELPLINE_LINKAPPLY));?>')" />
			</div>

			<div id="image" style="display: none;"><?php @print(_KUNENA_EDITOR_IMAGE_SIZE); ?><input
				name="size" type="text" size="10" maxlength="10"
				onmouseover="javascript:$('helpbox').set('value', '<?php @print(addslashes(_KUNENA_EDITOR_HELPLINE_IMAGELINKSIZE));?>')" />
			<?php @print(_KUNENA_EDITOR_IMAGE_URL); ?><input name="url2"
				type="text" size="40" maxlength="250" value="http://"
				onmouseover="javascript:$('helpbox').set('value', '<?php @print(addslashes(_KUNENA_EDITOR_HELPLINE_IMAGELINKURL));?>')" />
			<input type="button" name="Link" accesskey="p"
				value="<?php @print(_KUNENA_EDITOR_IMAGE_INSERT); ?>"
				onclick="check_image()"
				onmouseover="javascript:$('helpbox').set('value', '<?php @print(addslashes(_KUNENA_EDITOR_HELPLINE_IMAGELINKAPPLY));?>')" />
			<script type="text/javascript">
								function check_image() {
									if (document.postform.size.value == "") {
										bbfontstyle('[img]'+ document.postform.url2.value,'[/img]');
									} else {
										bbfontstyle('[img size=' + document.postform.size.value + ']'+ document.postform.url2.value,'[/img]');
									}
								}
							</script></div>

			<div id="video" style="display: none;"><?php @print(_KUNENA_EDITOR_VIDEO_SIZE); ?><input
				name="videosize" type="text" size="5" maxlength="5"
				onmouseover="javascript:$('helpbox').set('value', '<?php @print(addslashes(_KUNENA_EDITOR_HELPLINE_VIDEOSIZE));?>')" />
			<?php @print(_KUNENA_EDITOR_VIDEO_WIDTH); ?><input name="videowidth"
				type="text" size="5" maxlength="5"
				onmouseover="javascript:$('helpbox').set('value', '<?php @print(addslashes(_KUNENA_EDITOR_HELPLINE_VIDEOWIDTH));?>')" />
			<?php @print(_KUNENA_EDITOR_VIDEO_HEIGHT); ?><input
				name="videoheight" type="text" size="5" maxlength="5"
				onmouseover="javascript:$('helpbox').set('value', '<?php @print(addslashes(_KUNENA_EDITOR_HELPLINE_VIDEOHEIGHT));?>')" />
			<br />
			<?php @print(_KUNENA_EDITOR_VIDEO_PROVIDER); ?> <select
				name="kvid_code1" class="kbutton"
				onmouseover="javascript:$('helpbox').set('value', '<?php @print(addslashes(_KUNENA_EDITOR_HELPLINE_VIDEOPROVIDER));?>')">
				<?php
								$vid_provider = array('','AnimeEpisodes','Biku','Bofunk','Break','Clip.vn','Clipfish','Clipshack','Collegehumor','Current',
									'DailyMotion','DivX,divx]http://','DownloadFestival','Flash,flash]http://','FlashVars,flashvars param=]http://','Fliptrack',
									'Fliqz','Gametrailers','Gamevideos','Glumbert','GMX','Google','GooglyFoogly','iFilm','Jumpcut','Kewego','LiveLeak','LiveVideo',
									'MediaPlayer,mediaplayer]http://','MegaVideo','Metacafe','Mofile','Multiply','MySpace','MyVideo','QuickTime,quicktime]http://','Quxiu',
									'RealPlayer,realplayer]http://','Revver','RuTube','Sapo','Sevenload','Sharkle','Spikedhumor','Stickam','Streetfire','StupidVideos','Toufee','Tudou',
									'Unf-Unf','Uume','Veoh','VideoclipsDump','Videojug','VideoTube','Vidiac','VidiLife','Vimeo','WangYou','WEB.DE','Wideo.fr','YouKu','YouTube');
								foreach($vid_provider as $vid_type) {
									$vid_type = explode(',', $vid_type);
									echo '<option value = "'.(!empty($vid_type[1])?$vid_type[1]:JString::strtolower($vid_type[0]).'').'">'.$vid_type[0].'</option>';
								}
								?>
			</select> <?php @print(_KUNENA_EDITOR_VIDEO_ID); ?><input name="videoid"
				type="text" size="11" maxlength="11"
				onmouseover="javascript:$('helpbox').set('value', '<?php @print(addslashes(_KUNENA_EDITOR_HELPLINE_VIDEOID));?>')" />
			<input type="button" name="Video" accesskey="p"
				value="<?php @print(_KUNENA_EDITOR_IMAGE_INSERT); ?>"
				onclick="check_video('video1')"
				onmouseover="javascript:$('helpbox').set('value', '<?php @print(addslashes(_KUNENA_EDITOR_HELPLINE_VIDEOAPPLY1));?>')" /><br />
			<?php @print(_KUNENA_EDITOR_VIDEO_URL); ?><input name="videourl"
				type="text" size="30" maxlength="250" value="http://"
				onmouseover="javascript:$('helpbox').set('value', '<?php @print(addslashes(_KUNENA_EDITOR_HELPLINE_VIDEOURL));?>')" />
			<input type="button" name="Video" accesskey="p"
				value="<?php @print(_KUNENA_EDITOR_IMAGE_INSERT); ?>"
				onclick="check_video('video2')"
				onmouseover="javascript:$('helpbox').set('value', '<?php @print(addslashes(_KUNENA_EDITOR_HELPLINE_VIDEOAPPLY2));?>')" />
			<script type="text/javascript">
								function check_video(art) {
									var video;
									if (document.postform.videosize.value != "") {video = " size=" + document.postform.videosize.value;}
									else {video="";}
									if (document.postform.videowidth.value != "") {video = video + " width=" + document.postform.videowidth.value;}
									if (document.postform.videoheight.value != "") {video = video + " height=" + document.postform.videoheight.value;}
									if (art=='video1'){
									if (document.postform.fb_vid_code1.value != "") {video = video + " type=" + document.postform.fb_vid_code1.options[document.postform.fb_vid_code1.selectedIndex].value;}
									bbfontstyle('[video' + video + ']'+ document.postform.videoid.value,'[/video]');}
									else {bbfontstyle('[video' + video + ']'+ document.postform.videourl.value,'[/video]');}
								}
							</script></div>

			<div id="smilie"><?php
							$kunena_db = &JFactory::getDBO();
							$kunena_db->setQuery("SELECT code, location, emoticonbar FROM #__fb_smileys ORDER BY id");
								$set = $kunena_db->loadAssocList();
								check_dberror("Unable to fetch smileys.");
								$this->kunena_emoticons_rowset = array ();
								foreach ($set as $smilies) {
									$key_exists = false;
									foreach ($this->kunena_emoticons_rowset as $check) { //checks if the smiley (location) already exists with another code
									if ($check['location'] == $smilies['location']) {$key_exists = true; }
								}
								if ($key_exists == false) {
									$this->kunena_emoticons_rowset[] = array (
										'code' => $smilies['code'],
										'location' => $smilies['location'],
										'emoticonbar' => $smilies['emoticonbar'] );
									}
								}
								reset ($this->kunena_emoticons_rowset);
								foreach ($this->kunena_emoticons_rowset as $data) {
								echo '<img class="btnImage" src="' . KUNENA_URLEMOTIONSPATH . $data['location'] . '" border="0" alt="' . $data['code'] . ' " title="' . $data['code'] . ' " onclick="bbfontstyle(\' '
									. $data['code'] . ' \',\'\')" style="cursor:pointer"/>' . "\n";
						}
					?>
			</div>

			</td>
		</tr>
		<!-- end of extendable fiels -->
		<tr>
			<td class="kposthint"><input type="text" name="helpbox" id="helpbox"
				size="45" class="kinputbox" maxlength="100"
				value="<?php @print(_KUNENA_EDITOR_HELPLINE_HINT);?>" /></td>
		</tr>
	</table>
	</td>
</tr>

<tr class="ksectiontableentry2">
	<td valign="top" class="kleftcolumn"><strong><?php @print(_MESSAGE); ?></strong>:<br />
	<b onclick="size_messagebox(100);" style="cursor: pointer">(+)</b><b>
	/ </b><b onclick="size_messagebox(-100);" style="cursor: pointer">(-)</b> <?php
                if ($emoticons != 1)
                {
                ?>



	<?php
                }
                ?></td>

	<td valign="top"><textarea cols="60" rows="6" class="ktxtarea"
		name="<?php echo $areaname;?>" id="<?php echo $areaname;?>"><?php echo kunena_htmlspecialchars($html, ENT_QUOTES); ?></textarea>
	<?php
if ($editmode) {
    // Moderator edit area
     ?>
	<fieldset><legend><?php @print(_KUNENA_EDITING_REASON)?></legend>
	<input name="modified_reason" size="40" maxlength="200" type="text" /><br />

	</fieldset>
	<?php
}
?></td>
</tr>

<?php
    } // fbWriteTextarea()

    function purify($text)
    {
        $text = preg_replace("'<script[^>]*>.*?</script>'si", "", $text);
        $text = preg_replace('/<a\s+.*?href="([^"]+)"[^>]*>([^<]+)<\/a>/is', '\2 (\1)', $text);
        $text = preg_replace('/<!--.+?-->/', '', $text);
        $text = preg_replace('/{.+?}/', '', $text);
        $text = preg_replace('/&nbsp;/', ' ', $text);
        $text = preg_replace('/&amp;/', ' ', $text);
        $text = preg_replace('/&quot;/', ' ', $text);
        //smilies
        $text = preg_replace('/:laugh:/', ':-D', $text);
        $text = preg_replace('/:angry:/', ' ', $text);
        $text = preg_replace('/:mad:/', ' ', $text);
        $text = preg_replace('/:unsure:/', ' ', $text);
        $text = preg_replace('/:ohmy:/', ':-O', $text);
        $text = preg_replace('/:blink:/', ' ', $text);
        $text = preg_replace('/:huh:/', ' ', $text);
        $text = preg_replace('/:dry:/', ' ', $text);
        $text = preg_replace('/:lol:/', ':-))', $text);
        $text = preg_replace('/:money:/', ' ', $text);
        $text = preg_replace('/:rolleyes:/', ' ', $text);
        $text = preg_replace('/:woohoo:/', ' ', $text);
        $text = preg_replace('/:cheer:/', ' ', $text);
        $text = preg_replace('/:silly:/', ' ', $text);
        $text = preg_replace('/:blush:/', ' ', $text);
        $text = preg_replace('/:kiss:/', ' ', $text);
        $text = preg_replace('/:side:/', ' ', $text);
        $text = preg_replace('/:evil:/', ' ', $text);
        $text = preg_replace('/:whistle:/', ' ', $text);
        $text = preg_replace('/:pinch:/', ' ', $text);
        //bbcode
        $text = preg_replace('/\[hide==([1-3])\](.*?)\[\/hide\]/s', '', $text);
        $text = preg_replace('/(\[b\])/', ' ', $text);
        $text = preg_replace('/(\[\/b\])/', ' ', $text);
        $text = preg_replace('/(\[s\])/', ' ', $text);
        $text = preg_replace('/(\[\/s\])/', ' ', $text);
        $text = preg_replace('/(\[i\])/', ' ', $text);
        $text = preg_replace('/(\[\/i\])/', ' ', $text);
        $text = preg_replace('/(\[u\])/', ' ', $text);
        $text = preg_replace('/(\[\/u\])/', ' ', $text);
        $text = preg_replace('/(\[quote\])/', ' ', $text);
        $text = preg_replace('/(\[\/quote\])/', ' ', $text);
        $text = preg_replace('/(\[strike\])/', ' ', $text);
        $text = preg_replace('/(\[\/strike\])/', ' ', $text);
        $text = preg_replace('/(\[sub\])/', ' ', $text);
        $text = preg_replace('/(\[\/sub\])/', ' ', $text);
        $text = preg_replace('/(\[sup\])/', ' ', $text);
        $text = preg_replace('/(\[\/sup\])/', ' ', $text);
        $text = preg_replace('/(\[left\])/', ' ', $text);
        $text = preg_replace('/(\[\/left\])/', ' ', $text);
        $text = preg_replace('/(\[center\])/', ' ', $text);
        $text = preg_replace('/(\[\/center\])/', ' ', $text);
        $text = preg_replace('/(\[right\])/', ' ', $text);
        $text = preg_replace('/(\[\/right\])/', ' ', $text);
        $text = preg_replace('/(\[code:1\])(.*?)(\[\/code:1\])/', '\\2', $text);
        $text = preg_replace('/(\[ul\])(.*?)(\[\/ul\])/s', '\\2', $text);
        $text = preg_replace('/(\[li\])(.*?)(\[\/li\])/s', '\\2', $text);
        $text = preg_replace('/(\[ol\])(.*?)(\[\/ol\])/s', '\\2', $text);
        $text = preg_replace('/\[img size=([0-9][0-9][0-9])\](.*?)\[\/img\]/s', '\\2', $text);
        $text = preg_replace('/\[img size=([0-9][0-9])\](.*?)\[\/img\]/s', '\\2', $text);
        $text = preg_replace('/\[img\](.*?)\[\/img\]/s', '\\1', $text);
        $text = preg_replace('/\[url\](.*?)\[\/url\]/s', '\\1', $text);
        $text = preg_replace('/\[url=(.*?)\](.*?)\[\/url\]/s', '\\2 (\\1)', $text);
        $text = preg_replace('/<A (.*)>(.*)<\/A>/i', '\\2', $text);
        $text = preg_replace('/\[file(.*?)\](.*?)\[\/file\]/s', '\\2', $text);
        $text = preg_replace('/\[hide(.*?)\](.*?)\[\/hide\]/s', ' ', $text);
        $text = preg_replace('/\[spoiler(.*?)\](.*?)\[\/spoiler\]/s', ' ', $text);
        $text = preg_replace('/\[size=([1-7])\](.+?)\[\/size\]/s', '\\2', $text);
        $text = preg_replace('/\[color=(.*?)\](.*?)\[\/color\]/s', '\\2', $text);
        $text = preg_replace('/\[video\](.*?)\[\/video\]/s', '\\1', $text);
        $text = preg_replace('/\[ebay\](.*?)\[\/ebay\]/s', '\\1', $text);
        $text = preg_replace('#/n#s', ' ', $text);
        $text = strip_tags($text);
        //$text = stripslashes(kunena_htmlspecialchars($text));
        $text = stripslashes($text);
        return ($text);
    } //purify
}
