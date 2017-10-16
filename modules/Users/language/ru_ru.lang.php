<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************

* This program is free software; you can redistribute it and/or modify it under
* the terms of the GNU Affero General Public License version 3 as published by the
* Free Software Foundation.
*
* This program is distributed in the hope that it will be useful, but WITHOUT
* ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
* FOR A PARTICULAR PURPOSE.  See the GNU Affero General Public License for more
* details.
*
* You should have received a copy of the GNU Affero General Public License along with
* this program; if not, see http://www.gnu.org/licenses or write to the Free
* Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA
* 02110-1301 USA.

 // Replaced by RAPIRA -->
 ********************************************************************************/
  /*********************************************************************************
  *
  * This file was generated by the RAPIRA Translation Suite ----------
  *
  ***********************************************************************likhobory*/

  /*********************************************************************************
  * Description : Defines the Russian language pack for the base application.
  *********************************************************************************/
 // Replaced by RAPIRA <--
 
$mod_strings = array(
'LBL_DELETE_USER_CONFIRM' => 'При удалении данных Пользователя будет удалена и соответствующая запись из списка Сотрудников.<br/><br/>Нажмите кнопку "OK" для удаления данных Пользователя.',
'LBL_DELETE_GROUP_CONFIRM' => 'Вы действительно хотите удалить данного группового пользователя? Нажмите на кнопку <b>ОК</b> для удаления пользователя из системы<br/>После удаления у вас будет возможность переназначить ответственных для записей, принадлежащих удалённому групповому пользователю.',

'LNK_IMPORT_USERS' => 'Импорт пользователей',
'ERR_DELETE_RECORD' => 'Перед удалением профиля должен быть указан номер записи.' ,
'ERR_EMAIL_INCORRECT' => 'Укажите E-mail, чтобы создать и отправить пароль.',
'ERR_EMAIL_NO_OPTS' => 'Не удалось подобрать оптимальные настройки для входящей почты.' ,
'ERR_ENTER_CONFIRMATION_PASSWORD' => 'Пожалуйста, введите подтверждение пароля.' ,
'ERR_ENTER_NEW_PASSWORD' => 'Пожалуйста, введите Ваш новый пароль.' ,
'ERR_ENTER_OLD_PASSWORD' => 'Пожалуйста, введите Ваш текущий пароль.' ,
'ERR_IE_FAILURE1' => '[Вернуться]' ,
'ERR_IE_FAILURE2' => 'Не удалось соединиться с учётной записью электронной почты. Пожалуйста, проверьте ваши настройки и попробуйте ещё раз.' ,
'ERR_IE_MISSING_REQUIRED' => 'В настройках входящей электронной почты отсутствует необходимая информация.\n Пожалуйста, проверьте ваши настройки и попробуйте ещё раз.\n\nЕсли вы не настроили входящую почту - очистите все поля.',
'ERR_INVALID_PASSWORD' => 'Вы должны указать правильные логин и пароль.' ,
'ERR_LAST_ADMIN_1' => 'Имя пользователя "' ,
'ERR_LAST_ADMIN_2' => '\" последний пользователь с правами администратора. По меньшей мере один пользователь должен быть администратором.' ,
'ERR_PASSWORD_CHANGE_FAILED_1' => 'Изменение пароля пользователя прошло неудачно для ' ,
'ERR_PASSWORD_CHANGE_FAILED_2' => ' неудачно. Должен быть установлен новый пароль.' ,
'ERR_PASSWORD_INCORRECT_OLD_1' => 'Неверный текущий пароль' ,
'ERR_PASSWORD_INCORRECT_OLD_2' => '. Повторите ввод паролей' ,
'ERR_PASSWORD_MISMATCH' => 'Пароли не совпадают' ,
'ERR_REENTER_PASSWORDS' => 'Новый пароль и подтверждение пароля не совпадают.' ,
'ERR_REPORT_LOOP' => 'Пользователь не может отчитываться ни перед самим собой, ни перед кем из менеджеров.' ,
'ERR_RULES_NOT_MET' => 'Введённый вами пароль не отвечает требованиям, предъявляемым при его создании. Попробуйте ввести другой пароль.',
'ERR_USER_NAME_EXISTS_1' => 'Имя пользователя ' ,
'ERR_USER_NAME_EXISTS_2' => ' уже существует. Дублирование имён пользователей не допускается. Измените имя пользователя на уникальное.' ,
'ERR_USER_IS_LOCKED_OUT' => 'Данный пользователь заблокирован и не может войти в систему, используя существующий пароль.',

'LBL_PASSWORD_SENT' => 'Обновление пароля',
'LBL_CANNOT_SEND_PASSWORD' => 'Ошибка отправки пароля',
'ERR_EMAIL_NOT_SENT_ADMIN' => 'Система не в состоянии выполнить ваш запрос. Пожалуйста, проверьте:',
'ERR_SMTP_URL_SMTP_PORT' => 'Адрес и порт SMTP-сервера',
'ERR_SMTP_USERNAME_SMTP_PASSWORD' => 'Имя пользователя и пароль (SMTP)',
'ERR_RECIPIENT_EMAIL' => 'E-mail получателя',
'ERR_SERVER_STATUS' => 'Состояние вашего сервера',
'ERR_SERVER_SMTP_EMPTY' => 'Система не в состоянии отправить письмо пользователю. Проверьте параметры сервера исходящей почты в <a href="index.php?module=EmailMan&action=config">Настройках E-mail</a>.',

'LBL_ADDRESS_CITY' => 'Адрес - город:' ,
'LBL_ADDRESS_COUNTRY' => 'Адрес - страна:' ,
'LBL_ADDRESS_INFORMATION' => 'Адресная информация' ,
'LBL_ADDRESS_POSTALCODE' => 'Адрес - почтовый индекс:' ,
'LBL_ADDRESS_STATE' => 'Адрес - область:' ,
'LBL_ADDRESS_STREET' => 'Адрес - улица:' ,
'LBL_ADDRESS' => 'Адрес' ,
'LBL_ADMIN_USER' => 'Администратор',


'LBL_ADMIN_DESC' => 'Пользователь имеет доступ к панели администрирования.',
'LBL_REGULAR_DESC' => 'Пользователь имеет основанный на ролях доступ к модулям и записям.',

'LBL_PHOTO' => 'Фото',

'LBL_ADMIN' => 'Администратор' ,
'LBL_ADVANCED' => 'Дополнительно',
'LBL_ANY_ADDRESS' => 'Любой адрес:',
'LBL_ANY_EMAIL' => 'Любой E-mail:' ,
'LBL_ANY_PHONE' => 'Любой тел.:' ,
'LBL_BUTTON_CREATE' => 'Создать' ,
'LBL_BUTTON_EDIT' => 'Править' ,
'LBL_CALENDAR_OPTIONS' => 'Настройки календаря' ,
'LBL_CHANGE_PASSWORD' => 'Изменение сгенерированного пароля',
'LBL_CHANGE_SYSTEM_PASSWORD' => 'Пожалуйста, укажите новый пароль.',
'LBL_CHANGE_PASSWORD_TITLE' => 'Пароль',
'LBL_CHOOSE_A_KEY' => 'Укажите ключ для недопущения неавторизованных публикаций календаря' ,
'LBL_NO_KEY' => 'Ключ не указан. Пожалуйста, введите ключ для осуществления публикации.',

'LBL_CHOOSE_WHICH' => 'Вы можете выбрать закладки, отображаемые в системе, а также отсортировать их в желаемом порядке.' ,
'LBL_CITY' => 'Город' ,

'LBL_CLEAR_BUTTON_TITLE' => 'Очистить',


'LBL_CONFIRM_PASSWORD' => 'Подтверждение пароля:' ,
'LBL_CONFIRM_REGULAR_USER' => 'Вы изменили тип пользователя с Системного администратора на Обычного пользователя. После сохранения внесённых изменений пользователь не будет иметь административных прав.\n\nНажмите кнопку "OK" для применения изменений.\nНажмите кнопку "Отмена" для возврата на редактируемую страницу.',
'LBL_COUNTRY' => 'Страна' ,
'LBL_CURRENCY_TEXT' => 'Выберите валюту, которая будет фигурировать во всех создаваемых записях. Эта же валюта будет указана в колонке <b>Сумма</b> при просмотре списка сделок.' ,
'LBL_CURRENCY' => 'Валюта' ,
'LBL_CURRENCY_SIG_DIGITS' => 'Значимые цифры валюты',
'LBL_CURRENCY_SIG_DIGITS_DESC' => 'Количество символов после запятой',
'LBL_NUMBER_GROUPING_SEP' => 'Разделитель групп разрядов' ,
'LBL_NUMBER_GROUPING_SEP_TEXT' => 'Символ, используемый для разделения групп разрядов (1 000 000) ' ,
'LBL_DECIMAL_SEP' => 'Десятичный разделитель' ,
'LBL_DECIMAL_SEP_TEXT' => 'Символ, разделяющий целую и дробную части числа' ,
'LBL_FDOW' => 'Первый день недели',
'LBL_FDOW_TEXT' => 'Первый день недели, отображаемый в календаре',
'LBL_DATE_FORMAT_TEXT' => 'Установите формат отображения даты' ,
'LBL_DATE_FORMAT' => 'Формат даты' ,
'LBL_DEFAULT_SUBPANEL_TITLE' => 'Пользователи' ,
'LBL_DEPARTMENT' => 'Отдел' ,
'LBL_DESCRIPTION' => 'Описание:' ,
'LBL_DISPLAY_TABS' => 'Отображаемые закладки' ,
'LBL_DST_INSTRUCTIONS' => '(+DST) обозначает соблюдение Вами перехода на летнее время' ,
'LBL_EDIT_TABS' => 'Управление закладками' ,
'LBL_EDIT' => 'Править' ,
'LBL_USER_HASH' => 'Пароль',
'LBL_AUTHENTICATE_ID' => 'ID аутентификации',
'LBL_ACCOUNT_NAME' => 'Логин',
'LBL_EXT_AUTHENTICATE' => 'Внешняя аутентификация',
'LBL_EMAIL' => 'E-mail:' ,
'LBL_EMAIL_CHARSET' => 'Кодировка исходящего письма',
'LBL_EMAIL_LINK_TYPE' => 'Почтовый клиент' ,

'LBL_EMAIL_LINK_TYPE_HELP' => '<b>Почтовый клиент SuiteCRM</b> - отправка электронных писем при помощи встроенного в SuiteCRM почтового клиента.<br><b>Внешний почтовый клиент</b> - любой другой почтовый клиент, например Microsoft Outlook.',

'LBL_EMAIL_NOT_SENT' => 'Система не в состоянии выполнить ваш запрос. Пожалуйста, свяжитесь с системным администратором.',
'LBL_EMAIL_SIGNATURE_ERROR1' => 'Для этой подписи необходимо ввести название.' ,
'LBL_EMAIL_TEMPLATE_MISSING' => 'Не выбран шаблон для отправляемого письма с паролем пользователя. Пожалуйста, выберите необходимый шаблон на странице управления паролями.',
'LBL_EMPLOYEE_STATUS' => 'Статус сотрудника' ,
'LBL_EMPLOYEE_INFORMATION' => 'Информация о сотруднике',
'LBL_ERROR' => 'Ошибка' ,
'LBL_MISSING_TEMPLATE' => 'Файл login.tpl не найден',
'LBL_EXPORT_CHARSET' => 'Кодировка импорта/экспорта',
'LBL_EXPORT_CHARSET_DESC' => 'Выберите используемую кодировку. Она будет использоваться при импортировании данных, экспорте в csv-формат и при создании vCard.',
'LBL_EXPORT_DELIMITER' => 'Символ разделителя при экспорте данных',
'LBL_EXPORT_DELIMITER_DESC' => 'Укажите символ(ы), разделяющие экспортируемые данные.',
'LBL_FAX_PHONE' => 'Факс' ,
'LBL_FAX' => 'Факс' ,
'LBL_FIRST_NAME' => 'Имя' ,
'LBL_SYSTEM_GENERATED_PASSWORD' => 'Автоматически сгенерированный пароль',
'LBL_GENERATE_PASSWORD_BUTTON_LABEL' => 'Сменить пароль',
'LBL_GENERATE_PASSWORD_BUTTON_TITLE' => 'Сменить пароль',
'LBL_GROUP_DESC' => 'Используется только для назначения пользователей в указанную группу (например, для входящих писем) и не может авторизоваться через веб-интерфейс SuiteCRM.' ,
'LBL_GROUP_USER' => 'Групповой пользователь' ,
'LBL_HIDE_TABS' => 'Скрытые закладки' ,
'LBL_HOME_PHONE' => 'Тел. (дом.)' ,
'LBL_INBOUND_TITLE' => 'Информация по контрагенту' ,
'LBL_IS_ADMIN' => 'Администратор' ,
'LBL_LANGUAGE' => 'Язык:' ,
'LBL_LAST_NAME' => 'Фамилия' ,
'LBL_LAYOUT_OPTIONS' => 'Параметры макета',
'LBL_LDAP' => 'LDAP',
'LBL_LDAP_AUTHENTICATION' => 'LDAP-аутентификация',
'LBL_LIST_ACCEPT_STATUS' => 'Статус' ,
'LBL_LIST_DEPARTMENT' => 'Отдел' ,
'LBL_LIST_EMAIL' => 'E-mail' ,
'LBL_LIST_FORM_TITLE' => 'Пользователи' ,
'LBL_LIST_GROUP' => 'Групповой' ,
'LBL_LIST_LAST_NAME' => 'Фамилия' ,
'LBL_LIST_MEMBERSHIP' => 'Участник' ,
'LBL_LIST_NAME' => 'Пользователь' ,
'LBL_LIST_STATUS' => 'Статус' ,
'LBL_LIST_TITLE' => 'Должность' ,
'LBL_LIST_USER_NAME' => 'Логин' ,
'LBL_LOCALE_DEFAULT_NAME_FORMAT' => 'Формат ФИО по умолчанию',
'LBL_LOCALE_DESC_FIRST' => '[Имя]',
'LBL_LOCALE_DESC_LAST' => '[Фамилия]',
'LBL_LOCALE_DESC_SALUTATION' => '[Приветствие]',
'LBL_LOCALE_DESC_TITLE' => '[Название]',
'LBL_LOCALE_EXAMPLE_NAME_FORMAT' => 'Пример',
'LBL_LOCALE_NAME_FORMAT_DESC' => 'Формат ФИО.',
'LBL_SAVED_SEARCH' => 'Отображение результатов поиска / управление сохранёнными условиями поиска',
// LOGIN PAGE STRINGS
'LBL_LOGIN_BUTTON_LABEL' => 'Вход' ,
'LBL_LOGIN_BUTTON_TITLE' => 'Авторизоваться в системе' ,
'LBL_LOGIN_FORGOT_PASSWORD' => 'Забыли пароль?',
'LBL_LOGIN_SUBMIT' => 'Отправить E-mail',
// END LOGIN PAGE STRINGS
'LBL_LOGGED_OUT_1' => 'Вы автоматически вышли из системы. Для повторного входа нажмите ',
'LBL_LOGGED_OUT_2' => 'здесь',
'LBL_LOGGED_OUT_3' => '.',
'LBL_MAIL_OPTIONS_TITLE' => 'Настройка E-mail' ,
'LBL_MAIL_SENDTYPE' => 'Отправка почты с помощью:' ,
'LBL_MAIL_SMTPAUTH_REQ' => 'Использовать SMTP-аутентификацию?',
'LBL_MAIL_SMTPPORT' => 'SMTP-порт:' ,
'LBL_MAILMERGE_TEXT' => 'Включить слияние (этот параметр так же должен быть установлен администратором в настройках конфигурации).' ,
'LBL_MAILMERGE' => 'Слияние' ,
'LBL_MESSENGER_ID' => 'IM - имя / E-mail' ,
'LBL_MESSENGER_TYPE' => 'IM-тип' ,
'LBL_MOBILE_PHONE' => 'Тел. (моб.)' ,
'LBL_MODIFIED_BY' => 'Изменено:',
'LBL_CREATED_BY_NAME' => 'Создано', //bug 48978
'LBL_MODIFIED_BY_ID' => 'Изменено (ID):',
'LBL_MODULE_NAME' => 'Пользователи' ,
'LBL_MODULE_TITLE' => 'Сотрудники - ГЛАВНАЯ' ,
'LBL_NAME' => 'Полное имя' ,
'LBL_SIGNATURE_NAME' => 'Название',
'LBL_USE_GROUP_TABS' => 'Сгруппированные модули',
'LBL_NEW_FORM_TITLE' => 'Новый пользователь' ,
'LBL_NEW_PASSWORD' => 'Новый пароль:' ,
'LBL_NEW_PASSWORD2' => 'Подтверждение пароля' ,
'LBL_NEW_USER_PASSWORD_2' => 'Письмо, содержащее автоматически сгенерированный пароль, было отправлено новому пользователю.',
'LBL_NEW_USER_PASSWORD_3' => 'Пароль успешно создан.', ///
'LBL_NOTES' => 'Заметки' ,
'LBL_OFFICE_PHONE' => 'Тел. (раб.)' ,
'LBL_OLD_PASSWORD' => 'Текущий пароль:' ,
'LBL_OTHER_PHONE' => 'Другой тел.' ,
'LBL_PASSWORD' => 'Пароль' ,
'LBL_PASSWORD_EXPIRATION_LOGIN' => 'Срок действия пароля истёк. Укажите новый пароль.',
'LBL_PASSWORD_EXPIRATION_GENERATED' => 'Ваш пароль создан автоматически',
'LBL_PASSWORD_EXPIRATION_TIME' => 'Срок действия пароля истёк. Укажите новый пароль.',

'LBL_PSW_MODIFIED' => 'Последнее изменение пароля',
'LBL_PHONE' => 'Тел.:' ,
'LBL_PICK_TZ_DESCRIPTION' => 'Перед тем как продолжить, пожалуйста, выберите ваш часовой пояс. При необходимости вы сможете позже поменять часовой пояс на странице настройки личных параметров пользователя.' ,
'LBL_PORTAL_ONLY_DESC' => 'Use for the Portal API. This type cannot login through the Sugar web interface.', ///
'LBL_PORTAL_ONLY_USER' => 'Portal API User', ///
'LBL_POSTAL_CODE' => 'Индекс' ,
'LBL_PRIMARY_ADDRESS' => 'Основной адрес' ,
'LBL_PROMPT_TIMEZONE_TEXT' => 'Однократный запуск мастера настройки при входе в систему' ,
'LBL_PROMPT_TIMEZONE' => 'Запуск мастера настройки' ,
'LBL_PROVIDE_USERNAME_AND_EMAIL' => 'Укажите имя пользователя и E-mail',
'LBL_PUBLISH_KEY' => 'Публичный ключ' ,

'LBL_RECAPTCHA_NEW_CAPTCHA' => 'Обновить',
'LBL_RECAPTCHA_SOUND' => 'Переключиться на звук',
'LBL_RECAPTCHA_IMAGE' => 'Переключиться на картинку',
'LBL_RECAPTCHA_INSTRUCTION' => 'Введите указанные слова через пробел',
'LBL_RECAPTCHA_INSTRUCTION_OPPOSITE' => 'Введите указанные слова через пробел',
'LBL_RECAPTCHA_FILL_FIELD' => 'Ведите текст, указанный на картинке.',
'LBL_RECAPTCHA_INVALID_PRIVATE_KEY' => 'Неверный закрытый ключ reCAPTCHA',
'LBL_RECAPTCHA_INVALID_REQUEST_COOKIE' => 'Проверочный параметр неверен (The challenge parameter of the verify Recaptcha script was incorrect).',
'LBL_RECAPTCHA_UNKNOWN' => 'Неизвестная ошибка c reCAPTCHA',

'LBL_RECEIVE_NOTIFICATIONS_TEXT' => 'Пользователь получает уведомление по E-mail при назначении ему записи другим пользователем.' ,
'LBL_RECEIVE_NOTIFICATIONS' => 'Уведомление о назначении' ,
'LBL_REGULAR_USER' => 'Обычный пользователь',
'LBL_REMINDER_TEXT' => 'Временной интервал по умолчанию для напоминания о предстоящем телефонном разговоре или встрече. Напоминания в виде всплывающих окон появляются у всех приглашённых пользователей SuiteCRM. Напоминания по электронной почте отправляются ВСЕМ приглашённым.' ,
'LBL_REMINDER' => 'Напоминание о мероприятии' ,
'LBL_REMINDER_POPUP' => 'Во всплывающем окне',
'LBL_REMINDER_EMAIL_ALL_INVITEES' => 'Отправлять E-mail приглашённым',

    // new reminders
    'LBL_REMINDERS' => 'Напоминания',
    'LBL_REMINDERS_ACTIONS' => 'Напомнить о мероприятии в виде:',
    'LBL_REMINDERS_POPUP' => 'Всплывающего уведомления браузера',
    'LBL_REMINDERS_EMAIL' => 'Приглашения по E-mail',
    'LBL_REMINDERS_WHEN' => 'Когда:',
    'LBL_REMINDERS_REMOVE_REMINDER' => 'Удалить напоминание',
    'LBL_REMINDERS_ADD_ALL_INVITEES' => 'Добавить ВСЕХ приглашённых',
    'LBL_REMINDERS_ADD_REMINDER' => 'Добавить напоминание',
	
'LBL_REPORTS_TO_NAME' => 'Руководитель',
'LBL_REPORTS_TO' => 'Руководитель',
'LBL_REPORTS_TO_ID' => 'Руководитель (ID):',
'LBL_REQUEST_SUBMIT' => 'Письмо отправлено',
'LBL_RESET_PREFERENCES' => 'Установить стандартные значения' ,
'LBL_RESET_PREFERENCES_WARNING' => 'Вы действительно хотите сбросить все ваши настройки?',
'LBL_RESET_PREFERENCES_WARNING_USER' => 'Вы действительно хотите сбросить все настройки данного пользователя?',
'LBL_RESET_HOMEPAGE' => 'Сбросить настройки основной закладки SuiteCRM',
'LBL_RESET_HOMEPAGE_WARNING' => 'Вы действительно хотите сбросить настройки основной закладки SuiteCRM?',
'LBL_RESET_HOMEPAGE_WARNING_USER' => 'Вы действительно хотите сбросить настройки основной закладки SuiteCRM для данного пользователя?',
'LBL_SALUTATION' => 'Приветствие',
'LBL_ROLES_SUBPANEL_TITLE' => 'Роли' ,

'LBL_SEARCH_FORM_TITLE' => 'Поиск пользователей' ,
'LBL_SEARCH_URL' => 'Искать размещение' ,
'LBL_SELECT_CHECKED_BUTTON_LABEL' => 'Выбрать отмеченных пользователей' ,
'LBL_SELECT_CHECKED_BUTTON_TITLE' => 'Выбрать отмеченных пользователей' ,
'LBL_SETTINGS_URL_DESC' => 'Используйте этот URL , когда вы устанавливаете настройки Sugar Plug-in для Microsoft&reg; Outlook&reg; и Sugar Plug-in для Microsoft&reg; Word&reg;.' ,
'LBL_SETTINGS_URL' => 'URL' ,
'LBL_SIGNATURE' => 'Подпись' ,
'LBL_SIGNATURE_HTML' => 'HTML-подпись' ,
'LBL_SIGNATURE_PREPEND' => 'Подпись перед ответом' ,
'LBL_STATE' => 'Область' ,
'LBL_STATUS' => 'Статус пользователя' ,
'LBL_SUBPANEL_TABS' => 'Группировать закладки субпанелей',
'LBL_SUBPANEL_TABS_DESCRIPTION' => 'В Форме просмотра группировать субпанели на закладках.',
'LBL_SUGAR_LOGIN' => 'Пользователь SuiteCRM',
'LBL_THEME' => 'Темы' ,
'LBL_TIME_FORMAT_TEXT' => 'Установите формат отображения времени' ,
'LBL_TIME_FORMAT' => 'Формат времени' ,
'LBL_TIMEZONE_TEXT' => 'Установите часовой пояс' ,
'LBL_TIMEZONE' => 'Часовой пояс' ,
'LBL_TITLE' => 'Должность' ,
'LBL_USE_REAL_NAMES' => 'Отображать полные имена пользователей',
'LBL_USE_REAL_NAMES_DESC' => 'Отображать полные имена пользователей вместо логина',
'LBL_USER_INFORMATION' => 'Профиль пользователя' ,
'LBL_USER_LOCALE' => 'Региональные настройки',
'LBL_USER_NAME' => 'Логин' ,
'LBL_USER_SETTINGS' => 'Пользовательские настройки' ,
'LBL_USER_TYPE' => 'Тип пользователя',
'LBL_USER_ACCESS' => 'Права доступа',
'LBL_WORK_PHONE' => 'Рабочий телефон:' ,
'LBL_YOUR_PUBLISH_URL' => 'Опубликовать в моем размещении' ,
    'LBL_ICAL_PUB_URL' => 'Адрес интеграции с iCal',
    'LBL_ICAL_PUB_URL_HELP' => 'Используйте этот адрес для подписки на календарь SuiteCRM в рамках iCal.',

'LNK_NEW_USER' => 'Создать нового пользователя' ,
'LNK_NEW_GROUP_USER' => 'Создать группового пользователя',
'LNK_USER_LIST' => 'Пользователи' ,
'LBL_PROSPECT_LIST' => 'Список адресатов',
'LBL_EMAILS' => 'E-mail',
'LBL_PROCESSING' => 'Выполняется..',
'LBL_UPDATE_FINISH' => 'Обновление завершено',
'LBL_AFFECTED' => 'записей обработано',

'LBL_USER_NAME_FOR_ROLE' => 'Пользователи/Роли',
'LBL_SESSION_EXPIRED' => 'Ваш сеанс закончился, необходимо заново войти в систему.',

// INBOUND EMAIL STRINGS
'LBL_ASSIGN_TO_USER' => 'Назначить пользователю' ,
'LBL_BASIC' => 'Настройки входящей почты' ,
'LBL_LOGIN' => 'Логин' ,
'LBL_MAILBOX_DEFAULT' => 'ВХОДЯЩИЕ' ,
'LBL_MAILBOX' => 'Контролируемая папка' ,
'LBL_MAILBOX_TYPE' => 'Возможные действия' ,
'LBL_MARK_READ_NO' => 'E-mail помечаются удалёнными после импортирования' ,
'LBL_MARK_READ_YES' => 'Оставлять E-mail на сервере при импорте' ,
'LBL_MARK_READ' => 'Оставлять сообщения на сервере' ,
'LBL_PORT' => 'Порт почтового сервера' ,
'LBL_SERVER_OPTIONS' => 'Опции почтового сервера' ,
'LBL_SERVER_TYPE' => 'Протокол почтового сервера' ,
'LBL_SERVER_URL' => 'Адрес почтового сервера' ,
'LBL_SSL' => 'Использовать SSL' ,
'LBL_SSL_DESC' => 'Использовать SSL' ,
'LBL_TEST_BUTTON_TITLE' => 'Тестирование' ,
'LBL_TEST_SETTINGS' => 'Тест настроек' ,
'LBL_TEST_SUCCESSFUL' => 'Соединение успешно завершено' ,
'LBL_TOGGLE_ADV' => 'Дополнительные настройки' ,
// END INBOUND EMAIL STRINGS
'LBL_LDAP_EXTENSION_ERROR' => 'Ошибка LDAP. Расширения не загружены',

// PROJECT RESOURCES STRINGS
'LBL_RESOURCE_NAME' => 'Название',

'LBL_MAIL_SMTPUSER' => 'SMTP-пользователь:' ,
'LBL_MAIL_SMTPPASS' => 'SMTP-пароль:' ,
'LBL_SMTP_SERVER_HELP' => 'Сервер SMTP может быть использован для отправки исходящей электронной почты. Для использования данного сервера в настройках учётной записи укажите соответствующего пользователя и пароль.', ////
'LBL_MISSING_DEFAULT_OUTBOUND_SMTP_SETTINGS' => 'Администратор системы ещё не настроил стандартный сервер исходящей почты. Тестовое письмо не может быть отправлено.',


'LBL_MAIL_SMTPTYPE' => 'Тип SMTP-сервера:',
'LBL_MAIL_SMTP_SETTINGS' => 'Настройка SMTP-сервера',
'LBL_CHOOSE_EMAIL_PROVIDER' => 'Выберите почтовую службу:',
'LBL_YAHOOMAIL_SMTPPASS' => 'Yahoo! - пароль:',
'LBL_YAHOOMAIL_SMTPUSER' => 'Yahoo! - учётная запись почты:',
'LBL_GMAIL_SMTPPASS' => 'Gmail - пароль:',
'LBL_GMAIL_SMTPUSER' => 'Gmail - адрес:',
'LBL_EXCHANGE_SMTPPASS' => 'Exchange - пароль:',
'LBL_EXCHANGE_SMTPUSER' => 'Exchange - логин:',
'LBL_EXCHANGE_SMTPPORT' => 'Exchange - порт сервера:',
'LBL_EXCHANGE_SMTPSERVER' => 'Exchange  - сервер:',
'LBL_OK' => 'OK',
'LBL_CANCEL' => 'Отказаться',
'LBL_DELETE_USER' => 'Удаление пользователя',
// Wizard
'LBL_WIZARD_TITLE' => 'Мастер настройки системы',
'LBL_WIZARD_WELCOME_TAB' => 'Добро пожаловать',
'LBL_WIZARD_WELCOME_TITLE' => 'Добро пожаловать в SuiteCRM!',
'LBL_WIZARD_WELCOME' => 'Нажмите на кнопку <b>Далее</b> для настройки основных параметров системы, таких как:<br /><br />&bull;&nbsp;Информация о сотруднике.<br />&bull;&nbsp;Параметры отображения даты, времени, валюты, ФИО.<br />&bull;&nbsp;Параметры сервера исходящей почты.<br /><br />',
'LBL_WIZARD_WELCOME_NOSMTP' => 'Предлагаем вам настроить основные параметры системы.<br /><br />После нажатия на кнопку <b>Далее</b> вам будет предложено настроить следующие параметры:<br /><br />&bull;&nbsp;Информацию о сотруднике.<br />&bull;&nbsp;Параметры отображения даты, времени, валюты, ФИО.<br /><br />',
'LBL_WIZARD_NEXT_BUTTON' => 'Вперёд >',
'LBL_WIZARD_BACK_BUTTON' => '< Назад',
'LBL_WIZARD_SKIP_BUTTON' => 'Пропустить',
'LBL_WIZARD_FINISH_BUTTON' => 'Готово',
'LBL_WIZARD_FINISH_TITLE' => 'Система готова к использованию!',



'LBL_WIZARD_LOCALE' => 'Региональные стандарты',

//Wizard Scenarios
'LBL_WIZARD_SCENARIOS' => 'Наборы модулей',
'LBL_WIZARD_SCENARIOS_EMPTY_LIST' => 'Не выбран ни одни набор модулей',
'LBL_WIZARD_LOCALE_DESC' => 'Укажите способ представления данных в системе, используя региональные настройки. По умолчанию будут использоваться именно эти настройки. При необходимости параметры можно настроить под каждого пользователя, указав необходимые значения в настройках профиля пользователя.',
'LBL_WIZARD_SCENARIOS_DESC' => 'Укажите наборы модулей, которые могут быть востребованы пользователями при работе в системе. При необходимости эти параметры могут быть изменены после установки системы.',

	


'LBL_WIZARD_SMTP_DESC' => 'Укажите параметры сервера исходящей почты.',
'LBL_EAPM_SUBPANEL_TITLE' => 'Внешние учётные записи',

'LBL_EDITLAYOUT' => 'Изменить макет' /*for 508 compliance fix*/,
'LBL_HELP' => 'Справка' /*for 508 compliance fix*/,
'LBL_CHECKMARK' => 'Checkmark', /// /*for 508 compliance fix*/,

'LBL_OAUTH_TOKENS' => 'OAuth-токены',

//For export labels ///
'LBL_SHOW_ON_EMPLOYEES' => 'Отображать в списке сотрудников',

'LBL_DATE_MODIFIED' => 'Дата изменения',
'LBL_DATE_ENTERED' => 'Дата создания',
'LBL_DELETED' => 'Удалено',
'LBL_HIDEOPTIONS' => 'Скрыть параметры',
'LBL_SHOWOPTIONS' => 'Показать параметры',


'LBL_SUITE_SUPERCHARGED' => 'Supercharged by SuiteCRM',
'LBL_SUITE_POWERED_BY' => 'Powered By SugarCRM',
'LBL_SUITE_TOP' => 'Наверх',
'LBL_SUITE_PRINT' => 'Печать',
'LBL_SUITE_DESC1' => 'SuiteCRM has been written and assembled by <a href="https://salesagility.com">SalesAgility</a>.  The Program is provided AS IS, without warranty.  Licensed under AGPLv3.',
'LBL_SUITE_DESC2' => 'This program is free software; you can redistribute it and/or modify it under the terms of the GNU Affero General Public License version 3 as published by the Free Software Foundation, including the additional permission set forth in the source code header.',
'LBL_SUITE_DESC3' => 'SuiteCRM is a trademark of SalesAgility Ltd. All other company and product names may be trademarks of the respective companies with which they are associated.',
'LBL_QUICK_ACCOUNT' => 'Создать контрагента',
'LBL_QUICK_CONTACT' => 'Создать контакт',
'LBL_QUICK_OPPORTUNITY' => 'Создать сделку',
'LBL_QUICK_LEAD' => 'Создать предварит. контакт',
'LBL_QUICK_DOCUMENT' => 'Создать документ',
'LBL_QUICK_CALL' => 'Назначить звонок',
'LBL_QUICK_TASK' => 'Создать задачу',
		
'LBL_ENABLE_NOTIFICATIONS' => 'Отображать всплывающие уведомления браузера',
'LBL_LIST_NONINHERITABLE' => 'Не наследуемая',
'LBL_PRIMARY_GROUP' => 'Основная группа',
'LBL_PASSWORD_MIS_MATCH' => 'не совпадают',

'LBL_EMAIL_INFORMATION' => 'E-MAIL',
'LBL_FW' => 'FW:',
'LBL_RE' => 'RE:',

'LBL_SELECT_FOLDER' => 'Выбрать папку',
'LBL_INDICATOR' => 'Метка импорта',
'LBL_EMAIL_FLAGGED' => 'Отмечено:',
'LBL_HAS_ATTACHMENT_INDICATOR' => 'Наличие вложений',
'LBL_EMPTY_EMAIL_BODY' => '<p><span style="color: #888888;"><em> - Данные отсутствуют - </em></span></p>',
'LBL_TEST_EMAIL_SUBJECT' => 'SuiteCRM - тест настроек электронной почты',
'LBL_NO_SUBJECT' => '(без темы)',
'LBL_CHECKING_ACCOUNT' => 'Проверка учётной записи',
'LBL_OF' => 'из',
'LBL_TEST_EMAIL_BODY' => 'Это сообщение было отправлено с целью проверки настроек сервера исходящей почты SuiteCRM. Получение этого письма свидетельствует о корректных настройках сервера исходящей почты.',

'LBL_QS_DISABLED' => '(Функция быстрого поиска не доступна для данного модуля. Пожалуйста, используйте кнопку выбора.)',


'LBL_ENTER_FOLDER_NAME' => 'Укажите название папки',
'LBL_ERROR_SELECT_MODULE' => 'Пожалуйста, выберите соответствующий модуль.',

'ERR_ARCHIVE_EMAIL' => 'Ошибка: Выберите сообщения для архивирования.' ,

'LBL_ACCOUNTS_SUBPANEL_TITLE' => 'Контрагенты' ,
'LBL_ADD_DASHLETS' => 'Добавить дашлеты',
'LBL_ADD_DOCUMENT' => 'Добавить документ' ,
'LBL_ADD_ENTRIES' => 'Добавить записи',
'LBL_ADD_FILE' => 'Добавить файлы' ,
'LBL_ATTACHMENTS' => 'Вложения:' ,
'LBL_HAS_ATTACHMENT' => 'Содержит вложение?',
'LBL_BCC' => 'Скрытая копия:' ,
'LBL_BODY' => 'Тело:' ,
'LBL_BUGS_SUBPANEL_TITLE' => 'Ошибки' ,
'LBL_CC' => 'Копия:' ,
'LBL_COMPOSE_MODULE_NAME' => 'Создать E-mail' ,
'LBL_CONTACT_NAME' => 'Контакт:' ,
'LBL_CONTACTS_SUBPANEL_TITLE' => 'Контакты' ,
'LBL_CREATED_BY' => 'Кем создано:' ,
'LBL_DATE_SENT' => 'Дата отправки:' ,
'LBL_DATE' => 'Дата отправки:' ,
'LBL_DELETE_FROM_SERVER' => 'Удалить сообщение с сервера',

'LBL_EDIT_ALT_TEXT' => 'Правка альтернативного текста' ,
'LBL_SEND_IN_PLAIN_TEXT' => 'Отправить в виде неформатир. текста',
'LBL_EMAIL_ATTACHMENT' => 'Вложение E-mail' ,

'LBL_EMAIL_SELECTOR_SELECT' => 'Выбрать',
'LBL_EMAIL_SELECTOR_CLEAR' => 'Очистить',

'LBL_EMAILS_ACCOUNTS_REL' => 'E-mail: Контрагенты' ,
'LBL_EMAILS_BUGS_REL' => 'E-mail: Ошибки' ,
'LBL_EMAILS_CASES_REL' => 'E-mail: Обращения' ,
'LBL_EMAILS_CONTACTS_REL' => 'E-mail: Контакты' ,
'LBL_EMAILS_LEADS_REL' => 'E-mail: Предварительные контакты' ,
'LBL_EMAILS_OPPORTUNITIES_REL' => 'E-mail: Сделки' ,
'LBL_EMAILS_NOTES_REL' => 'E-mail: Заметки',
'LBL_EMAILS_PROJECT_REL' => 'E-mail: Проект' ,
'LBL_EMAILS_PROJECT_TASK_REL' => 'E-mail: Проектная задача' ,
'LBL_EMAILS_PROSPECT_REL' => 'E-mail: Потенциальный клиент' ,
'LBL_EMAILS_CONTRACTS_REL' => 'E-mail: Договор',
'LBL_EMAILS_TASKS_REL' => 'E-mail: Задачи' ,
'LBL_EMAILS_USERS_REL' => 'E-mail: Пользователи' ,
'LBL_EMPTY_FOLDER' => 'Папка пуста',
'LBL_ERROR_SENDING_EMAIL' => 'Ошибка при отправке E-mail' ,
'LBL_ERROR_SAVING_DRAFT' => 'Ошибка сохранения черновика',
'LBL_FROM_NAME' => 'Имя отправителя' ,
'LBL_FROM' => 'От:' ,
'LBL_REPLY_TO' => 'Ответить:',
'LBL_HTML_BODY' => 'Тело HTML' ,
'LBL_INVITEE' => 'Получатели' ,
'LBL_LEADS_SUBPANEL_TITLE' => 'Предварительные контакты' ,
'LBL_MESSAGE_SENT' => 'Сообщение отправлено' ,


'LBL_MY_EMAILS' => 'Мои E-mail',

'LBL_NONE' => 'Нет',
'LBL_NOT_SENT' => 'Ошибка отправки' ,
'LBL_NOTES_SUBPANEL_TITLE' => 'Вложения',
'LBL_OPPORTUNITY_SUBPANEL_TITLE' => 'Сделки' ,
'LBL_PROJECT_SUBPANEL_TITLE' => 'Проекты' ,
'LBL_PROJECT_TASK_SUBPANEL_TITLE' => 'Проектные задачи' ,
'LBL_RAW' => 'Исходный E-mail',
'LBL_SAVE_AS_DRAFT_BUTTON_TITLE' => 'Сохранить черновик' ,

'LBL_SEND_ANYWAYS' => 'Не указана тема письма. Все равно отправить?' ,
'LBL_SEND_BUTTON_LABEL' => 'Отправить' ,
'LBL_SEND_BUTTON_TITLE' => 'Отправить' ,
'LBL_SEND' => 'ОТПРАВИТЬ' ,
'LBL_SENT_MODULE_NAME' => 'Отправленные E-mail' ,
'LBL_SHOW_ALT_TEXT' => 'Показ альтернативного текста' ,

'LBL_SUBJECT' => 'Тема:' ,
'LBL_TEXT_BODY' => 'Текст' ,
'LBL_TIME' => 'Время отправки:' ,
'LBL_TO_ADDRS' => 'Кому:' ,
'LBL_USERS_SUBPANEL_TITLE' => 'Пользователи' ,
'LBL_USERS' => 'Пользователи' ,

'LNK_CALL_LIST' => 'Звонки' ,
'LBL_EMAIL_RELATE' => 'Связано с',
'LNK_EMAIL_TEMPLATE_LIST' => 'Шаблоны E-mail' ,
'LNK_MEETING_LIST' => 'Встречи' ,
'LNK_NEW_CALL' => 'Назначить звонок' ,
'LNK_NEW_EMAIL_TEMPLATE' => 'Создать шаблон E-mail' ,
'LNK_NEW_EMAIL' => 'Отправить E-mail' ,
'LNK_NEW_MEETING' => 'Назначить встречу' ,
'LNK_NEW_NOTE' => 'Создать заметку или вложение' ,
'LNK_NEW_SEND_EMAIL' => 'Создать E-mail' ,
'LNK_NEW_TASK' => 'Создать задачу' ,
'LNK_NOTE_LIST' => 'Заметки' ,
'LNK_SENT_EMAIL_LIST' => 'Отправленные E-mail' ,
'LNK_TASK_LIST' => 'Задачи' ,
'LNK_VIEW_CALENDAR' => 'Сегодня' ,

'LBL_LIST_ASSIGNED' => 'Назначено' ,
'LBL_LIST_CONTACT_NAME' => 'Контактное лицо' ,
'LBL_LIST_DATE_SENT' => 'Дата отправки' ,
'LBL_LIST_DATE' => 'Дата отправки' ,
'LBL_LIST_FORM_DRAFTS_TITLE' => 'Набросок' ,
'LBL_LIST_FORM_SENT_TITLE' => 'Отправленные E-mail' ,

'LBL_LIST_FROM_ADDR' => 'От' ,
'LBL_LIST_RELATED_TO' => 'Тип получателя' ,
'LBL_LIST_SUBJECT' => 'Тема' ,
'LBL_LIST_TO_ADDR' => 'Для' ,
'LBL_LIST_TYPE' => 'Тип' ,

'WARNING_SETTINGS_NOT_CONF' => 'Предупреждение: Ваши установки e-mail не сконфигурированы для отправки e-mail.' ,

// for All emails
'LBL_BUTTON_RAW_LABEL' => 'Показать исходный текст сообщения',
'LBL_BUTTON_RAW_LABEL_HIDE' => 'Скрыть исходный текст сообщения',

// for InboundEmail
'LBL_BUTTON_CHECK' => 'Проверить почту' ,
'LBL_BUTTON_CHECK_TITLE' => 'Проверить почту' ,
'LBL_BUTTON_FORWARD' => 'Переслать' ,
'LBL_BUTTON_REPLY_TITLE' => 'Ответить' ,
'LBL_BUTTON_REPLY_ALL' => 'Ответить всем',
'LBL_CASES_SUBPANEL_TITLE' => 'Обращения' ,

'LBL_INTENT' => 'Цель' ,
'LBL_MESSAGE_ID' => 'ID сообщения' ,
'LBL_REPLY_HEADER_1' => '',
'LBL_REPLY_HEADER_2' => 'писал(а):',
'LBL_REPLY_TO_ADDRESS' => 'Ответить на адрес' ,
'LBL_REPLY_TO_NAME' => 'Ответить на имя' ,

'LBL_LIST_BUG' => 'Ошибки' ,
'LBL_LIST_CASE' => 'Обращения' ,
'LBL_LIST_CONTACT' => 'Контакты' ,
'LBL_LIST_LEAD' => 'Предварит. контакты' ,
'LBL_LIST_TASK' => 'Задачи' ,
'LBL_LIST_ASSIGNED_TO_NAME' => 'Ответственный(ая)',

// for Inbox
'LBL_ALL' => 'Все' ,
'LBL_ASSIGN_WARN' => 'Проверьте, что все 2 опции установлены.' ,
'LBL_BACK_TO_GROUP' => 'Возврат к групповым входящим' ,
'LBL_BUTTON_DISTRIBUTE_TITLE' => 'Назначение' ,
'LBL_BUTTON_DISTRIBUTE' => 'Назначить' ,
'LBL_BUTTON_GRAB_TITLE' => 'Взять из группы' ,
'LBL_BUTTON_GRAB' => 'Взять из группы' ,
'LBL_CREATE_BUG' => 'Добавить ошибку' ,
'LBL_CREATE_CASE' => 'Создать обращение' ,
'LBL_CREATE_CONTACT' => 'Создать контакт' ,
'LBL_CREATE_LEAD' => 'Создать предв. контакт' ,
'LBL_CREATE_TASK' => 'Создать задачу' ,
'LBL_DIST_TITLE' => 'Назначение' ,
'LBL_LOCK_FAIL_DESC' => 'Выбранный пункт не доступен в настоящее время.' ,
'LBL_LOCK_FAIL_USER' => ' взят владельцем.' ,
'LBL_MASS_DELETE_ERROR' => 'Нет отмеченных записей для удаления.' ,
'LBL_NEW' => 'Новый' ,
'LBL_NEXT_EMAIL' => 'Следующая свободная запись' ,
'LBL_REPLIED' => 'Дан ответ' ,
'LBL_TO' => 'Кому:' ,
'LBL_TOGGLE_ALL' => 'Отметить все' ,
'LBL_UNKNOWN' => 'Неизвестно' ,
'LBL_USE' => 'Назначение:' ,
'LBL_ASSIGN_SELECTED_RESULTS_TO' => 'Назначить выбранные результаты: ',
'LBL_USER_SELECT' => 'Выбор пользователей' ,
'LBL_USING_RULES' => 'Правило назначения:' ,
'LBL_WARN_NO_DIST' => 'Не выбран метод рассылки' ,
'LBL_WARN_NO_USERS' => 'Пользователи не выбраны' ,
'LBL_IMPORT_STATUS_TITLE' => 'Статус',

'LBL_LIST_TITLE_GROUP_INBOX' => 'Групповые входящие' ,
'LBL_LIST_TITLE_MY_DRAFTS' => 'Мои черновики' ,
'LBL_LIST_TITLE_MY_INBOX' => 'Мои входящие' ,
'LBL_LIST_TITLE_MY_SENT' => 'Мои отправленные письма' ,
'LBL_LIST_TITLE_MY_ARCHIVES' => 'Моя архивная почта' ,

'LNK_MY_DRAFTS' => 'Мои черновики' ,
'LNK_MY_INBOX' => 'Моя почта' ,
'LNK_VIEW_MY_INBOX' => 'Просмотр моих E-mail',
'LNK_QUICK_REPLY' => 'Ответить' ,
'LBL_EMAILS_NO_PRIMARY_TEAM_SPECIFIED' => 'Не указана основная Группа пользователей',

// advanced search
'LBL_ASSIGNED_TO' => 'Ответственный(ая): ' ,
'LBL_MEMBER_OF' => 'Родитель' ,
'LBL_QUICK_CREATE' => 'Быстрое создание' ,

'LBL_EMAIL_REPLY_TO_STATUS' => 'Статус ответа:',
'LBL_TYPE' => 'Тип:' ,
//#20680 EmialTemplate Ext.Message.show;
'LBL_EMAILTEMPLATE_MESSAGE_SHOW_TITLE' => 'Обратите внимание!',
'LBL_EMAILTEMPLATE_MESSAGE_SHOW_MSG' => 'Выбор данного шаблона приведёт к перезаписи всех данных, введённых в тело письма. Все равно продолжить?',
'LBL_EMAILTEMPLATE_MESSAGE_CLEAR_MSG' => 'При выборе пункта "--не выбрано--" будет удалён весь текст из тела письма. Все равно продолжить?',
'LBL_EMAILTEMPLATE_MESSAGE_WARNING_TITLE' => 'Внимание',
'LBL_EMAILTEMPLATE_MESSAGE_MULTIPLE_RECIPIENTS' => 'Использование шаблона письма, содержащего переменные контакта (например - имя контакта), для рассылки письма сразу нескольким получателям может привести к неожиданным результатам. Рекомендуется использовать маркетинговые кампании для массовой рассылки электронных писем.',
'LBL_CHECK_ATTACHMENTS' => 'Пожалуйста, проверьте вложения!',
'LBL_HAS_ATTACHMENTS' => 'Е-mail содержит вложения. Хотите их сохранить?',
'ERR_MISSING_REQUIRED_FIELDS' => 'Необходимые поля не заполнены',
'ERR_INVALID_REQUIRED_FIELDS' => 'Необходимые поля неверно заполнены',
'LBL_FILTER_BY_RELATED_BEAN' => 'Показать только связанных с записью получателей',
'LBL_ADD_INBOUND_ACCOUNT' => 'Добавить',
'LBL_ADD_OUTBOUND_ACCOUNT' => 'Добавить',
'LBL_EMAIL_ACCOUNTS_INBOUND' => 'Параметры учётной записи',
'LBL_EMAIL_SETTINGS_OUTBOUND_ACCOUNT' => 'Сервер исходящей почты',
'LBL_EMAIL_SETTINGS_OUTBOUND_ACCOUNTS' => 'Серверы исходящей почты',
'LBL_EMAIL_SETTINGS_INBOUND_ACCOUNTS' => 'Учётные записи электронной почты',
'LBL_EMAIL_SETTINGS_INBOUND' => 'Входящие E-mail',
'LBL_EMAIL_SETTINGS_OUTBOUND' => 'Исходящие E-mail',
'LBL_ADD_CC' => 'Добавить копию',
'LBL_ADD_BCC' => 'Добавить скрытую копию',
'LBL_MOVE_TO_BCC' => 'Переместить в скрытую копию',
'LBL_ADD_TO_ADDR' => 'Добавить в',
'LBL_SELECTED_ADDR' => 'Выбрано',
'LBL_ADD_CC_BCC_SEP' => '|',
'LBL_SEND_EMAIL_FAIL_TITLE' => 'Ошибка отправки Е-mail',
'LBL_EMAIL_DETAIL_VIEW_SHOW' => 'показать ',
'LBL_EMAIL_DETAIL_VIEW_MORE' => ' больше',
'LBL_MORE_OPTIONS' => 'Дополнительные поля>>',
'LBL_LESS_OPTIONS' => '<<Стандартные поля',
'LBL_MAILBOX_TYPE_PERSONAL' => 'Персональная',
'LBL_MAILBOX_TYPE_GROUP' => 'Групповая',
'LBL_MAILBOX_TYPE_GROUP_FOLDER' => 'Групповая-автоимпорт',
'LBL_SEARCH_FOR' => 'Поиск',
'LBL_EMAIL_INBOUND_TYPE_HELP' => '<b>Персональная</b>: Ваша учётная запись. Только вы можете работать с письмами этой учётной записи.<br><b>Групповая</b>: Групповая учётная запись. Все участники группы могут работать с письмами этой учётной записи.<br><b>Групповая-автоимпорт</b>: Групповая учётная запись. Письма данной учётной записи автоматически импортируются в систему.',
'LBL_ADDRESS_BOOK_SEARCH_HELP' => 'Введите имя, фамилию, адрес электронной почты получателя, название контрагента или имя предварительного контакта.',

'LBL_EDIT_LAYOUT' => 'Изменить макет' /*for 508 compliance fix*/,
'LBL_ATTACHMENT' => 'Вложение' /*for 508 compliance fix*/,
'LBL_DELETE_INLINE' => 'Удалить' /*for 508 compliance fix*/,
'LBL_CREATE_CASES' => 'Создание Обращений' /*for 508 compliance fix*/,
'LBL_CREATE_LEADS' => 'Создание Предварит. контактов' /*for 508 compliance fix*/,
'LBL_CREATE_CONTACTS' => 'Создание Контактов' /*for 508 compliance fix*/,
'LBL_CREATE_BUGS' => 'Новые Ошибки' /*for 508 compliance fix*/,
'LBL_CREATE_TASKS' => 'Создание Задач' /*for 508 compliance fix*/,
'LBL_CHECK_INLINE' => 'Correct', //// /*for 508 compliance fix*/,
'LBL_CLOSE' => 'Закрыть' /*for 508 compliance fix*/,

'LBL_WAIT' => 'Подождите' /*for 508 compliance fix*/,
'LBL_CHECKEMAIL' => 'Проверить почту' /*for 508 compliance fix*/,
'LBL_COMPOSEEMAIL' => 'Создать E-mail' /*for 508 compliance fix*/,
'LBL_EMAILSETTINGS' => 'Параметры E-mail' /*for 508 compliance fix*/,

// SNIP
'LBL_EMAILS_MEETINGS_REL' => 'E-mail: Встречи',

'LBL_CATEGORY' => 'Категория',
'LBL_LIST_CATEGORY' => 'Категория',
'LBL_EDITOR_TYPE' => 'Текстовый редактор:',

'LBL_CONTACTS_SYNC' => 'Контакты',
'LBL_PROJECT_USERS_1_FROM_PROJECT_TITLE' => 'Пользователи',
'LBL_ROLES' => 'Роли',
'LBL_SECURITYGROUPS' => 'Группы пользователей',

   
); // END STRINGS DEFS
