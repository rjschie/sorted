!function(n,c,f,o){"use strict";Foundation.libs.offcanvas={name:"offcanvas",version:"5.2.2",settings:{},init:function(n,c,f){this.events()},events:function(){var n=this,c=n.S;c(this.scope).off(".offcanvas").on("click.fndtn.offcanvas",".left-off-canvas-toggle",function(c){n.click_toggle_class(c,"move-right")}).on("click.fndtn.offcanvas",".left-off-canvas-menu a",function(n){c(".off-canvas-wrap").removeClass("move-right")}).on("click.fndtn.offcanvas",".right-off-canvas-toggle",function(c){n.click_toggle_class(c,"move-left")}).on("click.fndtn.offcanvas",".right-off-canvas-menu a",function(n){c(".off-canvas-wrap").removeClass("move-left")}).on("click.fndtn.offcanvas",".exit-off-canvas",function(c){n.click_remove_class(c,"move-left"),n.click_remove_class(c,"move-right")})},click_toggle_class:function(n,c){n.preventDefault(),this.S(n.target).closest(".off-canvas-wrap").toggleClass(c)},click_remove_class:function(n,c){n.preventDefault(),this.S(".off-canvas-wrap").removeClass(c)},reflow:function(){}}}(jQuery,this,this.document);