//JQuery
import $ from 'jquery';

class Search {
    // 1. Describe and create/initiate our object
    constructor() {
        this.addSearchHTML();
        this.resultDiv = $("#search-overlay__results");
        this.openButton = $(".js-search-trigger");
        this.closeButton = $(".search-overlay__close");
        this.searchOverlay = $(".search-overlay");
        this.searchField = $("#search-term");
        this.events();
        this.isOverlayOpen = false;
        this.isSpinnerVisible = false;
        this.previousValue;
        this.typingTimer;

    }

    //2. Events
    events() {
        this.openButton.on("click", this.openOverlay.bind(this));
        this.closeButton.on("click", this.closeOverlay.bind(this));
        $(document).on("keydown", this.keyPressDispatcher.bind(this));
        this.searchField.on("keyup", this.typingLogic.bind(this));
    }


    //3. methods (function, action...)
    typingLogic() {
        if (this.searchField.val() != this.previousValue) {
            clearTimeout(this.typingTimer);

            if (this.searchField.val()) {

                if (!this.isSpinnerVisible) {
                    this.resultDiv.html('<div class="spinner-loader"></div>');
                    this.isSpinnerVisible = true;
                }
                this.typingTimer =
                    setTimeout(this.getResults.bind(this), 700);

            } else {
                this.resultDiv.html('');
                this.isSpinnerVisible = false;
            }
        }

        this.previousValue = this.searchField.val();
    }
    getResults() {
        $.getJSON(universityData.root_url + '/wp-json/wp/v2/posts?search=' + this.searchField.val(),posts => {
            $.getJSON(universityData.root_url + '/wp-json/wp/v2/pages?search=' + this.searchField.val(), pages => {
                var combinedResults = posts.concat(pages);
                this.resultDiv.html(`
                <h2 class="search-overlay__section-title">Your Result</h2>
                ${combinedResults.length ? '<ul class="link-list min-list">' : '<p>Sorry, No result found...</p>'}
                  ${combinedResults.map(item => `
                  <li><a href="${item.link}">${item.title.rendered}</a></li>
                  ` ).join('')}
                  ${combinedResults.length ?  '</ul>' : ''}
              `);
              this.isSpinnerVisible = false;
            });
            });
    }

    keyPressDispatcher(e) {
        if (e.keyCode == 83 && !this.isOverlayOpen
            && !$("input, textarea").is(':focus')) {
            this.openOverlay();
        }
        if (e.keyCode == 27 && this.isOverlayOpen) {
            this.closeOverlay();
        }
    }

    openOverlay() {
        this.searchOverlay.addClass("search-overlay--active");
        $("body").addClass("body-no-scroll");
        this.searchField.val('');
            setTimeout(() => this.searchField.focus(), 301);
        console.log("hey am open");
        this.isOverlayOpen = true;

    }

    closeOverlay() {
        this.searchOverlay.removeClass("search-overlay--active");
        $("body").removeClass("body-no-scroll");
        console.log("Haa am closed");
        this.isOverlayOpen = false;
    }

    addSearchHTML() {
        $('body').append(`
        
        <div class="search-overlay">
        <div class="search-overlay__top">
        <div class="container">
    <i class="fa fa-search search-overlay__icon " aria-hidden="true"></i>
    <input type="text" class="search-term" placeholder="Tell me what you want?" 
        id="search-term">

    <i class="fa fa-window-close search-overlay__close " aria-hidden="true"></i>

    </div>
    </div>

    <div class="container">
    <div id="search-overlay__results"></div>
</div>
</div>
        
        `)
    }

}
export default Search;



/*
//Vanilla Javascript
class Search {
    //describe and initiate object
    constructor(){
        this.openButton = document.querySelector('.js-search-trigger');
        this.closeButton = document.querySelector('.search-overlay__close');
        this.searchOverlay = document.querySelector('.search-overlay');
        this.searchField = document.getElementById('search-term');
        this.resultsDiv = document.getElementById('search-overlay__results');
        this.allInputs = document.querySelectorAll('input, textarea');
 
        this.overlayOpen = false;
        this.spinnerVisible = false;
        this.timer;
        this.oldValue;
 
        this.events();
    }
 
    //events
    events = () => {
        this.openButton.addEventListener('click', this.openOverlay);
        this.closeButton.addEventListener('click', this.closeOverlay);
        document.addEventListener('keydown', this.keyPressDispatcher);
        this.searchField.addEventListener('keyup', this.typingLogic);
 
    };
 
    //methods (functions)
    openOverlay = () =>{
        this.searchOverlay.classList.add('search-overlay--active');
        document.querySelector('body').classList.add('body-no-scroll');
        this.overlayOpen = true;
    };
 
    closeOverlay = () =>{
        this.searchOverlay.classList.remove('search-overlay--active');
        document.querySelector('body').classList.remove('body-no-scroll');
        this.overlayOpen = false;
    };
 
    keyPressDispatcher = (key) =>{
            if(key.key === 's' && !this.overlayOpen && this.checkFocus(this.allInputs)) this.openOverlay();
            if(key.key === 'Escape' && this.overlayOpen && this.checkFocus(this.allInputs)) this.closeOverlay();
    }
 
    typingLogic = () =>{
 
        if (this.searchField.value != this.oldValue ){
            clearTimeout(this.timer);
 
            if (this.searchField.value){
                if(!this.spinnerVisible){
                    this.resultsDiv.innerHTML = '<div class="spinner-loader"></div>';
                    this.spinnerVisible = true;
                }
                this.timer = setTimeout(this.getResults, 1000);
            }else{
                this.resultsDiv.innerHTML = '';
                this.spinnerVisible = false;
            }
        	
        }
    	
        this.oldValue = this.searchField.value; 
    }
 
    getResults= () =>{
        this.resultsDiv.innerHTML = 'Search Results';
        this.spinnerVisible = false;
    }
 
    checkFocus = (all) =>{
        //loops through all inputs
        for (const el of all) {
            //checks if any of the inputs have focus
            //returns false as soon as it finds focused elements
            if( document.activeElement == el ) return false;
        }
        //else return true
        return true;
    }
 
}
 export default Search; */