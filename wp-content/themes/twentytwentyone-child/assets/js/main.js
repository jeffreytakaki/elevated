

$(document).ready(() => {
	$('span#hero-overlay-target').click(event => toggleOverlay(event))
})


const toggleOverlay = (event) => {
    const isMobile = (window.innerWidth < 800);
	const overlays = $('#hero-overlay .overlay'); //should be 3 of them
	$('#hero-overlay').toggleClass('active');
	
	if(!$('#hero-overlay').hasClass('active')) {
		$('.overlay').removeAttr('style')
		return false;
	}

    if(isMobile) {

        const windowHeight = $(window).height();

        let sectionWindow = (101.5/3);
    
        $.each(overlays, (key, value) => {
            const topPosition = key*sectionWindow;
            const topPositionPercent = `${topPosition}%`
        
            setTimeout(() => {
                $(value).css("top", topPositionPercent)
                $(value).css("visibility", 'visible')
            }, key * 500)
            
        })
    
    } else {

        const windowWidth = $(window).width();
        let sectionWindow = (101.5/3);
    
        $.each(overlays, (key, value) => {
            const leftPosition = key*sectionWindow;
            const leftPositionPercent = `${leftPosition}%`
        
            setTimeout(() => {
                $(value).css("left", leftPositionPercent)
                $(value).css("visibility", 'visible')
    
            }, key * 500)
            
        })
    
    }


	
}

