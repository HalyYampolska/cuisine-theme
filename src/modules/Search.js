import $ from 'jquery';

class Search {
    // Describe and create 
    constructor() {
        this.addSearchHTML();
        this.resultsDiv = $("#search-overlay__results");
        this.openButton = $(".js-search-trigger");
        this.closeBotton = $(".search-overlay__close");
        this.searchOverlay = $(".search-overlay");
        this.searchField = $("#search-term");
        this.events();
        this.isSpinnerVisible = false;
        this.previousValue = '';
        this.typyngTimer = null;
    }
    // Events 
    events() {
        this.openButton.on("click", this.openOverlay.bind(this));
        this.closeBotton.on("click", this.closeOverlay.bind(this));
        this.searchField.on("keyup", this.typingLogic.bind(this));
        $(document).on("keydown", this.keyPressDispatcher.bind(this));
    }
    // Methods 
    typingLogic() {
        if (this.searchField.val() != this.previousValue) {
            clearTimeout(this.typyngTimer);

            if (this.searchField.val()) {
                if (!this.isSpinnerVisible) {
                    this.resultsDiv.html('<div class="spinner-loader"></div>');
                    this.isSpinnerVisible = true;
                }
                this.typyngTimer = setTimeout(this.getResults.bind(this), 750);
            } else {
                this.resultsDiv.html('');
                this.isSpinnerVisible = false;
            }
        
        }
        
        this.previousValue = this.searchField.val();
    }

    getResults() {
        $.getJSON(cuisineData.root_url + '/wp-json/wp/v2/posts?search=' + this.searchField.val(), posts =>  {
          
            this.resultsDiv.html(`
          <h2 class="heading search-overlay__section-title">General Info</h2>
          ${posts.length ? '<ul class="link-list min-list">' : '<p>No info matches this search</p>'}
            ${posts.map(item => `<li><a href="${item.link}">${item.title.rendered}</a></li>`).join('')}
          ${posts.length ? '</ul>' : ''}
          `);
          this.isSpinnerVisible = false;
        });
      }
 
    openOverlay() {
        this.searchOverlay.addClass("search-overlay--active");
        $("body").addClass("body-no-scroll");
    }

    closeOverlay() {
        this.searchOverlay.removeClass("search-overlay--active");
        $("body").removeClass("body-no-scroll");
    }

    keyPressDispatcher(e) {
        if (e.keyCode === 27) {
            this.closeOverlay();
        } 
    }

    addSearchHTML() {
        $("body").append(`
        <div class="search-overlay">
    <div class="search-overlay__top ">
        <i class="fa fa-search fa-icon search-overlay__icon space-between" area-hidden-"true"></i>
        <input type="text" class="search-term" placeholder="What are you looking for?" id="search-term">
        <i class="fa fa-window-close fa-icon search-overlay__close space-between" area-hidden-"true"></i>
    </div>
    <div class="search-container">
        <div id="search-overlay__results"></div>
    </div>
</div>
        `);
    }
}

export default Search;
