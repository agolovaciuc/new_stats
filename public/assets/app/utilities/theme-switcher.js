"use strict";$(function(){var a="html",e="data-theme",l="theme-variant",o="#theme-toggle";function t(t){t?($(a).attr(e,"light"),$(a).css("color-scheme","light"),$(o).children("i").removeClass("fa-sun").addClass("fa-moon"),localStorage.setItem(l,"light")):($(a).attr(e,"dark"),$(a).css("color-scheme","dark"),$(o).children("i").removeClass("fa-moon").addClass("fa-sun"),localStorage.setItem(l,"dark"))}localStorage.getItem(l)&&t("light"==localStorage.getItem(l)),$(o).on("click",function(){t("dark"==$(a).attr(e))})});