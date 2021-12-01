require("../sass/style.scss");

require("./vendor/picturefill");
require("./vendor/swiper.min");


(function ($) {

    if($('.use_cases_container').length > 0){
        require("./custom/custom");
    }

    


})(jQuery);