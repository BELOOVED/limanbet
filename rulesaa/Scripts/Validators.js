function Validators() {
    var t = this;
    t.reInt = /^\d+$/;
    t.reEmail = /^([-\w]([-\.\w]*[-\w])*@[0-9a-zA-Z]([-\w\.]*[0-9a-zA-Z])*\.[a-zA-Z]{2,9})$/;
    t.reUsername = /^[a-zA-Z0-9\-_]+$/;
    t.reMobile = /^\+{0,1}\d{1,18}$/;
    t.reTotoCards = /^\d{16}$/;
    t.reSecurityCode = /^\d{6}$/;
    t.reDecimal = /^\d+([,\.]\d{1,2})?$/;
    t.passport = /^[a-zA-Z][a-zA-Z]\d{7}$/;
    // t.reMobile = /^\+([0-9]{1,2})\s\(([0-9]{2,4})\)\s[(0-9){3}]\-[(0-9){2}]\-[(0-9){2}]$/;
};

Validators.prototype = {
	initialize: function() { },
	dispose: function() { },
	RFV: function(ctrl, errCtrl, errText, showMessage) {
	    var t = this;
	    if ((ctrl.is("input") && ctrl.val().length == 0) ||
    	    (ctrl.is("select") && ctrl[0].value.length == 0)) {
	        return t._addErrMessage(ctrl, errCtrl, errText, showMessage);
	    } else {
	        return t._removeErrMessage(ctrl, errCtrl, showMessage);
	    }
	},
	MLV: function(ctrl,errCtrl, errText, maxLength, showMessage) {
	    var t = this;
	    if (ctrl.val().length > 0 && ctrl.val().length >= maxLength) {
	        return t._addErrMessage(ctrl, errCtrl, errText, showMessage);
	    } else {
	        return t._removeErrMessage(ctrl, errCtrl, showMessage);
	    }
	},
	REV: function(ctrl, errCtrl, errText, expression, showMessage) {
		var t = this;
		if (ctrl.val().length > 0 && !ctrl.val().match(new RegExp(expression))) {
			return t._addErrMessage(ctrl, errCtrl, errText, showMessage);
		} else {
			return t._removeErrMessage(ctrl, errCtrl, showMessage);
		}
	},
	CV: function(ctrlToValidate, ctrlToCompare, errCtrl, errText, showMessage) {
		var t = this;
		var str1 = ctrlToValidate.val();
		var str2 = ctrlToCompare.val();
		if (str1.length > 0 || str2.length > 0) {
			if (str1 != str2) {
				return t._addErrMessage(ctrlToValidate, errCtrl, errText, showMessage);
			} else {
				return t._removeErrMessage(ctrlToValidate, errCtrl, showMessage);
			}
		}
		return true;
	},
	R_CV: function(ctrlToValidate, ctrlToCompare, errCtrl, errText, showMessage) {
		var t = this;
		var str1 = ctrlToValidate.val();
		var str2 = ctrlToCompare.val();
		if (str1.length > 0 || str2.length > 0) {
			if (str1 != str2) {
				return t._removeErrMessage(ctrlToValidate, errCtrl, showMessage);
			} else {
				return t._addErrMessage(ctrlToValidate, errCtrl, errText, showMessage);
			}
		}
		return true;
	},
	RV: function(ctrl, errCtrl, num, min, max, lessErrText, moreErrText, showMessage) {
		var t = this;
		var number = new Number(num.toString().replace(",", "."));
		var minimum = new Number(min.toString().replace(",", "."));
		var maximum = new Number(max.toString().replace(",", "."));

		if (number < minimum && lessErrText) {
			return t._addErrMessage(ctrl, errCtrl, lessErrText, showMessage);
		} else if (number > maximum && moreErrText) {
			return t._addErrMessage(ctrl, errCtrl, moreErrText, showMessage);
		} else {
			return t._removeErrMessage(ctrl, errCtrl, showMessage);
		}
	},
	ER: function (ctrl, errCtrl, message) {
	    var t = this;
	    return t._addErrMessage(ctrl, errCtrl, message);
    },
	_addErrMessage: function(ctrl, errCtrl, message, showMessage) {
		showMessage = showMessage == undefined || showMessage == null ? true : showMessage;
		if (showMessage) {
			if (!ctrl.hasClass("reg-req-inp")) {
				if (ctrl.is("input") ||
					ctrl.is("select")) {
					ctrl.addClass("reg-req-inp");
				}
			}
			if (errCtrl.not("select") && errCtrl.find("span.error-tip").length == 0) {
				errCtrl.append("<span class=\"reg_req error-tip\" title=\"" + message + "\"></span>");
			}
		}
		return false;
	},
	_removeErrMessage: function(ctrl, errCtrl, showMessage) {
		showMessage = showMessage == undefined || showMessage == null ? true : showMessage;
		if (showMessage) {
			if (ctrl.is("input")) {
				ctrl.removeClass("reg-req-inp");
			}
			errCtrl.find("span.error-tip").remove();
		}
		return true;
	},
	isPageValid: function(ctrl) {
		return $(".error-tip", ctrl).length == 0;
	}
};

var $V = new Validators();
