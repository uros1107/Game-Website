
/*--------- Wow Js ----------*/

new WOW().init();


$(document).ready(function(){

    // Accordion Js  -----------------------------

    $('.ct_accordion_lable').click(function(){

        $(this).parents('.ct_accordion_wrap').siblings().find('.ct_accordion_lable').removeClass('ct_visiable');
        $(this).toggleClass('ct_visiable');

        $(this).parents('.ct_accordion_wrap').siblings().removeClass('accordian_open');
        $(this).parents('.ct_accordion_wrap').toggleClass('accordian_open');

        $(this).parents('.ct_accordion_wrap').toggleClass('accordion_close');

        $(this).siblings().find('.ct_accordion_info').slideUp();
        $(this).parents('.ct_accordion_wrap').siblings().find('.ct_accordion_info').slideUp();  
        $(this).parents('.ct_accordion_wrap').find('.ct_accordion_info').slideToggle();


    });


    // Popup JQuery  -----------------------------

    $(".log_in").click(function() {
        $(this).toggleClass('register_btn');
        if ($(this).hasClass('register_btn')) {
    // $(".log_in").text("Register");
    $(".register-form").parents('.register_content').removeClass('hide_register');                 
    $(".login-form").parents('.register_content').addClass('show_login');


    } else {

    // $(".log_in").text("Log In");
    $(".login-form").parents('.register_content').removeClass('show_login');
    $(".register-form").parents('.register_content').addClass('hide_register');

    }
    });

    //Sidebar ----------------------

    // Hide submenus
    $('#body-row .collapse').collapse('hide'); 

    // Collapse/Expand icon
    $('#collapse-icon').addClass('chevron-left'); 

    // Collapse click
    $('[data-toggle=sidebar-colapse]').click(function() {
        SidebarCollapse();
    });

    function SidebarCollapse () {   
        $('.menu-collapsed').toggleClass('d-none');
        $('.sidebar-submenu').toggleClass('d-none');
        $('.submenu-icon').toggleClass('d-none');
        $('#sidebar-container').toggleClass('sidebar-expanded sidebar-collapsed');
        $('.main-sidebar-footer .subtext').toggleClass('d-none');

    // Collapse/Expand icon
    $('#collapse-icon').toggleClass('chevron-left chevron-right');
    }

    // Language Open
    $(".main--content-language .choose-lang").click(function(){
        $(this).toggleClass('border-open border-close');
        $('.main--content-language .select-lang').toggleClass('lang-open lang-close');
    });

    $(".mobile-menu-language .choose-lang").click(function(){
        $(this).toggleClass('border-open border-close');
        $('.mobile-menu-language .select-lang').toggleClass('lang-open lang-close');
    });



    //Sidebar End----------------------

    //mobile nav
    $(".nav-mobile-btn").click(function(){
        $("body").toggleClass("mobile-nav-open");
        $("html").toggleClass("cm-overflow");
        $("#sidebar-container").slideToggle(350);
    });

    onscroll();
    bsmodaladd();
});

$(window).resize(function(){
    onscroll();
    bsmodaladd();
});


// Boostrap MOdal only in small Device  -----------------------------

function bsmodaladd(){
    if($(window).width() < 767)
    {
        $('.comp_builder-page .spells_item a').attr('data-target','#switch-modal');
    } 
    else{
        $('.comp_builder-page .spells_item a').removeAttr('data-target');
    }
}


function onscroll(){

    if ($(window).width() <= 767) {  
        $(window).scroll(function() {    
            var scroll = $(window).scrollTop();

            if (scroll >= 150) {
                //clearHeader, not clearheader - caps H
                $(".main--content-search").addClass('search-up');
            }else{
                    $(".main--content-search").removeClass('search-up');
            }
        });
    }  

}

// runes-form dropdown ----------------------




(function($) {
    var CheckboxDropdown = function(el) {
        var _this = this;
        this.isOpen = false;
        this.areAllChecked = false;
        this.$el = $(el);
        this.$label = this.$el.find('.dropdown-label');
        this.$checkAll = this.$el.find('[data-toggle="check-all"]').first();
        this.$inputs = this.$el.find('[type="checkbox"]');

        this.onCheckBox();

        this.$label.on('click', function(e) {
            e.preventDefault();
            _this.toggleOpen();
        });

        this.$checkAll.on('click', function(e) {
            e.preventDefault();
            _this.onCheckAll();
        });

        this.$inputs.on('change', function(e) {
            _this.onCheckBox();
        });

    };

    CheckboxDropdown.prototype.onCheckBox = function() {
        this.updateStatus();
    };

    CheckboxDropdown.prototype.updateStatus = function() {
        var checked = this.$el.find(':checked');

        this.areAllChecked = false;
        this.$checkAll.html('Check All');

    };

    CheckboxDropdown.prototype.onCheckAll = function(checkAll) {
        if(!this.areAllChecked || checkAll) {
            this.areAllChecked = true;
            this.$checkAll.html('Uncheck All');
            this.$inputs.prop('checked', true);
        }
        else {
            this.areAllChecked = false;
            this.$checkAll.html('Check All');
            this.$inputs.prop('checked', false);
        }

        this.updateStatus();
    };

    CheckboxDropdown.prototype.toggleOpen = function(forceOpen) {
        var _this = this;

        // if(!this.isOpen || forceOpen) {
        //     this.isOpen = true;
        //     this.$el.addClass('on');
        //     $(document).on('click', function(e) {
        //         if(!$(e.target).closest('[data-control]').length) {
        //             _this.toggleOpen();
        //         }
        //     });
        // }
        // else {
        //     this.isOpen = false;
        //     this.$el.removeClass('on');
        //     $(document).off('click');
        // }
    };

    var checkboxesDropdowns = document.querySelectorAll('[data-control="checkbox-dropdown"]');
    for(var i = 0, length = checkboxesDropdowns.length; i < length; i++) {
        new CheckboxDropdown(checkboxesDropdowns[i]);
    }
})(jQuery);

$('[data-control="checkbox-dropdown"]').click(function(){
    $(this).siblings().removeClass('on');
    $(this).toggleClass('on');
});
$('[data-control="checkbox-dropdown"] .dropdown-list').click(function(e) {
    // Do something
    e.stopPropagation();
 });