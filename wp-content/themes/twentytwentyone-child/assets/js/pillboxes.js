$(document).ready(() => {

    console.log('ready');

    // instantiate our class
// we might have to grab this information from ACF through api call or maybe we attach it to window object. 
const boxes = [
    {
        id: 1, 
        name: 'glass',
        img: 'background.png',
        backgroundColor: '#FFF'

    },
    {
        id: 2, 
        name: 'boxes',
        img: 'background.png',
        backgroundColor: '#6aafa2'

    },
    {
        id: 3, 
        name: 'tins',
        img: 'background.png',
        backgroundColor: '#1c7f6d'

    },
    {
        id: 4, 
        name: 'mylar bags',
        img: 'background.png',
        backgroundColor: '#066a58'

    },
    {
        id: 5,
        name: 'plastics',
        img: 'background.png',
        backgroundColor: '#055043'

    },
    {
        id: 6,
        name: 'exit plastics',
        img: 'background.png',
        backgroundColor: '#02312a'

    }

];
    
const pillboxes = new Pillbox(boxes);

});


class Pillbox {
    constructor(fields) {
        this.fields = fields;
        console.log('this.fields', this.fields)
        this.pillBoxTarget = $('#pillbox');
        this.pillboxTargetMobile = $('#pillbox-mobile')
        this.containerWidth = this.pillBoxTarget.width();
        this.svgClose = `<svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M1.15806 1.29593L13.8419 13.704" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M13.6144 1.2959L1.1532 13.704L13.6144 1.2959Z" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>`;
        this.breakpoint = 1350;

        if(this.breakpoint >= 1350) {
            // load pillboxes on render;
            this.fields.forEach(value => {
                this.pillBoxTarget.append(this.loadPillboxes(value));
            })
       
            // handle click events
            this.pillBoxTarget.on('click', '.box, .closeButton', this.handleBoxClick.bind(this));
            // this.pillBoxTarget.on('click', '.closeButton', this.handleBoxClose.bind(this));
        }
        

    }

    loadPillboxes(box) {
        const id = box.id;
        const name = box.name;
        const image = box.img;
        const backgroundColor = box.backgroundColor;

        return (
        `
            <div id="box-${id}" class="box" style="background-color: ${backgroundColor};">
            <div class="pillbox-name">${name}</div>
                <img src="${image}" alt="" />
                <div class="closeButton">${this.svgClose}</div>
            </div>
        `
        )
    }

    pillBoxReset() {        
        const boxes = $('#pillbox .box');

        $.each(boxes, (index, value) => {
            $(value).removeClass('active');
        })
    }

    handleBoxClick(event) {
        if(event.currentTarget.classList[0] == 'closeButton') {
            this.handleBoxClose(event)
            event.stopPropagation();
            return;
        }
        

        const targetBox = $(event.target).closest('.box');
        if(targetBox.hasClass('active')) return false;

       this.pillBoxReset();

       targetBox.addClass('active')

        
    }

    handleBoxClose(event) {
        $(event.target).closest('.box').removeClass('active')
    }

}


    