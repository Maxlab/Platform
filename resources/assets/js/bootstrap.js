window.$ = window.jQuery = require('jquery');
require('jquery-ui-bundle');


require('bootstrap');


require('bootstrap-tagsinput');


window.Vue = require('vue');
require('vue-resource');


$.fn.chosen = require('chosen');

require('summernote');

window.Dropzone = require('dropzone');
Dropzone.autoDiscover = false;


require('nestable');

window.moment = require('moment');


$.fn.datetimepicker = require('eonasdan-bootstrap-datetimepicker');


var ace = require('brace');
require('brace/mode/javascript');
require('brace/theme/monokai');


require('./modules/chosen');
require('./modules/datetimepicker');
require('./modules/leftMenu');
require('./modules/open-click');
require('./modules/upload');
require('./modules/wysiwyg');
