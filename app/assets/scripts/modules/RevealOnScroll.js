import $ from 'jquery';
import waypoints from '../../../../node_modules/waypoints/lib/noframework.waypoints';
class RevealOnScroll {
	constructor(els,offset){
		this.itemsToReveal=els;
		this.offsetPerc=offset;
		this.hideInitially();
		this.createWaypoints();
		
	}
	hideInitially(){
		this.itemsToReveal.addClass("revealItem");
	}
	createWaypoints(){
		var that=this;
		this.itemsToReveal.each(function(){
			var currentItem=this;
			new Waypoint({
				element:currentItem,
				handler:function(){
					$(currentItem).addClass("revealItem--isVisible");
				},
				offset:that.offsetPerc
			});
		});
	}
}
export default RevealOnScroll;