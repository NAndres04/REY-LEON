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

eval("/**\r\n * First we will load all of this project's JavaScript dependencies which\r\n * includes Vue and other libraries. It is a great starting point when\r\n * building robust, powerful web applications using Vue and Laravel.\r\n *\r\n\r\nimport './bootstrap';\r\nimport {Dropzone} from \"dropzone\";\r\n\r\nDropzone.autoDiscover =false;\r\n//window.addEventListener('DOMContentLoaded',() =>{\r\nconst dropzone = new Dropzone(\"#dropzone\",{\r\n    dictDefaultMessage: \"Sube aqui tu imagen\",\r\n    acceptedFiles: \".png, .jpg, .jpeg, .gif, video/mp4\",\r\n    addRemoveLinks:true,\r\n    dictRemoveFile: \"Borrar archivo\",\r\n    maxFiles:3,\r\n    uploadMultiple:false,\r\n    setTimeout: 20000,\r\n\r\n    init: function(){\r\n      if(document.querySelector('[name=\"imagen\"]').value.trim()){\r\n        const imagenpublicada= {}\r\n        imagenpublicada.size =1234;\r\n        imagenpublicada.name= document.querySelector('[name=\"imagen\"]').value;\r\n\r\n        this.options.addedfile.call(this, imagenpublicada);\r\n        this.options.thumbnail.call(this, imagenpublicada, `/uploads/${imagenpublicada.name}`);\r\n\r\n        imagenpublicada.previewElement.classList.add('dz-success','dz-complete');\r\n      }\r\n    },\r\n});\r\n//});\r\n\r\n/*dropzone.on('sending', function(file,xhr,formData){\r\n  console.log(formData);\r\n});\r\n\r\ndropzone.on('success', function(file,response){\r\n    document.querySelector('[name=\"imagen\"]').value = response.imagen;\r\n  });\r\n/*dropzone.on('error', function(file,message){\r\n    console.log(message); \r\n});\r\ndropzone.on('removedfile', function(){\r\n  document.querySelector('[name=\"imagen\"]').value = '';\r\n});\r\n\r\n/**\r\n * Next, we will create a fresh Vue application instance. You may then begin\r\n * registering components with the application instance so they are ready\r\n * to use in your application's views. An example is included for you.\r\n */\n\n/**\r\n * The following block of code may be used to automatically register your\r\n * Vue components. It will recursively scan this directory for the Vue\r\n * components and automatically register them with their \"basename\".\r\n *\r\n * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>\r\n */\n// Object.entries(import.meta.glob('./**/*.vue', { eager: true })).forEach(([path, definition]) => {\n//     app.component(path.split('/').pop().replace(/\\.\\w+$/, ''), definition.default);\n// });\n\n/**\r\n * Finally, we will attach the application instance to a HTML element with\r\n * an \"id\" attribute of \"app\". This element is included with the \"auth\"\r\n * scaffolding. Otherwise, you will need to add an element yourself.\r\n *///# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJmaWxlIjoiLi9yZXNvdXJjZXMvanMvYXBwLmpzLmpzIiwibmFtZXMiOltdLCJzb3VyY2VSb290IjoiIiwic291cmNlcyI6WyJ3ZWJwYWNrOi8vLy4vcmVzb3VyY2VzL2pzL2FwcC5qcz9jZWQ2Il0sInNvdXJjZXNDb250ZW50IjpbIi8qKlxyXG4gKiBGaXJzdCB3ZSB3aWxsIGxvYWQgYWxsIG9mIHRoaXMgcHJvamVjdCdzIEphdmFTY3JpcHQgZGVwZW5kZW5jaWVzIHdoaWNoXHJcbiAqIGluY2x1ZGVzIFZ1ZSBhbmQgb3RoZXIgbGlicmFyaWVzLiBJdCBpcyBhIGdyZWF0IHN0YXJ0aW5nIHBvaW50IHdoZW5cclxuICogYnVpbGRpbmcgcm9idXN0LCBwb3dlcmZ1bCB3ZWIgYXBwbGljYXRpb25zIHVzaW5nIFZ1ZSBhbmQgTGFyYXZlbC5cclxuICpcclxuXHJcbmltcG9ydCAnLi9ib290c3RyYXAnO1xyXG5pbXBvcnQge0Ryb3B6b25lfSBmcm9tIFwiZHJvcHpvbmVcIjtcclxuXHJcbkRyb3B6b25lLmF1dG9EaXNjb3ZlciA9ZmFsc2U7XHJcbi8vd2luZG93LmFkZEV2ZW50TGlzdGVuZXIoJ0RPTUNvbnRlbnRMb2FkZWQnLCgpID0+e1xyXG5jb25zdCBkcm9wem9uZSA9IG5ldyBEcm9wem9uZShcIiNkcm9wem9uZVwiLHtcclxuICAgIGRpY3REZWZhdWx0TWVzc2FnZTogXCJTdWJlIGFxdWkgdHUgaW1hZ2VuXCIsXHJcbiAgICBhY2NlcHRlZEZpbGVzOiBcIi5wbmcsIC5qcGcsIC5qcGVnLCAuZ2lmLCB2aWRlby9tcDRcIixcclxuICAgIGFkZFJlbW92ZUxpbmtzOnRydWUsXHJcbiAgICBkaWN0UmVtb3ZlRmlsZTogXCJCb3JyYXIgYXJjaGl2b1wiLFxyXG4gICAgbWF4RmlsZXM6MyxcclxuICAgIHVwbG9hZE11bHRpcGxlOmZhbHNlLFxyXG4gICAgc2V0VGltZW91dDogMjAwMDAsXHJcblxyXG4gICAgaW5pdDogZnVuY3Rpb24oKXtcclxuICAgICAgaWYoZG9jdW1lbnQucXVlcnlTZWxlY3RvcignW25hbWU9XCJpbWFnZW5cIl0nKS52YWx1ZS50cmltKCkpe1xyXG4gICAgICAgIGNvbnN0IGltYWdlbnB1YmxpY2FkYT0ge31cclxuICAgICAgICBpbWFnZW5wdWJsaWNhZGEuc2l6ZSA9MTIzNDtcclxuICAgICAgICBpbWFnZW5wdWJsaWNhZGEubmFtZT0gZG9jdW1lbnQucXVlcnlTZWxlY3RvcignW25hbWU9XCJpbWFnZW5cIl0nKS52YWx1ZTtcclxuXHJcbiAgICAgICAgdGhpcy5vcHRpb25zLmFkZGVkZmlsZS5jYWxsKHRoaXMsIGltYWdlbnB1YmxpY2FkYSk7XHJcbiAgICAgICAgdGhpcy5vcHRpb25zLnRodW1ibmFpbC5jYWxsKHRoaXMsIGltYWdlbnB1YmxpY2FkYSwgYC91cGxvYWRzLyR7aW1hZ2VucHVibGljYWRhLm5hbWV9YCk7XHJcblxyXG4gICAgICAgIGltYWdlbnB1YmxpY2FkYS5wcmV2aWV3RWxlbWVudC5jbGFzc0xpc3QuYWRkKCdkei1zdWNjZXNzJywnZHotY29tcGxldGUnKTtcclxuICAgICAgfVxyXG4gICAgfSxcclxufSk7XHJcbi8vfSk7XHJcblxyXG4vKmRyb3B6b25lLm9uKCdzZW5kaW5nJywgZnVuY3Rpb24oZmlsZSx4aHIsZm9ybURhdGEpe1xyXG4gIGNvbnNvbGUubG9nKGZvcm1EYXRhKTtcclxufSk7XHJcblxyXG5kcm9wem9uZS5vbignc3VjY2VzcycsIGZ1bmN0aW9uKGZpbGUscmVzcG9uc2Upe1xyXG4gICAgZG9jdW1lbnQucXVlcnlTZWxlY3RvcignW25hbWU9XCJpbWFnZW5cIl0nKS52YWx1ZSA9IHJlc3BvbnNlLmltYWdlbjtcclxuICB9KTtcclxuLypkcm9wem9uZS5vbignZXJyb3InLCBmdW5jdGlvbihmaWxlLG1lc3NhZ2Upe1xyXG4gICAgY29uc29sZS5sb2cobWVzc2FnZSk7IFxyXG59KTtcclxuZHJvcHpvbmUub24oJ3JlbW92ZWRmaWxlJywgZnVuY3Rpb24oKXtcclxuICBkb2N1bWVudC5xdWVyeVNlbGVjdG9yKCdbbmFtZT1cImltYWdlblwiXScpLnZhbHVlID0gJyc7XHJcbn0pO1xyXG5cclxuLyoqXHJcbiAqIE5leHQsIHdlIHdpbGwgY3JlYXRlIGEgZnJlc2ggVnVlIGFwcGxpY2F0aW9uIGluc3RhbmNlLiBZb3UgbWF5IHRoZW4gYmVnaW5cclxuICogcmVnaXN0ZXJpbmcgY29tcG9uZW50cyB3aXRoIHRoZSBhcHBsaWNhdGlvbiBpbnN0YW5jZSBzbyB0aGV5IGFyZSByZWFkeVxyXG4gKiB0byB1c2UgaW4geW91ciBhcHBsaWNhdGlvbidzIHZpZXdzLiBBbiBleGFtcGxlIGlzIGluY2x1ZGVkIGZvciB5b3UuXHJcbiAqL1xyXG5cclxuXHJcblxyXG5cclxuXHJcbi8qKlxyXG4gKiBUaGUgZm9sbG93aW5nIGJsb2NrIG9mIGNvZGUgbWF5IGJlIHVzZWQgdG8gYXV0b21hdGljYWxseSByZWdpc3RlciB5b3VyXHJcbiAqIFZ1ZSBjb21wb25lbnRzLiBJdCB3aWxsIHJlY3Vyc2l2ZWx5IHNjYW4gdGhpcyBkaXJlY3RvcnkgZm9yIHRoZSBWdWVcclxuICogY29tcG9uZW50cyBhbmQgYXV0b21hdGljYWxseSByZWdpc3RlciB0aGVtIHdpdGggdGhlaXIgXCJiYXNlbmFtZVwiLlxyXG4gKlxyXG4gKiBFZy4gLi9jb21wb25lbnRzL0V4YW1wbGVDb21wb25lbnQudnVlIC0+IDxleGFtcGxlLWNvbXBvbmVudD48L2V4YW1wbGUtY29tcG9uZW50PlxyXG4gKi9cclxuXHJcbi8vIE9iamVjdC5lbnRyaWVzKGltcG9ydC5tZXRhLmdsb2IoJy4vKiovKi52dWUnLCB7IGVhZ2VyOiB0cnVlIH0pKS5mb3JFYWNoKChbcGF0aCwgZGVmaW5pdGlvbl0pID0+IHtcclxuLy8gICAgIGFwcC5jb21wb25lbnQocGF0aC5zcGxpdCgnLycpLnBvcCgpLnJlcGxhY2UoL1xcLlxcdyskLywgJycpLCBkZWZpbml0aW9uLmRlZmF1bHQpO1xyXG4vLyB9KTtcclxuXHJcbi8qKlxyXG4gKiBGaW5hbGx5LCB3ZSB3aWxsIGF0dGFjaCB0aGUgYXBwbGljYXRpb24gaW5zdGFuY2UgdG8gYSBIVE1MIGVsZW1lbnQgd2l0aFxyXG4gKiBhbiBcImlkXCIgYXR0cmlidXRlIG9mIFwiYXBwXCIuIFRoaXMgZWxlbWVudCBpcyBpbmNsdWRlZCB3aXRoIHRoZSBcImF1dGhcIlxyXG4gKiBzY2FmZm9sZGluZy4gT3RoZXJ3aXNlLCB5b3Ugd2lsbCBuZWVkIHRvIGFkZCBhbiBlbGVtZW50IHlvdXJzZWxmLlxyXG4gKi9cclxuXHJcblxyXG4iXSwibWFwcGluZ3MiOiJBQUFBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTs7QUFNQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUVBO0FBQ0E7QUFDQTs7QUFFQTtBQUNBO0FBQ0E7QUFDQTtBQUNBIn0=\n//# sourceURL=webpack-internal:///./resources/js/app.js\n");

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