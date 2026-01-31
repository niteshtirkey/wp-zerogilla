jQuery(document).ready(function($) {
    let currentTab = 0;
    const tabs = $('.service-tab');
    const images = $('.service-image');
    const totalTabs = tabs.length;
    let interval;

    tabs.each(function() {
        $(this).append('<div class="progress-bar"><div class="progress-fill"></div></div>');
    });

    function showTab(index) {
        tabs.removeClass('active');
        images.removeClass('active');
        $('.progress-fill').stop().css('width', '0%');
        
        tabs.eq(index).addClass('active');
        images.eq(index).addClass('active');
        
        tabs.eq(index).find('.progress-fill').animate({width: '100%'}, 5000);
    }

    function nextTab() {
        currentTab = (currentTab + 1) % totalTabs;
        showTab(currentTab);
    }

    showTab(0);
    interval = setInterval(nextTab, 5000);

    $('.service-tabs').hover(
        function() { clearInterval(interval); },
        function() { interval = setInterval(nextTab, 5000); }
    );

    tabs.click(function() {
        currentTab = $(this).index();
        showTab(currentTab);
        clearInterval(interval);
        interval = setInterval(nextTab, 5000);
    });
});