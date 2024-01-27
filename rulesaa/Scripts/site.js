function getUrlVars() {
    var vars = [], hash;
    var hashes = window.location.href.slice(window.location.href.indexOf('?') + 1).split('&');
    var length = hashes.length;

    for (var i = 0; i < length; i++) {
        hash = hashes[i].split('=');
        vars.push(hash[0]);
        vars[hash[0]] = hash[1];
    }

    return vars;
}

function addParameterToURL(routePath, isTrigger) {
    
    routePath = ROOTPATH + routePath.slice(0, -1);

    if (isTrigger === undefined && location.pathname !== routePath) {
        window.history.pushState(routePath, document.title, routePath);
    }

    renderFlagsHref(routePath);

    let oldStyleQueryString = path2QueryString(routePath);

    if (customizations.cssUrl) {
        oldStyleQueryString += "&customCssUrl=" + customizations.cssUrl;
    }

    if (customizations.logoUrl) {
        oldStyleQueryString += "&customLogoUrl=" + customizations.logoUrl;
    }

    window.parent.postMessage({ currentUrl: oldStyleQueryString, windowName: window.name }, "*");
}

function renderMenuList(data) {
    
    var ul = document.createElement('ul');
    ul.setAttribute('class', 'menu-list');

    for (var i = 0; i < data.length; i++) {

        $(ul).append('<li><a href="javascript: void(0)" class="s-button" title="'
            + data[i].Name
            + '" onclick="getSubMenuContent(event, this)" '
            + 'data-route-lang="' + data[i].LangId + '"'
            + 'data-route-menu="' + data[i].MenuId + '"'
            + 'data-route-Sub-Menu="' + (data[i].Id) + '"'
            + '>' + data[i].Name + '</a></li>');
    }

    $('#' + this.id).append(ul);
}

function renderFlagsHref(params) {
    const defaultLanguage = $('#defLanguage').val();
    let flags = document.querySelectorAll('#flags_scroll a');

    if (flags) {
        for (var i = 0; i < flags.length; i++) {
            flags[i].setAttribute("href", params.replace("/" + defaultLanguage + "/", "/" + flags[i].id + "/"));
        }
    }
}

function renderContent(data) {
    var cnt = $('#contentText'),
        title = $('.content-head'),
        text = $(this).text();

    $(cnt).html('').removeAttr("style");
    $(title).html('');

    if (data && data.content.length) {
        var windowHeight = $(window).height() - 140;
        $('.inner-content').css('min-height', windowHeight);

        $(cnt).html(data.content[0].ContentText);

        if (data.content[0].Path !== null) {
            cnt.css("background-image", "url(" + data.content[0].Path + ")");
        }
    }

    data.subMenuItems.length === 0 ? $(title).html(text) : $(title).html(data.subMenuItems[0].Name);
}

function getSubMenuContent(event, el) {
    var e = window.event || event;
    var isTriggered = arguments[0] && arguments[0].isTrigger;

    if (isTriggered) {
        e = event;
    }
    
    e.stopPropagation();

    $(".active").removeClass("active");
    $(e.target).parent().addClass("active");

    $.getJSON(ROOTPATH + "/Home/GetSubMenuItems" + queryParamsFromDataset(el.dataset), null, function (data) {                
        let routePath = routePathFromArray([
            el.dataset.routeLang,
            el.dataset.routeMenu,
            el.dataset.routeSubMenu,
            data.menuItems[0].Name,
            data.subMenuItems[0].Name
        ]);

        setSeoCotent(data);
        addParameterToURL(routePath, isTriggered);

        renderContent.call(el, data);
    }).fail(function (msg) {
        $("#dialog").dialog("open");
        $("#dialog").html(msg);
    });

    close_menu();
}

function ConfirmDialog(title, text, func) {
    $("#dialog").dialog("open");
    $("#dialog").attr("title", title);
    $("#dialog").html(text);
    $("#dialog").dialog({
        resizable: true,
        width: 400,
        height: 175,
        modal: true,
        buttons: {
            "OK": function () {
                if (func !== null)
                    func();
                $(this).dialog("close");
            },
            Cancel: function () {
                $(this).dialog("close");
            }
        }
    });
}

function popupClose() {
    $("#popupHead").fadeOut();
}

// Page Items Object
var PI = {
    onReady: function () {
        this.bindEvents();
        this.pageHeight();
    },

    bindEvents: function () {
        $(".mI-button").on("click", this.menuItems);
    },

    menuItems: function () {
        var self = this;
        var isTrigger = arguments[0] && arguments[0].isTrigger;
        
        $(".active").removeClass("active");

        if ($(self).hasClass('open')) {
            $(self).removeClass('open');
            PI.pageHeight();
            return false;
        }

        let targetElement = $(this).children("a")[0];

        let queryParams = "?l=" + targetElement.dataset.routeLang + "&m=" + targetElement.dataset.routeMenu;

        $.getJSON(ROOTPATH + "/Home/GetSubMenuItems" + queryParams, null, function (data) {            
            var el = $(self).children("a")[0];
            var firstMenuItem = data.menuItems[0];
            var menuText = firstMenuItem.Name;
            var subMenuText = null;
            var subMenuId = null;

            if (Array.isArray(data.subMenuItems) && data.subMenuItems.length) {
                $('.content-head').html(data.subMenuItems[0].Name);
                subMenuId = data.subMenuItems[0].Id;
                subMenuText = data.subMenuItems[0].Name;
            } else {
                $('.content-head').html(firstMenuItem.Name);
            }

            setSeoCotent(data);

            let routePath = routePathFromArray([el.dataset.routeLang, el.dataset.routeMenu, subMenuId, menuText, subMenuText]);
            addParameterToURL(routePath, isTrigger);

            if (data.content.length || data.subMenuItems.length) {
                $('.open').removeClass("open");

                if (!data.content.length) {
                    $(self).toggleClass('open');
                    $(self).find("ul").remove();
                    renderMenuList.call(self, data.subMenuItems);
                }

                renderContent.call(self, data);

                if (data.content.length && data.subMenuItems.length) {
                    if ($(self).hasClass('open')) {
                        $(self).removeClass('open');
                        $(self).find("ul").remove();
                        return false;
                    }

                    $(self).find("ul").remove();
                    $(self).addClass('open');
                    renderMenuList.call(self, data.subMenuItems);
                }
            } else {
                $('.open').removeClass("open");
                $('#contentText')[0].innerHTML = '';
                $('#contentText').removeAttr("style");
                $('.content-head')[0].innerHTML = '';
            }

            if ($(self).find('ul').length) {
                $($(self).find('ul').children()[0]).addClass("active");
            } else {
                $(self).addClass("active");
            }

            PI.pageHeight();
        }).fail(function (msg) {
            $("#dialog").dialog("open");
            $("#dialog").html(msg);
        });
    },

    pageHeight: function () {
        var windowHeight = $(window).height() - 56;
        $('#main').css('height', windowHeight);
    }
};


function open_menu() {
    if (!(menuContainer.classList.contains('navbar_opened'))) {
        menuContainer.classList.add('navbar_opened');
        menu_toggle.style.display = 'none';
        menu_toggle_close.style.display = 'block';
        close_left_pane.style.display = 'block';
    }

    return true;
}

function close_menu() {
    if (menuContainer.classList.contains('navbar_opened')) {
        menuContainer.classList.remove('navbar_opened');
        menu_toggle.style.display = 'block';
        menu_toggle_close.style.display = 'none';
        close_left_pane.style.display = 'none';
    }
}

function propogateLanguageChange(lang) {
    return setTimeout(function (l) {
        return window.parent.postMessage({ currentLanguage: l, windowName: window.name }, "*");
    }, 0, lang);
}

function initLanguages() {
    $('.languages').on('click', function (event) {
        var l = getUrlVars()["l"] || $('.select-list')[0].children[0].id, // default language
            lang = $(event.target).parent().attr("id"); // selected language
        var el = $("#selLang a").children()[0];

        if (l != lang && lang != undefined) {
            el.classList.remove(el.classList[el.classList.length - 1]);
            el.classList.add(lang);
        }

        $('.select-list').toggleClass('opened');
    });

    var defaultLanguage = $('#defLanguage').val();

    var el = $("#" + defaultLanguage);  // default language link
    var selectedElement = $(el).addClass("selected");
    selectedElement.attr('href', '');
    $("#selLang").append(selectedElement);
}

function initScrollBars() {
    var menuScrollNode = document.getElementById('menuContainer');
    var mainScrollNode = document.getElementById('content');
    var flagsScrollNode = document.getElementById('flags_scroll');

    new SCROLLBAR.ScrollBar(menuScrollNode);
    new SCROLLBAR.ScrollBar(mainScrollNode);
    new SCROLLBAR.ScrollBar(flagsScrollNode);
}

function addClickHandlersForMenuItems() {
    var menu_list = document.getElementsByClassName('menuleft');

    for (var i = 0; i < menu_list.length; i++) {
        if (!menu_list[i].classList.contains('subMenu')) {
            menu_list[i].addEventListener('click', close_menu);
        }
    }
}

function setWindowMinHeight() {
    var windowHeight = $(window).height() - 140;
    $('.inner-content').css('min-height', windowHeight);
}

function customizeJquery() {
    $("#dialog").dialog({
        resizable: false,
        autoOpen: false,
        height: 140,
        buttons: {
            "OK": function () {
                $(this).dialog("close");
            }
        }
    });

    $(document).ajaxStop(function () {
        $('#loading').hide();
    });

    $(document).ajaxStart(function () {
        $('#loading').show();
    });
}

function disableInputsAutocomplete() {
    $('input').attr('autocomplete', 'off');
}

window.addEventListener("resize", function () {
    if (window.innerWidth > 1024) {
        if (menuContainer.classList.contains('navbar_opened')) {
            menuContainer.classList.remove('navbar_opened');
            menu_toggle.style.display = '';
            menu_toggle_close.style.display = '';
            close_left_pane.style.display = '';
        }
    }

    $('#main').height($(window).height() - 56);
}, false);

window.addEventListener("message", function (e) {
    if (typeof e.data !== 'undefined' && e.data.variables) {
        var root = document.documentElement;

        if (e.data.command && e.data.command === "setTheme") {
            var theme = e.data.variables === 'light' ? 'light' : 'dark';
            root.setAttribute("data-theme", theme);
            return;
        }

        var customStyles = JSON.parse(e.data.variables);
        for (var propertyName in customStyles) {
            root.style.setProperty('--' + propertyName, customStyles[propertyName]);
        }
    }
});

window.addEventListener("popstate", function (e) {
    let params = getRoutingParamsFromPath(e.state);
    let querySelectorString = '[data-route-menu="' + params[1] + '"]';

    if (params[2]) {
        querySelectorString += '[data-route-sub-menu="' + params[2] + '"]';
    }

    let elem = document.querySelector(querySelectorString);

    if (elem) {
        $(elem).trigger('click');
    }
});

document.addEventListener("DOMContentLoaded", function () {
    customizeJquery();
    PI.onReady();
    initLanguages();
    addClickHandlersForMenuItems();
    disableInputsAutocomplete();
    setWindowMinHeight();
});

function routePathFromArray(args) {
    let camelCase = '/';
    
    const defaultLanguage = $('#defLanguage').val();

    for (var i = 0; i < args.length; i++) {
        if (args[i]) {
            if (defaultLanguage === args[i]) {
                camelCase += args[i] + "/";
            } else {
                let path = args[i].toString();
                path = path.replaceAll("%", "~").replaceAll("+", "");
                path = toCamelCase(path);

                camelCase += path + "/";
            }
        }
    }

    return camelCase;
}

function toCamelCase(str) {
    str = str.toLowerCase() || '';
    return str.split(' ').join('-').split("&").join("and");
}

//function firstToUpperCase(str) {
//    str = str || '';
//    return '' + str.slice(0, 1).toUpperCase() + str.slice(1, str.length);
//}

function queryParamsFromDataset(ds) {
    return "?l=" + ds.routeLang + "&m=" + ds.routeMenu + "&s=" + ds.routeSubMenu;
}

function path2QueryString(path) {
    let params = getRoutingParamsFromPath(path);
    let result = "?l=" + params[0] + "&m=" + params[1];

    if (params[2]) {
        result += "&s=" + params[2];
    }

    return result;
}

function splitPath(path) {
    if (!path) {
        return [];
    }

    return path.replaceAll('/', ' ').trim().split(' ');
}

function parse2Number(x) {
    const parsed = parseInt(x);

    if (isNaN(parsed)) {
        return 0;
    }

    return parsed;
}

function getRoutingParamsFromPath(path) {
    const params = splitPath(path);
    const defaultLanguage = $('#defLanguage').val();
    const indexOfLanguage = params.indexOf(defaultLanguage);
    let result = [];

    if (~indexOfLanguage) {
        result.push(params[indexOfLanguage]);

        for (var i = indexOfLanguage; i < params.length; i++) {
            let param = parse2Number(params[i]);

            if (param) {
                result.push(params[i]);
            }
        }
    }

    return result;
}

function setSeoCotent(data) {
    let dataItem = null;

    if (data) {
        if (data.menuItems && data.menuItems[0]) {
            dataItem = data.menuItems[0];
        }

        if (data.subMenuItems && data.subMenuItems[0]) {
            dataItem = data.subMenuItems[0];
        }
    }

    document.title = dataItem.SeoTitle;
    $('#og-title').attr('content', dataItem.SeoTitle);
    $('#meta_keyword').attr('content', dataItem.SeoKeyword);
    $('#meta_desc, #og_desc').attr('content', dataItem.SeoDescription);
}