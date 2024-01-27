'use strict';

/***********************************************  String  ***********************************************/
if (!String.prototype.replaceAll) {
	String.prototype.replaceAll = function (str, newStr) {
		return this.split(str).join(newStr);
	};
}