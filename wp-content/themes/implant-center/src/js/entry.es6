require("../sass/style.scss");

require("./vendor/picturefill");

require("./custom/custom");






(function ($) {

    if($('.use_cases_container').length > 0){
        require("./custom/custom");
    }

})(jQuery);