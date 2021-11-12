/*!/wp-includes/js/dist/vendor/wp-polyfill-dom-rect.js*/
(function(global){function number(v){return v===undefined?0:Number(v)}
function different(u,v){return u!==v&&!(isNaN(u)&&isNaN(v))}
function DOMRect(xArg,yArg,wArg,hArg){var x,y,width,height,left,right,top,bottom;x=number(xArg);y=number(yArg);width=number(wArg);height=number(hArg);Object.defineProperties(this,{x:{get:function(){return x},set:function(newX){if(different(x,newX)){x=newX;left=right=undefined}},enumerable:!0},y:{get:function(){return y},set:function(newY){if(different(y,newY)){y=newY;top=bottom=undefined}},enumerable:!0},width:{get:function(){return width},set:function(newWidth){if(different(width,newWidth)){width=newWidth;left=right=undefined}},enumerable:!0},height:{get:function(){return height},set:function(newHeight){if(different(height,newHeight)){height=newHeight;top=bottom=undefined}},enumerable:!0},left:{get:function(){if(left===undefined){left=x+Math.min(0,width)}
return left},enumerable:!0},right:{get:function(){if(right===undefined){right=x+Math.max(0,width)}
return right},enumerable:!0},top:{get:function(){if(top===undefined){top=y+Math.min(0,height)}
return top},enumerable:!0},bottom:{get:function(){if(bottom===undefined){bottom=y+Math.max(0,height)}
return bottom},enumerable:!0}})}
global.DOMRect=DOMRect}(this))
;