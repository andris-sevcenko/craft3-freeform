"use strict";$(function(){$("div#container").on({click:function(){var a=$(this).data("submit-form");$("form#"+a).submit()}},"a[data-submit-form]");var a=$("#status-menu-btn");new Garnish.MenuBtn(a,{onOptionSelect:function(t){var s=$(t).data("id"),n=$(t).data("name"),e=$(t).data("color");$("#statusId").val(s);var i="<span class='status "+e+"'></span>"+Craft.uppercaseFirst(n);a.html(i),$("#status-menu-select li a.sel").removeClass("sel"),$("#status-menu-select li a[data-id="+s+"]").addClass("sel")}});var t=$("form#asset_download");$("a[data-asset-id]").on({click:function(){var a=$(this).data("asset-id");$("input[name=assetId]",t).val(a),t.submit()}});var s=$("#tabs a.tab");s.on({click:function(){var a=$(this);return a.parent().siblings().find(".tab.sel").removeClass("sel"),a.addClass("sel"),$(".tab-content").addClass("hidden"),$(".tab-content[data-for-tab="+a.data("tab-id")+"]").removeClass("hidden"),!1}})});