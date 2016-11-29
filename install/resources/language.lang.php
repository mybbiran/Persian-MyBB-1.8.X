<?php
/**
 * MyBB 1.8 Persian Language Pack
 * Copyright 2014 MyBB Group, All Rights Reserved
 *
 */

/* INSTALL LANGUAGE VARIABLES */
$l['none'] = 'هیچ کدام';
$l['not_installed'] = 'نصب نشده است';
$l['installed'] = 'نصب شده است';
$l['not_writable'] = 'غیر قابل نوشتن است';
$l['writable'] = 'قابل نوشتن است';
$l['done'] = 'انجام شد';
$l['next'] = 'مرحله‌ی بعد';
$l['error'] = 'خطا';
$l['multi_byte'] = 'Multi-Byte';
$l['recheck'] = 'بررسی دوباره';

$l['title'] = 'نصب کننده‌ی MyBB';
$l['welcome'] = 'خوش‌آمدید!';
$l['license_agreement'] = 'توافق‌نامه';
$l['req_check'] = 'بررسی نیازمندی‌ها';
$l['db_config'] = 'پیکربندی بانک اطلاعاتی';
$l['table_creation'] = 'ایجاد‌ جدول‌ها';
$l['data_insertion'] = 'وارد کردن اطلاعات';
$l['theme_install'] = 'نصب پوسته';
$l['board_config'] = 'پیکربندی انجمن';
$l['admin_user'] = 'ایجاد حساب مدیر‌کل';
$l['finish_setup'] = 'پایان نصب';

$l['table_population'] = 'جمع‌بندی جدول‌ها';
$l['theme_installation'] = 'وارد کردن پوسته';
$l['create_admin'] = 'ایجاد حساب کاربری مدیرکل';

$l['already_installed'] = 'MyBB در حال حاضر روی سرور شما نصب است';
$l['mybb_already_installed'] = '<p>به نصب کننده‌ی MyBB خوش‌آمدید! MyBB شناسایی کرد که قبلاً در این محل یک نسخه از MyBB نصب شده است.</p>
<p>لطفاً یکی از گزینه‌های زیر را انتخاب کنید:</p>

<div class="border_wrapper upgrade_note" style="padding: 4px;">
	<h3>نسخه‌ی MyBB مرا به نسخه‌ی MyBB {1} به‌روز‌رسانی کن<span style="font-size: 80%; color: maroon;">(توصیه می‌شود)</span></h3>
	<p>این گزینه MyBB شما را به نسخه‌ی MyBB  {1} به‌روز‌رسانی می‌کند.</p>
	<p>با انتخاب این گزینه هیچ‌کدام از اطلاعات شما که شامل (ارسال‌ها٬ موضوع‌ها٬ کاربران و...) می‌باشد از بین نمی‌رود.</p>
	<form method="post" action="upgrade.php">
		<div class="next_button"><input type="submit" class="submit_button" value="به‌روز‌رسانی به نسخه‌ی MyBB {1}  &raquo;  " /></div>
	</form>
</div>

<div style="padding: 4px;">
	<h3>نصب یک نسخه‌ی جدید از MyBB</h3>
	<p>این گزینه <span style="color: red;">تمامی اطلاعات شما را حذف کرده و یک نسخه‌ی جدید از MyBB را نصب می‌کند.</p>
	<p>شما زمانی باید این گزینه را انتخاب کنید که می‌خواهید همه چیز را از نو شروع کنید.</p>
	<form method="post" action="index.php" onsubmit="return confirm(\'آیا از این‌که می‌خواهید اطلاعات پیشین خود را از بین برده و نسخه‌ی جدیدی از MyBB را نصب کنید٬ اطمینان دارید؟ این عملیات نمی‌تواند ناتمام بماند.\');">
		<input type="hidden" name="action" value="intro" />
		<div class="next_button"><input type="submit" class="submit_button" value="نصب نسخه‌ی MyBB {1}  &raquo;" /></div>
	</form>
</div>';

$l['mybb_incorrect_folder'] = '<div class="border_wrapper upgrade_note" style="padding: 4px;">
	<h3>MyBB شناسایی کرد که از مسیر "Upload" درحال اجرا است.</h3>
	<p>با توجه به این‌که ممکن است شما به صورت اشتباه٬ به جای این‌که محتویات داخل پوشه‌ی "Upload" را آپلود کرده باشید٬ خود پوشه‌ی "Upload" را آپلود کرده‌اید این پیام برایتان نمایش داده شده است.<br /><br />برای اطلاعات بیشتر٬ <a href="http://docs.mybb.com/Help-Upload_Directory.html" target="_blank">به صفحه‌ی مستندات MyBB مراجعه کنید</a>.</p>
</div>';

$l['welcome_step'] = '<p>به نصب ‌کننده‌ی MyBB {1} خوش‌آمدید! این نصب کننده یک نسخه‌ی جدید از MyBB را بر روی سرور شما نصب می‌کند.</p>
<p>حال که فایل‌های MyBB را آپلود کرده‌اید٬ لازم است که تنظیمات و بانک اطلاعاتی جدید٬ نصب و یا وارد شوند. در زیر نمای کلی از آن‌چه که قرار است رخ دهد را مشاهده می‌کنید:</p>
<ul>
	<li>بررسی نیازمندی‌های MyBB</li>
	<li>پیکربندی موتور بانک اطلاعاتی</li>
	<li>ایجاد جدول‌های بانک اطلاعاتی</li>
	<li>وارد کردن اطلاعات پیش‌فرض</li>
	<li> وارد کردن پوسته‌ها و قالب‌های پیش‌فرض</li>
	<li>ایجاد حساب مدیرکل برای مدیریت انجمن</li>
	<li>پیکربندی تنظیمات اساسی انجمن</li>
</ul>
<p>پس از این‌که هر مرحله انجام شد٬ بر روی دکمه‌ی "مرحله‌ی بعد" کلیک کنید. </p>
<p>برای مشاهده توافق‌نامه٬ بر روی "مرحله‌ی بعد" کلیک کنید.</p>
<p><input type="checkbox" name="allow_anonymous_info" value="1" id="allow_anonymous" checked="checked" /> <label for="allow_anonymous"> ارسال اطلاعات ناشناخته‌ی سرور به گروه MyBB.</label> (<a href="http://docs.mybb.com/Anonymous_Statistics.html" style="color: #555;" target="_blank"><small>چه اطلاعاتی ارسال می‌شوند؟</small></a>)</p>';

$l['license_step'] = '<div class="license_agreement">
{1}
</div>
<p><strong>با کلیک کردن بر روی "مرحله‌ی بعد"٬ شما توافق‌نامه‌ی فوق را می‌پذیرید.</strong></p>';


$l['req_step_top'] = '<p>پیش از نصب MyBB باید اطمینان حاصل شود که سرور شما حد‌اقل نیازمندی‌ها را برای نصب MyBB دارد.</p>';
$l['req_step_reqtable'] = '<div class="border_wrapper">
			<div class="title">بررسی نیازمندی‌ها</div>
		<table class="general" cellspacing="0">
		<thead>
			<tr>
				<th colspan="2" class="first last">نیازمندی‌ها</th>
			</tr>
		</thead>
		<tbody>
		<tr class="first">
			<td class="first">نسخه‌ی PHP:</td>
			<td class="last alt_col">{1}</td>
		</tr>
		<tr class="alt_row">
			<td class="first">پشتیبانی از گسترش دهنده‌های بانک اطلاعاتی:</td>
			<td class="last alt_col">{2}</td>
		</tr>
		<tr class="alt_row">
			<td class="first">پشتیبانی از گسترش دهنده‌های ترجمه:</td>
			<td class="last alt_col">{3}</td>
		</tr>
		<tr class="alt_row">
			<td class="first">پشتیبانی از گسترش دهنده‌های PHP XML:</td>
			<td class="last alt_col">{4}</td>
		</tr>
		<tr class="alt_row">
			<td class="first">قابل نوشتن بودن فایل پیکربندی:</td>
			<td class="last alt_col">{5}</td>
		</tr>
		<tr>
			<td class="first">قابل نوشتن بودن فایل تنظیمات:</td>
			<td class="last alt_col">{6}</td>
		</tr>
		<tr>
			<td class="first">قابل نوشتن بودن مسیر Cache:</td>
			<td class="last alt_col">{7}</td>
		</tr>
		<tr class="alt_row">
			<td class="first">قابل نوشتن بودن مسیر آپلود فایل‌ها:</td>
			<td class="last alt_col">{8}</td>
		</tr>
		<tr class="last">
			<td class="first">قابل نوشتن بودن مسیر آپلود آواتار‌ها:</td>
			<td class="last alt_col">{9}</td>
		</tr>
		</tbody>
		</table>
		</div>';
$l['req_step_reqcomplete'] = '<p><strong>تبریک! شما حد‌اقل نیازمندی‌ها را برای نصب MyBB دارید.</strong></p>
<p>برای ادامه‌ی فرایند نصب٬ بر روی "مرحله‌ی بعد" کلیک کنید.</p>';

$l['req_step_span_fail'] = '<span class="fail"><strong>{1}</strong></span>';
$l['req_step_span_pass'] = '<span class="pass">{1}</span>';

$l['req_step_error_box'] = '<p><strong>{1}</strong></p>';
$l['req_step_error_phpversion'] = 'حد‌اقل نسخه‌ی PHP برای نصب MyBB باید 5.2.0 باشد این درحالی است که نسخه‌ی PHP سرور شما {1} است.';
$l['req_step_error_dboptions'] = 'MyBB برای نصب به یک یا چند گسترش دهنده مناسب بانک اطلاعاتی نیاز دارد این در حالی است که که هیچ‌یک از این گسترش دهنده ها بر روی سرور شما نصب نیست.';
$l['req_step_error_xmlsupport'] = 'برای نصب MyBB ٬ PHP باید XML Data Handling را پشتیبانی کند. برای اطلاعات بیشتر به <a href="http://www.php.net/xml" target="_blank">PHP.net</a> مراجعه کنید.';
$l['req_step_error_configdefaultfile'] = 'امکان تغییر نام فایل پیکربندی  (inc/config.default.php) وجود ندارد. لطفاً این فایل را به صورت دستی از <u>config.default.php</u> به <u>config.php</u> تغییر نام دهید. یا این‌که با <a href="http://www.mybb.com/support" targert="_blank">پشتیبانی ‌MyBB</a> تماس بگیرید.';
$l['req_step_error_configfile'] = 'فایل پیکربندی (inc/config.php) قابل نوشتن نیست. لطفاً <a href="http://docs.mybb.com/CHMOD_Files.html" target="_blank">دسترسی</a> این فایل را به "۷۷۷" تغییر دهید.';
$l['req_step_error_settingsfile'] = 'فایل تنظیمات (inc/settings.php) قابل نوشتن نیست. لطفاً <a href="http://docs.mybb.com/CHMOD_Files.html" target="_blank">دسترسی</a> این فایل را به "۷۷۷" تغییر دهید.';
$l['req_step_error_cachedir'] = 'مسیر Cache (cache/) قابل نوشتن نیست. لطفاً <a href="http://docs.mybb.com/CHMOD_Files.html" target="_blank">دسترسی</a> این مسیر را به "۷۷۷" تغییر دهید.';
$l['req_step_error_uploaddir'] = 'مسیر آپلود (uploads/) قابل نوشتن نیست. لطفاً <a href="http://docs.mybb.com/CHMOD_Files.html" target="_blank">دسترسی</a> این مسیر را به "۷۷۷" تغییر دهید.';
$l['req_step_error_avatardir'] = 'مسیر آپلود آواتار‌ها (uploads/avatars/) قابل نوشتن نیست. لطفاً <a href="http://docs.mybb.com/CHMOD_Files.html" target="_blank">دسترسی</a> این مسیر را به "۷۷۷" تغییر دهید.';
$l['req_step_error_cssddir'] = 'مسیر CSS(/css) قابل نوشتن نیست. لطفاً <a href="http://docs.mybb.com/CHMOD_Files.html" target="_blank">دسترسی</a> این مسیر را به "۷۷۷" تغییر دهید.';
$l['req_step_error_tablelist'] = '<div class="error">
<h3>خطا</h3>
<p>به دلیل وجود خطا‌های زیر امکان ادامه‌ی مراحل نصب وجود ندارد. لطفاْ ابتدا خطا‌های زیر را برطرف کرده٬ سپس دوباره تلاش کنید:</p>
{1}
</div>';


$l['db_step_config_db'] = '<p>حال زمان پیکربندی بانک اطلاعاتی با استفاده از دسترسی‌های آن فرا رسیده است. اگر این دسترسی‌ها را در اختیار ندارید٬ می‌توانید آن‌ها را از سرور خود دریافت کنید.</p>';
$l['db_step_config_table'] = '<div class="border_wrapper">
<div class="title">پیکربندی بانک اطلاعاتی</div>
<table class="general" cellspacing="0">
<tr>
	<th colspan="2" class="first last">تنظیمات بانک اطلاعاتی</th>
</tr>
<tr class="first">
	<td class="first"><label for="dbengine">موتور بانک اطلاعاتی:</label></td>
	<td class="last alt_col"><select name="dbengine" id="dbengine" onchange="updateDBSettings();">{1}</select></td>
</tr>
{2}
</table>
</div>
<p>پس از این‌‌که از درستی اطلاعات فوق اطمینان یافتید٬ بر روی "مرحله‌ی بعد" کلیک کنید.</p>';

$l['database_settings'] = 'تنظیمات بانک اطلاعاتی';
$l['database_path'] = 'مسیر بانک اطلاعاتی:';
$l['database_host'] = 'نام سرور بانک اطلاعاتی:';
$l['database_user'] = 'نام کاربری بانک اطلاعاتی:';
$l['database_pass'] = 'گذرواژه‌ی بانک اطلاعاتی:';
$l['database_name'] = 'نام بانک اطلاعاتی:';
$l['table_settings'] = 'تنظیمات جدول';
$l['table_prefix'] = 'پیش‌وند جدول‌ها:';
$l['table_encoding'] = 'نوع کدگذاری جدول‌ها:';

$l['db_step_error_config'] = '<div class="error">
<h3>خطا</h3>
<p><p>یک یا چند مورد از اطلاعات وارد شده درمورد بانک اطلاعاتی نادرست است:</p></p>
{1}
<p>پس از برطرف‌سازی این خطا‌(ها)، عملیات نصب را ادامه دهید.</p>
</div>';
$l['db_step_error_invalidengine'] = 'شما یک موتور بانک اطلاعاتی نامعتبر وارد کرده‌اید. لطفاً یکی از این موتور‌ها را از فهرست انتخاب کنید.';
$l['db_step_error_noconnect'] = 'امکان اتصال به بانک اطلاعاتی در \'{1}\' با نام‌کاربری و گذرواژه‌ی وارد شده وجود ندارد. آیا از درستی نام سرور و دسترسی‌های ورود اطمینان دارید؟';
$l['db_step_error_nodbname'] = 'امکان انتخاب بانک اطلاعاتی \'{1}\' وجود ندارد. آیا از وجود این بانک اطلاعاتی و درستی نام کاربری و گذرواژه‌ی وارد شده اطمینان دارید؟';
$l['db_step_error_missingencoding'] = 'شما هیچ‌گونه نوع کدگذاری‌ی را انتخاب نکرده‌اید. لطفاً یکی از آن‌ها را از فهرست برگزینید. (اگر در این مورد اطمینان ندارید٬  \'UTF-8 Unicode\' را برگزینید)';
$l['db_step_error_sqlite_invalid_dbname'] = 'شما از مسیرهای مربوط به بانک اطلاعاتی‌های SQLite استفاده نمی‌کنید. لطفاً از یک فایل سیستمی (مانند: /home/user/database.db) برای بانک اطلاعاتی SQLite استفاده کنید.';
$l['db_step_error_invalid_tableprefix'] = 'شما تنها از اعداد و حروف الفبایی و خط‌‌ زیر (_) برای پیش‌وند جدول می‌توانید استفاده کنید. لطفاً از یک پیش‌وند معتبر استفاده کنید و مراحل نصب را ادامه دهید.';
$l['db_step_error_tableprefix_too_long'] = 'حداکثر طول پیش‌وند ۴۰ حرف است.  لطفاً از طول پیش‌وند بکاهید و مراحل نصب را ادامه دهید.';
$l['db_step_error_utf8mb4_error'] = 'فرمت \'4-Byte UTF-8 Unicode\' حداقل نیازمند MySQL 5.5.3 است. لطفاً یک فرمت را که با نسخه‌ی MySQL سرور شما سازگار است را انتخاب کنید.';

$l['tablecreate_step_connected'] = '<p>اتصال به بانک اطلاعاتی مورد نظر موفقیت آمیز بود.</p>
<p>موتور بانک اطلاعاتی: {1} {2}</p>
<p>اکنون جدول‌های بانک اطلاعاتی ایجاد خواهند شد.</p>';
$l['tablecreate_step_created'] = 'ایجاد جدول {1} ... ';
$l['tablecreate_step_done'] = '<p>همه‌ی جدول‌ها ساخته شدند. برای گردآوری آن‌ها بر روی "مرحله‌ی بعد" کلیک کنید.</p>';

$l['populate_step_insert'] = '<p><p>حال که جدول‌ها ایجاد شده‌اند٬ زمان وارد کردن اطلاعات پیش‌فرض فرا‌ رسیده‌ است.</p></p>';
$l['populate_step_inserted'] = '<p>اطلاعات پیش‌فرض با موفقیت به بانک اطلاعاتی اضافه شدند. برای وارد کردن قالب‌ها و پوسته‌ی پیش‌فرض بر روی "مرحله‌ی بعد" کلیک کنید.</p>';


$l['theme_step_importing'] = '<p>در‌حال بارگذاری و وارد کردن فایل پوسته‌ و قالب‌های پیش‌فرض... </p>';
$l['theme_step_imported'] = '<p>پوسته و قالب‌های پیش‌فرض با موفقیت اضافه شدند. حال برای پیکربندی تنظیمات پیش‌فرض انجمن خود٬ بر روی "مرحله‌ی بعد" کلیک کنید.</p>';


$l['config_step_table'] = '<p>حال زمان پیکربندی تنظیمات اساسی انجمن مانند نام انجمن٬ لینک آن٬ اطلاعات وب‌سایت٬ دامنه‌ی "cookie" و مسیر‌های آن فرا رسیده است. این تنظیمات را در آینده از طریق کنترل‌ پنل مدیر‌کل MyBB می‌توانید به راحتی تغییر دهید. </p>
		<div class="border_wrapper">
			<div class="title">پیکربندی انجمن</div>
			<table class="general" cellspacing="0">
				<tbody>
				<tr>
					<th colspan="2" class="first last">اطلاعات انجمن</th>
				</tr>
				<tr class="first">
					<td class="first"><label for="bbname">نام انجمن:</label></td>
					<td class="last alt_col"><input type="text" class="text_input" name="bbname" id="bbname" value="{1}" /></td>
				</tr>
				<tr class="alt_row last">
					<td class="first"><label for="bburl">لینک انجمن (بدون "/" پایانی):</label></td>
					<td class="last alt_col"><input type="text" class="text_input" name="bburl" id="bburl" value="{2}" onkeyup="warnUser(this, \'This option was set automatically. Do not change it if you are not sure about the correct value, otherwise links on your forum may be broken.\')" onchange="warnUser(this, \'This option was set automatically. Do not change it if you are not sure about the correct value, otherwise links on your forum may be broken.\')" /></td>
				</tr>
				<tr>
					<th colspan="2" class="first last">اطلاعات وب‌سایت</th>
				</tr>
				<tr>
					<td class="first"><label for="websitename">نام وب‌سایت:</label></td>
					<td class="last alt_col"><input type="text" class="text_input" name="websitename" id="websitename" value="{3}" /></td>
				</tr>
				<tr class="alt_row last">
					<td class="first"><label for="websiteurl">لینک وب‌سایت:</label></td>
					<td class="last alt_col"><input type="text" class="text_input" name="websiteurl" id="websiteurl" value="{4}" /></td>
				</tr>
				<tr>
					<th colspan="2" class="first last">تنظیمات کوکی‌ها <a title=" اطلاعات بیشتر" target="_blank" href="http://docs.mybb.com/Cookie_Settings.html">(؟)</a></th>
				</tr>
				<tr>
					<td class="first"><label for="cookiedomain">دامنه‌ی کوکی‌ها:</label></td>
					<td class="last alt_col"><input type="text" class="text_input" name="cookiedomain" id="cookiedomain" value="{5}" onkeyup="warnUser(this, \'This option was set automatically. Do not change it if you are not sure about the correct value, otherwise logging in or out on your forum may be broken.\')" onchange="warnUser(this, \'This option was set automatically. Do not change it if you are not sure about the correct value, otherwise logging in or out on your forum may be broken.\')" /></td>
				</tr>
				<tr class="alt_row last">
					<td class="first"><label for="cookiepath">مسیر کوکی‌ها:</label></td>
					<td class="last alt_col"><input type="text" class="text_input" name="cookiepath" id="cookiepath" value="{6}" onkeyup="warnUser(this, \'This option was set automatically. Do not change it if you are not sure about the correct value, otherwise logging in or out on your forum may be broken.\')" onchange="warnUser(this, \'This option was set automatically. Do not change it if you are not sure about the correct value, otherwise logging in or out on your forum may be broken.\')" /></td>
				</tr>
				<tr>
					<th colspan="2" class="first last">اطلاعات تماس</th>
				</tr>
				<tr class="last">
					<td class="first"><label for="contactemail">ایمیل تماس:</label></td>
					<td class="last alt_col"><input type="text" class="text_input" name="contactemail" id="contactemail" value="{7}" /></td>
				</tr>
				<tr>
					<th colspan="2" class="first last">تنظیمات امنیتی</th>
				</tr>
				<tr class="last">
					<td class="first"><label for="acppin">کد امنیتی کنترل پنل مدیرکل:</label><br />اگر نمی‌خواهید برای ورود به کنترل پنل مدیرکل کد امنیتی قرار دهید، خالی بگذارید.</td>
					<td class="last alt_col"><input type="password" class="text_input" name="pin" id="acppin" value="" /></td>
				</tr>
				</tbody>
			</table>
		</div>

	<p>هنگامی که اطلاعات بالا را به درستی وارد کردید٬ بر روی "مرحله‌ی بعد" کلیک کنید.</p>';

$l['config_step_error_config'] = '<div class="error">
<h3>خطا</h3>
<p>یک یا چند خطا در اطلاعات وارد شده توسط شما به‌ وجود آمد:</p>
{1}
<p>هنگامی که این خطا‌ها را برطرف کردید٬ روی "مرحله‌ی بعد" کلیک کنید.</p>
</div>';
$l['config_step_error_url'] = 'شما لینک انجمن را وارد نکرده‌اید.';
$l['config_step_error_name'] = 'شما نامی برای نسخه‌ی MyBB خود وارد نکرده‌اید.';
$l['config_step_revert'] = 'برای بازگردانی این تنظیم به مقدار اولیه، بر روی این متن کلیک کنید.';


$l['admin_step_setupsettings'] = '<p>درحال اضافه کردن تنظیمات اساسی انجمن...</p>';
$l['admin_step_insertesettings'] = '<p>{1} تنظیم در {2} گروه وارد شد.</p>
<p>درحال به‌روز‌رسانی تنظیمات با توجه به مقادیر وارد شده توسط کاربر...</p>';
$l['admin_step_insertedtasks'] = '<p>{1} وظیفه‌ی برنامه‌ریزی شده وارد شدند.</p>';
$l['admin_step_insertedviews'] = '<p>{1} نمای مدیریتی وارد شد.</p>';
$l['admin_step_createadmin'] = '<p>برای این‌که بتوانید انجمن خود را مدیریت کنید، باید یک حساب کاربری مدیریتی داشته باشد. لطفاً اطلاعات درخواستی زیر را با دقت وارد کنید.</p>';
$l['admin_step_admintable'] = '<div class="border_wrapper">
			<div class="title">اطلاعات حساب کاربری مدیر‌کل</div>

		<table class="general" cellspacing="0">
		<thead>
		<tr>
			<th colspan="2" class="first last">اطلاعات حساب</th>
		</tr>
		</thead>
		<tr class="first">
			<td class="first"><label for="adminuser">نام کاربری:</label></td>
			<td class="alt_col last"><input type="text" class="text_input" name="adminuser" id="adminuser" value="{1}" /></td>
		</tr>
		<tr class="alt_row">
			<td class="first"><label for="adminpass">گذرواژه:</label></td>
			<td class="alt_col last"><input type="password" class="text_input" name="adminpass" id="adminpass" value="" autocomplete="off" onchange="comparePass()" /></td>
		</tr>
		<tr class="last">
			<td class="first"><label for="adminpass2">تأیید گذرواژه:</label></td>
			<td class="alt_col last"><input type="password" class="text_input" name="adminpass2" id="adminpass2" value="" autocomplete="off" onchange="comparePass()"  /></td>
		</tr>
		<tr>
			<th colspan="2" class="first last">اطلاعات تماس</th>
		</tr>
		<tr class="first last">
			<td class="first"><label for="adminemail">ایمیل:</label></td>
			<td class="alt_col last"><input type="text" class="text_input" name="adminemail" id="adminemail" value="{2}" /></td>
		</tr>
	</table>
	</div>

<p>پس از این‌‌که از درستی اطلاعات فوق اطمینان یافتید٬ بر روی "مرحله‌ی بعد" کلیک کنید.</p>';

$l['admin_step_error_config'] = '<div class="error">
<h3>خطا</h3>
<p>یک یا چند خطا در اطلاعات وارد شده توسط شما برای حساب کاربری مدیر‌کل به‌ وجود آمد:</p>
{1}
<p>هنگامی که این خطا(‌ها) را برطرف نمودید٬ بر روی "مرحله‌ی بعد" کلیک کنید.</p>
</div>';
$l['admin_step_error_nouser'] = 'شما نام کاربری‌ای برای مدیر‌کل وارد نکرده‌اید.';
$l['admin_step_error_nopassword'] = 'شما گذرواژه‌ای برای مدیر‌کل وارد نکرده‌اید.';
$l['admin_step_error_nomatch'] = 'گذرواژه‌های وارد شده توسط شما با یک‌دیگر برابر نیستند.';
$l['admin_step_error_noemail'] = 'شما ایمیلی برای حساب کاربری مدیر‌کل وارد نکرده‌اید.';
$l['admin_step_nomatch'] = 'گذرواژه‌های وارد شده توسط شما با یک‌دیگر برابر نیستند. لطفاً پیش از ادامه، این مشکل را برطرف کنید.';

$l['done_step_usergroupsinserted'] = '<p>درحال وارد کردن گروه‌های کاربری...';
$l['done_step_admincreated'] = '<p>درحال ایجاد حساب کاربری مدیر‌کل...';
$l['done_step_adminoptions'] = '<p>درحال ایجاد دسترسی‌های مدیر‌کل...';
$l['done_step_cachebuilding'] = '<p>درحال ایجاد اطلاعات cache...';
$l['done_step_success'] = '<p class="success">نسخه‌ی MyBB شما با موفقیت نصب و پیکربندی گردید.</p>
<p>گروه MyBB به خاطر پشتیبانی  و نصب سیستم MyBB از شما سپاس‌گزار است. در صورتی که به کمک نیاز دارید٬ به وب‌سایت ما سر بزنید و درخواست کمک کنید.</p>';
$l['done_step_locked'] = '<p>نصب کننده هم‌اکنون بسته شده‌ است. برای باز کردن آن٬ فایل \'lock\' را از مسیر نصب حذف کنید.</p><p>حال می‌توانید به <a href="../index.php">نسخه‌ی MyBB انجمن خود</a> و یا <a href="../admin/index.php">کنترل پنل مدیر‌کل آن</a> مراجعه کنید.';
$l['done_step_dirdelete'] = '<p><strong><span style="color:red">لطفاً پیش از هرگونه اقدام٬ پوشه‌ی نصب را حذف کنید.</span></strong></p>';
$l['done_subscribe_mailing'] = '<div class="error"><p><strong>مشترک ایمیل‌های به‌روز رسانی شوید.</strong></p><p>هر زمان که نسخه‌ی جدید‌ یا به‌روز‌رسانی امنیتی‌ای برای MyBB منتشر شود٬ ما شما را به وسیله‌ی ایمیل مطلع خواهیم کرد.</p><p>این به شما کمک می‌کند که اطمینان یابید که درحال استفاده از به‌روز‌ترین و بهترین نسخه‌ی MyBB می‌باشید!</p><p><a href="http://mybb.com/mailing-list" target="_blank">مشترک ایمیل‌های به‌روز رسانی شوید!</a></p>';

/* UPGRADE LANGUAGE VARIABLES */
$l['upgrade'] = 'عملیات به‌روز‌رسانی';
$l['upgrade_welcome'] = '<p>به به‌روز‌رسانی MyBB {1} خوش‌آمدید!</p><p>پیش از ادامه‌ لطفاً نسخه‌ی پیشین خود را به دست آورید چرا که باید آن را از فهرست زیر برگزینید.</p><p><strong>ما اکیداً به شما توصیه می‌کنیم که ابتدا از فایل‌ها و بانک اطلاعاتی خود فایل پشتیبان تهیه کنید و سپس اقدام به به‌روز‌رسانی نمایید.</strong> که اگر مشکلی پیش آمد٬ اطلاعات شما از بین نرود.</p><p>لطفاً در هر مرحله تنها یک مرتبه بر روی "مرحله‌ی بعد" کلیک کنید. صفحه‌های به‌روز‌رسانی ممکن است با توجه به اندازه‌ی انجمن شما دیر بارگذاری شوند.</p><p>هنگامی که آماده هستید نسخه‌ی پیشین خود را از فهرست زیر برگزینید و بر روی "مرحله‌ی بعد" کلیک کنید.</p>';
$l['upgrade_templates_reverted'] = 'تبدیل قالب‌ها';
$l['upgrade_templates_reverted_success'] = '<p>همه‌ی قالب‌ها به نسخه‌ی جدید تبدیل شدند. برای ادامه‌ی عملیات به‌روز‌رسانی٬ روی "مرحله‌ی بعد" کلیک کنید.</p>';
$l['upgrade_settings_sync'] = 'هم‌زمانی تنظیمات:';
$l['upgrade_settings_sync_success'] = '<p>تمامی تنظیمات انجمن با نسخه‌ی جدید‌ی MyBB هم‌زمان شدند.</p><p>{1} تنظیم جدید در {2} گروه وارد شدند.</p><p>برای پایان دادن به عملیات به‌روز‌رسانی روی "مرحله‌ی بعد" کلیک کنید.</p>';
$l['upgrade_datacache_building'] = 'ایجاد اطلاعات کَش';
$l['upgrade_building_datacache'] = '<p>درحال ایجاد کَش‌ها...';
$l['upgrade_continue'] = 'لطفاً برای ادامه روی "مرحله‌ی بعد" کلیک کنید.';
$l['upgrade_locked'] = '<p>نصب کننده هم‌اکنون بسته شده است. برای باز کردن٬ آن فایل \'lock\' را از مسیر نصب حذف کنید.</p><p>حال می‌توانید به<a href="../index.php"> نسخه‌ی به‌روز شده‌ی MyBB خود</a> ویا <a href="../{1}/index.php">کنترل پنل مدیر‌کل آن</a></p> بروید.';
$l['upgrade_removedir'] = 'لطفاً پیش از هرگونه اقدام٬ پوشه‌ی نصب را حذف کنید.';
$l['upgrade_congrats'] = '<p>تبریک! نسخه‌ی MyBB شما با موفقیت به نسخه‌ی {1} به‌روز شد.</p>{2}<p><strong>مرحله‌ی بعدی چیست؟</strong></p><ul><li>لطفاً از ابزار \'یافتن قالب‌های به‌روز‌رسانی شده\' در کنترل پنل مدیر‌کل برای یافتن قالب‌هایی که در این نسخه‌ باید به‌روز‌رسانی شوند استفاده کنید تا تغییرات مورد نیاز را در آن‌ها اعمال کنید و یا آن‌ها را به نسخه‌ی اصلی بازگردانی کنید.</li><li>اطمینان یابید که انجمن شما به درستی کار می‌کند.</li></ul>';
$l['upgrade_template_reversion'] = 'اخطار تغییر در قالب‌ها';
$l['upgrade_template_reversion_success'] = '<p>تمامی اصلاحات بانک اطلاعاتی در به‌روز‌رسانی در انجمن شما اعمال شد.</p><p>در این به‌روز‌رسانی تمامی قالب‌ها به قالب‌های موجود در بسته‌ی به‌روز‌رسانی تبدیل می‌شوند. بنابراین پیش از ادامه٬ لطفاً از تمامی قالب‌های اختصاصی خود پشتیبان‌گیری کنید.';
$l['upgrade_send_stats'] = '<p><input type="checkbox" name="allow_anonymous_info" value="1" id="allow_anonymous" checked="checked" /> <label for="allow_anonymous"> ارسال اطلاعات ناشناخته‌ی سرور به گروه MyBB.</label> (<a href="http://docs.mybb.com/Anonymous_Statistics.html" style="color: #555;" target="_blank"><small>چه اطلاعاتی ارسال می‌شوند؟</small></a>)</p>';

$l['please_login'] = 'لطفاً وارد شوید';
$l['login'] = 'ورود';
$l['login_desc'] = 'جهت شروع فرایند به‌روزرسانی، لطفاً نام کاربری و گذرواژه‌ی خود را وارد کنید. همچنین در نظر داشته باشید که برای انجام به‌روزرسانی، شما باید یکی از مدیران معتبر این انجمن باشید.';
$l['login_username'] = 'نام کاربری';
$l['login_password'] = 'گذرواژه';
$l['login_password_desc'] = 'لطفاً توجه کنید که گذرواژه‌ها، نسبت به کوچک یا بزرگ بودن حروف حساس هستند.';

/* Error messages */
$l['development_preview'] = '<div class="error"><h2 class="fail">هشدار</h2><p>این نسخه از MyBB یک نسخه‌ی پیش‌نمایشی برای توسعه‌ی MyBB است و باید تنها برای اهداف آزمایشی مورد استفاده قرار بگیرد.</p><p>به غیر از پشتیبانی از توسعه و گسترش پلاگین‌ها و پوسته‌ها، هیچ‌گونه پشتیبانی رسمی‌ای از این نسخه به عمل نخواهد آمد. با ادامه‌ی این فرایند نصب/به‌روزرسانی، ریسک بروز مشکل و پشتیبانی بر عهده‌ی خودتان است.</p></div>';
$l['locked'] = 'نصب کننده درحال حاضر بسته می‌باشد. به منظور بازگشایی آن، لطفاً فایل \'lock\' را از مسیر نصب حذف کنید.';
$l['no_permision'] = 'شما دسترسی لازم را برای اجرای این فرایند ندارید. برای اجرای این فرایند، شما باید دسترسی مدیریتی داشته باشید.<br /><br />اگر می‌خواهید خارج شوید، لطفاً <a href="upgrade.php?action=logout&amp;logoutkey={1}">اینجا</a> را کلیک کنید. به این ترتیب، می‌توانید مجدداً با نام کاربری مدیریتی خود وارد شوید.';
$l['no_theme_functions_file'] = 'هیچ قالب و توابع یافت نشد ، لطفا مجدد بسته کامل را آپلود نمایید';
$l['task_versioncheck_ran'] = 'وظیفه‌ی بررسی نسخه با موفقیت اجرا شد.';

