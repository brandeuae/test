/*!/wp-includes/js/dist/vendor/wp-polyfill-formdata.js*/
if(typeof FormData==='undefined'||!FormData.prototype.keys){const global=typeof window==='object'?window:typeof self==='object'?self:this
const _FormData=global.FormData
const _send=global.XMLHttpRequest&&global.XMLHttpRequest.prototype.send
const _fetch=global.Request&&global.fetch
const stringTag=global.Symbol&&Symbol.toStringTag
const map=new WeakMap
const wm=o=>map.get(o)
const arrayFrom=Array.from||(obj=>[].slice.call(obj))
if(stringTag){if(!Blob.prototype[stringTag]){Blob.prototype[stringTag]='Blob'}
if('File' in global&&!File.prototype[stringTag]){File.prototype[stringTag]='File'}}
try{new File([],'')}catch(a){global.File=function(b,d,c){const blob=new Blob(b,c)
const t=c&&void 0!==c.lastModified?new Date(c.lastModified):new Date
Object.defineProperties(blob,{name:{value:d},lastModifiedDate:{value:t},lastModified:{value:+t},toString:{value(){return'[object File]'}}})
if(stringTag){Object.defineProperty(blob,stringTag,{value:'File'})}
return blob}}
function normalizeValue([value,filename]){if(value instanceof Blob)
value=new File([value],filename,{type:value.type,lastModified:value.lastModified})
return value}
function stringify(name){if(!arguments.length)
throw new TypeError('1 argument required, but only 0 present.')
return[name+'']}
function normalizeArgs(name,value,filename){if(arguments.length<2)
throw new TypeError(`2 arguments required, but only ${arguments.length} present.`)
return value instanceof Blob?[name+'',value,filename!==undefined?filename+'':typeof value.name==='string'?value.name:'blob']:[name+'',value+'']}
function each(arr,cb){for(let i=0;i<arr.length;i++){cb(arr[i])}}
class FormDataPolyfill{constructor(form){map.set(this,Object.create(null))
if(!form)
return this
const self=this
each(form.elements,elm=>{if(!elm.name||elm.disabled||elm.type==='submit'||elm.type==='button')return
if(elm.type==='file'){each(elm.files||[],file=>{self.append(elm.name,file)})}else if(elm.type==='select-multiple'||elm.type==='select-one'){each(elm.options,opt=>{!opt.disabled&&opt.selected&&self.append(elm.name,opt.value)})}else if(elm.type==='checkbox'||elm.type==='radio'){if(elm.checked)self.append(elm.name,elm.value)}else{self.append(elm.name,elm.value)}})}
append(name,value,filename){const map=wm(this)
if(!map[name])
map[name]=[]
map[name].push([value,filename])}
delete(name){delete wm(this)[name]}*entries(){const map=wm(this)
for(let name in map)
for(let value of map[name])
yield[name,normalizeValue(value)]}
forEach(callback,thisArg){for(let[name,value]of this)
callback.call(thisArg,value,name,this)}
get(name){const map=wm(this)
return map[name]?normalizeValue(map[name][0]):null}
getAll(name){return(wm(this)[name]||[]).map(normalizeValue)}
has(name){return name in wm(this)}*keys(){for(let[name]of this)
yield name}
set(name,value,filename){wm(this)[name]=[[value,filename]]}*values(){for(let[name,value]of this)
yield value}['_asNative'](){const fd=new _FormData
for(let[name,value]of this)
fd.append(name,value)
return fd}['_blob'](){const boundary='----formdata-polyfill-'+Math.random()
const chunks=[]
for(let[name,value]of this){chunks.push(`--${boundary}\r\n`)
if(value instanceof Blob){chunks.push(`Content-Disposition: form-data; name="${name}"; filename="${value.name}"\r\n`,`Content-Type: ${value.type || 'application/octet-stream'}\r\n\r\n`,value,'\r\n')}else{chunks.push(`Content-Disposition: form-data; name="${name}"\r\n\r\n${value}\r\n`)}}
chunks.push(`--${boundary}--`)
return new Blob(chunks,{type:'multipart/form-data; boundary='+boundary})}[Symbol.iterator](){return this.entries()}
toString(){return'[object FormData]'}}
if(stringTag){FormDataPolyfill.prototype[stringTag]='FormData'}
const decorations=[['append',normalizeArgs],['delete',stringify],['get',stringify],['getAll',stringify],['has',stringify],['set',normalizeArgs]]
decorations.forEach(arr=>{const orig=FormDataPolyfill.prototype[arr[0]]
FormDataPolyfill.prototype[arr[0]]=function(){return orig.apply(this,arr[1].apply(this,arrayFrom(arguments)))}})
if(_send){XMLHttpRequest.prototype.send=function(data){if(data instanceof FormDataPolyfill){const blob=data._blob()
this.setRequestHeader('Content-Type',blob.type)
_send.call(this,blob)}else{_send.call(this,data)}}}
if(_fetch){const _fetch=global.fetch
global.fetch=function(input,init){if(init&&init.body&&init.body instanceof FormDataPolyfill){init.body=init.body._blob()}
return _fetch(input,init)}}
global.FormData=FormDataPolyfill}
;