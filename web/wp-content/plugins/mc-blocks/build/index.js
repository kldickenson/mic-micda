/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, {
/******/ 				configurable: false,
/******/ 				enumerable: true,
/******/ 				get: getter
/******/ 			});
/******/ 		}
/******/ 	};
/******/
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = function(exports) {
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = "./src/index.js");
/******/ })
/************************************************************************/
/******/ ({

/***/ "./src/accordion/index.js":
/*!********************************!*\
  !*** ./src/accordion/index.js ***!
  \********************************/
/*! no exports provided */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _wordpress_element__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @wordpress/element */ "@wordpress/element");
/* harmony import */ var _wordpress_element__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__);

var __ = wp.i18n.__;
var registerBlockType = wp.blocks.registerBlockType;
var RichText = wp.editor.RichText;
registerBlockType("mc-blocks/accordion", {
  title: __("Accordion", "mc-blocks"),
  icon: "editor-insertmore",
  category: "widgets",
  attributes: {
    accordionHeading: {
      type: "string",
      source: "html",
      selector: ".accordion-heading"
    },
    accordionContent: {
      type: "array",
      source: "children",
      selector: ".accordion-content"
    }
  },
  edit: function edit(props) {
    var _props$attributes = props.attributes,
        accordionHeading = _props$attributes.accordionHeading,
        accordionContent = _props$attributes.accordionContent,
        setAttributes = props.setAttributes;

    var onChangeAccordionHeading = function onChangeAccordionHeading(newAccordionHeading) {
      setAttributes({
        accordionHeading: newAccordionHeading
      });
    };

    var onChangeAccordionContent = function onChangeAccordionContent(newAccordionContent) {
      setAttributes({
        accordionContent: newAccordionContent
      });
    };

    return Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("div", null, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("h3", {
      className: "accordion-heading"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(RichText, {
      placeholder: __("Accordion heading", "mc-blocks"),
      value: accordionHeading,
      onChange: onChangeAccordionHeading
    })), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("div", {
      className: "accordion-content"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(RichText, {
      multiline: "p",
      placeholder: __("Accordion content", "mc-blocks"),
      onChange: onChangeAccordionContent,
      value: accordionContent
    })));
  },
  save: function save(props) {
    var _props$attributes2 = props.attributes,
        accordionHeading = _props$attributes2.accordionHeading,
        accordionContent = _props$attributes2.accordionContent;
    return Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("details", null, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("summary", null, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("span", {
      className: "accordion-heading"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(RichText.Content, {
      value: accordionHeading
    })), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("span", {
      className: "plus-wrapper"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("span", {
      className: "plus"
    }))), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("div", {
      className: "accordion-content"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(RichText.Content, {
      multiline: "p",
      value: accordionContent
    })));
  }
});

/***/ }),

/***/ "./src/card/index.js":
/*!***************************!*\
  !*** ./src/card/index.js ***!
  \***************************/
/*! no exports provided */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _wordpress_element__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @wordpress/element */ "@wordpress/element");
/* harmony import */ var _wordpress_element__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! react */ "react");
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(react__WEBPACK_IMPORTED_MODULE_1__);


var __ = wp.i18n.__;
var registerBlockType = wp.blocks.registerBlockType;
var RichText = wp.editor.RichText;
registerBlockType("mc-blocks/card", {
  title: __("Card", "mc-blocks"),
  icon: "id",
  category: "widgets",
  attributes: {
    cardHeading: {
      type: "string",
      source: "text",
      selector: ".card-heading"
    },
    cardTopContent: {
      type: "string",
      source: "html",
      selector: ".card-top-content"
    },
    cardBottomContent: {
      type: "string",
      source: "html",
      selector: ".card-bottom-content"
    }
  },
  styles: [{
    name: "default",
    label: __("Vertical", "mc-blocks"),
    isDefault: true
  }, {
    name: "horizontal",
    label: __("Horizontal", "mc-blocks")
  }],
  edit: function edit(props) {
    var _props$attributes = props.attributes,
        cardHeading = _props$attributes.cardHeading,
        cardTopContent = _props$attributes.cardTopContent,
        cardBottomContent = _props$attributes.cardBottomContent,
        setAttributes = props.setAttributes;

    var onChangeCardHeading = function onChangeCardHeading(newCardHeading) {
      setAttributes({
        cardHeading: newCardHeading
      });
    };

    var onChangeCardTopContent = function onChangeCardTopContent(newCardTopContent) {
      setAttributes({
        cardTopContent: newCardTopContent
      });
    };

    var onChangeCardBottomContent = function onChangeCardBottomContent(newCardBottomContent) {
      setAttributes({
        cardBottomContent: newCardBottomContent
      });
    };

    return Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("div", null, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("h3", {
      className: "card-heading"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(RichText, {
      placeholder: __("Card heading", "mc-blocks"),
      value: cardHeading,
      onChange: onChangeCardHeading
    })), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("div", {
      className: "card-top-content"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(RichText, {
      placeholder: __("Card top content", "mc-blocks"),
      onChange: onChangeCardTopContent,
      value: cardTopContent
    })), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("div", {
      className: "card-bottom-content"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(RichText, {
      placeholder: __("Card bottom content", "mc-blocks"),
      onChange: onChangeCardBottomContent,
      value: cardBottomContent
    })));
  },
  save: function save(props) {
    var _props$attributes2 = props.attributes,
        cardHeading = _props$attributes2.cardHeading,
        cardTopContent = _props$attributes2.cardTopContent,
        cardBottomContent = _props$attributes2.cardBottomContent;
    return Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("div", {
      className: "border-2 border-denim flex flex-col"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("div", {
      className: "bg-light-blue-grey p-4 flex-grow"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("h3", {
      className: "card-heading text-lg text-michigan-blue mb-2 font-bold"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(RichText.Content, {
      value: cardHeading
    })), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("p", {
      className: "card-top-content w-full"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(RichText.Content, {
      value: cardTopContent
    }))), cardBottomContent && Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("p", {
      className: "card-bottom-content bg-white p-4 mb-0 w-full"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(RichText.Content, {
      value: cardBottomContent
    })));
  }
});

/***/ }),

/***/ "./src/index.js":
/*!**********************!*\
  !*** ./src/index.js ***!
  \**********************/
/*! no exports provided */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _accordion__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./accordion */ "./src/accordion/index.js");
/* harmony import */ var _section_inner__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./section-inner */ "./src/section-inner/index.js");
/* harmony import */ var _card__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./card */ "./src/card/index.js");
/* harmony import */ var _section__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ./section */ "./src/section/index.js");
/**
 * Import blocks as components.
 */





/***/ }),

/***/ "./src/section-inner/index.js":
/*!************************************!*\
  !*** ./src/section-inner/index.js ***!
  \************************************/
/*! no exports provided */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _wordpress_element__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @wordpress/element */ "@wordpress/element");
/* harmony import */ var _wordpress_element__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! react */ "react");
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(react__WEBPACK_IMPORTED_MODULE_1__);


var __ = wp.i18n.__;
var registerBlockType = wp.blocks.registerBlockType;
var _wp$editor = wp.editor,
    RichText = _wp$editor.RichText,
    InnerBlocks = _wp$editor.InnerBlocks,
    InspectorControls = _wp$editor.InspectorControls,
    MediaUpload = _wp$editor.MediaUpload;
var _wp$components = wp.components,
    PanelBody = _wp$components.PanelBody,
    Button = _wp$components.Button;
registerBlockType("mc-blocks/section-inner", {
  title: __("Section with Inner Blocks", "mc-blocks"),
  icon: "feedback",
  category: "widgets",
  attributes: {
    sectionHeading: {
      type: "string",
      source: "html",
      selector: ".section-heading"
    },
    sectionContent: {
      type: "array",
      source: "children",
      selector: ".section-content"
    },
    sectionBackgroundImage: {
      type: "string",
      source: "attribute",
      selector: ".section-background",
      attribute: "data-src"
    }
  },
  styles: [{
    name: "default",
    label: __("Standard", "mc-blocks"),
    isDefault: true
  }, {
    name: "stacked",
    label: __("Stacked", "mc-blocks")
  }],
  edit: function edit(props) {
    var _props$attributes = props.attributes,
        sectionHeading = _props$attributes.sectionHeading,
        sectionContent = _props$attributes.sectionContent,
        sectionBackgroundImage = _props$attributes.sectionBackgroundImage,
        setAttributes = props.setAttributes;

    var onChangeSectionHeading = function onChangeSectionHeading(newSectionHeading) {
      setAttributes({
        sectionHeading: newSectionHeading
      });
    };

    var onChangeSectionContent = function onChangeSectionContent(newSectionContent) {
      setAttributes({
        sectionContent: newSectionContent
      });
    };

    var onImageSelect = function onImageSelect(newImage) {
      setAttributes({
        sectionBackgroundImage: newImage.sizes.full.url
      });
    };

    return [Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(InspectorControls, null, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(PanelBody, {
      title: __("Background image", "mc-blocks")
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("img", {
      src: sectionBackgroundImage,
      alt: ""
    }), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(MediaUpload, {
      onSelect: onImageSelect,
      value: sectionBackgroundImage,
      render: function render(_ref) {
        var open = _ref.open;
        return Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(Button, {
          onClick: open
        }, "Change image");
      }
    }))), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("div", null, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("h3", {
      className: "section-heading"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(RichText, {
      placeholder: __("Section heading", "mc-blocks"),
      value: sectionHeading,
      onChange: onChangeSectionHeading
    })), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("div", {
      className: "section-content"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(RichText, {
      multiline: "p",
      placeholder: __("Section content", "mc-blocks"),
      onChange: onChangeSectionContent,
      value: sectionContent
    })), typeof props.insertBlocksAfter !== "undefined" ? Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(InnerBlocks, {
      allowedBlocks: ["core/table", "mc-blocks/card"]
    }) : Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("div", null))];
  },
  save: function save(props) {
    var _props$attributes2 = props.attributes,
        sectionHeading = _props$attributes2.sectionHeading,
        sectionContent = _props$attributes2.sectionContent,
        sectionBackgroundImage = _props$attributes2.sectionBackgroundImage;
    return Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("div", {
      className: "py-16 section-background full-width",
      "data-src": sectionBackgroundImage,
      style: sectionBackgroundImage ? "background: url(".concat(sectionBackgroundImage, ") no-repeat center/cover") : ""
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("div", {
      className: "contained"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("h2", {
      className: "section-heading text-michigan-blue"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(RichText.Content, {
      value: sectionHeading
    })), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("div", {
      className: "flex"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("div", {
      className: "section-content mr-12 w-1/4"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(RichText.Content, {
      multiline: "p",
      value: sectionContent
    })), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("div", {
      className: "inner-blocks flex w-3/4 flex-grow"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(InnerBlocks.Content, null)))));
  }
});

/***/ }),

/***/ "./src/section/index.js":
/*!******************************!*\
  !*** ./src/section/index.js ***!
  \******************************/
/*! no exports provided */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _wordpress_element__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @wordpress/element */ "@wordpress/element");
/* harmony import */ var _wordpress_element__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! react */ "react");
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(react__WEBPACK_IMPORTED_MODULE_1__);


var __ = wp.i18n.__;
var registerBlockType = wp.blocks.registerBlockType;
var _wp$editor = wp.editor,
    RichText = _wp$editor.RichText,
    InnerBlocks = _wp$editor.InnerBlocks,
    InspectorControls = _wp$editor.InspectorControls,
    MediaUpload = _wp$editor.MediaUpload,
    URLInputButton = _wp$editor.URLInputButton;
var _wp$components = wp.components,
    PanelBody = _wp$components.PanelBody,
    Button = _wp$components.Button;
registerBlockType("mc-blocks/section", {
  title: __("Section", "mc-blocks"),
  icon: "feedback",
  category: "widgets",
  attributes: {
    sectionHeading: {
      type: "string",
      source: "html",
      selector: ".section-heading"
    },
    sectionContent: {
      type: "string",
      source: "html",
      multiline: "p",
      selector: ".section-content"
    },
    sectionList: {
      type: "string",
      source: "html",
      multiline: "li",
      selector: ".section-list"
    },
    sectionBackgroundImage: {
      type: "string"
    },
    sectionCtaText: {
      type: "string",
      source: "text",
      selector: ".section-cta"
    },
    sectionCtaUrl: {
      type: "string",
      source: "attribute",
      selector: ".section-cta",
      attribute: "href"
    }
  },
  edit: function edit(props) {
    var _props$attributes = props.attributes,
        sectionHeading = _props$attributes.sectionHeading,
        sectionContent = _props$attributes.sectionContent,
        sectionBackgroundImage = _props$attributes.sectionBackgroundImage,
        sectionCtaUrl = _props$attributes.sectionCtaUrl,
        sectionCtaText = _props$attributes.sectionCtaText,
        sectionList = _props$attributes.sectionList,
        setAttributes = props.setAttributes;

    var onChangeSectionHeading = function onChangeSectionHeading(newSectionHeading) {
      setAttributes({
        sectionHeading: newSectionHeading
      });
    };

    var onChangeSectionContent = function onChangeSectionContent(newSectionContent) {
      setAttributes({
        sectionContent: newSectionContent
      });
    };

    var onBackgroundImageSelect = function onBackgroundImageSelect(newBackgroundImage) {
      setAttributes({
        sectionBackgroundImage: newBackgroundImage.sizes.full.url
      });
    };

    var onChangeSectionCtaUrl = function onChangeSectionCtaUrl(newSectionCtaUrl) {
      setAttributes({
        sectionCtaUrl: newSectionCtaUrl
      });
    };

    var onChangeSectionCtaText = function onChangeSectionCtaText(newSectionCtaText) {
      setAttributes({
        sectionCtaText: newSectionCtaText
      });
    };

    var onChangeSectionList = function onChangeSectionList(newSectionList) {
      setAttributes({
        sectionList: newSectionList
      });
    };

    return [Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(InspectorControls, null, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(PanelBody, {
      title: __("Background image", "mc-blocks")
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("img", {
      src: sectionBackgroundImage,
      alt: ""
    }), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(MediaUpload, {
      onSelect: onBackgroundImageSelect,
      value: sectionBackgroundImage,
      render: function render(_ref) {
        var open = _ref.open;
        return Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(Button, {
          onClick: open
        }, "Change image");
      }
    }))), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("div", null, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("h3", {
      className: "section-heading"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(RichText, {
      placeholder: __("Section heading", "mc-blocks"),
      value: sectionHeading,
      formattingControls: [],
      onChange: onChangeSectionHeading
    })), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("div", {
      className: "section-content"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(RichText, {
      multiline: "p",
      placeholder: __("Section content", "mc-blocks"),
      onChange: onChangeSectionContent,
      value: sectionContent
    })), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(RichText, {
      tagName: "ul",
      multiline: "li",
      className: "section-list",
      placeholder: __("List items", "mc-blocks"),
      onChange: onChangeSectionList,
      value: sectionList
    }), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(RichText, {
      placeholder: __("CTA button text", "mc-blocks"),
      value: sectionCtaText,
      onChange: onChangeSectionCtaText
    }), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(URLInputButton, {
      className: "section-cta-url",
      label: __("CTA URL", "mc-blocks"),
      onChange: onChangeSectionCtaUrl,
      url: sectionCtaUrl
    }))];
  },
  save: function save(props) {
    var _props$attributes2 = props.attributes,
        sectionHeading = _props$attributes2.sectionHeading,
        sectionContent = _props$attributes2.sectionContent,
        sectionBackgroundImage = _props$attributes2.sectionBackgroundImage,
        sectionCtaUrl = _props$attributes2.sectionCtaUrl,
        sectionCtaText = _props$attributes2.sectionCtaText,
        sectionList = _props$attributes2.sectionList;
    return Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("div", {
      className: "py-16 section-background full-width",
      style: sectionBackgroundImage ? "background: url(".concat(sectionBackgroundImage, ") no-repeat center/cover") : ""
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("div", {
      className: "section-wrapper contained flex"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("div", {
      className: "section-text w-1/2"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("h2", {
      className: "section-heading"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(RichText.Content, {
      value: sectionHeading
    })), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("div", {
      className: "section-content"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(RichText.Content, {
      multiline: "p",
      value: sectionContent
    })), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("ul", {
      className: "section-list"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(RichText.Content, {
      multiline: "li",
      value: sectionList
    })), sectionCtaUrl && Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("a", {
      className: "section-cta button",
      href: sectionCtaUrl
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(RichText.Content, {
      value: sectionCtaText
    })))));
  }
});

/***/ }),

/***/ "@wordpress/element":
/*!******************************************!*\
  !*** external {"this":["wp","element"]} ***!
  \******************************************/
/*! no static exports found */
/***/ (function(module, exports) {

(function() { module.exports = this["wp"]["element"]; }());

/***/ }),

/***/ "react":
/*!*********************************!*\
  !*** external {"this":"React"} ***!
  \*********************************/
/*! no static exports found */
/***/ (function(module, exports) {

(function() { module.exports = this["React"]; }());

/***/ })

/******/ });
//# sourceMappingURL=index.js.map