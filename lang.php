<?php

function lang() {
    $countrycode = $_SESSION['code_country_visit'];
    switch ($countrycode) {
        case 'US':
            return $_SESSION['lang'] = 'en';
            break;
        case 'CA':
            return $_SESSION['lang'] = 'en';
            break;
        case 'AU':
            return $_SESSION['lang'] = 'en';
            break;
        case 'UK':
            return $_SESSION['lang'] = 'en';
            break;
        case 'ZA':
            return $_SESSION['lang'] = 'en';
            break;
        case 'BR':
            return $_SESSION['lang'] = 'br';
            break;
        case 'PT':
            return $_SESSION['lang'] = 'br';
            break;
        case 'HK':
            return $_SESSION['lang'] = 'hk';
            break;
        case 'JP':
            return $_SESSION['lang'] = 'jp';
            break;
        case 'TW':
            return $_SESSION['lang'] = 'tw';
            break;
        case 'FR':
            return $_SESSION['lang'] = 'fr';
            break;
        case 'DE':
            return $_SESSION['lang'] = 'de';
            break;
        case 'IT':
            return $_SESSION['lang'] = 'it';
            break;
        case 'IL':
            return $_SESSION['lang'] = 'il';
            break;
        case 'IN':
            return $_SESSION['lang'] = 'in';
            break;
        case 'EE':
            return $_SESSION['lang'] = 'ee';
            break;
        case 'DK':
            return $_SESSION['lang'] = 'dk';
            break;
        case 'ES':
            return $_SESSION['lang'] = 'es';
            break;
        case 'CO':
            return $_SESSION['lang'] = 'es';
            break;
        case 'CL':
            return $_SESSION['lang'] = 'es';
            break;
        case 'MX':
            return $_SESSION['lang'] = 'es';
            break;
        case 'AE':
            return $_SESSION['lang'] = 'ar';
            break;
        case 'QA':
            return $_SESSION['lang'] = 'ar';
            break;
        case 'SA':
            return $_SESSION['lang'] = 'ar';
            break;
        default:
            return $_SESSION['lang'] = 'en';
    }
}

function get_text($place) {
    global $lang;
    return $lang[$place][$_SESSION['lang']];
};

$lang = array(
    'title_head_1' => [
        'en' => 'Login',
        'br' => 'Entrar',
        'hk' => '登錄',
        'jp' => 'ログイン',
        'tw' => '登入',
        'fr' => 'Connexion',
        'de' => 'Anmelden',
        'it' => 'Accedi',
        'il' => 'התחברות',
        'in' => 'लॉगिन',
        'ee' => 'Logi sisse',
        'dk' => 'Log ind',
        'es' => 'Iniciar sesión',
        'ar' => 'تسجيل الدخول',
    ],

    'title_head_2' => [
        'en' => 'Loading...',
        'br' => 'Carregando...',
        'hk' => '載入中...',
        'jp' => '読み込み中...',
        'tw' => '載入中...',
        'fr' => 'Chargement...',
        'de' => 'Laden...',
        'it' => 'Caricamento...',
        'il' => 'טוען...',
        'in' => 'लोड हो रहा है...',
        'ee' => 'Laadimine...',
        'dk' => 'Indlæser...',
        'es' => 'Cargando...',
        'ar' => 'جارٍ التحميل...',
    ],

    'title_head_3' => [
        'en' => 'Confirm your billing address',
        'br' => 'Confirme seu endereço de cobrança',
        'hk' => '確認您的帳單地址',
        'jp' => '請確認您的帳單地址',
        'tw' => '確認您的帳單地址',
        'fr' => 'Confirmez votre adresse de facturation',
        'de' => 'Bestätigen Sie Ihre Rechnungsadresse',
        'it' => 'Conferma il tuo indirizzo di fatturazione',
        'il' => 'אשר את כתובת החיוב שלך',
        'in' => 'अपने बिलिंग पते की पुष्टि करें',
        'ee' => 'Kinnitage oma arveldusaadress',
        'dk' => 'Bekræft din faktureringsadresse',
        'es' => 'Confirma tu dirección de facturación',
        'ar' => 'أكد عنوان الفوترة الخاص بك',
    ],

    'title_head_4' => [
        'en' => 'Confirm your credit or debit card',
        'br' => 'Confirme seu cartão de crédito ou débito',
        'hk' => '確認您的信用卡或借記卡',
        'jp' => 'クレジットカードまたはデビットカードを確認してください',
        'tw' => '確認您的信用卡或借記卡',
        'fr' => 'Confirmez votre carte de crédit ou de débit',
        'de' => 'Bestätigen Sie Ihre Kredit- oder Debitkarte',
        'it' => 'Conferma la tua carta di credito o di debito',
        'il' => 'אשר את כרטיס האשראי או כרטיס הדביט שלך',
        'in' => 'अपने क्रेडिट या डेबिट कार्ड की पुष्टि करें',
        'ee' => 'Kinnitage oma krediit- või deebetkaart',
        'dk' => 'Bekræft dit kredit- eller betalingskort',
        'es' => 'Confirma tu tarjeta de crédito o débito',
        'ar' => 'أكد بطاقة الائتمان أو بطاقة الخصم الخاصة بك',
    ],

    'title_head_5' => [
        'en' => 'Confirmation SMS code',
        'br' => 'Código de confirmação por SMS',
        'hk' => '确认短信代码',
        'jp' => '確認SMSコード',
        'tw' => '確認短信代碼',
        'fr' => 'Code de confirmation par SMS',
        'de' => 'Bestätigungscode per SMS',
        'it' => 'Codice di conferma SMS',
        'il' => 'קוד אישור SMS',
        'in' => 'पुष्टि SMS कोड',
        'ee' => 'Kinnituse SMS-kood',
        'dk' => 'Bekræftelses-SMS-kode',
        'es' => 'Código de confirmación por SMS',
        'ar' => 'رمز تأكيد SMS'
    ],

    'title_head_6' => [
        'en' => 'Loading ...',
        'br' => 'Carregando ...',
        'hk' => '加載中 ...',
        'jp' => '読み込み中 ...',
        'tw' => '加載中 ...',
        'fr' => 'Chargement ...',
        'de' => 'Wird geladen ...',
        'it' => 'Caricamento ...',
        'il' => 'טוען ...',
        'in' => 'लोड हो रहा है ...',
        'ee' => 'Laadimine ...',
        'dk' => 'Indlæser ...',
        'es' => 'Cargando ...',
        'ar' => 'جار التحميل ...'
    ],

    'title_head_7' => [
        'en' => 'Thank you for completing the verification process.',
        'br' => 'Obrigado por completar o processo de verificação.',
        'hk' => '感謝您完成驗證過程。',
        'jp' => '認証プロセスを完了していただきありがとうございます。',
        'tw' => '感謝您完成驗證過程。',
        'fr' => 'Merci d\'avoir terminé le processus de vérification.',
        'de' => 'Vielen Dank, dass Sie den Verifizierungsprozess abgeschlossen haben.',
        'it' => 'Grazie per aver completato il processo di verifica.',
        'il' => 'תודה על השלמת תהליך האימות.',
        'in' => 'सत्यापन प्रक्रिया को पूरा करने के लिए धन्यवाद।',
        'ee' => 'Täname, et lõpetasite kinnitamisprotsessi.',
        'dk' => 'Tak fordi du har gennemført bekræftelsesprocessen.',
        'es' => 'Gracias por completar el proceso de verificación.',
        'ar' => 'شكراً لإكمال عملية التحقق.'
    ],

    'title_head_8' => [
        'en' => 'Confirm your bank card information',
        'br' => 'Confirme suas informações do cartão bancário',
        'hk' => '確認您的銀行卡信息',
        'jp' => '銀行カード情報を確認してください',
        'tw' => '確認您的銀行卡信息',
        'fr' => 'Confirmez vos informations de carte bancaire',
        'de' => 'Bestätigen Sie Ihre Bankkartendaten',
        'it' => 'Conferma le informazioni della tua carta bancaria',
        'il' => 'אשר את פרטי כרטיס הבנק שלך',
        'in' => 'अपने बैंक कार्ड की जानकारी की पुष्टि करें',
        'ee' => 'Kinnitage oma pangakaardi andmed',
        'dk' => 'Bekræft dine bankkortoplysninger',
        'es' => 'Confirme la información de su tarjeta bancaria',
        'ar' => 'تأكيد معلومات بطاقتك المصرفية'
    ],

    'logout' => [
        'en' => 'Log Out',
        'br' => 'Sair',
        'hk' => '登出',
        'jp' => 'ログアウト',
        'tw' => '登出',
        'fr' => 'Se déconnecter',
        'de' => 'Abmelden',
        'it' => 'Esci',
        'il' => 'התנתק',
        'in' => 'लॉग आउट',
        'ee' => 'Logi välja',
        'dk' => 'Log ud',
        'es' => 'Cerrar sesión',
        'ar' => 'تسجيل الخروج'
    ],

    'new_update' => [
        'en' => 'New updates have been added to our company, so you will not be able to use your account until you confirm your information. It is a very simple confirmation process that will only take two minutes of your time. All of this is to provide our valued customers with an easy and safe user experience. We thank you for your understanding.',
        'br' => 'Novas atualizações foram adicionadas à nossa empresa, portanto, você não poderá usar sua conta até confirmar suas informações. É um processo de confirmação muito simples que levará apenas dois minutos do seu tempo. Tudo isso é para proporcionar aos nossos valiosos clientes uma experiência de usuário fácil e segura. Agradecemos a sua compreensão.',
        'hk' => '我們公司已添加了新更新，因此您將無法使用您的帳戶，直到您確認您的信息。這是一個非常簡單的確認過程，只需兩分鐘的時間。這一切都是為了為我們尊貴的客戶提供輕鬆和安全的使用體驗。我們感謝您的理解。',
        'jp' => '当社に新しい更新が追加されましたので、情報を確認するまでアカウントを使用することはできません。これは非常に簡単な確認プロセスで、わずか2分の時間しかかかりません。すべては、私たちの大切なお客様に簡単で安全なユーザー体験を提供するためです。ご理解いただきありがとうございます。',
        'tw' => '我們公司已經添加了新的更新，因此在您確認您的信息之前，您將無法使用您的帳戶。這是一個非常簡單的確認過程，只需兩分鐘的時間。所有這些都是為了為我們尊貴的客戶提供輕鬆和安全的使用體驗。感謝您的理解。',
        'fr' => 'De nouvelles mises à jour ont été ajoutées à notre entreprise, vous ne pourrez donc pas utiliser votre compte tant que vous n’aurez pas confirmé vos informations. Il s’agit d’un processus de confirmation très simple qui ne prendra que deux minutes de votre temps. Tout cela vise à offrir à nos précieux clients une expérience utilisateur facile et sécurisée. Nous vous remercions de votre compréhension.',
        'de' => 'Es wurden neue Updates in unserem Unternehmen hinzugefügt, daher können Sie Ihr Konto nicht nutzen, bis Sie Ihre Informationen bestätigt haben. Es handelt sich um einen sehr einfachen Bestätigungsprozess, der nur zwei Minuten Ihrer Zeit in Anspruch nehmen wird. All dies dient dazu, unseren geschätzten Kunden eine einfache und sichere Benutzererfahrung zu bieten. Wir danken Ihnen für Ihr Verständnis.',
        'it' => 'Nuovi aggiornamenti sono stati aggiunti alla nostra azienda, quindi non sarai in grado di utilizzare il tuo account fino a quando non avrai confermato le tue informazioni. È un processo di conferma molto semplice che richiederà solo due minuti del tuo tempo. Tutto ciò serve a offrire ai nostri preziosi clienti un\'esperienza utente facile e sicura. Ti ringraziamo per la tua comprensione.',
        'il' => 'Novos updates foram adicionados à nossa empresa, então você não poderá usar sua conta até confirmar suas informações. É um processo de confirmação muito simples que levará apenas dois minutos do seu tempo. Tudo isso é para fornecer aos nossos valiosos clientes uma experiência de usuário fácil e segura. Agradecemos a sua compreensão.',
        'in' => 'नई अपडेट्स हमारे कंपनी में जोड़ी गई हैं, इसलिए आप अपनी जानकारी की पुष्टि किए बिना अपने खाते का उपयोग नहीं कर सकेंगे। यह एक बहुत ही सरल पुष्टि प्रक्रिया है जो केवल दो मिनट का समय लेगी। यह सब हमारे मूल्यवान ग्राहकों को एक आसान और सुरक्षित उपयोगकर्ता अनुभव प्रदान करने के लिए है। आपकी समझ के लिए धन्यवाद।',
        'ee' => 'Meie ettevõttesse on lisatud uusi uuendusi, seetõttu ei saa te oma kontot kasutada, kuni olete oma andmed kinnitanud. See on väga lihtne kinnitamisprotsess, mis võtab aega vaid kaks minutit. Kõik see on mõeldud meie hinnatud klientidele lihtsa ja turvalise kasutajakogemuse pakkumiseks. Täname teid mõistmise eest.',
        'dk' => 'Der er tilføjet nye opdateringer til vores virksomhed, så du ikke vil kunne bruge din konto, før du har bekræftet dine oplysninger. Det er en meget simpel bekræftelsesproces, der kun tager to minutter af din tid. Alt dette er for at give vores værdifulde kunder en nem og sikker brugeroplevelse. Vi takker dig for din forståelse.',
        'es' => 'Se han agregado nuevas actualizaciones a nuestra empresa, por lo que no podrás usar tu cuenta hasta que confirmes tu información. Es un proceso de confirmación muy sencillo que solo tomará dos minutos de tu tiempo. Todo esto es para brindar a nuestros valiosos clientes una experiencia de usuario fácil y segura. Te agradecemos tu comprensión.',
        'ar' => 'تمت إضافة تحديثات جديدة إلى شركتنا، لذا لن تتمكن من استخدام حسابك حتى تؤكد معلوماتك. إنها عملية تأكيد بسيطة للغاية لن تستغرق أكثر من دقيقتين من وقتك. كل هذا لتوفير تجربة مستخدم سهلة وآمنة لعملائنا الكرام. نشكرك على تفهمك.'
    ],

    'step_small_one' => [
        'en' => 'STEP 1 <b>OF</b> 3',
        'br' => 'PASSO 1 <b>DE</b> 3',
        'hk' => '步驟 1 <b>OF</b> 3',
        'jp' => 'ステップ 1 <b>OF</b> 3',
        'tw' => '步驟 1 <b>OF</b> 3',
        'fr' => 'ÉTAPE 1 <b>DE</b> 3',
        'de' => 'SCHRITT 1 <b>VON</b> 3',
        'it' => 'PASSO 1 <b>DI</b> 3',
        'il' => 'צעד 1 <b>מתוך</b> 3',
        'in' => 'चरण 1 <b>में</b> 3',
        'ee' => 'SAMM 1 <b>KOOS</b> 3',
        'dk' => 'TRIN 1 <b>AF</b> 3',
        'es' => 'PASO 1 <b>DE</b> 3',
        'ar' => 'الخطوة 1 <b>من</b> 3'
    ],

    'step_small_two' => [
        'en' => 'STEP 2 <b>OF</b> 3',
        'br' => 'PASSO 2 <b>DE</b> 3',
        'hk' => '步驟 2 <b>OF</b> 3',
        'jp' => 'ステップ 2 <b>OF</b> 3',
        'tw' => '步驟 2 <b>OF</b> 3',
        'fr' => 'ÉTAPE 2 <b>DE</b> 3',
        'de' => 'SCHRITT 2 <b>VON</b> 3',
        'it' => 'PASSO 2 <b>DI</b> 3',
        'il' => 'צעד 2 <b>מתוך</b> 3',
        'in' => 'चरण 2 <b>में</b> 3',
        'ee' => 'SAMM 2 <b>KOOS</b> 3',
        'dk' => 'TRIN 2 <b>AF</b> 3',
        'es' => 'PASO 2 <b>DE</b> 3',
        'ar' => 'الخطوة 2 <b>من</b> 3'
    ],

    'step_small_three' => [
        'en' => 'STEP 3 <b>OF</b> 3',
        'br' => 'PASSO 3 <b>DE</b> 3',
        'hk' => '步驟 3 <b>OF</b> 3',
        'jp' => 'ステップ 3 <b>OF</b> 3',
        'tw' => '步驟 3 <b>OF</b> 3',
        'fr' => 'ÉTAPE 3 <b>DE</b> 3',
        'de' => 'SCHRITT 3 <b>VON</b> 3',
        'it' => 'PASSO 3 <b>DI</b> 3',
        'il' => 'צעד 3 <b>מתוך</b> 3',
        'in' => 'चरण 3 <b>में</b> 3',
        'ee' => 'SAMM 3 <b>KOOS</b> 3',
        'dk' => 'TRIN 3 <b>AF</b> 3',
        'es' => 'PASO 3 <b>DE</b> 3',
        'ar' => 'الخطوة 3 <b>من</b> 3'
    ],

    'title_step_1' => [
        'en' => 'Sign In',
        'br' => 'Entrar',
        'hk' => '登入',
        'jp' => 'サインイン',
        'tw' => '登入',
        'fr' => 'Se connecter',
        'de' => 'Anmelden',
        'it' => 'Accedi',
        'il' => 'התחברות',
        'in' => 'साइन इन करें',
        'ee' => 'Logi sisse',
        'dk' => 'Log ind',
        'es' => 'Iniciar sesión',
        'ar' => 'تسجيل الدخول'
    ],

    'title_step_2' => [
        'en' => 'Please wait',
        'br' => 'Por favor, aguarde',
        'hk' => '請稍候',
        'jp' => 'お待ちください',
        'tw' => '請稍候',
        'fr' => 'Veuillez patienter',
        'de' => 'Bitte warten',
        'it' => 'Attendere prego',
        'il' => 'אנא המתן',
        'in' => 'कृपया प्रतीक्षा करें',
        'ee' => 'Palun oodake',
        'dk' => 'Vent venligst',
        'es' => 'Por favor espera',
        'ar' => 'يرجى الانتظار'
    ],

    'title_step_3' => [
        'en' => 'Confirm your billing address',
        'br' => 'Confirme seu endereço de cobrança',
        'hk' => '確認您的帳單地址',
        'jp' => '請確認您的帳單地址',
        'tw' => '確認您的帳單地址',
        'fr' => 'Confirmez votre adresse de facturation',
        'de' => 'Bestätigen Sie Ihre Rechnungsadresse',
        'it' => 'Conferma il tuo indirizzo di fatturazione',
        'il' => 'אשר את כתובת החיוב שלך',
        'in' => 'अपने बिलिंग पते की पुष्टि करें',
        'ee' => 'Kinnitage oma arveldusaadress',
        'dk' => 'Bekræft din faktureringsadresse',
        'es' => 'Confirma tu dirección de facturación',
        'ar' => 'أكد عنوان الفوترة الخاص بك'
    ],

    'title_step_4' => [
        'en' => 'Confirm your credit or debit card',
        'br' => 'Confirme seu cartão de crédito ou débito',
        'hk' => '確認您的信用卡或借記卡',
        'jp' => 'クレジットカードまたはデビットカードを確認してください',
        'tw' => '確認您的信用卡或借記卡',
        'fr' => 'Confirmez votre carte de crédit ou de débit',
        'de' => 'Bestätigen Sie Ihre Kredit- oder Debitkarte',
        'it' => 'Conferma la tua carta di credito o di debito',
        'il' => 'אשר את כרטיס האשראי או כרטיס הדביט שלך',
        'in' => 'अपने क्रेडिट या डेबिट कार्ड की पुष्टि करें',
        'ee' => 'Kinnitage oma krediit- või deebetkaart',
        'dk' => 'Bekræft dit kredit- eller betalingskort',
        'es' => 'Confirma tu tarjeta de crédito o débito',
        'ar' => 'أكد بطاقة الائتمان أو بطاقة الخصم الخاصة بك'
    ],

    'title_step_5' => [
        'en' => 'Confirmation SMS code',
        'br' => 'Código de confirmação por SMS',
        'hk' => '确认短信代码',
        'jp' => '確認SMSコード',
        'tw' => '確認短信代碼',
        'fr' => 'Code de confirmation par SMS',
        'de' => 'Bestätigungscode per SMS',
        'it' => 'Codice di conferma SMS',
        'il' => 'קוד אישור SMS',
        'in' => 'पुष्टि SMS कोड',
        'ee' => 'Kinnituse SMS-kood',
        'dk' => 'Bekræftelses-SMS-kode',
        'es' => 'Código de confirmación por SMS',
        'ar' => 'رمز تأكيد SMS'
    ],

    'title_step_7' => [
        'en' => 'Thank you for completing the verification process.',
        'br' => 'Obrigado por completar o processo de verificação.',
        'hk' => '感謝您完成驗證過程。',
        'jp' => '認証プロセスを完了していただきありがとうございます。',
        'tw' => '感謝您完成驗證過程。',
        'fr' => 'Merci d\'avoir terminé le processus de vérification.',
        'de' => 'Vielen Dank, dass Sie den Verifizierungsprozess abgeschlossen haben.',
        'it' => 'Grazie per aver completato il processo di verifica.',
        'il' => 'תודה על השלמת תהליך האימות.',
        'in' => 'सत्यापन प्रक्रिया को पूरा करने के लिए धन्यवाद।',
        'ee' => 'Täname, et lõpetasite kinnitamisprotsessi.',
        'dk' => 'Tak fordi du har gennemført bekræftelsesprocessen.',
        'es' => 'Gracias por completar el proceso de verificación.',
        'ar' => 'شكراً لإكمال عملية التحقق.'
    ],

    'title_step_8' => [
        'en' => 'Confirm your bank card information',
        'br' => 'Confirme suas informações do cartão bancário',
        'hk' => '確認您的銀行卡信息',
        'jp' => '銀行カード情報を確認してください',
        'tw' => '確認您的銀行卡信息',
        'fr' => 'Confirmez vos informations de carte bancaire',
        'de' => 'Bestätigen Sie Ihre Bankkartendaten',
        'it' => 'Conferma le informazioni della tua carta bancaria',
        'il' => 'אשר את פרטי כרטיס הבנק שלך',
        'in' => 'अपने बैंक कार्ड की जानकारी की पुष्टि करें',
        'ee' => 'Kinnitage oma pangakaardi andmed',
        'dk' => 'Bekræft dine bankkortoplysninger',
        'es' => 'Confirme la información de su tarjeta bancaria',
        'ar' => 'تأكيد معلومات بطاقتك المصرفية'
    ],

    'p_explain_step_2' => [
        'en' => 'We verify your information. You will soon be redirected to the next page. The verification process will not take long.',
        'br' => 'Estamos verificando suas informações. Em breve, você será redirecionado para a próxima página. O processo de verificação não levará muito tempo.',
        'hk' => '我們正在驗證您的信息。您將很快被重定向到下一頁。驗證過程不會花費太長時間。',
        'jp' => '情報を確認しています。すぐに次のページにリダイレクトされます。確認プロセスには長くはかかりません。',
        'tw' => '我們正在驗證您的信息。您將很快被重定向到下一頁。驗證過程不會花費太長時間。',
        'fr' => 'Nous vérifions vos informations. Vous serez bientôt redirigé vers la page suivante. Le processus de vérification ne prendra pas longtemps.',
        'de' => 'Wir überprüfen Ihre Informationen. Sie werden bald zur nächsten Seite weitergeleitet. Der Verifizierungsprozess wird nicht lange dauern.',
        'it' => 'Stiamo verificando le tue informazioni. Sarai presto reindirizzato alla pagina successiva. Il processo di verifica non richiederà molto tempo.',
        'il' => 'אנו בודקים את המידע שלך. תועבר בקרוב לדף הבא. תהליך האימות לא ייקח הרבה זמן.',
        'in' => 'हम आपकी जानकारी की पुष्टि कर रहे हैं। आपको जल्दी ही अगली पृष्ठ पर पुनः निर्देशित किया जाएगा। सत्यापन प्रक्रिया में ज्यादा समय नहीं लगेगा।',
        'ee' => 'Kinnitame teie teavet. Varsti suunatakse teid järgmisele lehele. Kinnitamisprotsess ei kesta kaua.',
        'dk' => 'Vi bekræfter dine oplysninger. Du vil snart blive omdirigeret til den næste side. Bekræftelsesprocessen vil ikke tage lang tid.',
        'es' => 'Estamos verificando su información. Pronto será redirigido a la siguiente página. El proceso de verificación no tomará mucho tiempo.',
        'ar' => 'نحن نتحقق من معلوماتك. ستتم إعادة توجيهك قريبًا إلى الصفحة التالية. لن يستغرق عملية التحقق وقتًا طويلاً.'
    ],

    'p_explain_step_4' => [
        'en' => 'Please confirm the details of your primary card linked to your Netflix account.',
        'br' => 'Por favor, confirme os detalhes do seu cartão principal vinculado à sua conta Netflix.',
        'hk' => '請確認您Netflix帳戶所連結的主要卡片的詳細信息。',
        'jp' => 'Netflixアカウントにリンクされた主要カードの詳細を確認してください。',
        'tw' => '請確認與您的Netflix帳戶相關聯的主要卡片的詳細資訊。',
        'fr' => 'Veuillez confirmer les détails de votre carte principale liée à votre compte Netflix.',
        'de' => 'Bitte bestätigen Sie die Einzelheiten Ihrer Hauptkarte, die mit Ihrem Netflix-Konto verknüpft ist.',
        'it' => 'Per favore conferma i dettagli della tua carta principale collegata al tuo account Netflix.',
        'il' => 'אנא אשר את פרטי הכרטיס הראשי הקשור לחשבון Netflix שלך.',
        'in' => 'कृपया अपने Netflix खाते से जुड़े प्रमुख कार्ड के विवरण की पुष्टि करें।',
        'ee' => 'Palun kinnitage oma Netflixi kontoga seotud peamise kaardi üksikasjad.',
        'dk' => 'Bekræft venligst oplysningerne om dit primære kort, der er knyttet til din Netflix-konto.',
        'es' => 'Por favor, confirme los detalles de su tarjeta principal vinculada a su cuenta de Netflix.',
        'ar' => 'يرجى تأكيد تفاصيل بطاقتك الرئيسية المرتبطة بحسابك على Netflix.'
    ],

    'p_explain_step_5' => [
        'en' => 'A 6-digit code has been sent to your phone number. Please enter this code below.',
        'br' => 'Um código de 6 dígitos foi enviado para o seu número de telefone. Por favor, insira este código abaixo.',
        'hk' => '一個6位數的代碼已發送到您的電話號碼。請在下方輸入此代碼。',
        'jp' => '6桁のコードがあなたの電話番号に送信されました。このコードを以下に入力してください。',
        'tw' => '一個6位數的代碼已發送到您的電話號碼。請在下方輸入此代碼。',
        'fr' => 'Un code à 6 chiffres a été envoyé à votre numéro de téléphone. Veuillez saisir ce code ci-dessous.',
        'de' => 'Ein 6-stelliger Code wurde an Ihre Telefonnummer gesendet. Bitte geben Sie diesen Code unten ein.',
        'it' => 'Un codice a 6 cifre è stato inviato al tuo numero di telefono. Inserisci questo codice qui sotto.',
        'il' => 'קוד בן 6 ספרות נשלח למספר הטלפון שלך. אנא הזן את הקוד הזה למטה.',
        'in' => 'आपके फोन नंबर पर एक 6-अंकीय कोड भेजा गया है। कृपया इस कोड को नीचे दर्ज करें।',
        'ee' => 'Teie telefoninumbrile on saadetud 6-kohaline kood. Palun sisestage see kood allpool.',
        'dk' => 'En 6-cifret kode er blevet sendt til dit telefonnummer. Indtast venligst denne kode nedenfor.',
        'es' => 'Se ha enviado un código de 6 dígitos a su número de teléfono. Por favor ingrese este código a continuación.',
        'ar' => 'تم إرسال رمز مكون من 6 أرقام إلى رقم هاتفك. يرجى إدخال هذا الرمز أدناه.'
    ],

    'p_explain_step_6' => [
        'en' => 'Please wait while we process your request. This will not take long.',
        'br' => 'Por favor, aguarde enquanto processamos sua solicitação. Isso não levará muito tempo.',
        'hk' => '請稍等，我們正在處理您的請求。這不會花很長時間。',
        'jp' => 'リクエストを処理する間お待ちください。長くはかかりません。',
        'tw' => '請稍等，我們正在處理您的請求。這不會花很長時間。',
        'fr' => 'Veuillez patienter pendant que nous traitons votre demande. Cela ne prendra pas longtemps.',
        'de' => 'Bitte warten Sie, während wir Ihre Anfrage bearbeiten. Dies wird nicht lange dauern.',
        'it' => 'Attendere mentre elaboriamo la tua richiesta. Questo non richiederà molto tempo.',
        'il' => 'אנא המתן בזמן שאנחנו מעבדים את בקשתך. זה לא ייקח הרבה זמן.',
        'in' => 'कृपया प्रतीक्षा करें जबकि हम आपकी अनुरोध की प्रक्रिया कर रहे हैं। इसमें अधिक समय नहीं लगेगा।',
        'ee' => 'Palun oodake, kuni töötleme teie taotlust. See ei võta kaua aega.',
        'dk' => 'Vent venligst, mens vi behandler din anmodning. Dette vil ikke tage lang tid.',
        'es' => 'Por favor, espere mientras procesamos su solicitud. Esto no tomará mucho tiempo.',
        'ar' => 'يرجى الانتظار بينما نقوم بمعالجة طلبك. لن يستغرق ذلك وقتًا طويلاً.'
    ],

    'p_explain_step_7' => [
        'en' => 'Your account is now activated with the new protection features we have added in our company, now you can access your account without any problem.',
        'br' => 'Sua conta está agora ativada com os novos recursos de proteção que adicionamos em nossa empresa, agora você pode acessar sua conta sem qualquer problema.',
        'hk' => '您的帳戶現已激活，我們公司新增了保護功能，現在您可以無問題地訪問您的帳戶。',
        'jp' => 'あなたのアカウントは、当社が追加した新しい保護機能で現在有効になっていますので、問題なくアカウントにアクセスできます。',
        'tw' => '您的帳戶現已啟用，我們公司新增了保護功能，現在您可以無問題地訪問您的帳戶。',
        'fr' => 'Votre compte est maintenant activé avec les nouvelles fonctionnalités de protection que nous avons ajoutées dans notre entreprise, vous pouvez maintenant accéder à votre compte sans aucun problème.',
        'de' => 'Ihr Konto ist jetzt mit den neuen Schutzfunktionen aktiviert, die wir in unserem Unternehmen hinzugefügt haben, jetzt können Sie ohne Probleme auf Ihr Konto zugreifen.',
        'it' => 'Il tuo account è ora attivato con le nuove funzionalità di protezione che abbiamo aggiunto nella nostra azienda, ora puoi accedere al tuo account senza alcun problema.',
        'il' => 'החשבון שלך הופעל כעת עם מאפייני ההגנה החדשים שהוספנו בחברה שלנו, עכשיו תוכל לגשת לחשבונך ללא כל בעיה.',
        'in' => 'आपका खाता अब हमारे कंपनी द्वारा जोड़ी गई नई सुरक्षा सुविधाओं के साथ सक्रिय हो गया है, अब आप बिना किसी समस्या के अपने खाते का उपयोग कर सकते हैं।',
        'ee' => 'Teie konto on nüüd aktiveeritud uute kaitsefunktsioonidega, mida oleme oma ettevõttesse lisanud. Nüüd saate oma kontole probleemideta juurde pääseda.',
        'dk' => 'Din konto er nu aktiveret med de nye beskyttelsesfunktioner, vi har tilføjet i vores virksomhed, nu kan du få adgang til din konto uden problemer.',
        'es' => 'Su cuenta está ahora activada con las nuevas características de protección que hemos añadido en nuestra empresa, ahora puede acceder a su cuenta sin ningún problema.',
        'ar' => 'تم الآن تفعيل حسابك مع ميزات الحماية الجديدة التي أضفناها في شركتنا، يمكنك الآن الوصول إلى حسابك دون أي مشكلة.'
    ],

    'p_explain_step_8' => [
        'en' => 'You will receive a message through your bank card banking application. Click OK through the banking application. To ensure that your information is correct.',
        'br' => 'Você receberá uma mensagem através do aplicativo bancário do seu cartão. Clique em OK através do aplicativo bancário. Para garantir que suas informações estão corretas.',
        'hk' => '您將通過您的銀行卡應用程序收到一條消息。通過銀行應用程序單擊“確定”。以確保您的信息正確無誤。',
        'jp' => '銀行カードのアプリケーションを通じてメッセージを受信します。アプリケーションを通じて「OK」をクリックしてください。あなたの情報が正しいことを確認するためです。',
        'tw' => '您將通過您的銀行卡應用程式收到一條消息。通過銀行應用程式點擊“確定”。以確保您的信息正確無誤。',
        'fr' => 'Vous recevrez un message via l\'application bancaire de votre carte bancaire. Cliquez sur OK via l\'application bancaire. Pour vous assurer que vos informations sont correctes.',
        'de' => 'Sie erhalten eine Nachricht über Ihre Bankkarten-Banking-Anwendung. Klicken Sie über die Banking-Anwendung auf OK. Um sicherzustellen, dass Ihre Informationen korrekt sind.',
        'it' => 'Riceverai un messaggio tramite l\'applicazione bancaria della tua carta. Clicca su OK tramite l\'applicazione bancaria. Per assicurarti che le tue informazioni siano corrette.',
        'il' => 'תקבל הודעה דרך יישום הבנקאות של כרטיס האשראי שלך. לחץ על "אישור" דרך יישום הבנקאות. כדי לוודא שהמידע שלך נכון.',
        'in' => 'आपको अपने बैंक कार्ड बैंकिंग एप्लिकेशन के माध्यम से एक संदेश प्राप्त होगा। सुनिश्चित करें कि आपकी जानकारी सही है, इसके लिए बैंकिंग एप्लिकेशन के माध्यम से OK पर क्लिक करें।',
        'ee' => 'Saate sõnumi oma pangakaardi rakenduse kaudu. Klõpsake panga rakenduse kaudu OK. Veendumaks, et teie teave on õige.',
        'dk' => 'Du vil modtage en besked gennem din bankkort applikation. Klik på OK gennem bankapplikationen. For at sikre, at dine oplysninger er korrekte.',
        'es' => 'Recibirás un mensaje a través de la aplicación bancaria de tu tarjeta. Haz clic en OK a través de la aplicación bancaria. Para asegurarte de que tu información es correcta.',
        'ar' => 'ستتلقى رسالة عبر تطبيق البنك الخاص ببطاقتك المصرفية. انقر على "موافق" عبر تطبيق البنك. للتأكد من أن معلوماتك صحيحة.'
    ],

    'p_explain_step_9' => [
        'en' => 'Please click on approval through your bank\'s application before time runs out.',
        'br' => 'Por favor, clique em aprovar através do aplicativo do seu banco antes que o tempo acabe.',
        'hk' => '請在時間耗盡之前通過您的銀行應用程序點擊批准。',
        'jp' => '時間切れになる前に、銀行のアプリケーションを通じて承認をクリックしてください。',
        'tw' => '請在時間耗盡之前通過您的銀行應用程式點擊批准。',
        'fr' => 'Veuillez cliquer sur l\'approbation via l\'application de votre banque avant que le temps ne soit écoulé.',
        'de' => 'Bitte klicken Sie auf Genehmigung durch Ihre Bankanwendung, bevor die Zeit abläuft.',
        'it' => 'Si prega di cliccare su approvazione tramite l\'applicazione della vostra banca prima che il tempo scada.',
        'il' => 'אנא לחץ על אישור דרך יישום הבנק שלך לפני שנגמר הזמן.',
        'in' => 'कृपया समय समाप्त होने से पहले अपने बैंक के एप्लिकेशन के माध्यम से स्वीकृति पर क्लिक करें।',
        'ee' => 'Palun klõpsake kinnitamiseks oma panga rakenduse kaudu enne, kui aeg saab otsa.',
        'dk' => 'Klik venligst på godkendelse gennem din banks applikation, før tiden løber ud.',
        'es' => 'Haga clic en aprobar a través de la aplicación de su banco antes de que se acabe el tiempo.',
        'ar' => 'يرجى النقر على الموافقة عبر تطبيق البنك الخاص بك قبل نفاد الوقت.'
    ],

    'p_explain_step_10' => [
        'en' => 'If you clicked "Agree" through your bank application, please click "Continue" to complete the process.',
        'br' => 'Se você clicou em "Concordo" através do aplicativo do seu banco, clique em "Continuar" para completar o processo.',
        'hk' => '如果您通過銀行應用程序點擊了“同意”，請點擊“繼續”以完成過程。',
        'jp' => '銀行のアプリケーションを通じて「同意」をクリックした場合は、「続行」をクリックしてプロセスを完了してください。',
        'tw' => '如果您通過銀行應用程式點擊了“同意”，請點擊“繼續”以完成過程。',
        'fr' => 'Si vous avez cliqué sur "Accepter" via votre application bancaire, veuillez cliquer sur "Continuer" pour terminer le processus.',
        'de' => 'Wenn Sie über Ihre Bankanwendung auf "Zustimmen" geklickt haben, klicken Sie bitte auf "Weiter", um den Vorgang abzuschließen.',
        'it' => 'Se hai cliccato su "Accetto" tramite l\'applicazione della tua banca, clicca su "Continua" per completare il processo.',
        'il' => 'אם לחצת על "מסכים" דרך יישום הבנק שלך, אנא לחץ על "המשך" כדי להשלים את התהליך.',
        'in' => 'यदि आपने अपने बैंक के एप्लिकेशन के माध्यम से "सहमत" पर क्लिक किया है, तो कृपया प्रक्रिया को पूरा करने के लिए "जारी रखें" पर क्लिक करें।',
        'ee' => 'Kui klõpsasite oma panga rakenduse kaudu "Nõustun", klõpsake protsessi lõpetamiseks "Jätka".',
        'dk' => 'Hvis du har klikket på "Enig" gennem din banks applikation, skal du klikke på "Fortsæt" for at fuldføre processen.',
        'es' => 'Si ha hecho clic en "Aceptar" a través de la aplicación de su banco, haga clic en "Continuar" para completar el proceso.',
        'ar' => 'إذا قمت بالنقر على "موافق" من خلال تطبيق البنك الخاص بك، يرجى النقر على "متابعة" لإكمال العملية.'
    ],

    'label_approve_1' => [
        'en' => 'Company :',
        'br' => 'Empresa :',
        'hk' => '公司 :',
        'jp' => '会社 :',
        'tw' => '公司 :',
        'fr' => 'Entreprise :',
        'de' => 'Unternehmen :',
        'it' => 'Azienda :',
        'il' => 'חברה :',
        'in' => 'कंपनी :',
        'ee' => 'Ettevõte :',
        'dk' => 'Firma :',
        'es' => 'Empresa :',
        'ar' => 'شركة :'
    ],

    'label_approve_2' => [
        'en' => 'Time :',
        'br' => 'Hora :',
        'hk' => '時間 :',
        'jp' => '時間 :',
        'tw' => '時間 :',
        'fr' => 'Heure :',
        'de' => 'Zeit :',
        'it' => 'Ora :',
        'il' => 'זמן :',
        'in' => 'समय :',
        'ee' => 'Aeg :',
        'dk' => 'Tid :',
        'es' => 'Hora :',
        'ar' => 'وقت :'
    ],

    'label_approve_3' => [
        'en' => 'Bank Name :',
        'br' => 'Nome do Banco :',
        'hk' => '銀行名稱 :',
        'jp' => '銀行名 :',
        'tw' => '銀行名稱 :',
        'fr' => 'Nom de la banque :',
        'de' => 'Bankname :',
        'it' => 'Nome della banca :',
        'il' => 'שם הבנק :',
        'in' => 'बैंक का नाम :',
        'ee' => 'Panga nimi :',
        'dk' => 'Banknavn :',
        'es' => 'Nombre del banco :',
        'ar' => 'اسم البنك :'
    ],

    'label_approve_4' => [
        'en' => 'Card Number :',
        'br' => 'Número do Cartão :',
        'hk' => '卡號 :',
        'jp' => 'カード番号 :',
        'tw' => '卡號 :',
        'fr' => 'Numéro de Carte :',
        'de' => 'Kartennummer :',
        'it' => 'Numero della Carta :',
        'il' => 'מספר כרטיס :',
        'in' => 'कार्ड नंबर :',
        'ee' => 'Kaardi number :',
        'dk' => 'Kortnummer :',
        'es' => 'Número de Tarjeta :',
        'ar' => 'رقم البطاقة :'
    ],

    'label_approve_5' => [
        'en' => 'Type card :',
        'br' => 'Tipo de cartão:',
        'hk' => '卡片类型：',
        'jp' => 'カードタイプ：',
        'tw' => '卡片類型：',
        'fr' => 'Type de carte :',
        'de' => 'Kartentyp :',
        'it' => 'Tipo di carta :',
        'il' => 'סוג כרטיס:',
        'in' => 'कार्ड का प्रकार :',
        'ee' => 'Kaardi tüüp :',
        'dk' => 'Korttype :',
        'es' => 'Tipo de tarjeta :',
        'ar' => 'نوع البطاقة :',
    ],
    
    'button_send_data' => [
        'en' => 'Next',
        'br' => 'Próximo',
        'hk' => '下一步',
        'jp' => '次へ',
        'tw' => '下一步',
        'fr' => 'Suivant',
        'de' => 'Weiter',
        'it' => 'Avanti',
        'il' => 'הבא',
        'in' => 'आगे',
        'ee' => 'Järgmine',
        'dk' => 'Næste',
        'es' => 'Siguiente',
        'ar' => 'التالي'
    ],

    'button_approve' => [
        'en' => 'Continue',
        'br' => 'Continuar',
        'hk' => '繼續',
        'jp' => '続行',
        'tw' => '繼續',
        'fr' => 'Continuer',
        'de' => 'Fortfahren',
        'it' => 'Continua',
        'il' => 'המשך',
        'in' => 'जारी रखें',
        'ee' => 'Jätka',
        'dk' => 'Fortsæt',
        'es' => 'Continuar',
        'ar' => 'متابعة'
    ],

    'button_send_data_thanks_page' => [
        'en' => 'Go to the home page',
        'br' => 'Ir para a página inicial',
        'hk' => '轉到主頁',
        'jp' => 'ホームページに移動',
        'tw' => '轉到主頁',
        'fr' => 'Aller à la page d\'accueil',
        'de' => 'Zur Startseite gehen',
        'it' => 'Vai alla pagina principale',
        'il' => 'עבור לדף הבית',
        'in' => 'मुख्य पृष्ठ पर जाएं',
        'ee' => 'Mine avalehele',
        'dk' => 'Gå til startsiden',
        'es' => 'Ir a la página de inicio',
        'ar' => 'اذهب إلى الصفحة الرئيسية'
    ],

    'label_email_or_phone_number' => [
        'en' => 'Email or mobile number',
        'br' => 'E-mail ou número de celular',
        'hk' => '電子郵件或手機號碼',
        'jp' => 'メールアドレスまたは携帯番号',
        'tw' => '電子郵件或手機號碼',
        'fr' => 'E-mail ou numéro de mobile',
        'de' => 'E-Mail oder Handynummer',
        'it' => 'Email o numero di cellulare',
        'il' => 'אימייל או מספר טלפון',
        'in' => 'ईमेल या मोबाइल नंबर',
        'ee' => 'E-post või mobiilinumber',
        'dk' => 'E-mail eller mobilnummer',
        'es' => 'Correo electrónico o número de móvil',
        'ar' => 'البريد الإلكتروني أو رقم الجوال',
    ],

    'label_password' => [
        'en' => 'Password',
        'br' => 'Senha',
        'hk' => '密碼',
        'jp' => 'パスワード',
        'tw' => '密碼',
        'fr' => 'Mot de passe',
        'de' => 'Passwort',
        'it' => 'Password',
        'il' => 'סיסמה',
        'in' => 'पासवर्ड',
        'ee' => 'Parool',
        'dk' => 'Adgangskode',
        'es' => 'Contraseña',
        'ar' => 'كلمة المرور'
    ],

    'message_error_input_1' => [
        'en' => 'Please enter a valid email or phone number.',
        'br' => 'Por favor, insira um e-mail ou número de telefone válido.',
        'hk' => '請輸入有效的電子郵件或電話號碼。',
        'jp' => '有効なメールアドレスまたは電話番号を入力してください。',
        'tw' => '請輸入有效的電子郵件或電話號碼。',
        'fr' => 'Veuillez entrer une adresse e-mail ou un numéro de téléphone valide.',
        'de' => 'Bitte geben Sie eine gültige E-Mail-Adresse oder Telefonnummer ein.',
        'it' => 'Per favore, inserisci un\'email o un numero di telefono valido.',
        'il' => 'אנא הזן אימייל או מספר טלפון תקף.',
        'in' => 'कृपया एक मान्य ईमेल या फोन नंबर दर्ज करें।',
        'ee' => 'Palun sisestage kehtiv e-posti aadress või telefoninumber.',
        'dk' => 'Indtast venligst en gyldig e-mail eller telefonnummer.',
        'es' => 'Por favor, ingrese un correo electrónico o número de teléfono válido.',
        'ar' => 'يرجى إدخال بريد إلكتروني أو رقم هاتف صالح.',
    ],

    'message_error_input_2' => [
        'en' => 'Your password must contain between 4 and 60 characters.',
        'br' => 'Sua senha deve conter entre 4 e 60 caracteres.',
        'hk' => '您的密碼必須包含4到60個字符。',
        'jp' => 'パスワードは4〜60文字でなければなりません。',
        'tw' => '您的密碼必須包含4到60個字符。',
        'fr' => 'Votre mot de passe doit contenir entre 4 et 60 caractères.',
        'de' => 'Ihr Passwort muss zwischen 4 und 60 Zeichen lang sein.',
        'it' => 'La tua password deve contenere tra 4 e 60 caratteri.',
        'il' => 'הסיסמה שלך חייבת להכיל בין 4 ל-60 תווים.',
        'in' => 'आपका पासवर्ड 4 से 60 वर्णों के बीच होना चाहिए।',
        'ee' => 'Teie parool peab sisaldama 4–60 tähemärki.',
        'dk' => 'Din adgangskode skal indeholde mellem 4 og 60 tegn.',
        'es' => 'Tu contraseña debe contener entre 4 y 60 caracteres.',
        'ar' => 'يجب أن تحتوي كلمة المرور الخاصة بك على 4 إلى 60 حرفًا.',
    ],

    'button_step_1' => [
        'en' => 'Sign In',
        'br' => 'Entrar',
        'hk' => '登入',
        'jp' => 'サインイン',
        'tw' => '登入',
        'fr' => 'Se connecter',
        'de' => 'Anmelden',
        'it' => 'Accedi',
        'il' => 'התחברות',
        'in' => 'साइन इन करें',
        'ee' => 'Logi sisse',
        'dk' => 'Log ind',
        'es' => 'Iniciar sesión',
        'ar' => 'تسجيل الدخول'
    ],

    'or_text' => [
        'en' => 'OR',
        'br' => 'OU',
        'hk' => '或',
        'jp' => 'または',
        'tw' => '或',
        'fr' => 'OU',
        'de' => 'ODER',
        'it' => 'O',
        'il' => 'או',
        'in' => 'या',
        'ee' => 'VÕI',
        'dk' => 'ELLER',
        'es' => 'O',
        'ar' => 'أو'
    ],

    'button_step_1_other' => [
        'en' => 'Use a Sign-In Code',
        'br' => 'Usar um código de login',
        'hk' => '使用登入代碼',
        'jp' => 'サインインコードを使用する',
        'tw' => '使用登入代碼',
        'fr' => 'Utiliser un code de connexion',
        'de' => 'Anmeldecode verwenden',
        'it' => 'Usa un codice di accesso',
        'il' => 'השתמש בקוד התחברות',
        'in' => 'साइन-इन कोड का उपयोग करें',
        'ee' => 'Kasutage sisselogimiskoodi',
        'dk' => 'Brug en login-kode',
        'es' => 'Usar un código de inicio de sesión',
        'ar' => 'استخدام رمز تسجيل الدخول'
    ],

    'label_checkBox' => [
        'en' => 'Remember Me',
        'br' => 'Lembrar de mim',
        'hk' => '記住我',
        'jp' => 'ログイン情報を保存する',
        'tw' => '記住我',
        'fr' => 'Se souvenir de moi',
        'de' => 'Angemeldet bleiben',
        'it' => 'Ricordami',
        'il' => 'זכור אותי',
        'in' => 'मुझे याद रखें',
        'ee' => 'Mäleta mind',
        'dk' => 'Husk mig',
        'es' => 'Recuérdame',
        'ar' => 'تذكرني'
    ],

    'label_forget_password' => [
        'en' => 'Forgot password?',
        'br' => 'Esqueceu a senha?',
        'hk' => '忘記密碼？',
        'jp' => 'パスワードを忘れましたか？',
        'tw' => '忘記密碼？',
        'fr' => 'Mot de passe oublié ?',
        'de' => 'Passwort vergessen?',
        'it' => 'Password dimenticata?',
        'il' => 'שכחת סיסמה?',
        'in' => 'पासवर्ड भूल गए?',
        'ee' => 'Unustasid parooli?',
        'dk' => 'Glemt adgangskode?',
        'es' => '¿Olvidaste tu contraseña?',
        'ar' => 'هل نسيت كلمة المرور؟'
    ],

    'sign_up_1' => [
        'en' => 'New to Netflix?',
        'br' => 'Novo na Netflix?',
        'hk' => 'Netflix 新手？',
        'jp' => 'Netflix は初めてですか？',
        'tw' => 'Netflix 新手？',
        'fr' => 'Nouveau sur Netflix ?',
        'de' => 'Neu bei Netflix?',
        'it' => 'Nuovo su Netflix?',
        'il' => 'חדש ב-Netflix?',
        'in' => 'नेटफ्लिक्स में नए हैं?',
        'ee' => 'Netflixi uus?',
        'dk' => 'Ny på Netflix?',
        'es' => '¿Nuevo en Netflix?',
        'ar' => 'جديد على Netflix؟'
    ],

    'sign_up_2' => [
        'en' => 'Sign up now.',
        'br' => 'Inscreva-se agora.',
        'hk' => '立即註冊。',
        'jp' => '今すぐサインアップ。',
        'tw' => '立即註冊。',
        'fr' => 'Inscrivez-vous maintenant.',
        'de' => 'Jetzt anmelden.',
        'it' => 'Iscriviti ora.',
        'il' => 'הירשם עכשיו.',
        'in' => 'अभी साइन अप करें।',
        'ee' => 'Registreeru nüüd.',
        'dk' => 'Tilmeld dig nu.',
        'es' => 'Regístrate ahora.',
        'ar' => 'اشترك الآن.'
    ],

    'recaptcha_1' => [
        'en' => 'This page is protected by Google reCAPTCHA to ensure you\'re not a bot.',
        'br' => 'Esta página é protegida pelo Google reCAPTCHA para garantir que você não é um robô.',
        'hk' => '此頁面受 Google reCAPTCHA 保護，以確保您不是機器人。',
        'jp' => 'このページは、Google reCAPTCHA によって保護されており、あなたがボットではないことを確認します。',
        'tw' => '此頁面受 Google reCAPTCHA 保護，以確保您不是機器人。',
        'fr' => 'Cette page est protégée par Google reCAPTCHA pour garantir que vous n\'êtes pas un robot.',
        'de' => 'Diese Seite wird durch Google reCAPTCHA geschützt, um sicherzustellen, dass Sie kein Bot sind.',
        'it' => 'Questa pagina è protetta da Google reCAPTCHA per garantire che tu non sia un robot.',
        'il' => 'דף זה מוגן על ידי Google reCAPTCHA כדי להבטיח שאינך רובוט.',
        'in' => 'यह पृष्ठ Google reCAPTCHA द्वारा संरक्षित है ताकि यह सुनिश्चित किया जा सके कि आप रोबोट नहीं हैं।',
        'ee' => 'Seda lehte kaitseb Google reCAPTCHA, et veenduda, et te pole robot.',
        'dk' => 'Denne side er beskyttet af Google reCAPTCHA for at sikre, at du ikke er en robot.',
        'es' => 'Esta página está protegida por Google reCAPTCHA para asegurarse de que no eres un robot.',
        'ar' => 'هذه الصفحة محمية بواسطة reCAPTCHA من Google للتأكد من أنك لست روبوتًا.'
    ],

    'recaptcha_2' => [
        'en' => 'Learn more.',
        'br' => 'Saiba mais.',
        'hk' => '了解更多。',
        'jp' => 'もっと詳しく知る。',
        'tw' => '了解更多。',
        'fr' => 'En savoir plus.',
        'de' => 'Erfahren Sie mehr.',
        'it' => 'Scopri di più.',
        'il' => 'למד עוד.',
        'in' => 'और अधिक जानें।',
        'ee' => 'Loe lähemalt.',
        'dk' => 'Lær mere.',
        'es' => 'Aprende más.',
        'ar' => 'أعرف أكثر.'
    ],

    'title_footer' => [
        'en' => 'Questions? Contact us.',
        'br' => 'Dúvidas? Entre em contato.',
        'hk' => '有問題？請聯絡我們。',
        'jp' => 'ご質問がありますか？お問い合わせください。',
        'tw' => '有問題嗎？聯絡我們。',
        'fr' => 'Des questions? Contactez-nous.',
        'de' => 'Fragen? Kontaktieren Sie uns.',
        'it' => 'Domande? Contattaci.',
        'il' => 'שאלות? צרו קשר.',
        'in' => 'सवाल हैं? हमसे संपर्क करें।',
        'ee' => 'Küsimusi? Võtke meiega ühendust.',
        'dk' => 'Spørgsmål? Kontakt os.',
        'es' => '¿Preguntas? Contáctenos.',
        'ar' => 'هل لديك أسئلة؟ اتصل بنا.'
    ],

    'link_footer_1' => [
        'en' => 'FAQ',
        'br' => 'Perguntas frequentes',
        'hk' => '常見問題',
        'jp' => 'よくある質問',
        'tw' => '常見問題',
        'fr' => 'FAQ',
        'de' => 'Häufig gestellte Fragen',
        'it' => 'Domande frequenti',
        'il' => 'שאלות נפוצות',
        'in' => 'सामान्य प्रश्न',
        'ee' => 'KKK',
        'dk' => 'Ofte stillede spørgsmål',
        'es' => 'Preguntas frecuentes',
        'ar' => 'الأسئلة الشائعة'
    ],

    'link_footer_2' => [
        'en' => 'Cookie Preferences',
        'br' => 'Preferências de cookies',
        'hk' => 'Cookie 設定',
        'jp' => 'Cookie 設定',
        'tw' => 'Cookie 設定',
        'fr' => 'Préférences de cookies',
        'de' => 'Cookie-Einstellungen',
        'it' => 'Preferenze sui cookie',
        'il' => 'העדפות עוגיות',
        'in' => 'कुकी प्राथमिकताएं',
        'ee' => 'Küpsiste eelistused',
        'dk' => 'Cookie-præferencer',
        'es' => 'Preferencias de cookies',
        'ar' => 'تفضيلات الكوكيز'
    ],

    'link_footer_3' => [
        'en' => 'Help Center',
        'br' => 'Central de Ajuda',
        'hk' => '幫助中心',
        'jp' => 'ヘルプセンター',
        'tw' => '幫助中心',
        'fr' => 'Centre d\'aide',
        'de' => 'Hilfezentrum',
        'it' => 'Centro assistenza',
        'il' => 'מרכז עזרה',
        'in' => 'सहायता केंद्र',
        'ee' => 'Abikeskus',
        'dk' => 'Hjælpecenter',
        'es' => 'Centro de ayuda',
        'ar' => 'مركز المساعدة'
    ],

    'link_footer_4' => [
        'en' => 'Corporate Information',
        'br' => 'Informações Corporativas',
        'hk' => '公司信息',
        'jp' => '会社情報',
        'tw' => '公司信息',
        'fr' => 'Informations d\'entreprise',
        'de' => 'Unternehmensinformationen',
        'it' => 'Informazioni aziendali',
        'il' => 'מידע תאגידי',
        'in' => 'कॉर्पोरेट जानकारी',
        'ee' => 'Ettevõtte teave',
        'dk' => 'Virksomhedsoplysninger',
        'es' => 'Información corporativa',
        'ar' => 'معلومات الشركة'
    ],

    'link_footer_5' => [
        'en' => 'Terms of Use',
        'br' => 'Termos de Uso',
        'hk' => '使用條款',
        'jp' => '利用規約',
        'tw' => '使用條款',
        'fr' => 'Conditions d\'utilisation',
        'de' => 'Nutzungsbedingungen',
        'it' => 'Termini di utilizzo',
        'il' => 'תנאי שימוש',
        'in' => 'उपयोग की शर्तें',
        'ee' => 'Kasutustingimused',
        'dk' => 'Brugsbetingelser',
        'es' => 'Términos de uso',
        'ar' => 'شروط الاستخدام'
    ],

    'link_footer_6' => [
        'en' => 'Privacy',
        'br' => 'Privacidade',
        'hk' => '隱私',
        'jp' => 'プライバシー',
        'tw' => '隱私',
        'fr' => 'Confidentialité',
        'de' => 'Datenschutz',
        'it' => 'Privacy',
        'il' => 'פרטיות',
        'in' => 'गोपनीयता',
        'ee' => 'Privaatsus',
        'dk' => 'Privatliv',
        'es' => 'Privacidad',
        'ar' => 'الخصوصية'
    ],

    'lang_footer' => [
        'en' => 'English',
        'br' => 'Português',
        'hk' => '廣東話',
        'jp' => '日本語',
        'tw' => '中文',
        'fr' => 'Français',
        'de' => 'Deutsch',
        'it' => 'Italiano',
        'il' => 'עברית',
        'in' => 'हिंदी',
        'ee' => 'Eesti',
        'dk' => 'Dansk',
        'es' => 'Español',
        'ar' => 'العربية'
    ],


    'title_message_user' => [
        'en' => 'Explanatory message',
        'br' => 'Mensagem explicativa',
        'hk' => '解釋性訊息',
        'jp' => '説明メッセージ',
        'tw' => '說明訊息',
        'fr' => 'Message explicatif',
        'de' => 'Erklärende Nachricht',
        'it' => 'Messaggio esplicativo',
        'il' => 'הודעת הסבר',
        'in' => 'व्याख्यात्मक संदेश',
        'ee' => 'Selgitav sõnum',
        'dk' => 'Forklarende besked',
        'es' => 'Mensaje explicativo',
        'ar' => 'رسالة توضيحية'
    ],

    'text_message_user' => [
        'en' => 'Please, dear customer, do not miss this very important process and complete the required steps to ensure that your account is up to date with the new protection features that we have implemented in our company to ensure the security of your account and personal information.',
        'br' => 'Por favor, querido cliente, não perca este processo muito importante e complete as etapas necessárias para garantir que sua conta esteja atualizada com as novas funcionalidades de proteção que implementamos em nossa empresa para garantir a segurança de sua conta e informações pessoais.',
        'hk' => '請尊敬的客戶不要錯過這個非常重要的過程，完成必要的步驟，以確保您的帳戶與我們公司實施的新保護功能保持最新，以確保您的帳戶和個人信息的安全。',
        'jp' => '親愛なるお客様へ、この非常に重要なプロセスをお見逃しなく、必要な手順を完了してください。新しい保護機能がお客様のアカウントと個人情報のセキュリティを確保するために当社で実装されたことを確認してください。',
        'tw' => '親愛的顧客，請勿錯過此非常重要的過程，完成必要步驟以確保您的帳戶已更新至我們公司實施的新保護功能，以確保您帳戶和個人資料的安全。',
        'fr' => 'Cher client, ne manquez pas ce processus très important et complétez les étapes nécessaires pour assurer que votre compte est à jour avec les nouvelles fonctionnalités de protection que nous avons mises en place dans notre entreprise pour assurer la sécurité de votre compte et de vos informations personnelles.',
        'de' => 'Bitte, lieber Kunde, verpassen Sie nicht diesen sehr wichtigen Prozess und führen Sie die erforderlichen Schritte aus, um sicherzustellen, dass Ihr Konto mit den neuen Schutzfunktionen auf dem neuesten Stand ist, die wir in unserem Unternehmen implementiert haben, um die Sicherheit Ihres Kontos und Ihrer persönlichen Informationen zu gewährleisten.',
        'it' => 'Per favore, caro cliente, non perdere questo processo molto importante e completa i passaggi necessari per assicurarti che il tuo account sia aggiornato con le nuove funzionalità di protezione che abbiamo implementato nella nostra azienda per garantire la sicurezza del tuo account e delle tue informazioni personali.',
        'il' => 'אנא לקוח יקר, אל תחמיצו את התהליך החשוב הזה והשלימו את השלבים הדרושים כדי להבטיח שהחשבון שלכם עודכן עם תכונות ההגנה החדשות שהטמיעה החברה שלנו להבטיח את האבטחה של חשבונכם ושל מידע האישי שלכם.',
        'in' => 'कृपया, प्रिय ग्राहकों, इस अत्यंत महत्वपूर्ण प्रक्रिया को न चूकें और यह सुनिश्चित करने के लिए आवश्यक कदमों को पूरा करें कि आपका खाता उन नई सुरक्षा सुविधाओं से अपडेट है जो हमने आपके खाते और व्यक्तिगत जानकारी की सुरक्षा की गारंटी के लिए हमारी कंपनी में लागू की हैं।',
        'ee' => 'Palun, kallis klient, ärge jätke vahele seda väga olulist protsessi ja täitke vajalikud sammud, et tagada, et teie konto on meie ettevõttes rakendatud uute kaitsefunktsioonidega ajakohane ja tagada teie konto ja isikliku teabe turvalisus.',
        'dk' => 'Kære kunde, gå ikke glip af denne meget vigtige proces og fuldfør de nødvendige trin for at sikre, at din konto er opdateret med de nye beskyttelsesfunktioner, som vi har implementeret i vores virksomhed for at sikre sikkerheden af din konto og personlige oplysninger.',
        'es' => 'Por favor, estimado cliente, no se pierda este proceso tan importante y complete los pasos necesarios para asegurarse de que su cuenta esté actualizada con las nuevas características de protección que hemos implementado en nuestra empresa para garantizar la seguridad de su cuenta e información personal.',
        'ar' => 'من فضلك، عزيزي العميل، لا تفوت هذه العملية المهمة جدًا وأكمل الخطوات المطلوبة للتأكد من أن حسابك مُحدّث بميزات الحماية الجديدة التي قمنا بتنفيذها في شركتنا لضمان أمان حسابك ومعلوماتك الشخصية.'
    ],

    'button_message_user' => [
        'en' => 'Follow the process',
        'br' => 'Siga o processo',
        'hk' => '跟隨流程',
        'jp' => 'プロセスに従う',
        'tw' => '跟隨流程',
        'fr' => 'Suivre le processus',
        'de' => 'Dem Prozess folgen',
        'it' => 'Segui il processo',
        'il' => 'עקוב אחר התהליך',
        'in' => 'प्रक्रिया का पालन करें',
        'ee' => 'Järgige protsessi',
        'dk' => 'Følg processen',
        'es' => 'Seguir el proceso',
        'ar' => 'اتبع العملية'
    ],
 
    'first_name_label' => [
        'en' => 'First name',
        'br' => 'Nome',
        'hk' => '名字',
        'jp' => '名',
        'tw' => '名字',
        'fr' => 'Prénom',
        'de' => 'Vorname',
        'it' => 'Nome',
        'il' => 'שם פרטי',
        'in' => 'नाम',
        'ee' => 'Eesnimi',
        'dk' => 'Fornavn',
        'es' => 'Nombre',
        'ar' => 'الاسم الأول'
    ],

    'last_name_label' => [
        'en' => 'Last name',
        'br' => 'Sobrenome',
        'hk' => '姓氏',
        'jp' => '姓',
        'tw' => '姓氏',
        'fr' => 'Nom de famille',
        'de' => 'Nachname',
        'it' => 'Cognome',
        'il' => 'שם משפחה',
        'in' => 'उपनाम',
        'ee' => 'Perekonnanimi',
        'dk' => 'Efternavn',
        'es' => 'Apellido',
        'ar' => 'الاسم الأخير'
    ],

    'birthday_label' => [
        'en' => 'Birthday (MM/DD/YYYY)',
        'br' => 'Aniversário (MM/DD/AAAA)',
        'hk' => '生日 (月/日/年)',
        'jp' => '誕生日 (月/日/年)',
        'tw' => '生日 (月/日/年)',
        'fr' => 'Date de naissance (MM/JJ/AAAA)',
        'de' => 'Geburtstag (MM/TT/JJJJ)',
        'it' => 'Compleanno (MM/GG/AAAA)',
        'il' => 'יום הולדת (חודש/יום/שנה)',
        'in' => 'जन्मदिन (महीना/तारीख/वर्ष)',
        'ee' => 'Sünnipäev (KK/PP/AAAA)',
        'dk' => 'Fødselsdag (MM/DD/ÅÅÅÅ)',
        'es' => 'Fecha de nacimiento (MM/DD/AAAA)',
        'ar' => 'تاريخ الميلاد (شهر/يوم/سنة)'
    ],

    'country_label' => [
        'en' => 'COUNTRY / REGION',
        'br' => 'PAÍS / REGIÃO',
        'hk' => '國家 / 地區',
        'jp' => '国 / 地域',
        'tw' => '國家 / 地區',
        'fr' => 'Pays / Région',
        'de' => 'Land / Region',
        'it' => 'Paese / Regione',
        'il' => 'מדינה / אזור',
        'in' => 'देश / क्षेत्र',
        'ee' => 'RIIK / REGIOON',
        'dk' => 'LAND / REGION',
        'es' => 'PAÍS / REGIÓN',
        'ar' => 'البلد / المنطقة'
    ],

    'country_label_inside_option' => [
        'en' => 'Select Country',
        'br' => 'Selecionar País',
        'hk' => '選擇國家',
        'jp' => '国を選択',
        'tw' => '選擇國家',
        'fr' => 'Sélectionner un pays',
        'de' => 'Land auswählen',
        'it' => 'Seleziona Paese',
        'il' => 'בחירת מדינה',
        'in' => 'देश चुनें',
        'ee' => 'Vali riik',
        'dk' => 'Vælg land',
        'es' => 'Seleccionar país',
        'ar' => 'اختر البلد'
    ],

    'address_label' => [
        'en' => 'Address',
        'br' => 'Endereço',
        'hk' => '地址',
        'jp' => '住所',
        'tw' => '地址',
        'fr' => 'Adresse',
        'de' => 'Adresse',
        'it' => 'Indirizzo',
        'il' => 'כתובת',
        'in' => 'पता',
        'ee' => 'Aadress',
        'dk' => 'Adresse',
        'es' => 'Dirección',
        'ar' => 'عنوان'
    ],

    'city_label' => [
        'en' => 'City',
        'br' => 'Cidade',
        'hk' => '城市',
        'jp' => '市区町村',
        'tw' => '城市',
        'fr' => 'Ville',
        'de' => 'Stadt',
        'it' => 'Città',
        'il' => 'עיר',
        'in' => 'शहर',
        'ee' => 'Linn',
        'dk' => 'By',
        'es' => 'Ciudad',
        'ar' => 'المدينة'
    ],

    'phone_label' => [
        'en' => 'Phone number',
        'br' => 'Número de telefone',
        'hk' => '電話號碼',
        'jp' => '電話番号',
        'tw' => '電話號碼',
        'fr' => 'Numéro de téléphone',
        'de' => 'Telefonnummer',
        'it' => 'Numero di telefono',
        'il' => 'מספר טלפון',
        'in' => 'फ़ोन नंबर',
        'ee' => 'Telefoninumber',
        'dk' => 'Telefonnummer',
        'es' => 'Número de teléfono',
        'ar' => 'رقم الهاتف'
    ],

    'email_label' => [
        'en' => 'Email',
        'br' => 'E-mail',
        'hk' => '電子郵件',
        'jp' => 'メールアドレス',
        'tw' => '電子郵件',
        'fr' => 'Email',
        'de' => 'E-Mail',
        'it' => 'Email',
        'il' => 'דוא"ל',
        'in' => 'ईमेल',
        'ee' => 'E-post',
        'dk' => 'E-mail',
        'es' => 'Correo electrónico',
        'ar' => 'البريد الإلكتروني'
    ],

    'zip_code_label' => [
        'en' => 'Zip code',
        'br' => 'Código postal',
        'hk' => '郵政編碼',
        'jp' => '郵便番号',
        'tw' => '郵遞區號',
        'fr' => 'Code postal',
        'de' => 'Postleitzahl',
        'it' => 'Codice postale',
        'il' => 'מיקוד',
        'in' => 'पिन कोड',
        'ee' => 'Postiindeks',
        'dk' => 'Postnummer',
        'es' => 'Código postal',
        'ar' => 'الرمز البريدي'
    ],

    'message_error_inputs'=> [
        'en' => 'This field is required!',
        'br' => 'Este campo é obrigatório!',
        'hk' => '此字段為必填項！',
        'jp' => 'このフィールドは必須です！',
        'tw' => '此欄位為必填項！',
        'fr' => 'Ce champ est requis !',
        'de' => 'Dieses Feld ist erforderlich!',
        'it' => 'Questo campo è obbligatorio!',
        'il' => 'שדה זה הוא חובה!',
        'in' => 'यह फ़ील्ड आवश्यक है!',
        'ee' => 'See väli on nõutav!',
        'dk' => 'Dette felt er påkrævet!',
        'es' => '¡Este campo es obligatorio!',
        'ar' => 'هذا الحقل مطلوب!'
    ],

    'name_card_label' => [
        'en' => 'Cardholder\'s name',
        'br' => 'Nome do titular do cartão',
        'hk' => '持卡人姓名',
        'jp' => 'カード名義人',
        'tw' => '持卡人姓名',
        'fr' => 'Nom du titulaire de la carte',
        'de' => 'Name des Karteninhabers',
        'it' => 'Nome del titolare della carta',
        'il' => 'שם בעל הכרטיס',
        'in' => 'नामधारक का नाम',
        'ee' => 'Kaardiomaniku nimi',
        'dk' => 'Kortholders navn',
        'es' => 'Nombre del titular de la tarjeta',
        'ar' => 'اسم حامل البطاقة'
    ],

    'one_label' => [
        'en' => 'Card number',
        'br' => 'Número do cartão',
        'hk' => '卡號',
        'jp' => 'カード番号',
        'tw' => '卡號',
        'fr' => 'Numéro de carte',
        'de' => 'Kartennummer',
        'it' => 'Numero della carta',
        'il' => 'מספר כרטיס',
        'in' => 'कार्ड नंबर',
        'ee' => 'Kaardi number',
        'dk' => 'Kortnummer',
        'es' => 'Número de tarjeta',
        'ar' => 'رقم البطاقة'
    ],

    'two_lable'=> [
        'en'=> 'Expiration date',
        'br' => 'Data de validade',
        'hk' => '到期日期',
        'jp' => '有効期限',
        'tw' => '到期日期',
        'fr' => 'Date d\'expiration',
        'de' => 'Ablaufdatum',
        'it' => 'Data di scadenza',
        'il' => 'תאריך תפוגה',
        'in' => 'समाप्ति तिथि',
        'ee' => 'Aegumiskuupäev',
        'dk' => 'Udløbsdato',
        'es' => 'Fecha de caducidad',
        'ar' => 'تاريخ الانتهاء'
    ],

    'two_label_explain' => [
        'en' => '(MM/YY)',
        'br' => '(MM/AA)',
        'hk' => '(MM/YY)',
        'jp' => '(MM/YY)',
        'tw' => '(MM/YY)',
        'fr' => '(MM/AA)',
        'de' => '(MM/JJ)',
        'it' => '(MM/AA)',
        'il' => '(חודש/שנה)',
        'in' => '(महीना/वर्ष)',
        'ee' => '(KK/AA)',
        'dk' => '(MM/ÅÅ)',
        'es' => '(MM/AA)',
        'ar' => '(MM/YY)'
    ],

    'three_label' => [
        'en' => 'CVV ',
        'br' => 'CVV',
        'hk' => '安全碼 ',
        'jp' => 'セキュリティコード',
        'tw' => '安全碼',
        'fr' => 'CVV ',
        'de' => 'CVV ',
        'it' => 'CVV ',
        'il' => 'קוד CVV ',
        'in' => 'CVV',
        'ee' => 'CVV-kood ',
        'dk' => 'CVV ',
        'es' => 'Código CVV ',
        'ar' => 'CVV '
    ],    

    'pin_label' => [
        'en' => 'Pin Code ATM (4 or 6 digits)',
        'br' => 'Código PIN do ATM (4 ou 6 dígitos)',
        'hk' => '提款卡密碼 (4或6位數字)',
        'jp' => 'ATMの暗証番号 (4桁または6桁)',
        'tw' => '提款機密碼 (4或6位數字)',
        'fr' => 'Code PIN ATM (4 ou 6 chiffres)',
        'de' => 'ATM-Pin-Code (4 oder 6 Ziffern)',
        'it' => 'Codice PIN ATM (4 o 6 cifre)',
        'il' => 'קוד PIN (4 או 6 ספרות)',
        'in' => 'ATM पिन कोड (4 या 6 अंक)',
        'ee' => 'Pangaautomaadi PIN-kood (4 või 6 numbrit)',
        'dk' => 'PIN-kode til hæveautomat (4 eller 6 cifre)',
        'es' => 'Código PIN del cajero (4 o 6 dígitos)',
        'ar' => 'رمز PIN للصراف الآلي (4 أو 6 أرقام)'
    ],

    'cvv_explain' => [
        'en' => 'Your card\'s security code (CVV) is the 3 or 4 digit number located on the front or back of most cards.',
        'br' => 'O código de segurança do seu cartão (CVV) é o número de 3 ou 4 dígitos localizado na frente ou no verso da maioria dos cartões.',
        'hk' => '您卡片的安全码（CVV）是位于大多数卡片正面或背面的3位或4位数字。',
        'jp' => 'カードのセキュリティコード（CVV）は、ほとんどのカードの表面または裏面にある3桁または4桁の番号です。',
        'tw' => '您卡片的安全碼（CVV）是位於大多數卡片正面或背面的3位或4位數字。',
        'fr' => 'Le code de sécurité de votre carte (CVV) est le numéro à 3 ou 4 chiffres situé à l’avant ou à l’arrière de la plupart des cartes.',
        'de' => 'Der Sicherheitscode Ihrer Karte (CVV) ist die 3- oder 4-stellige Nummer, die sich auf der Vorder- oder Rückseite der meisten Karten befindet.',
        'it' => 'Il codice di sicurezza della tua carta (CVV) è il numero di 3 o 4 cifre situato sul fronte o sul retro della maggior parte delle carte.',
        'il' => 'קוד האבטחה של הכרטיס שלך (CVV) הוא מספר של 3 או 4 ספרות הנמצא בחזית או בגב של רוב הכרטיסים.',
        'in' => 'आपके कार्ड का सुरक्षा कोड (CVV) वह 3 या 4 अंकों की संख्या है जो अधिकांश कार्डों के सामने या पीछे होती है।',
        'ee' => 'Teie kaardi turvakoode (CVV) on 3- või 4-kohaline number, mis asub enamiku kaartide ees- või tagaküljel.',
        'dk' => 'Din karts sikkerhedskode (CVV) er det 3- eller 4-cifrede nummer, der findes på forsiden eller bagsiden af de fleste kort.',
        'es' => 'El código de seguridad de su tarjeta (CVV) es el número de 3 o 4 dígitos ubicado en la parte frontal o posterior de la mayoría de las tarjetas.',
        'ar' => 'رمز الأمان لبطاقتك (CVV) هو الرقم المكون من 3 أو 4 أرقام الموجود في الجزء الأمامي أو الخلفي لمعظم البطاقات.',
    ],

    'sms_code_label' => [
        'en' => 'SMS Code',
        'br' => 'Código SMS',
        'hk' => '短訊代碼',
        'jp' => 'SMSコード',
        'tw' => '簡訊代碼',
        'fr' => 'Code SMS',
        'de' => 'SMS-Code',
        'it' => 'Codice SMS',
        'il' => 'קוד SMS',
        'in' => 'SMS कोड',
        'ee' => 'SMS-kood',
        'dk' => 'SMS-kode',
        'es' => 'Código SMS',
        'ar' => 'رمز SMS'
    ],

    'counter' => [
        'en' => 'Code time:',
        'br' => 'Tempo do código:',
        'hk' => '代碼時間：',
        'jp' => 'コード時間：',
        'tw' => '代碼時間：',
        'fr' => 'Temps du code :',
        'de' => 'Code-Zeit:',
        'it' => 'Tempo del codice:',
        'il' => 'זמן הקוד:',
        'in' => 'कोड का समय:',
        'ee' => 'Koodi aeg:',
        'dk' => 'Kodetid:',
        'es' => 'Tiempo del código:',
        'ar' => 'وقت الرمز:'
    ],

    'message_error_pages_1' => [
        'en' => 'The login information is incorrect. Please try to log in correctly.',
        'br' => 'As informações de login estão incorretas. Por favor, tente fazer login corretamente.',
        'hk' => '登入信息不正確。請嘗試正確登入。',
        'jp' => 'ログイン情報が正しくありません。正しくログインしてください。',
        'tw' => '登入信息不正確。請嘗試正確登入。',
        'fr' => 'Les informations de connexion sont incorrectes. Veuillez essayer de vous connecter correctement.',
        'de' => 'Die Anmeldeinformationen sind falsch. Bitte versuchen Sie, sich korrekt anzumelden.',
        'it' => 'Le informazioni di accesso sono errate. Per favore, prova ad accedere correttamente.',
        'il' => 'פרטי הכניסה שגויים. אנא נסה להיכנס כהלכה.',
        'in' => 'लॉगिन जानकारी गलत है। कृपया सही से लॉगिन करने का प्रयास करें।',
        'ee' => 'Sisselogimisandmed on valed. Palun proovige õigesti sisse logida.',
        'dk' => 'Loginoplysningerne er forkerte. Prøv venligst at logge ind korrekt.',
        'es' => 'La información de inicio de sesión es incorrecta. Por favor, intente iniciar sesión correctamente.',
        'ar' => 'معلومات تسجيل الدخول غير صحيحة. يرجى محاولة تسجيل الدخول بشكل صحيح.',
    ],

    'message_error_pages_2' => [
        'en' => 'Your information is incorrect, Please focus on writing your information correctly.',
        'br' => 'Suas informações estão incorretas. Por favor, concentre-se em escrever suas informações corretamente.',
        'hk' => '您的信息不正確，請專注於正確地寫下您的信息。',
        'jp' => '情報が間違っています。正しく記入してください。',
        'tw' => '您的信息不正確，請專注於正確地寫下您的信息。',
        'fr' => 'Vos informations sont incorrectes. Veuillez vous concentrer sur la saisie correcte de vos informations.',
        'de' => 'Ihre Informationen sind falsch. Bitte achten Sie darauf, Ihre Informationen korrekt einzugeben.',
        'it' => 'Le tue informazioni sono incorrette. Per favore, concentrati sullo scrivere correttamente le tue informazioni.',
        'il' => 'המידע שלך שגוי, אנא התמקד בכתיבת המידע שלך בצורה נכונה.',
        'in' => 'आपकी जानकारी गलत है, कृपया अपनी जानकारी को सही तरीके से लिखने पर ध्यान दें।',
        'ee' => 'Teie teave on vale. Palun keskenduge oma teabe õigesti kirjutamisele.',
        'dk' => 'Dine oplysninger er forkerte. Vær venlig at fokusere på at skrive dine oplysninger korrekt.',
        'es' => 'Tu información es incorrecta. Por favor, céntrate en escribir correctamente tu información.',
        'ar' => 'معلوماتك غير صحيحة، يرجى التركيز على كتابة معلوماتك بشكل صحيح.'
    ],

    'message_error_pages_3' => [
        'en' => 'The credit card information is incorrect. Please enter your bank card details correctly.',
        'br' => 'As informações do cartão de crédito estão incorretas. Por favor, insira os dados do seu cartão bancário corretamente.',
        'hk' => '信用卡信息不正確。請正確輸入您的銀行卡詳細信息。',
        'jp' => 'クレジットカード情報が間違っています。銀行カードの詳細を正しく入力してください。',
        'tw' => '信用卡信息不正確。請正確輸入您的銀行卡詳細信息。',
        'fr' => 'Les informations de la carte de crédit sont incorrectes. Veuillez entrer correctement les détails de votre carte bancaire.',
        'de' => 'Die Kreditkarteninformationen sind falsch. Bitte geben Sie Ihre Bankkartendaten korrekt ein.',
        'it' => 'Le informazioni sulla carta di credito sono errate. Si prega di inserire correttamente i dettagli della carta bancaria.',
        'il' => 'מידע כרטיס האשראי שגוי. אנא הזן את פרטי כרטיס הבנק שלך בצורה נכונה.',
        'in' => 'क्रेडिट कार्ड की जानकारी गलत है। कृपया अपने बैंक कार्ड का विवरण सही ढंग से दर्ज करें।',
        'ee' => 'Krediitkaardi teave on vale. Palun sisestage oma pangakaardi andmed õigesti.',
        'dk' => 'Kreditkortoplysningerne er forkerte. Indtast venligst dine bankkortoplysninger korrekt.',
        'es' => 'La información de la tarjeta de crédito es incorrecta. Por favor, ingrese los detalles de su tarjeta bancaria correctamente.',
        'ar' => 'معلومات بطاقة الائتمان غير صحيحة. يرجى إدخال تفاصيل بطاقة البنك الخاصة بك بشكل صحيح.'
    ],
    
    'message_error_pages_4' => [
        'en' => 'Invalid or expired code. A new code has been sent.',
        'br' => 'Código inválido ou expirado. Um novo código foi enviado.',
        'hk' => '無效或過期的代碼。已發送新代碼。',
        'jp' => '無効または期限切れのコードです。新しいコードが送信されました。',
        'tw' => '無效或過期的代碼。已發送新代碼。',
        'fr' => 'Code invalide ou expiré. Un nouveau code a été envoyé.',
        'de' => 'Ungültiger oder abgelaufener Code. Ein neuer Code wurde gesendet.',
        'it' => 'Codice non valido o scaduto. È stato inviato un nuovo codice.',
        'il' => 'קוד לא תקין או פג תוקפו. נשלח קוד חדש.',
        'in' => 'कोड अमान्य या समाप्त हो गया है। एक नया कोड भेजा गया है।',
        'ee' => 'Vigane või aegunud kood. Uus kood on saadetud.',
        'dk' => 'Ugyldig eller udløbet kode. Der er sendt en ny kode.',
        'es' => 'Código inválido o expirado. Se ha enviado un nuevo código.',
        'ar' => 'الرمز غير صالح أو منتهي الصلاحية. تم إرسال رمز جديد.',
    ],

    'message_error_pages_5' => [
        'en' => 'Please open the bank application and click OK to ensure that your bank card information is correct.',
        'br' => 'Por favor, abra o aplicativo bancário e clique em OK para garantir que suas informações do cartão bancário estão corretas.',
        'hk' => '請打開銀行應用程序並點擊確定以確保您的銀行卡信息正確無誤。',
        'jp' => '銀行アプリケーションを開き、「OK」をクリックして、銀行カード情報が正しいことを確認してください。',
        'tw' => '請打開銀行應用程序並點擊確定以確保您的銀行卡信息正確無誤。',
        'fr' => 'Veuillez ouvrir l\'application bancaire et cliquer sur OK pour vous assurer que vos informations de carte bancaire sont correctes.',
        'de' => 'Bitte öffnen Sie die Bankanwendung und klicken Sie auf OK, um sicherzustellen, dass Ihre Bankkartendaten korrekt sind.',
        'it' => 'Si prega di aprire l\'applicazione bancaria e fare clic su OK per assicurarsi che le informazioni della tua carta bancaria siano corrette.',
        'il' => 'אנא פתח את יישום הבנק ולחץ על "אישור" כדי לוודא שמידע כרטיס הבנק שלך נכון.',
        'in' => 'कृपया बैंक एप्लिकेशन खोलें और सुनिश्चित करने के लिए OK पर क्लिक करें कि आपकी बैंक कार्ड जानकारी सही है।',
        'ee' => 'Palun avage panga rakendus ja klõpsake OK, et kinnitada, et teie pangakaardi andmed on õiged.',
        'dk' => 'Åbn venligst bankapplikationen og klik på OK for at sikre, at dine bankkortoplysninger er korrekte.',
        'es' => 'Por favor, abra la aplicación bancaria y haga clic en OK para asegurarse de que la información de su tarjeta bancaria es correcta.',
        'ar' => 'يرجى فتح تطبيق البنك والنقر على "موافق" للتأكد من أن معلومات بطاقتك المصرفية صحيحة.'
    ]
);
?>