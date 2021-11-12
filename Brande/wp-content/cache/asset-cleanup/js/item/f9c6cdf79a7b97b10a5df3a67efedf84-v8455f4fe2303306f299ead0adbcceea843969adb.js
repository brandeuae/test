/*!/wp-includes/js/dist/vendor/wp-polyfill-node-contains.js*/
(function(){function contains(node){if(!(0 in arguments)){throw new TypeError('1 argument is required')}
do{if(this===node){return!0}}while(node=node&&node.parentNode);return!1}
if('HTMLElement' in this&&'contains' in HTMLElement.prototype){try{delete HTMLElement.prototype.contains}catch(e){}}
if('Node' in this){Node.prototype.contains=contains}else{document.contains=Element.prototype.contains=contains}}())
;