import $ from "jquery";
import MobileMenu from './modules/MobileMenu';
import RevealOnScroll from './modules/RevealOnScroll';
var mobileMenu = new MobileMenu();
new RevealOnScroll($(".featureItem"),"85%");
new RevealOnScroll($(".reviews"),"60%");
