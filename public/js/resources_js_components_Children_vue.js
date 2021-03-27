(self["webpackChunk"] = self["webpackChunk"] || []).push([["resources_js_components_Children_vue"],{

/***/ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/Children.vue?vue&type=script&lang=js&":
/*!***************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/Children.vue?vue&type=script&lang=js& ***!
  \***************************************************************************************************************************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @babel/runtime/regenerator */ "./node_modules/@babel/runtime/regenerator/index.js");
/* harmony import */ var _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0__);


function asyncGeneratorStep(gen, resolve, reject, _next, _throw, key, arg) { try { var info = gen[key](arg); var value = info.value; } catch (error) { reject(error); return; } if (info.done) { resolve(value); } else { Promise.resolve(value).then(_next, _throw); } }

function _asyncToGenerator(fn) { return function () { var self = this, args = arguments; return new Promise(function (resolve, reject) { var gen = fn.apply(self, args); function _next(value) { asyncGeneratorStep(gen, resolve, reject, _next, _throw, "next", value); } function _throw(err) { asyncGeneratorStep(gen, resolve, reject, _next, _throw, "throw", err); } _next(undefined); }); }; }

//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = ({
  data: function data() {
    return {
      children: [{
        id: 50,
        name: "Zane Osinski DVM",
        description: "Quia quisquam nihil harum. Et quisquam atque ut aut nemo molestiae veniam omnis. Totam illum quos at sunt et.",
        sum: 3918072.3,
        created_at: "2021-03-16T15:58:02.000000Z",
        updated_at: "2021-03-16T15:58:02.000000Z",
        status: 1,
        photo: [{
          id: 1,
          name: "https://s23527.pcdn.co/wp-content/uploads/2019/10/Khanh-Phan-Viet-Nam-entry-Open-competition-Travel-2020-Sony-World-Photography-Awards.jpg.optimal.jpg",
          child_id: 51,
          created_at: "2021-03-16T15:59:16.000000Z",
          updated_at: "2021-03-16T15:59:16.000000Z"
        }]
      }, {
        id: 51,
        name: "ребёнок первый",
        description: "lofdssDs",
        sum: 20000,
        created_at: "2021-03-16T15:59:16.000000Z",
        updated_at: "2021-03-16T15:59:16.000000Z",
        status: 1,
        photo: [{
          id: 1,
          name: "https://s23527.pcdn.co/wp-content/uploads/2019/10/Khanh-Phan-Viet-Nam-entry-Open-competition-Travel-2020-Sony-World-Photography-Awards.jpg.optimal.jpg",
          child_id: 51,
          created_at: "2021-03-16T15:59:16.000000Z",
          updated_at: "2021-03-16T15:59:16.000000Z"
        }, {
          id: 2,
          name: "C:/Users/Казбек/Documents/JS/fond/public/doctor.png",
          child_id: 51,
          created_at: "2021-03-16T15:59:16.000000Z",
          updated_at: "2021-03-16T15:59:16.000000Z"
        }]
      }]
    };
  },
  methods: {
    getChildren: function getChildren() {
      var _this = this;

      return _asyncToGenerator( /*#__PURE__*/_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default().mark(function _callee() {
        var res, json;
        return _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default().wrap(function _callee$(_context) {
          while (1) {
            switch (_context.prev = _context.next) {
              case 0:
                console.log("Get children");
                _context.next = 3;
                return fetch("http://127.0.0.1:8000/api/children");

              case 3:
                res = _context.sent;
                _context.next = 6;
                return res.json();

              case 6:
                json = _context.sent;

                _this.children.push(json.help);

                _this.children.push(json["don't help"]);

              case 9:
              case "end":
                return _context.stop();
            }
          }
        }, _callee);
      }))();
    }
  },
  mounted: function mounted() {// this.getChildren();
  }
});

/***/ }),

/***/ "./resources/js/components/Children.vue":
/*!**********************************************!*\
  !*** ./resources/js/components/Children.vue ***!
  \**********************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _Children_vue_vue_type_template_id_24d45bea___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./Children.vue?vue&type=template&id=24d45bea& */ "./resources/js/components/Children.vue?vue&type=template&id=24d45bea&");
/* harmony import */ var _Children_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./Children.vue?vue&type=script&lang=js& */ "./resources/js/components/Children.vue?vue&type=script&lang=js&");
/* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! !../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */
;
var component = (0,_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__.default)(
  _Children_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__.default,
  _Children_vue_vue_type_template_id_24d45bea___WEBPACK_IMPORTED_MODULE_0__.render,
  _Children_vue_vue_type_template_id_24d45bea___WEBPACK_IMPORTED_MODULE_0__.staticRenderFns,
  false,
  null,
  null,
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "resources/js/components/Children.vue"
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (component.exports);

/***/ }),

/***/ "./resources/js/components/Children.vue?vue&type=script&lang=js&":
/*!***********************************************************************!*\
  !*** ./resources/js/components/Children.vue?vue&type=script&lang=js& ***!
  \***********************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _node_modules_babel_loader_lib_index_js_clonedRuleSet_5_0_rules_0_use_0_node_modules_vue_loader_lib_index_js_vue_loader_options_Children_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./Children.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/Children.vue?vue&type=script&lang=js&");
 /* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (_node_modules_babel_loader_lib_index_js_clonedRuleSet_5_0_rules_0_use_0_node_modules_vue_loader_lib_index_js_vue_loader_options_Children_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__.default); 

/***/ }),

/***/ "./resources/js/components/Children.vue?vue&type=template&id=24d45bea&":
/*!*****************************************************************************!*\
  !*** ./resources/js/components/Children.vue?vue&type=template&id=24d45bea& ***!
  \*****************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "render": () => (/* reexport safe */ _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_Children_vue_vue_type_template_id_24d45bea___WEBPACK_IMPORTED_MODULE_0__.render),
/* harmony export */   "staticRenderFns": () => (/* reexport safe */ _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_Children_vue_vue_type_template_id_24d45bea___WEBPACK_IMPORTED_MODULE_0__.staticRenderFns)
/* harmony export */ });
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_Children_vue_vue_type_template_id_24d45bea___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./Children.vue?vue&type=template&id=24d45bea& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/Children.vue?vue&type=template&id=24d45bea&");


/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/Children.vue?vue&type=template&id=24d45bea&":
/*!********************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/Children.vue?vue&type=template&id=24d45bea& ***!
  \********************************************************************************************************************************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "render": () => (/* binding */ render),
/* harmony export */   "staticRenderFns": () => (/* binding */ staticRenderFns)
/* harmony export */ });
var render = function() {
  var _vm = this
  var _h = _vm.$createElement
  var _c = _vm._self._c || _h
  return _c(
    "v-container",
    [
      _c(
        "v-card",
        { attrs: { elevation: "0" } },
        [
          _c("h1", { staticClass: "px-4" }, [_vm._v("Дети:")]),
          _vm._v(" "),
          _c(
            "v-list",
            _vm._l(_vm.children, function(child) {
              return _c(
                "div",
                { key: child.id, staticClass: "child--item px-4 my-4" },
                [
                  _c(
                    "v-layout",
                    {
                      attrs: {
                        row: "",
                        "justify-space-between": "",
                        "align-center": ""
                      }
                    },
                    [
                      _c(
                        "v-flex",
                        { attrs: { xs10: "", md8: "" } },
                        [
                          _c(
                            "v-list-item",
                            [
                              _c(
                                "v-list-item-avatar",
                                { attrs: { size: "70" } },
                                [
                                  _c("v-img", {
                                    attrs: { src: child.photo[0].name }
                                  })
                                ],
                                1
                              ),
                              _vm._v(" "),
                              _c(
                                "v-list-item-group",
                                [
                                  _c(
                                    "v-list-item-content",
                                    [
                                      _c(
                                        "v-list-item-title",
                                        { staticClass: "title" },
                                        [_vm._v(_vm._s(child.name))]
                                      ),
                                      _vm._v(" "),
                                      _c("v-list-item-subtitle", [
                                        _vm._v(_vm._s(child.sum))
                                      ]),
                                      _vm._v(
                                        "\n                  " +
                                          _vm._s(child.description) +
                                          "\n                "
                                      )
                                    ],
                                    1
                                  )
                                ],
                                1
                              ),
                              _vm._v(" "),
                              _c("v-spacer")
                            ],
                            1
                          )
                        ],
                        1
                      ),
                      _vm._v(" "),
                      _c(
                        "v-flex",
                        {
                          staticClass: "d-flex justify-center",
                          attrs: { xs12: "", md4: "" }
                        },
                        [
                          _c(
                            "v-btn",
                            {
                              staticClass: "white--text mx-2",
                              attrs: { color: "yellow", rounded: "" }
                            },
                            [_vm._v("Изменить")]
                          ),
                          _vm._v(" "),
                          _c(
                            "v-btn",
                            {
                              staticClass: "white--text mx-2",
                              attrs: { color: "red", rounded: "" }
                            },
                            [_vm._v("Закрыть")]
                          )
                        ],
                        1
                      )
                    ],
                    1
                  )
                ],
                1
              )
            }),
            0
          ),
          _vm._v(" "),
          _c("v-form", [_c("v-text-field", [_vm._v("Text")])], 1)
        ],
        1
      )
    ],
    1
  )
}
var staticRenderFns = []
render._withStripped = true



/***/ })

}]);