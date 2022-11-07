/*
 * ATTENTION: An "eval-source-map" devtool has been used.
 * This devtool is neither made for production nor for readable output files.
 * It uses "eval()" calls to create a separate source file with attached SourceMaps in the browser devtools.
 * If you are trying to read the output file, select a different devtool (https://webpack.js.org/configuration/devtool/)
 * or disable the default devtool with "devtool: false".
 * If you are looking for production-ready output files, see mode: "production" (https://webpack.js.org/configuration/mode/).
 */
/******/ (() => { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./resources/js/app.js":
/*!*****************************!*\
  !*** ./resources/js/app.js ***!
  \*****************************/
/***/ (() => {

eval("/**\n * First we will load all of this project's JavaScript dependencies which\n * includes Vue and other libraries. It is a great starting point when\n * building robust, powerful web applications using Vue and Laravel.\n *\n\nimport './bootstrap';\nimport {Dropzone} from \"dropzone\";\n\nDropzone.autoDiscover =false;\n//window.addEventListener('DOMContentLoaded',() =>{\nconst dropzone = new Dropzone(\"#dropzone\",{\n    dictDefaultMessage: \"Sube aqui tu imagen\",\n    acceptedFiles: \".png, .jpg, .jpeg, .gif, video/mp4\",\n    addRemoveLinks:true,\n    dictRemoveFile: \"Borrar archivo\",\n    maxFiles:3,\n    uploadMultiple:false,\n    setTimeout: 20000,\n\n    init: function(){\n      if(document.querySelector('[name=\"imagen\"]').value.trim()){\n        const imagenpublicada= {}\n        imagenpublicada.size =1234;\n        imagenpublicada.name= document.querySelector('[name=\"imagen\"]').value;\n\n        this.options.addedfile.call(this, imagenpublicada);\n        this.options.thumbnail.call(this, imagenpublicada, `/uploads/${imagenpublicada.name}`);\n\n        imagenpublicada.previewElement.classList.add('dz-success','dz-complete');\n      }\n    },\n});\n//});\n\n/*dropzone.on('sending', function(file,xhr,formData){\n  console.log(formData);\n});\n\ndropzone.on('success', function(file,response){\n    document.querySelector('[name=\"imagen\"]').value = response.imagen;\n  });\n/*dropzone.on('error', function(file,message){\n    console.log(message); \n});\ndropzone.on('removedfile', function(){\n  document.querySelector('[name=\"imagen\"]').value = '';\n});\n\n/**\n * Next, we will create a fresh Vue application instance. You may then begin\n * registering components with the application instance so they are ready\n * to use in your application's views. An example is included for you.\n */\n\n/**\n * The following block of code may be used to automatically register your\n * Vue components. It will recursively scan this directory for the Vue\n * components and automatically register them with their \"basename\".\n *\n * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>\n */\n// Object.entries(import.meta.glob('./**/*.vue', { eager: true })).forEach(([path, definition]) => {\n//     app.component(path.split('/').pop().replace(/\\.\\w+$/, ''), definition.default);\n// });\n\n/**\n * Finally, we will attach the application instance to a HTML element with\n * an \"id\" attribute of \"app\". This element is included with the \"auth\"\n * scaffolding. Otherwise, you will need to add an element yourself.\n *///# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJuYW1lcyI6W10sInNvdXJjZXMiOlsid2VicGFjazovLy8uL3Jlc291cmNlcy9qcy9hcHAuanM/Y2VkNiJdLCJzb3VyY2VzQ29udGVudCI6WyIvKipcbiAqIEZpcnN0IHdlIHdpbGwgbG9hZCBhbGwgb2YgdGhpcyBwcm9qZWN0J3MgSmF2YVNjcmlwdCBkZXBlbmRlbmNpZXMgd2hpY2hcbiAqIGluY2x1ZGVzIFZ1ZSBhbmQgb3RoZXIgbGlicmFyaWVzLiBJdCBpcyBhIGdyZWF0IHN0YXJ0aW5nIHBvaW50IHdoZW5cbiAqIGJ1aWxkaW5nIHJvYnVzdCwgcG93ZXJmdWwgd2ViIGFwcGxpY2F0aW9ucyB1c2luZyBWdWUgYW5kIExhcmF2ZWwuXG4gKlxuXG5pbXBvcnQgJy4vYm9vdHN0cmFwJztcbmltcG9ydCB7RHJvcHpvbmV9IGZyb20gXCJkcm9wem9uZVwiO1xuXG5Ecm9wem9uZS5hdXRvRGlzY292ZXIgPWZhbHNlO1xuLy93aW5kb3cuYWRkRXZlbnRMaXN0ZW5lcignRE9NQ29udGVudExvYWRlZCcsKCkgPT57XG5jb25zdCBkcm9wem9uZSA9IG5ldyBEcm9wem9uZShcIiNkcm9wem9uZVwiLHtcbiAgICBkaWN0RGVmYXVsdE1lc3NhZ2U6IFwiU3ViZSBhcXVpIHR1IGltYWdlblwiLFxuICAgIGFjY2VwdGVkRmlsZXM6IFwiLnBuZywgLmpwZywgLmpwZWcsIC5naWYsIHZpZGVvL21wNFwiLFxuICAgIGFkZFJlbW92ZUxpbmtzOnRydWUsXG4gICAgZGljdFJlbW92ZUZpbGU6IFwiQm9ycmFyIGFyY2hpdm9cIixcbiAgICBtYXhGaWxlczozLFxuICAgIHVwbG9hZE11bHRpcGxlOmZhbHNlLFxuICAgIHNldFRpbWVvdXQ6IDIwMDAwLFxuXG4gICAgaW5pdDogZnVuY3Rpb24oKXtcbiAgICAgIGlmKGRvY3VtZW50LnF1ZXJ5U2VsZWN0b3IoJ1tuYW1lPVwiaW1hZ2VuXCJdJykudmFsdWUudHJpbSgpKXtcbiAgICAgICAgY29uc3QgaW1hZ2VucHVibGljYWRhPSB7fVxuICAgICAgICBpbWFnZW5wdWJsaWNhZGEuc2l6ZSA9MTIzNDtcbiAgICAgICAgaW1hZ2VucHVibGljYWRhLm5hbWU9IGRvY3VtZW50LnF1ZXJ5U2VsZWN0b3IoJ1tuYW1lPVwiaW1hZ2VuXCJdJykudmFsdWU7XG5cbiAgICAgICAgdGhpcy5vcHRpb25zLmFkZGVkZmlsZS5jYWxsKHRoaXMsIGltYWdlbnB1YmxpY2FkYSk7XG4gICAgICAgIHRoaXMub3B0aW9ucy50aHVtYm5haWwuY2FsbCh0aGlzLCBpbWFnZW5wdWJsaWNhZGEsIGAvdXBsb2Fkcy8ke2ltYWdlbnB1YmxpY2FkYS5uYW1lfWApO1xuXG4gICAgICAgIGltYWdlbnB1YmxpY2FkYS5wcmV2aWV3RWxlbWVudC5jbGFzc0xpc3QuYWRkKCdkei1zdWNjZXNzJywnZHotY29tcGxldGUnKTtcbiAgICAgIH1cbiAgICB9LFxufSk7XG4vL30pO1xuXG4vKmRyb3B6b25lLm9uKCdzZW5kaW5nJywgZnVuY3Rpb24oZmlsZSx4aHIsZm9ybURhdGEpe1xuICBjb25zb2xlLmxvZyhmb3JtRGF0YSk7XG59KTtcblxuZHJvcHpvbmUub24oJ3N1Y2Nlc3MnLCBmdW5jdGlvbihmaWxlLHJlc3BvbnNlKXtcbiAgICBkb2N1bWVudC5xdWVyeVNlbGVjdG9yKCdbbmFtZT1cImltYWdlblwiXScpLnZhbHVlID0gcmVzcG9uc2UuaW1hZ2VuO1xuICB9KTtcbi8qZHJvcHpvbmUub24oJ2Vycm9yJywgZnVuY3Rpb24oZmlsZSxtZXNzYWdlKXtcbiAgICBjb25zb2xlLmxvZyhtZXNzYWdlKTsgXG59KTtcbmRyb3B6b25lLm9uKCdyZW1vdmVkZmlsZScsIGZ1bmN0aW9uKCl7XG4gIGRvY3VtZW50LnF1ZXJ5U2VsZWN0b3IoJ1tuYW1lPVwiaW1hZ2VuXCJdJykudmFsdWUgPSAnJztcbn0pO1xuXG4vKipcbiAqIE5leHQsIHdlIHdpbGwgY3JlYXRlIGEgZnJlc2ggVnVlIGFwcGxpY2F0aW9uIGluc3RhbmNlLiBZb3UgbWF5IHRoZW4gYmVnaW5cbiAqIHJlZ2lzdGVyaW5nIGNvbXBvbmVudHMgd2l0aCB0aGUgYXBwbGljYXRpb24gaW5zdGFuY2Ugc28gdGhleSBhcmUgcmVhZHlcbiAqIHRvIHVzZSBpbiB5b3VyIGFwcGxpY2F0aW9uJ3Mgdmlld3MuIEFuIGV4YW1wbGUgaXMgaW5jbHVkZWQgZm9yIHlvdS5cbiAqL1xuXG5cblxuXG5cbi8qKlxuICogVGhlIGZvbGxvd2luZyBibG9jayBvZiBjb2RlIG1heSBiZSB1c2VkIHRvIGF1dG9tYXRpY2FsbHkgcmVnaXN0ZXIgeW91clxuICogVnVlIGNvbXBvbmVudHMuIEl0IHdpbGwgcmVjdXJzaXZlbHkgc2NhbiB0aGlzIGRpcmVjdG9yeSBmb3IgdGhlIFZ1ZVxuICogY29tcG9uZW50cyBhbmQgYXV0b21hdGljYWxseSByZWdpc3RlciB0aGVtIHdpdGggdGhlaXIgXCJiYXNlbmFtZVwiLlxuICpcbiAqIEVnLiAuL2NvbXBvbmVudHMvRXhhbXBsZUNvbXBvbmVudC52dWUgLT4gPGV4YW1wbGUtY29tcG9uZW50PjwvZXhhbXBsZS1jb21wb25lbnQ+XG4gKi9cblxuLy8gT2JqZWN0LmVudHJpZXMoaW1wb3J0Lm1ldGEuZ2xvYignLi8qKi8qLnZ1ZScsIHsgZWFnZXI6IHRydWUgfSkpLmZvckVhY2goKFtwYXRoLCBkZWZpbml0aW9uXSkgPT4ge1xuLy8gICAgIGFwcC5jb21wb25lbnQocGF0aC5zcGxpdCgnLycpLnBvcCgpLnJlcGxhY2UoL1xcLlxcdyskLywgJycpLCBkZWZpbml0aW9uLmRlZmF1bHQpO1xuLy8gfSk7XG5cbi8qKlxuICogRmluYWxseSwgd2Ugd2lsbCBhdHRhY2ggdGhlIGFwcGxpY2F0aW9uIGluc3RhbmNlIHRvIGEgSFRNTCBlbGVtZW50IHdpdGhcbiAqIGFuIFwiaWRcIiBhdHRyaWJ1dGUgb2YgXCJhcHBcIi4gVGhpcyBlbGVtZW50IGlzIGluY2x1ZGVkIHdpdGggdGhlIFwiYXV0aFwiXG4gKiBzY2FmZm9sZGluZy4gT3RoZXJ3aXNlLCB5b3Ugd2lsbCBuZWVkIHRvIGFkZCBhbiBlbGVtZW50IHlvdXJzZWxmLlxuICovXG5cblxuIl0sIm1hcHBpbmdzIjoiQUFBQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7O0FBTUE7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFFQTtBQUNBO0FBQ0E7O0FBRUE7QUFDQTtBQUNBO0FBQ0E7QUFDQSIsImZpbGUiOiIuL3Jlc291cmNlcy9qcy9hcHAuanMuanMiLCJzb3VyY2VSb290IjoiIn0=\n//# sourceURL=webpack-internal:///./resources/js/app.js\n");

/***/ }),

/***/ "./resources/css/app.css":
/*!*******************************!*\
  !*** ./resources/css/app.css ***!
  \*******************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\n// extracted by mini-css-extract-plugin\n//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJmaWxlIjoiLi9yZXNvdXJjZXMvY3NzL2FwcC5jc3MuanMiLCJtYXBwaW5ncyI6IjtBQUFBIiwic291cmNlcyI6WyJ3ZWJwYWNrOi8vLy4vcmVzb3VyY2VzL2Nzcy9hcHAuY3NzP2E1ZTciXSwic291cmNlc0NvbnRlbnQiOlsiLy8gZXh0cmFjdGVkIGJ5IG1pbmktY3NzLWV4dHJhY3QtcGx1Z2luXG5leHBvcnQge307Il0sIm5hbWVzIjpbXSwic291cmNlUm9vdCI6IiJ9\n//# sourceURL=webpack-internal:///./resources/css/app.css\n");

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	// The module cache
/******/ 	var __webpack_module_cache__ = {};
/******/ 	
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/ 		// Check if module is in cache
/******/ 		var cachedModule = __webpack_module_cache__[moduleId];
/******/ 		if (cachedModule !== undefined) {
/******/ 			return cachedModule.exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = __webpack_module_cache__[moduleId] = {
/******/ 			// no module.id needed
/******/ 			// no module.loaded needed
/******/ 			exports: {}
/******/ 		};
/******/ 	
/******/ 		// Execute the module function
/******/ 		__webpack_modules__[moduleId](module, module.exports, __webpack_require__);
/******/ 	
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/ 	
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = __webpack_modules__;
/******/ 	
/************************************************************************/
/******/ 	/* webpack/runtime/chunk loaded */
/******/ 	(() => {
/******/ 		var deferred = [];
/******/ 		__webpack_require__.O = (result, chunkIds, fn, priority) => {
/******/ 			if(chunkIds) {
/******/ 				priority = priority || 0;
/******/ 				for(var i = deferred.length; i > 0 && deferred[i - 1][2] > priority; i--) deferred[i] = deferred[i - 1];
/******/ 				deferred[i] = [chunkIds, fn, priority];
/******/ 				return;
/******/ 			}
/******/ 			var notFulfilled = Infinity;
/******/ 			for (var i = 0; i < deferred.length; i++) {
/******/ 				var [chunkIds, fn, priority] = deferred[i];
/******/ 				var fulfilled = true;
/******/ 				for (var j = 0; j < chunkIds.length; j++) {
/******/ 					if ((priority & 1 === 0 || notFulfilled >= priority) && Object.keys(__webpack_require__.O).every((key) => (__webpack_require__.O[key](chunkIds[j])))) {
/******/ 						chunkIds.splice(j--, 1);
/******/ 					} else {
/******/ 						fulfilled = false;
/******/ 						if(priority < notFulfilled) notFulfilled = priority;
/******/ 					}
/******/ 				}
/******/ 				if(fulfilled) {
/******/ 					deferred.splice(i--, 1)
/******/ 					var r = fn();
/******/ 					if (r !== undefined) result = r;
/******/ 				}
/******/ 			}
/******/ 			return result;
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/hasOwnProperty shorthand */
/******/ 	(() => {
/******/ 		__webpack_require__.o = (obj, prop) => (Object.prototype.hasOwnProperty.call(obj, prop))
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/make namespace object */
/******/ 	(() => {
/******/ 		// define __esModule on exports
/******/ 		__webpack_require__.r = (exports) => {
/******/ 			if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 				Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 			}
/******/ 			Object.defineProperty(exports, '__esModule', { value: true });
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/jsonp chunk loading */
/******/ 	(() => {
/******/ 		// no baseURI
/******/ 		
/******/ 		// object to store loaded and loading chunks
/******/ 		// undefined = chunk not loaded, null = chunk preloaded/prefetched
/******/ 		// [resolve, reject, Promise] = chunk loading, 0 = chunk loaded
/******/ 		var installedChunks = {
/******/ 			"/js/app": 0,
/******/ 			"css/app": 0
/******/ 		};
/******/ 		
/******/ 		// no chunk on demand loading
/******/ 		
/******/ 		// no prefetching
/******/ 		
/******/ 		// no preloaded
/******/ 		
/******/ 		// no HMR
/******/ 		
/******/ 		// no HMR manifest
/******/ 		
/******/ 		__webpack_require__.O.j = (chunkId) => (installedChunks[chunkId] === 0);
/******/ 		
/******/ 		// install a JSONP callback for chunk loading
/******/ 		var webpackJsonpCallback = (parentChunkLoadingFunction, data) => {
/******/ 			var [chunkIds, moreModules, runtime] = data;
/******/ 			// add "moreModules" to the modules object,
/******/ 			// then flag all "chunkIds" as loaded and fire callback
/******/ 			var moduleId, chunkId, i = 0;
/******/ 			if(chunkIds.some((id) => (installedChunks[id] !== 0))) {
/******/ 				for(moduleId in moreModules) {
/******/ 					if(__webpack_require__.o(moreModules, moduleId)) {
/******/ 						__webpack_require__.m[moduleId] = moreModules[moduleId];
/******/ 					}
/******/ 				}
/******/ 				if(runtime) var result = runtime(__webpack_require__);
/******/ 			}
/******/ 			if(parentChunkLoadingFunction) parentChunkLoadingFunction(data);
/******/ 			for(;i < chunkIds.length; i++) {
/******/ 				chunkId = chunkIds[i];
/******/ 				if(__webpack_require__.o(installedChunks, chunkId) && installedChunks[chunkId]) {
/******/ 					installedChunks[chunkId][0]();
/******/ 				}
/******/ 				installedChunks[chunkId] = 0;
/******/ 			}
/******/ 			return __webpack_require__.O(result);
/******/ 		}
/******/ 		
/******/ 		var chunkLoadingGlobal = self["webpackChunk"] = self["webpackChunk"] || [];
/******/ 		chunkLoadingGlobal.forEach(webpackJsonpCallback.bind(null, 0));
/******/ 		chunkLoadingGlobal.push = webpackJsonpCallback.bind(null, chunkLoadingGlobal.push.bind(chunkLoadingGlobal));
/******/ 	})();
/******/ 	
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module depends on other loaded chunks and execution need to be delayed
/******/ 	__webpack_require__.O(undefined, ["css/app"], () => (__webpack_require__("./resources/js/app.js")))
/******/ 	var __webpack_exports__ = __webpack_require__.O(undefined, ["css/app"], () => (__webpack_require__("./resources/css/app.css")))
/******/ 	__webpack_exports__ = __webpack_require__.O(__webpack_exports__);
/******/ 	
/******/ })()
;