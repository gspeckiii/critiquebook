import $ from 'jquery';
class Modal{
	constructor(){
		this.openModalButton = $(".openModal");
		this.modal=$(".modal");
		this.closeModalButton=$(".modal__close");
		this.events();

	}
	events(){

		//clicking open modal button
		this.openModalButton.click(this.openModal.bind(this));
		//clicking close modal button
		this.closeModalButton.click(this.closeModal.bind(this));
		//push any key
		$(document).keyup(this.keypressHandler.bind(this));
	}
	keypressHandler(e){
		if(e.keyCode==27){
			this.closeModal();
		}


	}
	closeModal(){
		this.modal.removeClass("modal--is-visible");

	}
	openModal(){
		this.modal.addClass("modal--is-visible");
		
		return false;
	}
}
export default Modal;