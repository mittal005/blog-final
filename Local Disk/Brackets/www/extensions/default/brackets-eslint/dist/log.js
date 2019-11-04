define(function (require, exports, module) {
    'use strict';
    var EXTENSION_NAME = 'brackets-eslint';
    function log(level, msgs) {
        return console[level].apply(console, ['[' + EXTENSION_NAME + ']'].concat(msgs));
    }
    exports.info = function () {
        var msgs = [];
        for (var _i = 0; _i < arguments.length; _i++) {
            msgs[_i] = arguments[_i];
        }
        return log('log', msgs);
    };
    exports.error = function () {
        var msgs = [];
        for (var _i = 0; _i < arguments.length; _i++) {
            msgs[_i] = arguments[_i];
        }
        return log('error', msgs);
    };
});
