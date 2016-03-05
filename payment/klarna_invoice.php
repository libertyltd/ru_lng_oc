<?php
// Text
$_['text_title']				= 'Счет Klarna - Оплата в течении 14 дней';
$_['text_terms_fee']			= '<span id="klarna_invoice_toc"></span> (+%s)<script type="text/javascript">var terms = new Klarna.Terms.Invoice({el: \'klarna_invoice_toc\', eid: \'%s\', country: \'%s\', charge: %s});</script>';
$_['text_terms_no_fee']			= '<span id="klarna_invoice_toc"></span><script type="text/javascript">var terms = new Klarna.Terms.Invoice({el: \'klarna_invoice_toc\', eid: \'%s\', country: \'%s\'});</script>';
$_['text_additional']			= 'Для счета Klarna терубется указать дополнительную информацию, прежде чем они смогут обработать ваш заказ.';
$_['text_male']					= 'Мужчина';
$_['text_female']				= 'Женщина';
$_['text_year']					= 'Год';
$_['text_month']				= 'Месяц';
$_['text_day']					= 'День';
$_['text_comment']				= 'Номер выставленного счета Klarna: %s. ' . "\n" . '%s/%s: %.4f';

// Entry
$_['entry_gender']				= 'Пол';
$_['entry_pno']					= 'Личный номер';
$_['entry_dob']					= 'Дата рождения';
$_['entry_phone_no']			= 'Номер телефона';
$_['entry_street']				= 'Улица';
$_['entry_house_no']			= 'Номер дома';
$_['entry_house_ext']			= 'корпус / строение, доп. информация';
$_['entry_company']				= 'Регистрационный номер компании';

// Help
$_['help_pno']					= 'Пожалуйста введите сюда номер своего социального страхования.';
$_['help_phone_no']				= 'Пожалуйста введите номер вашего телефона.';
$_['help_street']				= 'Пожалуйста обратите внимание, что доставка может быть осуществлена на зарегистированный адрес при оплате Klarna.';
$_['help_house_no']				= 'Пожалуйста введите номер вашего дома.';
$_['help_house_ext']			= 'Пожалуйста, укажите свой добавочный номер дома (корпус / строение) здесь. E.g. A, B, C, Red, Blue ect.';
$_['help_company']				= 'Пожалуйста введите номер вашей регистрационной компании';

// Error
$_['error_deu_terms']			= 'Вы должны согласиться с политикой конфеденциальности Klarna (Datenschutz)';
$_['error_address_match']		= 'Адрес доставки и биллинг должны совпадать если вы хотите использовать платежи Klarna';
$_['error_network']				= 'Произошла ошибка при подключении к Klarna. Пожалуйста повторите попытку позже.';