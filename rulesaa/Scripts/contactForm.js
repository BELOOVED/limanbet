/* Contact Page Form */

var CntForm = {

    /*getting private language vaiable*/
    _lang: function () {
        return getUrlVars()['l'];
    },

    init: function () {
        this.bindEvents();
    },

    /*binding event handlers to form input elements*/
    bindEvents: function () {
        var body = $("body");

        body.on("blur", "#user_name", $.proxy(this.checkUserName, this));
        body.on("blur", "#e_mail", $.proxy(this.checkEmail, this));
        body.on("blur", "#subject", $.proxy(this.checkSubject, this));
        body.on("focus", "#user_name, #e_mail, #subject", $.proxy(this.clearError, this));
        body.on("keypress", "#user_name, #e_mail, #subject", $.proxy(this.clearError, this));
        body.on("keypress focus", "#txt_code", $.proxy(this.clearError, this));
        body.on("click", "#contact-btn-send", $.proxy(this.checkPageValid, this));
    },

    /*clear errors on forms fields*/
    clearError: function (ev) {
        $(ev.target).parent().find(".error-tip").remove();
        return true;
    },

    checkError: function () {
        this.checkUserName();
        this.checkEmail();
        this.checkSubject();
    },

    /*user name input field validation*/
    checkUserName: function () {
        var user_name = $("#user_name");
        var l = this._lang();
        var msg;

        switch (l) {
            case "ru":
                msg = "Поле «Имя» обязательно для заполнения";
                break;
            case "en":
                msg = "“Name” field is required to be filled in.";
                break;
            case "hy":
                msg = "«Անուն» դաշտը պարտադիր է լրացնելու համար:";
                break;
            case "bs":
            case "sr":
            case "hr":
                msg = "Polje “Ime i prezime” je potrebno popuniti";
                break;
            default:
                msg = "“Name” field is required to be filled in.";
        }

        if (!$V.RFV(user_name, user_name.parent(), msg)) {
            return false;
        }

        return true;
    },

    /*email input field validation*/
    checkEmail: function () {
        var email = $("#e_mail"), msg1, msg2, l = this._lang();

        switch (l) {
            case "ru":
                msg1 = "Поле «E-mail» обязательно для заполнения.";
                msg2 = "Неправильный формат адреса электронной почты";
                break;
            case "en":
                msg1 = "“E-mail” field is required to be filled in.";
                msg2 = "Wrong format of the e-mail address.";
                break;
            case "hy":
                msg1 = "«E-mail» դաշտը պարտադիր է լրացնելու համար:";
                msg2 = "Էլեկտրոնային փոստի հասցեի սխալ ձևաչափ:";
                break;
            case "bs":
            case "sr":
            case "hr":
                msg1 = "Polje “E-mail adresa” je potrebno popuniti";
                msg2 = "Pogrešan format e-mail adrese.";
                break;
            default:
                msg1 = "“E-mail” field is required to be filled in.";
                msg2 = "Wrong format of the e-mail address.";
        }

        if (!$V.RFV(email, email.parent(), msg1)) {
            return false;
        }
        else if (!$V.REV(email, email.parent(), msg2, $V.reEmail)) {
            return false;
        }

        return true;
    },

    /*subject input field validation*/
    checkSubject: function () {
        var subject = $("#subject"), msg, l = this._lang();

        switch (l) {
            case "ru":
                msg = "Поле «Тема» обязательно для заполнения";
                break;
            case "en":
                msg = "“Title” field is required to be filled in.";
                break;
            case "hy":
                msg = "«Թեմա» դաշտը պարտադիր է լրացնելու համար:";
                break;
            case "bs":
            case "sr":
            case "hr":
                msg = "Polje “Naslov” je potrebno popuniti";
                break;
            default:
                msg = "Поле «Тема» обязательно для заполнения.";
        }

        if (!$V.RFV(subject, subject.parent(), msg)) {
            return false;
        }

        return true;
    },

    /*checking errors*/
    checkPageValid: function () {
        this.checkError();
        if ($V.isPageValid($(".content-right"))) {
            this.ajax_send_mail();
            return true;
        }
        return false;
    },

    /*showing errors on page*/
    showError: function (ctrl, ctrlerr, msg) {
        $V.ER(ctrl, ctrlerr, msg);
    },

    /*ajax call to home sendmail action*/
    ajax_send_mail: function () {
        var name = $("#user_name").val();
        var subject = $("#subject").val();
	    var from = $("#e_mail").val();
        var msg = $("#txt-message").val();
        var txt_code = $("#txt_code").val();
        var txt_msg, l = this._lang();

        switch (l) {
            case "ru":
                txt_msg = "Код защиты введен неверно. Введите код защиты, отображенный на картинке";
                break;
            case "en":
                txt_msg = "Security code is entered incorrectly. Enter the security code shown in the image.";
                break;
            case "hy":
                txt_msg = "Պաշտպանիչ կոդը սխալ է մուտքագրվել: Մուտքագրե՛ք նկարում արտացոլված պաշտպանիչ կոդը:";
                break;
            case "bs":
            case "sr":
            case "hr":
                txt_msg = "Sigurnosni kod je pogrešno unešen. Unesite sigurnosni kod prikazan na slici.";
                break;
            default:
                txt_msg = "Код защиты введен неверно. Введите код защиты, отображенный на картинке";
        }

        $.ajax({
            url: ROOTPATH + "/Home/SendMail",
            data: { "name": name, "subject": subject, "from": from, "msg": msg, "txt_code": txt_code },
            type: "POST",
            success: function (data) {
                if (data.success) {

                    CntForm.popupOpen(data.message);
                    CntForm.formReload(1);
                } else {
                    var code = $("#txt_code");
                    CntForm.showError(code, code.parent(), txt_msg);
                    CntForm.formReload();
                }
            }
        });
    },

    /*clear forms input fields values or refresh captcha image*/
    formReload: function (c) {
        if (c) {
            $("#user_name, #e_mail, #txt-message, #subject, #txt_code").val("");
        }

        var d = new Date();
        $("#img_code").attr("src", ROOTPATH + "/Home/CaptchaImage?v=" + d.getTime());
    },

    /*on success send mail popup show*/
    popupOpen: function (result) {
        var msg1, msg2, msg3, msg4, l = this._lang();

        switch (l) {
            case "ru":
                msg1 = "Ваше письмо успешно отправлено.";
                msg2 = "Ошибка при отправке письма.";
                msg3 = "Ваше письмо успешно отправлено в службу поддержки. Вы получите ответ в ближайшее время. <p>Спасибо, что пользуетесь нашим сайтом</p>";
                msg4 = "Мы очень сожалеем, но при отправке письма возникла ошибка. <p>Повторите отправку ещё раз или свяжитесь с нами другим способом.";
                break;
            case "en":
                msg1 = "Your mail has been sent.";
                msg2 = "Error while sending the mail.";
                msg3 = "Your message has been sent to the Customer Support. You will receive an answer in the nearest announcement time. <p>Thank you for using our site<p>";
                msg4 = "We are very sorry, but an error occurred while sending the letter.<p>Resend it,or contact us in other way<p>";
                break;
            case "hy":
                msg1 = "Ձեր հաղորդագրությունն ուղարկվել է:";
                msg2 = "Հաղորդագրությունն չի ուղարկվել";
                msg3 = "Ձեր հաղորդագրությունն ուղարկվել է Հաճախորդների աջակցման կենտրոն: Դուք ողջամիտ ժամկետում պատասխան հաղորդագրություն կստանաք։ <p>Շնորհակալություն մեր կայքից օգտվելու համար <p>:";
                msg4 = "Ցավում ենք, բայց հաղորդագրությունն ուղարկելու ընթացքում սխալ է ի հայտ եկել: Նորից ուղարկե՛ք այն կամ կապ հաստատե՛ք մեզ հետ մեկ այլ եղանակով:";
                break;
            case "bs":
            case "sr":
            case "hr":
                msg1 = "Vaš e-mail je poslan.";
                msg2 = "Greška prilikom slanja e-maila.";
                msg3 = "Vaša poruka je proslijeđena Korisničkoj Podršci. Odgovor ćete primiti u najkraćem mogućem roku. <p>Hvala što koristite naše usluge. <p>:";
                msg4 = "Žao nam je, došlo je do greške prilikom slanja poruke. Pokušajte ponovo ili nas kontaktirajte na drugi način.";
                break;
            default:
            	msg1 = "Your mail has been sent.";
            	msg2 = "Error while sending the mail.";
            	msg3 = "Your message has been sent to the Customer Support. You will receive an answer in the nearest announcement time. <p>Thank you for using our site<p>";
            	msg4 = "We are very sorry, but an error occurred while sending the letter.<p>Resend it,or contact us in other way<p>";
        }

        var title = result == "success" ? msg1 : msg2;
        var messageTxt = result == "success" ? msg3 : msg4;
        $("#TB_ajaxWindowTitle").html(title);
        $("#popup-content").html(messageTxt);
        $("#popupHead").fadeIn();
    }
};