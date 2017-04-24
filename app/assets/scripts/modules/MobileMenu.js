import $ from 'jquery';
class MobileMenu{
	constructor(){
		this.header=$(".header");
		this.menuIcon=$(".header__menuIcon");
		this.menuContent=$(".header__menu");
		this.events();
	}

	events() {
		this.menuIcon.click(this.toggleTheMenu.bind(this));	
	}

	toggleTheMenu(){

		this.menuContent.toggleClass("header__menu--visible");
		this.header.toggleClass("header--expand");
		this.menuIcon.toggleClass("header__menuIcon--closeX");
	}

}
export default MobileMenu;