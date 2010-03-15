<?php

########################################################################
# Extension Manager/Repository config file for ext "templavoila".
#
# Auto generated 15-03-2010 03:54
#
# Manual updates:
# Only the data in the array - everything else is removed by next
# writing. "version" and "dependencies" must not be touched!
########################################################################

$EM_CONF[$_EXTKEY] = array(
	'title' => 'TemplaVoila!',
	'description' => 'Point-and-click, popular and easy template engine for TYPO3. Public free support is provided only through TYPO3 mailing lists! Contact by e-mail for commercial support.',
	'category' => 'misc',
	'shy' => 0,
	'version' => '1.4.2',
	'dependencies' => '',
	'conflicts' => '',
	'priority' => '',
	'loadOrder' => '',
	'module' => 'cm1,cm2,mod1,mod2',
	'state' => 'stable',
	'uploadfolder' => 0,
	'createDirs' => 'uploads/tx_templavoila/',
	'modify_tables' => 'pages,tt_content,be_groups',
	'clearcacheonload' => 1,
	'lockType' => 'L',
	'author' => 'Dmitry Dulepov',
	'author_email' => 'dmitry@typo3.org',
	'author_company' => 'ACCIO SIA',
	'CGLcompliance' => '',
	'CGLcompliance_note' => '',
	'constraints' => array(
		'depends' => array(
			'php' => '5.1.0-0.0.0',
			'typo3' => '4.1.0-0.0.0',
			'static_info_tables' => '',
			'cms' => '',
			'lang' => '',
		),
		'conflicts' => array(
			'kb_tv_clipboard' => '-0.1.0',
			'templavoila_cw' => '-0.1.0',
			'eu_tradvoila' => '-0.0.2',
			'me_templavoilalayout' => '',
			'me_templavoilalayout2' => '',
		),
		'suggests' => array(
		),
	),
	'_md5_values_when_last_written' => 'a:260:{s:9:"ChangeLog";s:4:"7e5e";s:31:"class.tx_templavoila_access.php";s:4:"61f0";s:28:"class.tx_templavoila_api.php";s:4:"db1e";s:28:"class.tx_templavoila_cm1.php";s:4:"ee77";s:35:"class.tx_templavoila_extdeveval.php";s:4:"50c9";s:51:"class.tx_templavoila_handlestaticdatastructures.php";s:4:"790c";s:35:"class.tx_templavoila_htmlmarkup.php";s:4:"e4a4";s:30:"class.tx_templavoila_rules.php";s:4:"8b75";s:32:"class.tx_templavoila_tcemain.php";s:4:"52e0";s:33:"class.tx_templavoila_unusedce.php";s:4:"047b";s:31:"class.tx_templavoila_usedce.php";s:4:"4a55";s:35:"class.tx_templavoila_xmlrelhndl.php";s:4:"9aaa";s:16:"ext_autoload.php";s:4:"9fb3";s:21:"ext_conf_template.txt";s:4:"4106";s:12:"ext_icon.gif";s:4:"cb59";s:17:"ext_localconf.php";s:4:"de35";s:14:"ext_tables.php";s:4:"d7c8";s:14:"ext_tables.sql";s:4:"6546";s:24:"ext_typoscript_setup.txt";s:4:"9995";s:11:"icon_ds.gif";s:4:"0b15";s:14:"icon_ds__x.gif";s:4:"9991";s:15:"icon_fce_ce.png";s:4:"94b0";s:21:"icon_pagetemplate.gif";s:4:"ac82";s:11:"icon_to.gif";s:4:"de63";s:14:"icon_to__x.gif";s:4:"46d4";s:13:"locallang.xml";s:4:"acc6";s:20:"locallang_access.xml";s:4:"7f32";s:22:"locallang_csh_begr.xml";s:4:"e42c";s:20:"locallang_csh_ds.xml";s:4:"f2da";s:23:"locallang_csh_intro.xml";s:4:"a0a5";s:24:"locallang_csh_module.xml";s:4:"5128";s:23:"locallang_csh_pages.xml";s:4:"3096";s:20:"locallang_csh_pm.xml";s:4:"18c2";s:20:"locallang_csh_to.xml";s:4:"6469";s:21:"locallang_csh_ttc.xml";s:4:"e230";s:16:"locallang_db.xml";s:4:"febf";s:7:"tca.php";s:4:"1be9";s:34:"classes/class.tx_staticdstools.php";s:4:"ca0c";s:36:"classes/class.tx_templavoila_div.php";s:4:"2098";s:56:"classes/preview/class.tx_templavoila_preview_default.php";s:4:"67bd";s:61:"classes/preview/class.tx_templavoila_preview_type_bullets.php";s:4:"9d0f";s:60:"classes/preview/class.tx_templavoila_preview_type_header.php";s:4:"e9b2";s:58:"classes/preview/class.tx_templavoila_preview_type_html.php";s:4:"19a2";s:59:"classes/preview/class.tx_templavoila_preview_type_image.php";s:4:"6b94";s:58:"classes/preview/class.tx_templavoila_preview_type_list.php";s:4:"772d";s:58:"classes/preview/class.tx_templavoila_preview_type_menu.php";s:4:"018d";s:64:"classes/preview/class.tx_templavoila_preview_type_multimedia.php";s:4:"9c0a";s:58:"classes/preview/class.tx_templavoila_preview_type_null.php";s:4:"c0a7";s:58:"classes/preview/class.tx_templavoila_preview_type_text.php";s:4:"55ed";s:61:"classes/preview/class.tx_templavoila_preview_type_textpic.php";s:4:"9571";s:61:"classes/preview/class.tx_templavoila_preview_type_uploads.php";s:4:"a619";s:39:"cm1/class.tx_templavoila_cm1_dsedit.php";s:4:"a320";s:39:"cm1/class.tx_templavoila_cm1_etypes.php";s:4:"c5cc";s:13:"cm1/clear.gif";s:4:"cc11";s:15:"cm1/cm_icon.gif";s:4:"cb59";s:24:"cm1/cm_icon_activate.gif";s:4:"cb59";s:12:"cm1/conf.php";s:4:"66ed";s:13:"cm1/index.php";s:4:"e06c";s:15:"cm1/item_at.gif";s:4:"8362";s:15:"cm1/item_co.gif";s:4:"3a12";s:15:"cm1/item_el.gif";s:4:"f8d6";s:15:"cm1/item_no.gif";s:4:"6af0";s:15:"cm1/item_sc.gif";s:4:"e42d";s:17:"cm1/locallang.xml";s:4:"bbf3";s:14:"cm1/styles.css";s:4:"0a14";s:13:"cm2/clear.gif";s:4:"cc11";s:15:"cm2/cm_icon.gif";s:4:"cb59";s:12:"cm2/conf.php";s:4:"2f07";s:13:"cm2/index.php";s:4:"5624";s:17:"cm2/locallang.xml";s:4:"a8bb";s:19:"cshimages/intro.png";s:4:"018d";s:12:"doc/TODO.txt";s:4:"e9a5";s:14:"doc/manual.sxw";s:4:"0c44";s:61:"func_wizards/class.tx_templavoila_referenceelementswizard.php";s:4:"986a";s:15:"html_tags/a.gif";s:4:"b791";s:18:"html_tags/abbr.gif";s:4:"9177";s:21:"html_tags/acronym.gif";s:4:"1a7c";s:21:"html_tags/address.gif";s:4:"f062";s:20:"html_tags/applet.gif";s:4:"75e3";s:18:"html_tags/area.gif";s:4:"5aac";s:21:"html_tags/article.gif";s:4:"d87b";s:19:"html_tags/aside.gif";s:4:"d1b5";s:19:"html_tags/audio.gif";s:4:"a6df";s:15:"html_tags/b.gif";s:4:"61e9";s:18:"html_tags/base.gif";s:4:"87aa";s:22:"html_tags/basefont.gif";s:4:"193a";s:17:"html_tags/bdo.gif";s:4:"a575";s:17:"html_tags/big.gif";s:4:"82cf";s:24:"html_tags/blockquote.gif";s:4:"ffbb";s:18:"html_tags/body.gif";s:4:"7552";s:16:"html_tags/br.gif";s:4:"4c00";s:20:"html_tags/button.gif";s:4:"fa64";s:20:"html_tags/canvas.gif";s:4:"dbc5";s:21:"html_tags/caption.gif";s:4:"0463";s:20:"html_tags/center.gif";s:4:"2229";s:18:"html_tags/cite.gif";s:4:"f328";s:18:"html_tags/code.gif";s:4:"2a88";s:17:"html_tags/col.gif";s:4:"b75b";s:22:"html_tags/colgroup.gif";s:4:"556c";s:21:"html_tags/command.gif";s:4:"9da3";s:22:"html_tags/datagrid.gif";s:4:"1b8a";s:22:"html_tags/datalist.gif";s:4:"31bb";s:26:"html_tags/datatemplate.gif";s:4:"c5ab";s:16:"html_tags/dd.gif";s:4:"ab45";s:17:"html_tags/del.gif";s:4:"9718";s:21:"html_tags/details.gif";s:4:"fd47";s:17:"html_tags/dfn.gif";s:4:"cfba";s:20:"html_tags/dialog.gif";s:4:"60ff";s:17:"html_tags/dir.gif";s:4:"5583";s:17:"html_tags/div.gif";s:4:"27f2";s:16:"html_tags/dl.gif";s:4:"be68";s:16:"html_tags/dt.gif";s:4:"59f5";s:16:"html_tags/em.gif";s:4:"24ad";s:19:"html_tags/embed.gif";s:4:"f9e3";s:26:"html_tags/event-source.gif";s:4:"70ed";s:22:"html_tags/fieldset.gif";s:4:"3db2";s:20:"html_tags/figure.gif";s:4:"8450";s:18:"html_tags/font.gif";s:4:"f335";s:20:"html_tags/footer.gif";s:4:"982e";s:18:"html_tags/form.gif";s:4:"29e0";s:19:"html_tags/frame.gif";s:4:"9793";s:22:"html_tags/frameset.gif";s:4:"5290";s:16:"html_tags/h1.gif";s:4:"65ad";s:16:"html_tags/h2.gif";s:4:"fd3c";s:16:"html_tags/h3.gif";s:4:"8b5b";s:16:"html_tags/h4.gif";s:4:"ad53";s:16:"html_tags/h5.gif";s:4:"5fd1";s:16:"html_tags/h6.gif";s:4:"bef1";s:18:"html_tags/head.gif";s:4:"1cec";s:20:"html_tags/header.gif";s:4:"c6af";s:16:"html_tags/hr.gif";s:4:"8e61";s:18:"html_tags/html.gif";s:4:"f1af";s:15:"html_tags/i.gif";s:4:"7770";s:20:"html_tags/iframe.gif";s:4:"65d6";s:17:"html_tags/img.gif";s:4:"d3dd";s:19:"html_tags/input.gif";s:4:"e6ff";s:17:"html_tags/ins.gif";s:4:"6fee";s:21:"html_tags/isindex.gif";s:4:"6987";s:17:"html_tags/kbd.gif";s:4:"d377";s:19:"html_tags/label.gif";s:4:"d9e5";s:20:"html_tags/legend.gif";s:4:"71f4";s:16:"html_tags/li.gif";s:4:"231a";s:18:"html_tags/link.gif";s:4:"572f";s:17:"html_tags/map.gif";s:4:"4b9e";s:18:"html_tags/mark.gif";s:4:"991d";s:18:"html_tags/menu.gif";s:4:"f9ca";s:18:"html_tags/meta.gif";s:4:"2497";s:19:"html_tags/meter.gif";s:4:"bf47";s:17:"html_tags/nav.gif";s:4:"eaf6";s:18:"html_tags/nest.gif";s:4:"a4ae";s:22:"html_tags/noframes.gif";s:4:"fcec";s:22:"html_tags/noscript.gif";s:4:"bcda";s:20:"html_tags/object.gif";s:4:"d891";s:16:"html_tags/ol.gif";s:4:"0fa9";s:22:"html_tags/optgroup.gif";s:4:"69de";s:20:"html_tags/option.gif";s:4:"9f39";s:20:"html_tags/output.gif";s:4:"8771";s:15:"html_tags/p.gif";s:4:"2b7a";s:19:"html_tags/param.gif";s:4:"39e0";s:17:"html_tags/pre.gif";s:4:"1ff7";s:22:"html_tags/progress.gif";s:4:"ad23";s:15:"html_tags/q.gif";s:4:"d168";s:18:"html_tags/rule.gif";s:4:"7c73";s:15:"html_tags/s.gif";s:4:"38de";s:18:"html_tags/samp.gif";s:4:"9e25";s:20:"html_tags/script.gif";s:4:"004b";s:21:"html_tags/section.gif";s:4:"3061";s:20:"html_tags/select.gif";s:4:"4ce3";s:19:"html_tags/small.gif";s:4:"44aa";s:20:"html_tags/source.gif";s:4:"e5cf";s:18:"html_tags/span.gif";s:4:"725b";s:20:"html_tags/strike.gif";s:4:"29b9";s:20:"html_tags/strong.gif";s:4:"c949";s:19:"html_tags/style.gif";s:4:"dbfe";s:17:"html_tags/sub.gif";s:4:"0acc";s:17:"html_tags/sup.gif";s:4:"f6df";s:19:"html_tags/table.gif";s:4:"0ce1";s:18:"html_tags/tags.txt";s:4:"d6a9";s:19:"html_tags/tbody.gif";s:4:"f87c";s:16:"html_tags/td.gif";s:4:"d6b0";s:28:"html_tags/template_newtv.psd";s:4:"d887";s:22:"html_tags/textarea.gif";s:4:"0c9e";s:19:"html_tags/tfoot.gif";s:4:"c998";s:16:"html_tags/th.gif";s:4:"f300";s:19:"html_tags/thead.gif";s:4:"9b33";s:18:"html_tags/time.gif";s:4:"2df1";s:19:"html_tags/title.gif";s:4:"0d07";s:16:"html_tags/tr.gif";s:4:"c789";s:16:"html_tags/tt.gif";s:4:"3081";s:15:"html_tags/u.gif";s:4:"3cae";s:16:"html_tags/ul.gif";s:4:"2cfb";s:17:"html_tags/var.gif";s:4:"d797";s:19:"html_tags/video.gif";s:4:"4cfe";s:17:"html_tags/xmp.gif";s:4:"d212";s:44:"mod1/class.tx_templavoila_mod1_clipboard.php";s:4:"0019";s:47:"mod1/class.tx_templavoila_mod1_localization.php";s:4:"60cc";s:45:"mod1/class.tx_templavoila_mod1_recordlist.php";s:4:"1796";s:42:"mod1/class.tx_templavoila_mod1_records.php";s:4:"fe05";s:42:"mod1/class.tx_templavoila_mod1_sidebar.php";s:4:"6928";s:50:"mod1/class.tx_templavoila_mod1_specialdoktypes.php";s:4:"4cc8";s:42:"mod1/class.tx_templavoila_mod1_wizards.php";s:4:"5fa9";s:14:"mod1/clear.gif";s:4:"cc11";s:25:"mod1/clip_pastesubref.gif";s:4:"9260";s:17:"mod1/clip_ref.gif";s:4:"6812";s:19:"mod1/clip_ref_h.gif";s:4:"ac5e";s:13:"mod1/conf.php";s:4:"6cb9";s:26:"mod1/db_new_content_el.php";s:4:"bf33";s:20:"mod1/dragdrop-min.js";s:4:"ae52";s:16:"mod1/dragdrop.js";s:4:"71f5";s:17:"mod1/greenled.gif";s:4:"3431";s:14:"mod1/index.php";s:4:"691b";s:18:"mod1/locallang.xml";s:4:"b259";s:36:"mod1/locallang_db_new_content_el.xml";s:4:"d587";s:22:"mod1/locallang_mod.xml";s:4:"4fe6";s:22:"mod1/makelocalcopy.gif";s:4:"ce99";s:19:"mod1/moduleicon.gif";s:4:"9620";s:19:"mod1/pagemodule.css";s:4:"f580";s:15:"mod1/redled.gif";s:4:"9933";s:15:"mod1/unlink.png";s:4:"c57d";s:14:"mod2/clear.gif";s:4:"cc11";s:13:"mod2/conf.php";s:4:"d1c9";s:14:"mod2/index.php";s:4:"9702";s:18:"mod2/locallang.xml";s:4:"30c1";s:22:"mod2/locallang_mod.xml";s:4:"2b94";s:26:"mod2/mapbody_animation.gif";s:4:"f085";s:26:"mod2/maphead_animation.gif";s:4:"2208";s:19:"mod2/moduleicon.gif";s:4:"2f0c";s:20:"mod2/new_tv_site.xml";s:4:"8547";s:15:"mod2/styles.css";s:4:"2105";s:48:"newcewizard/class.tx_templavoila_newcewizard.php";s:4:"fbe7";s:20:"newcewizard/conf.php";s:4:"16dc";s:25:"newcewizard/locallang.xml";s:4:"2059";s:35:"newcewizard/images/add_favorite.png";s:4:"c8ca";s:67:"newcewizard/model/class.tx_templavoila_contentelementdescriptor.php";s:4:"9169";s:49:"newcewizard/tabs/class.tx_templavoila_basetab.php";s:4:"92e3";s:54:"newcewizard/tabs/class.tx_templavoila_favoritestab.php";s:4:"0eec";s:48:"newcewizard/tabs/class.tx_templavoila_fcetab.php";s:4:"79b7";s:50:"newcewizard/tabs/class.tx_templavoila_formstab.php";s:4:"5533";s:49:"newcewizard/tabs/class.tx_templavoila_menutab.php";s:4:"2810";s:52:"newcewizard/tabs/class.tx_templavoila_pluginstab.php";s:4:"77f1";s:51:"newcewizard/tabs/class.tx_templavoila_recenttab.php";s:4:"abf1";s:61:"newcewizard/tabs/class.tx_templavoila_standardelementstab.php";s:4:"d24b";s:49:"newcewizard/view/class.tx_templavoila_tabview.php";s:4:"6d2c";s:32:"pi1/class.tx_templavoila_pi1.php";s:4:"aa31";s:14:"res1/blank.gif";s:4:"9f3a";s:28:"res1/default_previewicon.gif";s:4:"edf8";s:13:"res1/join.gif";s:4:"86ea";s:19:"res1/joinbottom.gif";s:4:"3822";s:13:"res1/line.gif";s:4:"d3d7";s:31:"res1/language/template_conf.xml";s:4:"6f34";s:37:"tests/tx_templavoila_api_testcase.php";s:4:"6bd7";s:41:"tests/fixtures/fce_2col_datastructure.xml";s:4:"d349";s:37:"tests/fixtures/fce_2col_template.html";s:4:"e6a0";s:42:"tests/fixtures/fce_2col_templateobject.dat";s:4:"18ee";s:43:"tests/fixtures/main_typoscript_template.txt";s:4:"55c3";s:47:"tests/fixtures/page_datastructure_onecolumn.xml";s:4:"1761";s:48:"tests/fixtures/page_datastructure_twocolumns.xml";s:4:"9ebe";s:33:"tests/fixtures/page_template.html";s:4:"54b3";s:48:"tests/fixtures/page_templateobject_onecolumn.dat";s:4:"4c2a";s:49:"tests/fixtures/page_templateobject_twocolumns.dat";s:4:"83a6";}',
);

?>